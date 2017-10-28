$('document').ready(function(){

	$('.register').on('click',function(){

		var btn = $(this);
		var name       = $('input[name="name"]').val();
		var gender     = $('select[name="gender"]').val();
		var email      = $('input[name="email"]').val();
		var mobile     = $('input[name="mobile"]').val();
		var language   = $('input[name="language"]').val();
		var address    = $('input[name="address"]').val();
		var pin        = $('input[name="pin"]').val();
		var city       = $('input[name="city"]').val();
		var state      = $('input[name="state"]').val();
		var password   = $('input[name="password"]').val();
		var expertise  = $('input[name="expertise"]').val();
		var experience = $('input[name="experience"]').val();
		var court      = $('select[name="court"]').val();
		var barcode    = $('input[name="barcode"]').val();
		var telcon     = $('input[name="telcon"]').val();
		var mecon      = $('input[name="mecon"]').val();
		var casefee    = $('input[name="casefee"]').val();
		var bio        = $('textarea[name="bio"]').val();
		var retype     = $('input[name="retype"]').val();
		var image     = $('input[name="image"]').val();

		if (password!=retype) {

			$('.error').html('password did not matched !')
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
					
					setTimeout(function(){
					
						$('.success').hide();

					}, 5000);

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