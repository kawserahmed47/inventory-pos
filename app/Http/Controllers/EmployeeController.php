<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $data['employees'] = Employee::all();
        return view('pages.employee.index', $data);
    }


    public function create()
    {
        return view('pages.employee.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->description = $request->description;
        $employee->created_by = Auth::id();
        $employee->save();

        return redirect()->route('employee.index');
    }


    public function show($id)
    {
        $data['employee'] =  Employee::find($id);

        return view('pages.employee.show', $data);
    }


    public function edit($id)
    {
        $data['employee'] =  Employee::find($id);

        return view('pages.employee.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $employee =  Employee::find($id);
        $employee->name = $request->name;
        $employee->description = $request->description;
        $employee->updated_by = Auth::id();
        $employee->save();

        return redirect()->route('employee.index');
    }


    public function destroy($id)
    {
        $employee =  Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index');


    }
}
