<!--

* Author: Rafael Konrath

* Assignment: BScH Mobile Development, Digital Skills Academy

* Student ID: STU-00001214 * Date : 2017/05/08

* Ref: N/A -->

<!DOCTYPE html>
<html>
<head>
  <title>Weather Forecast</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS Themes from Themeroller -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/themes/weather.min.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/themes/jquery.mobile.icons.min.css"/>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css"/>
  <!-- Our Weather StyleSheet-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-weather.css"/>
</head>

<body>
    <div id="weather">
        <div data-role="page" id="home" data-theme="a">
            <div data-role="header" id="header" data-position="fixed" data-add-back-btn="true">
                <h1>Weather Forecast</h1>
            </div>
            <div data-role="content" data-theme="a" id="content">
               <ul id="cityList" data-role="listview" data-filter="true" style="color:white;" data-filter-placeholder="Search city..." data-autodividers="true" data-inset="true" data-theme="a">
               </ul>
            </div>
        </div>

    </div>
</body>

<!-- JQuery Mobile -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- Our JQuery code where the magic happens-->
<script>
  /* little trick to get base_url via javascript to call ajax
     $.getJSON( base_url + "index.php/api/",
  */
  var base_url = '<?php echo base_url(); ?>';
</script>
<script src="<?php echo base_url();?>assets/js/weather.js"></script>

</html>
