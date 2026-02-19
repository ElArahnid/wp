( function( window, document ) {
  function fitness_exercise_hub_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const fitness_exercise_hub_nav = document.querySelector( '.sidenav' );
      if ( ! fitness_exercise_hub_nav || ! fitness_exercise_hub_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...fitness_exercise_hub_nav.querySelectorAll( 'input, a, button' )],
        fitness_exercise_hub_lastEl = elements[ elements.length - 1 ],
        fitness_exercise_hub_firstEl = elements[0],
        fitness_exercise_hub_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && fitness_exercise_hub_lastEl === fitness_exercise_hub_activeEl ) {
        e.preventDefault();
        fitness_exercise_hub_firstEl.focus();
      }
      if ( shiftKey && tabKey && fitness_exercise_hub_firstEl === fitness_exercise_hub_activeEl ) {
        e.preventDefault();
        fitness_exercise_hub_lastEl.focus();
      }
    } );
  }
  fitness_exercise_hub_keepFocusInMenu();
} )( window, document );