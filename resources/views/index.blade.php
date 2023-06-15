<!DOCTYPE html>  
<html>  
<head>  
   <title> CRUD Operation in Laravel </title>  
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">  
</head>  
<body>  
  
<div class="container">  
<h1> CRUD Operation in Laravel </h1>  
  
<a href="form" class="btn btn-success">Add User</a>  
  <br>
  <br>
  
<table class="table table-borderd">  
   <tr>  
      <th>Name</th>  
      <th>Email</th>  
      <th>City</th>  
      <th>Action</th>  
   </tr>  
   @foreach($mydata as $udata)
   <tr>
      <td>{{$udata['id']}}</td>
      <td>{{$udata['email']}}</td>
      <td>{{$udata['city']}}</td>
      <td>
         <a href={{'edit/'.$udata['id']}} class='btn btn-primary'>Edit</a>
         <a href={{'delete/'.$udata['id']}} class='btn btn-danger'>Delete</a>
         
      </td>
   </tr>
   @endforeach
     
</table>  
</div>  
  
</body>  
</html>  