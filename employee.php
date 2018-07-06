

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
<div class="chart" style="padding:118px;">
<h1 style="width: 400px; margin-left: 60px;">Employee management system</h2>

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
  </tr>


  <?php


  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->username."</td>";
  echo "<td>".$row->email."</td>";
  
  echo "<td>".$row->password."</td>";
  echo "<td>".$row->phone."</td>";
  echo "<td>".$row->gender."</td>";
  echo "<td>".$row->first_name."</td>";
  echo "<td>".$row->last_name."</td>";
  echo "<td>".$row->dob."</td>";
  echo "<td><a href='deletedata?id=".$row->userid."'><button>Delete</button></a></td>";
  echo "<td><a href='updatedata?id=".$row->userid."'><button>Update</button></a></td>";
  
  echo "</tr>";


  $i++;

  }
    echo "<td><a href='http://localhost/CodeIgniter/index.php/auth/register'><button>ADD user</button</a></td>";

   ?>

</table>
</div>
</div>
</body>
</html>



