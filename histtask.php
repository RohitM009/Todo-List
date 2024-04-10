<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>TODO LIST</title>

<!-- Linking Fonts Here -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Abel&family=Alegreya+SC:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&family=Bree+Serif&family=Crimson+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<div>
        <p><span id="datetime"></span></p>
        <script >
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleString();
        </script>
    </div>

<!-- Header Starts Here -->
     <header>

          <div id="navContent">

               <h2>History</h2>
               
               <ul>
               <li><a href="index.php">HOME</a></li>
               <li><a onclick="printt()" value="Print"/>Print</a></li>
               </ul>

          </div>

     </header>
     
     <div class="container">
           <div class="col-md-12">
             <table class="table table-condensed">
                <tr><th>Sr. No.</th>
                <th>Target Time</th>
                <th>Tasks </th>
                <th>Date</th>
                <th>Task Status </th>
               
              </tr>
              

                <?php
                        include('connection.php');
                        $date1=$_SESSION['DATE1'];
                        $date2=$_SESSION['DATE2'];
                        $yes=$_SESSION['YES'];
                        $no=$_SESSION['NO'];
                        $id = $_SESSION['USER_ID'];

                        
                        $sql = "SELECT * FROM `todo`where user_id= '$id' and date between '$date1' and '$date2' ";
                        $result = mysqli_query($conn, $sql);
                        
                        // Find the number of records returned
                        $num = mysqli_num_rows($result);
                                
                                
                                if($num> 0){
                                    $sno=0;
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $sno=$sno+1;
                                        $status = $row['completed'] == '1' ? 'Completed' : 'Not Completed'; // Check if task is completed or not

                                echo" 
                                <tr>
                                    <td>$sno</td>
                                    <td>$row[targettime]</td>
                                    <td>$row[task]</td>
                                    <td>$row[date]</td>
                                    <td>$status</td> <!-- Display completed or not completed status -->
                                      
                                    </tr>";
                                    }
                                    
                                }
                                ?>
                                
              </table>
            </div> 
        </div>
<script>
  function printt(){
    window.print()
  }</script>
</body>
</head>
</html>