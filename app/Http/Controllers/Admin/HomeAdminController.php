<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Services\CategoryService;
use App\Services\CouponService;
//l'ensemble des services liés aux rapports
use App\Services\CourseService;
use App\Services\OrderService;
use App\Services\TeacherService;


class HomeAdminController extends Controller
{

    protected $courseService ;
    protected $teacherService ;
    protected $episodeService ;
    protected $orderService ;
    protected $likeService;
    protected $postService ;
    protected $categoryService ;
    protected $userService ;
    protected $couponService ;
    protected $commentService ;
    protected $sponsoringService;



    public function __construct(CourseService $courseService, TeacherService $teacherService, CategoryService $categoryService, UserRepository $userService, CouponService $couponService, OrderService $orderService)
    {
        $this->courseService = $courseService ;
        $this->teacherService = $teacherService;
        $this->categoryService = $categoryService;
        $this->userService = $userService;
        $this->couponService = $couponService;
        $this->orderService = $orderService;
        $this->middleware(['admin', 'auth']);
    }

    /**
     * page d'accueil de l'administration.
     * compact('formations', 'courses')
     */
    public function homeAdmin()
    {
        return view('admin.index', [
            'courses' => $this->courseService->countCourse(),
            'teachers' => $this->teacherService->countTeacher(),
            'categories' => $this->categoryService->countCategory(),
            'users' => $this->userService->countUser(),
            'coupons' => $this->couponService->couponCount(),
            'orders' => $this->orderService->countOrder(),
            'allUsers' => $this->userService->all(),
            'courseRecently'=> $this->courseService->all()

        ]);
    }


}
