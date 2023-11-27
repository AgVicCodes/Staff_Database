@extends('layouts/temp')

@section('title', 'STAFF DB')

@section('content')
    <div class="container">
        <h1>STAFF DATABASE</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="bg-red-500">Hello</div>

                <button class="rounded-md">Add new staff</button>
                <br>
                @foreach ($staff as $employee)
                
                    {{ $employee->id }} 
                    {{ $employee->name }}
                    {{ $employee->email }}
                    {{ $employee->role }}
                    {{ $employee->status }}
                    {{ $employee->wage }}
                    {{ $employee->home_address }}
                    {{ $employee->field }}
                    <br> 
                    
                @endforeach
                
                
                
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
