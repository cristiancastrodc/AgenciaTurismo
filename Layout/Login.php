 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Login</title>
 	<style>
 		form{
			width: 250px;
		    margin: auto;
		    margin-top: 15%;
		    border: 1px solid #ccc;
		    border-radius: 5px;
		    padding: 1em;
 		}
 		form input{
 			width: 100%;
		    margin: 1em 0;
		    border: 1px solid #ccc;
		    border-radius: 3px;
		    padding: .8em;
		    box-sizing: border-box;
 		}
 		form h4{
 			color: orange;
 			font-size: 1.5em;
 			text-align:center;
 			margin: 0
 		}
 		form p{
 			text-align: center;
 			margin: 0;
 			padding: 0;
 		}
 		form button{
 			width: 70%;
 			margin: auto;
 			padding: .5em;
 			background-color: orange;
 			color: white;
 			border: 1px solid #C37E00;
 			border-radius: 5px;
 		}
 	</style>
 </head>
 <body>
     <form action="../View/Admin/dashboard.php" method="post">
            <h4><img src="http://happygringotours.com/wp-content/uploads/gringo1.png" alt=""><br>Acceso al Sistema</h4>
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Password" name="password">
            <p><button>Ingresar</button></p>
 	</form>
 </body>
 </html>
