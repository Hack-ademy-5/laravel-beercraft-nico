@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="py-5">
                <h1>{{$brewery->name}}</h1>
                <p>{{$brewery->description}}</p>
            </div>
        </div>
    </div>
</div>
@endsection