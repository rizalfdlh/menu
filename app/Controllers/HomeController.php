<?php

namespace App\Controllers;

use App\Models\User;
use Support\BaseController;
use Support\Request;
use Support\Validator;
use Support\View;
use Support\CSRFToken;
use Support\Date;

class HomeController extends BaseController
{
    // Controller logic here
    public function index()
    {
        return view('home/home', ['title' => 'Home Page'], 'navbar/navbar');
    }

    public function customer(Request $request)
    {
        $user = User::all();
        return view('customer/customer', ['title' => 'Customer Page', 'viewuser' => $user], 'navbar/navbar');
    }

    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'created_at' => Date::Now(),
        ]);
        return redirect('/customer');
    }

    public function showUser(Request $request, $id)
    {
        $user = User::find($id);
        return view('customer/customer_edit', ['user' => $user], 'navbar/navbar');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();
    }
}
