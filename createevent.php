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
margin-right: 40px;
margin-left: 40px;
margin-top: 50px;
}
form label {
margin-left: 20px;
display: inline-block;
margin-top: 10px;
margin-bottom: 5px;
position: relative;
display: inline-block;
font-weight: 600;
}
form input 
{
width: 78%;  
margin-left: 20px;  
padding: 5px 10px;  
font-size: 1em;  
border-radius: 3px;  
outline: none; 
border: 1px solid #ccc;
}
form input[type='time']{
width: 20%;
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
textarea{
margin-left: 20px;
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
</style>
</head>
<body>
<div id="banner">
<div id="banner-content">
Events
</div>
</div>
<form>
  <label>Event Name</label><br>
  <input type="text" name="eventname" width="20px" required/>
  <label>Event Coordinator</label><br>
  <input type="text" name="coordinator" required/><br>
  <label>Date</label><br>
  <input type="date" name="date"><br>
  <label>Venue</label><br>
  <input type="text" name="venue" required/><br>
  <label>Time</label><br>
  <label>From</label>
  <input type="time" name="from" required/>
  <label>To</label>
  <input type="time" name="to" required/><br>
  <label>Event Description</label>
  <textarea name="eventDescription" rows="4" cols="54"  required></textarea>  
  <button type="submit">Submit</button>
  </form>
</body>
</html>
