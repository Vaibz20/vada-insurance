<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<style>     *{       font-family: 'Josefin Sans', sans-serif;     }

body{
background-color:#FFFFCC;
}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;
margin-top:205px;
}

#logo1{
width:102%;
border:solid 2px black;
text-align:center;
background-color:green;
margin-top:-7px;
margin-left:-10px;
}

#logo2{
border:solid 1px black;
width:100%;
text-align:center;
}

#logo3{
text-align:left;
}

#logo5{
width:33.33%;
}


#n1{margin-top:-30px;}

#n1 td{padding:10px;
}

</style>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
	<a class="navbar-brand" href="#">Welcome</a>
  </div>
</nav>

<div style="height: 50px"></div>


<h2 align="center">Registration Form for Life Insurance</h2>
<form ENCTYPE="multipart/form-data" method="post" action="life_form_insert.php">
<h3>LIFE INSURANCE</h3>
<b>Please Enter The Following details:</b>
<table id="n1" border="0" width="60%">
<tr><td width="20%">CUSTOMER ID: </td><td><input type="text" name="cid" maxlength="4"/></td></tr><br />
<tr><td width="20%">POLICY ID: </td><td><input type="text" name="lyfid" maxlength="6"/></td></tr><br />
<tr><td width="20%">POLICY DATE: </td><td><input type="date" name="lyfdate"  value="<?php $date = date('Y-m-d');echo $date; ?>"/></td></tr><br />
</table>
<p>
<input type="submit" value="register" /><br />
</form>
<?php      include('footer.php');     ?>
</body>
</html>