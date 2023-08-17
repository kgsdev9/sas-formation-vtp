<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use App\Models\Order;
use App\Models\Course;
use CinetPay\CinetPay;
use App\Models\Category;
use App\Models\Formateur;
use Illuminate\Http\Request;
use App\Services\CourseService;
use App\Services\TeacherService;
use App\Services\CategoryService;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $courseService ;
    protected $categoryService;
    protected $teacherService;
    public $codeCommande ;


    public function __construct(CourseService $courseService, CategoryService $categoryService, TeacherService $teacherService)
    {
        $this->courseService = $courseService ;
        $this->categoryService = $categoryService ;
        $this->teacherService = $teacherService ;
        $this->codeCommande = rand(1230, 15000).'SAS-FORMATION' ;
    }


    public function home() {
        return view('welcome', [
        'allCourse' => $this->courseService->all(),
        'randomCourse' => $this->courseService->randomCourse(),
        'teacherAll' => $this->teacherService->all(),
        'category' => $this->categoryService->categoryTakeRandom(),
        'enVogue' => $this->categoryService->categoryenVogue()
        ]);
    }


    public function homeCategory() {

        $category = Category::paginate(18);
        return view('home.categoryHome', compact('category'));
    }


    public function boutiqueFormateur($slug) {
        $ec = Formateur::where('slug', $slug)->first();
        $name =  $ec->fullname ;
        $image = $ec->avatar;

        $url = URL::current();

        $shareComponent = \Share::page(
           $url
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();



        $query = Course::where('formateur_id', $ec->id)->get();

        return view('home.boutiqueFormateur', compact('query', 'name', 'image', 'shareComponent'));
    }


    /**
     * Display a listing of the resource.
     */
    public function annuaireFormation()
    {
        return view('home.formation-home', [
            'allCourses' => $this->courseService->all(),
            'categories'=> Category::all(),
            'level'=> Level::all()
         ]);

    }


    public function courseByCategory($id) {
        $course = Course::where('category_id' ,$id)->get();
        return view('home.categoryFormation',compact('course'));
    }

    public function commande($id) {

        if(Auth::check())  {
            $course = Course::find($id);
        } else {
            return redirect()->route('auth.login');
        }

        return view('payment.payement', compact('course'));
    }


    public function detailCourse($id) {
        $course = Course::where('slug', $id)->first();


         return view('home.detailFormation', compact('course'));


    }



     public function annuaireFormateur() {
        return view('home.formateur-home', [
            'allFormateurs' => $this->teacherService->all()
        ]);
     }

     public function ordersListe(){
        $commande = Order::where('user_id', Auth::user()->id)->get();
        return view('profiledashboard.orders.liste', compact('commande'));
     }



     public function cancelPayment() {
        return redirect()->route('cancel.payment');
     }



     public function createOrders(Request $request){

        Order::create([
            'codeCommande' => $this->codeCommande,
            'fullname' => Auth::user()->fullname,
            'phone' => Auth::user()->phone,
            'amount' => $request->input('prix'),
            'adresse' =>Auth::user()->adresse,
            'email'=> Auth::user()->email,
            'course_id' => $request->input('course_id'),
            'user_id' => Auth::user()->id,
            ]);
            $data = array(
                'merchantId' => "PP-F2197",
                'amount' => $request->prix * 650,
                'description' => $request->title,
                'channel' => "CARD",
                'countryCurrencyCode' => "952",
                'referenceNumber' => "REF-".time(),
                'customerEmail' => Auth::user()->email,
                'customerFirstName' => Auth::user()->name,
                'customerLastname' => Auth::user()->fullname,
                'customerPhoneNumber' => Auth::user()->phone,
                'notificationURL' => route('success.payment'),
                'returnURL' => route('cancel.payment'),
                'returnContext' => $request->title,
            );

            $data = json_encode($data);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.paiementpro.net/webservice/onlinepayment/init/curl-init.php");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            $response = curl_exec($ch);
            $obj = json_decode($response);
            $urlPayement = $obj->url ;
            return redirect()->to($urlPayement);
            // curl_close($ch);

        }


     }












