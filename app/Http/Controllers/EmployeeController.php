<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class EmployeeController extends Controller
{

    function generateIDNumber()
    {

        // $number = mt_rand(1000000000, 9999999999); // better than rand()
        $number =   IdGenerator::generate(['table' => 'employees', 'field'=>'id_no', 'length' => 8,  'prefix' =>200]);


        // call the same function if the barcode exists already
        if ($this->idNumberExists($number)) {
            return $this->generateIDNumber();
        }

        // otherwise, it's valid and can be used
        return $number;
    }

    function idNumberExists($number)
    {
        // query the database and return a boolean
        return Employee::where('id_no', $number)->exists();
    }
    
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
        $employee->id_no = $this->generateIDNumber();
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
