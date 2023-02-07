<?php
 include('includes/header.php')
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
    <div class="add-head" style="position: absolute; top:46%; left:34%; ">
        <h1 class="text-white">
        Here you're able to Add an anounce !
        </h1>
        <p class="text-white" style="text-align: center;">
        you can simply dummy text of the printing and typesetting industry.</br> Lorem Ipsum has been the  text ever since the 1500s,</br> when an unknown printer scrambled
       </p>
    </div>
        
</div>

<div class="div">
  <h3>Here's All the availble Homes</h3>
</div>


<div class="mx-auto mt-5" style="width: 50%;">
<!-------------------------------- form ---------------------------------->
<form action="code.php" method="POST">


<label>title</label>
<input type="text" name="title" placeholder="Firstname" class="form-control">
<br>
<label>image</label>
<input type="text" name="image" placeholder="image" class="form-control">
<br>
<label>description</label>
<input type="text" name="description" placeholder="description" class="form-control">
<br>
<label>location</label>
<input type="text" name="location" placeholder="location" class="form-control">
<br>
<label>space</label>
<input type="number" name="space" placeholder="space" class="form-control">

<br>
<label>price</label>
<input type="number" name="price" placeholder="price" class="form-control">

<br>
<label>date</label>
<input type="date" name="date" placeholder="date" value="" class="form-control">
</label>
<br>
<select name="type" id="type" class="custom-select mb-5" style="width: 15rem; margin-right: 30px;">
<option  value="">--- Choose a color ---</option>
<option value="For Sale" >For Sale</option>
<option value="For rent">For rent</option>
</select>
<br>

<button type="submit" class="btn btn-primary" name="addanonce">submit</button>
<a href="index.php" class="btn btn-danger">Go back</a>


</form>
</div>


<?php

 include('includes/footer.php')
?>

<style>
  html, body { 
      scroll-behavior: smooth
    }
</style>
<script>
   $(document).ready(function () { 


  function scrollWin() {
  window.scrollBy(0, 3000);
  }
  scrollWin();
    
   });
</script>
































