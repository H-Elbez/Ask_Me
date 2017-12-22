<?php
include "includes/Verify.php";
include "php/db_connex.php";

$page = $_SERVER['PHP_SELF'];
$sec = "3";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="picture/logo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Questions</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/dashboard.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
        <div id="navbar" class="navbar">
            <ul class="nav">
                <a href="includes/logout.inc.php" class="btn btn-primary btn-lg " id="log" role="button">Logout</a>
                <li>
                    <h5></h5>
                </li>
                <a href="stats.php" class="btn btn-primary btn-lg " id="ansQ" role="button">Answered Questions</a>
                <li>
                    <h5></h5>

                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <center>
                <h2 class="sub-header">Questions</h2>
                <div class="table">
                    <table class="table table-striped">
                        <tbody>
                  <?php
            $mysqlquery = mysqli_query($db , "SELECT count(id) as num FROM Question");
            $res = mysqli_fetch_assoc($mysqlquery);
            echo "<div class='col-xs-6 col-md-6'>";
            echo "<h3>Not answered</h3>";
            echo "<h1 id='numN' >".$res["num"]."</h1>";
            echo "</div>";    
               $mysqlquery = mysqli_query($db , "SELECT count(id) as num FROM Answered");
            $res = mysqli_fetch_assoc($mysqlquery);
            echo "<div class='col-xs-6 col-md-6'>";
            echo "<h3>Answered</h3>";
            echo "<h1 id='num'>".$res["num"]."</h1>";
            echo "</div>";  
            $mysqlquery = mysqli_query($db , "SELECT * FROM Question");
            $res = mysqli_fetch_assoc($mysqlquery);
            while ( $res > 0 ) {
                 echo "<tr>
                            <td data-pg-id='768'> 
                           <center>
                                <h3>Name</h3> <h4>",$res["name"],"</h4>"
                                ,"<br data-pg-id='1558'>
                                <h3> Question</h3><h4>",$res["q"],"</h4>","
                                ",
                           "<br data-pg-id='1558'>
                           <br data-pg-id='1558'>
                     <div class='col-xs-6 col-md-6'>      
                     <a href='includes/archive.php?id=",$res["id"],"' class='btn btn-success' role='button' >Answered</a>
                     </div>
                     <div class='col-xs-6 col-md-6'>
                     <a href='includes/output.php?id=",$res["id"],"' class='btn btn-danger' role='button' >Delete</a>
                     </div>
                    </center>
                     </td>           
                        </tr>";
                        $res = mysqli_fetch_assoc($mysqlquery);
}
            ?>
                        </tbody>
                    </table>
            </center>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>
