/*

* Author: Rafael Konrath

* Assignment: BScH Mobile Development, Digital Skills Academy

* Student ID: STU-00001214 * Date : 2017/04/09

* Ref: N/A --!>

*/

$(function(){


  /*------------------
    conf global vars
   ------------------*/
  var weather = $('#weather'), cityList = $('#cityList');

  /*-----------------------------------------------------------------------
    Retrive cache, and convert the object cache to JSON format with parse
   -----------------------------------------------------------------------*/
  var cache = localStorage.weatherCache && JSON.parse(localStorage.weatherCache);

  var dt = new Date();

  /*-------------------------------------------------------------------------------
    If the cache is newer than 10 minutes, use the cache, otherwise get fresh data
   -------------------------------------------------------------------------------*/
  if(cache && cache.timestamp && cache.timestamp > dt.getTime() - 10*60*1000) {
    /*-----------------------------------------------------
      call function to add the Json data to out html page
     -----------------------------------------------------*/
    addData(cache.data);
  }

  else {
      /*----------------------
        Get the JSON file
       ----------------------*/
      $.getJSON( base_url + "index.php/api/",
      function( data ) {

          if(data != null && data.city != null) {
            /*-------------------------
              Store data in the cache
             -------------------------*/
            localStorage.weatherCache = JSON.stringify({
                timestamp:(new Date()).getTime(),   // Save the current time to calculate the cache time
                data: data
            });
            /*-----------------------------------------------------
              call function to add the Json data into html page
             -----------------------------------------------------*/
            addData(data);

          } else {
            /*--------------------------------------
              No data from the JSON file was found
             --------------------------------------*/
            cityList.append('<h1>There was a problem retrieving the weather information, try later.</h1>');
            cityList.listview('refresh');
            }

      });
  };


  function addData(data){
      /*----------------------------------------------------------
         for each city populate the listview and container pages
       ----------------------------------------------------------*/
      $.each( data.city, function(key,city){
        /*-----------------------------------
         Create the List view for each city
         -----------------------------------*/
        cityList.append('<li><a href="#p' + key + '" data-transition="slide"><img src="' + city.flag + '" alt="' + city.name + '"/>' + city.name + '</a></li>');

        /*--------------------------------------------------
         Create the template container pages for each city
         --------------------------------------------------*/
        var templatePages = '<div data-role="page" id="p' + key + '">' +
                            '  <div data-role="header" data-add-back-btn="true">' +
                            '    <h1>'+ city.name +'</h1>' +
                            '  </div>' +
                            '<div data-role="content" data-theme="a" class="ui-content">' +
                            '  <img src="'       + city.condition[0].icon     + '"/>' +
                            '  <div class="ui-grid-solo"> ' +
                            '    <div class="ui-block-a">' +
                            '      <a href="#" class="ui-btn ui-corner-all ui-shadow">Temperature: '+ city.condition[0].temp +'</a>' +
                            '    </div>' +
                            '  </div>' +
                            '  <div class="ui-grid-solo"> ' +
                            '    <div class="ui-block-a">' +
                            '      <a href="#" class="ui-btn ui-corner-all ui-shadow">Humidity: '+ city.condition[0].humidity +'</a>' +
                            '    </div>' +
                            '  </div>' +
                            '  <div class="ui-grid-solo"> ' +
                            '    <div class="ui-block-a">' +
                            '      <a href="#" class="ui-btn ui-corner-all ui-shadow">Visibility: '+ city.condition[0].visibility +'</a>' +
                            '    </div>' +
                            '  </div>' +
                            '</div>' +
                            '<div data-role="footer" data-theme="a">' +
                            ' <h3>Weather 2017</h3>' +
                            '</div>' +
                            '</div>';

        /*------------------------
            Add container pages
         ------------------------*/
        weather.append(templatePages);

      });
      cityList.listview('refresh');
  };

});
