<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/js/bootstrap-colorpicker.min.js"></script>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/css/bootstrap-colorpicker.min.css">
<script type="text/javascript">
	$(document).ready(function(){
		//color picker with addon
        $(".my-colorpicker").colorpicker().on('changeColor',function(ev) {
			var btn_color = document.getElementById("btn_color");
			var element_btn = angular.element(btn_color);
			element_btn.val(ev.color.toHex());
			element_btn.triggerHandler('input');
		});
		
		  $('#color-picker').colorpicker();
			
	});
</script>

</head>
<body>
	<div class="bs-example">
		<div class="rows">
			<div class="form-group" >
				 <label>Color picker</label>
				 <div>
					 <div class="input-group my-colorpicker colorpicker-element">
						 <input class="form-control" name="ctaBgColor" ng-model="ctaBgColor" title="btn_color" id="btn_color" type="text" value="<?php print "#000";?>'">
						 <div class="input-group-addon">
							 <i></i>
						 </div>
					 </div>
				 </div>
			</div>
			<div class="form-group" >
				 <label>Color picker 2</label>
				 <div>
					 <div class="input-group">
						 <input class="form-controln" id="color-picker"  type="text" value="<?php print "#d12682";?>'">
						<div class="input-group-addon">
							 <i></i>
						 </div>
					 </div>
				 </div>
			</div>
	    </div>		
	</div>
</body>
</html>              