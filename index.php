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
				</div>
			</div>
		  
		</div>

	</div>
  
	

  
  <footer>Footer: Welcome</footer>

<script src="app.js"></script>
</body>
</html>
