<?php 
include('includes/header.php');
?>


  <nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand d-flex" href="#">
    <div class="logo d-flex">      
      <img src="img/vector.png" alt="Logo" width="40" height="38" class="d-inline-block align-text-top">
      <h3 class="mt-2">SoliRent</h3>
    </div>
   </a>
  </div>
</nav>

<div class="background">
    <div class="add-headin" style="position: absolute; top:54%; left:34%;" >
        <h1 class="text-white">
        Here you're able to edit an anounce !
        </h1>
        <p class="text-white" style="text-align: center;">
        you can simply dummy text of the printing and typesetting industry.</br> Lorem Ipsum has been the  text ever since the 1500s,</br> when an unknown printer scrambled
       </p>
    </div>
        
</div>

<div class="div">
  <h3>Edit your anoune and click on update button to update it!</h3>
</div>



<?php
 include('includes/dbconn.php');

 $id = $_GET['id'];

 $edit_query = "SELECT * FROM `announces` WHERE `id`='$id'";
 $edit_query_run = mysqli_query($conn, $edit_query);

 if (mysqli_num_rows($edit_query_run) > 0) {
  while ($row = mysqli_fetch_array($edit_query_run)) {

  ?>

<div class="mx-auto mt-5" style="width: 50%;">
<!-------------------------------- form ---------------------------------->
<form action="code.php" method="POST">


<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control">

<label>title</label>
<input type="text" name="title_updated" value="<?php echo $row['title'] ?>" class="form-control">
<br>
<label>image</label>
<input type="text" name="image_updated" value="<?php echo $row['image'] ?>" class="form-control">
<br>
<label>description</label>
<input type="text" name="description_updated" value="<?php echo $row['description']?>" class="form-control">
<br>
<label>location</label>
<input type="text" name="location_updated" value="<?php echo $row['location'] ?>" class="form-control">
<br>
<label>space</label>
<input type="number" min="0" name="space_updated" value="<?php echo $row['space'] ?>" class="form-control">

<br>
<label>price</label>
<input type="number" min="0" name="price_updated" value="<?php echo $row['price']?>" class="form-control">

<br>
<label>date</label>
<input type="date" name="date_updated" value="<?php echo $row['date']?>"class="form-control">
</label>
<br>

<select name="type_updated" id="type" class="custom-select mb-5" aria-label="Default select example">
<option value="<?php echo $row['typeofhouse'] ?>">change type ? <?php echo $row['typeofhouse'] ?></option>
<option value="For rent">For rent</option>
<option value="For sale">For sale</option>

</select>
<br>
<div class="mt-3 mb-3">
<button type="submit" class="btn btn-info" name="Update">Update</button>
<a href="index.php" class="btn btn-danger ml-5">Go back</a>
</div>

</form>
</div>


   <?php
 }
}


else {
    echo "no data has been found";
}


?>




<?php

 include('includes/footer.php')
?>




<script>
   $(document).ready(function () { 


  function scrollWin() {
  window.scrollBy(0, 3000);
  }
  scrollWin();
    
   });
</script>
































