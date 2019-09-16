@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif
                @if ($user->role > 0 )
                    Welcome admin {{ucfirst($user->name)}}    
                    {{User::all()}}                        
                @else
                    Welcome user {{ucfirst($user->name)}}
                @endif
                <hr>                     
                    <div class="row">
                     <div class="col-sm-4">
                     <p>Email: {{$user->email}}</p>
                     <p>Age: </p>
                     <p>Length in cm:</p>
                     <p>Weight in kg:</p>
                     <p>BMI:</p>
                     <p>Fat %:</p>
                     

                     </div>
                     <div class="col-sm-8">{{$user->email}}
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
