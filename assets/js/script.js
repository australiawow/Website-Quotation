(function($) {
    
    "use strict";
    
    /*
validateForm($('#quoteForm'));
	$("#quoteForm input").bind('keyup blur',function(){
        validateForm($('#quoteForm'));
    });
*/

    $('.maonster-name').bind('keydown', function (event) {
    	var regex = new RegExp("^[a-zA-Z -]+$");
        var key = (!event.charCode) ? event.which : event.charCode;
        var keyToString = String.fromCharCode(key);
        
        //console.log(key);
        //console.log(keyToString);
        //console.log(regex.test(keyToString));
		if (!regex.test(keyToString)) {
        	switch (key) {
	            case 8:  // Backspace
	            case 9:  // Tab
	            case 13: // Enter
	            case 37: // Left
	            case 38: // Up
	            case 39: // Right
	            case 40: // Down
	            case 46: // Delete
	            case 189: // Dash and Underscore
	            case 190: // Dot
	            break;
	
	            default:
	            	event.preventDefault();
					return false;
			}
		}
    });
    
    if (jQuery.browser.mobile) {
	    $('.maonster-number, .maonster-phone').bind('keypress', function (event) {
	        var regex = new RegExp("^[0-9]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			if (!regex.test(keyToString)) {
	        	event.preventDefault();
				return false;
			}
	    });
    }
    else {
	    $('.maonster-number, .maonster-phone').bind('keydown', function (event) {
	        var regex = new RegExp("^[0-9]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			if (!regex.test(keyToString)) {
	        	switch (key) {
		            case 8:  // Backspace
		            case 9:  // Tab
		            case 13: // Enter
		            case 37: // Left
		            case 38: // Up
		            case 39: // Right
		            case 40: // Down
		            case 46: // Delete
		            //case 189: // Dash and Underscore
		            case 190: // Dot
		            break;
		
		            default:
		            	event.preventDefault();
			            //$(this).removeClass("valid");
			            //$(this).addClass('error');
						return false;
				}
			}
			else if ( event.shiftKey|| (event.keyCode < 48 || event.keyCode > 57) && 
					 (event.keyCode < 96 || event.keyCode > 105 ) ) {
	        	event.preventDefault();
				return false;
			}
	    });
    }
    
    if (jQuery.browser.mobile) {
	    $('.maonster-email').bind('keypress', function (event) {
	        var regex = new RegExp("^[a-zA-Z0-9 @._-]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			if (!regex.test(keyToString)) {
				
	        	event.preventDefault();
				return false;
			}
	    });
    }
    else {
	    $('.maonster-email').bind('keydown', function (event) {
	    	var regex = new RegExp("^[a-zA-Z0-9 @._-]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			var c = event.which;
			//console.log(c);
			var _to_ascii = {
		        '188': '44',
		        '109': '45',
		        '190': '46',
		        '191': '47',
		        '192': '96',
		        '220': '92',
		        '222': '39',
		        '221': '93',
		        '219': '91',
		        '173': '45',
		        '187': '61', //IE Key codes
		        '186': '59', //IE Key codes
		        '189': '45'  //IE Key codes
		    }
		
		    var shiftUps = {
		    	"190": ">",
		    	"111": "/",
		    	"107": "+",
		    	"106": "*",
		        "96": "~",
		        "49": "!",
		        "50": "@",
		        "51": "#",
		        "52": "$",
		        "53": "%",
		        "54": "^",
		        "55": "&",
		        "56": "*",
		        "57": "(",
		        "48": ")",
		        "45": "_",
		        "61": "+",
		        "91": "{",
		        "93": "}",
		        "92": "|",
		        "59": ":",
		        "39": "\"",
		        "44": "<",
		        "46": ">",
		        "47": "?"
		    };
		    
		    if (_to_ascii.hasOwnProperty(c)) {
	            c = _to_ascii[c];
	        }
	        
	        if (!event.shiftKey && (c >= 65 && c <= 90)) {
	        	//console.log('if');
	            c = String.fromCharCode(c + 32);
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else if (event.shiftKey && shiftUps.hasOwnProperty(c)) {
	        	//console.log('else if');
	            c = shiftUps[c];
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else {
	        	//console.log('else');
	        	switch (c) {
	            case 8:  // Backspace
	            case 9:  // Tab
	            case 13: // Enter
	            case 37: // Left
	            case 38: // Up
	            case 39: // Right
	            case 40: // Down
	            case 46: // Delete
	            case 50: // @
	            case 189: // Dash and Underscore
	            case 190: // Dot
	            break;
	
		            default:
		            	c = String.fromCharCode(c);
		            	if (!regex.test(c)) {
				        	event.preventDefault();
							return false;
						}
				}
	            
	        }
	    });
    }
    
    if (jQuery.browser.mobile) {
	    $('.maonster-alphanum').bind('keypress', function (event) {
	        var regex = new RegExp("^[a-zA-Z0-9 ]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			if (!regex.test(keyToString)) {
				
	        	event.preventDefault();
				return false;
			}
	    });
    }
    else {
	    $('.maonster-alphanum').bind('keydown', function (event) {
	    	var regex = new RegExp("^[a-zA-Z0-9 ]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			var c = event.which;
			//console.log(c);
			var _to_ascii = {
		        '188': '44',
		        '109': '45',
		        '190': '46',
		        '191': '47',
		        '192': '96',
		        '220': '92',
		        '222': '39',
		        '221': '93',
		        '219': '91',
		        '173': '45',
		        '187': '61', //IE Key codes
		        '186': '59', //IE Key codes
		        '189': '45'  //IE Key codes
		    }
		
		    var shiftUps = {
		    	"190": ">",
		    	"111": "/",
		    	"107": "+",
		    	"106": "*",
		        "96": "~",
		        "49": "!",
		        "50": "@",
		        "51": "#",
		        "52": "$",
		        "53": "%",
		        "54": "^",
		        "55": "&",
		        "56": "*",
		        "57": "(",
		        "48": ")",
		        "45": "_",
		        "61": "+",
		        "91": "{",
		        "93": "}",
		        "92": "|",
		        "59": ":",
		        "39": "\"",
		        "44": "<",
		        "46": ">",
		        "47": "?"
		    };
		    
		    if (_to_ascii.hasOwnProperty(c)) {
	            c = _to_ascii[c];
	        }
	        
	        if (!event.shiftKey && (c >= 65 && c <= 90)) {
	        	//console.log('if');
	            c = String.fromCharCode(c + 32);
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else if (event.shiftKey && shiftUps.hasOwnProperty(c)) {
	        	//console.log('else if');
	            c = shiftUps[c];
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else {
	        	//console.log('else');
	        	switch (c) {
	            case 8:  // Backspace
	            case 9:  // Tab
	            case 13: // Enter
	            case 37: // Left
	            case 38: // Up
	            case 39: // Right
	            case 40: // Down
	            case 46: // Delete
	            //case 50: // @
	            //case 189: // Dash and Underscore
	            //case 190: // Dot
	            break;
	
		            default:
		            	c = String.fromCharCode(c);
		            	if (!regex.test(c)) {
				        	event.preventDefault();
							return false;
						}
				}
	            
	        }
	    });
    }
    
    if (jQuery.browser.mobile) {
	    $('.maonster-username').bind('keypress', function (event) {
	        var regex = new RegExp("^[a-zA-Z0-9]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			if (!regex.test(keyToString)) {
				
	        	event.preventDefault();
				return false;
			}
	    });
    }
    else {
	    $('.maonster-username').bind('keydown', function (event) {
	    	var regex = new RegExp("^[a-zA-Z0-9]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			var c = event.which;
			//console.log(c);
			var _to_ascii = {
		        '188': '44',
		        '109': '45',
		        '190': '46',
		        '191': '47',
		        '192': '96',
		        '220': '92',
		        '222': '39',
		        '221': '93',
		        '219': '91',
		        '173': '45',
		        '187': '61', //IE Key codes
		        '186': '59', //IE Key codes
		        '189': '45'  //IE Key codes
		    }
		
		    var shiftUps = {
		    	"190": ">",
		    	"111": "/",
		    	"107": "+",
		    	"106": "*",
		        "96": "~",
		        "49": "!",
		        "50": "@",
		        "51": "#",
		        "52": "$",
		        "53": "%",
		        "54": "^",
		        "55": "&",
		        "56": "*",
		        "57": "(",
		        "48": ")",
		        "45": "_",
		        "61": "+",
		        "91": "{",
		        "93": "}",
		        "92": "|",
		        "59": ":",
		        "39": "\"",
		        "44": "<",
		        "46": ">",
		        "47": "?"
		    };
		    
		    if (_to_ascii.hasOwnProperty(c)) {
	            c = _to_ascii[c];
	        }
	        
	        if (!event.shiftKey && (c >= 65 && c <= 90)) {
	        	//console.log('if');
	            c = String.fromCharCode(c + 32);
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else if (event.shiftKey && shiftUps.hasOwnProperty(c)) {
	        	//console.log('else if');
	            c = shiftUps[c];
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else {
	        	//console.log('else');
	        	switch (c) {
	            case 8:  // Backspace
	            case 9:  // Tab
	            case 13: // Enter
	            case 37: // Left
	            case 38: // Up
	            case 39: // Right
	            case 40: // Down
	            case 46: // Delete
	            //case 50: // @
	            //case 189: // Dash and Underscore
	            //case 190: // Dot
	            break;
	
		            default:
		            	c = String.fromCharCode(c);
		            	if (!regex.test(c)) {
				        	event.preventDefault();
							return false;
						}
				}
	            
	        }
	    });
    }
	
	//- Helpers
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    
    function isURL (url) {
	    var regex = /^(?:(?:(?:https?):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i;
	    return regex.test(url);
    }
    
    function isSocialURL (url, type) {
	    var regex = new RegExp("http(?:s)?:\/\/(?:www\.)?"+type+"\.com\/([a-zA-Z0-9_]+)");
	    return regex.test(url);
    }

    function isName(name) {
        var regex = /^[a-zA-Z -]+$/;
        return regex.test(name);
    }

    function isPhone(phone) {
        var regex = /^[0-9 -]+$/;
        return regex.test(phone);
    }
    
    function isAlphaNum(name) {
        var regex = /^[a-zA-Z0-9 ]+$/;
        return regex.test(name);
    }
    
    function isUsername(name) {
        var regex = /^[a-zA-Z0-9]+$/;
        return regex.test(name);
    }
    
    function isFile(el,f) {
		var s = f.size;
		var t = f.type;
		
		if ( s > 1000000 ) {
			return false;
        }
        
        if ($(el).hasClass('maonster-doc')) {
	        if (t.split('/')[1] != 'pdf' && t.split('/')[1] != 'doc' && t.split('/')[1] != 'docx' && t.split('/')[1] != 'xls') {
	        	return false;
	        }
        }
        else if ($(el).hasClass('maonster-image')) {
	        if (t.split('/')[1] != 'jpg' && t.split('/')[1] != 'jpeg' && t.split('/')[1] != 'png'
	        	&& t.split('/')[1] != 'ai' && t.split('/')[1] != 'eps' ) {
	        	return false;
	        }
        }
        
        return true;
    }
    
    function validateForm (form) {
		var requireds = $(form).find('.required');
		var reqTotal  = requireds.length;
		var validCnt  = 0;
		console.log(reqTotal);
		$(form).find('.payment-errors').text('');
		$(requireds).each(function(){
			if ($(this).val() != '') {
				
				if ($(this).hasClass('maonster-name')) {
					if (isName($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-email')) {
					if (isEmail($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-phone')) {
					
					if ($(this).intlTelInput("isValidNumber")) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-number')) {
					if (isPhone($(this).val())) {
						if ($(this).attr('id') == 'stripeCC') {
							if ($(this).val().length >= 12) {
								$(this).parent().removeClass('has-error').addClass('has-success');
							}
							else {
								$(this).parent().removeClass('has-success').addClass('has-error');
							}
						}
						else {
							$(this).parent().removeClass('has-error').addClass('has-success');
						}
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-alphanum')) {
					if (isAlphaNum($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-username')) {
					if (isUsername($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-address')) {
					$(this).parent().removeClass('has-error').addClass('has-success');
					validCnt++;
				}
				else if ($(this).hasClass('maonster-url')) {
					if (isURL($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else {
					$(this).parent().removeClass('has-error').addClass('has-success');
					validCnt++;
				}
				
			}
			else {
				$(this).parent().removeClass('has-success').addClass('has-error');
			}
		});
		if (reqTotal == validCnt) {
		    $(form).find('.submit').prop('disabled', false);
			$(form).find('.submit').removeClass("disabled");
		    $(form).find('.submit').addClass('btn-success');
		}
		else {
		    $(form).find('.submit').prop('disabled', true);
		    $(form).find('.submit').removeClass('btn-success');
			$(form).find('.submit').addClass("disabled");
		}
		
	}
	
	/*
// Initialize the jQuery File Upload widget:
    $('#quoteForm').fileupload({
        // Uncomment the following to send cross-domain cookies:
        xhrFields: {withCredentials: true},
        url: 'https://nathanhague.com/website-quote/assets/php/success.php',
        //url: 'assets/vendor/jquery.fileupload/server/php/',
        dataType: 'json',
        dropZone: $('#dropzone'),
        fileInput: $('#files'),
        replaceFileInput: false,
        add: function (e, data) {
        	console.log('test');
	        var jqXHR = data.submit();
            .success(function (result, textStatus, jqXHR) {console.log(result);})
            .error(function (jqXHR, textStatus, errorThrown) {console.log(jqXHR);})
            .complete(function (result, textStatus, jqXHR) {console.log(result);});
        	console.log(jqXHR);
	    }
    });
*/
    
    // Enable iframe cross-domain access via redirect option:
    /*
$('#quoteForm').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );
*/
    /*

    // Load existing files:
    $('#quoteForm').addClass('fileupload-processing');
    $.ajax({
        // Uncomment the following to send cross-domain cookies:
        xhrFields: {withCredentials: true},
        url: $('#quoteForm').fileupload('option', 'url'),
        dataType: 'json',
        context: $('#quoteForm')[0]
    }).always(function () {
        $(this).removeClass('fileupload-processing');
    }).done(function (result) {
        $(this).fileupload('option', 'done')
            .call(this, $.Event('done'), {result: result});
    });
*/
    
    $(document).bind('dragover', function (e){
    	var dropZone = $('.dropzone'),
        foundDropzone,
        timeout = window.dropZoneTimeout;
        if (!timeout)
        {
            dropZone.addClass('in');
        }
        else
        {
            clearTimeout(timeout);
        }
        var found = false,
        node = e.target;

        do{

            if ($(node).hasClass('dropzone'))
            {
                found = true;
                foundDropzone = $(node);
                break;
            }

            node = node.parentNode;

        }while (node != null);

        dropZone.removeClass('in hover');

        if (found)
        {
            foundDropzone.addClass('hover');
        }

        window.dropZoneTimeout = setTimeout(function ()
        {
            window.dropZoneTimeout = null;
            dropZone.removeClass('in hover');
        }, 100);
    });
	
    /*
var data = new FormData();
    $('#quoteForm')
    	.bind('fileuploadadd', function (e, data) {
	    //data.append('file-'+i, file);
	    })
    	.bind('fileuploadsubmit', function (e, data) {
	    //data.append('file-'+i, file);
	    	console.log(data);
	    });
*/
    
	$("#quoteForm").submit(function(e){
        e.preventDefault();
        
        //$('#loader').modal('show');
	    
	    /*
var data = {
			fname			: $("#fname").val(),
			lname			: $("#lname").val(),
			//uname			: $("#uname").val(),
			contact_email	: $("#contact_email").val(),
			company_name	: $("#company_name").val(),
			company_phone	: $("#company_phone").val(),
			company_email	: $("#company_email").val()
		};
		
*/
		/*
$.each($('#files')[0].files, function(i, file) {
		    data.append('file-'+i, file);
		});
*/
		
		/*
$.each($('#graphics')[0].files, function(i, file) {
		    data.append('file-'+i, file);
		    files['file-'+i] = file;
		});
*/

		var fd = new FormData();
		//- Collect and append Business/Company Data
		fd.append("business_name", $('#business_name').val().trim());
		fd.append("business_desc", $('#business_desc').val().trim());
		fd.append("business_add", $('#business_add').val().trim());
		fd.append("business_url", $('#business_url').val().trim());
		fd.append("business_email", $('#business_email').val().trim());
		//- Collect and append Person Data
		fd.append("contact_fname", $('#contact_fname').val().trim());
		fd.append("contact_lname", $('#contact_lname').val().trim());
		fd.append("contact_email", $('#contact_email').val().trim());
		fd.append("company_phone", $('#company_phone').val().trim());
		//- Collect and append Social Media Data
		fd.append("fb_url", $('#fb_url').val().trim());
		if ($('#tt_url').val() != '') fd.append("tt_url", $('#tt_url').val().trim());
		if ($('#li_url').val() != '') fd.append("li_url", $('#li_url').val().trim());
		if ($('#ig_url').val() != '') fd.append("fb_url", $('#ig_url').val().trim());
		if ($('#sc_url').val() != '') fd.append("sc_url", $('#sc_url').val().trim());
		//- Collect and append Essential/Feature Data
		fd.append("site_pages", $('#site_pages').val().trim());
		fd.append("site_features", $('#site_features').val().trim());
		//- Collect and append Web Content Data
		fd.append("style_guide", $('#style_guide').val().trim());
		fd.append("content_ready", $('#content_ready').val().trim());
		fd.append("gdoc_url", $('#gdoc_url').val().trim());
		//- Collect Files
		fd.append("branding_doc", $('#branding_doc')[0].files);
		fd.append("company_logo", $('#company_logo')[0].files);
		fd.append("graphic_1", $('#graphic_1')[0].files);
		fd.append("graphic_2", $('#graphic_2')[0].files);
		fd.append("additional_graphics", $('#additional_graphics')[0].files);
		fd.append("file_downloads", $('#file_downloads')[0].files);
		
		console.log($('#additional_graphics')[0].files);
		
		// Display the key/value pairs
		for (var pair of fd.entries()) {
		    //console.log(pair[0]+ ', ' + pair[1]); 
		}
		/*
$.each($('#graphics')[0].files, function(i, file) {
		    fd.append('file-'+i, file);
		});
		$.ajax({
		  url: "https://nathanhague.com/website-quote/assets/php/success.php",
		  type: "POST",
		  data: fd,
		  dataType: 'json',
		  processData: false,  // tell jQuery not to process the data
		  contentType: false,   // tell jQuery not to set contentType
		  success: function(data, textStatus, jqXHR)
	        {
	        	console.log(data);
	            if(typeof data.error === 'undefined')
	            {
	                // Success so call function to process the form
	                //submitForm(event, data);
	            }
	            else
	            {
	                // Handle errors here
	                console.log('ERRORS: ' + data.error);
	            }
	            $('#loader').modal('hide');
	        },
	        error: function(jqXHR, textStatus, errorThrown)
	        {
	            // Handle errors here
	            console.log('ERRORS: ' + textStatus);
	            console.log('ERRORS: ' + jqXHR);
	            console.log('ERRORS: ' + errorThrown);
	            // STOP LOADING SPINNER
	            $('#loader').modal('hide');
	        }
		});
*/
		/*
var request = new XMLHttpRequest();
		request.open("POST", "https://nathanhague.com/website-quote/assets/php/success.php");
		request.onload = function(oEvent) {
		      console.log(oEvent);
		    if (request.status == 200) {
		    	console.log('Uploaded!');
		    } else {
		    	console.log("Error " + request.status + " occurred when trying to upload your file.<br \/>");
		    }
		  };
		request.send(data);
*/
        /*
$.ajax({
		  url: "https://nathanhague.com/website-quote/assets/php/success.php",
		  method: "POST",
		  data: data,
		  dataType: 'json',
	      cache: false,
	      contentType: false,
	      processData: false,
	      success: function(data, textStatus, jqXHR)
	        {
	        	console.log(data);
	            if(typeof data.error === 'undefined')
	            {
	                // Success so call function to process the form
	                //submitForm(event, data);
	            }
	            else
	            {
	                // Handle errors here
	                console.log('ERRORS: ' + data.error);
	            }
	            $('#loader').modal('hide');
	        },
	        error: function(jqXHR, textStatus, errorThrown)
	        {
	            // Handle errors here
	            console.log('ERRORS: ' + textStatus);
	            console.log('ERRORS: ' + jqXHR);
	            console.log('ERRORS: ' + errorThrown);
	            // STOP LOADING SPINNER
	            $('#loader').modal('hide');
	        }
		});
*/
		 
		/*
request.done(function( data ) {
		  console.log(data);
		  if (data.status == 'success') {
			  //$("#nameDiv").html("Thanks " + data.msg + "! We'll be in touch within a few hours!");
		  }
		  else {
			  //$("#nameDiv").html("There's a problem with your request. Please refresh the page. Thanks!");
		  }
		  //window.location.href = "";
		  $('#loader').modal('hide');
		  
		});
		 
		request.fail(function( jqXHR, textStatus ) {
		    alert( "Request failed: " + textStatus );
		    $('#loader').modal('hide');
		});
*/
	    
    });
    
    $('.next').on('click', function(e){
	    e.preventDefault();
	    var parent = $(this).parent().parent();
	    var value  = parseInt($(parent).attr('id').split('-')[1]) + 1;
	    var next   = "#step-"+value;
	    animateProgressBar(value);
	    
	    //- next step
	    $(parent).addClass('hidden');
	    $(next).removeClass('hidden');
	    $(next).focus();
	    $('#step-word').text("Step " + value + " of 13");
	    
	    console.log($('#branding_doc')[0].files);
    });
    
    $('.back').on('click', function(e){
	    e.preventDefault();
	    var parent = $(this).parent().parent();
	    var value  = parseInt($(parent).attr('id').split('-')[1]) - 1;
	    var back   = "#step-"+value;
	    animateProgressBar(value);
	    
	    //- back step
	    $(parent).addClass('hidden');
	    $(back).removeClass('hidden');
	    $(back).focus();
	    $('#step-word').text("Step " + value + " of 13");
    });
    
    $('.step').each(function(){
    	var step   = $(this);
	    var inputs = $(this).find('.required');
	    var curStep= $(this).attr('id').split('-')[1];
	    var steps  = $('.step').length;
	    validateStep(inputs, steps, curStep);
	    
		$(inputs).each(function(){
			if ($(this).hasClass('maonster-checkbox')) {
				var checkbox = $(this);
				$(step).find(checkbox.data('checkbox')).bind('change blur',function(){
					var checked = $(checkbox.data('checkbox')+":checked");
					var checkboxes = [];
					$(checked).each(function(){
						checkboxes.push($(this).val());
					});
					checkbox.val(checkboxes.join());
			        validateStep(inputs, steps, curStep);
			    });
			}
			else if ($(this).hasClass('maonster-radio')) {
				var radio = $(this);
				$(step).find(radio.data('radio')).bind('change blur',function(){
					var checked = $(checkbox.data('radio')+":checked");
					var radioes = [];
					$(checked).each(function(){
						radioes.push($(this).val());
					});
					radio.val(radioes.join());
			        validateStep(inputs, steps, curStep);
			    });
			}
			else if ($(this).is('input[type="file"]')) {
				$(this).bind('change blur',function(){
					console.log(inputs[0].files);
			        validateStep(inputs, steps, curStep);
			    });
			}
			else {
			    $(this).bind('keyup blur',function(){
			        validateStep(inputs, steps, curStep);
			    });
			}
		});
    });
    
    $('input[type="file"]').each(function(){
		var input 		= $(this);
		var theId 		= $(input).attr("id");
	    var isMultiple 	= $(input).prop('multiple');
	    var limit 		= (isMultiple) ? $(input).data('limit') : 1;
	    
		$(input).fileupload({
	        dataType: 'json',
	        fileInput: input,
	        filesContainer: $("#"+theId+"_container"),
	        dropZone: $('#'+theId+'_dropzone'),
	        add: function (e, data) {
                if (e.isDefaultPrevented()) {
                    return false;
                }
                
                
                var $this = $(this),
                    that = $this.data('blueimp-fileupload') ||
                        $this.data('fileupload'),
                    options = that.options;
                    
				if(isFile(input,data.files[0])){
				
	                if (options.filesContainer.children().length < limit) {
		                
		                data.context = that._renderUpload(data.files)
		                    .data('data', data)
		                    .addClass('processing');
		                    
		                options.filesContainer[
		                    options.prependFiles ? 'prepend' : 'append'
		                ](data.context);
		                that._forceReflow(data.context);
		                that._transition(data.context);
		                data.process(function () {
		                    return $this.fileupload('process', data);
		                }).always(function () {
		                    data.context.each(function (index) {
		                        $(this).find('.size').text(
		                            that._formatFileSize(data.files[index].size)
		                        );
		                    }).removeClass('processing');
		                    that._renderPreviews(data);
		                }).done(function () {
		                    data.context.find('.start').prop('disabled', false);
		                    if ((that._trigger('added', e, data) !== false) &&
		                            (options.autoUpload || data.autoUpload) &&
		                            data.autoUpload !== false) {
		                        data.submit();
		                    }
		                }).fail(function () {
		                    if (data.files.error) {
		                        data.context.each(function (index) {
		                            var error = data.files[index].error;
		                            if (error) {
		                                $(this).find('.error').text(error);
		                            }
		                        });
		                    }
		                });
		                
		                if (options.filesContainer.children().length == limit) {
			                $("#"+theId).parent('.btn').prop('disabled', true);
			                $("#"+theId).parent('.btn').addClass('disabled');
			                //$("#"+theId).parent('.btn').removeClass('btn-success');
		                }
		                else {
			                $("#"+theId).parent('.btn').prop('disabled', false);
			                $("#"+theId).parent('.btn').removeClass('disabled');
			                //$("#"+theId).parent('.btn').addClass('btn-success');
		                }
		                
	                }
	                else {
		                $("#"+theId).parent('.btn').prop('disabled', true);
		                $("#"+theId).parent('.btn').addClass('disabled');
		                //$("#"+theId).parent('.btn').removeClass('btn-success');
	                }
	            }
            },
            fail: function (e, data) {
                if (e.isDefaultPrevented()) {
                    return false;
                }
                
                var that = $(this).data('blueimp-fileupload') ||
                        $(this).data('fileupload'),
                    options = that.options,
                    template,
                    deferred;
                if (data.context) {
                	
                    data.context.each(function (index) {
                        if (data.errorThrown !== 'abort') {
                            var file = data.files[index];
                            file.error = file.error || data.errorThrown ||
                                data.i18n('unknownError');
                            deferred = that._addFinishedDeferreds();
                            that._transition($(this)).done(
                                function () {
                                    var node = $(this);
                                    template = that._renderDownload([file])
                                        .replaceAll(node);
                                    that._forceReflow(template);
                                    that._transition(template).done(
                                        function () {
                                            data.context = $(this);
                                            that._trigger('failed', e, data);
                                            that._trigger('finished', e, data);
                                            deferred.resolve();
                                        }
                                    );
                                }
                            );
                        } else {
                        	
                            deferred = that._addFinishedDeferreds();
                            that._transition($(this)).done(
                                function () {
                                    $(this).remove();
                                    that._trigger('failed', e, data);
                                    that._trigger('finished', e, data);
                                    deferred.resolve();
                                    
                                    
                                    if (options.filesContainer.children().length == limit) {
						                $("#"+theId).parent('.btn').prop('disabled', true);
						                $("#"+theId).parent('.btn').addClass('disabled');
						                //$("#"+theId).parent('.btn').removeClass('btn-success');
					                }
					                else {
						                $("#"+theId).parent('.btn').prop('disabled', false);
						                $("#"+theId).parent('.btn').removeClass('disabled');
						                //$("#"+theId).parent('.btn').addClass('btn-success');
					                }
                                    
                                }
                            );
                        }
                    });
                } else if (data.errorThrown !== 'abort') {
                    data.context = that._renderUpload(data.files)[
                        that.options.prependFiles ? 'prependTo' : 'appendTo'
                    ](that.options.filesContainer)
                        .data('data', data);
                    that._forceReflow(data.context);
                    deferred = that._addFinishedDeferreds();
                    that._transition(data.context).done(
                        function () {
                            data.context = $(this);
                            that._trigger('failed', e, data);
                            that._trigger('finished', e, data);
                            deferred.resolve();
                        }
                    );
                } else {
                    that._trigger('failed', e, data);
                    that._trigger('finished', e, data);
                    that._addFinishedDeferreds().resolve();
                }
            }
	    });
	    
    	$(input).bind('change blur',function(){
			/*
if ( $(input)[0].files.length > 0 ) {
				if (isMultiple) {
					$.each($(input)[0].files, function(i, file) {
					    
						if(isFile(input,file)){
							$(input).addClass('required');
						}
						else {
							$(input).removeClass('required');
						}
						
					});
				}
				else {
					if(isFile(input,$(input)[0].files[0])){
						$(input).addClass('required');
					}
					else {
						$(input).removeClass('required');
					}
				}
			}
			else {
				$(input).removeClass('required');
			}
			
*/
		});
    });
    
    
    $('#step-1').addClass('hidden');
    $('#step-6').removeClass('hidden');
    $('button.disabled').prop('disabled', false);
    $('button.disabled').removeClass('disabled');
    function validateStep (inputs, steps, curStep) {
		var requireds = inputs;
		var reqTotal  = requireds.length;
		var validCnt  = 0;
		console.log(reqTotal);
		
		$(requireds).each(function(){
			if ($(this).val() != '') {
				
				if ($(this).hasClass('maonster-name')) {
					if (isName($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-email')) {
					if (isEmail($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-phone')) {
					
					if ($(this).intlTelInput("isValidNumber")) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-number')) {
					if (isPhone($(this).val())) {
						if ($(this).attr('id') == 'stripeCC') {
							if ($(this).val().length >= 12) {
								$(this).parent().removeClass('has-error').addClass('has-success');
							}
							else {
								$(this).parent().removeClass('has-success').addClass('has-error');
							}
						}
						else {
							$(this).parent().removeClass('has-error').addClass('has-success');
						}
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-alphanum')) {
					if (isAlphaNum($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-username')) {
					if (isUsername($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-address')) {
					$(this).parent().removeClass('has-error').addClass('has-success');
					validCnt++;
				}
				else if ($(this).hasClass('maonster-url')) {
					if (isURL($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-social-url')) {
					if (isSocialURL($(this).val(),$(this).data('social'))) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).is('input[type="file"]')) {
					var input 		= $(this);
					var isMultiple 	= $(input).prop('multiple');
					var filesTotal  = 0;
					if ( $(input)[0].files.length > 0 ) {
						if (isMultiple) {
							$.each($(input)[0].files, function(i, file) {
							    
								if(isFile(input,file)){
									filesTotal++;
								}
								
								if ($(input)[0].files.length == filesTotal) {
									validCnt++;
								}
								
							});
						}
						else {
							if(isFile(input,$(input)[0].files[0])){
								validCnt++;
							}
						}
					}
				}
				else {
					if (!$(this).hasClass('maonster-checkbox') && !$(this).hasClass('maonster-radio')) {
						$(this).parent().removeClass('has-error').addClass('has-success');
					}
					validCnt++;
				}
				
			}
			else {
				if ($(this).is('input[type="file"]')) {
					$(this).parent().parent().find('span.fileinput-filename').removeClass('text-success').addClass('text-danger');
				}
				else if (!$(this).hasClass('maonster-checkbox') && !$(this).hasClass('maonster-radio')) {
					$(this).parent().removeClass('has-success').addClass('has-error');
				}
			}
		});
		
		var button = ".next";
		if (curStep == steps) {
			button = ".submit";
		}
		if (reqTotal == validCnt) {
		    $('#step-'+curStep).find(button).prop('disabled', false);
			$('#step-'+curStep).find(button).removeClass("disabled");
		    $('#step-'+curStep).find(button).addClass('btn-success');
		}
		else {
		    $('#step-'+curStep).find(button).prop('disabled', true);
		    $('#step-'+curStep).find(button).removeClass('btn-success');
			$('#step-'+curStep).find(button).addClass("disabled");
		}
		
	}
    
    // PROGRESSBAR CLASS DEFINITION
    // ============================

    var Progressbar = function (element) {
        this.$element = $(element);
    }

    Progressbar.prototype.update = function (value) {
        var $div = this.$element.find('div');
        var $span = $div.find('span');
        $div.attr('aria-valuenow', value);
        $div.css('width', value + '%');
        $span.text(value + '%');
    }

    Progressbar.prototype.finish = function () {
        this.update(100);
    }

    Progressbar.prototype.reset = function () {
        this.update(0);
    }

    // PROGRESSBAR PLUGIN DEFINITION
    // =============================

    $.fn.progressbar = function (option) {
        return this.each(function () {
            var $this = $(this),
                data = $this.data('jbl.progressbar');

            if (!data) $this.data('jbl.progressbar', (data = new Progressbar(this)));
            if (typeof option == 'string') data[option]();
            if (typeof option == 'number') data.update(option);
        })
    };

    // PROGRESSBAR DATA-API
    // ====================

    $(document).on('click', '[data-toggle="progressbar"]', function (e) {
        var $this = $(this);
        var $target = $($this.data('target'));
        var value = $this.data('value');
		console.log(value);
        e.preventDefault();

        $target.progressbar(value);
    });
    
    function animateProgressBar (value) {
		var total = 13;
		var perce = Math.floor((value/total) * 100);
		console.log(perce);
        $('#myProgressbar').progressbar(perce);
    }
	
})(jQuery);