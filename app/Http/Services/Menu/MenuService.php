<?php

namespace App\Http\Services\Menu;

use App\Models\Menus;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuService{
    public function get($parent_id = 1){
        return Menus::where('parent_id', 0)->get();
    }


    public function getAll(){
        return Menus::orderByDesc('id')->paginate(10);
    }

    public function create($request){
        try {
            Menus::create([
                'name' => (string) $request->input('name'),
                'parent_id' => (int) $request->input('parent_id'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'active' => (string) $request->input('active'),
            ]);

            Session::flash('success', 'Tạo danh mục thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function update($request, $menu): bool
    {
        if ($request->input('parent_id') != $menu->id) {
            $menu->parent_id = (int)$request->input('parent_id');
        }

        $menu->name = (string)$request->input('name');
        $menu->description = (string)$request->input('description');
        $menu->content = (string)$request->input('content');
        $menu->active = (string)$request->input('active');
        $menu->save();

        Session::flash('success', 'Cập nhật thành công Danh mục');
        return true;
    }

    public function destroy($request){
        $id = (int) $request->input('id');
        $menu = Menus::where('id', $request->input('id'))->first();
        if($menu){
            return Menus::where('id', $id)->orWhere('parent_id', $id)->delete();
        }
        return false;
    }
}
