window.addEventListener( 'DOMContentLoaded', () => {
	const polite = document.getElementById( 'a11y-speak-polite' );
	const assertive = document.getElementById( 'a11y-speak-assertive' );

	if ( ! polite || ! assertive ) {
		return;
	}

	const config = { childList: true };

	const callback = ( mutationList ) => {
		for ( const mutation of mutationList ) {
			let politeness = mutation.target.id === 'a11y-speak-polite' ? 'Polite Speak message:' : 'Assertive Speak message:';
			if ( mutation.addedNodes.length ) {
				console.log( `${ politeness }\n${ mutation.addedNodes[0].textContent }` );
			}
		}
	};

	const observer = new MutationObserver( callback );
	observer.observe( polite, config );
	observer.observe( assertive, config );
} );
