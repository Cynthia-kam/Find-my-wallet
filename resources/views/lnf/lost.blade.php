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
  #grad,#grad2 {
 /* background-image: linear-gradient(to right,black , yellow);*/
 background-color: white;
    border: 1px solid;
  padding: 60px;
  box-shadow: 5px 10px 8px 10px #888888;
  margin: 50px;

}
.footer{
  background-color: grey;
  height: 150px;

}
.content{
  margin-left: 40px;
 
}
ul{text-decoration: none;}
.logo{
  
  display: flex;
  margin-left: 350px;

}
h1 {
font-family: "Lucida handwriting";
}
.all{
  display: flex;
}
.small:hover {
  background-color:ghostwhite; 

}
.navbar{
  height: 100px;
}

</style>
    
	<title>Lost|find my wallet</title>
    <link rel="icon" type="" href="/image/logo.jpg">
</head>
<body style="background-color: ghostwhite;">

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
  <span class="mt-4"><img src="/image/logo.jpg" style="height: 80px; width:80px;border-radius: 120px;"/></span><span><h1 style="margin-top: 40px; color: orange;">FINDMYWALLET.com</h1></span>
</div>
  </div>
</nav>



<form  method="POST" action="{{route('savelost')}}">
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

  <div class=" container pt-4 border mt-4 " id="grad">
   <h2>personal info</h2>
  <div class="row mb-4 mt-4">
   <div class="input-group mt-4 col">
  <span class="input-group-text ">NAMES:</span>
  <input type="text" class="form-control" placeholder="First Name" name="fname">
  <input type="text" class="form-control" placeholder="Last Name" name="lname">
</div>
</div>
 
  <div class=" row mb-4">
    <div class="col">
    <label for="phone" class="form-label">phone number</label><span style="Color:red;">*</span>
    <input type="text" class="form-control" id="" placeholder="ex:Jean" name="phone" required>
  </div></div>
  <div class=" row mb-4">
    <div class="col">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" id="" placeholder="email" name="email">
  </div></div>

</div>

  <div class=" container pt-4 border mt-4 mb-4 small" id="grad2">
   <h2>Lost item info</h2>
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
   
    <input type="text" class="form-control" id="" placeholder="please insert that id card number" name="IDno">
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
   
    <input type="text" class="form-control" id="" placeholder="please insert card number " name="EmpNo">
  </div></div>
  <div class="form-check mb-4">
    <label class="form-check-label">
      <input class="form-check-input studcard" type="checkbox" name="remember">student card number
    </label>
  </div>
   <div class=" row mb-4 input5" style="display: none;">
    <div class="col">
   
    <input type="text" class="form-control" id="" placeholder="please insert student number as it is written" name="studNo">
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
   <div><div>  <div class=" row mb-4">
    <div class="col">
   
  <div class="row mb-4">
    <div class="col">

                <label class="desc">Date Lost </label>     
                <span>
                                  <select id="lost_month" name="lost_month" class="select ">
                    <option value="">MM</option>
                    <option value="01">Jan</option>
                    <option value="02">Feb</option>
                    <option value="03">Mar</option>
                    <option value="04" selected="">Apr</option>
                    <option value="05">May</option>
                    <option value="06">Jun</option>
                    <option value="07">Jul</option>
                    <option value="08">Aug</option>
                    <option value="09">Sept</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                  </select>
                  <label>Month</label>
                </span>
                <span>
                                    <select name="lost_day" id="lost_day" class="select ">          
                    <option value="">DD</option>
                                          <option value="1">1</option>
                                          <option value="2" selected="">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                          <option value="13">13</option>
                                          <option value="14">14</option>
                                          <option value="15">15</option>
                                          <option value="16">16</option>
                                          <option value="17">17</option>
                                          <option value="18">18</option>
                                          <option value="19">19</option>
                                          <option value="20">20</option>
                                          <option value="21">21</option>
                                          <option value="22">22</option>
                                          <option value="23">23</option>
                                          <option value="24">24</option>
                                          <option value="25">25</option>
                                          <option value="26">26</option>
                                          <option value="27">27</option>
                                          <option value="28">28</option>
                                          <option value="29">29</option>
                                          <option value="30">30</option>
                                          <option value="31">31</option>
                                      </select>               
                  <label>Day</label>
                </span>
                <span>                  
                  <select id="lost_year" name="lost_year" class="select ">
                    <option value="">YYYY</option>                      
                                          <option value="2014">2014</option>
                                          <option value="2015">2015</option>
                                          <option value="2016">2016</option>
                                          <option value="2017">2017</option>
                                          <option value="2018">2018</option>
                                          <option value="2019">2019</option>
                                          <option value="2020">2020</option>
                                          <option value="2021">2021</option>
                                          <option value="2022" selected="">2022</option>
                                      
                  </select>
                  <label>Year</label>
                </span>                                       
              
    </div></div>
    <div class=" row mb-4">
    <div class="col">
    <label for="road" class="form-label">possible road</label>
    <input type="text" class="form-control" id="" placeholder="" name="road">
  </div></div>

  <button type="submit" class="btn btn-danger col-2">Submit</button>
</div>


</form>
</body>
</html>