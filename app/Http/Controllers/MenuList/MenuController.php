<?php

namespace App\Http\Controllers\MenuList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index(){
        $result = DB::table('menus')->paginate(3);
        //return response()->json($menu);
        return view('backend.MenuList.AllMenu',compact('result'));
    }
    public function addMenu(){
        return view('backend.MenuList.AddMenu');
    }
    public function addingMenu(Request $request){
        try {
            DB::table('menus')->insert([
                'name'=>$request->menename
            ]);
            return redirect()->back()->with('success','Data insert successfully!');
        } catch (\Exception $e){
            //return $e->getMessage();
            return redirect()->back()->with('error','Data insert not successfully!');
        }
    }
    public function editMenu($id){
        $data=DB::table('menus')->where('id',$id)->first();
        //return response()->json($data);
        return view('backend.MenuList.edit',compact('data'));
    }
    public function menuUpdate(Request $request, $id){
        try {
            DB::table('menus')->where('id', $id)->update([
                'name'=>$request->menename
            ]);
            return redirect('menu_bar');
        }catch (\Exception $e){
            $e->getMessage();
        }
    }
    public function menuDelete($id){
        DB::table('menus')->where('id', $id)->delete();
        return redirect('menu_bar');
    }
//---already menu crud are complete------

    public function subIndex(){
        $result=DB::table('submenus')
            ->join('menus', 'submenus.menu_id', '=', 'menus.id')
            ->select('submenus.*','menus.name')
            ->get();
        dd($result);
        //return response()->json($result);
        //
        //return view('backend.MenuList.AllSubMenu', compact('result'));
    }
    public function addSubmenu(){
        $result=DB::table('menus')->get();
        return view('backend.MenuList.AddSub', compact('result'));
    }
    public function addingsubMenu(Request $request){
        try {
            DB::table('submenus')->insert([
                'name'=>$request->sname,
                'menu_id'=>$request->mname
            ]);
            return redirect()->back()->with('success','Data insert successfully!');
        }catch (\Exception $e){
            //return $e->getMessage();
            return redirect()->back()->with('error','Data insert not successfully!');
        }
    }
    public function AllsubMenu(){
       // $result=DB::table('submenus')->paginate(5);
        //return view('backend.MenuList.');
    }
}
