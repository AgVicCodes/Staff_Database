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
                    
                    @error('Add')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="file" class="form-control" id="avatar" name="avatar">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <label for="name" class="form-label mt-3">
                        Name
                    </label>
                    
                    @error('Name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" class="form-control" name="n requiredame" required>

                    <label for="status" class="form-label mt-3">
                        Status
                    </label>
                    
                    @error('Status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" class="form-control" name="status" required>

                    <label for="role" class="form-label mt-3">
                        Role
                    </label>
                    
                    @error('Role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" class="form-control" name="role" required>

                    <label for="wage" class="form-label mt-3">
                        Wage
                    </label>
                    
                    @error('Wage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" class="form-control" name="wage" required>

                    <label for="hire" class="form-label mt-3">
                        Hire date
                    </label>
                    
                    @error('Hire')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="date" class="form-control" name="hire" required>
                    
                    
                    <label for="field" class="form-label mt-3">
                        Field
                    </label>
                    
                    @error('field')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" n class="form-control" name="field" required>

                </div>
                <div class="col-md-5">
                    <label for="email" class="form-label mt-3">
                        Email
                    </label>
                    
                    @error('Email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="email"  class="form-control" name="email" required>
                    
                    <label for="second" class="form-label mt-3">
                        Secondary Email
                    </label>
                    
                    @error('Second')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" n class="form-control" name="second" required>
                    
                    <label for="phone" class="form-label mt-3">
                        Phone
                    </label>
                    
                    @error('Phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text"  class="form-control" name="phone" required>
                    
                    <label for="home" class="form-label mt-3">
                        Home Address
                    </label>
                    
                    @error('Home')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" class="form-control"  name="home" required>
                    
                    <label for="social" class="form-label mt-3">
                        Social Media Handles
                    </label>
                    
                    @error('Social')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" n class="form-control" name="social" required>

                    <label for="level" class="form-label mt-3">
                        Level
                    </label>
                    
                    @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <select name="level" required id="level" class="form-control">
                        <option value="1">Level 1</option>
                        <option value="2">Level 2</option>
                        <option value="3">Level 3</option>
                        <option value="4">Level 4</option>
                        <option value="5">Level 5</option>
                    </select>
                    
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
                    
                    @error('Curriculum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="file"  class="form-control" id="doc_1" name="doc_1">
                </div>
                <div class="col-md-4">
                    <label for="doc_2" class="form-label mt-3">
                        <img type="file" src="{{asset('img/default.jpg')}}" alt="icon" width="100" height="100" class="avatar">
                        Cover Letter
                    </label>
                    
                    @error('Cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="file"  class="form-control" id="doc_2" name="doc_2">
                </div>
                <div class="col-md-3">
                    <label for="doc_3" class="form-label mt-3">
                        <img type="file" src="{{asset('img/default.jpg')}}" alt="icon" width="100" height="100" class="avatar">
                        Other
                    </label>
                    
                    @error('Other')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
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