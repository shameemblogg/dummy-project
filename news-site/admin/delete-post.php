<?php

$post_id = $_GET['id'];
$cat_id = $_GET['catid'];

$sql1 = "SELECT * FROM post WHERE post_id = {$post_id};";
$result = mysqli_query($con,$sql1) or die("querry failed : select");
$row = mysqli_fetch_assoc($result);
unlink("upload/".$row['post_img']);// this funtion use to delete any image or file form the folder
$sql = "DELETE FROM post WHERE post_id = {$post_id};";
$sql .= "UPDATE category SET post = post - 1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($conn,$sql)){

header("Location: {$hostname}/admin/post.php");
}else{

   echo "query failed";

}


?>
