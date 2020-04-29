<?php

namespace App\Http\Controllers\Admin;

use App\Employees;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::all();
        return view('admin.employee.show', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:employees',
            'password' => 'required'

        ]);
        $employee = new Employees;
        $employee['name'] = $request['name'];
        $employee['phone'] = $request['phone'];
        $employee['email'] = $request['email'];
        $employee['password'] =  Hash::make($request['password']);
        $employee->save();
        return redirect(route('employee.index'))->with('success','تم أضافة موظف جديد');
   
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employees::where('id',$id)->first();
        return view('admin.employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
        ]);
        
        $employee = Employees::find($id);
        $employee['name'] = $request['name'];
        $employee['phone'] = $request['phone'];
        if($request['email'] != $employee['email'])
        {
            $this->validate($request,[
                'email' => 'unique:employees'
            ]);
            $employee['email'] = $request['email'];
        }
        if($request['password'])
        {
            $employee['password'] =  Hash::make($request['password']);
        }
        
        $employee->save();
        return redirect(route('employee.index'))->with('success','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employees::where('id',$id)->delete();
        return redirect()->back();
    }
}
