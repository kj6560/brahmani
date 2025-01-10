<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = DB::table('blog_posts')
                ->distinct()
                ->join('categories', 'blog_posts.category_id', '=', 'categories.id')
                ->select('blog_posts.id as id', 'blogposts.title as title', 'categories.name as category', 'blog_posts.active as active');

            return DataTables::of($orders)
                ->orderColumn('blog_posts.id', function ($query, $order) {
                    $query->orderBy('blog_posts.id', $order);
                })
                ->orderColumn('blogposts.title', function ($query, $order) {
                    $query->orderBy('blogposts.title', $order);
                })
                ->orderColumn('categories.name', function ($query, $order) {
                    $query->orderBy('categories.name', $order);
                })
                ->orderColumn('blog_posts.active', function ($query, $order) {
                    $query->orderBy('blog_posts.active', $order);
                })
                ->addColumn('action', function ($row) {
                    $editUrl = "/admin/blogSettings/edit/{$row->id}";
                    $deleteUrl = "/admin/blogSettings/delete/{$row->id}";
                    $disableUrl = "/admin/blogSettings/disable/{$row->id}";

                    $editButton = '';
                    $deleteButton = '';
                    $disableButton = '';

                    $editButton = "<a href='$editUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Edit</a>";
                    $disableButton = "<a href='$disableUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Disable</a>";
                    $deleteButton = "<a href='$deleteUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Delete</a>";

                    return "
                    <div class='dropdown'>
                        <button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </button>
                        <div class='dropdown-menu'>
                            $editButton
                            $disableButton
                            $deleteButton
                        </div>
                    </div>
                ";
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.blog.index',['settings' => $request->settings]);
    }
    public function createBlog(Request $request)
    {
        $blogCategories = DB::table('categories')->where('active',1)->get();
        return view('backend.blog.createBlog', ['settings' => $request->settings,'categories' => $blogCategories]);
    }
    public function storeBlogPost(Request $request)
    {
        if(!empty($request->id)){
            $blogPost = BlogPost::find($request->id);
        }else{
            $blogPost = new BlogPost();
        }

        $featured_image = $request->file('featured_image');
        if(!empty($featured_image)){
            $imageName = time() . '.' . $featured_image->getClientOriginalExtension();
            $productBanner = $featured_image->storeAs('uploads', $imageName, 'public');
            $blogPost->featured_image = $productBanner;
        }
        $blogPost->title = $request->title;
        $blogPost->slug = $this->convertToSlug($request->title);
        $blogPost->content = $request->content;
        $blogPost->category_id = $request->category_id;
        $blogPost->active = $request->active;
        $blogPost->save();

        return redirect('/admin/blogSettings')->with('success', 'Blog post created successfully');
    }
    public function convertToSlug($title)
    {
        // Convert the title to a slug
        $slug = Str::slug($title, '-');

        // Check if the slug already exists
        $count = BlogPost::where('slug', 'LIKE', "{$slug}%")->count();

        // If the slug exists, append a number to make it unique
        return $count ? "{$slug}-{$count}" : $slug;
    }
    public function editBlog(Request $request, $id)
    {
        $blogPost = BlogPost::find($id);
        $blogCategories = DB::table('categories')->where('active', 1)->get();
        return view('backend.blog.createBlog', ['settings' => $request->settings, 'blogPost' => $blogPost, 'categories' => $blogCategories]);
    }
    public function listCategories(Request $request)
    {
        if ($request->ajax()) {
            $orders = DB::table('categories')
                ->distinct();

            return DataTables::of($orders)
                ->orderColumn('id', function ($query, $order) {
                    $query->orderBy('id', $order);
                })
                ->orderColumn('name', function ($query, $order) {
                    $query->orderBy('name', $order);
                })
                ->orderColumn('slug', function ($query, $order) {
                    $query->orderBy('slug', $order);
                })
                ->orderColumn('active', function ($query, $order) {
                    $query->orderBy('active', $order);
                })
                ->addColumn('action', function ($row) {
                    $editUrl = "/admin/blogSettings/edit/{$row->id}";
                    $deleteUrl = "/admin/blogSettings/delete/{$row->id}";
                    $disableUrl = "/admin/blogSettings/disable/{$row->id}";

                    $editButton = '';
                    $deleteButton = '';
                    $disableButton = '';

                    $editButton = "<a href='$editUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Edit</a>";
                    $disableButton = "<a href='$disableUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Disable</a>";
                    $deleteButton = "<a href='$deleteUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Delete</a>";

                    return "
                    <div class='dropdown'>
                        <button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </button>
                        <div class='dropdown-menu'>
                            $editButton
                            $disableButton
                            $deleteButton
                        </div>
                    </div>
                ";
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.blog.listCategories', ['settings' => $request->settings]);
    }
    public function createCategory(Request $request)
    {
        return view('backend.blog.createCategory', ['settings' => $request->settings]);
    }
}
