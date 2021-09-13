<?php

namespace App\Http\Controllers;

use App\Models\Draft;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class DraftController extends Controller
{
    
    public function index()
    {
        return view('pages.draft.index');
    }


    public function create()
    {
        return view('pages.draft.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('pages.draft.show');
    }


    public function edit($id)
    {
        return view('pages.draft.edit');
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
