<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewpoint"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars application</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
   <div class="container-fluid">
       <div class="jumbotron jumbotron-fluid bg-danger p-1">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <h1 class="display-2 text-white">Cars</h1>
                       <p class="lead text-white
">A Web Based Application That Creates Cars</p>
                   </div>
                   <div class="col-md-12">
                       <img src="img/charge-mustang-01.jpg" alt="Mustang">
                   </div>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-md-6">
            <form action="{{route('cars.create')}}" method="post">
                @csrf
                <div class="row form-group">
              <div class="col-md-12">
                 <label for="">Make: </label>
                 <input type="text" name="make" class="form-control" required>
              </div>
              </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Model: </label>
                        <input type="text" name="model" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Produced on: </label>
                        <input type="date" name="produced_on" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success w-50 float-right">Create</button>
                    </div>
                </div>
            </form>
           </div>
           <div class="col-md-6">
            <table class="table table-striped table-hover">
             <tr>
               <th>Make</th>
                 <th>Model</th>
                 <th>Produced on</th>
             </tr>
                @foreach($cars as $car)
                <tr>
                    <td>{{ $car->make}}</td>
                    <td>{{ $car->model}}</td>
                    <td>{{ $car->produced_on}}</td>
                </tr>
                @endforeach
            </table>
           </div>

       </div>
   </div>



</body>
</html>
