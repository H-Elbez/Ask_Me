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
                <a href="includes/logout.inc.php" class="btn btn-primary btn-lg " role="button">Logout</a>
                <li>
                    <h5></h5>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <h2 class="sub-header">Questions</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <?php
            $mysqlquery = mysqli_query($db , "SELECT * FROM Question");
            $res = mysqli_fetch_assoc($mysqlquery);
            while ( $res > 0 ) {
                 echo "<tr  style='cursor: pointer' >
                            <td data-pg-id='768'> 
                                <h3> Name :  ",$res["name"],"</h3>"
                                ,"<br data-pg-id='1558'>
                                <h3> Question :   ",$res["q"],"</h3>","
                                <br data-pg-id='1561'>
                                ",
                           "</td>
                               <td data-pg-id=\'594\'> <br data-pg-id='1558'> <br data-pg-id='1558'>
                     <a href='includes/output.php?n=",$res["name"],"&q=",$res["q"],"' class='btn btn-danger' role='button' >Delete it</a>
                                    <br data-pg-id='1558'>
                        </tr>";
                        $res = mysqli_fetch_assoc($mysqlquery);
}
            ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
    </body>
</html>
