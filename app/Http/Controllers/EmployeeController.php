<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $employees = Employee::select('employees.*');

            return DataTables::of($employees)
                ->addColumn('actions', 'employees.action')
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('employees.index');
    }
}
