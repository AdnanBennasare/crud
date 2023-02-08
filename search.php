<?php
// connection to database 
include('includes/dbconn.php');
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
  <h3>Here's All the availble Homes</h3>
</div>



<form action="search.php" method="POST" >

<div class="container d-flex justify-content-center mx-auto mt-5">
<input  type="number" min="0" name="min_price" value="" class="form-control" placeholder="Min Price" style="width: 15rem; margin-right: 30px;">
<input  type="number" min="0" name="max_price" value="" class="form-control" placeholder="Max Price" style="width: 15rem; margin-right: 30px;">
<select name="type_search" class="custom-select" style="width: 15rem; margin-right: 30px;">
<option value="">--shoose type--</option>
<option value="For rent">For rent</option>
<option value="For sale">For sale</option>
</select>

<button type="submit" name="search_button" style="width: 15rem;" class="btn btn-primary">Search</button>
</div>
</form>

<a href="index.php" class="btn btn-success my-5" style="width: 26%; margin-left: 35%;">See all</a>









<div class="container d-flex justify-content-center flex-wrap mx-auto mt-5 mb-5">


<?php 
if (isset($_POST['search_button']) ){

  $min_price = $_POST['min_price'];
  $max_price = $_POST['max_price'];
  $type_search = $_POST['type_search'];

// selecting from our table the specified element
  $query_search = "SELECT * FROM `announces` WHERE price BETWEEN '$min_price' AND '$max_price' AND typeofhouse = '$type_search';";
  $query_search_run =  mysqli_query($conn, $query_search);
  $query_search_run_check = mysqli_num_rows($query_search_run);

  if ($query_search_run_check > 0) {
    while ($rowsearchprice = mysqli_fetch_assoc($query_search_run)) {
      ?>

<div class="card m-4 hoxx" style="width: 20rem;" id="<?php echo $rowsearchprice['id'] ?>">

<img src="<?php echo $rowsearchprice['image'] ?>" class="card-img-top" alt="img">

<div class="card-body">
 <h4 class="card-title"><?php echo $rowsearchprice['title'] ?></h4>
 <h4><?php echo $rowsearchprice['typeofhouse'] ?></h4>
 <h5><?php echo $rowsearchprice['location'] ?> </h5>
 <h6><?php echo $rowsearchprice['space'] ?> M²</h6>
 <h6><?php echo $rowsearchprice['price'] ?> DH</h6>
 <p><?php echo $rowsearchprice['date'] ?></p>
 <p class="card-text"><?php echo $rowsearchprice['description'] ?></p>
</div>

<div class="d-flex ml-3 mb-2">
  <a href="edit.php?id=<?php echo $rowsearchprice['id'] ?>" class="btn btn-info mr-3">Edit</a>       
  <div>
    <input type="hidden" class="delete_id_value" value="<?php echo $rowsearchprice['id'] ?>" class="form-control">
    <a class="confirm_the_delete btn btn-danger ml-2">DELETE</a>
  </div>
</div>

</div>





      <?php 

    }
  } else {
    echo "No data matched your searched properties";
  }

}

?>

</div>

<?php

 include('includes/footer.php')
?>

<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="solicode">solicode.com</a>
  </div>
  <!-- Copyright -->
</footer>


<script>
   $(document).ready(function () { 


  function scrollWin() {
  window.scrollBy(0, 1000);
  }
  scrollWin();
    
   });
</script>
