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
        // Get staff details from database
        $staff = DB::table('staff')->get();
        
        return view("staffDB", ["staff" => $staff]);
    }

    public function newStaff()
    {
        return view("staffNew");
    }

    public function staffDetails($id)
    {
        $staff = DB::table('staff')->where('id', $id)->first();
        return view("staffDetails", ["staff" => $staff]);
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
        // echo(request("name"));
        $name = request('name');
        $email = request('email');
        $second = request('second');
        $status = request('status');
        $level = request('level');
        $role = request('role');
        $phone = request('phone');
        $wage = request('wage');
        $address = request('home');
        $hire = request('hire');
        $social = request('social');
        DB::table("Staff")->insert([
            'name' => $name,
            'email' => $email,
            'second' => $second,
            'active' => $status,
            'level' => $level,
            'role' => $role,
            'phone' => $phone,
            'wage' => $wage,
            'address' => $address,
            'social' => $social,
            'hire' => $hire,
            'field' => $field
        ]);
        // return view("staffDetails");
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
