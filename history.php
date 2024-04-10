<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>show history</title>


<!-- Linking Fonts Here -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Abel&family=Alegreya+SC:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&family=Bree+Serif&family=Crimson+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
     <?php
                if (isset($_REQUEST['submit'])) 
                {
                    $date1=$_REQUEST['from'];
                    $date2=$_REQUEST['to'];
                    $completed=$_REQUEST["completed"];
                    $notcompleted=$_REQUEST["not"];
                    
                    $_SESSION['DATE1']=$date1;
                    $_SESSION['DATE2']=$date2;
                    $_SESSION['YES']=$completed;
                    $_SESSION['NO']=$notcompleted;
                    
                    header('location: histtask.php');
                    
                }
     ?>

<!-- Header Starts Here -->
     <header>

          <div id="navContent">

               <h2>See history</h2>
               
               <ul>
               <li><a href="todo.php">Task</a></li>
               </ul>

          </div>
     </header>

     
     <div class="container">
            <form method="REQUEST">
                    <table>
                        <tr><td>From: </td><td><input type="date" id="from" name="from" require></td></tr>
                        <tr><td>To: </td><td><input type="date" id="to" name="to" require></td></tr>
                         </td>
 
                    </table>
                   <input type="submit" name="submit" value="submit">
                   
            </form>
    <div>
       
    </div>
</div>  
</div>
     
</body>
</html>