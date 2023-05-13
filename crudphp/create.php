<!-- http://localhost:8080/PHP-Apache/crudphp/create.php -->
<?php
    include('includes/functions.php');
    if(isset($_POST['btnInsert'])):
        insert($_POST['fname'],$_POST['lname'],$_POST['phone']);
    endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>

<body>
    <h1>Insert Data</h1>
    <form action="" method="post">
        <label for="fname">First name</label>
        <input type="text" id="fname" name="fname" value=""> 
        <br>
        <label for="lname">Last name</label>
        <input type="text" id="lname" name="lname" value=""> <br>
        <label for="phone">Phone number</label>
        <input type="text" id="phone" name="phone" value=""> 
        <br>
        <button name="btnInsert"> Insert Record</button>


    </form> 
</body>

</html>