<?php
include "includes/Verify.php";
include "php/db_connex.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
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
    </head>
    <body>
        <div id="navbar" class="navbar">
            <ul class="nav">
                <li>
                    <h5><a href="includes/logout.inc.php" id="logout">Log out</a></h5>
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
                            <td data-pg-id=\'594\'>
                                     <img src='http://espacevelos.ch/wp-content/uploads/test.png' hight='100' width='100' data-pg-id='739'>
                            </td>
                            <td data-pg-id='768'> 
                                <h4> Name :  ",$res["name"],"</h4>"
                                ,"<br data-pg-id='1558'>
                                <h5> Question :   ",$res["q"],"</h5>","
                                <br data-pg-id='1561'>
                                <a href='#'>Delete it</a>",
                           "</td>
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
