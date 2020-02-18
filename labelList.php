<?php
$res=scandir("userProfile/$UserId/labels");
array_shift($res);
array_shift($res);
echo"<select id='labelList' name='selLabel'>";
foreach($res as $k=>$v)
{
echo "<option>$v</option>";
}
	
echo"</select>";
/*
echo"<input type='submit' name='moveLabel' value='Move!' id='moveLbutton' />";*/
?>