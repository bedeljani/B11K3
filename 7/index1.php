<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($koneksi,"SELECT name.nama, work.name, category.salary FROM name
JOIN work ON name.id_work = work.id
JOIN category ON name.id_salary = category.id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arkademy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
            <nav>
                <nav class="navbar navbar-light bg-light">
                    <span class="navbar-brand mb-0 h1" ><h2>Arkademy</h2></span>
                <button class="btn btn-success" data-toggle="modal" data-target="#addUser">ADD</button>
        </nav>

  <table class="table table-striped" id="table">
    <table class="table">
    <thead class="thead-light ">
      <tr>
        <th>Name</th>
        <th>Work</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
   <?php  
    while($data = mysqli_fetch_array($result)) {         
     ?>
      <tr>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['name']; ?></td>
      <td><?php echo $data['salary']; ?></td>
      <td>
                            <a data-toggle="modal" data-target="#editUser" class="btn btn-sm btn-info edit" data-id="<?php echo $data['id']; ?>" data-name="<?php echo $data['nama']; ?>" data-work="<?php echo $data['nama']; ?>" data-category="<?php echo $data['salary']; ?>" >EDIT</a>
                            <a data-toggle="modal" data-target="#deleteUser" class="btn btn-sm btn-danger delete" data-id="{{id}}">DELETE</a>
    </td>
    </tr>
    <?php } ?>

  </table>
</div>
<!-- ADD -->
            <form action="/add" method="post">
        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="userLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="userLabel">ADD</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
               <div class="form-group">
                   <input type="text" name="name" class="form-control" placeholder=" Name..." required>
               </div>

               <div class="form-group">
                    <select id="position" name="work" class="form-control" required>
                        <option selected disabled>Work...</option>
                        <option>Frontend Dev</option>
                        <option>Backend Dev</option>
                    </select>
                </div>

                <div class="form-group">
                    <select id="position" name="salary" class="form-control" required>
                        <option selected disabled>Salary...</option>
                        <option>10.000.000</option>
                        <option>12.000.000</option>
                    </select>
                </div>

             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-success ">ADD</button>
             </div>
           </div>
         </div>
        </div>
   </form>

<!-- EDIT -->
<form action="/edit" method="post">
        <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="userLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="userLabel">EDIT</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
               <div class="form-group">
                <form role="form" action="editmhs.php" method="get">

  

                   <input type="text" name="name" class="form-control"   required>
               </div>

               <div class="form-group">
                    <select id="position" name="work" class="form-control"  required>
                        <option selected disabled>Work...</option>
                        <option>Frontend Dev</option>
                        <option>Backend Dev</option>
                    </select>
                </div>

                <div class="form-group">
                    <select id="position" name="salary" class="form-control"  required>
                        <option selected disabled>Salary...</option>
                        <option>10.000.000</option>
                        <option>12.000.000</option>
                    </select>
                </div>
             </div>
             <div class="modal-footer">
                 <input type="hidden" name="id" class="id">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-success ">EDIT</button>
             </div>
         
           </div>
         </div>
        </div>
   </form>


<!-- DELETE -->
<form id="add-row-form" action="/delete" method="post">
<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="userLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userLabel">DELETE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <strong>Are you sure to delete this?</strong>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="form-control id2" required>
                <button type="button" class="btn btn-defaullt" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">DELETE</button>
            </div>
        </div>
    </div>
</div>
</form> 

<script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script>
    $(document).ready(function(){
        //edit
        $('#table').on('click','.edit',function(){
            var id = $(this).data('id');
            var name = $(this).data('nama');
            var work = $(this).data('name');
            var salary = $(this).data('salary');
            $('#editUser').modal('show');
            $('.name').val(nama);
            $('.work').val(name);
            $('.salary').val(salary);
            $('.id').val(id);
        });
        //delete
        $('#table').on('click', '.delete', function(){
            var id = $(this).data('id');
            $('#deleteUser').modal('show');
            $('.id2').val(id);
        });
    });
</script>
</body>


</html>