@extends('layouts.app')

@section('title', 'Mobile numbers')
    


@section('content')
@if (session()->has("message"))
<div class="alert alert-success" role="alert">
    <strong>Success</strong> {{session()->get("message")}}
  </div>
@endif
@if (session()->has("failed"))
<div class="alert alert-danger" role="alert">
    <strong>Filed </strong> {{session()->get("failed")}}
  </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Contacts</h3>
            {{-- @can('create', App\Phone::class) --}}
                <p><a href="{{route('contacts.create')}}" >Add Contact</a></p>
            {{-- @endcan --}}
        </div>
    </div>

    @foreach ($contacts as $contact)
        <div class="row">
            <div class="col-2">
                {{$contact->id}}
            </div>
            <div class="col-4">
                <a href="/contacts/{{$contact->id}}">
                    {{$contact->name}}
                </a>
            </div>
            <div class="col-4">
                <ul>
                    @foreach ($contact->phones as $phone)
                        <li>{{$phone->number}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-2">
                <form action="{{route('contacts.destroy',['contact'=>$contact])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>        
    @endforeach

</div>

@endsection