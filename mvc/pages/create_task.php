
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Todo tasks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #0d0d0d;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TODO tasks</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Create Task</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">

    </div>
    <div class="col-sm-6 text-left"> 
      <h1><p class="text-center">CREATE TASK</p></h1>
      <hr>
      <?php date_default_timezone_set('America/New_York'); ?>
      <form action="index.php?page=tasks&action=save" method="post">
        <div class="form-group">
         <label for="owneremail">Owner Email:</label>
         <input type="email" class="form-control" name="owneremail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value=<?php session_start(); echo $_SESSION["email"] ?>>
        </div>
        <div class="form-group">
         <label for="createddate">Created Date:</label>
         <input type="text" class="form-control" name="createddate" value=<?php echo date('Y-m-d')?> readonly>
        </div>
        <div class="form-group">
         <label for="duedate">Due Date(yyyy-mm-dd):</label>
         <input type="text" class="form-control" name="duedate" required>
        </div>
        <div class="form-group">
         <label for="message">Message:</label>
         <input type="text" class="form-control" name="message" required>
        </div>
        <div class="form-group">
         <label for="isdone">isdone:</label>
         <input type="number" min="0" max="1" class="form-control" name="isdone" required>
        </div>
        <button class="btn btn-primary btn-block" type="submit" >Create</button>
      </form>       
    </div>
    <div class="col-sm-3 sidenav">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Web Systems Development Final Project</p>
</footer>

</body>
</html>
