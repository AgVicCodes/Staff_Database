@extends('layouts/temp')

@section('title', 'NEW STAFF')

@section('content')
    <div class="container">
        <form action="/staffNew" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name" class="mt-4">Name</label>
            <input type="text" name="name">
            <br>
            <label for="status" class="mt-4">Status</label>
            <input type="text" name="status">
            <br>
            <label for="role" class="mt-4">Role</label>
            <input type="text" name="role">
            <br>
            <label for="wage" class="mt-4">Wage</label>
            <input type="text" name="wage">
            <br>
            <label for="hire" class="mt-4">Hire-date</label>
            <input type="text" name="hire">
            <br>
            <label for="field" class="mt-4">Field</label>
            <input type="text" name="field">
            <br>
            <label for="doc_1" class="mt-4">Curriculum Vitae</label>
            <input type="file" name="doc_1">
            <br>
            <label for="doc_2" class="mt-4">Cover Letter</label>
            <input type="file" name="doc_2">
            <br>
            <label for="doc_3" class="mt-4">Other</label>
            <input type="file" name="doc_3">
        </form>
        <form action="/staffNew" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name" class="mt-4">Name</label>
            <input type="text" name="name">

            <label for="email" class="mt-4">Email</label>
            <input type="text" name="email">

            <label for="status" class="mt-4">Status</label>
            <input type="text" name="status">

            <label for="second" class="mt-4">Secondary Email</label>
            <input type="text" name="second">
            
            <label for="role" class="mt-4">Role</label>
            <input type="text" name="">
            <label for="" class="mt-4"></label>
            <input type="text" name="">
            <label for="" class="mt-4"></label>
            <input type="text" name="">
            <label for="" class="mt-4"></label>
            <input type="text" name="">
            <label for="" class="mt-4"></label>
            <input type="text" name="">
            <label for="" class="mt-4"></label>
            <input type="text" name="">
            <label for="" class="mt-4"></label>
            <input type="text" name="">
            <label for="" class="mt-4"></label>
            <input type="text" name="">
            <label for="" class="mt-4"></label>
            <input type="text" name="">
        </form>
    </div>
@endsection