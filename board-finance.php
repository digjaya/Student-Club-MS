<!DOCTYPE html>
<html >
<head>
<style>
@font-face{
font-family: myfont;
src: url(fonts/RobotoSlab-Regular.ttf);         
}
body {
background: #b3d1ff;  
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
div#eventlist {
font-family: myfont;
padding: 70px;
margin: 70px;
font-size: 25px;
margin-left: 33%;
}
li input
{
    position: absolute;
    margin-left: 40px;
    margin-top: 10px;
	width: 10%;
	height: 15px;
}
button { 
position: relative; 
margin-top: -20px; 
left: 50%; 
transform: translate(-60%,-40%);
font-family: myfont; 
color: white;
background: #0066ff; 
outline: none;
border: none; 
padding: 5px 15px; 
font-size: 1.3em; 
font-weight: 400; 
border-radius: 3px;
box-shadow: 0px 0px 10px rgba(51, 51, 51, 0.4); 
}
</style>
<body>
<div id="banner">
<div id="banner-content">
Finance
</div>
</div>
<div id="eventlist">
<ol>
  <li>Bill Event Amount <input type="checkbox"></li>
  <li>Bill Event Amount <input type="checkbox"></li>
  <li>Bill Event Amount <input type="checkbox"></li>
  <li>Bill Event Amount<input type="checkbox"></li>
</ol>  
</div>
<button type="submit">Approve Selected</button>
</body>
</html>