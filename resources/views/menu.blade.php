<title>Menu</title>

@extends('layouts.master')

@section('content')
<div class="container">
        <div class="masthead">
      <ul>
        <li><a href="{{ route('home')}}">Home</a></li>
        <li><a class="active">Menu</a></li>
        <li><a href="{{ route('ingred')}}">Ingredients</a></li>
        <li><a href="{{ route('barview')}}">Bartender View</a></li>
      </ul>
    </div>

      <!-- Example row of columns -->

    <div class="row">


      <div class="col-lg-4">
        <p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><br><br><br>
        <center><b>Beer</b>
          <p>
            <a href="http://google.com">
            <img src="http://i.imgur.com/tM9Hu8L.png" style="width:150px;height:150px;"></a>
          </p>
          <p><a class="btn btn-primary" href="#" role="button">Add to Order</a></center></p>
      </div>

      <div class="col-lg-4">
        <p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><br><br><br>
        <center><b>Gin and Tonic</b>
          <p>          
            <a href="http://google.com">
            <img src="http://i.imgur.com/SIcq3sR.png" style="width:150px;height:150px;"></a>
          </p>
          <p><a class="buttons" href="#" role="button">Add to Order</a></center></p>
      </div>

      <div class="col-lg-4">
        <p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><br><br><br>
        <center><b>Martini</b>
          <p>          
            <a href="http://google.com">
            <img src="http://i.imgur.com/p4FgSwd.jpg" style="width:150px;height:150px;"></a>
          </p>
          <p><a class="buttons" href="#" role="button">Add to Order</a></center></p>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-4">
        <p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>
        <center><b>Margarita</b>
          <p>          
            <a href="http://google.com">
            <img src="http://i.imgur.com/Fn7gthw.png" style="width:150px;height:150px;"></a>
          </p>
          <p><a class="buttons" href="#" role="button">Add to Order</a></center></p>
      </div>

      <div class="col-lg-4">
        <p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>
        <center><b>Bourbon</b>
          <p>          
            <a href="http://google.com">
            <img src="http://i.imgur.com/W9NavKt.jpg" style="width:150px;height:150px;"></a>
          </p>
          <p><a class="buttons" href="#" role="button">Add to Order</a></center></p>
      </div>

      <div class="col-lg-4">
        <p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>
        <center><b>Water</b>
          <p>          
            <a href="http://google.com">
            <img src="http://i.imgur.com/7Oz1Z07.jpg" style="width:150px;height:150px;"></a>
          </p>
          <p><a class="buttons" href="#" role="button">Add to Order</a></center></p>
      </div>
    </div>
</div>
@endsection
