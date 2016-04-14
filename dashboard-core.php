<!DOCTYPE html>
<html>
	<head>
		<title>
			Dashboard | Club Name
		</title>
		
		<style>
			@font-face{
						font-family:Font;
						src:url(Roboto-Regular.ttf);
			}
			body	{
						margin:0px;
					}
			#header {
					    font-family:Font;
					    background-color:#0066ff;
					    color:white;
					    text-align:center;
					    height:60px;
					    margin:0px;
					    padding-top:20px;
					}
			#meetings{
						font-family:Font;
					    background-color:#eeeeee;
					    color:black;
					    text-align:center;
					    height:80px;
					    margin:0px;
					    padding-top:20px;
					}
			#todo {
						padding:1%;
					    font-family:Font;
					    line-height:30px;
					    background-color:#eeeeee;
					    height:300px;
					    width:25%;
					    float:left; 
				}
			#section {
			   			font-family:Font;
			   			background-color:#b3d1ff;
			   			width:71%;
			   			height:300px; 
			    		float:left;
			    		padding:1%;
					}
			#footer {
					   background-color:#0066ff;
					   color:white;
					   clear:both;
					   text-align:center;
					   padding:5px; 
			}
			h3		{
						margin:0px;
						text-align:center;
						color:#0066ff;
					}
			input[type=checkbox]	{	margin-top:5%;
									}
			input[type=image]	{
									display:block;
									margin-top:5%;
									margin-left:auto;
									margin-right:auto;
									height:10%;
									width:10%;
								}
			button {
					    background-color: #0066ff;
					    border-radius: 5px;
					    border-style:none;
					    color: white;
					    padding: 15px 32px;
					    text-align: center;
					    display: inline-block;
					    font-size: 16px;
					    width:200px;
					 }
			button:hover {
						    background-color: #b3d1ff;
						    color: #0066ff;
						    border:1px solid #0066ff;
						}
			table  {
						margin-top:1%;
						margin-left: auto;
						margin-right: auto;

					}

			tr,td  {
						padding:3%;
					}


		</style>
	</head>

	<body>

		<body>
			<h1 id="header">Students Club Management System</h1>

			<div id="meetings">
			<h3>Meeting Updates</h3><br>
			Meeting at 7:30pm in Foodys.<br>
			</div>

			<div id="footer"></div>

			<div id="todo">

			 <h3>Upcoming Tasks</h3>
			 <input type="checkbox" id="checkbox1">Draft Permission Letter for DSW<br>
			 <input type="checkbox" id="checkbox2">Poster design for WebDev Workshop<br>
			 <input type="checkbox" id="checkbox3">Documentation for WebDev Workshop<br>
			 <input type="image" src="add.png" onmouseover="this.src='addhover.png'" onmouseout="this.src='add.png'">
			</div>

			<div id="section">
			<h3>Core Activities</h3>
			<table>
				<tr>
					<td><button type="button">Events</button></td>
					<td><button type="button">Projects</button></td>
					<td><button type="button">Posters</button></td>
				</tr>
				<tr>
					<td><button type="button">Free Slots</button></td>
					<td><button type="button">Finance</button></td>
					<td><button type="button">Cocurricular</button></td>
				</tr>

			</table>
			</div>

			<div id="footer"></div>

</body>

	</body>
</html>