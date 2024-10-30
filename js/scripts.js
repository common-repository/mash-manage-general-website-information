
jQuery(function($){
	
	var code;
	
	$('.mash_dynamic_button').click(function(){
		
		$('.codesaved').fadeOut('slow');
	
		code = $(this).parent().prev().find('input').attr('id');
	
		codeStrip();
	});
	
	function codeStrip(){
	
		code = code.replace('mash_dynamic_', '');	
		
		showCode();
		
	}
	
	function showCode(){
		
		if($('.messagecontainer').length){
		$('.messagecontainer').fadeOut('slow', function(){
			var fullcode = 'echo getWebOptions(\'' + code +'\');';
			$('.messagecontainer').html('<div style="width:99%; padding: 5px;" class="codemessage updated below-h2"><p>Insert the following code into your themes template files: <span class="insert-code-here" style="padding: 6px 20px; background-color: #FA8D03; color: #fff; margin-left: 21px; font-weight: bold;"></span></p></div>');
			$('.insert-code-here').text('<?php ' + fullcode + ' ?>');
			});
		$('.messagecontainer').fadeIn();
		}
		else{
			var fullcode = 'echo getWebOptions(\'' + code +'\');';
		$('#poststuff').before('<div class="messagecontainer"> <div style="display: none;" style="width:99%; padding: 5px;" class="codemessage updated below-h2"><p>Insert the following code into your themes template files: <span class="insert-code-here" style="padding: 6px 20px; background-color: #FA8D03; color: #fff; margin-left: 21px; font-weight: bold;"></span></p></div></div>');
			$('.insert-code-here').text('<?php ' + fullcode + ' ?>');
		$('.codemessage').fadeIn(800);
		}
	}
	
	$('.mash-schema-button').click(function(){
		if($('.messagecontainer').length){
		$('.messagecontainer').fadeOut('slow', function(){
			$('.messagecontainer').remove();
		});
		}
		else{
	   var fullcode = 'echo getSchemaOptions();';
		$('#poststuff').before('<div class="messagecontainer"> <div style="display: none;" style="width:99%; padding: 5px;" class="codemessage updated below-h2"><p>Insert the following code into your themes template files: <span class="insert-code-here" style="padding: 6px 20px; background-color: #FA8D03; color: #fff; margin-left: 21px; font-weight: bold;"></span></p></div></div>');
		$('.insert-code-here').text('<?php ' + fullcode + ' ?>');
		$('.codemessage').fadeIn(800);
		}
	});
	
	
	$('.mash-schema-button-short-code').click(function(){
		if($('.short-codemessagecontainer').length){
			$('.short-codemessagecontainer').fadeOut('slow', function(){
				$('.short-codemessagecontainer').remove();
			});
		}
		else{
	 	$('#poststuff').before('<div class="short-codemessagecontainer"> <div style="display: none;" style="width:99%; padding: 5px;" class="codemessage updated below-h2"><p>Insert the following shortcode into your post or page: <span style="padding: 6px 20px; background-color: #FA8D03; color: #fff; margin-left: 21px; font-weight: bold;">[local-schema]</span></p></div></div>');
		
		$('.codemessage').fadeIn(800);
		}
	});
	
	
	
});
