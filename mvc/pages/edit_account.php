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

<form action="index.php?page=accounts&action=store&id=<?php echo $data->id; ?> " method="post" id="form1">
    email      : <input type="text" form="form1" name="email" value=<?php echo $data->email; ?>><br>
    fname      : <input type="text" form="form1" name="fname" value=<?php echo $data->fname; ?>><br>
    lname      : <input type="text" form="form1" name="lname" value=<?php echo $data->lname; ?>><br>
    phone      : <input type="text" form="form1" name="phone" value=<?php echo $data->phone; ?>><br>
    birthday   : <input type="text" form="form1" name="birthday" value=<?php echo $data->birthday; ?>><br>
    gender     : <input type="text" form="form1"  name="gender" value=<?php echo $data->gender; ?>><br>
    password   : <input type="text" form="form1"  name="password" value=<?php echo $data->password; ?>><br>
    <button type="submit" form="form1" value="edit">save</button>
</form>





<script src="js/scripts.js"></script>
</body>
</html>

