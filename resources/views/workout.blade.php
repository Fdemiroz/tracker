@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Workouts</div>
                <div class="card-body">
                    {{ucfirst(Auth::user()->name)}}                
                        <?php print_r($workout);?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
