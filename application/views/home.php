<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>Avertus</title>
	<!-- Bootstrap Assets External-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-4.0.0/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css"/>
	<script src="<?php echo base_url();?>assets/jquery/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="home-section-1">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<img src="<?php echo base_url(); ?>assets/images/svg/Avertus_F69336.svg" width="30" height="30" class="d-inline-block align-top" alt="">
			<a class="navbar-brand" href="#"><b>VERTUS</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarMenu">
				<div class="navbar-nav mx-auto">
					<a class="nav-item nav-link" href="#">C R E A T E</a>
				    <a class="nav-item nav-link" href="#">E V E N T S</a>
				    <a class="nav-item nav-link" href="#">P E O P L E</a>
				    <a class="nav-item nav-link" href="#">A B O U T</a>
				</div>
			</div>
			<div class="nav-login">
				<a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#modal-login"><?php echo $name; ?></a>
			</div>
		</nav>	
		<div id="registerHomeContainer">
			<div id="custom-text-startNow">
				CREATE AND MANAGE EVENTS<br><br>
				Easily create Events<br>
				Manage attendees and Requirements<br>
				Explore available public Events<br>
			</div>
			<div id="custom-btn-startNow" data-toggle="modal" data-target="#modal-startNow">START NOW</div>
		</div>
		<div id="carouselHome" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
		    	<li data-target="#carouselHome" data-slide-to="0" class="active"></li>
		    	<li data-target="#carouselHome" data-slide-to="1"></li>
		    	<li data-target="#carouselHome" data-slide-to="2"></li>
		  	</ol>
		  	<div class="carousel-inner">
		    	<div class="carousel-item active">
		      		<img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/carousel/tower.jpg" alt="Gather your Friends">
		      		<div class="carousel-caption d-none d-md-block">
					    <h6>Gather your Friends</h6>
  					</div>
		    	</div>
			    <div class="carousel-item">
			      	<img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/carousel/cave_wolf.jpg" alt="Plan you Events">
			      	<div class="carousel-caption d-none d-md-block">
					    <h6>Plan you Events</h6>
  					</div>
			    </div>
			    <div class="carousel-item">
			      	<img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/carousel/lady.jpg" alt="Explore other Events">
			      	<div class="carousel-caption d-none d-md-block">
					    <h6>Explore other Events</h6>
  					</div>
			    </div>
		  	</div>
		  	<a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
		   		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		   		<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
			</a>
		</div>
		<div id="footer">
			<i class='fa fa-sun fa-spin'></i>
			Scripts and Design created by Vincent Vanne C. Caballero
			<i class='fa fa-sun fa-spin'></i>
		</div>
	</div>
