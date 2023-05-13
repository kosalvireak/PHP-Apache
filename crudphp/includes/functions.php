<?php
require_once('db.php');

function formatcode($arr){
    echo '<pre>';
    print_r($arr);
    echo "</pre>";
}

// select

function selectAll(){
    global $mysqli;
    $data = array();
    $stmt = $mysqli->prepare('SELECT * FROM employees');
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows===0) echo('No rows');
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $stmt->close();
    return $data;
}

function selectSingle($id = NULL){
    global $mysqli;
    $stmt = $mysqli->prepare('SELECT * FROM employees WHERE id = ?');
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows===0) echo('No rows');
    $row = $result->fetch_assoc();    
    $stmt->close();
    return $row;
}