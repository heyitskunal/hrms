
<html lang="en">
  <head><title>REGISTER PAGE
    </title>
    <link rel="stylesheet/css" href="style.css">

<style>

h1{
  color: #045;
  font-family: "Playfair Display", Arial, serif;
  font-weight: 400;
  margin: 0 0 20px 0;
}

body {
  background-image: url(reg.png);
  font-family: "Work Sans", Arial, sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 1.7;
  color: #828282;
  background: #fff;
}




</style>
  </head>
    <body>

<h1><center>TO REGISTER FILL</center> </h1>

<form action="" method="POST">
<table cellspacing="10" cellpadding="2" bgcolor="black"  >
  <tr><td>USERNAME:</td><td><input type="text" name="username" placeholder="enter your username" required="TRUE"></td>
    <td>FIRSTNAME:</td><td><input type="text" name="fname" required="true"></td>
    <td>LASTNAME:</td><td><input type="text" name="lname" required="true"></td>
  </tr>



  <tr><td>EMAIL:</td><td><input type="email" name="email" placeholder="enter your EMAIL" required="TRUE"></td></td><td>DOB:</td>
    <td><input type="date" name="dob" required="true"></td>

    <td>PERSON TYPE:</td><td><input type="radio" name="ptype" value="intern" required="TRUE">INTERN<input type="radio" name="ptype" value="permanent" required="TRUE">PERMANENT</td>



  </tr><br />
  
  <tr>
    <td>PASSWORD:</td><td><input type="password" name="password" placeholder="enter here" required="TRUE"></td>
    <td>CONFIRM PASSWORD:</td><td><input type="password" name="password2" placeholder="enter here" required="TRUE"></td>
  </tr>
  <tr><td>SELECT GENDER</td><td><input type="radio" name="gender" value="male" required="TRUE">MALE<input type="radio" name="gender" value="female" required="TRUE">FEMALE</td>

    <td>MARITAL STATUS:</td><td><input type="radio" name="mstatus" value="married" required="TRUE"/>MARRIED<input type="radio" name="mstatus" value="unmarried" required="TRUE">UNMARRIED</td>
  </tr>
  
  
    <tr><td>PHONE NO:</td><td><input type="numeric" name="phone" placeholder="enter here" required="TRUE"></td></tr>

    <tr><td><input type="submit" name="register" value="REGISTER"></td><td>ALREADY HAVE ACCOUNT<a href="login">click here</a></td></tr>
    

  </select>
</table>
</form>
    </body>
</html>