<?php
// connection to database 
include('includes/dbconn.php');


// =====---- add ------------------

if (isset($_POST['addanonce'])){
    $title = $_POST['title'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $space = $_POST['space'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $theType = $_POST['type'];

   $query = "INSERT INTO `announces` 
   (`title`, `image`, `description`, `location`, `space`, `price`, `date`, `typeofhouse`) 
   VALUES 
   ('$title', '$image' , '$description' , '$location' , '$space'  , '$price', '$date' , '$theType');";

    $query_run = mysqli_query($conn, $query);

    if ($query_run){
// echo "registered succses";
header("Location: http://localhost/crud/index.php");

    } else {
      header("Location: http://localhost/crud/add.php");
    }
   
  }
  
// =====---- Update ------------------

  if (isset($_POST['Update'])){

    $id_edits = $_POST['edit_id'];

    $title = $_POST['title_updated'];
    $image = $_POST['image_updated'];
    $description = $_POST['description_updated'];
    $location = $_POST['location_updated'];
    $space = $_POST['space_updated'];
    $price = $_POST['price_updated'];
    $date = $_POST['date_updated'];
    $theType = $_POST['type_updated'];
   

    $query_update = "UPDATE `announces` SET title='$title', image='$image', description='$description', location='$location', space='$space', price='$price', date='$date', typeofhouse='$theType' WHERE id='$id_edits'";
    $query_update_run = mysqli_query($conn, $query_update);



    if ($query_update_run){
      // echo "update done succses";
      header("Location: http://localhost/crud/index.php");
      
      } else {
      header("Location: http://localhost/crud/add.php");
      // echo "update haven't done succsessfullu";
      
      }
  }





// =====---- DELETE ------------------
if (isset($_POST['delete_button_set'])){

  $id_del = $_POST['deletepop_id'];
  echo $id_del;

  $query_delete = "DELETE FROM `announces` WHERE id='$id_del'";
  $query_delete_run = mysqli_query($conn, $query_delete);
}

?> 