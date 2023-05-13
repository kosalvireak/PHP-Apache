<!-- http://localhost:8080/PHP-Apache/crudphp/delete.php?id=4 -->
<?php
    include('includes/functions.php');
    $user = (isset($_GET['id'])) ? delete($_GET['id']) : exit();
?>