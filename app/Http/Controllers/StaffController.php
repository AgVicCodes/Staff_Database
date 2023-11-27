<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function staffDB()
    {
        $staff = DB::table('staff')->first();
        // $sum = DB::table('staff')->count();

        // foreach ($staff as $employee) {
            
        //     echo $employee->id;
        //     echo $employee->name;
        //     echo $employee->email;
        //     echo $employee->secondary_email;
        //     echo $employee->status;
        //     // echo $employee->level;
        //     echo $employee->role;
        //     echo $employee->phone;
        //     echo $employee->wage;
        //     echo $employee->home_address;
        //     echo $employee->social_media;
        //     echo $employee->field;
        //     echo $employee->doc_1;
        //     echo $employee->doc_2;
        //     echo $employee->doc_3;
        //     // echo $employee->avatar;
            
        //     echo "<br>";

        // }

        return view("staffDB", ["id" => $staff]);
    }

    public function newStaff()
    {
        return view("newstaff");
    }

    public function staffDetails()
    {
        return view("staff");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
