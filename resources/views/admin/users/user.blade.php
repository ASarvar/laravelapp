@extends('layouts.app')

@section('content')
<div class="container">
<div>
    @include('includes.search')
    
</div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                @include('home')
                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
