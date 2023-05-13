<!-- http://localhost:8080/PHP-Apache/crudphp/update.php?id=1 -->
<?php
    include('includes/functions.php');
    if(isset($_POST['btnUpdate'])):
        update($_POST['fname'],$_POST['lname'],$_POST['phone'],$_POST['id']);
    endif;
$user = (isset($_GET['id'])) ? selectSingle($_GET['id']) : false;
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
    <?php if($user != false):?>
        <h1>Update Data</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']?>">
            <label for="fname">First name</label>
            <input type="text" id="fname" name="fname" value="<?php echo $user['fname'];?>"> 
            <br>
            <label for="lname">Last name</label>
            <input type="text" id="lname" name="lname" value="<?php echo $user['lname'];?>"> <br>
            <label for="phone">Phone number</label>
            <input type="text" id="phone" name="phone" value="<?php echo $user['phone'];?>"> 
            <br>
            <button name="btnUpdate"> Update Record</button>
        </form> 
    <?php else: ?>
        <h1> User is not set. Try again</h1>
    <?php endif;?>
</body>

</html>