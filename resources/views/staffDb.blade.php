@extends('layouts/temp')

@section('title', 'STAFF DB')

@section('content')
    <div class="container">
        <h1>STAFF DATABASE</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-success" href="/staffNew">Add new staff</a>
                    </div>
                    <div class="col-md-4"></div>
                    <form action="POST" class="col-md-4">
                        @csrf
                        <input type="text" placeholder="Search" class="w-100 input input-success">
                    </form>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col"></th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Role</th>
                            <th scope="col">Field</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($staff as $employee)
                            <tr>
 
                                <th scope="row">
                                    {{ $employee->id }} 
                                </th>
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

                                    @if ($employee->active > 0)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                                <td>
                                    {{ $employee->role }}
                                </td>
                                <td>
                                    {{ $employee->field }}
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
        </div>

        
    </div>
@endsection
