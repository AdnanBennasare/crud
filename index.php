<?php
// connection to database 
include('includes/dbconn.php');
include('includes/header.php');
?>





<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand d-flex" href="index.php">
      <div class="logo d-flex">
        <img src="img/vector.png" alt="Logo" width="37" height="34" class="d-inline-block align-text-top mr-2 mt-1">
        <h3 class="mt-2">SoliRent</h3>
      </div>
    </a>
<ul>
  <li>
    <a href=""></a>
  </li>
</ul>
  </div>
</nav>


<div class="background">
  <div class="heading">
    <h1 class="text-white">
      Let us Guide you Home!
    </h1>
    <div class="twobuttons d-flex">
      <a href="add.php" class="btn btn-primary mr-2 p-3">Add Announce</a>
      <button type="button" onclick="scrollWin()" vid="kkk" class="btn btn-secondary p-3">explore items</button>
    </div>
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





<div id="cards" class="mt-4">
  <!---- --------------------- affichage data --------------->
  <?php


  $number_Per_page = 8;

if(isset($_GET["page"])){
  $page = $_GET["page"];

} else {
$page = 1;

}

$start_form = ($page-1)*05;

$sql = "SELECT * FROM announces limit $start_form,$number_Per_page";
$rs_esult = mysqli_query($conn, $sql);



    while ($row = mysqli_fetch_assoc($rs_esult)) {
    
      ?>

      <div style="width: 20rem" class="card m-4 my-5 hoxx"  id="<?php echo $row['id'] ?>">

        <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="img">

        <div class="card-body">
         <h4 class="card-title"><?php echo $row['title'] ?></h4>
         <h4><?php echo $row['typeofhouse'] ?></h4>
         <h5><?php echo $row['location'] ?> </h5>
         <h6><?php echo $row['space'] ?> M²</h6>
         <h6><?php echo $row['price'] ?> DH</h6>
         <p><?php echo $row['date'] ?></p>
         <p class="card-text"><?php echo $row['description'] ?></p>
        </div>
        
        <div class="d-flex ml-3 mb-2">
          <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info mr-3">Edit</a>       
          <div>
            <input type="hidden" class="delete_id_value" value="<?php echo $row['id'] ?>" class="form-control">
            <a class="confirm_the_delete btn btn-danger ml-2">DELETE</a>
          </div>
        </div>

      </div>


    <?php
    } 

    ?>


</div>

<?php
$sql = "SELECT * FROM announces";
$rs_esult = mysqli_query($conn, $sql);
$total_rows_num = mysqli_num_rows($rs_esult);
$total_Pages = ceil($total_rows_num/$number_Per_page);
?>




<div class="paginated_items  mx-auto my-4" style="width: 20%;">

<?php 

for($i = 1; $i <= $total_Pages; $i++){

  if ( isset($_GET['page'])){
  $pageid = $_GET['page'];
// we get number of the page on url and if the number of page is equal to i certain button we change it color
   if ($pageid == $i){

    echo "
<a href='index.php?page=".$i."' class='btn btn-secondary mr-3 mt-4'>".$i."</a>

    ";

   } else {
    echo "
    <a href='index.php?page=".$i."' class='btn btn-info mr-3 mt-4'>".$i."</a>
    
        ";
   }
  //  If there is no page id ;
  } if (!isset($_GET['page'])){
    // on the first loop i=1 so we can change the first button color
     if (1 == $i){
  
      echo "
  <a  href='index.php?page=".$i."' class='btn btn-secondary mr-3 mt-4'>".$i."</a>
  
      ";
    // on the the other loops
  
     } else {
      echo "
      <a href='index.php?page=".$i."' class='btn btn-info mr-3 mt-4'>".$i."</a>
      
          ";
     }
    } 


}

?>

</div>











<?php
include('includes/footer.php');
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
    $('.confirm_the_delete').click(function (e) {
      e.preventDefault();
      var deletewithmodal = $(this).closest("div").find('.delete_id_value').val();
      console.log(deletewithmodal);

      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this announce file!",
        icon: "error",
        buttons: true,
        dangerMode: true,
      })
        .then((willDelete) => {
          if (willDelete) {

            $.ajax({
              type: "POST",
              url: "code.php",
              data: {
                "delete_button_set": 1,
                "deletepop_id": deletewithmodal,

            },
              success: function (response) {

              swal("anonce deleted successfully", {
                  icon: "success",
              }).then((result) => {
              location.reload();
            });







              }
            });

          }
        });



    });
  });



</script>



<script>
function scrollWin() {
  window.scrollBy(0, 1000);
}

   $(document).ready(function () { 


  function scrollWin() {
  window.scrollBy(0, 1000);
  }
  scrollWin();
    
   });

</script>


