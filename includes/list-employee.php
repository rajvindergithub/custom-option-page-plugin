<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
  
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    
    
</head>
<body>

<div class="container">
  <h2>Employees Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Designation</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Male</td>
        <td>CEO</td>
        <td>Active</td>
      </tr>
     
    </tbody>
  </table>
</div>

</body>

    
    
    <script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    
    </script>
    
</html>
