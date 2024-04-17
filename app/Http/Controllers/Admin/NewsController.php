<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Helper\Helper;
use App\Models\Country;
use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allNews = News::all();
        return view('backend.components.news.index', compact('allNews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $categories = Category::all();
        return view('backend.components.news.create', compact('countries','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'user_id'=>'required',
        //     'category_id'=>'required',
        //     'country_id'=>'required',
        //     'title'=>'required',
        //     'content'=>'required',
            
        // ]);


         $image =$request->image;
        if($request->has('image')){
            $image->image_path = Helper::saveImage($request->file('image'),'news', 'public');
            // $image->save();
            }
       
       
        
           News::create([
            'user_id'=>Auth::user()->id,
            'category_id'=>$request->category,
            'country_id'=>$request->country,
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'content'=>$request->content,
            // 'image'=>$image,
        ]);
        
        notyf()->addSuccess('Your account has been restored.');
        return redirect()->route('admin.news.index');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('backend.components.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        // File::delete($news);
        $news->delete();

       notyf()->addSuccess('News Deleted has been successfully.');
        return redirect()->route('admin.news.index');
    }
}