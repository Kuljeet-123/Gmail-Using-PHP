<form action="userAccount.php" method="post">
            	<table id="composeTable">
                <tr><td></td><td>
                <?php echo $errorMsg; ?>
                </td></tr>
                <tr>
                <td width="120" style="text-align:left">To: </td>
               	<td width="225" style="text-align:left">
                <input type="text" name="toUser" id="touser"> 
                </td>
                </tr>
                
                <tr>
                <td style="text-align:left">Subject:</td>
                <td style="text-align:left">
                <input type="text" name="subject" id="subject">
                </td>
                </tr>
                
                <tr>
                <td height="39" style="text-align:left" valign="top">Message:</td>
                <td style="text-align:left">
                <textarea name="message" id="message"></textarea>
                </td></tr>
                <tr><td>&nbsp;</td>
                <td><input type="submit" value="Save" name="save" id="save">
                <input type="submit" value="Send" name="send" id="save">
                </td></tr>
            	</table>
   	  </form>