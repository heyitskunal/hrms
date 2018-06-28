
<html>
<head>
<link href="../../assets/css/panel_css/styles.css" rel="stylesheet" type="text/css" />
</head>
<center><h1>WELCOME ADMIN</h1></center>
    <div class="wrapper" style="background-color: white;">
    <table border="1" cellspacing="5" cellspacing="10">
        <tr>
         <th>user id</th>
    <th> userName</th>
    <th>Email</th>
    <th>gender</th>
    <th>phone</th>
    <th>First name</th>
    <th>LAST name</th>
    <th>PERSON TYPE</th>
    <th>MARITAL STATUS</th>
    <th>DOB</th>

  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->user_id."</td>";
  echo "<td>".$row->username."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->gender."</td>";
  echo "<td>".$row->phone."</td>";
  echo "<td>".$row->fname."</td>";
  echo "<td>".$row->lname."</td>";
  echo "<td>".$row->ptype."</td>";
  echo "<td>".$row->msatus."</td>";
  echo "<td>".$row->dob."</td>";
    echo "<td><a href='deletedata?id=".$row->user_id."'>Delete</a></td>";
  echo "<td><a href='updatedata?id=".$row->user_id."'>Update</a></td>";
  echo "</tr>";
  $i++;

  }
   ?>
   <tr><td><a href="register" target='_self'>register</a></td></tr>
</table>
</div>
<iframe  style="width: 90%; height: 300px"
     marginwidth="0" marginheight="0" frameborder="0"
    name="ii"></iframe></tr>
</html>