This MVC is base on project Weather, the main index page will return
the Weather of Europe cities.

http://URL/


JSON REST URI, it will return a json format base on cities on europe.

http://URL/index.php/api/


Query base on City Name ex:

http://URL/index.php/api/city/Dublin

{
    "city": [
        {
            "name": "Dublin",
            "flag": "assets/images/irl.svg",
            "condition": [
                {
                    "temp": "9°C",
                    "humidity": "87%",
                    "visibility": "Very Good",
                    "icon": "assets/images/icons/weather/clear.png"
                }
            ]
        }
    ]
}
