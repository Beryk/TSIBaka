<?php
session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="js/popup.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript">
	
		$(document).ready(function(){

			 PopUp($('#obj'), $('.trigg'));
			 
		});
		
		function sendPost(ths) {
			
    	 var tr = ths.parentNode.parentNode,
         carid = tr.getElementByTagName("td")[0].innerHTML;
		 $.post('car/main.php', {message:carid}, function(data)	{
	alert('Сервер ответил: '+data);
});
         
}

		
	</script>

    
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
        
        <div id="obj">
        	<div id="popup_input">
            
            <table id="popuptable">
            <tr id="inforow_color">
            <td>Name</td>
            <td>Model</td>
            <td>Year</td>
            <td>TO</td>
            </tr>
            <tr>
            <td><?php echo $_SESSION['id']; ?></td>
            </tr>
            </table>
            
            </div>
         </div>
	
        <?php
		//Car information output
		require('setup.php');
		$db = db_connect();
		$rs = mysql_query("SELECT * FROM carinfo");
		print "<table id='maintable'>";
		$var = 1;
		
	
		echo "<tr id='inforow_color'>";
		echo "<td width='25px'></td>";
		echo "<td>Name</td>";
		echo "<td>Model</td>";
		echo "<td>Year</td>";
		echo "<td>Comment</td>";
		echo "<td>TO</td></td>";
		echo "<td>Addition info</tr>";
		
		while ($row = mysql_fetch_array($rs)){
			if($var%2 == 0){
				$id = 'table_row_color_2';
				}else{
					$id = 'table_row_color_1';
					}
			
 		
			echo "<tr>";
			echo "<td hidden='true'>".$row['carid']."</td>";
			echo "<td id='$id' width='25px'></td>";
			echo "<td id='$id'>".$row['name']."</td>";
			echo "<td id='$id'>".$row['model']."</td>";
			echo "<td id='$id'>".$row['year']."</td>";
			echo "<td id='$id'>".$row['info']."</td>";
			echo "<td id='$id'>".$row['to']."</td>";
			echo "<td id='$id'><a class='trigg' href='javascript:void(0);'>Information</a></td>";// <button onclick='sendPost(this);'>K</button></td>


			$var++;
			}
			$var = 1;
			print "</tr>";
			print "</table>";
			mysql_close($db);
		 ?>
		</div>
		</div><!-- .content-->
		</div><!-- .container-->

		<div class="left-sidebar">
        
			<div id="usermenu">
      
           
			<?php
			// Вывод в leftsidebar
            
            echo "<ul>";
            echo "<li>Welcome, &nbsp;<font>" . $_SESSION['user'] . "</font></li></br></br>";
			echo "<li id='lis'><a href='index.php'><img src='images/exit.png' alt='exit'></a></li>";
            echo "</ul>";
           
		   ?>
  	          
            </div>
		</div><!-- .left-sidebar -->

	</div><!-- .middle-->

</div><!-- .wrapper -->

<div class="footer" align="center">
	<strong>Berrryk!</strong>
</div><!-- .footer -->

</body>
</html>