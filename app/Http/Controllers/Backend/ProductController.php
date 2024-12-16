<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = DB::table('products')
                ->distinct()
                ->select('id', 'product_name', 'product_status');

            return DataTables::of($orders)
                ->orderColumn('id', function ($query, $order) {
                    $query->orderBy('id', $order);
                })
                ->orderColumn('product_name', function ($query, $order) {
                    $query->orderBy('product_name', $order);
                })
                ->orderColumn('page_url', function ($query, $order) {
                    $query->orderBy('page_url', $order);
                })
                ->orderColumn('product_status', function ($query, $order) {
                    $query->orderBy('product_status', $order);
                })
                ->addColumn('action', function ($row) {
                    $editUrl = "/admin/products/edit/{$row->id}";
                    $deleteUrl = "/admin/products/delete/{$row->id}";
                    $disableUrl = "/admin/products/disable/{$row->id}";

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
        return view('backend.product.index');
    }
    public function create(Request $request)
    {
        $categories = DB::table('product_category')->get();
        return view('backend.product.create',['categories'=>$categories,'product'=>null]);
    }
    public function edit(Request $request,$id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $categories = DB::table('product_category')->get();
        return view('backend.product.create',['categories'=>$categories,'product'=>$product]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        if(!empty($data['id'])){
            $product = Product::find($data['id']);
        }else{
            $product = new Product();
        }
        $product->product_name = $data['product_name'];
        $product->product_short_description = $data['product_short_description'];
        $product->product_category = $data['product_category'];
        $product->product_description = $data['product_description'];
        $product->product_status = $data['product_status'];
        if(!empty($data['pro_params']))
        {
            $product->pro_params = json_encode($this->processProductParams($data['pro_params']));
        }
        if($product->save()){
            return redirect()->back()->with('success', 'Product created successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        
    }
    public function delete(Request $request, $id)
    {
        $product = Product::find($id);
        if($product->delete()){
            return redirect()->back()->with('success', 'Product deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
    public function disable(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_status = 0;
        if($product->save()){
            return redirect()->back()->with('success', 'Product disabled successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
    public function processProductParams($prodcutParams)
    {
        $processedProdcutParams = [];
        for ($i = 0; $i < count($prodcutParams); $i += 2) {
            // Combine 'name' and 'value' into a single array.
            if (isset($prodcutParams[$i]['name'], $prodcutParams[$i + 1]['value'])) {
                $processedProdcutParams[] = [
                    'name' => $prodcutParams[$i]['name'],
                    'value' => $prodcutParams[$i + 1]['value'],
                ];
            }
        }
        return $processedProdcutParams;
    }
}