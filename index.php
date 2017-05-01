<!DOCTYPE html>
<html>
<head>
  <meta name="description" content="1.3.8 - Styling Nodes in the DOM">
  <meta charset="utf-8">
  <title>DOM Events</title>
  <link rel="stylesheet" href="style.css" media="screen" charset="utf-8">
</head>
<body>
  <h1>Form Builder</h1>

	<div class="">
		<h2>Form</h2>
	  
		<div id="drag-and-drop-demo">
			
			<div class="col-1-2">
				<div class="droppable">
					<h2>Drop Zone</h2>
				</div>
			</div>
		  
			<div class="col-1-2">
				<div class="draggable items">
					<h2>Draggables</h2>
					<div class="draggable item move" draggable="true">Move Me!</div>
					<div class="draggable item copy" draggable="true">Copy Me!</div>
					<ol class="field_type">
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="text" value="Single Line Text"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="textarea" value="Paragraph Text"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="select" value="Drop Down"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="multiselect" value="Multi Select"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="number" value="Number"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="checkbox" value="Checkboxes"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="radio" value="Radio Buttons"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="hidden" value="Hidden"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="html" value="HTML"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="section" value="Section"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="page" value="Page"></li>
					
					</ol>
					
					<ol class="field_type">
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="name" value="Name"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="date" value="Date"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="time" value="Time"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="phone" value="Phone"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="address" value="Address"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="website" value="Website"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="email" value="Email"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="fileupload" value="File Upload"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="captcha" value="CAPTCHA"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" data-type="list" value="List"></li>
						<li><input type="button" class="button ui-draggable ui-draggable-handle" value="Signature" data-type="signature" onclick=
						"StartAddField('signature');" onkeypress="StartAddField('signature');"></li>
					</ol>
				</div>
			</div>
		  
		</div>

	</div>
  
	

  
  <footer>Footer: Welcome</footer>

<script src="app.js"></script>
</body>
</html>
