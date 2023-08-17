<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GestionCategoryController extends Controller
{

    protected $categoryService ;


        public function __construct(CategoryService $categoryService)
        {
            $this->categoryService  = $categoryService ;
            $this->middleware(['admin', 'auth']);
        }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.liste', [
            'category' => $this->categoryService->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.liste');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $pathImage= time(). '_'. $file->getClientOriginalName();
            $file->move(\public_path("categories/images"), $pathImage);

        }

        Category::create([
            'name' => $request->input('name'),
            'image' => $pathImage
        ]);
        return redirect()->route('category.index', ['success', true]);
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
    public function edit(Category $category)
    {



        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Category $category)
    {

        if($request->hasFile('image')) {
            $chemin = 'categories/images/'.$category->image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('categories/images//' , $filename);
            $category->image  = $filename;
         }

        $category->name = $request->input('name');
        $category->update();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
