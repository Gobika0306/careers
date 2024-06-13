
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudin Careers</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
@if($message = Session::get('success'))
     <div class="alert alert-success alert-block">
      <strong> {{ $message }}</strong>
     </div>
     @endif
<h1 style="font-size:20px; margin-left:15%" >DEPARTMENTS LIST</h1>


      <div class="container">
        <div class="col-sm-8">
          <div class="card mt-3 p-3">
          <form method="POST" action="/departments/store">
            @csrf
            <div class="form-group">
              <label>Departments </label><br>
              <input type="text" name="Departments" class="form-control" placeholder= " Department Name " required>
              <div class="text-right">
                <button type="submit" class="btn btn-primary mt-3">ADD NOW</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  
</body>
</html>
