$('document').ready(function(){

	function reset() {
		$('input[name="name"]').val('');
		$('select[name="gender"]').val('');
		$('input[name="email"]').val('');
		$('input[name="mobile"]').val('');
		$('input[name="language"]').val('');
		$('input[name="address"]').val('');
		$('input[name="pin"]').val('');
		$('input[name="city"]').val('');
		$('select[name="state"]').val('');
		$('input[name="password"]').val('');
		$('input[name="expertise"]').val('');
		$('input[name="experience"]').val('');
		$('select[name="court"]').val('');
		$('input[name="barcode"]').val('');
		$('input[name="telcon"]').val('');
		$('input[name="mecon"]').val('');
		$('input[name="casefee"]').val('');
		$('textarea[name="bio"]').val('');
		$('input[name="retype"]').val('');
	}

	$('.register').on('click',function(){

		var btn = $(this);
		var name       = $('input[name="name"]').val();
		if (name === "") {
			$('input[name="name"]').css("border-color", "red");
			$('input[name="name"]').focus();
			$('.error').html('please enter name!!');
			return false;
		} else {
			$('input[name="name"]').css("border-color", "initial");
		}
		
		var gender     = $('select[name="gender"]').val();
		if (gender === "") {
			$('select[name="gender"]').css("border-color", "red");
			$('select[name="gender"]').focus();
			$('.error').html('Please enter Gender!!');
			return false;
		} else {
			$('select[name="gender"]').css("border-color", "initial");
		}
		
		var email      = $('input[name="email"]').val();
		if (email === "") {
			$('input[name="email"]').css("border-color", "red");
			$('input[name="email"]').focus();
			$('.error').html('Please enter Email!!');
			return false;
		} else {
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))  {
				$('input[name="email"]').css("border-color", "initial");
			} else {
				$('input[name="email"]').css("border-color", "red");
				$('input[name="email"]').focus();
				$('.error').html('Please enter Valid Email!!');
				return false;				
			}
		}
		
		var mobile     = $('input[name="mobile"]').val();
		if (mobile === "") {
			$('input[name="mobile"]').css("border-color", "red");
			$('input[name="mobile"]').focus();
			$('.error').html('Please enter Mobile!!');
			return false;
		} else {
			if (!mobile.match('[0-9]{10}')) {
				$('input[name="mobile"]').css("border-color", "red");
				$('input[name="mobile"]').focus();
				$('.error').html('Please enter Valid Mobile!!');
				return false;
			} else {
				$('input[name="mobile"]').css("border-color", "initial");
			}
		}
		
		var language   = $('input[name="language"]').val();
		if (language === "") {
			$('input[name="language"]').css("border-color", "red");
			$('input[name="language"]').focus();
			$('.error').html('Please enter Language Speaks!!');
			return false;
		} else {
			$('input[name="language"]').css("border-color", "initial");
		}
		
		var address    = $('input[name="address"]').val();
		if (address === "") {
			$('input[name="address"]').css("border-color", "red");
			$('input[name="address"]').focus();
			$('.error').html('Please enter Address!!');
			return false;
		} else {
			$('input[name="address"]').css("border-color", "initial");
		}
		
		var pin        = $('input[name="pin"]').val();
		if (pin === "") {
			$('input[name="pin"]').css("border-color", "red");
			$('input[name="pin"]').focus();
			$('.error').html('Please enter PIN!!');
			return false;
		} else {
			$('input[name="pin"]').css("border-color", "initial");
		}
		
		var city       = $('input[name="city"]').val();
		if (city === "") {
			$('input[name="city"]').css("border-color", "red");
			$('input[name="city"]').focus();
			$('.error').html('Please enter City!!');
			return false;
		} else {
			$('input[name="city"]').css("border-color", "initial");
		}
		
		var state      = $('select[name="state"]').val();
		if (state === "") {
			$('select[name="state"]').css("border-color", "red");
			$('select[name="state"]').focus();
			$('.error').html('Please enter State!!');
			return false;
		} else {
			$('select[name="state"]').css("border-color", "initial");
		}
		
		var password   = $('input[name="password"]').val();
		if (password === "") {
			$('input[name="password"]').css("border-color", "red");
			$('input[name="password"]').focus();
			$('.error').html('Please enter Password!!');
			return false;
		} else {
			$('input[name="password"]').css("border-color", "initial");
		}
		
		var expertise  = $('input[name="expertise"]').val();
		if (expertise === "") {
			$('input[name="expertise"]').css("border-color", "red");
			$('input[name="expertise"]').focus();
			$('.error').html('Please enter Practice Area (Expertise)!!');
			return false;
		} else {
			$('input[name="expertise"]').css("border-color", "initial");
		}
		
		var experience = $('input[name="experience"]').val();
		if (experience === "") {
			$('input[name="experience"]').css("border-color", "red");
			$('input[name="experience"]').focus();
			$('.error').html('Please enter Practicing Since!!');
			return false;
		} else {
			$('input[name="experience"]').css("border-color", "initial");
		}
		
		var court      = $('select[name="court"]').val();
		if (court === "") {
			$('select[name="court"]').css("border-color", "red");
			$('select[name="court"]').focus();
			$('.error').html('Please enter Practice Courts!!');
			return false;
		} else {
			$('select[name="court"]').css("border-color", "initial");
		}
		
		var barcode    = $('input[name="barcode"]').val();
		if (barcode === "") {
			$('input[name="barcode"]').css("border-color", "red");
			$('input[name="barcode"]').focus();
			$('.error').html('Please enter Bar Council ID!!');
			return false;
		} else {
			$('input[name="barcode"]').css("border-color", "initial");
		}
		
		var telcon     = $('input[name="telcon"]').val();
		if (telcon === "") {
			$('input[name="telcon"]').css("border-color", "red");
			$('input[name="telcon"]').focus();
			$('.error').html('Please enter Telephonic Consultation fee!!');
			return false;
		} else {
			$('input[name="telcon"]').css("border-color", "initial");
		}
		
		var mecon      = $('input[name="mecon"]').val();
		if (mecon === "") {
			$('input[name="mecon"]').css("border-color", "red");
			$('input[name="mecon"]').focus();
			$('.error').html('Please enter Meeting Consultation fee!!');
			return false;
		} else {
			$('input[name="mecon"]').css("border-color", "initial");
		}
		
		var casefee    = $('input[name="casefee"]').val();
		if (casefee === "") {
			$('input[name="casefee"]').css("border-color", "red");
			$('input[name="casefee"]').focus();
			$('.error').html('Please enter Case Filing fee!!');
			return false;
		} else {
			$('input[name="casefee"]').css("border-color", "initial");
		}
		
		var bio        = $('textarea[name="bio"]').val();
		
		var retype     = $('input[name="retype"]').val();
		if (retype === "") {
			$('input[name="retype"]').css("border-color", "red");
			$('input[name="retype"]').focus();
			$('.error').html('Please enter Retype!!');
			return false;
		} else {
			$('input[name="retype"]').css("border-color", "initial");
		}
		
		var image     = $('input[name="image"]').val();
		/*if (name === "") {
			$('input[name="name"]').css("border-color", "red");
		} else {
			$('input[name="name"]').css("border-color", "initial");
		}*/

		if (password !== retype) {
			$('.error').html('password did not matched !');
			return false;
		}

		if (name==''||gender==''||email==''||mobile==''||language==''||address==''||pin==''||city==''||state==''||password==''||expertise==''||experience==''||court==''||barcode==''||telcon==''||mecon==''||casefee==''||bio==''||retype=='') {

			$('.error').html('please fill all the fields !!')
			return false;
		}
		
		$.ajax({

			type : 'POST',
			url : 'ajax.php',
			data: { 
				'register' : 'register',
				 name      : name      ,
				 gender    : gender    ,
				 email     : email     ,
				 mobile    : mobile    ,
				 language  : language  ,
				 address   : address   ,
				 pin       : pin       ,
				 city      : city      ,
				 state     : state     ,
				 password  : password  ,
				 expertise : expertise ,
				 experience: experience,
				 court     : court     ,
				 barcode   : barcode   ,
				 telcon    : telcon    ,
				 mecon     : mecon     ,
				 casefee   : casefee   ,
				 bio       : bio       ,
				 image 	   : image
		    },
			beforeSend:  function() {
				$('.error').html('');
				btn.val('Please wait...');

			},
			success :function(html) {
				btn.val('Submit');

				console.log(html);
				var data = $.parseJSON(html);

				if (data.status=='success') {

					$('.success').html('Successfuly registered! ');
					
					reset();
					/*setTimeout(function(){
					
						$('.success').hide();

					}, 5000);*/

				} else {
					$('.error').html(data.error);

				}


			}
		});


		return false;	
	});



	$(document).on('change', '#image_upload_file', function () {

var progressBar = $('.progressBar'), bar = $('.progressBar .bar'), percent = $('.progressBar .percent');


$('#image_upload_form').ajaxForm({
    beforeSend: function() {
        progressBar.fadeIn();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function(html, statusText, xhr, $form) {   
 // alert(html);
console.log(html);
    obj = $.parseJSON(html);  
    if(obj.status){   
      var percentVal = '100%';
      bar.width(percentVal)
      percent.html(percentVal);
      $("#imgArea>img").prop('src',obj.image_medium);    
      $('input[name="image"]').val(obj.name); 
    }else{
      alert(obj.error);
    }
    },
  complete: function(xhr) {
    progressBar.fadeOut();      
  } 
}).submit();    

});


	
});