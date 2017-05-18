<!DOCTYPE html>
<html lang="">
	<head>
  		<meta charset="utf-8">
		<title>Website Quote</title>
		<meta name="description" content="" />
  		<meta name="keywords" content="" />
		<meta name="robots" content="" />
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- <link rel="stylesheet" href="assets/vendor/jasny.bootstrap/css/jasny-bootstrap.min.css"> -->
		
		<link rel="stylesheet" href="assets/vendor/jquery.fileupload/css/jquery.fileupload.css">
		<link rel="stylesheet" href="assets/vendor/jquery.fileupload/css/jquery.fileupload-ui.css">
		<!-- CSS adjustments for browsers with JavaScript disabled -->
		<noscript><link rel="stylesheet" href="assets/vendor/jquery.fileupload/css/jquery.fileupload-noscript.css"></noscript>
		<noscript><link rel="stylesheet" href="assets/vendor/jquery.fileupload/css/jquery.fileupload-ui-noscript.css"></noscript>
		
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		
	</head>
	<body>
		
		<div class="container">
	      <div class="header clearfix">
	        <h3 class="text-muted">Website Design Questionnaire</h3>
	        <p>
		        Looking for a website to be designed? <br/><br/>
		        This is our form we use to get detailed instructions from people like yourself that want a website they love, in the quickest timeframe.<br/><br/>
		        We’re going to ask you a series of questions on what you like and what you don’t like, and we’ll use these answers you give, to better let me know what style and design we should begin to work with for you :)<br/><br/>
		        Submit the form at the end, and Nate or Eva instantly get it and will get in touch with you shortly after that!
	        </p>
	      </div>
	      
	      <div>
	      	<!--
<p>
	            <button data-toggle="progressbar" data-target="#myProgressbar" data-value="reset" data-level="info" class="btn btn-default">Reset</button>
	            <button data-toggle="progressbar" data-target="#myProgressbar" data-value="0" class="btn btn-default">0%</button>
	            <button data-toggle="progressbar" data-target="#myProgressbar" data-value="10" class="btn btn-default">10%</button>
	            <button data-toggle="progressbar" data-target="#myProgressbar" data-value="30" class="btn btn-default">30%</button>
	            <button data-toggle="progressbar" data-target="#myProgressbar" data-value="75" class="btn btn-default">75%</button>
	            <button data-toggle="progressbar" data-target="#myProgressbar" data-value="100" class="btn btn-default">100%</button>
	            <button data-toggle="progressbar" data-target="#myProgressbar" data-value="finish" data-level="success" class="btn btn-default">Finish</button>
	        </p>
