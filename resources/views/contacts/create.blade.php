@extends('layouts.app')

@section('title', 'Add contacts')
    


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Add contact</h3>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <form action="{{route('contacts.store')}}" method="POST">
                    
                    @include('contacts.form')
    
                    <button type="submit" class="btn btn-primary">Add contacts</button>
                </form>
            </div>
        </div>
    </div>
@endsection
