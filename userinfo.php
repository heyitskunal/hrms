

<html>
<head>
<title>
Employee
</title>
<style type="text/css">
h2{
  padding: 35px;
}


.one{
  background-color:#C0C0C0;
  height:100px;

}
.two{
  padding:20px;

}
</style>
<link rel="stylesheet" href="../../assets/css/styles.css" type="text/css" />
</head>
<body>

  <div class="wrapper">
        <ul class="middleNavR">
            <li><a href="#" title="Add an article" class="tipN"><img src="images/icons/middlenav/create.png" alt="" /></a></li>
            <li><a href="#" title="Upload files" class="tipN"><img src="images/icons/middlenav/upload.png" alt="" /></a></li>
            <li><a href="#" title="Add something" class="tipN"><img src="images/icons/middlenav/add.png" alt="" /></a></li>
            <li><a href="#" title="Messages" class="tipN"><img src="images/icons/middlenav/dialogs.png" alt="" /></a><strong>8</strong></li>
            <li><a href="#" title="Check statistics" class="tipN"><img src="images/icons/middlenav/stats.png" alt="" /></a></li>
        </ul>
        </div>


<div class="chart" style="padding:118px;">
<h1 style="width: 400px; margin-left: 60px;">USER INFO</h2>

<div class="two" style="">
<table border="1" cellspacing="5" cellpadding="5" style="margin-left: 40px; background-image:url('one.jpeg');">
  <tr style="background:#e0ffff">
    <th>userid</th><br/>
    <th>username</th>
 
    <th>email</th>
  

    <th>password</th>
    <th>phone</th>
    <th>gender</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>date of birth</th>
    <th>image</th>
  </tr>
<?php

  $i=1;
  foreach($data as $row)
  {
   "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->username."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->password."</td>";
  echo "<td>".$row->phone."</td>";
  echo "<td>".$row->gender."</td>";
  echo "<td>".$row->first_name."</td>";
  echo "<td>".$row->last_name."</td>";
  echo "<td>".$row->dob."</td>";
  echo "<td><img src='var/www/html/CodeIgniter/application/views/userLogin.png'></td>";
  echo "</tr>";


  $i++;

  }

   ?>
   </table>
   </div>
</div>
</body>
</html>

