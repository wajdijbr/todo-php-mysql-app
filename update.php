<!DOCTYPE   html>
<?php include 'db.php'; 

$id=(int)$_GET['id'];
$sql = "select * from tasks where id = '$id'";
$rows=$db->query($sql);
$row=$rows->fetch_assoc();
if(isset($_POST['send'])){
   $name=htmlspecialchars($_POST['task']);
   $sql2="update tasks set name='$name' where id='$id' ";
   $db->query($sql2);
   header('location:index.php');
}
// var_dump($row);


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
               <h1>Update Todo List</h1>
            </center>
            <div class="col-md-10 col-md-offset-1">
               <hr/><br/>

        <form  method="post" >
         <div class="form-group">
            <label>Task Name</label>
            <input type="text" value="<?php echo $row['name'];?>" required name="task" class="form-control"></input>
         </div>
         <input type="submit" required name="send" value="Add Task" class="btn btn-success"></input>&nbsp;
         <a href="index.php" class="btn btn-warning ">Back</a>
        </form>
   
            </div>

         </div>
      </div>
   </body>
</html>