$(document).ready(function(){
	
	//managing height
	var windowHeight = $(window).height();
	var headerHeight = $('#header').height() + 5;
	var offsetHeight = windowHeight - headerHeight;
	/*$('.side-nav').height(offsetHeight);*/
	
	// init clock
	setInterval('updateClock()', 1000);
	
	// tinymce rich text editor init
	// tinymce.init({
	// 	selector: "textarea",
	// 	menubar : false
	// });
	
	//hiding heading for tabs
	$('.side-nav').on('click', 'a', function(){
		$('#content h1').fadeOut(100);
	});
	
	//getting name for file field
	$('input[type="file"]').on('change', function(){
		var val = $(this).val();
		$(this).siblings('span').html(val);
	});
	
	// nav open close
	
	/*$('.add-nav').on('click', '.opener', function(e){
		e.preventDefault();
		var activeElem = $(this).parents('.add-nav');
		var targetElemWidth = $(this).siblings('ul').width() + 20;
		if(activeElem.hasClass('active')){
			activeElem.removeClass('active');
			$(this).siblings('ul').animate({right:-targetElemWidth, opacity:'0' }, 600);
		}else{
			activeElem.addClass('active');
			$(this).siblings('ul').animate({right:'50px', opacity:'1'}, 600);
		}
	});*/

	
	// deleting data
	$(document).on('click', '.del', function(e){
		e.preventDefault();
		var id = $(this).attr('href');
		var ele = $(this).parents('tr');
		var table = $(this).attr('data-rel');
		if(confirm("Are you sure you want to delete this Record?")){
			$.ajax({
				type:'POST',
				url:'delete.php',
				data: {id : id, table: table},
				success: function(data){
					if(data == "YES"){
						ele.fadeOut().remove();
					}else{
						alert(data);
					}
				}
			});
		}
	});
	
	// Change Password validation
	$('.message-area').hide();
	$('.change-pass').click(function(e){
		e.preventDefault();
		
		var name = $.trim($('#tab1 .name').val());
		var oldPass = $.trim($('#tab1 .old-pass').val());
		var newPass = $.trim($('#tab1 .new-pass').val());
		var confPass = $.trim($('#tab1 .conf-pass').val());
		var user = $.trim($('#tab1 .username').val());
		var result = '';
		
		if(oldPass == ''){
			result += "<p>Please Enter Old Password.</p>";
		}
		if(newPass == ''){
			result += "<p>Please Enter New Password.</p>";
		}
		if(confPass == ''){
			result += "<p>Please Confirm New Password.</p>";
		}
		if(newPass != confPass){
			result += "<p>New &amp; Confirm Passwords Doesn't match.</p>";
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').addClass('loading').html('Authenticating, Please Wait!!');
			$.post('php/change-password.php', { user:user, name: name, oldPass: oldPass, newPass: newPass }, function(data){
				
				if(data == "0"){
					$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html('Details has been Changed Successfully');
					$('.message-area').delay(5000).fadeOut(500);
				}else{
					$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
					$('.message-area').delay(5000).fadeOut(500);
				}
				
			});	
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
	// Add User validation
	$('#tab2 .check-list').hide();
	$('#tab2 input[type="radio"]').on('change', function(e){
		var radioVal = $(this).val();
		if( radioVal == 'user'){
			$('#tab2 .check-list').slideDown();
		}else{
			$('#tab2 .check-list').slideUp();
		}
		
	});
	
	$('.message-area').hide();
	$('.add-user').click(function(e){
		e.preventDefault();
		var name = $.trim($('#tab2 .name').val());
		var pass = $.trim($('#tab2 .pass').val());
		var confPass = $.trim($('#tab2 .conf-pass').val());
		var user = $.trim($('#tab2 .username').val());
		var radioVal = $.trim($('#tab2 input:radio[name=type]:checked').val());
		if( radioVal == 'user' ){ 
			var checkVal = $('#tab2 input[type="checkbox"]:checked').map(function(){ return this.value; }).get().join(', ');
		}else { var checkVal = ''; };
		
		var result = '';
		if(name == ''){
			result += "<p>Please Enter Name.</p>";
		}
		if(user == ''){
			result += "<p>Please Enter Username.</p>";
		}
		if(pass == ''){
			result += "<p>Please Enter Password.</p>";
		}
		if(confPass == ''){
			result += "<p>Please Confirm New Password.</p>";
		}
		if(pass != confPass){
			result += "<p>New &amp; Confirm Passwords Doesn't match.</p>";
		}
		if(radioVal == ''){
			result += "<p>Please Select Account Type.</p>";
		}
		if( radioVal == 'user' ){
			if( checkVal == '' ){
				result += "<p>Please Select Access to Pages.</p>";
			}
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').addClass('loading').html('Authenticating, Please Wait!!');
			$.post('php/add-user.php', { name: name, pass: pass, user:user, radioVal:radioVal, checkVal:checkVal }, function(data){
				
				if(data == "0"){
					$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html('User has been created Successfully');
					$('.message-area').delay(5000).fadeOut(500);
				}else{
					$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
					$('.message-area').delay(5000).fadeOut(500);
				}
				
			});	
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
	// Edit User validation
	$('#tab3 .check-list').hide();
	$('#tab3 input[type="radio"]').on('change', function(e){
		var radioVal = $(this).val();
		if( radioVal == 'user'){
			$('#tab3 .check-list').slideDown();
		}else{
			$('#tab3 .check-list').slideUp();
		}
		
	});
	
	$('.message-area').hide();
	$('.edit-user').click(function(e){
		e.preventDefault();
		var username = $.trim($('#tab3 .username').val());
		/*var name = $.trim($('#tab3 .name').val());
		var pass = $.trim($('#tab3 .pass').val());
		var confPass = $.trim($('#tab3 .conf-pass').val());
		var user = $.trim($('#tab3 .user').val());*/
		var radioVal = $.trim($('#tab3 input:radio[name=type]:checked').val());
		if( radioVal == 'user' ){ 
			var checkVal = $('#tab3 input[type="checkbox"]:checked').map(function(){ return this.value; }).get().join(', ');
		}else { var checkVal = ''; };
		
		var result = '';
		if(username == 'select'){
			result += "<p>Please Select a Username to Edit.</p>";
		}
		/*if(name == ''){
			result += "<p>Please Enter Name.</p>";
		}
		if(user == ''){
			result += "<p>Please Enter Username.</p>";
		}
		if(pass == ''){
			result += "<p>Please Enter Password.</p>";
		}
		if(confPass == ''){
			result += "<p>Please Confirm New Password.</p>";
		}
		if(pass != confPass){
			result += "<p>New &amp; Confirm Passwords Doesn't match.</p>";
		}*/
		if(radioVal == ''){
			result += "<p>Please Select Account Type.</p>";
		}
		if( radioVal == 'user' ){
			if( checkVal == '' ){
				result += "<p>Please Select Access to Pages.</p>";
			}
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').addClass('loading').html('Authenticating, Please Wait!!');
			$.post('php/edit-user.php', { username:username, radioVal:radioVal, checkVal:checkVal }, function(data){
				
				if(data == "0"){
					$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html('User has been Successfully Edited');
					$('.message-area').delay(5000).fadeOut(500);
				}else{
					$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
					$('.message-area').delay(5000).fadeOut(500);
				}
				
			});	
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
	// login page validation
	$('.message-area').hide();
	$('.btn-login').click(function(e){
		e.preventDefault();
		
		var user = $.trim($('.user').val());
		var pass = $.trim($('.pass').val());
		var result = '';
		
		if(user == ''){
			result += "<p>Please Enter Username.</p>";
		}
		if(pass == ''){
			result += "<p>Please Enter Password.</p>";
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').addClass('loading').html('Authenticating, Please Wait!!');
			$.post('php/login-validation.php', { user: user, pass: pass }, function(data){
				
				if(data == "0"){
					$(document.location = 'index.php');
				}else{
					$('.message-area').fadeIn(500).removeClass('loading').addClass('error').html(data);
					$('.message-area').delay(5000).fadeOut(500);
				}
				
			});	
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
	// Slider validation
	$('.message-area').hide();
	$('.slider-form').on('submit', function(e){
		e.preventDefault();
		var formId = $(this).attr('id');
		
		if(formId == 'slider-edit'){
			var id = $.trim($('.id').val());
			var post_url = 'php/slider-edit.php';
			var success_msg = 'Slider has been Edited Successfully';
		}else{
			var post_url = 'php/slider-add.php';
			var success_msg = 'Slider has been Added Successfully';
		}

		var title = $.trim($('.slider-title').val());
		var sub_title = $.trim($('.sub-title').val());
		var img = $.trim($('.slider-img').val());
		var result = '';
		
		if(title.length == 0){
			result += "<p>Please Enter Title.</p>";
		}
		if(sub_title == ''){
			result += "<p>Please Enter Description.</p>";
		}
		if(img == ''){
			result += "<p>Please Select Image.</p>";
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').removeClass('success').addClass('loading').html('Authenticating, Please Wait!!');
			$.ajax({
				url: post_url,   	// Url to which the request is send
				type: "POST",					// Type of request to be send, called as method
				data:  new FormData(this), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
				cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(data){		// A function to be called if request succeeds
					if(data == "0"){
						$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html(success_msg);
						$('.message-area').delay(5000).fadeOut(500);
					}else{
						$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
						$('.message-area').delay(5000).fadeOut(500);
					}
				}
			});
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});

	// About validation
	$('.message-area').hide();
	$('.about-form').on('submit', function(e){
		e.preventDefault();
		var formId = $(this).attr('id');
		
		if(formId == 'about-edit'){
			var id = $.trim($('.id').val());
			var post_url = 'php/about-edit.php';
			var success_msg = 'About has been Edited Successfully';
		}else{
			var post_url = 'php/about-add.php';
			var success_msg = 'About has been Added Successfully';
		}

		var title = $.trim($('.about-title').val());
		var desc = $.trim($('.about-desc').val());
		var img = $.trim($('.about-img').val());
		var result = '';
		
		if(title.length == 0){
			result += "<p>Please Enter Title.</p>";
		}
		if(desc == ''){
			result += "<p>Please Enter Description.</p>";
		}
		if(img == ''){
			result += "<p>Please Select Image.</p>";
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').removeClass('success').addClass('loading').html('Authenticating, Please Wait!!');
			$.ajax({
				url: post_url,   	// Url to which the request is send
				type: "POST",					// Type of request to be send, called as method
				data:  new FormData(this), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
				cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(data){		// A function to be called if request succeeds
					if(data == "0"){
						$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html(success_msg);
						$('.message-area').delay(5000).fadeOut(500);
					}else{
						$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
						$('.message-area').delay(5000).fadeOut(500);
					}
				}
			});
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});

	// Team validation
	$('.message-area').hide();
	$('.team-form').on('submit', function(e){
		e.preventDefault();
		var formId = $(this).attr('id');
		
		if(formId == 'team-edit'){
			var id = $.trim($('.id').val());
			var post_url = 'php/team-edit.php';
			var success_msg = 'Team has been Edited Successfully';
		}else{
			var post_url = 'php/team-add.php';
			var success_msg = 'Team has been Added Successfully';
		}

		var id = $.trim($('.id').val());
		var name = $.trim($('.team-name').val());
		var title = $.trim($('.team-title').val());
		var mail = $.trim($('.team-email').val());
		var phone = $.trim($('.team-phone').val());
		var img = $.trim($('.team-img').val());
		var result = '';
		
		if(name.length == 0){
			result += "<p>Please Enter Name.</p>";
		}
		if(title.length == 0){
			result += "<p>Please Enter Title.</p>";
		}
		if(mail.length == 0){
			result += "<p>Please Enter Email.</p>";
		}
		if(phone.length == 0){
			result += "<p>Please Enter Phone.</p>";
		}

		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').removeClass('success').addClass('loading').html('Authenticating, Please Wait!!');
			$.ajax({
				url: post_url,   	// Url to which the request is send
				type: "POST",					// Type of request to be send, called as method
				data:  new FormData(this), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
				cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(data){		// A function to be called if request succeeds
					if(data == "0"){
						$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html(success_msg);
						$('.message-area').delay(5000).fadeOut(500);
					}else{
						$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
						$('.message-area').delay(5000).fadeOut(500);
					}
				}
			});
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
	// Process validation
	$('.message-area').hide();
	$('.process-form').on('submit', function(e){
		e.preventDefault();
		var formId = $(this).attr('id');
		
		if(formId == 'process-edit'){
			var id = $.trim($('.id').val());
			var post_url = 'php/process-edit.php';
			var success_msg = 'Process has been Edited Successfully';
		}else{
			var post_url = 'php/process-add.php';
			var success_msg = 'Process has been Added Successfully';
		}

		var title = $.trim($('.process-title').val());
		var img = $.trim($('.process-img').val());
		var result = '';
		
		if(title.length == 0){
			result += "<p>Please Enter Title.</p>";
		}
		if(img == ''){
			result += "<p>Please Select Image.</p>";
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').removeClass('success').addClass('loading').html('Authenticating, Please Wait!!');
			$.ajax({
				url: post_url,   	// Url to which the request is send
				type: "POST",					// Type of request to be send, called as method
				data:  new FormData(this), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
				cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(data){		// A function to be called if request succeeds
					if(data == "0"){
						$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html(success_msg);
						$('.message-area').delay(5000).fadeOut(500);
					}else{
						$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
						$('.message-area').delay(5000).fadeOut(500);
					}
				}
			});
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
	// Category validation
	$('.cat-form').on('submit', function(e){
		e.preventDefault();
		var formId = $(this).attr('id');
		
		if(formId == 'cat-edit'){
			var id = $.trim($('.id').val());
			var post_url = 'php/category-edit.php';
			var success_msg = 'Category has been Edited Successfully';
		}else{
			var post_url = 'php/category-add.php';
			var success_msg = 'Category has been Added Successfully';
		}

		var title = $.trim($('.cat-title').val());
		var result = '';
		
		if(title.length == 0){
			result += "<p>Please Enter Title.</p>";
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').removeClass('success').addClass('loading').html('Authenticating, Please Wait!!');
			$.ajax({
				url: post_url,   	// Url to which the request is send
				type: "POST",					// Type of request to be send, called as method
				data:  new FormData(this), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
				cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(data){		// A function to be called if request succeeds
					if(data == "0"){
						$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html(success_msg);
						$('.message-area').delay(5000).fadeOut(500);
					}else{
						$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
						$('.message-area').delay(5000).fadeOut(500);
					}
				}
			});
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
	// Products validation
	$('.prod-form').on('submit', function(e){
		e.preventDefault();
		var formId = $(this).attr('id');
		
		if(formId == 'prod-edit'){
			var id = $.trim($('.id').val());
			var post_url = 'php/products-edit.php';
			var success_msg = 'Products has been Edited Successfully';
		}else{
			var post_url = 'php/products-add.php';
			var success_msg = 'Products has been Added Successfully';
		}

		var title = $.trim($('.prod-title').val());
		var prod_cat = $.trim($('.prod-cat').val());
		var article = $.trim($('.prod-article').val());
		var featured = $.trim($('.featured').val());
		var desc = $.trim($('.prod-desc').val());
		var img = $.trim($('.prod-img').val());
		var result = '';
		
		if(title.length == 0){
			result += "<p>Please Enter Title.</p>";
		}
		if(prod_cat == 'select'){
			result += "<p>Please Select Category.</p>";
		}
		if(article.length == 0){
			result += "<p>Please Enter Article.</p>";
		}
		if(featured.length == 'select'){
			result += "<p>Please Select Featured.</p>";
		}
		if(desc.length == 0){
			result += "<p>Please Enter Description.</p>";
		}
		if(img == ''){
			result += "<p>Please Select Image.</p>";
		}
	
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').removeClass('success').addClass('loading').html('Authenticating, Please Wait!!');
			$.ajax({
				url: post_url,   	// Url to which the request is send
				type: "POST",					// Type of request to be send, called as method
				data:  new FormData(this), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
				cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(data){		// A function to be called if request succeeds
					if(data == "0"){
						$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html(success_msg);
						$('.message-area').delay(5000).fadeOut(500);
					}else{
						$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
						$('.message-area').delay(5000).fadeOut(500);
					}
				}
			});
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
	// Certification validation
	$('.message-area').hide();
	$('.certification-form').on('submit', function(e){
		e.preventDefault();
		var formId = $(this).attr('id');
		
		if(formId == 'certification-edit'){
			var id = $.trim($('.id').val());
			var post_url = 'php/certification-edit.php';
			var success_msg = 'Certifications has been Edited Successfully';
		}else{
			var post_url = 'php/certification-add.php';
			var success_msg = 'Certifications has been Added Successfully';
		}

		var title = $.trim($('.certification-title').val());
		var desc = $.trim($('.certification-desc').val());
		var year = $.trim($('.year').val());
		var img = $.trim($('.certification-img').val());
		var result = '';
		
		if(title.length == 0){
			result += "<p>Please Enter Title.</p>";
		}
		if(desc == ''){
			result += "<p>Please Enter Description.</p>";
		}
		if(year == 'select'){
			result += "<p>Please Select Year.</p>";
		}
		if(img == ''){
			result += "<p>Please Select Image.</p>";
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').removeClass('success').addClass('loading').html('Authenticating, Please Wait!!');
			$.ajax({
				url: post_url,   	// Url to which the request is send
				type: "POST",					// Type of request to be send, called as method
				data:  new FormData(this), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
				cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(data){		// A function to be called if request succeeds
					if(data == "0"){
						$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html(success_msg);
						$('.message-area').delay(5000).fadeOut(500);
					}else{
						$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
						$('.message-area').delay(5000).fadeOut(500);
					}
				}
			});
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});

	// Special Announcements validation
	$('.message-area').hide();
	$('.special-form').on('submit', function(e){
		e.preventDefault();
		var formId = $(this).attr('id');
		
		if(formId == 'special-edit'){
			var id = $.trim($('.id').val());
			var post_url = 'php/special-edit.php';
			var success_msg = 'Special Announcement has been Edited Successfully';
		}else{
			var post_url = 'php/special-add.php';
			var success_msg = 'Special Announcement has been Added Successfully';
		}

		var desc = $.trim($('.special-desc').val());
		var img = $.trim($('.special-img').val());
		var date = $.trim($('.special-date').val());
		var result = '';
		
		if(desc == '' && img == ''){
			result += "<p>Please Write an Announcement OR Upload an Image.</p>";
		}
		if(date == ''){
			result += "<p>Please Select Ending Date.</p>";
		}

		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').removeClass('success').addClass('loading').html('Authenticating, Please Wait!!');
			$.ajax({
				url: post_url,   	// Url to which the request is send
				type: "POST",					// Type of request to be send, called as method
				data:  new FormData(this), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
				cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(data){		// A function to be called if request succeeds
					if(data == "0"){
						$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html(success_msg);
						$('.message-area').delay(5000).fadeOut(500);
					}else{
						$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
						$('.message-area').delay(5000).fadeOut(500);
					}
				}
			});
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});

	// Contact validation
	$('.message-area').hide();
	$('.contact-form').on('submit', function(e){
		e.preventDefault();
		var formId = $(this).attr('id');
		
		if(formId == 'contact-edit'){
			var id = $.trim($('.id').val());
			var post_url = 'php/contact-edit.php';
			var success_msg = 'contact has been Edited Successfully';
		}else{
			var post_url = 'php/contact-add.php';
			var success_msg = 'contact has been Added Successfully';
		}

		var addr = $.trim($('.address').val());
		var phone = $.trim($('.phone').val());
		var map = $.trim($('.map').val());
		var result = '';
		
		if(addr == ''){
			result += "<p>Please Enter Address.</p>";
		}
		if(phone == ''){
			result += "<p>Please Enter Phone Number(s).</p>";
		}
		if(map == ''){
			result += "<p>Please Enter code for Map.</p>";
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').removeClass('success').addClass('loading').html('Authenticating, Please Wait!!');
			$.ajax({
				url: post_url,   	// Url to which the request is send
				type: "POST",					// Type of request to be send, called as method
				data:  new FormData(this), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
				cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(data){		// A function to be called if request succeeds
					if(data == "0"){
						$('.message-area').fadeIn(500).removeClass('error').removeClass('loading').addClass('success').html(success_msg);
						$('.message-area').delay(5000).fadeOut(500);
					}else{
						$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(data);
						$('.message-area').delay(5000).fadeOut(500);
					}
				}
			});
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').removeClass('success').addClass('error').html(result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
});

// clock function
	function updateClock(){
		var currentTime = new Date ( );
		var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
		var dayNames = [ "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
		var currentHours = currentTime.getHours ( );
		var currentMinutes = currentTime.getMinutes ( );
		var currentSeconds = currentTime.getSeconds ( );
		var currentDay = dayNames[currentTime.getDay()];
		var currentDate = currentTime.getDate();
		var currentMonth = monthNames[currentTime.getMonth()];
		var currentYear = currentTime.getFullYear();
		
		// Pad the minutes and seconds with leading zeros, if required
		currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
		currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
		// Choose either "AM" or "PM" as appropriate
		var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
		// Convert the hours component to 12-hour format if needed
		/*currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;*/
		// Convert an hours component of "0" to "12"
		currentHours = ( currentHours == 0 ) ? 12 : currentHours;
		// Compose the string for display
		var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + /*timeOfDay+ " " +*/currentDay+' '+currentDate+' '+currentMonth+' '+currentYear; 
		$(".clock").html(currentTimeString);
			 
	 }

// page init
jQuery(function(){
	initTabs();
	initTooltip();
});

// content tabs init
function initTabs() {
	jQuery('.side-nav ul').contentTabs({
		addToParent: true,
		animSpeed: !jQuery.support.opacity ? 0 : 400,
		effect: 'fade',
		tabLinks: 'a'
	});
}

// hover tooltip init
function initTooltip() {
	jQuery('a[title]').hoverTooltip({
		attribute: 'title',
		positionTypeX: 'center',
		positionTypeY: 'bottom'
	});
}

/*
 * jQuery Tabs plugin
 */
;(function($){
	$.fn.contentTabs = function(o){
		// default options
		var options = $.extend({
			activeClass:'active',
			addToParent:false,
			autoHeight:false,
			autoRotate:false,
			checkHash:false,
			animSpeed:400,
			switchTime:3000,
			effect: 'none', // "fade", "slide"
			tabLinks:'a',
			attrib:'href',
			event:'click'
		},o);

		return this.each(function(){
			var tabset = $(this), tabs = $();
			var tabLinks = tabset.find(options.tabLinks);
			var tabLinksParents = tabLinks.parent();
			var prevActiveLink = tabLinks.eq(0), currentTab, animating;
			var tabHolder;

			// handle location hash
			if(options.checkHash && tabLinks.filter('[' + options.attrib + '="' + location.hash + '"]').length) {
				(options.addToParent ? tabLinksParents : tabLinks).removeClass(options.activeClass);
				setTimeout(function() {
					window.scrollTo(0,0);
				},1);
			}

			// init tabLinks
			tabLinks.each(function(){
				var link = $(this);
				var href = link.attr(options.attrib);
				var parent = link.parent();
				href = href.substr(href.lastIndexOf('#'));

				// get elements
				var tab = $(href).hide();
				tabs = tabs.add(tab);
				link.data('cparent', parent);
				link.data('ctab', tab);

				// find tab holder
				if(!tabHolder && tab.length) {
					tabHolder = tab.parent();
				}

				// show only active tab
				var classOwner = options.addToParent ? parent : link;
				if(classOwner.hasClass(options.activeClass) || (options.checkHash && location.hash === href)) {
					classOwner.addClass(options.activeClass);
					prevActiveLink = link; currentTab = tab;
					tab.removeClass(tabHiddenClass).width('');
					contentTabsEffect[options.effect].show({tab:tab, fast:true});
				} else {
					var tabWidth = tab.width();
					if(tabWidth) {
						tab.width(tabWidth);
					}
					tab.addClass(tabHiddenClass);
				}

				// event handler
				link.bind(options.event, function(e){
					if(link != prevActiveLink && !animating) {
						switchTab(prevActiveLink, link);
						prevActiveLink = link;
					}
				});
				if(options.attrib === 'href') {
					link.bind('click', function(e){
						e.preventDefault();
					});
				}
			});

			// tab switch function
			function switchTab(oldLink, newLink) {
				animating = true;
				var oldTab = oldLink.data('ctab');
				var newTab = newLink.data('ctab');
				prevActiveLink = newLink;
				currentTab = newTab;

				// refresh pagination links
				(options.addToParent ? tabLinksParents : tabLinks).removeClass(options.activeClass);
				(options.addToParent ? newLink.data('cparent') : newLink).addClass(options.activeClass);

				// hide old tab
				resizeHolder(oldTab, true);
				contentTabsEffect[options.effect].hide({
					speed: options.animSpeed,
					tab:oldTab,
					complete: function() {
						// show current tab
						resizeHolder(newTab.removeClass(tabHiddenClass).width(''));
						contentTabsEffect[options.effect].show({
							speed: options.animSpeed,
							tab:newTab,
							complete: function() {
								if(!oldTab.is(newTab)) {
									oldTab.width(oldTab.width()).addClass(tabHiddenClass);
								}
								animating = false;
								resizeHolder(newTab, false);
								autoRotate();
							}
						});
					}
				});
			}

			// holder auto height
			function resizeHolder(block, state) {
				var curBlock = block && block.length ? block : currentTab;
				if(options.autoHeight && curBlock) {
					tabHolder.stop();
					if(state === false) {
						tabHolder.css({height:''});
					} else {
						var origStyles = curBlock.attr('style');
						curBlock.show().css({width:curBlock.width()});
						var tabHeight = curBlock.outerHeight(true);
						if(!origStyles) curBlock.removeAttr('style'); else curBlock.attr('style', origStyles);
						if(state === true) {
							tabHolder.css({height: tabHeight});
						} else {
							tabHolder.animate({height: tabHeight}, {duration: options.animSpeed});
						}
					}
				}
			}
			if(options.autoHeight) {
				$(window).bind('resize orientationchange', function(){
					tabs.not(currentTab).removeClass(tabHiddenClass).show().each(function(){
						var tab = jQuery(this), tabWidth = tab.css({width:''}).width();
						if(tabWidth) {
							tab.width(tabWidth);
						}
					}).hide().addClass(tabHiddenClass);

					resizeHolder(currentTab, false);
				});
			}

			// autorotation handling
			var rotationTimer;
			function nextTab() {
				var activeItem = (options.addToParent ? tabLinksParents : tabLinks).filter('.' + options.activeClass);
				var activeIndex = (options.addToParent ? tabLinksParents : tabLinks).index(activeItem);
				var newLink = tabLinks.eq(activeIndex < tabLinks.length - 1 ? activeIndex + 1 : 0);
				prevActiveLink = tabLinks.eq(activeIndex);
				switchTab(prevActiveLink, newLink);
			}
			function autoRotate() {
				if(options.autoRotate && tabLinks.length > 1) {
					clearTimeout(rotationTimer);
					rotationTimer = setTimeout(function() {
						if(!animating) {
							nextTab();
						} else {
							autoRotate();
						}
					}, options.switchTime);
				}
			}
			autoRotate();
		});
	};

	// add stylesheet for tabs on DOMReady
	var tabHiddenClass = 'js-tab-hidden';
	$(function() {
		var tabStyleSheet = $('<style type="text/css">')[0];
		var tabStyleRule = '.'+tabHiddenClass;
		tabStyleRule += '{position:absolute !important;left:-9999px !important;top:-9999px !important;display:block !important}';
		if (tabStyleSheet.styleSheet) {
			tabStyleSheet.styleSheet.cssText = tabStyleRule;
		} else {
			tabStyleSheet.appendChild(document.createTextNode(tabStyleRule));
		}
		$('head').append(tabStyleSheet);
	});

	// tab switch effects
	var contentTabsEffect = {
		none: {
			show: function(o) {
				o.tab.css({display:'block'});
				if(o.complete) o.complete();
			},
			hide: function(o) {
				o.tab.css({display:'none'});
				if(o.complete) o.complete();
			}
		},
		fade: {
			show: function(o) {
				if(o.fast) o.speed = 1;
				o.tab.fadeIn(o.speed);
				if(o.complete) setTimeout(o.complete, o.speed);
			},
			hide: function(o) {
				if(o.fast) o.speed = 1;
				o.tab.fadeOut(o.speed);
				if(o.complete) setTimeout(o.complete, o.speed);
			}
		},
		slide: {
			show: function(o) {
				var tabHeight = o.tab.show().css({width:o.tab.width()}).outerHeight(true);
				var tmpWrap = $('<div class="effect-div">').insertBefore(o.tab).append(o.tab);
				tmpWrap.css({width:'100%', overflow:'hidden', position:'relative'}); o.tab.css({marginTop:-tabHeight,display:'block'});
				if(o.fast) o.speed = 1;
				o.tab.animate({marginTop: 0}, {duration: o.speed, complete: function(){
					o.tab.css({marginTop: '', width: ''}).insertBefore(tmpWrap);
					tmpWrap.remove();
					if(o.complete) o.complete();
				}});
			},
			hide: function(o) {
				var tabHeight = o.tab.show().css({width:o.tab.width()}).outerHeight(true);
				var tmpWrap = $('<div class="effect-div">').insertBefore(o.tab).append(o.tab);
				tmpWrap.css({width:'100%', overflow:'hidden', position:'relative'});

				if(o.fast) o.speed = 1;
				o.tab.animate({marginTop: -tabHeight}, {duration: o.speed, complete: function(){
					o.tab.css({display:'none', marginTop:'', width:''}).insertBefore(tmpWrap);
					tmpWrap.remove();
					if(o.complete) o.complete();
				}});
			}
		}
	};
}(jQuery));

/*
 * jQuery Tooltip plugin
 */
;(function($){
	$.fn.hoverTooltip = function(o) {
		var options = $.extend({
			tooltipStructure: '<div class="hover-tooltip"><div class="tooltip-text"></div></div>',
			tooltipSelector: '.tooltip-text',
			positionTypeX: 'right',
			positionTypeY: 'top',
			attribute:'title',
			extraOffsetX: 10,
			extraOffsetY: 10,
			showOnTouchDevice: true
		},o);
		
		// create tooltip
		var tooltip = $('<div>').html(options.tooltipStructure).children().css({position:'absolute'});
		var tooltipTextBox = tooltip.find(options.tooltipSelector);
		var tooltipWidth, tooltipHeight;
		
		
		// tooltip logic
		function initTooltip(item) {
			var tooltipText = item.attr(options.attribute);
			item.removeAttr(options.attribute);
			if(!tooltipText) return;

			if(isTouchDevice) {
				if(options.showOnTouchDevice) {
					item.bind('touchstart', function(e) {
						showTooltip(item, tooltipText, getEvent(e));
						jQuery(document).one('touchend', hideTooltip);
					});
				}
			} else {
				item.bind('mouseenter', function(e) {
					showTooltip(item, tooltipText, e);
				}).bind('mouseleave', hideTooltip).bind('mousemove', moveTooltip);
			}
		}
		function showTooltip(item, text, e) {
			tooltipTextBox.html(text);
			tooltip.appendTo(document.body).show();
			tooltipWidth = tooltip.outerWidth(true);
			tooltipHeight = tooltip.outerHeight(true);
			moveTooltip(e, item);
		}
		function hideTooltip() {
			tooltip.remove();
		}
		function moveTooltip(e) {
			var top, left, x = e.pageX, y = e.pageY;

			switch(options.positionTypeY) {
				case 'top':
					top = y - tooltipHeight - options.extraOffsetY;
					break;
				case 'center':
					top = y - tooltipHeight / 2;
					break;
				case 'bottom':
					top = y + options.extraOffsetY;
					break;
			}

			switch(options.positionTypeX) {
				case 'left':
					left = x - tooltipWidth - options.extraOffsetX;
					break;
				case 'center':
					left = x - tooltipWidth / 2;
					break;
				case 'right':
					left = x + options.extraOffsetX;
					break;
			}
			
			tooltip.css({
				top: top,
				left: left
			});
		}
		
		// add handlers
		return this.each(function(){
			initTooltip($(this));
		});
	};
	
	// parse event
	function getEvent(e) {
		return e.originalEvent.changedTouches ? e.originalEvent.changedTouches[0] : e;
	}
	
	// detect device type
	var isTouchDevice = (function() {
		try {
			return ('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch;
		} catch (e) {
			return false;
		}
	}());
	
}(jQuery));