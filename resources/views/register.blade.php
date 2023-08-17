@extends('layouts.app')

@section('content')
    <h1>Register an Account</h1>
    <form action="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="mail">Email</label>
        <input type="text" name="mail" id="mail">
        
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone">
        
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
    </form>
@endsection