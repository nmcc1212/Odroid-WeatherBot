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
   $pythonpath = getenv('PYTHONPATH');
   $additional = '/usr/bin/python3';
   if($pythonpath === false){
   putenv("PYTHONPATH=$additional");
   }
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
            else if(isset($_GET["30mins"]))
            {
                        
                        shell_exec("/usr/bin/python3 /home/odroid/30min.py");
                        echo "30 mins activated";
            }
?>
   </body>
</html>