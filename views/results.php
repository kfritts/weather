
<link rel="stylesheet" href="../assets/css/bootstrap.css">

<?php include 'forecast.php' ?>
<?php include 'partials/header.php' ?>
<?php include 'partials/form.php' ?>
<pre>
  <?php //print_r($forecast); ?>
</pre>


<!-- This is the "currently card" -->
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
            <img src="images/" alt="" class="card-img-top img-fluid">
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
</div>









<?php echo $the_diys;
 ?>

<?php  include'partials/footer.php';?>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>

</body>
</html>