<!-- Modal Register -->
<div class="modal fade" id="modal-startNow" tabindex="-1" role="dialog" aria-labelledby="modal-startNowLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-startNowLabel">Start creating Events!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form id="registerForm">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="registerFirstName"><img src="<?php echo base_url(); ?>assets/images/svg/open-iconic-master/svg/person.svg" alt="Name"></label>
			  	</div>
			  	<input id="registerFirstName" type="text" class="form-control" placeholder="First Name">
			  	<input id="registerLastName" type="text" class="form-control" placeholder="Last Name">
			</div>
			<br><!--break-->
			<div class="row">
	      		<div class="col-lg-6">
			        <div class="input-group">
			  			<input id="registerUsername" type="text" class="form-control" placeholder="Username">
			  			<div class="valid-feedback">Username looks great!</div>
			  			<div class="invalid-feedback">Username is already taken.</div>
					</div>
				</div>
				<div class="col-lg-6">
			        <div class="input-group">
			        	<div class="input-group-prepend">
			    			<label class="input-group-text" for="registerPassword"><img src="<?php echo base_url(); ?>assets/images/svg/open-iconic-master/svg/key.svg" alt="Password"></label>
			  			</div>
			  			<input id="registerPassword" type="password" class="form-control" placeholder="Password">
			  			<div class="valid-feedback">Password looks great!</div>
			  			<div class="invalid-feedback">Password is already taken.</div>
					</div>
				</div>
			</div>
			<br><!--break-->
			<div class="input-group">
			  	<input id="registerEmail" type="email" class="form-control" placeholder="E-mail">
			  	<div class="valid-feedback">Email looks great!</div>
			  	<div class="invalid-feedback">Email is already taken.</div>
			</div>
			<br><!--break-->
			<div class="input-group">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="registerCountry"><img src="<?php echo base_url(); ?>assets/images/svg/open-iconic-master/svg/globe.svg" alt="Name"></label>
			  </div>
			  <select id="registerCountry" class="custom-select" id="inputGroupSelect01">
			    <option selected>Select Country</option>
			    <option value="Philippines">Philippines</option>
			    <option value="Singapore">Singapore</option>
			    <option value="Thailand">Thailand</option>
			    <option value="Malaysia">Malaysia</option>
			  </select>
			</div>
			<br><!--break-->
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="registerMobile"><img src="<?php echo base_url(); ?>assets/images/svg/open-iconic-master/svg/phone.svg" alt="Mobile"></label>
			  	</div>
			  	<input id="registerMobile" type="text" class="form-control" placeholder="Mobile Number">
			</div>
		</form>
      </div>
      <div class="modal-footer">
      	<div class="prompt-error prompt-startnow"><!--Populated dynamically using Javascript--></div>
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        <button id="registerSubmit" type="button" class="btn btn-warning custom-btn-text-white">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Error -->
<div class="modal fade" id="modal-error-validating" tabindex="-1" role="dialog" aria-labelledby="modal-error-validatingLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-error-validatingLabel">Oops! still validating.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div>
      		<img class="validating" src="http://localhost:8080/Avertus/assets/images/gif/validating.gif"/>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-error-submitting" tabindex="-1" role="dialog" aria-labelledby="modal-error-submittingLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-error-submittingLabel">Oops! There was a problem from the Server.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div>
      		<img class="validating" src="http://localhost:8080/Avertus/assets/images/gif/server_oops.gif"/>
      		<span>Oops! There was a problem from the server or the website has been altered, please refresh the page and try again.</span>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Login -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-login-label">Login to Avertus!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="input-group">
			<div class="input-group-prepend">
			    <label class="input-group-text" for="LoginUsername"><img src="<?php echo base_url(); ?>assets/images/svg/open-iconic-master/svg/person.svg" alt="Username"></label>
			  </div>
			  <input id="LoginUsername" type="text" class="form-control" placeholder="Username">
		</div>
		<br><!--break-->
		<div class="input-group">
			<div class="input-group-prepend">
			    <label class="input-group-text" for="LoginPassword"><img src="<?php echo base_url(); ?>assets/images/svg/open-iconic-master/svg/key.svg" alt="Password"></label>
			  </div>
			  <input id="LoginPassword" type="password" class="form-control" placeholder="Password">
		</div>
      </div>
      <div class="modal-footer">
      	<div class="prompt-error prompt-login">Incorrect Username or Password please try again.</div>
      	<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        <button id="btn-login" type="button" class="btn btn-warning">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- Custom Javascripts 
