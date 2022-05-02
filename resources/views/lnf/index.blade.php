<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style type="text/css">
      #lost{
        margin-left: 60px;
        margin-top: 10px;
        background-color: lightcoral;
      }
      #found{
        margin-left: 60px;
        margin-top: 30px;
        background-color: lightsteelblue;
      }
      #small{
        overflow-y: scroll;
        height: 600px;

      }

      .list{
        margin-top: 10px;
      }
     #sidebar{
      padding-left: 70px;

     }
     #sidebar:hover{
      background-color: lightgray;

     }
    </style>
  <title>Index|find my wallet</title>
  <link rel="icon" type="" href="/image/logo.jpg">
</head>
<body><nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="http://lnf.test/lnf/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="http://lnf.test/lnf/lost">Lost</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="http://lnf.test/lnf/found">Found</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">about</a>
      </li>
    </ul>
     
  </div>
</nav>
   <div class="d-flex" >

    <div class=" col-2  mt-2" id="small">
      <span class="d-flex">
      <input type="text" class="form-control" placeholder="Search" >
      <button class="btn border fa fa-search " type="submit"></button>
    </span>
    <div class="list-group list">
  <a href="#" class="list-group-item text-strong" id="sidebar">lost items</a>
  <a href="#" class="list-group-item" id="sidebar">found items</a>
  <a href="#" class="list-group-item" id="sidebar">more</a>
  <a href="#" class="list-group-item" id="sidebar">login</a>
  <a href="#" class="list-group-item" id="sidebar">sign up</a>
  <a href="#" class="list-group-item" id="sidebar">contact us</a>

</div>
    </div>
    <div class="row">
   <!--  LOST ITEMS -->
      <div class=" col-10 text-white " id="lost">
      <h3 class="fs-4 mb-3">Recent lost items</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#id</th>
                                    <th scope="col">item </th>
                                    <th scope="col">items inside</th>
                                    <th scope="col">date lost</th>
                                    <th scope="col">possible road</th>

                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($losts as $lost)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$lost->description}}</td>
                                    <td>national id:{{$lost->national_id}}</td>
                                    <td>{{$lost->road}}</td>
                                    <td>{{$lost->created_at}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
    </div>
   <!--  FOUND ITEMS -->
    <div class=" col-10 text-white " id="found">
      <h3 class="fs-4 mb-3">Recent found items</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#id</th>
                                    <th scope="col">item description</th>
                                    <th scope="col">date posted</th>
                                    <th scope="col">possesed by</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->phone}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
    </div>
  </div>
</div>
</body>
</html>