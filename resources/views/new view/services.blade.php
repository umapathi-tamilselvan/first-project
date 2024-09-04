@extends('new view.app')
@section('title','Services')
@section('content')
<h1>Welcome from Services</h1>
<ul>
   @forelse ($services as $service)
    <li>{{$service}}</li>
    @empty
    <h1>Noservice Avilable</h1>
   @endforelse
</ul>
@endsection
