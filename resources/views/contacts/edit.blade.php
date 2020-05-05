@extends('layouts.app')

@section('title', 'Edit Phone')
    


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Edit mobile : {{$phone->number}}</h3>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <form action="{{ route('phones.update', ['phone'=> $phone]) }}" method="POST">
                    @method('PATCH')
                    @include('phones.form')
                    
                    <button type="submit" class="btn btn-primary">Save phone</button>
                </form>
            </div>
        </div>
    </div>
@endsection