-->
	          <p id="step-word">Step 1 of 13</p>
		      <div id="myProgressbar" class="progress">
			    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
			    	<span>0%</span>
			    </div>
			  </div>
	      </div>
	      
	      <form id="quoteForm" action="" method="post" enctype="multipart/form-data">
	      
	      	<div id="step-1" class="step">
			  <div class="form-group">
			    <label for="business_name">*Business Name</label>
			      <input type="text" class="form-control required maonster-alphanum" name="business_name" id="business_name" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="business_desc">*Describe Your Company (what is it's main business?)</label>
			      <textarea rows="3" class="form-control required" name="business_desc" id="business_desc" placeholder=""></textarea>
			  </div>
			  <div class="form-group">
			    <label for="business_add">*Business Address</label>
			      <input type="text" class="form-control required maonster-address" name="business_add" id="business_add" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="business_url">*Company Website URL</label>
			    <input type="text" class="form-control required maonster-url" name="business_url" id="business_url" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="business_email">*What Is Your Main 'info@yourcompany.com' Email Address You Want On Your Site?</label>
			    <input type="email" class="form-control required maonster-email" name="business_email" id="business_email" placeholder="">
			  </div>
			  <div class="form-group">
			    <button type="button" class="next disabled btn btn-default">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-2" class="hidden step">
	      
			  <div class="form-group">
			    <label for="contact_fname">*First Name</label>
			    <input type="text" class="form-control required maonster-name" name="contact_fname" id="contact_fname" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="contact_lname">*Last Name</label>
			    <input type="text" class="form-control required maonster-name" name="contact_lname" id="contact_lname" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="contact_email">*Email Address</label>
			    <input type="email" class="form-control required maonster-email" name="contact_email" id="contact_email" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="phone">*Your Phone Number</label>
			    <input type="text" class="form-control required maonster-number" name="company_phone" id="company_phone" placeholder="">
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next disabled btn btn-default">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-3" class="hidden step">
	      
			  <div class="form-group">
			    <label for="fb_url">*Yours Or Company's Facebook Page URL (facebook.com/yourpage)</label>
			    <input type="text" class="form-control required maonster-social-url" data-social="facebook" name="fb_url" id="fb_url" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="tt_url">Yours or Company's Twitter Profile URL (twitter.com/yourname)</label>
			    <input type="text" class="form-control maonster-social-url"  data-social="twitter" name="tt_url" id="tt_url" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="li_url">Yours or Company's LinkedIN Personal or Company URL</label>
			    <input type="text" class="form-control maonster-url" name="li_url" id="li_url" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="ig_url">Yours or Company's Instagram URL (instagram.com/yourname)</label>
			    <input type="text" class="form-control maonster-social-url" data-social="instagram" name="ig_url" id="ig_url" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="sc_url">Yours or Company's Snapchat URL (snapchat.com/add/yourname)</label>
			    <input type="text" class="form-control maonster-social-url" data-social="snapchat" name="sc_url" id="sc_url" placeholder="">
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next disabled btn btn-default">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-4" class="hidden step">
	      
			  <div class="form-group">
			  	<input class="required maonster-checkbox" data-checkbox=".site_pages" type="hidden" value="" id="site_pages" />
			    <label>*What Essential Pages Do You Need? (check all that apply)</label>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_pages" type="checkbox" value="Landing Page Only">
				  		Landing Page Only 
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_pages" type="checkbox" value="Blog">
				  		Blog
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_pages" type="checkbox" value="About Us">
				  		About Us 
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_pages" type="checkbox" value="Services">
				  		Services
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_pages" type="checkbox" value="Contact Us">
				  		Contact Us
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_pages" type="checkbox" value="Vlog / Magazine Style Site">
				  		Vlog / Magazine Style Site
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_pages" type="checkbox" value="FAQ">
				  		FAQ
				  	</label>
				  </div>
			  </div>
			  
			  <div class="form-group">
			  	<input class="required maonster-checkbox" data-checkbox=".site_features" type="hidden" value="" id="site_features" />
			    <label>*What Other Features Would You Like On Your Site? (tick all that apply)</label>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Newsletter Signup">
				  		Newsletter Signup 
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Full CRM Integration (Active Campaign etc)">
				  		Full CRM Integration (Active Campaign etc)
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Testimonials">
				  		Testimonials 
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Embedded Video">
				  		Embedded Video
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Scheduling / Booking">
				  		Scheduling / Booking
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Downloads (PDF, Whitepaper etc)">
				  		Downloads (PDF, Whitepaper etc)
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Image Gallery">
				  		Image Gallery
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Map">
				  		Map
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Site Search">
				  		Site Search
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Upcoming Events">
				  		Upcoming Events
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Portfolio">
				  		Portfolio
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Online Payment - Products">
				  		Online Payment - Products
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Online Payment - Services">
				  		Online Payment - Services
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="User-Generated Content (Users Can Upload)">
				  		User-Generated Content (Users Can Upload)
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Membership Signup and Login">
				  		Membership Signup and Login
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Forum">
				  		Forum
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="RSS Feed">
				  		RSS Feed
				  	</label>
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input class="site_features" type="checkbox" value="Custom Database">
				  		Custom Database
				  	</label>
				  </div>
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next disabled btn btn-default">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-5" class="hidden step">
			  <h2>Web Content Time!</h2>
			  <p>
				  Often, companies and individuals will have a “style guide” or “branding guide” which outlines stuff like:
			  </p>
			  <p>
			  	* Are there corporate colours, pattern, fonts, layout, style, etc. that should be incorporated?<br>
			  	* Colour (hex codes etc)<br>* Font names, styles and heights etc<br>
			  	* Style (modern, professional, vintage, quirky etc)
			  </p>
			  <p>
			  	In the next few questions, we’ll get you thinking about this and give us some answers (or upload your own style guide to us!)
			  </p>
			  <div class="form-group">
			    <label for="style_guide">*In Relation To The Above, What's Your Style Guide?</label>
			    <textarea row="3" class="form-control required" name="style_guide" id="style_guide" placeholder=""></textarea>
			  </div>
			  <div class="form-group">
			    <label for="content_ready">*Do You Have All Your Website Written Content and Images/Photographs Already Prepared? (Please note! All content is needed before we can begin your site)</label>
			    <select class="required form-control" name="content_ready" id="content_ready">
				  <option value="Yes">Yes</option>
				  <option value="No">No</option>
				</select>
			  </div>
			  <div class="form-group">
			    <label for="gdoc_url">*Now We Need The Content For EACH PAGE On Your Site (put on a google doc and put URL here)</label>
			    <input type="text" class="form-control required maonster-url" name="gdoc_url" id="gdoc_url" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="branding_doc">...OR If You Have A Branding Guide Or Spec Document, Upload It Here!</label>
				<div class="row fileupload-buttonbar">
		            <div class="col-lg-12">
		                <!-- The fileinput-button span is used to style the file input field as button -->
		                <span class="btn btn-success fileinput-button">
		                    <span>BROWSE</span>
		                    <input id="branding_doc" class="maonster-doc" type="file" name="branding_doc[]">
		                </span>
		                <!-- The global file processing state -->
		                <span class="fileupload-process"></span>
		            </div>
		            <!-- The global progress state -->
		            <div class="col-lg-5 fileupload-progress fade">
		                <!-- The global progress bar -->
		                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
		                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
		                </div>
		                <!-- The extended global progress state -->
		                <div class="progress-extended">&nbsp;</div>
		            </div>
		        </div>
		        <!-- The table listing the files available for upload/download -->
		        <table role="presentation" class="table table-striped"><tbody id="branding_doc_container"></tbody></table>
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next disabled btn btn-default">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-6" class="hidden step">
	      	
			  <div class="form-group">
			    <label for="company_logo">*Your Logo File (.ai, .jpg, .png, .eps)</label>
			    <div class="row fileupload-buttonbar">
		            <div class="col-lg-12">
		                <!-- The fileinput-button span is used to style the file input field as button -->
		                <span class="btn btn-success fileinput-button">
		                    <span>BROWSE</span>
		                    <input id="company_logo" class="required maonster-image" type="file" name="company_logo[]">
		                </span>
		                <!-- The global file processing state -->
		                <span class="fileupload-process"></span>
		            </div>
		            <!-- The global progress state -->
		            <div class="col-lg-5 fileupload-progress fade">
		                <!-- The global progress bar -->
		                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
		                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
		                </div>
		                <!-- The extended global progress state -->
		                <div class="progress-extended">&nbsp;</div>
		            </div>
		        </div>
		        <!-- The table listing the files available for upload/download -->
		        <table role="presentation" class="table table-striped"><tbody id="company_logo_container"></tbody></table>
			  </div>
			  <div class="form-group">
			    <label for="graphic_1">*Graphics File 1 (can be main image, a main photo of you, your main product etc - we'll use this on your HOME page)</label>
			    <div class="row fileupload-buttonbar">
		            <div class="col-lg-12">
		                <!-- The fileinput-button span is used to style the file input field as button -->
		                <span class="btn btn-success fileinput-button">
		                    <span>BROWSE</span>
		                    <input id="graphic_1" class="required maonster-image" type="file" name="graphic_1[]">
		                </span>
		                <!-- The global file processing state -->
		                <span class="fileupload-process"></span>
		            </div>
		            <!-- The global progress state -->
		            <div class="col-lg-5 fileupload-progress fade">
		                <!-- The global progress bar -->
		                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
		                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
		                </div>
		                <!-- The extended global progress state -->
		                <div class="progress-extended">&nbsp;</div>
		            </div>
		        </div>
		        <!-- The table listing the files available for upload/download -->
		        <table role="presentation" class="table table-striped"><tbody id="graphic_1_container"></tbody></table>
			  </div>
			  <div class="form-group">
			    <label for="graphic_2">*Graphics File 2 (product image, photo of your office or business etc)</label>
			    <div class="row fileupload-buttonbar">
		            <div class="col-lg-12">
		                <!-- The fileinput-button span is used to style the file input field as button -->
		                <span class="btn btn-success fileinput-button">
		                    <span>BROWSE</span>
		                    <input id="graphic_2" class="required maonster-image" type="file" name="graphic_2[]">
		                </span>
		                <!-- The global file processing state -->
		                <span class="fileupload-process"></span>
		            </div>
		            <!-- The global progress state -->
		            <div class="col-lg-5 fileupload-progress fade">
		                <!-- The global progress bar -->
		                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
		                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
		                </div>
		                <!-- The extended global progress state -->
		                <div class="progress-extended">&nbsp;</div>
		            </div>
		        </div>
		        <!-- The table listing the files available for upload/download -->
		        <table role="presentation" class="table table-striped"><tbody id="graphic_2_container"></tbody></table>
			  </div>
			  
			  <div class="form-group">
			    <label for="graphics">Upload Additional Graphics (any image you want on the site)</label>
			    <div class="row fileupload-buttonbar">
		            <div class="col-lg-12">
		                <!-- The fileinput-button span is used to style the file input field as button -->
		                <!--
<button type="submit" class="btn btn-primary start">
		                    <i class="glyphicon glyphicon-upload"></i>
		                    <span>Start upload</span>
		                </button>
		                <button type="reset" class="btn btn-warning cancel">
		                    <i class="glyphicon glyphicon-ban-circle"></i>
		                    <span>Cancel upload</span>
		                </button>
		                <button type="button" class="btn btn-danger delete">
		                    <i class="glyphicon glyphicon-trash"></i>
		                    <span>Delete</span>
		                </button>
		                <input type="checkbox" class="toggle">
-->
		                <!-- The global file processing state -->
		                <span class="fileupload-process"></span>
		            </div>
		            <div class="col-lg-12">
						<div id="additional_graphics_dropzone" class="dropzone fade well">
							
			                <span class="btn btn-success fileinput-button">
			                    <span>BROWSE</span>
			                    <input id="additional_graphics" class="maonster-image" type="file" name="additional_graphics[]" multiple data-limit="8">
			                </span> <br/>
			                Or DROP files here
		                </div>
		            </div>
		            <!-- The global progress state -->
		            <div class="col-lg-12 fileupload-progress fade">
		                <!-- The global progress bar -->
		                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
		                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
		                </div>
		                <!-- The extended global progress state -->
		                <div class="progress-extended">&nbsp;</div>
		            </div>
		        </div>
		        <!-- The table listing the files available for upload/download -->
				<table role="presentation" class="table table-striped"><tbody id="additional_graphics_container"></tbody></table>
			  </div>
			  
			  <div class="form-group">
			    <label for="file_downloads">If You Wanted Downloads On Your Site (PDF's etc), Please Upload Them (Click Below)</label>
			    <div class="row fileupload-buttonbar">
		            <div class="col-lg-12">
		                <!-- The fileinput-button span is used to style the file input field as button -->
		                <!--
<button type="submit" class="btn btn-primary start">
		                    <i class="glyphicon glyphicon-upload"></i>
		                    <span>Start upload</span>
		                </button>
		                <button type="reset" class="btn btn-warning cancel">
		                    <i class="glyphicon glyphicon-ban-circle"></i>
		                    <span>Cancel upload</span>
		                </button>
		                <button type="button" class="btn btn-danger delete">
		                    <i class="glyphicon glyphicon-trash"></i>
		                    <span>Delete</span>
		                </button>
		                <input type="checkbox" class="toggle">
-->
		                <!-- The global file processing state -->
		                <span class="fileupload-process"></span>
		            </div>
		            <div class="col-lg-12">
						<div id="file_downloads_dropzone" class="dropzone fade well">
							
			                <span class="btn btn-success fileinput-button">
			                    <span>BROWSE</span>
			                    <input id="file_downloads" class="maonster-doc" type="file" name="file_downloads[]" multiple data-limit="3">
			                </span> <br/>
			                Or DROP files here
		                </div>
		            </div>
		            <!-- The global progress state -->
		            <div class="col-lg-12 fileupload-progress fade">
		                <!-- The global progress bar -->
		                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
		                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
		                </div>
		                <!-- The extended global progress state -->
		                <div class="progress-extended">&nbsp;</div>
		            </div>
		        </div>
		        <!-- The table listing the files available for upload/download -->
				<table role="presentation" class="table table-striped"><tbody id="file_downloads_container"></tbody></table>
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next disabled btn btn-default">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-7" class="hidden step">
	      	  <h2>OK! Time To Tell Us WAY More About Your Company And You!</h2>
			  <p>
				  The more you tell us about yourself and your company, the more precisely we can get an amazing site created for you. Need some questions to prompt you? Sure thing!
			  </p>
			  <p>
			  	* Briefly describe your company<br>
			  	* How do you set yourself apart from your competitors<br>
			  	* How would you describe your brand’s personality<br>
			  	* Is there a specific theme you had in mind to incorporate into the website<br>
			  	* Describe the site’s desired look and feel<br>
			  </p>
			  
			  <div class="form-group">
			    <label for="more_about">*Go Ahead! Tell Us Your Answers To The Above :)</label>
			    <textarea row="3" class="form-control required" name="more_about" id="more_about" placeholder=""></textarea>
			  </div>
			  <div class="form-group">
			    <label for="competitors">*Give Some Details And Sites Of Your Competitors</label>
			    <textarea row="3" class="form-control required" name="competitors" id="competitors" placeholder=""></textarea>
			  </div>
			  <div class="form-group">
			    <label for="websites_liked">*Name A Few Websites You Like, And Why You Like Them (What Parts - The Colours, Layout, Style, Feel etc)</label>
			    <textarea row="3" class="form-control required" name="websites_liked" id="websites_liked" placeholder=""></textarea>
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next disabled btn btn-default">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-8" class="hidden step">
	      	  <h2>Righto. So Now It's Where We Take Your Login Details To Your Wordpress, Hosting Company And CPanel.</h2>
			  <p>
				  Don’t be nervous! We need these to be able to do the work for you without any delays. This form is secure and the form storage is secure. We’re professional and we delete them all once the project has successfully delivered to you as well :)
			  </p>
			  
			  <div class="form-group">
			    <label for="hosting_url">What's Your Hosting Company's URL You Login To? (godaddy, bluehost etc)</label>
			    <input type="text" class="form-control" name="hosting_url" id="hosting_url" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="hosting_uname">What's Your Hosting Username? (usually your email address)</label>
			    <input type="text" class="form-control" name="hosting_uname" id="hosting_uname" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="hosting_pword">What's Your Hosting Password? (needed so we can login and do work for you!)</label>
			    <input type="text" class="form-control" name="hosting_pword" id="hosting_pword" placeholder="">
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next btn btn-success">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-9" class="hidden step">
			  
			  <div class="form-group">
			    <label for="cpanel_url">What's Your CPanel URL? (sometimes bluehost etc have a different URL to login to)</label>
			    <input type="text" class="form-control" name="cpanel_url" id="cpanel_url" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="cpanel_uname">What's Your CPanel Username? (sometimes it's different from your Bluehost hosting username)</label>
			    <input type="text" class="form-control" name="cpanel_uname" id="cpanel_uname" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="cpanel_pword">What's Your CPanel Password? (needed to be able to modify for your site to work sometimes!)</label>
			    <input type="text" class="form-control" name="cpanel_pword" id="cpanel_pword" placeholder="">
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next btn btn-success">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-10" class="hidden step">
			  
			  <div class="form-group">
			    <label for="wp_url">What's Your Current Wordpress URL To Login To?</label>
			    <input type="text" class="form-control" name="wp_url" id="wp_url" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="wp_uname">What's Your Current Wordpress Admin Username?</label>
			    <input type="text" class="form-control" name="wp_uname" id="wp_uname" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="wp_pword">What's Your Current Wordpress Admin Password?</label>
			    <input type="text" class="form-control" name="wp_pword" id="wp_pword" placeholder="">
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next btn btn-success">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-11" class="hidden step">
			  
			  <div class="form-group">
			    <label for="video_urls">If You Wanted Videos Embedded, What Are The complete URL's For Them? (copy n paste them all in this box below, one URL per line)</label>
			    <textarea row="3" class="form-control" name="video_urls" id="video_urls" placeholder=""></textarea>
			  </div>
			  <div class="form-group">
			    <label for="hosting_url">*If You Wanted Forms OR CRM Integration, What Is The List ID (what system as well - Active Campaign, MailChimp etc) AND/OR The Email You Want Us To Send The Form To?</label>
			    <textarea row="3" class="form-control required" name="websites_liked" id="websites_liked" placeholder=""></textarea>
			  </div>
			  <div class="form-group">
			    <label for="hosting_url">What's Your Google Analytics ID? (looks like UA-xxxxx)</label>
			    <input type="text" class="form-control" name="hosting_url" id="hosting_url" placeholder="">
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next disabled btn btn-default">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-12" class="hidden step">
			  
			  <div class="form-group">
			    <label for="fb_pixel">Copy n Paste Your Facebook Pixel Below:</label>
			    <textarea row="3" class="form-control" name="fb_pixel" id="fb_pixel" placeholder=""></textarea>
			  </div>
			  <div class="form-group">
			    <label for="tt_pixel">Copy n Paste Your Twitter Pixel Below:</label>
			    <textarea row="3" class="form-control" name="tt_pixel" id="tt_pixel" placeholder=""></textarea>
			  </div>
			  <div class="form-group">
			    <label for="gtm_pixel">Copy n Paste Your Google Tag Manager Pixel Below:</label>
			    <textarea row="3" class="form-control" name="gtm_pixel" id="gtm_pixel" placeholder=""></textarea>
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="button" class="next disabled btn btn-default">Next</button>
			  </div>
	      	</div>
	      	
	      	<div id="step-13" class="hidden step">
			  
			  <div class="form-group">
			  	<input class="required maonster-radio" data-radio=".site_live" type="hidden" value="" id="site_live" />
			    <label>*And Finally.. When Do You Want This Website Live?</label>
			    <div class="radio">
				  <label>
				    <input class="site_live" type="radio" name="site_live" id="site_live1" value="Next 7 Days" checked>
				    Next 7 Days
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input class="site_live" type="radio" name="site_live" id="site_live2" value="Next 14 Days">
				    Next 14 Days
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input class="site_live" type="radio" name="site_live" id="site_live3" value="Next 30 Days">
				    Next 30 Days
				  </label>
				</div>
			  </div>
			  
			  <div class="form-group">
			    <button type="button" class="back btn btn-primary">Back</button>
			    <button type="submit" class="submit disabled btn btn-default">Submit</button>
			  </div>
	      	</div>
	      	
	      	<div class="form-group">
			  <button type="submit" class="submit disabled btn btn-default">Submit</button>
			</div>
	      	
		  </form>
		  
		  	  <!--
