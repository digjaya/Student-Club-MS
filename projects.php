<!DOCTYPE html>
<html>
<head>
<style>
@font-face{
font-family: myfont;
src: url(fonts/RobotoSlab-Regular.ttf);         
}
div#banner { 
position: absolute; 
top: 0; 
left: 0; 
background-color:#0066ff ; 
width: 100%;
color: white;
}
div#banner-content { 
width: 800px; 
margin: 0 auto; 
padding: 10px; 
font-size: 40px;
font-family: myfont;
text-align: center;
font-weight: 600; 
}
button{
background-color: #0066ff;
border-radius: 5px;
border-style:none;
color: white;
padding: 15px 30px;
text-align: center;
display: inline-block;
font-size: 16px;
width:200px;
margin: 10px;
font-family:myfont;
font-weight: 500;
}
button:hover {
background-color: #b3d1ff;
color: #0066ff;
}
table  {
margin-top:75px;
margin-left:150px;
}
tr,td  {
padding:2%;
}
a{
margin-top:300px;
margin-left:200px;
}
</style>
</head>
<body>
<div id="banner">
<div id="banner-content">
Projects
</div>
</div>
<h1>hello</h1>
<button name="addNew" type="submit" style="margin-left: 43%;">Add a new Project</button>
			<table>
				<tr>
					<td><button type="button">Project 1</button></td>
					<td><button type="button">Project 2</button></td>
					<td><button type="button">Project 3</button></td>
					<td><button type="button">Project 4</button></td>
				</tr>
				<tr>
					<td><button type="button">Project 5</button></td>
					<td><button type="button">Project 6</button></td>
					<td><button type="button">Project 7</button></td>
					<td><button type="button">Project 8</button></td>
				</tr>
				<tr>
					<td><button type="button">Project 9</button></td>
					<td><button type="button">Project 10</button></td>
					<td><button type="button">Project 11</button></td>
					<td><button type="button">Project 12</button></td>
				</tr>
			</table>
</body>
</html>
	