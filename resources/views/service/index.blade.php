@extends('app')

@section('title', 'services')

@section('content')

<h1>Hello Laravel</h1>
<ul>
    @forelse($services as $service) 
    <li>{{$service->name}}</li>
    @empty
    NO services found 
    @endforelse
</ul>
<ul>
    <form action="/service" method="post">
        @csrf
        <input type="text" name="name">
        
        <button type="submit" autocomplete="off"> Add Service</button>
    </form>
    <p style="color: red;"> @error('name') {{$message}} @enderror </p>
</ul>
@endsection