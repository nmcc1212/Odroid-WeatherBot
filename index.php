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
         </form>​​​
                         </center>
<?php
    shell_exec("/usr/bin/gpio -g mode 235 out");
    if(isset($_GET['off']))
        {
                        echo "Irrigation is off";
                        $command = escapeshellcmd('/home/odroid/gpiotest.py');
                        $output = shell_exec($command);
                        echo $output;
        }
            else if(isset($_GET['on']))
            {
                        echo "Irrigation is on";
                        shell_exec("/usr/bin/gpio -g write 235 1");
            }
?>
   </body>
</html>