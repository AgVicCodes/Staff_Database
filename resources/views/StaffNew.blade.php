@extends('layouts/temp')

@section('title', 'NEW STAFF')

@section('content')
    <div class="container">
        <form action="/staffNew" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <label for="avatar" class="form-label mt-3">
                        <img src="{{asset('img/avatar.png')}}" alt="icon" width="100" height="100" class="avatar">
                        Add Image
                    </label>
                    <input type="file" class="form-control" id="avatar" name="avatar">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <label for="name" class="form-label mt-3">Name</label>
                    <input type="text" class="form-control"  name="name">

                    <label for="status" class="form-label mt-3">Status</label>
                    <input type="text" n class="form-control" name="status">

                    <label for="role" class="form-label mt-3">Role</label>
                    <input type="text" class="form-control"  name="role">

                    <label for="wage" class="form-label mt-3">Wage</label>
                    <input type="text" class="form-control"  name="wage">

                    <label for="hire" class="form-label mt-3">Hire-date</label>
                    <input type="text" class="form-control"  name="hire">
                    
                </div>
                <div class="col-md-5">
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
                    
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <label for="doc_1" class="form-label mt-3">
                        <img type="file" src="{{asset('img/default.jpg')}}" alt="icon" width="100" height="100" class="avatar">
                        Curriculum Vitae
                    </label>
                    <input type="file"  class="form-control" id="doc_1" name="doc_1">
                </div>
                <div class="col-md-4">
                    <label for="doc_2" class="form-label mt-3">
                        <img type="file" src="{{asset('img/default.jpg')}}" alt="icon" width="100" height="100" class="avatar">
                        Cover Letter
                    </label>
                    <input type="file"  class="form-control" id="doc_2" name="doc_2">
                </div>
                <div class="col-md-3">
                    <label for="doc_3" class="form-label mt-3">
                        <img type="file" src="{{asset('img/default.jpg')}}" alt="icon" width="100" height="100" class="avatar">
                        Other
                    </label>
                    <input type="file"  class="form-control" id="doc_3" name="doc_3">
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <button type="submit" class="btn btn-success mt-4 mb-4">SUBMIT</button>  
                </div>
            </div>
            
        </form>
    </div>
@endsection