<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Damion" rel="stylesheet">
  <style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #030303;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
  text-decoration: none;
}

.active {
  background-color: #478b92;
  text-decoration: none;
}

b, strong{
  color:#fff;
  font-size:28px;
  text-shadow:15px 2px 25px #478b92;
  font-family: 'Damion', cursive;
}

a {
  text-decoration:none;
  outline:none;
  -moz-outline-style:none;
  color:#fff;
  -moz-transition-duration:0.8s;
  -webkit-transition-duration:0.8s;
  -o-transition-duration:0.8s;
}
 
a:hover {
  color:#000;
  outline:none;
  -moz-outline--tyle:none;
  text-decoration:none;
  border-radius: 20px 20px 20px 20px #000;
  -webkit-filter: blur(0px);
}

.buttons {
  background-color: #fff;
  border:1px solid #030303;
  text-align:center;
  font-weight:bold;
  display:inline-block;
  font-size:16px;
  margin:2px;
  padding:2px;
  width:150px;
}

.buttons:hover {
  background-color:#478b92;
  color:#2d2936;
}

.buttons a {
  text-decoration:none;
  outline:none;
  -moz-outline-style:none;
  color:#fff;
  -moz-transition-duration:0.8s;
  -webkit-transition-duration:0.8s;
  -o-transition-duration:0.8s;
}
 
.buttons a:hover {
  color:#000;
  outline:none;
  -moz-outline--tyle:none;
  text-decoration:none;
  border-radius: 20px 20px 20px 20px #000;
  -webkit-filter: blur(0px);
}

body{
  background-image: url('http://i.imgur.com/qsbjPWM.jpg');
  background-size: cover;  
  color:#fff;
}

p{
  color:#fff;
}

  </style>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
  </head>

  <body>

  
    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

    @yield('content')

  </body>
</html>

