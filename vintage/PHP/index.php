<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../CSS/style.css">
  <meta charset="UTF-8">
  <title>Registration</title>
<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["gender"].value;
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["contact"].value;
    var f=document.forms["reg"]["username"].value;
    var g=document.forms["reg"]["password"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("First name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("Last name must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Gender name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("address must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("contact must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("username must be filled out");
      return false;
    }
    if (g==null || g=="")
    {
      alert("password must be filled out");
      return false;
    }
  }
</script>
<style>
#img {
	background-image : linear-gradient(to bottom, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0.8) 100%),url("../pictures/vintage_car26.jpg");
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	margin: 0;
	padding: 0;

}
</style>
</head>
<body id="img">
<div id="regist">
<br>
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post" align="center">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo '<span class="reg">Register Here</span>';
	    echo '<br>';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo '<span class="reg">Registration Success</span>';
	    echo '<br>';
	    echo '<span class="reg">Click <a href="../home.html">here</a> to go to home</span>';
          }
          ?>  
        </div></td>
      </tr>
      <tr>
        <td width="100"><div align="right"><span class="reg">First Name:</span></div></td>
        <td width="171"><input type="text" name="fname" class="demoInputBox" /></td>
      </tr>
      <tr>
        <td><div align="right"><span class="reg">Last Name:</span></div></td>
        <td><input type="text" name="lname" class="demoInputBox"/></td>
      </tr>
      <tr>
        <td><div align="right"><span class="reg">Gender:</span></div></td>
        <td><input type="text" name="gender" class="demoInputBox"/></td>
      </tr>
      <tr>
        <td><div align="right"><span class="reg">Address:</span></div></td>
        <td><input type="text" name="address" class="demoInputBox"/></td>
      </tr>
      <tr>
        <td><div align="right"><span class="reg">Contact:</span></div></td>
        <td><input type="text" name="contact" class="demoInputBox"/></td>
      </tr>
      <tr>
        <td><div align="right"><span class="reg">Username:</span></div></td>
        <td><input type="text" name="username" class="demoInputBox"/></td>
      </tr>
      <tr>
        <td><div align="right"><span class="reg">Password:</span></div></td>
        <td><input type="text" name="password" class="demoInputBox"/></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" id="submit"/></td>
      </tr>
    </table>
  </form>
<br>
</div>
</body>
</html>