<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index()
    {
        return view('pages.order.index');
    }


    public function create()
    {
        return view('pages.order.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('pages.order.show');
    }


    public function edit($id)
    {
        return view('pages.order.edit');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
