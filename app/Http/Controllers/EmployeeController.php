<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller
{
    /**
     * EmployeeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('auth', ['only' => [
//            'helloFromController'
//        ]]);
    }

    //test method >>>
    public function helloFromController()
    {
        return 'Hello from METHOD in CONTROLLER!!!';
    }
    // <<< test method

    # GET ALL EMPLOYEES FROM DB
    public function index()
    {
        $employees = Employee::all();
        Log::info('GET ALL EMPLOYEES FROM DATABASE');
        return response()->json($employees);
    }

    # GET ONE EMPLOYEE BY ID
    public function getEmployee($id)
    {
        $employee = Employee::find($id);
        Log::info('GET ALL EMPLOYEE WITH ID: ' . $id);
        return response()->json($employee);
    }

    # CREATE NEW EMPLOYEE
    public function saveEmployee(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|unique:employees',
            'job' => 'required'
        ]);
        Log::info('CREATE NEW EMPLOYEE IN DATABASE');
        $employee = Employee::create($request->all());
        return response()->json($employee);
    }

    # UPDATE EMPLOYEE
    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);
        $this->validate($request, [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|unique:employees',
            'job' => 'required'
        ]);
        Log::info('UPDATED EMPLOYEE WITH ID: ' . $id);
        $employee->update($request->all());
        return response()->json($employee);
    }

    # DELETE EMPLOYEE
    public function deleteEmployee($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        Log::info('DELETE EMPLOYEE WITH ID: ' . $id);
        return response()->json($employee);
    }
}