<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\GestionCommande;
use App\Http\Controllers\Auth\ActionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Logout\LogoutController;
use App\Http\Controllers\Courses\CourseController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Episode\EpisodeController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Profles\ProfileController;
use App\Http\Controllebers\Admin\GestionUserController;
use App\Http\Controllers\Admin\GestionCouponController;
use App\Http\Controllers\Admin\GestionCourseController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Formateur\FormateurController;
use App\Http\Controllers\Admin\GestionCategoryController;
use App\Http\Controllers\Admin\GestionFormateurController;
use App\Http\Controllers\AuthSocialController;
use App\Http\Middleware\AdminMddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/commande-formation-{id}', [HomeController::class, 'commande'])->name('commande.formation');
Route::get('/course-by-category-{id}', [HomeController::class, 'courseByCategory'])->name('course.category');
Route::get('/annuaire-des-categories', [HomeController::class, 'homeCategory'])->name('home.categorie');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/annuaire-des-formations', [HomeController::class, 'annuaireFormation'])->name('formation.annuaire');
Route::get('/annuaire-des-formateurs', [HomeController::class, 'annuaireFormateur'])->name('formateur.annuaire');
Route::get('/sucess/{name}', [ActionController::class, 'registerSuccess'])->name('register.sucess');
Route::get('/register', [RegisterController::class, 'create'])->name('auth.register');
Route::post('/post/user', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/login/User', [LoginController::class, 'loginForUser'])->name('post.login');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/profiles', [DashboardController::class, 'index'])->name('dashboard.users')->middleware('auth');
Route::post('/createNewTeacher', [FormateurController::class, 'store'])->name('post.new.formateur');
Route::get('/become-teacher', [FormateurController::class, 'createNewFormateur'])->name('become.teacher');
Route::get('/profile-formateur', [ProfileController::class, 'profileFormateur'])->name('profile.formateurs');
Route::get('/formateur-store/{slug}-{id}', [HomeController::class, 'boutiqueFormateur'])->name('boutique.formateur');
Route::resource('courses', CourseController::class);
Route::get('/course/{slug}', [HomeController::class, 'detailCourse'])->name('detail.course');
Route::get('/processinPayment', [PaymentController::class , 'createNewPayment'])->name('payment.form');
Route::get('/orders/user/liste', [HomeController::class, 'ordersListe'])->name('orders.users.liste');
Route::get('/orders/{id}', [HomeController::class, 'detailCommande'])->name('orders.detail');

Route::get('/tests', function() {
    return view('actions.sucessTeacher');
});


Route::middleware([AdminMddleware::class])->group(function () {
    Route::get('/admin-orders-liste', [GestionCommande::class, 'liste'])->name('admin.orders.liste');
    Route::get('/oders/liste', [GestionCommande::class, 'liste'])->name('liste.commande');
    Route::get('/admin-dashboard', [HomeAdminController::class, 'homeAdmin'])->name('admin.dashboard');
    Route::get('/users-all-section', [GestionUserController::class, 'index'])->name('admin.all.users');
    Route::get('/formateurs/liste', [GestionFormateurController::class, 'disableTeacher'])->name('admin.teacher.disable');
    Route::get('/formateurs/view/profile/{id}', [GestionFormateurController::class, 'show'])->name('formateur.view');
    Route::get('/formateur/update-status', [GestionFormateurController::class, 'confirmatedCandidature'])->name('update.candidature');
    Route::post('/sendNotificationTest',  [GestionFormateurController::class, 'sendNotificationTest'])->name('test.confirmed');
    Route::get('/all-courses', [GestionCourseController::class, 'allCourse'])->name('all.admin.course');
    Route::get('/course/detail/{slug}-{id}', [GestionCourseController::class, 'show'])->name('admin.course.show');
});

Route::resources([
    'category' => GestionCategoryController::class,
    'coupon' => GestionCouponController::class,
    'episode'=> EpisodeController::class
]);


Route::get('/cancel-payment', [PaymentController::class, 'cancelPayment'])->name('cancel.payment');
Route::get('/sucess-payment', [PaymentController::class, 'sucessPayment'])->name('success.payment');
Route::post('/process-payment', [PaymentController::class,'initialisePayment'])->name('process.checkout');


// GoogleLoginController redirect and callback urls
Route::get('/login/{google}', [AuthSocialController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/login/{google}/callback', [AuthSocialController::class, 'handleGoogleCallback']);


Route::get('/comment-ca-marche', function() {
    return view('home.commentcamarche');
});
