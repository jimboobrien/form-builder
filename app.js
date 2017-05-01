/********************************
 * Introduction to DOM Events
 * with JavaScript
 * 1.4.1
 *
 *******************************/




/********************************
 * Drag and Drop
 * 1.4.1.7
 *
 *******************************/

(function (window, document, undefined) {

var childEl = document.querySelector( '.child' ),
    dragDemo = document.getElementById( 'drag-and-drop-demo' ),
    movable = document.querySelector( '.move' ),
    copyable = document.querySelector( '.copy' ),
    droppable = document.querySelector( '.droppable' ),
    moving,
    copying,
    classes,
    moveableDragStartHandler,
    moveableDragEndHandler,
    droppableEnterHandler,
    droppableLeaveHandler,
    dropHandler;





moveableDragStartHandler = function moveableDragStartHandler( event ) {


  if ( event.target.classList.contains( 'copy' ) ) {
    copying = event.target;
  }
  if ( event.target.classList.contains( 'move' ) ) {
    moving = event.target;
    moving.classList.add( 'active' );
  }

  event.dataTransfer.setData( 'text/plain', event.target.classList );

};

moveableDragEndHandler = function moveableDragEndHandler( event ) {

  event.target.classList.remove( 'active' );
  droppable.classList.remove( 'active' );

};

droppableEnterHandler = function droppableEnterHandler( event ) {

  event.preventDefault();
  droppable.classList.add( 'active' );

};

droppableLeaveHandler = function droppableLeaveHandler( event ) {

  droppable.classList.remove( 'active' );

};

dropHandler = function dropHandler( event ) {


  event.preventDefault();
  classes = event.dataTransfer.getData( 'text' );


  if ( classes.indexOf( 'copy' ) > -1 ) {

    newCopy = copying.cloneNode( true );
    droppable.appendChild( newCopy );
    copying = null;

  }

  if ( classes.indexOf( 'move' ) > -1 ) {

    droppable.appendChild( moving );
    moving.classList.remove( 'active' );
    moving = null;

  }

  droppable.classList.remove( 'active' );


};

movable.addEventListener( 'dragstart', moveableDragStartHandler, false );
movable.addEventListener( 'dragend', moveableDragEndHandler, false );

copyable.addEventListener( 'dragstart', moveableDragStartHandler, false );

droppable.addEventListener( 'dragenter', droppableEnterHandler, false );
droppable.addEventListener( 'dragover', droppableEnterHandler, false );
droppable.addEventListener( 'dragleave', droppableLeaveHandler, false );
droppable.addEventListener( 'drop', dropHandler, false );

})(window, document);



