<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<div class="wrapper">

	<div class="header">
	</div><!-- .header-->

	<div class="middle">

		<div class="container">
    
			<div class="content">
                <div class="contentheader">
        <form>
        Search: <input type="text" name="search" />
        </form>
        </div>
		<div class="table">
        <?php
		//Car information output
		require('setup.php');
		$db = db_connect();
		$rs = mysql_query("SELECT * FROM carinfo");
		print "<table border='solid' cellspacing='0' cellpadding='0'>";
		while ($row = mysql_fetch_array($rs)){
			print "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['model']."</td>";
			echo "<td>".$row['year']."</td>";
			echo "<td>".$row['info']."</td>";
			echo "<td>".$row['TO']."</td>";
			}
			print "</tr>";
			print "</table>";
			mysql_close($db);
		 ?>
		</div>
		</div><!-- .content-->
		</div><!-- .container-->

		<div class="left-sidebar">
   
        	<form><p align="center"><strong>Profile:</strong></p></br>
            <?php
			// Вывод в leftsidebar
            print "<table>";
            print "<tr>";
            echo "<td><font id='leftside'>&nbsp&nbspUser</font></td>";
		    echo "<td>&nbsp&nbsp<font id='leftside'>Settings</font></td>";
            print "</tr>";
            print "</table>";
            ?>
            Nickname Settings</br>
            Time Log out
            </form>
            </table>
            
			<p align="center"><strong>Filter:</strong></p></br>
            <form>&nbsp;&nbsp;Search: <input type="text" name="search" width="15" />
            
            </form> 
		</div><!-- .left-sidebar -->

	</div><!-- .middle-->

</div><!-- .wrapper -->

<div class="footer" align="center">
	<strong>Berrryk!</strong>
</div><!-- .footer -->

</body>
</html>