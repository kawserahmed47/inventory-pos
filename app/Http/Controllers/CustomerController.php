<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function index()
    {
        return view('pages.customer.index');
    }


    public function create()
    {
        return view('pages.customer.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('pages.customer.show');
    }


    public function edit($id)
    {
        return view('pages.customer.edit');
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
