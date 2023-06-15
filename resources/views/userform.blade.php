 
<!DOCTYPE html>  
<html>  
<head>  
   <title> CRUD Operation using MongoDB and PHP </title>  
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">  
</head>  
<body>  
  
<div class="container">  
   <h1>Create User</h1>  
   <a href="index.php" class="btn btn-primary">Back</a>  
   <br>
   <br>
   <form action="adduser" method="POST">  
    @csrf
      <div class="form-group">  
         <strong>Name:</strong>  
         <input type="text" name="name" required="" class="form-control" placeholder="Name">  
      </div>
      <div class="form-group">  
         <strong>Email:</strong>  
         <input type="text" name="email" required="" class="form-control" placeholder="Email">  
      </div>
      <div class="form-group">  
         <strong>City:</strong>  
         <input type="text" name="city" required="" class="form-control" placeholder="City">  
      </div>
      <div class="form-group">  
         <button type="submit" name="submit" class="btn btn-success">Submit</button>  
      </div>  
   </form>  
</div>  
  
</body>  
</html>  