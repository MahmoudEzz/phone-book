@extends('layouts.app')

@section('title', 'Add Phones')
    


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Add phone</h3>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <form action="{{route('phones.store')}}" method="POST">
                    
                    @include('phones.form')
    
                    <button type="submit" class="btn btn-primary">Add phones</button>
                </form>
            </div>
        </div>
    </div>
@endsection
