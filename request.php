<!DOCTYPE>
<html>
<head>
<title>Blood Bank</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<img src="images/save blood.jpeg" alt="save blood" height="290px" width="1295px" style="background-color: red;">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="dregistration.php">Donar Registration</a></li>
<li><a href="request.php">Send Request</a></li>
<li><a href="camps.php">camps</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="about.php">About</a></li>
</ul>

<form action="req.php" method="POST">
   
    <table  cellspacing="10" cellpadding="10">

<tr>
<td>
<center><h1> Requests For Blood</h1></center>
</td>

</tr>        
<tr>
            <td align="right">
                Name</td>
            <td align="left">
                <input  type="text" name="uname"/></td>
           
        </tr>
        <tr>
            <td align="right">
                Gender</td>
            <td align="left">
                <input  type="radio" name="gender" value="male">Male           
                                <input  type="radio" name="gender" value="female">Female  </td>         
        </tr>
        <tr>
            <td align="right">
             Age</td>
            <td align="left">
                <input  type="text" name="age"/></td>
           
        </tr>
      
      <tr>
            <td align="right">
               Mobile No</td>
            <td align="left">
                <input  type="text"  name="contact"/></td>
        <tr>
            <td align="right">
               Blood Group</td>
            <td><select name="utype">
<option value="O+"> O+</option>
<option value="O-"> O-</option>
<option value="A+"> A+</option>
<option value="A-"> A-</option>
<option value="AB+"> AB+</option>
<option value="AB-"> AB-</option>
</select></td>
           
        </tr>
      

<tr>
            <td align="right">
               Email Id</td>
            <td align="left">
                <input  type="text" name="email"/></td>
           
        </tr>
        
<tr>
            <td align="right">
               Till Required Date</td>
            <td align="left">
                <input  type="date" name="date"/></td>
           
        </tr>
        <tr>
            <td align="right">
               Address</td>
            <td align="left">
                <input  type="text" name="adress"/></td>
           
        </tr>
        <tr>
            <td align="center" >
             &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp   &nbsp    &nbsp<input type="submit" value="Sign Up" /></td>
            <td>
                <input  type="reset" value="Cancel" /></td>
           
        </tr>
	
    </table>

   
    </form>
            </div></div>
                                </body></html>	
