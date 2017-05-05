<!DOCTYPE html>
<html>
<head>
  <meta name="description" content="1.3.8 - Styling Nodes in the DOM">
  <meta charset="utf-8">
  <title>Form Builder</title>
  <link rel="stylesheet" href="style.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" charset="utf-8">
  
	<!-- Latest compiled and minified CSS 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <h1>Form Builder</h1>

		<div id="drag-and-drop-box">

			<div class="col-1-2">
        <h2>Drop Zone</h2>
				<ul id="dropzone">
					<li id="item-1" class="draggable item ">
						<div class="item-header">
							<div class="pull-left">
							  Single Line Text: Field ID 1
							</div>
							<div class="pull-right">
							  <i class="open-close fa fa-caret-up" aria-hidden="true"></i>
							  <i class="duplicate fa fa-files-o" onclick="duplicateItem()" aria-hidden="true"></i>
							  <i class="delete fa fa-times" onclick="deleteItem()" aria-hidden="true"></i>
							</div>
						</div>
						<div class="inner-content">
							<input type="text" name="fName" value="Field Name"/>
						</div>
					</li>

				</ul>
			</div>

			<div class="col-1-2">
				<div class="draggable">

					<ol class="field_type">
						<li><input type="button" id="pegasus-single-text" class="button ui-draggable ui-draggable-handle" data-type="text" value="Single Line Text"></li>
						<li><input type="button" id="pegasus-textarea" class="button ui-draggable ui-draggable-handle" data-type="textarea" value="Paragraph Text"></li>
						<li><input type="button" id="pegasus-select" class="button ui-draggable ui-draggable-handle" data-type="select" value="Drop Down"></li>
						<li><input type="button" id="pegasus-multi-select" class="button ui-draggable ui-draggable-handle" data-type="multiselect" value="Multi Select"></li>
						<li><input type="button" id="pegasus-number" class="button ui-draggable ui-draggable-handle" data-type="number" value="Number"></li>
						<li><input type="button" id="pegasus-checkbox" class="button ui-draggable ui-draggable-handle" data-type="checkbox" value="Checkboxes"></li>
						<li><input type="button" id="pegasus-radio" class="button ui-draggable ui-draggable-handle" data-type="radio" value="Radio Buttons"></li>
						<li><input type="button" id="pegasus-hidden" class="button ui-draggable ui-draggable-handle" data-type="hidden" value="Hidden"></li>
						<li><input type="button" id="pegasus-html" class="button ui-draggable ui-draggable-handle" data-type="html" value="HTML"></li>
						<li><input type="button" id="pegasus-section" class="button ui-draggable ui-draggable-handle" data-type="section" value="Section"></li>
						<li><input type="button" id="pegasus-page" class="button ui-draggable ui-draggable-handle" data-type="page" value="Page"></li>
					</ol>

					<ol class="field_type">
						<li><input type="button" id="pegasus-name" class="button ui-draggable ui-draggable-handle" data-type="name" value="Name"></li>
						<li><input type="button" id="pegasus-date" class="button ui-draggable ui-draggable-handle" data-type="date" value="Date"></li>
						<li><input type="button" id="pegasus-time" class="button ui-draggable ui-draggable-handle" data-type="time" value="Time"></li>
						<li><input type="button" id="pegasus-phone" class="button ui-draggable ui-draggable-handle" data-type="phone" value="Phone"></li>
						<li><input type="button" id="pegasus-address" class="button ui-draggable ui-draggable-handle" data-type="address" value="Address"></li>
						<li><input type="button" id="pegasus-web" class="button ui-draggable ui-draggable-handle" data-type="website" value="Website"></li>
						<li><input type="button" id="pegasus-email" class="button ui-draggable ui-draggable-handle" data-type="email" value="Email"></li>
						<li><input type="button" id="pegasus-file" class="button ui-draggable ui-draggable-handle" data-type="fileupload" value="File Upload"></li>
						<li><input type="button" id="pegasus-cap" class="button ui-draggable ui-draggable-handle" data-type="captcha" value="CAPTCHA"></li>
						<li><input type="button" id="pegasus-list" class="button ui-draggable ui-draggable-handle" data-type="list" value="List"></li>
						<li><input type="button" id="pegasus-sig" class="button ui-draggable ui-draggable-handle" value="Signature" data-type="signature" onclick=
						"StartAddField('signature');" onkeypress="StartAddField('signature');"></li>
					</ol>
				</div>

			</div><!--end column-->

		</div><!-- end drag-and-drop-box -->
		
		<script>
			function duplicateItem() {
				var itemBox = document.querySelector('.duplicate');
				var dropBox = document.getElementById( 'dropzone' );
				
				newCopy = itemBox.parentElement.parentElement.parentElement.cloneNode( true);
				dropBox.appendChild( newCopy );
			}
			
			
			function deleteItem() {
				//console.log( this );
				//.remove();
			}
		</script>


<!-- Latest compiled and minified JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->
<script src="app.js"></script>
</body>
</html>