Author: Vincent Vanne C. Caballero
Date: Febuary 15, 2018
Updated: October 12, 2018
Note: Scripts below are made by the Author.
Validation: Both Client-Side & Server-Side
-->
<script type="text/javascript">
$(document).ready(function(){
	//Client side input validator
	var clientValidating = 0;
	var clientValidation = 0;
	//Codeigniter base_url
	var base_url = "<?php echo base_url();?>";
	//Buttons
	$('#registerSubmit').click(function(){
		$(this).html("<i class='fa fa-circle-notch fa-spin'></i> Submitting");
		ajaxRegisterSubmit();
	});
	$('#custom-btn-startNow').click(function(){
		clearAllGif();
		clearPrompts();
		$('#registerForm')[0].reset();
	});
	$('.nav-login').click(function(){
		clearPrompts();
	});
	$('#btn-login').click(function(){
		$(this).html("<i class='fa fa-circle-notch fa-spin'></i> Logging In");
		ajaxLogin();
	});
	//Typing Timings
	var usernameTimer;
	var passwordTimer;
	var emailTimer;
	var doneTypingInterval = 900;  	
	$('#registerUsername').on('input',function(){
		clientValidating = 1;
		var fieldName = 'username';
		clearGif(fieldName);
		var inputUsername = $(this).val();
		clearTimeout(usernameTimer);
		if (inputUsername){
			usernameTimer = setTimeout(function(){
				loadingGif(fieldName);
				ajaxRegisterCheckInput(fieldName,inputUsername);
			},doneTypingInterval);
		}else{
			clearGif(fieldName);
			clientValidating = 0;
		}
	});
	$('#registerEmail').on('input',function(){
		clientValidating = 1;
		var fieldName = 'email';
		clearGif(fieldName);
		var inputEmail = $(this).val();
		clearTimeout(emailTimer);
		if (inputEmail){
			emailTimer = setTimeout(function(){
				loadingGif(fieldName);
				ajaxRegisterCheckInput(fieldName,inputEmail);
			},doneTypingInterval);
		}else{
			clearGif(fieldName);
			clientValidating = 0;
		}
	});
	$('#registerPassword').on('input',function(){
		clientValidating = 1;
		var fieldName = 'password';
		clearGif(fieldName);
		var inputPassword = $(this).val();
		clearTimeout(passwordTimer);
		if (inputPassword){
			passwordTimer = setTimeout(function(){
				loadingGif(fieldName);
				ajaxRegisterCheckInput(fieldName,inputPassword);
			},doneTypingInterval);
		}else{
			clearGif(fieldName);
			clientValidating = 0;
		}
	});
	//Ajax
	function ajaxRegisterCheckInput(inputField,inputValue){
		$.ajax({
	        type:'POST',
	        url:base_url+'/index.php/Controller_Input/checkInput',
	        data:{"inputField":inputField,"inputValue":inputValue},
	        dataType:"json",
	        success:function(result)
	        {
	        	setTimeout(function(){
	        		clearGif(inputField);
			    	checkGif(inputField);
			    	clientValidating = 0;
			    	clientValidation = 0;
	          	},900);
	        },
	        error:function(result)
	        {
	         	setTimeout(function(){
	        		clearGif(inputField);
			    	invalidPng(inputField);
			    	clientValidating = 0;
			    	clientValidation = 1;
	          	},900);
	        }
	    });
	}
	function ajaxRegisterSubmit(){
		if(clientValidating==1){
			submitReset();
			$("#modal-error-validating").modal("show");
			setTimeout(function(){
				$("#modal-error-validating").modal("hide");
			},3000);
		}else if(clientValidation==1){
			submitReset();
			alert("Temporary Error Msg: There was an error in the Validation");
		}else if(registerValidate()){
			$.ajax({
		        type:'POST',
		        url:base_url+'/index.php/Controller_Submit/register',
		        data:{'firstName':$('#registerFirstName').val(),'lastName':$('#registerLastName').val(),'username':$('#registerUsername').val(),'password':$('#registerPassword').val(),'email':$('#registerEmail').val(),'country':$('#registerCountry').val(),'mobile':$('#registerMobile').val()},
		        dataType:"json",
		        success:function(result)
		        {
		        	setTimeout(function(){
			        	$("#registerSubmit").empty();
						$("#registerSubmit").text("Submitted");
					},1000);
		        },
		        error:function(result)
		        {
		         	$("#modal-error-submitting").modal("show");
		         	setTimeout(function(){
						$("#modal-error-submitting").modal("hide");
					},4000);
		        }
		    });
		}else{
			submitReset();
		}
	}
	function ajaxLogin(){
		$.ajax({
	        type:'POST',
	        url:base_url+'/index.php/Controller_Submit/login',
	        data:{'username':$('#LoginUsername').val(),'password':$('#LoginPassword').val()},
	        dataType:"json",
	        success:function(result)
	        {
	        	//empty
	        },
	        error:function(result)
	        {
	        	loginReset();
	        	$(".prompt-login").show();
	        }
	    });
	}
	//Functions
	function registerValidate(){
		var booleanValidation = true;
		var errorStringTemp = "";
		if(($('#registerFirstName').val()).trim()==""){
			errorStringTemp += " First Name|";
			booleanValidation = false;
		}
		if(($('#registerUsername').val()).trim()==""){
			errorStringTemp += " Username|";
			booleanValidation = false;
		}
		if(($('#registerPassword').val()).trim()==""){
			errorStringTemp += " Password|";
			booleanValidation = false;
		}
		if(($('#registerEmail').val()).trim()==""){
			errorStringTemp += " Email|";
			booleanValidation = false;
		}
		if(($('#registerCountry').val()).trim()==""){
			errorStringTemp += " Country|";
			booleanValidation = false;
		}
		if(($('#registerMobile').val()).trim()==""){
			errorStringTemp += " Mobile|";
			booleanValidation = false;
		}
		if(!booleanValidation){
			errorStringTemp = errorStringTemp.split("|");
			var length = errorStringTemp.length;
			for(var ctr = 0;ctr<length;ctr++){
				if(ctr!=length-3){
					errorStringTemp[ctr] += ",";
				}else{
					errorStringTemp[ctr] += " &";
					break;
				}
			}
			var errorStringFinal = "";
			for(var ctr = 0;ctr<length;ctr++){
				errorStringFinal += errorStringTemp[ctr];
			}
			$('.prompt-startnow').text(errorStringFinal+" Needs to be populated.");
			$('.prompt-startnow').show();
		}
		return booleanValidation;
	}
	function clearAllGif(){
		$('#registerUsername').removeClass('loading');
		$('#registerUsername').removeClass('check');
		$('#registerUsername').removeClass('invalid');
		$('#registerUsername').removeClass('is-valid');
		$('#registerUsername').removeClass('is-invalid');
		$('#registerEmail').removeClass('loading');
		$('#registerEmail').removeClass('check');
		$('#registerEmail').removeClass('invalid');
		$('#registerEmail').removeClass('is-valid');
		$('#registerEmail').removeClass('is-invalid');
		$('#registerPassword').removeClass('loading');
		$('#registerPassword').removeClass('check');
		$('#registerPassword').removeClass('invalid');
		$('#registerPassword').removeClass('is-valid');
		$('#registerPassword').removeClass('is-invalid');
	}
	function clearGif(Field){
		if(Field=='username'){
			$('#registerUsername').removeClass('loading');
			$('#registerUsername').removeClass('check');
			$('#registerUsername').removeClass('invalid');
			$('#registerUsername').removeClass('is-valid');
			$('#registerUsername').removeClass('is-invalid');
		}
		else if(Field=='email'){
			$('#registerEmail').removeClass('loading');
			$('#registerEmail').removeClass('check');
			$('#registerEmail').removeClass('invalid');
			$('#registerEmail').removeClass('is-valid');
			$('#registerEmail').removeClass('is-invalid');
		}else if(Field=='password'){
			$('#registerPassword').removeClass('loading');
			$('#registerPassword').removeClass('check');
			$('#registerPassword').removeClass('invalid');
			$('#registerPassword').removeClass('is-valid');
			$('#registerPassword').removeClass('is-invalid');
		}
	}
	function checkGif(Field){
		if(Field=='username'){
			$('#registerUsername').addClass('check');
			$('#registerUsername').addClass('is-valid');
		}else if(Field=='email'){
			$('#registerEmail').addClass('check');
			$('#registerEmail').addClass('is-valid');
		}else if(Field=='password'){
			$('#registerPassword').addClass('check');
			$('#registerPassword').addClass('is-valid');
		}
	}
	function loadingGif(Field){
		if(Field=='username'){
			$('#registerUsername').addClass('loading');
		}else if(Field=='email'){
			$('#registerEmail').addClass('loading');
		}else if(Field=='password'){
			$('#registerPassword').addClass('loading');
		}
	}
	function invalidPng(Field){
		if(Field=='username'){
			$('#registerUsername').addClass('invalid');
			$('#registerUsername').addClass('is-invalid');
		}else if(Field=='email'){
			$('#registerEmail').addClass('invalid');
			$('#registerEmail').addClass('is-invalid');
		}else if(Field=='password'){
			$('#registerPassword').addClass('invalid');
			$('#registerPassword').addClass('is-invalid');
		}
	}
	function submitReset(){
		$("#registerSubmit").empty();
		$("#registerSubmit").text("Submit");
	}
	function loginReset(){
		$("#btn-login").empty();
		$("#btn-login").text("Login");
	}
	function clearPrompts(){
		$('.prompt-login').hide();
		$('.prompt-startnow').empty();
	}
});
</script>
<!-- JavaScripts External-->
	<script src="<?php echo base_url();?>assets/fontawesome-free-5.0.6/on-server/js/fontawesome-all.min.js"></script>
	<script src="<?php echo base_url();?>assets/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>