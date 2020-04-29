<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\Calls;
use App\Employees;
use App\Sources;
use App\Status;
use Illuminate\Http\Request;

class CallController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $calls = Calls::all();
        return view('admin.call.show', ['calls' => $calls]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sources = Sources::all();
        $employees = Employees::all();
        return view('admin.call.call', ['sources' => $sources, 'employees' => $employees]);
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
            'detail' => 'required',
            'num' => 'required|numeric',
            'source' => 'required',
            'emp' => 'required'
            
        ]);
        $call = new Calls;
        $call['phone'] = $request['num'];
        $call['details'] = $request['detail'];
        $call->source()->associate($request->source);
        $call->employee()->associate($request->emp);
        $call->save();
        return redirect(route('call.index'))->with('success','تم أضافة مكالمة جديده');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $call = Calls::where('id',$id)->first();
        $sources = Sources::all();
        $employees = Employees::all();
        $statuses = Status::all();
        return view('admin.call.edit',compact('call','employees','sources' , 'statuses'));
   
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
            'detail' => 'required',
            'num' => 'required|numeric',
            'source' => 'required',
            'emp' => 'required'
            
        ]);

        $call =  Calls::find($id);
        $call['phone'] = $request['num'];
        $call['details'] = $request['detail'];
        $call->source()->associate($request->source);
        $call->employee()->associate($request->emp);
        $call['name'] = null;
        if($request['cname'])
        {
            $call['name'] = $request['cname'];
        }
        if($request['status'])
        {
            $call->status()->associate($request->status);
        }
        $call->save();
        return redirect(route('call.index'))->with('success','تم التعديل بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Calls::where('id',$id)->delete();
        return redirect()->back();
    }
}
