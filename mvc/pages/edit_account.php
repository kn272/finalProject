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
    .row.content {height: 700px}
    
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
        <li class="active"><a href="#">Update Profile</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">

    </div>
    <div class="col-sm-6 text-left"> 
      <h1><p class="text-center">UPDATE PROFILE</p></h1>
      <hr>
<form action="index.php?page=accounts&action=save&id=<?php echo $_SESSION['userID']; ?> " method="post">
  <div class="form-group">
    <label for="first name">First Name:</label>
    <input type="text" class="form-control" name="fname" value=<?php echo $data->fname; ?> required>
  </div>
    <div class="form-group">
    <label for="last name">Last Name:</label>
    <input type="text" class="form-control" name="lname" value=<?php echo $data->lname; ?> required>
  </div>
    <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" value=<?php echo $data->email; ?> required>
  </div>
    <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" name="phone" value=<?php echo $data->phone; ?> required>
  </div>
    <div class="form-group">
    <label for="birthday">Birthday:</label>
    <input type="text" class="form-control" name="birthday" value=<?php echo $data->birthday; ?> required>
  </div>
    <div class="form-group">
    <label for="gender">Gender:</label>
    <input type="text" class="form-control" name="gender" value=<?php echo $data->gender; ?> required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" name="password" value='' required>
  </div>
  <button class="btn btn-primary btn-block" type="submit" class="btn btn-default">Submit Form</button>
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
