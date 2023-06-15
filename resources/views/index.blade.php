<!DOCTYPE html>  
<html>  
<head>  
   <title> CRUD Operation in Laravel </title>  
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">  
   <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
 
</head>  
<body>  
  
<div class="container">  
<h1> CRUD Operation in Laravel </h1>  
  
<a href="form" class="btn btn-success">Add User</a>  
  <br>
  <br>
  
<table id="data" style="width:100%" class="table display table-borderd">  
   <thead>
      <tr>  
         <th>Name</th>  
         <th>Email</th>  
         <th>City</th>  
         <th>Action</th>  
      </tr>  
   </thead>
   <tbody>
   @foreach($mydata as $udata)
   <tr>
      <td>{{$udata['name']}}</td>
      <td>{{$udata['email']}}</td>
      <td>{{$udata['city']}}</td>
      <td>
         <a href={{'edit/'.$udata['id']}} class='btn btn-primary'>Edit</a>
         <a href={{'delete/'.$udata['id']}} class='btn btn-danger'>Delete</a>
         
      </td>
   </tr>
   @endforeach
</tbody>
     
</table>  
</div>  
  <script>
      $(document).ready(function () {
    $('#data').DataTable({
        order: [[3, 'desc']],
    });
});
  </script>
</body>  
</html>  