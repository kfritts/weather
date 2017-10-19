<?php
 
  include 'keys.php';
  // Get the address from the form and sanitize it
  $address = htmlspecialchars($_POST["location"]);

  // Replace any spaces in the url with a plus symbol
  // using the str_replace() PHP function
  $address = str_replace(' ', '+', $address);

  // Get a Google Maps API key, and store it here
  // https://developers.google.com/maps/documentation/geocoding/get-api-key
  $google_key = $keys['google'];

  // Send the address to Google to get an array of geo data
  $address_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&key='.$google_key;


  // Convert the Google Geo data to an array
  $address_data = json_decode(file_get_contents($address_url), true);

  // Optional, uncomment to see the data array
  // echo '<pre>';
  // print_r($address_data);
  // echo '</pre>';

  // Get the latitude and longitude array from the Google Geo data
  $coordinates = $address_data['results'][0]['geometry']['location'];

  // Put the array values into a string
  $coordinates = $coordinates['lat'].','.$coordinates['lng'];

  // Get the place name from the Google Geo data — we'll echo it later
  $place = $address_data['results'][0]['address_components'][0]['long_name'];

  // Get the formatted address from the Google Geo data
  $formatted_address = $address_data['results'][0]['formatted_address'];

  // Call DarkSky and pass along the coordinates we got from Google
  $forecast = 'https://api.darksky.net/forecast/'.$keys['darksky'].'/'.$coordinates.'/?exclude=minutely?exclude=hourly?lang=es';

  // Get our forecast data back
  $forecast = json_decode(file_get_contents($forecast), true);

//start of arrays 
// Weather Variables
  $temp_current = round($forecast->currently->temperature);
  $humidity_current =$forecast->currently->humidity;
  $rain_current =$forecast->currently->precipProbability;
  $wind_current= $forcast->currently->windSpeed;

//   $days = array(
//     'Sunday',
//     'Monday',
//     'Tuesday',
//     'Wednesday',
//     'Thursday',
//     'Friday',
//     'Saturday'
// );



  $weather = array
  ( 
                  $hot= array(

            
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=summer%2520diy&rs=typed&term_meta%5B%5D=summer%257Ctyped&term_meta%5B%5D=diy%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?rs=ac&len=2&q=diy%2520air%2520conditioner&eq=diy%2520air&etslf=9641&term_meta%5B%5D=diy%257Cautocomplete%257Cundefined&term_meta%5B%5D=air%257Cautocomplete%257Cundefined&term_meta%5B%5D=conditioner%257Cautocomplete%257Cundefined"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=fun%2520summer%2520diy&rs=typed&term_meta%5B%5D=fun%257Ctyped&term_meta%5B%5D=summer%257Ctyped&term_meta%5B%5D=diy%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=outdoor%2520summer%2520diy&rs=guide&term_meta%5B%5D=summer%257Ctyped&term_meta%5B%5D=diy%257Ctyped&add_refine=outdoor%257Cguide%257Cword%257C7"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=budget%2520summer%2520activities&rs=typed&term_meta%5B%5D=budget%257Ctyped&term_meta%5B%5D=summer%257Ctyped&term_meta%5B%5D=activities%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520food&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=food%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520outdoor%2520theater&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=outdoor%257Ctyped&term_meta%5B%5D=theater%257Ctyped"></a>'
                ),

          $cold= array(
              
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520projects%2520cold%2520weather&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=projects%257Ctyped&term_meta%5B%5D=cold%257Ctyped&term_meta%5B%5D=weather%257Ctyped"></a>',


                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520winter&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=winter%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=things%2520to%2520do%2520in%2520the%2520winter&rs=typed&term_meta%5B%5D=things%2520to%2520do%2520in%2520the%2520winter%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=how%2520to%2520stay%2520warm&rs=typed&term_meta%5B%5D=how%257Ctyped&term_meta%5B%5D=to%257Ctyped&term_meta%5B%5D=stay%257Ctyped&term_meta%5B%5D=warm%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/infarrantlyc/diy-winter-crafts-and-decorations/?eq=diy%2520winter&etslf=22878"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520tips%2520for%2520the%2520cold%2520weather&rs=typed&term_meta%5B%5D=diy%2520tips%2520for%2520the%2520cold%2520weather%257Ctyped"></a>'
              ),

          
    

     
  );            



    
    

$temp=$forecast['currently']['temperature'];

// weather diy//

$cold =50;
$hot =70;



if($temp < 50){
  echo $hot[0][rand(0, 4)];
  
}else if ($temp >50){
  echo $cold[1][rand (0,4)];
}






















