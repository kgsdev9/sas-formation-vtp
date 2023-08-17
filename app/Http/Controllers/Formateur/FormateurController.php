<?php

namespace App\Http\Controllers\Formateur;

use App\Models\Formateur;
use Illuminate\Http\Request;
use App\Services\RoleService;
use Illuminate\Support\Facades\DB;
use App\Mail\WelComeFormateurEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class FormateurController extends Controller
{
    protected $roleService  ;
    public function __construct(RoleService $roleService)
    {
        $this->roleService  = $roleService ;
        $this->middleware('auth');
    }
    /**
     * créer un nouveau formateur
     */
    public function createNewFormateur()
    {

        $query =  Formateur::where('id', Auth::user()->prorietaire_id)->exists();

        if($query) {

            return redirect(RouteServiceProvider::HOME);

        } else {
            return view('become.formateurs.becoming', [
                'roleAsFormteur' => $this->roleService->roleFormateur(),
             ]);
        }




    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
        'fullname' => 'required|string',
        'telephone' => 'required',
        'whattsapp' => 'required',
        'description' => 'required',
        'genre' => 'required',
        'poste' => 'required',
        'avatar' => 'required|mimes:png,jpg',
        'perfomance'=> 'required'


        ])->validate();



        // dd($request->all());


        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $photopath= time(). '_'. $file->getClientOriginalName();
            $file->move(\public_path("formateurs/images"), $photopath);

        }

        $formateur =  Formateur::create([
            'fullname' => $request->input('fullname'),
            'slug' =>$request->input('fullname'),
            'telephone' =>$request->input('telephone'),
            'whattsapp' =>$request->input('whattsapp'),
            'description' =>$request->input('description'),
            'genre' =>$request->input('genre'),
            'poste' =>$request->input('poste'),
            'avatar' =>$photopath ,
            'perfomance' =>$request->input('perfomance'),


        ]);

        DB::table('users')
        ->where('id','=',Auth::user()->id)
        ->update(['prorietaire_id'=>$formateur->id,
                  'role_id' => $this->roleService->roleFormateur()
            ]);

            return view('actions.sucessTeacher');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
