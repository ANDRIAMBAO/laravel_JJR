<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Students::all();
        return view('indexS',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'id'=>'required',
            'nom'=>'required',
            'adresse'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'parcours'=>'required',
            'image'=>'required/image/mimes:jpg,png,gpej,gif',
        ]);
        $image=$request->file('image');
        $destinationPath='image/';
        $profileImage=date('ymdtis').".".$image->getClientOriginalExtension();
        $image->move($destinationPath , $profileImage);
        $validateData=['image']=$profileImage;
        $students=Students::create($validateData);
        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Students $student)
    {
        return view('show',compact('student'))
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
