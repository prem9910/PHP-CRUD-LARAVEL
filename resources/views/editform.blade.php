 
<!DOCTYPE html>  
<html>  
<head>  
   <title> CRUD Operation </title>  
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">  
</head>  
<body>  
  
<div class="container">  
   <h1>Update Details</h1>  
   <br>
   <a href="/" class="btn btn-primary">Back</a>  
   <br>
   <form action="/update" method="post">  
       @csrf
       <input type="hidden" name="id" value="{{$mydata['id']}}">
       <div class="form-group">  
           <strong>Name:</strong>  
           <input type="text" name="name" required="" value="{{$mydata['name']}}" class="form-control" placeholder="Name">  
        </div>
        <div class="form-group">  
            <strong>Email:</strong>  
            <input type="text" name="email" required="" value="{{$mydata['email']}}" class="form-control" placeholder="Email">  
        </div>
        <div class="form-group">  
            <strong>City:</strong>  
            <input type="text" name="city" required="" value="{{$mydata['city']}}" class="form-control" placeholder="City">  
        </div>
        <div class="form-group">  
            <button type="submit" name="submit" class="btn btn-success">Submit</button>  
        </div>  
    </form>  
</div>  
  
</body>  
</html>  