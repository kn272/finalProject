<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something  $data contains the record that was selected on the table.

print_r($data);
?>

<form action="index.php?page=tasks&action=save" method="post" id="form1">
    owneremail : <input type="text" form="form1" name="owneremail" value=""><br>
    <!--ownerid    : <input type="text" form="form1" name="ownerid" value=""><br>-->
    createdDate: <input type="text" form="form1" name="createddate" value=""><br>
    dueDate    : <input type="text" form="form1" name="duedate" value=""><br>
    message    : <input type="text" form="form1" name="message" value=""><br>
    isDone     :<input type="text" form="form1"  name="isdone" value=""><br>
    <button type="submit" form="form1" value="create">create</button>
</form>





<script src="js/scripts.js"></script>
</body>
</html>
