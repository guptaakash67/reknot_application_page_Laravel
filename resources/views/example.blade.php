<html>
<head>
<title>Apply for the internship at reknot solutions Pvt Ltd.</title>
</head>
<body background="img/15.jpg">
<p>hii</p>

   
@if(Session::has('message'))
<p align="center"> <font color="yellow" size="10px">  {{session()->get('message') }}</font></p>
@endif



<form action="example" method="POST">
    @csrf

<h1 align="center"> <font color="yellow"><u>REKNOT SOLUTION INTERNSHIP</u> </font> </h1>

<table border="1" width="40%" height="600px" align="center" bgcolor="black">
<!---row1--->
<tr align="center" bgcolor="yellow">
<th colspan="2"><font size="10">APPLY FOR INTERNSHIP</font></th> 
</tr>

<!---row2--->
<tr>
<th><font color="yellow">
<label>Name</label></th>
<th><input type="text" name="username" >
<br><span style="color: yellow">@error('username'){{$message}}@enderror</span>
</th> 
</tr>

<!---row3--->
<tr>
<th><font color="yellow"><label>Age</label></th>
<th><input type="date" name="Age" ><br><span style="color: yellow">@error('Age'){{$message}}@enderror</span></th><br>
</tr>


<!---row4--->
<tr>
<th><font color="yellow">
<label>Mobile No</label></th>
<th><input type="number" name="MoblieNo">
<br><span style="color: yellow">@error('MoblieNo'){{$message}}@enderror</span>
</th>
</tr>

<!---row5--->
<tr >
<th><font color="yellow">
<label>Email</label></th>
<th><input type="email" name="email">
<br><span style="color: yellow">@error('email'){{$message}}@enderror</span>
</th>
</tr>

<!---row6-->
<tr>
    <th><font color="yellow">
    <label>College_Name</label> </th>
    <th><input type="name" name="college_name">
    <br><span style="color: yellow">@error('college_name'){{$message}}@enderror</span>
    </th>
</tr>

<!---row7--->
<tr >
<th><font color="yellow">
<label>Gender</label></th>
<th><font color="yellow">
<input type="radio" name="gender" value="m">Male 
<input type="radio" name="gender" value="f">Female
<br><span style="color: yellow">@error('gender'){{$message}}@enderror</span>
</th>
</tr>

<!---row8--->
<tr >
<th><font color="yellow">
<label>City</label></th>
<th>  
<select name="city" required>
<option selected hidden value="">select city</option>
<option value="mumbai">mumbai</option>
<option value="chennai">chennai</option>
<option value="indore">indore</option>
<option value="banglore">banglore</option>
<br><span style="color: yellow">@error('city'){{$message}}@enderror</span>
</th>
</tr>

<!---row9--->
<tr align="center" bgcolor="yellow">
<th colspan="2"><input type="Submit">
<input type="reset">
</th>
</tr>

</table>
</form>

</body>
</html>







<style>
    h1{
        font-size: 50px;
    }

    h2{
        text-align: center;

    }
</style>

