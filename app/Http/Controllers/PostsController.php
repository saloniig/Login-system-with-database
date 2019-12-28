<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Posts;
    
class PostsController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
//          $task = new Posts();
//          $task->first_name = request('first_name');
//          $task->last_name = request('last_name');
//          $task->university_roll_no = request('university_roll_no');
//          $task->class_roll_no = request('class_roll_no');
//          $task->contact_no = request('contact_no');
//          $task->email = request('email');
//          $task->branch = request('branch');
//          $task->year = request('year');
//          $task->iste_member = request('iste_member');
//          $task->save();
        Posts::create($request->all());
        return redirect('/');
//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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






 



