@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>All contacts</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul>
                @foreach ($contacts as $contact)
                    <li>{{$contact->name}},{{$contact->email}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection