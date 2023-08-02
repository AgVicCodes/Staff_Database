@extends('layouts.app')

@section('content')
<main class="form-section">
    <h1 class="header">Register an Account</h1>
    <form action="POST">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name"><br>
        
        <label for="mail">Email</label><br>
        <input type="text" name="mail" id="mail"><br>
        
        <label for="phone">Phone</label><br>
        <input type="text" name="phone" id="phone"><br>
        
        <label for="password">Password</label><br>
        <input type="text" name="password" id="password"><br>
    </form>
</main>
@endsection