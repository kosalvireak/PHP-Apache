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

function insert($fname = NULL,$lname = NULL,$phone = NULL){
    global $mysqli;
    $stmt = $mysqli->prepare('INSERT INTO employees (fname,lname,phone) VALUE (?,?,?)');
    $stmt->bind_param('sss', $fname, $lname, $phone);
    $stmt->execute();
    $stmt->close();
    header('Location: update.php?id=' . $mysqli->insert_id);
}

function update($fname = NULL,$lname = NULL,$phone = NULL, $id){
    global $mysqli;
    $stmt = $mysqli->prepare('UPDATE employees SET fname = ?, lname = ?, phone = ? WHERE id=?');
    $stmt->bind_param('sssi', $fname, $lname, $phone,$id);
    $stmt->execute();
    if ($stmt->affected_rows === 0)
        echo ('No row updated');
    $stmt->close();
}

function delete($id){
    global $mysqli;
    $stmt = $mysqli->prepare('DELETE FROM employees WHERE id=?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
    header('Location: /PHP-Apache/crudphp/');
}