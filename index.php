<?php
// header//

include'views/partials/header.php';

?>

<!-- Search Bar  -->

<form action="../results.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="location">Location</label>
    <input type="text" class="form-control" id="location" aria-describedby="location-help" placeholder="Enter zipcode or city" name="location" value="<?php echo (isset($_POST['location']) ? $_POST['location'] : '') ?>">
  </div>
  <button type="submit" name="submit" class="btn">Search</button>
</form>

<div>
<img src="assets/dist/images/weatherillustration.png" alt="">	
</div>


 


hello !!




<!-- The footer -->


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  		<script async defer src="//assets.pinterest.com/js/pinit.js"></script>

  </body>
</html>