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
        
        // Return the staff data from the 
        // database to the page
        return view("staffDB", ["staff" => $staff]);
    }

    public function newStaff()
    {
        // Return a view to upload staff data
        return view("staffNew");
    }

    public function staffDetails($id)
    {
        // Get a single row of staff details
        // from the id.
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
        // Passing data from view to 
        // separate variables
        
        $name = request('name');
        $email = request('email');
        $second = request('second');
        $status = request('status');
        $level = request('level');
        $role = request('role');
        $phone = request('phone');
        $wage = request('wage');
        $social = request('social');
        $field = request('field');
        $address = request('home');
        $leave = request('leave');
        $hire = request('hire');
        $dob = request('dob');

        // Passing said variables to 
        // the database
        DB::table("Staff")->insert([
            'name' => $name,
            'email' => $email,
            'secondary_email' => $second,
            'status' => $status,
            'level' => $level,
            'role' => $role,
            'phone' => $phone,
            'wage' => $wage,
            'social_media' => $social,
            'field' => $field,
            'home_address' => $address,
            'leave_days' => $leave,
            'hire_date' => $hire,
            'date_of_birth' => $dob
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
