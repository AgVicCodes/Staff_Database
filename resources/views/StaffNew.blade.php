@extends('layouts/temp')

@section('title', 'NEW STAFF')

@section('content')
    <div class="container">
        <form action="/staffNew" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5">
                    <img src="{{asset('img/avatar.png')}}" alt="icon" class="avatar">
                    <label for="avatar" class="form-label mt-3">Add Image</label>
                    <input type="file" class="form-control" id="avatar" name="avatar">
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5">

                    <label for="name" class="form-label mt-3">Name</label>
                    <input type="text" class="form-control"  name="name">

                    <label for="status" class="form-label mt-3">Status</label>
                    <input type="text" n class="form-control" ame="status">

                    <label for="role" class="form-label mt-3">Role</label>
                    <input type="text" class="form-control"  name="role">

                    <label for="wage" class="form-label mt-3">Wage</label>
                    <input type="text" class="form-control"  name="wage">

                    <label for="hire" class="form-label mt-3">Hire-date</label>
                    <input type="text" class="form-control"  name="hire">


                    <label for="doc_1" class="form-label mt-3">Curriculum Vitae</label>
                    <input type="file"  class="form-control" name="doc_1">
                    
                    <label for="doc_2" class="form-label mt-3">Cover Letter</label>
                    <input type="file"  class="form-control" name="doc_2">
                    
                    <label for="doc_3" class="form-label mt-3">Other</label>
                    <input type="file"  class="form-control" name="doc_3">
                    
                    <button type="submit" class="btn btn-success mt-4 mb-4">SUBMIT</button>

                </div>
                <div class="col-5">
                    <label for="email" class="form-label mt-3">Email</label>
                    <input type="text"  class="form-control" name="email">
                    
                    <label for="second" class="form-label mt-3">Secondary Email</label>
                    <input type="text" n class="form-control" ame="second">
                    
                    <label for="phone" class="form-label mt-3">Phone</label>
                    <input type="text"  class="form-control" name="phone">
                    
                    <label for="home" class="form-label mt-3">Home Address</label>
                    <input type="text" class="form-control"  name="home">
                    
                    <label for="social" class="form-label mt-3">Social Media Handles</label>
                    <input type="text" n class="form-control" ame="social">
                    
                    <label for="field" class="form-label mt-3">Field</label>
                    <input type="text"  class="form-control" name="field">
                </div>
                <div class="col-1"></div>
            </div>

        </form>
    </div>
@endsection