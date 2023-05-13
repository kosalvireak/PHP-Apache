<!-- http://localhost:8080/crudphp/ -->

<?php
include('includes/functions.php');
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
    <h1>Welcome To KosalVireak</h1>
    <?php
        formatcode(selectAll());
        formatcode(selectSingle(1));
        $user = selectSingle(1);
        echo 'Welcome, '.$user['fname'].' '.$user['lname'];
    ?>
</body>

</html>