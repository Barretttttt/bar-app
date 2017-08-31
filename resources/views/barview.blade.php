<title>Bartender View</title>

@extends('layouts.master')

@section('content')
<div class="container">
        <div class="masthead">
      <ul>
        <li><a href="{{ route('home')}}">Home</a></li>
        <li><a href="{{ route('menu')}}">Menu</a></li>
        <li><a href="{{ route('ingred')}}">Ingredients</a></li>
        <li><a class = "active">Bartender View</a></li>
      </ul>
    </div>

      <!-- Example row of columns -->

    
</div>
@endsection
