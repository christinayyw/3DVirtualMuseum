<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8" />

<title>json sample</title>
</head>

<body>
<div id="placeholder"></div>

<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>
$.getJSON('http://users.sussex.ac.uk/~yw221/lab7/part_b/my_mvc/application/model/createjson.php',function(data){
	var output = "<ul>";
	for(var i in data.users){
		output+="<li>"+data.users[i].firstName+" "+data.users[i].lastName +"--"
		;
	}
	
	output+="</ul>";
	
	document.getElementById("placeholder").innerHTML=output;



});


</script>

</body>
</html>