<!DOCTYPE html>
<html lang="">
	<head>
  		<meta charset="utf-8">
		<title>Messenger Test</title>
		<meta name="description" content="" />
  		<meta name="keywords" content="" />
		<meta name="robots" content="" />
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- <link rel="stylesheet" href="assets/vendor/jasny.bootstrap/css/jasny-bootstrap.min.css"> -->
		
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		
	</head>
	<body>
		<script>

		    window.fbAsyncInit = function() {
		      FB.init({
		        appId: "420532514970894",
		        xfbml: true,
		        version: "v2.9"
		      });
		
		    };
		
		    (function(d, s, id){
		       var js, fjs = d.getElementsByTagName(s)[0];
		       if (d.getElementById(id)) { return; }
		       js = d.createElement(s); js.id = id;
		       js.src = "//connect.facebook.net/en_US/sdk.js";
		       fjs.parentNode.insertBefore(js, fjs);
		    }(document, 'script', 'facebook-jssdk'));
		
		</script>
		
		<div class="container">
	      <div class="header clearfix">
	        <h3 class="text-muted">Messenger Test</h3>
	      </div>
	      
	      <div>
		    <!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#fb">
			  <img src="assets/images/facebook-messenger.svg" alt="" width="20" height="20" scale="0">
			  <span>Message Us</span>
			</button>
	      </div>
		  
		  <div id="loader" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="loader" data-backdrop="static" data-keyboard="false">
			  <div class="modal-dialog modal-sm" role="document">
			    <div class="modal-content">
			      <div class="modal-body">
				      <div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						    <span class="sr-only">Please wait...</span>
						    Please wait...
						  </div>
					  </div>
			      </div>
			    </div>
			  </div>
	      </div>
	      
	      <div id="fb" class="modal fade" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">AustraliaWOW!</h4>
			      </div>
			      <div class="modal-body">
			      	<p>
				      	<strong>Hi!</strong><br/>
					  	You are about to activate our Facebook Messenger news bot. Once subscribed, the bot will send you a
					  	digest of trending stories once a day. You can also customize the types of stories it sends you.
					  	<br/><br/>
					  	Click on the button below to subscribe and wait for a new Facebook message from the AW Messenger
					  	news bot.
					  	<br/><br/>
					  	Thanks,<br/>
					  	AW Team

			      	</p> 
			      	<div class="text-center">
				      	<div class="fb-send-to-messenger" 
						  messenger_app_id="420532514970894" 
						  page_id="227144967366275" 
						  data-ref="" 
						  color="blue" 
						  size="standard">
						</div>  
			      	</div>  
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
		  </div><!-- /.modal -->
	
	      <footer class="footer">
	        <p>&copy; 2017 Company, Inc.</p>
	      </footer>
	
	    </div> <!-- /container -->

		<!-- SCRIPTS -->
		<script
		  src="https://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		  crossorigin="anonymous"></script>
		<!-- <script src="assets/vendor/jasny.bootstrap/js/jasny-bootstrap.min.js"></script> -->
		
		
		<script src="assets/js/detectmobilebrowser.js"></script>
		<script src="assets/js/script.js?v=<?php echo time(); ?>"></script>
		
	</body>
</html>
<!-- hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4= -->