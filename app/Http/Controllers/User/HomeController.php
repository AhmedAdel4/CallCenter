<?php

namespace App\Http\Controllers\User;

use PDF;
use DateTime;
use App\Calls;
use App\Status;
use App\Sources;
use Carbon\Carbon;
use Prophecy\Call\Call;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $calls = Calls::latest()->get();
        $statuses = Status::all();
        $sources = Sources::all();
        return view('HomePage.welcome',['calls' => $calls,'sources' => $sources,'statuses' => $statuses]);
    }
    public function saveCall(Request $request)
    {
        $validator = Validator::make($request->all(), ['detail' => 'required',
        'phone' => 'required|numeric',
        'source' => 'required',
        'detail' => 'required',
        'status' => 'required',
        'cname' => 'required',]);

        if($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $call = new Calls;
        $call['phone'] = $request['phone'];
        $call['name'] = $request['cname'];
        $call['details'] = $request['detail'];
        $call->source()->associate($request->source);
        $call->status()->associate($request->status);
        $call->employee()->associate(Auth::user());
        $call->save();

        return redirect(route('home'))->with('success','تم أضافة مكالمة جديده');

    }
    public function updateCall(Request $request , $id)
    {
        $validator = Validator::make($request->all(), ['detail' => 'required',
        'status' => 'required',
        'detail' => 'required',
        'cname' => 'required',]);

        if($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $call = Calls::find($id);
        $call['name'] = $request['cname'];
        $call['details'] = $request['detail'];
        $status = Status::where('name',$request->status)->first();
        $call->status()->associate($status);
        $call->employee()->associate(1);
        $call->save();

        return redirect(route('home'))->with('success','تم التعديل بنجاح');
    }

    public function printPDF(Request $request)
    {
        $dateS = $request['startDate'];
        $dateE = $request['endDate'];
        $results = Calls::whereBetween('created_at', [$dateS." 00:00:00", $dateE." 23:59:59"])->get();

        $pdf = PDF::loadView('HomePage.pdf', ['results' => $results]);
        return $pdf->stream('data.pdf');
    }
}
