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
                    
                    @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="file" class="form-control shadow-sm" id="avatar" name="avatar">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <label for="name" class="form-label mt-3">
                        Name
                    </label>
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" class="form-control shadow-sm" name="n requiredame" required>
                    
                    <label for="email" class="form-label mt-3">
                        Email
                    </label>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="email"  class="form-control shadow-sm" name="email" required>
                    
                    <label for="phone" class="form-label mt-3">
                        Phone
                    </label>
                    
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text"  class="form-control shadow-sm" name="phone" required>
                    
                    <label for="social" class="form-label mt-3">
                        Social Media Handles
                    </label>
                    
                    @error('social')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" n class="form-control shadow-sm" name="social" required>

                    <label for="status" class="form-label mt-3">
                        Status
                    </label>
                    
                    @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <select name="status" required id="status" class="form-control shadow-sm">
                        <option value="0">Select Status</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Probation">Probation</option>
                    </select>

                    
                    <label for="wage" class="form-label mt-3">
                        Salary
                    </label>
                    
                    @error('wage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <select name="wage" required id="wage" class="form-control shadow-sm">
                        <option value="0">Select Salary Range</option>
                        @for ($i=1; $i<=9; $i++)
                            <option value="{{ 3*$i+1 . '0000' }}">{{ 3*($i . '0000') . " - " . 3*($i+1 . '0000') }}</option>
                        @endfor
                    </select>
                    
                    <label for="hire" class="form-label mt-3">
                        Hire date
                    </label>
                    
                    @error('hire')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="date" class="form-control shadow-sm" name="hire" required>
                    
                </div>
                <div class="col-md-5">
                    <label for="role" class="form-label mt-3">
                        Role
                    </label>
                    
                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" class="form-control shadow-sm" name="role" required>
                    
                    <label for="second" class="form-label mt-3">
                        Secondary Email
                    </label>
                    
                    @error('second')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" n class="form-control shadow-sm" name="second" required>
                    
                    <label for="home" class="form-label mt-3">
                        Home Address
                    </label>
                    
                    @error('home')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="text" class="form-control shadow-sm"  name="home" required>
                    
                    <label for="field" class="form-label mt-3">
                        Field
                    </label>
                    
                    @error('field')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <select name="Field" required id="Field" class="form-control shadow-sm">
                        <option value="0">Select Field</option>
                        <option value="Technology">Technology</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Legal">Legal</option>
                        <option value="Hospitality">Hospitality</option>
                        <option value="Site">Site</option>
                        <option value="Account">Account</option>
                        <option value="HR">HR</option>
                    </select>

                    <label for="level" class="form-label mt-3">
                        Level
                    </label>
                    
                    @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <select name="level" required id="level" class="form-control shadow-sm">
                        <option value="0">Select Level</option>
                        @for ($i=1; $i<=5; $i++)
                            <option value="Level {{$i}}">Level {{ $i }}</option>
                        @endfor
                    </select>
                    
                    <label for="leave" class="form-label mt-3">
                        Leave
                    </label>
                    
                    @error('leave')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <select name="leave" required id="leave" class="form-control shadow-sm">
                        <option value="0">Leave Days Left</option>
                        @for ($i=21; $i>=1; $i--)
                            <option value="{{$i}}">{{ $i }}</option>
                        @endfor
                    </select>

                    <label for="birth" class="form-label mt-3">
                        Date of birth
                    </label>
                    
                    @error('birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="date" class="form-control shadow-sm" name="hire" required>

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
                    
                    @error('curriculum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="file"  class="form-control shadow-sm" id="doc_1" name="doc_1">
                </div>
                <div class="col-md-4">
                    <label for="doc_2" class="form-label mt-3">
                        <img type="file" src="{{asset('img/default.jpg')}}" alt="icon" width="100" height="100" class="avatar">
                        Cover Letter
                    </label>
                    
                    @error('cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="file"  class="form-control shadow-sm" id="doc_2" name="doc_2">
                </div>
                <div class="col-md-3">
                    <label for="doc_3" class="form-label mt-3">
                        <img type="file" src="{{asset('img/default.jpg')}}" alt="icon" width="100" height="100" class="avatar">
                        Other
                    </label>
                    
                    @error('other')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <input type="file"  class="form-control shadow-sm" id="doc_3" name="doc_3">
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