<?php

namespace App\Http\Controllers;

use App\phone;
use Illuminate\Http\Request;
use Auth;

class phonesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        // $this->middleware('auth')->except(['index']);
        // $this->middleware('auth')->only(['edit','update']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::where('user_id', Auth::id())->get();
        return view('phones.index',compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phone = new phone();
        return view('phones.create', compact('phone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phone = phone::create($this->validateRequest($request));
        return redirect('phones')->with('message','a new phone has been added ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(phone $phone)
    {
        return view('phones.show',compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(phone $phone)
    {
        return view('phones.edit', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, phone $phone)
    {
        $phone->update($this->validateRequest($request));
        return redirect('phones/'.$phone->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(phone $phone)
    {
        $phone->delete();
        return redirect('phones');
    }
    private function validateRequest($request){
        $validatedData = $request->validate([
            'number'=>['required', 'unique:phones', 'regex:/^01(0|2|5|1).{8}$/']
        ]);
        $validatedData['user_id']=@auth::user()->id;
        return $validatedData;
    }
}
