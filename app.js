(function (window, document, undefined) {

	var dropBox = document.getElementById( 'dropzone' );
	var thebox;
	var thefield;
	var sText;
	var textArea;
	var count = 1;

	document.getElementById("pegasus-single-text").addEventListener("click", function(){
		sText = document.createElement( 'input' );
		sText.setAttribute( 'type', 'input_' + count );
		sText.setAttribute('name', 'input_' + count );
		//sText = createBox( sText );
		dropBox.appendChild( sText );
		count = count + 1;
	});

	document.getElementById("pegasus-textarea").addEventListener("click", function(){
		textArea = document.createElement( 'textarea' );
		textArea.setAttribute( 'rows', '4');
		textArea.setAttribute('cols', '50');
		//textArea = createBox( textArea );
		dropBox.appendChild( textArea );
		count = count + 1;
	});


	/*document.querySelector('.duplicate').addEventListener("click", function(){
		newCopy = this.parentElement.parentElement.parentElement.cloneNode( true);
		//newCopy.setAttribute(  );
		dropBox.appendChild( newCopy );
	});
	*/
	
	document.querySelector('.delete').addEventListener("click", function(){
		this.parentElement.parentElement.parentElement.remove();
	});
	
	
	
	

	function insertFirstbox() {
		let frag = document.createRange().createContextualFragment('<li id="item-1" class="draggable item "><div class="item-header"><div class="pull-left">Single Line Text: Field ID 1</div><div class="pull-right"><i class="open-close fa fa-caret-up" aria-hidden="true"></i><i class="duplicate fa fa-files-o" onclick="duplicateItem()" aria-hidden="true"></i><i class="delete fa fa-times" onclick="deleteItem()" aria-hidden="true"></i></div></div><div class="inner-content"><input type="text" name="fName" value="Field Name"/></div></li>');
		dropBox.appendChild( frag );
		/*var containingLi = document.createElement( 'li' );
		containingLi.setAttribute( 'id', 'item-' + count );
		containingLi.setAttribute( 'class', 'draggable' );
		containingLi.classList.add( 'item' );
		var headerDiv =  document.createElement( 'div' );
		headerDiv.setAttribute( 'class', 'item-header' );
		*/
		

	}



	function createBox() {
		//theBox = document.createElement( 'div' );
		//console.log( sText );
		//console.log( sText );
		//var dFrag = document.createDocumentFragment();
		//dFrag.appendChild( test.innerHTML );

		//theBox.appendChild( dFrag );

	}



	function initialize() {

		if ( dropBox.children.length >= 0 ) {
			insertFirstbox();
			//createBox();
			//dropBox.appendChild( theBox );
		}

	}

	initialize();


})(window, document);





$(document).ready(function() {
	// executes when HTML-Document is loaded and DOM is ready
	//alert("document is ready");
});
