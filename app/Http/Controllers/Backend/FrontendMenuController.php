<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FrontendMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class FrontendMenuController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $orders = DB::table('frontend_menus')
                ->distinct()
                ->select('id', 'menu_title', 'menu_url','menu_group','is_active');

            return DataTables::of($orders)
                ->orderColumn('id', function ($query, $order) {
                    $query->orderBy('id', $order);
                })
                ->orderColumn('menu_title', function ($query, $order) {
                    $query->orderBy('menu_title', $order);
                })
                ->orderColumn('menu_url', function ($query, $order) {
                    $query->orderBy('menu_url', $order);
                })
                ->orderColumn('menu_group', function ($query, $order) {
                    $query->orderBy('menu_group', $order);
                })
                ->orderColumn('is_active', function ($query, $order) {
                    $query->orderBy('is_active', $order);
                })
                ->addColumn('action', function ($row) {
                    $editUrl = "/admin/menus/edit/{$row->id}";
                    $deleteUrl = "/admin/menus/delete/{$row->id}";

                    $editButton = '';
                    $deleteButton = '';

                    $editButton = "<a href='$editUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Edit</a>";

                    $deleteButton = "<a href='$deleteUrl' class='dropdown-item'><i class='bx bx-edit-alt me-2'></i> Delete</a>";

                    return "
                    <div class='dropdown'>
                        <button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </button>
                        <div class='dropdown-menu'>
                            $editButton
                            $deleteButton
                        </div>
                    </div>
                ";
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.menus.index');
    }
    public function create(Request $request){
        return view('backend.menus.create');
    }
    public function edit(Request $request, $id){
        $menu = DB::table('frontend_menus')->where('id', $id)->first();
        return view('backend.menus.create', compact('menu'));
    }
    public function store(Request $request){
        if(!empty($request->id)){
            $menu = FrontendMenu::where('id', $request->id)->first();
        }else{
            $menu = new FrontendMenu();
        }
        $menu->menu_title = $request->menu_title;
        $menu->menu_url = $request->menu_url;
        $menu->menu_group = $request->menu_group;
        $menu->is_active = $request->is_active;
        if($menu->save()){
            if(!empty($request->id)){
                return redirect()->back()->with('success', 'Menu updated successfully.');
            }else{
                return redirect()->back()->with('success', 'Menu created successfully.');
            }
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
    public function delete(Request $request, $id){
        $menu = FrontendMenu::where('id', $id)->first();
        if($menu->delete()){
            return redirect()->back()->with('success', 'Menu deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
