<?php
$a=scandir("themes");
			array_shift($a);
			array_shift($a);
			
			foreach($a as $k=>$v)
			{
			
			echo "<a href='userAccount.php?themeName=$v'><img src='themes/$v' 
width='100' height='100' border='2'></a>";
		 	
			}
?>