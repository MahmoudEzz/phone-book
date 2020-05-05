@extends('layouts.app')

@section('title', 'Mobile numbers')
    


@section('content')
@if (session()->has("message"))
<div class="alert alert-success" role="alert">
    <strong>Success</strong> {{session()->get("message")}}
  </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Phones</h3>
            {{-- @can('create', App\Phone::class) --}}
                <p><a href="{{route('phones.create')}}" >Add Phone</a></p>
            {{-- @endcan --}}
        </div>
    </div>

    @foreach ($phones as $phone)
        <div class="row">
            <div class="col-2">
                {{$phone->id}}
            </div>
            <div class="col-4">
                <a href="/phones/{{$phone->id}}">
                    {{$phone->number}}
                </a>
            </div>
            {{-- <div class="col-4">{{$phone->user->name}}</div> --}}
        </div>        
    @endforeach

</div>

@endsection