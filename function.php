<?php
require_once "index.php";
//require_once "Data.php";
function connectToDb(){
    return new PDO
    (
        'mysql:host=127.0.0.1;dbname=trip_form','root',''
    );
}
function selectAll(PDO $pdo,string $table,string $class){
    $statement = $pdo->prepare('select * from '.$table);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo "<table border=1>";
    foreach($result as $data){
        echo "<tr><td>".$data['name']."</td>"."<td>".$data['email']."</td>"."<td>".$data['number']."</td>"."<td>".$data['gender']."</td>"."<td>".$data['city']."</td></tr>";
    }
    echo "</table>";
}
function insert($pdo,$table,$data)
    {
        $sql = "INSERT INTO $table SET ";
        foreach ($data as $field => $value) {
            $fieldSQl[] = "$field = '$value'";
        }
        $sql .= implode(', ',$fieldSQl);
        $statement = $pdo->prepare($sql);
        $statement->execute();
    }