<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = DB::table('page_contents')
                ->distinct()
                ->select('id', 'page_title', 'page_slug','content','is_active');

            return DataTables::of($orders)
                ->orderColumn('id', function ($query, $order) {
                    $query->orderBy('id', $order);
                })
                ->orderColumn('page_title', function ($query, $order) {
                    $query->orderBy('page_title', $order);
                })
                ->orderColumn('page_slug', function ($query, $order) {
                    $query->orderBy('page_slug', $order);
                })
                ->orderColumn('content', function ($query, $order) {
                    $query->orderBy('content', $order);
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
        return view('backend.page_content');
    }
}
