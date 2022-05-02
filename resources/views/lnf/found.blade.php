<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
$(document).ready(function(){
  $(".id").click(function(){
    $(".input1").toggle();
  });
});
$(document).ready(function(){
  $(".insurance").click(function(){
    $(".input2").toggle();
  });
});
$(document).ready(function(){
  $(".dlicense").click(function(){
    $(".input3").toggle();
  });
});
$(document).ready(function(){
  $(".empcard").click(function(){
    $(".input4").toggle();
  });
});
$(document).ready(function(){
  $(".studcard").click(function(){
    $(".input5").toggle();
  });
});
$(document).ready(function(){
  $(".passnum").click(function(){
    $(".input6").toggle();
  });
});
</script>

    <style type="text/css">
    	
.logo{
  
  display: flex;
 /* margin-left: 350px;*/

}

h1 {
font-family: "Lucida handwriting";
}
.footer{
  
  height: 150px;

}
#formcontainer{
  background-image: url("/image/allbg.jpg");
/*    filter: blur(8px);
  -webkit-filter: blur(8px);*/
}
#grad{
  background-color: white;
    border: 1px solid;
  padding: 60px;
  box-shadow: 5px 10px 8px 10px #888888;
}
.navbar{
  height: 100px;
}

    </style>
	<title>Found</title>
  <link rel="icon" type="" href="/image/logo.jpg">
</head>
<body style="background-color: ghostwhite;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="http://lnf.test/lnf/index">Home</a>
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
     <div class="input-group mt-1">
  <input type="text" class="form-control" placeholder="Search" style="border-radius: 14px;">
  <button class="btn btn-warning fa fa-search" type="submit">Go</button>
</div>
  </div>
</nav>
<!-- <div class="logo mt-4" id="formcontainer">
  
  <img src="/image/logo.jpg" style="height: 120px; weight:120px;border-radius: 120px;"/><h1 style="margin-top: 40px; color: orange;">FINDMYWALLET.com</h1>
  
</div> -->

<div >
<form action="{{route('savefound')}}" method="post">
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
  <div class="all">
  <div class="col-6 container pt-4 mt-4 mb-4" id="grad">
  <div class="text-center text-danger"><h3>--REPORT FOUND ITEM--</h3></div>
  <div class="row mb-4 mt-4">
   <div class=" mt-4 col">

  <label for="name" class="form-label">Full name </label><span class="text-danger" >*</span>
  <input type="text" class="form-control" placeholder="your full Name" name="names">
</div></div>
    <div class="row mb-4 mt-4">
   <div class=" mt-4 col">

   	<label for="phone" class="form-label">phone number </label><span class="text-danger" >*</span>
  <input type="text" class="form-control" placeholder="your phone number" name="phone">
</div>
</div>
 
  <div class=" row mb-4">
    <div class="col">
    <label for="phone" class="form-label">found item description</label><span style="Color:red;">*</span>
     <textarea class="form-control" id="" rows="3" name="description"></textarea>
  </div></div>
  <h3>please select what was inside the found property </h3>
   <div class="form-check mb-4">
    <label class="form-check-label">
      <input class="form-check-input id" type="checkbox" name="remember"  >ID card
    </label>
  </div>
  <div class="row mb-4 mt-4 input1" style="display: none;">
    <div class="col">
   
    <input type="text" class="form-control" id="" placeholder="please insert that id card number" name="idnumber">
  </div>
</div>

   <div class="form-check mb-4">
    <label class="form-check-label">
      <input class="form-check-input insurance" type="checkbox" name="remember">insurance card
    </label>
  </div>
  <div class=" row mb-4 input2" style="display: none;">
    <div class="col">
    <input type="text" class="form-control" id="" placeholder="please insert the insurance card number aas it is written" name="insurance">
  </div></div>
   <div class="form-check mb-4">
    <label class="form-check-label">
      <input class="form-check-input dlicense" type="checkbox" name="remember"> Driver's license
    </label>
  </div>
  <div class=" row mb-4 input3" style="display: none;">
    <div class="col">
    
    <input type="text" class="form-control" id="" placeholder="please insert the driving license number as it appears on it!" name="dlicense" >
  </div></div>

   <div class="form-check mb-4">
    <label class="form-check-label">
      <input class="form-check-input empcard" type="checkbox" name="remember"> Employee card
    </label>
  </div>
   <div class=" row mb-4 input4" style="display: none;">
    <div class="col">
   
    <input type="text" class="form-control" id="" placeholder="please insert card number " name="empcard">
  </div></div>
  <div class="form-check mb-4">
    <label class="form-check-label">
      <input class="form-check-input studcard" type="checkbox" name="remember">student card number
    </label>
  </div>
   <div class=" row mb-4 input5" style="display: none;">
    <div class="col">
   
    <input type="text" class="form-control" id="" placeholder="please insert student number as it is written" name="studcard">
  </div></div>

   <div class="form-check mb-4">
    <label class="form-check-label">
      <input class="form-check-input passnum" type="checkbox" name="remember"> passport number
    </label>
  </div>

     <div class=" row mb-4 input6" style="display: none;">
    <div class="col">
    
    <input type="text" class="form-control" id="" placeholder="please insert passport number as it appears on the card" name="passport">
  </div></div>
   <div><div>

  <button type="submit" class="btn btn-warning col-2 mb-4">Submit</button>
</div>
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

</body>
</html>