<div class="form-group">
			    <label for="graphics">*Upload Graphics</label>
			    <div class="fileinput fileinput-new" data-provides="fileinput">
				  <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input id="graphics" type="file" name="files[]"></span>
				  <span class="fileinput-filename"></span>
				  <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
				</div>
			  </div>
-->
		  
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
	
	      <footer class="footer">
	        <p>&copy; 2017 Company, Inc.</p>
	      </footer>
	
	    </div> <!-- /container -->
		
		<!-- The template to display files available for upload -->
		<script id="template-upload" type="text/x-tmpl">
		{% for (var i=0, file; file=o.files[i]; i++) { %}
		    <tr class="template-upload fade">
		        <td>
		            <span class="preview"></span>
		        </td>
		        <td>
		            <p class="name">{%=file.name%}</p>
		            <strong class="error text-danger"></strong>
		        </td>
		        <!--
<td>
		            <p class="size">Processing...</p>
		            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
		        </td>
-->
		        <td>
		            {% if (!i && !o.options.autoUpload) { %}
		                <!--
<button class="btn btn-primary start" disabled>
		                    <i class="glyphicon glyphicon-upload"></i>
		                    <span>Start</span>
		                </button>
-->
		            {% } %}
		            {% if (!i) { %}
		                <button class="btn btn-danger cancel">
		                    <i class="glyphicon glyphicon-ban-circle"></i>
		                    <span>Remove</span>
		                </button>
		            {% } %}
		        </td>
		    </tr>
		{% } %}
		</script>
		<!-- The template to display files available for download -->
		<script id="template-download" type="text/x-tmpl">
		{% for (var i=0, file; file=o.files[i]; i++) { %}
		    <tr class="template-download fade">
		        <td>
		            <span class="preview">
		                {% if (file.thumbnailUrl) { %}
		                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
		                {% } %}
		            </span>
		        </td>
		        <td>
		            <p class="name">
		                {% if (file.url) { %}
		                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
		                {% } else { %}
		                    <span>{%=file.name%}</span>
		                {% } %}
		            </p>
		            {% if (file.error) { %}
		                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
		            {% } %}
		        </td>
		        <td>
		            <span class="size">{%=o.formatFileSize(file.size)%}</span>
		        </td>
		        <td>
		            {% if (file.deleteUrl) { %}
		                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
		                    <i class="glyphicon glyphicon-trash"></i>
		                    <span>Delete</span>
		                </button>
		                <input type="checkbox" name="delete" value="1" class="toggle">
		            {% } else { %}
		                <button class="btn btn-warning cancel">
		                    <i class="glyphicon glyphicon-ban-circle"></i>
		                    <span>Cancel</span>
		                </button>
		            {% } %}
		        </td>
		    </tr>
		{% } %}
		</script>

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
		
		<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
		<script src="assets/vendor/jquery.fileupload/js/vendor/jquery.ui.widget.js"></script>
		<!-- The Templates plugin is included to render the upload/download listings -->
		<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
		<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
		<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
		<!-- The Canvas to Blob plugin is included for image resizing functionality -->
		<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
		<!-- blueimp Gallery script -->
		<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
		<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
		<script src="assets/vendor/jquery.fileupload/js/jquery.iframe-transport.js"></script>
		<!-- The basic File Upload plugin -->
		<script src="assets/vendor/jquery.fileupload/js/jquery.fileupload.js"></script>
		<!-- The File Upload processing plugin -->
		<script src="assets/vendor/jquery.fileupload/js/jquery.fileupload-process.js"></script>
		<!-- The File Upload image preview & resize plugin -->
		<script src="assets/vendor/jquery.fileupload/js/jquery.fileupload-image.js"></script>
		<!-- The File Upload audio preview plugin -->
		<script src="assets/vendor/jquery.fileupload/js/jquery.fileupload-audio.js"></script>
		<!-- The File Upload video preview plugin -->
		<script src="assets/vendor/jquery.fileupload/js/jquery.fileupload-video.js"></script>
		<!-- The File Upload validation plugin -->
		<script src="assets/vendor/jquery.fileupload/js/jquery.fileupload-validate.js"></script>
		<!-- The File Upload user interface plugin -->
		<script src="assets/vendor/jquery.fileupload/js/jquery.fileupload-ui.js?v=<?php echo time(); ?>"></script>
		<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
		<!--[if (gte IE 8)&(lt IE 10)]>
		<script src="assets/vendor/jquery.fileupload/js/cors/jquery.xdr-transport.js"></script>
		<![endif]-->
		
		<script src="assets/js/detectmobilebrowser.js"></script>
		<script src="assets/js/script.js?v=<?php echo time(); ?>"></script>
		
	</body>
</html>