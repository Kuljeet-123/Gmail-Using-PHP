<?php
echo"<form method='post' action='userAccount.php' >";
echo"<div id='inbox_header'>";
echo"<input type='hidden' value='$Clabel' id='delete' name='LabName'>";
echo"<input type='submit' value='Delete' id='delete' name='LabDel'>";
include("labelList.php");
echo"<input type='submit' name='moveLabelLab' value='Move!' id='moveLbutton' />";
         echo "Label: ".$Clabel;
         echo"</div>";
         echo"<table id='inbox_table'>";
            
			
	$res=scandir("userProfile/$UserId/labels/$Clabel");
			array_shift($res);
			array_shift($res);
			
			$i=0;
			foreach($res as $k=>$v)
			{
				if($i%2==0)
				{
			echo "<tr>"."<td align='left'>";
			
	echo"<input type='checkbox' name='mlm[$i]'
			value='$v'> : <a href='userAccount.php?alm=$v&LabelName=$Clabel'>$v</a>";
			echo"</td>";
			
			echo"<td width='20%' style='font-size:20px'>";
		
echo date("H:i d F Y",filectime("userProfile/$UserId/labels/$Clabel/$v"));

			echo"</td>"."</tr>";
			$i=$i+1;
				}
				else
				{
					echo "<tr class='alt'>"."<td align='left'>";
					
 echo"<input type='checkbox' name='mlm[$i]'
			value='$v'> : <a href='userAccount.php?alm=$v&LabelName=$Clabel'>$v</a>";
			echo"</td>";
			
			echo"<td width='20%' style='font-size:20px'>";
			echo date("H:i d F Y",filectime("userProfile/$UserId/labels/$Clabel/$v"));
					echo"</td>"."</tr>";
					$i=$i+1;
				}
			}
           echo "</table>";
	
		   echo "</form>";

//if there are no mail
		   if ($i==0)
		   {
	echo "There are no emails in your ".$Clabel." folder."; 
			}

				   
?>