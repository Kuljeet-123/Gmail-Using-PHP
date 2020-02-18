<?php  echo"<form method='post' action='userAccount.php'>";
echo"<div id='inbox_header'>";
echo "<input type='submit' value='Delete Forever' id='deleteFor' name='trashDel'>";
include("labelList.php");
echo"<input type='submit' name='moveLabelTra' value='Move!' id='moveLbutton' />";
			echo "Trash";
         echo"</div>";
         echo"<table id='inbox_table'>";
            
			
	$res=scandir("userProfile/$UserId/trash");
			array_shift($res);
			array_shift($res);
			$i=0;
			foreach($res as $k=>$v)
			{
				if($i%2==0)
				{
			echo "<tr>"."<td align='left'>";
			echo "<input type='checkbox' name='mtm[$i]' value='$v'> : <a href='userAccount.php?atm=$v'>$v</a>'";
			echo"</td>";
			
echo"<td width='20%' style='font-size:20px'>";
					echo date("H:i d F Y",filectime("userProfile/$UserId/trash/$v"));
			echo"</td>"."</tr>";
			$i=$i+1;
				}
				else
				{
					echo "<tr class='alt'>".
					"<td align='left'>";
					echo "<input type='checkbox' name='mtm[$i]' value='$v'> : <a href='userAccount.php?atm=$v'>$v</a>'";
					echo"</td>";
					
echo"<td width='20%' style='font-size:20px'>";
					echo date("H:i d F Y",filectime("userProfile/$UserId/trash/$v"));
					echo"</td>"."</tr>";
					$i=$i+1;
				}
			}
           echo "</table>";
		   echo "</form>";
		   
//if there are no mail
		   if ($i==0)
		   {
	echo "There are no emails in your Trash folder."; 
			}
	
?>