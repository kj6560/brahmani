<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = DB::table('sliders')
                ->distinct()
                ->join('pages', 'sliders.page_id', '=', 'pages.id')
                ->select('sliders.id', 'sliders.path', 'pages.page_name', 'sliders.is_active');

            return DataTables::of($orders)
                ->orderColumn('id', function ($query, $order) {
                    $query->orderBy('id', $order);
                })
                ->orderColumn('path', function ($query, $order) {
                    $query->orderBy('path', $order);
                })

                ->orderColumn('page_name', function ($query, $order) {
                    $query->orderBy('page_name', $order);
                })

                ->orderColumn('is_active', function ($query, $order) {
                    $query->orderBy('is_active', $order);
                })
                ->addColumn('action', function ($row) {
                    $editUrl = "/admin/siteSettings/edit/{$row->id}";
                    $deleteUrl = "/admin/siteSettings/delete/{$row->id}";
                    $viewUrl = "/admin/siteSettings/show/{$row->id}";

                    $editButton = '';
                    $deleteButton = '';
                    $viewButton = '';

                    $editButton = "<a href='$editUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Edit</a>";

                    $viewButton = "<a href='$viewUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> View</a>";

                    $deleteButton = "<a href='$deleteUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Delete</a>";

                    return "
                    <div class='dropdown'>
                        <button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </button>
                        <div class='dropdown-menu'>
                            $viewButton
                            $editButton
                            $deleteButton
                        </div>
                    </div>
                ";
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.slider_index');
    }
    public function create(Request $request)
    {
        $pages = Pages::get();
        return view('backend.slider_create',['pages'=>$pages]);
    }
    public function store(Request $request)
    {
        $sliderImages = $request->file('sliderImages');
        foreach ($sliderImages as $sliderImage) {
            // Generate a unique file name
            $sliderImageName = time() . '_' . $sliderImage->getClientOriginalName();

            // Store the file in the 'storage/app/public/uploads' directory
            $filePath = $sliderImage->storeAs('uploads', $sliderImageName, 'public');

            DB::table('sliders')->insert([
                'path' => $filePath,
                'page_id' => $request->page_id,
                'is_active' => 1,
            ]);
        }
        
        return redirect()->back()->with('success', 'Slider created successfully.');
    }
}
