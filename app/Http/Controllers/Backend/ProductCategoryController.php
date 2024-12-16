<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductCategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = DB::table('product_category')
                ->distinct()
                ->select('id', 'pro_cat_name', 'pro_cat_active');

            return DataTables::of($orders)
                ->orderColumn('id', function ($query, $order) {
                    $query->orderBy('id', $order);
                })
                ->orderColumn('pro_cat_name', function ($query, $order) {
                    $query->orderBy('pro_cat_name', $order);
                })
                ->orderColumn('pro_cat_active', function ($query, $order) {
                    $query->orderBy('pro_cat_active', $order);
                })
                ->addColumn('action', function ($row) {
                    $editUrl = "/admin/products/categories/edit/{$row->id}";
                    $deleteUrl = "/admin/products/categories/delete/{$row->id}";
                    $disableUrl = "/admin/products/categories/disable/{$row->id}";

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
        return view('backend.product_category.index');
    }
    public function create(Request $request)
    {
        return view('backend.product_category.create');
    }
    public function edit(Request $request,$id)
    {
        $product = DB::table('product_category')->where('id', $id)->first();
        return view('backend.product_category.create',['product'=>$product]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        if(!empty($data['id'])){
            $product = ProductCategory::find($data['id']);
        }else{
            $product = new ProductCategory();
        }
        $pro_cat_image = $request->file('pro_cat_image');
        if(!empty($pro_cat_image)){
            $imageName = time() . '.' . $pro_cat_image->getClientOriginalExtension();
            $slide = $pro_cat_image->storeAs('uploads', $imageName, 'public');
            $product->pro_cat_image = $slide;
        }
        $product->pro_cat_name = $data['pro_cat_name'];
        $product->pro_cat_active = $data['pro_cat_status'];
        $product->pro_cat_description = $data['pro_cat_description'];
        if($product->save()){
            return redirect()->back()->with('success', 'Product created successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        
    }
    public function delete(Request $request, $id)
    {
        $product = ProductCategory::find($id);
        if($product->delete()){
            return redirect()->back()->with('success', 'Product deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
    public function disable(Request $request, $id)
    {
        $product = ProductCategory::find($id);
        $product->product_status = 0;
        if($product->save()){
            return redirect()->back()->with('success', 'Product disabled successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
