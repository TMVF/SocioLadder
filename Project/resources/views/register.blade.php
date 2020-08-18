<!DOCTYPE html>
<html>
 <head>
  <title>Socio Ladder</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Socio Ladder</h3><br />

   <form action="/user" method="post">
{{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  
  </div>
 </body>
</html>