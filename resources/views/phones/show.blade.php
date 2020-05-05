@extends('layouts.app')

@section('title', 'Customer:'.$phone->number)
    

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Phones</h3>
                <a href="{{route('phones.edit',['phone'=>$phone])}}">Edit</a>
            <form action="{{route('phones.destroy',['phone'=>$phone])}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p> <strong>ID: </strong>{{$phone->id}}</p>
                <p> <strong>Number: </strong>{{$phone->number}}</p>
                <p><strong>User name: </strong>{{$phone->user->name}}</p>
            </div>
        </div>        
    </div>
@endsection