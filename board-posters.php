<!DOCTYPE html>
<html>
<head>
<style>
@font-face{
font-family: myfont;
src: url(fonts/RobotoSlab-Regular.ttf);         
}
html, body {  
border: 0; 
padding: 0; 
margin: 0; 
height: 100%;
}
body {
background: #b3d1ff;  
display: flex;  
align-items: center;
font-size: 16px;
}
form1 { 
height:300px;
float:left;
background: white; 
width: 35%; 
box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7); 
font-family: myfont;  
position: relative;
color: #333333;
margin-right: 40px;
margin-left: 40px;
margin-top: 50px;
}
form1 label{
margin-left: 20px;
display: inline-block;
margin-top: 20px;
margin-bottom: 5px;
position: relative;
display: inline-block;
}
form1 input{
width: 78%;  
margin-left: 20px;  
padding: 5px 10px;  
font-size: 1em;  
border-radius: 3px;  
outline: none; 
border: 1px solid #ccc;
}
form1 button { 
position: relative; 
margin-top: 30px; 
margin-bottom: 30px;
left: 50%; 
transform: translate(-50%, 0);
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
font-weight:600;
}
form2{
margin-left:40px;
overflow-y: scroll;
float:right;
height:550px;
background: white;
width: 50%; 
box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7); 
font-family: myfont;  
position: relative;
color: #333333;
margin-right:50px;
margin-top: 50px;
}

form2 label {
text-align:center;
margin-left: 20px;
display: inline-block;
margin-top: 20px;
margin-bottom: 5px;
position: relative;
padding-left:200px;
}
div#imgview{
margin-left:50px;
margin-top:50px;
text-align:center;
}
img{
text-align:center;
float:left;
padding-left:200px;
width:250px;
height:300px;
padding-bottom:100px;
}
img:hover {
			width:350px;
            height: 400px;
        }
form2 button { 
position: relative; 
margin-top: 30px; 
margin-bottom: 30px;
left:15%;
transform: translate(-50%, 0);
font-family: myfont; 
color: white;
background: #0066ff;
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
Posters
</div>
</div>
<form1>
  <label><b>Event name</b></label><br>
  <input type="text" name="event" width="20px" required/><br><br>
  <label><b>Upload</b></label>
  <input type="file" accept="image/*" name="fileUploader" required/><br><br>
  <button type="submit">Submit</button>
  </form1>
  <form2>
  <div class = "imgview">
  <label name="designer"><b><i>Event name</i></b></label><br>
  <img src="fnf.jpg" alt="Photo portrait"><br>
  <button type="submit">Delete</button>
  <label name="designer"><b><i>Event name</i></b></label><br>
  <img src="fnf.jpg" alt="Photo portrait"><br>
  <button type="submit">Delete</button>
  <label name="designer"><b><i>Event name</i></b></label><br>
  <img src="fnf.jpg" alt="Photo portrait"><br>
  <button type="submit">Delete</button>
  <label name="designer"><b><i>Event name</i></b></label><br>
  <img src="fnf.jpg" alt="Photo portrait"><br>
  <button type="submit">Delete</button>
  
  </div>
  
  </form2>
</body>
</html>

