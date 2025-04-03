<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\FlashSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //Main blog page
    public function blog(Request $request)
    {
       $flashSaleDate = FlashSale::first();
       if($request->has('search')){
           $blogs = Blog::where('title','like','%'.$request->search.'%')->where('status',1)->orderBy('id','DESC')->paginate(12);
       }elseif($request->has('category')){
           $category = BlogCategory::where('slug', $request->category)
           ->where('status',1)->firstOrFail();
           $blogs = Blog::where('category_id',$category->id)
           ->where('status',1)->orderBy('id','DESC')->paginate(12);
       }else{
           $blogs = Blog::where('status',1)->orderBy('id','DESC')->paginate(12);
       }
        return view('frontend.pages.blog', compact('flashSaleDate','blogs'));
    }
    public function blogDetail(string $slug)
    {
        $blog = Blog::with(['category','user','comments'])->where('slug', $slug)->where('status',1)->firstOrFail();
        $moreBlogs = Blog::with(['category'])->where('slug','!=', $slug)->where('status',1)->take(15)->get();
        $recentPosts = Blog::where('slug','!=', $slug)->where('category_id', $blog->category_id)->where('status',1)->orderBy('id','DESC')->take(12)->get();
        $blogCategories = BlogCategory::where('status',1)->get();
        $comments = $blog->comments()->paginate(20);
        $flashSaleDate = FlashSale::first();
        return view('frontend.pages.blog-detail', compact('flashSaleDate','blog','blogCategories','moreBlogs','comments','recentPosts'));
    }

    public function comment(Request $request)
    {
        $request->validate([
            'comment' => ['required', 'max:1000']
        ]);

        $comment = new BlogComment();
        $comment->user_id = auth()->user()->id;
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comment;
        $comment->save();
        toastr('Comment added successfully!', 'success', 'success');

        return redirect()->back();
    }
}
