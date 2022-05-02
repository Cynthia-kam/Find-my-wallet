<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script scr="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.logo{
  
  display: flex;
  margin-left: 350px;

}
h3 {
font-family: "Lucida handwriting";
}
#login{
  background-color: white;
    border: 1px solid;
  padding: 40px;
  box-shadow: 5px 10px 8px 10px #888888;
}
.navbar{height: 55px;}
a:hover{background-color: yellow;border-radius: 10px;}

</style> 
    
	<title>Login|find my wallet</title>
    <link rel="icon" type="" href="/image/logo.jpg">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="http://lnf.test/lnf">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Lost</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Found</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">about</a>
      </li>
    </ul>
      <div class="logo ">
  <span class="mt-2 mb-2"><img src="/image/logo.jpg" style="height: 50px; width:50px;border-radius: 120px;"/></span><span><h3 style="margin-top: 20px; color: orange;">FINDMYWALLET.com</h3></span>
</div>
  </div>
</nav>
<!-- @if($message = Session::get('error'))
<div class="alert alert-danger alert-block">
 <button type="button" class="close" data-dismiss="alert">x</button> 
<strong>{{$message}}</strong>
</div>
@endif


 @if  (count($errors)>0)
 <div class="alert alert-danger">
   <ul>
     @foreach($errors->all() as $error)
     <li>{{$error}}</li>
     @endforeach
   </ul>
 </div>
 @endif -->

<!-- <div class="logo mt-4">

  <img src="/image/logo.jpg" style="height: 120px; weight:120px;border-radius: 120px;"/><h1 style="margin-top: 40px; color: orange;">FINDMYWALLET.com</h1>
</div> -->

<form action="{{route('check')}}" method="POST">
  @if(Session::get('success'))
<div class="alert alert-success">
  {{Session:: get('success') }}
</div>
@endif

@if(Session::get('fail'))
<div class="alert alert-danger">
  {{Session:: get('fail') }}
</div>
@endif
  {!! csrf_field() !!}
  <div class="col-4 container pt-4 rounded-top mt-4" id="login">
   
  <div class="row mb-4 mt-4">
    <div class="col">
    <label for="phone" class="form-label">phone number:</label>
    <input type="text" class="form-control" id="" placeholder="Enter phone number" name="phone">
  </div>
 <span class="text-danger">@error('phone'){{($message)}}@enderror</span>
</div>
  <div class=" row mb-4">
    <div class="col">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
  </div>
 <span class="text-danger">@error('password'){{($message)}}@enderror</span>
</div>
  <div class="form-check mb-4">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
 <!--  <div>
    <a href="{{ route('lnf.register')}}"> i have an account, sign in</a>
  </div> -->
  <button type="submit" class="btn btn-primary col-3">Log in</button>
</div>
</form>
</div>
<div class="footer mt-4 bg-dark" style="color: white" >
 <center><h6 ><b>copyright 2022 cynthia-kam&copy; <!-- &reg; --></b></h6></center>
 <div class="content">
   <ul>
     <li>
      <a href="#" class="text-light bg-dark">
       about us</a>
     </li>
     <li>
      <a href="#" class="text-light bg-dark">

       contacts
     </li>
     <li>
      <a href="#" class="text-light bg-dark">

       social
     </li>
     <li>
      <a href="#" class="text-light bg-dark">

       help
     </li>
   </ul>
 </div>
 
</div>
</body>
</html>