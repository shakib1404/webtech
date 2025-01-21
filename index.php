<?php
include("header.php");
include("menu.php");
?>
<div id="main_content">
<br><br><br>
    <form action="actionpage.php" method="post">
        <table>
        <tr><td>First Name:</td> <td><input type="text" name="fname"/></td></tr> <br>
        <tr><td>Last Name:</td> <td><input type="text" name="lname"/></td></tr><br>
        <tr><td>Email: </td><td><input type="email" name="email"/></td></tr><br>
        <tr><td>Mobile:</td><td><input type="text" name="mobile"/></td></tr><br>
        <tr><td>Text:</td><td><input type="Address" name="mobile"/></td></tr><br>
        
</table>
<input type="submit" name="submit" value="Submit"/><br>
    </form>

</div>
<?php
include("footer.php");
?>