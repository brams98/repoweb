<?php 

 include_once('db.sql');
$servername = "localhost";
$dbname = "db";

$books_title = $_POST["books_Title"];
$books_author = $_POST["books_author"];
$books_genre = $_POST["books_genre"];


$conn = new mysqli($servername,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$insert = "INSERT INTO books (id,title, author, genre)
VALUES (NULL,'$books_title', '$books_author', '$books_genre')";


if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>