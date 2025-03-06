<?php

namespace App\Controllers;

use App\Models\Menu;
use Support\BaseController;
use Support\Request;
use Support\Validator;
use Support\View;
use Support\CSRFToken;
use Support\Date;
use Support\Session;

class MenuController extends BaseController
{
    // Controller logic here
    public function menu()
    {
        // ['menu' => $menu] pengulangan
        $menu = Menu::all();
        return view('menu/menu', ['menu' => $menu], 'navbar/navbar');
    }

    // created new menu
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
        if ($validator) {
            Session::flash('error', $validator);
            return redirect('/menu');
        }
        $validateType = $request->getClientMimeType('picture');
        $allowedType = ['image/png', 'image/jpg', 'image/jpeg'];
        if (!in_array($validateType, $allowedType)) {
            Session::flash('error', 'File yang diinput tidak sesuai');
            return redirect('/menu');
        }
        if ($request->getClientOriginalName('picture')) {
            $path = storage_path('menu/picture');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $fileName = $request->getClientOriginalName('picture');
            $tempPath = $request->getPath('picture');
            $destination = $path . '/' . $fileName;

            if (move_uploaded_file($tempPath, $destination)) {
                $user = Menu::create([
                    'menu' => $request->menu,
                    'price' => $request->price,
                    'stock' => $request->stock,
                    'picture' => $fileName,
                    'created_at' => Date::Now(),
                ]);
            }
        }
        return redirect('/menu');
    }

    // Edit Menu
    public function showMenu(Request $request, $id)
    {
        $menu = Menu::find($id);
        return view('menu/modal-edit', ['menu' => $menu]);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->menu = $request->menu;
        $menu->price = $request->price;
        $menu->stock = $request->stock;
        $menu->updated_at = Date::Now();
        $menu->save();
        Session::flash('succes', 'Succes edit menu');
        return redirect('/menu');
    }

    public function delete(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        Session::flash('succes', 'Succes edelete menu');
        return redirect('/menu');
    }
}
