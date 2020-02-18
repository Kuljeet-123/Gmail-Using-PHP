 <form action="userAccount.php" method="post" id="change_pwd_form">
        
        <table>
        <tr><td style="font-size:24px">
        <?php echo $errorMsg; ?>
        </td></tr>
        <tr><td>
        <input type="text" name="CurrPwd" id="OldPwd" value placeholder="Enter Current Password">
        </td></tr>
        <tr><td>
        <input type="text" name="NewPwd" id="NewPwd" value placeholder="Enter New Password">
        </td></tr>
        <tr><td>
        <input type="text" name="ConPwd" id="NewPwd" value placeholder="Confirm New Password">
        </td></tr>
        <tr><td>
        <input type="reset" value="Reset" id="reset">
        <input type="submit" value="Submit" id="submit" name="chngPwd">
        </td></tr>
        
        </table>
        </form>