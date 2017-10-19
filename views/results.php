<?php 
include'partials/header.php'; 
include'../app/forecast.php'; 
  
?>

hello !

<!-- <! This is the "currently card" --> 
<form action="../results.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="location">Location</label>
    <input type="text" class="form-control" id="location" aria-describedby="location-help" placeholder="Enter zipcode or city" name="location" value="<?php echo (isset($_POST['location']) ? $_POST['location'] : '') ?>">
  </div>
  <button type="submit" name="submit" class="btn">Search</button>
</form>



<div class="container">
  
  <div class="card p-4 my-5 mx-auto" style="max-width: 320px;">
    <p class="lead text-bold m-0">
        Currently 
      
        <h2 class="display-1 mb-0">
          <?php echo round($forecast['currently']['temperature']); ?>&deg;
        </h2>
           <?php echo date("l", $day['time']); ?>
            <p class="lead">
              Sunny
              <?php echo $forecast['currently']['summary']; ?>
            </p>
            
    </div>
</div>
<!-- End of Currently card -->
  
  hi is this thing on?

    <!-- Card Grid Daily -->
      <div class="row">
        <?php foreach ($forecast ['daily']['data']as $day): ?>

      <!-- Card 1 -->
        <div class="col-10 col-md-4">
          <div class="card mb-0">

           
            <?php echo gmdate("l", $day['time']); ?>
            <h2 class="m-0">
            <?php echo round($day['temperatureHigh']); ?>&deg;
            </h2>
             <p class="lead text-center">
            <?php echo $day['summary']; ?>
          </p>
            <img src="assets/dist/images/<?php echo $forecast['currently']['icon'];?>.png" alt="icon" class="
            width="100"
            Height="100"
            class="mx-auto"
            
            <div class="card-body">
              <h2 class="card-title h4">
                Morning
              </h2>
              
              
            </div>
          </div>
        </div>
      <!-- END Card -->

      <!-- Card 2 -->
        <div class="col-10 col-md-4">
          <div class="card mb-0">
           <?php echo round($forecast['currently']['temperature']); ?>
           <?php echo gmdate("l", $day['time']); ?> 
            <img src="images/" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h2 class="card-title h4">
               Noon
              </h2>
            </div>
          </div>
        </div>
      <!-- END Card -->

      <!-- Card 3 -->
        <div class="col-12 col-md-4">
          <div class="card mb-0">
          <?php echo round($forecast['currently']['temperature']); ?>
           <?php echo gmdate("l", $day['time']); ?> 
            <img src="images/" alt="" class="">
            <div class="card-body">
              <h2 class="card-title h4">
               Night
              </h2>
            </div>
          </div>
        </div>
      <!-- END Card -->


          <div class="container">
            <img src="images/weatherillustration.png" alt="">
          </div>

<!-- Weekly start card 1-->
        <div class="col-12 col-md-3">
          <div class="card mb-5">
            <?php echo $forecast['currently']['summary']; ?>
            <img src="images/" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h2 class="card-title h4">
                Monday
              </h2>
            </div>
          </div>
        </div>

        <!-- End card -->

     <!-- start card 2-->

<div class="col-12 col-md-3">
          <div class="card mb-5">
            <?php echo $forecast['currently']['summary']; ?>
            <img src="" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h2 class="card-title h4">
                Tuesday
              </h2>
            </div>
          </div>
        </div>

<!-- end card -->

<!-- start card 3 -->
        <div class="col-12 col-md-3">
          <div class="card mb-5">
           <?php echo $forecast['hourly']['summary']; ?> 
            <img src="images" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <h2 class="card-title h4">
                  Wednesday
                </h2>
              </div>
          </div>
        </div>

      </div>
    
<div class="col-12 col-md-3">
          <div class="card mb-5">
            <?php echo $forecast['currently']['summary']; ?>
            <img src="" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h2 class="card-title h4">
                Thursday
              </h2>
            </div>
          </div>
        </div>



    <!-- END Card Grid -->

<!-- Diy section -->
<div class="content">
  <h1>Daily Diy</h1>
<div class="col-12 ">
  
</div>



</div>




<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <script async defer src="//assets.pinterest.com/js/pinit.js"></script>

  </body>
</html> -->