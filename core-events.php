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
margin-left: 25%;
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
</head>
<body>
<div id="banner">
<div id="banner-content">
Events
</div>
</div>
<div id="eventlist">
<ol>
  <li>Event Name:   Core Committee Selections</li>
  <li>EVENT 2</li>
  <li>EVENT 3</li>
  <li>EVENT 4</li>
  <li>EVENT 5</li>
  <li>EVENT 6</li>
  <li>EVENT 7</li>
</ol>  
</div>
<button type="submit" OnClick="window.location.href='createevent.html'">Create New Event</button>
</body>
</html>