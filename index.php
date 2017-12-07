<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<script type="text/javascript" src="jquery.js"></script> 
	<script>
	$(document).ready(function(){
		$('.form').submit(function (e) {
			e.preventDefault();
		    var formdata= new FormData(this);
		$.ajax({
		    type : 'POST',
		    url : 'ajax.php',
		    data : formdata,
		    cache:false,
		    contentType: false,
		    processData: false,
		    success : function(data) {
		     $('#demo').html(data);
		     $('#img').val('');              
		    },
		    error : function(request,error)
		    {
		        alert("Request: "+JSON.stringify(request));
		    }
		 });
	   });
	});
	</script>
</head>
<body>
<form method="post" class="form" enctype="multipart/form-data"> 
 <input type="file" name="img1" id="img">
 <input type="submit" name="sub" value="Uplaod">
 </form>
 <div id="demo"></div>
</body>
</html>