<?php
try {
    $local = new PDO("mysql:host=localhost;dbname=Books;charset=utf8", 'root', 'root');
    // echo "connect ok";
} catch (PDOException $e) {
    echo "return connect false";
}

$title = $_POST['title'];
$ISBN = $_POST['ISBN'];
$pub_year = $_POST['pub_year'];
$authorid = $_POST['authorid'];
$available = $_POST['available'];
// echo $local;
$sql = "insert into book values(null, $authorid, '$title', '$ISBN', $pub_year, $available)";
$result = $local->exec($sql);
if ($result === 1) {
    header("location: ../view/view-book.php");
} else {
    echo "created failure";
}
// include ''