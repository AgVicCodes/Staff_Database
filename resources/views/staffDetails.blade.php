@extends('layouts/temp')

@section('title', 'STAFF')

@section('content')
    <div class="container">
        <h1>STAFF DETAILS</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{ $staff->name }}
                @if ( $staff->active > 0)
                    Active
                @else
                    Inactive
                @endif
                
                {{ $staff->wage }}
                {{ $staff->role }}
                {{ $staff->field }}
                {{-- {{ $staff-> }} --}}
            
            </div>
        </div>
    </div>
@endsection
