<!DOCTYPE   html>
<?php include 'db.php'; 
$page = (isset($_GET['page']) ? (int)$_GET['page']  : 1);
$perPage=(isset($_GET['per-page'])&& ((int)$_GET['per-page'])<=50 ? (int)$_GET['per-page'] :5);
$start = ($page>1)?($page * $perPage) - $perPage : 0;
$sql = "select * from tasks limit ".$start." , ".$perPage." ";
$total = $db->query("select * from tasks")->num_rows;
$pages= ceil($total / $perPage);

$rows=$db->query($sql);

?>
<html>
   <head>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
   <title>Crud App</title>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <center>
               <h1>Todo List</h1>
            </center>
            <div class="col-md-10 col-md-offset-1">
            <table class="table">
               <button type="buttom" class="btn btn-success" data-target="#myModal" data-toggle="modal" >Add Task</button>
               <button type="buttom" class="btn btn-default pull-right" onclick="print()">Print</button>
               <hr/><br/>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body" >
        <form action="add.php" method="post" >
         <div class="form-group">
            <label>Task Name</label>
            <input type="text" required name="task" class="form-control"></input>
         </div>
         <input type="submit" required name="send" value="Add Task" class="btn btn-success"></input>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <thead>
    <tr>
      <th scope="col">ID.</th>
      <th scope="col">Task</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php while($row = $rows ->fetch_assoc()): ?>
         
     
      <th ><?php echo $row['id'] ?></th>
      <td class="col-md-10"><?php echo $row['name'] ?></td>
      <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success" >Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" >Delete</a></td>
   
    </tr>
    <?php endwhile; ?>
 
  </tbody>
</table>
<center>
   <ul class="pagination">
      <?php for ($i = 1;$i<=$pages;$i++):?>
      <li>
         <a href="?page=<?php echo $i;?>&per-page=<?php echo $perPage;?>"><?php echo $i;?> </a>
      </li>
      <?php endfor?>;
   </ul>
</center>
            </div>

         </div>
      </div>
   </body>
</html>