 <html>
 <head>
 <meta name="viewport" content="width=device-width" />
 <title>Desk Control</title>
 </head>
         <body>
         Desk control:
         <form method="get" action="index.php">
                 <input type="submit" value="UP" name="up">
                 <input type="submit" value="STOP" name="stop">
                 <input type="submit" value="DOWN" name="down">
                 <input type="submit" value="SIT" name="sit">
                 <input type="submit" value="STAND" name="stand">
         </form>
         <?php
         if(isset($_GET['up'])){
                 $gpio_on = shell_exec("up.sh");
                 echo "Desk is going UP..";
         }

         else if(isset($_GET['stop'])){
                 $gpio_off = shell_exec("stop.sh");
                 echo "Desk stopped...";
         }

         else if(isset($_GET['down'])){
                 $gpio_off = shell_exec("down.sh");
                 echo "Desk is going DOWN...";
         }

         else if(isset($_GET['sit'])){
                 $gpio_off = shell_exec("sit.sh");
                 echo "Desk is going to the sitting position...";
         }

         else if(isset($_GET['stand'])){
                 $gpio_off = shell_exec("stand.sh");
                 echo "Desk is going to the standing position...";
         }
         ?>
         </body>
 </html>