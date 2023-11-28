@extends('layouts/temp')

@section('title', 'NEW STAFF')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

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
        </div>
    </div>
@endsection