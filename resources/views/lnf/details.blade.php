<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>details</title>
	<style type="text/css">
		#card{
		
		}
    #header{
      background-color: lightsteelblue;
    }
	</style>
</head>
<body>
<div class="card col mt-4" id="card">
  <div class="card-header" id="header"><h5>Details of what's inside</h5></div>
  <div class="card-body">
 
        <div class="card-body">
          @if(!empty($items->national_id))
        <h6 class="card-title">ID card no :{{$items->national_id}} </h6>
          @endif

          @if(!empty($items->insurance_id))
        <h6 class="card-title">Insurance card no :{{$items->insurance_id}} </h6>
          @endif

          @if(!empty($items->passport_number))
        <h6 class="card-title">Passport card no :{{$items->passport_number}} </h6>
          @endif

          @if(!empty($items->driving_licence_id))
         <h6 class="card-title">Driving license card no :{{$items->driving_licence_id}} </h6>
          @endif

          @if(!empty($items->employee_id))
          <h6 class="card-title">Employee card no :{{$items->employee_id}} </h6>
          @endif

          @if(!empty($items->student_id))
           <h6 class="card-title">Student card no : {{$items->student_id}}</h6>
          @endif
  </div>
  
  <div class="btn btn-success text-white rounded">claim</div>
  <div class="btn btn-success rounded"><a class="text-white" href="http://lnf.test/lnf/index">Back</a></div>    
    </hr>
  
  </div>
</div>
</body>
</html>