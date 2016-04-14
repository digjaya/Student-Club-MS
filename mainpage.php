<!DOCTYPE html>
<html >
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
justify-content: center;
align-items: center;
font-size: 16px;
}
form { 
background: white; 
width: 35%; 
box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7); 
font-family: myfont;  
position: relative; 
color: #333333;
border-radius: 50px;
margin-right: 40px;
margin-left: 40px;
margin-top: 50px;
}
form h1 { 
background: #0066ff; 
padding-top: 10px;
padding-bottom: 40px; 
color: white; 
font-size: 2em;
font-weight: 600; 
height: 20px;
text-align: center;
margin-top: 0;
border-top-left-radius: 50px;
border-top-right-radius: 50px;
}
form label {
margin-left: 20px;
display: inline-block;
margin-top: 10px;
margin-bottom: 5px;
position: relative;
}
form input 
{
display: block; 
width: 78%;  
margin-left: 20px;  
padding: 5px 10px;  
font-size: 1em;  
border-radius: 3px;  
outline: none; 
border: 1px solid #ccc;
}
form button { 
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
font-size: 35px;
font-family: myfont;
text-align: center;
font-weight: 600; 
}
</style>
</head>
<body>
<div id="banner">
<div id="banner-content">
Students Club Management System
</div>
</div>
<form>
  <h1>Sign Up</h1>
  <label>Register Number</label>
  <input type="text" name="regno" required/>
  <label>Name</label>
  <input type="text" name="name" required/>
  <label>Phone Number</label>
  <input type="tel" name="number" required/>
  <label>Email Id</label>
  <input type="email" name="email" required/>
  <label>Password</label>
  <input type="password" name="password" required/>
  <button type="submit">Sign Up</button>
</form>
<form>
  <h1>Log In</h1>
  <label>Username ( Use your Register Number )</label>
  <input type="text" name="username" required/>
  <label>Password</label>
  <input type="password" name="password" required/>
  <button type="submit">Log In</button>
</form>
</body>
</html>
