<?php
$getid= $_REQUEST['id'];
require_once("require.php");
require_once(INCLUDED_FILES . "config.inc.php");
require_once(INCLUDED_FILES . "dbConn.php");
require_once(INCLUDED_FILES . "functionsInc.php");

$conn = dbconnect();
unset($_SESSION['fParam']);
unset($_SESSION['append']);

include(INC_FOLDER . "headerInc.php");

$conn = dbconnect();
$sql2 = "SELECT * FROM exhibition WHERE id=$getid ";
// echo $sql2;exit();
$q2 = $conn->query($sql2);

$q2->execute();
$q2->setFetchMode(PDO::FETCH_ASSOC);
$exrow = $q2->fetchAll();
// print_r($exrow);exit();

$sql = "SELECT exhibition_paintings.id,exhibition_paintings.name,exhibition_paintings.image, exhibition_paintings.dimension, exhibition_paintings.year, exhibition_medium.medium_name FROM `exhibition_paintings` INNER JOIN exhibition_medium ON exhibition_medium.id = exhibition_paintings.medium INNER JOIN exhibition_paintings_relation on exhibition_paintings_relation.painting_id = exhibition_paintings.id WHERE exhibition_paintings_relation.exhibition_id= $getid";
$q = $conn->query($sql);

$q->execute();
$q->setFetchMode(PDO::FETCH_ASSOC);
$exartwork = $q->fetchAll();
// print_r ($exartwork); exit();


$sql1 = "SELECT exhibition_artists.artist_name FROM `exhibition_artists` INNER JOIN exhibition_paintings on exhibition_paintings.artist_id = exhibition_artists.id INNER JOIN exhibition_paintings_relation ON exhibition_paintings_relation.painting_id = exhibition_paintings.id WHERE exhibition_paintings_relation.exhibition_id = $getid";
$q1 = $conn->query($sql1);

$q1->execute();
$q1->setFetchMode(PDO::FETCH_ASSOC);
$exartist = $q1->fetchAll();
// print_r ($exartist); exit();


include(VIEWS_FOLDER . "home-exhibition-details.php");
include(INC_FOLDER . "footerInc.php");
