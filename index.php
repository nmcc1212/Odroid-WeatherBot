<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Odroid C2 WiFi Controlled Irrigation System</title>
</head>
       <body>
       <center><h1>Control Irrigation using Odroid Webserver</h1>      
         <form method="get" action="index.php">                
            <input type="submit" style = "font-size: 14 pt" value="OFF" name="off">
            <input type="submit" style = "font-size: 14 pt" value="ON" name="on">
            <input type="submit" style = "font-size: 14 pt" value="Activate irrigation for 30 minutes" name="30mins">
         </form>​​​
                         </center>
<?php
    shell_exec("/usr/bin/gpio -g mode 235 out");
    if(isset($_GET['off']))
        {
                        echo "Irrigation is off";
                        shell_exec("/usr/bin/gpio -g write 235 0");
        }
            else if(isset($_GET['on']))
            {
                        echo "Irrigation is on";
                        shell_exec("/usr/bin/gpio -g write 235 1");
            }
   if(isset($_GET["30mins"]))
   {
      echo "30 mins activated"      
      shell_exec("/home/odroid/Odroid-WeatherBot/30min.py")
   }
?>
   </body>
</html>