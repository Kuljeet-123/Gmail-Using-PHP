<?php
//div for manage label header--
echo"<div id='label_header'>";
echo "Manage Labels";
         echo"</div>";
//manage label header ends--
//manage label content(mid) page starts
echo"<div id='label'>";
		 
$res=scandir("userProfile/$UserId/labels");
array_shift($res);
array_shift($res);
echo"<form method='post'>";
foreach($res as $k=>$v)
{
echo "<a href='userAccount.php?Clabel=$v'>$v</a>";

echo"<input type='submit' value='Remove' name='RemoveLabel' id='labelRemove'>";

echo "<hr>";
	
}

echo"Create New label:"."&nbsp;"."<input type='text' name='newLabel'>";
echo"<input type='submit' value='Create Label' name='createLabel'>";
echo"</form>";
	
echo"</div>";	
?>
