@extends('layouts/temp')

@section('title', 'STAFF')

@section('content')
    <div class="container">
        <h1>STAFF DETAILS</h1>
        <div class="row justify-content-center">
            {{-- <div class="col-md-2"> --}}

                 
                
                
                
            {{-- </div> --}}
            <div class="col-md-7 list-items summary">
                <ul>
                    <li>
                        NAME: {{ $staff->name }}
                    </li>
                    <li>
                        STATUS: {{ $staff->status }}
                    </li>
                    <li>
                        ROLE: {{ $staff->role }}
                    </li>
                    <li>
                        WAGE: {{ $staff->wage }}
                    </li>
                    <li>
                        HIRE-DATE: {{ $staff->hire_date }}
                    </li>
                    <li>
                        FIELD: {{ $staff->field }}
                    </li>
                    <li>
                    </li>
                </ul>
                
                
                
            
            
                
            </div>
        </div>
    </div>
@endsection
