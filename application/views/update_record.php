<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
</head>
 
<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="username" value="<?php echo $row->username; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email" value="<?php echo $row->email; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="phone" value="<?php echo $row->phone; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update Records"/></td>
  </tr>
</table>
	</form>
	<?php } ?>
</body>
</html>