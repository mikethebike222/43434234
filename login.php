<?php
include "includes/db.php";

      
?>
        

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        

        <title>Registration</title>
		
        <style>
            #registerbttn{
                margin-left: 100px;
                margin-top:10px;
            }
            #feedback{
                opacity: 0;
				position: fixed;
				bottom: 0;
            }
        </style>
		</head>
		<body>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			
		<div class="container">
      
        <h2 class="col-12 ml-4 mt-2 mb-2">Register for Mr M's Premium Content</h2>
        
        <div class="col-12">	
            <div class="row">
                <div class="col-12 border ml-4 mt-2 mb-2 text-center p-4">
                    Upgrade your <u>life</u> by accessing these premium educational content including a calculator that will tell you how many years you have been alive!!
                </div>
            </div>
        </div>

        <div class="container ml-4 mt-2 text-center">
            <div class="row">
                		<div class="input-group p-2">
                        <span class="input-group-text">username</span>
                        <input name="username" type="text" class="form-control" id="username" placeholder="morrisv">
                    </div>
                    <div class="input-group p-2">
                        <span class="input-group-text">Password</span>
                        <input type="password" class="form-control" id="password" placeholder="123456" name="password">
                    
                    <div class="input-group p-2">
                        <span class="input-group-text">Email</span>
                        <input type="email" class="form-control" id="email" placeholder="morrisv@harrisoncsd.org" name="email">
                    </div>
                    <div class="input-group p-2">
                        <span class="input-group-text">age</span>
                        <input type="number" class="form-control" id="age" placeholder="90" name="age">
                    </div>
                </div>
				
            </div>
          </div>
        <input type="button" value="button" id="update" class="btn btn-lg btn-primary">
        <div id="feedback" class="border ml-4 mt-2 mb-2 p-2 bg-danger"></div>
		</div>
<script> 
	
			$('#update').click(function() {
    let username = $('#username').val();
    let password = $('#password').val();
    let email = $('#email').val();
    let age = $('#age').val();

    $.post('login-controller.php', {username: username, password: password, email: email, age: age}, function(data, status) {
        alert("Data: " + data);
        if (data === 'success') {
            console.log("Broski is authorized to login");

            window.location.href = 'dashboard.php';
        } else {
            console.log("Broski is not authorized to login");
            $('#feedback').text('Invalid age get older').show();
        }
    });
});


	</script>

     

    </body>

</html>