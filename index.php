<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
        <title>Clean Slider jQuery Plugin</title>
   	    <meta content="" name="description" />
        <link rel="stylesheet" type="text/css" href="resources/cleanSlider.css" />
        <script type="text/javascript" src="resources/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="resources/jquery.cleanSlider.js"></script>
    </head>
    <body>
        <script>
            $(document).ready(function(){
                var config={};
                config.width =550;  //pixels
                config.height=350;  //pixels 
                config.intervalTime  =7000; //mili-seconds   
                $('.slider').cleanSlider(config);
            })
        </script>
        <style>
            
            body{
                background-color: #2F3032;
                color:white;
                font-family: Trebuchet MS;
            }
            .container{
                width:960px;
                margin:0 auto;
            }
            h1{
                color: white;
                font-family: 'Supermercado One', cursive;
                font-size: 2em;
                font-weight: bold;
                text-shadow:3px 3px black;
            }
            .header{
                border-bottom: 3px solid white;
                font-family: 'Supermercado One', cursive;
                margin-bottom: 30px;
                margin-top: 10px;
                padding-top: 10px;
            }
        </style>
        <div class="container">
            <div class="header">
                <h1>
                    Clean<span style="color:#7ADEFE">Slider</span>
                </h1>
                <span style="margin-left:5px;font-size:1.0em">By. Lucas Forchino.</span>
            </div>
            <div class="slider">
                <ul>
                    <li><a rel="no-follow" target="blank_" href="http://es.wikipedia.org/wiki/Arco_de_C%C3%B3rdoba" title="Córdoba Arc - Córdoba Argentina"><img src="img/img1.jpg" /></a></li>
                    <li><a rel="no-follow" target="blank_" href="http://en.wikipedia.org/wiki/C%C3%B3rdoba_Cabildo" title="Colonial Town Hall - Córdoba Argentina"><img src="img/img2.jpg" /></a></li>
                    <li><a rel="no-follow" target="blank_" href="http://en.wikipedia.org/wiki/C%C3%B3rdoba_Cathedral" title="Cathedral - Córdoba Argentina"><img src="img/img3.jpg" /></a></li>
                    <li><a rel="no-follow" target="blank_" href="http://en.wikipedia.org/wiki/C%C3%B3rdoba,_C%C3%B3rdoba_Province" title="Flowers Walk - Córdoba Argentina"><img src="img/img4.jpg" /></a></li>
                    <li><a rel="no-follow" target="blank_" href="http://en.wikipedia.org/wiki/C%C3%B3rdoba,_C%C3%B3rdoba_Province" title="Córdoba City - Argentina"><img src="img/img5.jpg" /></a></li>
                </ul>
            </div>   
        </div>         
    </body>
</html>
