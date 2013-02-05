<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
    <head>
    <title>Stylist Submission</title>
    <link href="css/stylist.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type='text/javascript'>
     function uploadPic() {
     	$('#injection_site_holder').show();
     	$('#grid-main-style').css("background-color","white");
     	$('#grid-main-style').css("border","none");
     	$('#item_image_url').val("");
     }
    </script>
    </head>
    <body>
    <div id="submission-content">
	     <div id="display-style-grid">
	        <div id="look-holder">
	        			<div id="grid-main-style">
	        			<div id="injection_site_holder">
	        				<!-- Load Feather code -->
							<script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
							
							<!-- Instantiate Feather -->
							<script type='text/javascript'>
							   var featherEditor = new Aviary.Feather({
							       apiKey: 'x35dXvN4f0ig_1s4Lhq3fg',
							       apiVersion: 2,
							       tools: 'resize,crop,text,orientation',
							       appendTo: 'injection_site',
							       onSave: function(imageID, newURL) {
							           var img = document.getElementById(imageID);
							           img.src = newURL;
							       },
							       onError: function(errorObj) {
							           alert(errorObj.message);
							       }
							   });
							   function launchEditor(id, src) {
							       featherEditor.launch({
							           image: id,
							           url: src
							       });
							      return false;
							   }
							</script>
							
							<div id='injection_site'></div>
							
							<img id='image1' width="400" src='http://localhost/staging/styleleague/img/stylist-image1.2.jpg'/>
							
							<!-- Add an edit button, passing the HTML id of the image and the public URL of the image -->
							<p id="edit-av"><input type='image' src='http://images.aviary.com/images/edit-photo.png' value='Edit photo' onclick="return launchEditor('image1', 'http://localhost/staging/styleleague/img/stylist-image1.2.jpg');" /></p>
						</div>
	        			</div>
			          <div id="accessory-list">
			          	<ul>
							    <li><a href="#"><img id='image2' width="180" src='img/stylist-access1.jpg'/></a></li>
							    <li><a href="#"><img id='image3' width="180"  src='img/stylist-access2.jpg'/></a></li>
							    <li><a href="#"><img id='image4' width="180"  src='img/stylist-access3.jpg'/></a></li>
							</ul>
					   </div>
		    </div> <!--look-holder-->     
	 	</div> <!--display-style-grid-->
	 	<div id="build-style-grid">
		      <div id="grid-form">
				    <form>
				    <label for="item_image_url">Enter Item Image URL:</label>
				    <div id="grid-item-image-url"><INPUT TYPE="text" NAME="item_image_url" id="item_image_url" VALUE="" size="25"></div>
				    <label for="item_price">Enter Item Price:</label>
				    <div id="grid-item-price"><INPUT TYPE="text" NAME="item_price" VALUE="" size="5"></div>
				     <div id="submit-me" onclick="uploadPic()"><div id="upload-button-text">UPLOAD</div></div>
				    </form>
			    </div>
		  </div><!--build-style-grid-->	 
		  <div id="style-pitch" style="vertical-align:top;margin-top:10px;border:solid black;background-color:black;">
		    	<form>
			    <label style="background-color:black;color:white;">Pitch your style (optional):</label>
			    <INPUT TYPE="textarea" style="width: 600px; height: 100px;">
			    </form>
		    </div>
		    <div id="save-me"><div id="save-button-text">SUBMIT STYLE</div></div>	
    </div><!--submission content -->
    </body>
    </html>