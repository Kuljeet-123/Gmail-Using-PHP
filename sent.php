<?php	 echo"<form method='post' action='userAccount.php'>";
echo"<div id='inbox_header'>";
echo "<input type='submit' value='Delete' id='delete' name='sentDel'>";
include("labelList.php");
echo"<input type='submit' name='moveLabelSen' value='Move!' id='moveLbutton' />";
         echo "Sent Items";
         echo"</div>";
         echo"<table id='inbox_table'>";
            
			
	$res=scandir("userProfile/$UserId/sent");
			array_shift($res);
			array_shift($res);
			$i=0;
			foreach($res as $k=>$v)
			{
				if($i%2==0)
				{
			echo "<tr>"."<td align='left'>";
			echo "<input type='checkbox' name='msm[$i]' value='$v'> : <a href='userAccount.php?asm=$v'>$v";
			echo"</td>";
			
			echo"<td width='20%' style='font-size:20px'>";
			echo date("H:i d F Y",filectime("userProfile/$UserId/sent/$v"));
			echo"</td>"."</tr>";
			$i=$i+1;
				}
				else
				{
					echo "<tr class='alt'>".
					"<td align='left'>";
					echo "<input type='checkbox' name='msm[$i]' value='$v'> : <a href='userAccount.php?asm=$v'>$v";
					echo"</td>";
					
					echo"<td width='20%' style='font-size:20px'>";
					echo date("H:i d F Y",filectime("userProfile/$UserId/sent/$v"));
					echo"</td>"."</tr>";
					$i=$i+1;
				}
			}
           echo "</table>";
		   	
		   echo "</form>";

//if there are no mail
		   if ($i==0)
		   {
	echo "There are no emails in your Sent folder."; 
			}

?>