<?php
   include('staffSession.php');
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Murdoch Groceries</title>
 <META http-equiv="Content-Type" content="text/html; charset=EUC-JP">
 <!--
 <link rel="stylesheet" type="text/css" href="css/infoStyle.css">
 -->
 <link rel = "stylesheet" type = "text/css" href = ".././css/navbar.css" />
 <link rel = "stylesheet" type = "text/css" href = ".././css/homepage.css" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
 <script src=".././js/validation.js"></script>
 <script>
  $(document).ready(function(){
	  $("#searchBy").change(function(){
		  switch($("#searchBy").val()){
  			  case "price":
				  document.getElementById("searchCon").style.display="inline";
				  break;
			  default:
				  document.getElementById("searchCon").style.display="none";
				  break;
		  }
	  });
  });
 </script>
</head>

<body>

	<nav>
		<ul id = "navbar">
		  <li class = "navElement"><a class="inactive" href="logout.php">Logout</a></li>
		</ul>
	</nav>
	
	
 <div id="info">
 Welcome to the website for Murdoch Groceries staff page. Here you are able to add stock to items.
 </div><br>
 <div id="shop">
  <div id="searchmenu">
   <form name="searchDatabase" action=".././php/productDB.php" method="post" onSubmit="return validate(this)">
   <input type="text" name="search" id="search"></input>
   <select name="searchCon" id="searchCon" style="display:none">
    <option value="<"><</option>
    <option value="<="><=</option>
    <option value="=">=</option>
    <option value=">=">>=</option>
    <option value=">">></option>
   </select>
   <select name="searchBy" id="searchBy">
    <option value="name">Name</option>
    <option value="category">Category</option>
    <option value="price">Price</option>
   </select>
   <input type="submit" value="Search Groceries"></input>
   </form>
  </div>
  <br>
  <div id="searchresult">
  </div>
 </div>
 
 <div id= "footer">
	<p>All images from woolworths.com.au</p>
 </div>
</body>



</html>


