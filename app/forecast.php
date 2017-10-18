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

          $hot= array(
              
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520projects%2520cold%2520weather&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=projects%257Ctyped&term_meta%5B%5D=cold%257Ctyped&term_meta%5B%5D=weather%257Ctyped"></a>',


                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520winter&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=winter%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=things%2520to%2520do%2520in%2520the%2520winter&rs=typed&term_meta%5B%5D=things%2520to%2520do%2520in%2520the%2520winter%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=how%2520to%2520stay%2520warm&rs=typed&term_meta%5B%5D=how%257Ctyped&term_meta%5B%5D=to%257Ctyped&term_meta%5B%5D=stay%257Ctyped&term_meta%5B%5D=warm%257Ctyped"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/infarrantlyc/diy-winter-crafts-and-decorations/?eq=diy%2520winter&etslf=22878"></a>',
                  
                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520tips%2520for%2520the%2520cold%2520weather&rs=typed&term_meta%5B%5D=diy%2520tips%2520for%2520the%2520cold%2520weather%257Ctyped"></a>'
              ),

          
    

     
  );            



    // $months = array
    // ( 

    //     array("october",
               
    //                  '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=october%2520diy&rs=typed&term_meta%5B%5D=october%257Ctyped&term_meta%5B%5D=diy%257Ctyped"></a>',
                          
    //                   '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=october%2520diy%2520fun&rs=guide&term_meta%5B%5D=october%257Ctyped&term_meta%5B%5D=diy%257Ctyped&add_refine=fun%257Cguide%257Cword%257C4"></a>',
                          
    //                    '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=dollar%2520store%2520halloween%2520diy&rs=guide&term_meta%5B%5D=halloween%257Ctyped&term_meta%5B%5D=diy%257Ctyped&add_refine=dollar%2520store%257Cguide%257Cword%257C4"></a>',
                          
    //                    '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520halloween%2520party&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=halloween%257Ctyped&term_meta%5B%5D=party%257Ctyped"></a>',

    //                    '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520haunted%2520houses&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=haunted%257Ctyped&term_meta%5B%5D=houses%257Ctyped"></a>',
    //                   ),

                
    //       array("november",
                  
    //               '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520november&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=november%257Ctyped"></a>',
                  
    //               '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520november%2520decorations&rs=guide&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=november%257Ctyped&add_refine=decorations%257Cguide%257Cword%257C1"></a>',
                  
    //               '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?rs=ac&len=2&q=diy%2520thanksgiving%2520centerpiece%2520ideas&eq=diy%2520thanksgiving&etslf=17645&term_meta%5B%5D=diy%257Cautocomplete%257Cundefined&term_meta%5B%5D=thanksgiving%257Cautocomplete%257Cundefined&term_meta%5B%5D=centerpiece%257Cautocomplete%257Cundefined&term_meta%5B%5D=ideas%257Cautocomplete%257Cundefined"></a>',
                  
    //               '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520thanksgiving%2520treats&rs=guide&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=thanksgiving%257Ctyped&add_refine=treats%257Cguide%257Cword%257C7"></a>'

    //             ),

            
    //       array( "december",
              
    //             '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520december%2520crafts&rs=guide&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=december%257Ctyped&add_refine=crafts%257Cguide%257Cword%257C1"></a>',
                
    //             '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=christmas%2520decor&rs=typed&term_meta%5B%5D=christmas%257Ctyped&term_meta%5B%5D=decor%257Ctyped"></a>',
                
    //             '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=budget%2520friendly%2520christmas%2520decorations&rs=guide&term_meta%5B%5D=budget%257Ctyped&term_meta%5B%5D=friendly%257Ctyped&term_meta%5B%5D=christmas%257Ctyped&add_refine=decorations%257Cguide%257Cword%257C1"></a>',
                
    //             '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=christmas%2520gifts%2520diy&rs=typed&term_meta%5B%5D=christmas%257Ctyped&term_meta%5B%5D=gifts%257Ctyped&term_meta%5B%5D=diy%257Ctyped"></a>',

    //             '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520newyears%2520party&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=newyears%257Ctyped&term_meta%5B%5D=party%257Ctyped"></a>'

    //         ),

            
    //       array("february",
              
    //               '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520valentines%2520day&rs=typed&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=valentines%257Ctyped&term_meta%5B%5D=day%257Ctyped"></a>',
                  
    //               '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520valentines%2520day%2520crafts&rs=guide&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=valentines%257Ctyped&term_meta%5B%5D=day%257Ctyped&add_refine=crafts%257Cguide%257Cword%257C2"></a>',
                  
    //               '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=anti%2520valentines%2520day%2520party&rs=guide"></a>'
    //         ),


    //         array("march",
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=spring%2520diy&rs=typed&term_meta%5B%5D=spring%257Ctyped&term_meta%5B%5D=diy%257Ctyped"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=spring%2520diy%2520projects%2520dollar%2520stores%2520organization%2520ideas&rs=guide&term_meta%5B%5D=projects%257Cguide%257Cword%257C4&term_meta%5B%5D=dollar%2520stores%257Cguide%257Cword%257C0&add_refine=organization%2520ideas%257Cguide%257Cword%257C9"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?rs=ac&len=2&q=st%2520patricks%2520day%2520party&eq=st%2520patr&etslf=7447&term_meta%5B%5D=st%257Cautocomplete%257Cundefined&term_meta%5B%5D=patricks%257Cautocomplete%257Cundefined&term_meta%5B%5D=day%257Cautocomplete%257Cundefined&term_meta%5B%5D=party%257Cautocomplete%257Cundefined"></a>',

    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=st%2520patricks%2520day%2520activities%2520for%2520adults&rs=guide&term_meta%5B%5D=st%257Ctyped&term_meta%5B%5D=patricks%257Ctyped&term_meta%5B%5D=day%257Ctyped&term_meta%5B%5D=activities%257Ctyped&add_refine=for%2520adults%257Cguide%257Cword%257C2"></a>'
    //             ),

    //          array("may",
              
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=diy%2520mothersday%2520gifts%2520mom&rs=guide&term_meta%5B%5D=diy%257Cautocomplete%257Cundefined&term_meta%5B%5D=motherday%257Cautocomplete%257Cundefined&term_meta%5B%5D=gifts%257Cautocomplete%257Cundefined&add_refine=mom%257Cguide%257Cword%257C1"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=cheap%2520gift%2520ideas%2520diy&rs=guide"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=spring%2520cleaning&rs=typed&term_meta%5B%5D=spring%257Ctyped&term_meta%5B%5D=cleaning%257Ctyped"></a>'

    //              ),

            
    //          array("june",
              

    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=fathers%2520day%2520diy&rs=typed&term_meta%5B%5D=fathers%257Ctyped&term_meta%5B%5D=day%257Ctyped&term_meta%5B%5D=diy%257Ctyped"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=summer%2520diy%2520for%2520adults&rs=guide&term_meta%5B%5D=summer%257Ctyped&term_meta%5B%5D=diy%257Ctyped&add_refine=for%2520adults%257Cguide%257Cword%257C3"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=june%2520diy%2520projects&rs=guide&term_meta%5B%5D=june%257Ctyped&term_meta%5B%5D=diy%257Ctyped&add_refine=projects%257Cguide%257Cword%257C1"></a>',

    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=summer%2520budget%2520fun&rs=typed&term_meta%5B%5D=summer%257Ctyped&term_meta%5B%5D=budget%257Ctyped&term_meta%5B%5D=fun%257Ctyped"></a>'
    //             ),

            

    //          array("july",
              

    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=july%2520diy&rs=typed&term_meta%5B%5D=july%257Ctyped&term_meta%5B%5D=diy%257Ctyped"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=july%2520diy%2520decor&rs=guide&term_meta%5B%5D=july%257Ctyped&term_meta%5B%5D=diy%257Ctyped&add_refine=decor%257Cguide%257Cword%257C2"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=budget%2520bbq%2520party&rs=guide&term_meta%5B%5D=budget%257Ctyped&term_meta%5B%5D=bbq%257Ctyped&add_refine=party%257Cguide%257Cword%257C1"></a>'
    //               ),

            
    //          array("september",
              
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=fall%2520diy&rs=typed&term_meta%5B%5D=fall%257Ctyped&term_meta%5B%5D=diy%257Ctyped"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=fall%2520diy%2520projects%2520dollar%2520stores&rs=guide&term_meta%5B%5D=fall%257Ctyped&term_meta%5B%5D=diy%257Ctyped&term_meta%5B%5D=projects%257Cguide%257Cword%257C2&add_refine=dollar%2520stores%257Cguide%257Cword%257C5"></a>',
                    
    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?q=september%2520diy%2520ideas&rs=guide&term_meta%5B%5D=september%257Ctyped&term_meta%5B%5D=diy%257Ctyped&add_refine=ideas%257Cguide%257Cword%257C2"></a>',

    //                 '<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/search/pins/?rs=ac&len=2&q=school%2520organization&eq=school&etslf=33184&term_meta%5B%5D=school%257Cautocomplete%257Cundefined&term_meta%5B%5D=organization%257Cautocomplete%257Cundefined"></a>'
              
    //               )

    // );
    

$temp=$forecast['currently']['temperature'];

// weather diy//

$cold =50;
$hot =70;



if($temp < 50){
  echo $hot[0][rand(0, 4)];
  
}else if ($temp >50){
  echo $cold[1][rand (0,4)];
}






















