@extends('layouts/temp')

@section('title', 'STAFF DB')

@section('content')
    <div class="table-grid">
        {{-- <h1>STAFF DATABASE</h1> --}}
        <div class="space-1">
            <a href="/staffNew"><button class="cta-1">Add new staff</button></a>
        </div>
        
        <div class="space-2">
            <form action="GET">
                @csrf
                <div class="search">
                    <svg xmlns="http://www.w3.org/2000/svg" class="search-icon" height="16" width="16" viewBox="0 0 512 512"><path fill="#42793e" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    <input type="text" placeholder="Search" class="search-bar">
                </div>
            </form>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" id="border-top-left">Id</th>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Hire date</th>
                    <th scope="col">Role</th>
                    <th scope="col">Field</th>
                    <th scope="col" id="border-top-right">Leaves</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($staff as $employee)
                    <tr>

                        <td scope="row">
                            {{ $employee->id }} 
                        </td>
                        <td>
                            <a href="/staffDetails/{{ $employee->id }}" ><img src="{{ asset('img/avatar.png') }}" height="22" width="22" ></a>
                        </td>
                        <td>
                            {{ $employee->name }}
                        </td>
                        <td>
                            {{ $employee->email }}
                        </td>
                        <td>

                            {{-- Difference btw == and === (Checking for data type equivalence) --}}

                            {{ $employee->status }}
                            
                        </td>
                        <td>
                            {{ $employee->hire_date }}
                        </td>
                        <td>
                            {{ $employee->role }}
                        </td>
                        <td>
                            {{ $employee->field }}
                        </td>
                        <td>
                            {{ $employee->leave_days }}
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
            
            {{-- {{ $employee->role }}
            {{ $employee->wage }}
            {{ $employee->home_address }} --}}
            <br> 

        </table>
        
                
        {{-- <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
        </div> --}}
        
    </div>
@endsection
