<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>skill table form</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"></link>
    <style>
        .container {
            margin-right: -155px;
            padding-top: 108px;
        }
    </style>

</head>
<body>
  <div class="container ">
      <h2>skill</h2>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="title">Title:</label>
                      <input type="text"class="form-control form-control-sm" placeholder="enter your title" id="title">
                  </div>
                  <div class="form-group">
                      <label for="description">Description:</label>
                      <textarea class="form-control form-control-sm" id="description"id="description" rows="6" cols="23"></textarea>
                  </div>
                  <button type="button" class="btn btn-outline-primary">submit</button>
              </div>
              <div class="col-md-2">
                  <div class="form-group">

                      <button type="button" class="btn btn-outline-success"><a href="{{url('skill')}}"> Add New</a></button>
                  </div>
                  <button type="button" class="btn btn-danger">x</button>
              </div>
          </div>
  </div>
</body>
</html>
