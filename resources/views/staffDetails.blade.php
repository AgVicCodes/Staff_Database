@extends('layouts/temp')

@section('title', 'STAFF')

@section('content')
    <div class="container">
        <h1>STAFF DETAILS</h1>
        <div class="row justify-content-center">
            <div class="col-md-1"></div>
            <div class="col-md-2">

                 
                <img src="{{asset('img/avatar.png')}}" width="200" height="200" class="user-image" alt="user-image">
                
                
            </div>
            <div class="col-md-4 list-items summary">
                <ul>
                    <li>
                        NAME: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{ $staff->name }}
                    </li>
                    <li>
                        STATUS: &nbsp&nbsp&nbsp&nbsp&nbsp {{ $staff->status }}
                    </li>
                    <li>
                        ROLE: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{ $staff->role }}
                    </li>
                    <li>
                        WAGE: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{ $staff->wage }}
                    </li>
                    <li>
                        HIRE-DATE: {{ $staff->hire_date }}
                    </li>
                    <li>
                        FIELD: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{ $staff->field }}
                    </li>
                </ul>
                
                
                
            
            
                
            </div>
            <div class="col-md-4">

                <form action="" method="GET">
                    <input type="text" ClaSS="form-control" placeholder="Search">
                </form>

            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row justify-content-center">
            
            <div class="col-md-1"></div>

            <div class="col-md-6">

                <section class="mt-4">
                    
                    <h5>DETAILS</h5>
                    <div class="card">
                        <div class="card-body">
                            <h6>CONTACT DETAILS</h6>
                            <ul class="details-list">
                                <li>
                                    Email: 
                                </li>
                                <li>
                                    Secondary Email: 
                                </li>
                                <li>
                                    Phone: 
                                </li>
                                <li>
                                    Home Address:
                                </li>
                                <li>
                                    Social Media:
                                </li>
                                <li>
                                    Date of birth: 
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </section>
                
            </div>

            <div class="col-md-5">Pie Chart</div>
        </div>
        <div class="row justify-content-center">
            
            <div class="col-md-1"></div>

            <div class="col-md-6">

                <section class="mt-4">
                    
                    <h5>QUALIFICATIONS</h5>
                    <div class="card">
                        <div class="card-body">
                            <h6>CONTACT DETAILS</h6>
                            <ul class="details-list">
                                <li>
                                    Email: 
                                </li>
                                <li>
                                    Secondary Email: 
                                </li>
                                <li>
                                    Phone: 
                                </li>
                                <li>
                                    Home Address:
                                </li>
                                <li>
                                    Social Media:
                                </li>
                                <li>
                                    Date of birth: 
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </section>
                
            </div>

            <div class="col-md-5">Pie Chart</div>
        </div>
        <div class="row justify-content-center">
            
            <div class="col-md-1"></div>

            <div class="col-md-6">

                <section class="mt-4">
                    
                    <h5>NOTES</h5>
                    <div class="card">
                        <div class="card-body">
                            <h6>CONTACT DETAILS</h6>
                            <ul class="details-list">
                                <li>
                                    Email: 
                                </li>
                                <li>
                                    Secondary Email: 
                                </li>
                                <li>
                                    Phone: 
                                </li>
                                <li>
                                    Home Address:
                                </li>
                                <li>
                                    Social Media:
                                </li>
                                <li>
                                    Date of birth: 
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </section>
                
            </div>

            <div class="col-md-5">Pie Chart</div>
        </div>
    </div>
@endsection
