/**
 * koo.js
 * Basic App functions
 */

(function($,$window,$document){


    /********************************************************************
     * Public Functions & Variables
     ********************************************************************/
	var App = {};
	
	App.data = {
		player: {
			soldiers: {
				armed: {
					attack: 	$('.armed-trained-a-soliders'),
					defense: 	$('.armed-trained-d-soliders')
				},
				unarmed: {
					attack: 	$('.unarmed-trained-a-soldiers'),
					defense: 	$('.unarmed-trained-d-soldiers')
				},
				untrained: 		$('.unarmed-untrained-soliders')
			},
			spies: {
				armed: 			$('.armed-spies'),
				unarmed: 		$('.unarmed-spies')
			},
			sentries: {
				armed: 			$('.armed-sentries'),
				unarmed: 		$('.unarmed-sentries')
			},
			weapons: {
				attack: 		$('.power-of-a-weapons'),
				defense: 		$('.power-of-d-weapons'),
				spy: 			$('.power-of-spy-tools'),
				sentry: 		$('.power-of-sentry-tools'),
			}, 
			technology: {
				attack: 		$('.fortification-a-level'),
				defense: 		$('.fortification-d-level'),
				covert: 		$('.covert-skill-level')
			},
		}, // player
		race: {
			race1: {
				name: 'Race 1',
				bonus: {
					income: 1.3,
					attack: 1,
					defense: 1,
					spy: 1.35,
					sentry: 1,
					casualty: 1
				}
			},
			race2: {
				name: 'Race 2',
				bonus: {
					income: 1.15,
					attack: 1,
					defense: 1.4,
					spy: 1,
					sentry: 1,
					casualty: 1
				}
			},
			race3: {
				name: 'Race 3',
				bonus: {
					income: 1,
					attack: 1,
					defense: 1,
					spy: 1.45,
					sentry: 1,
					casualty: 0.3
				}
			},
			race4: {
				name: 'Race 4',
				bonus: {
					income: 1,
					attack: 1.35,
					defense: 1.2,
					spy: 1,
					sentry: 1,
					casualty: 1
				}
			},
			race5: {
				name: 'Race 5',
				bonus: {
					income: 1,
					attack: 1,
					defense: 1,
					spy: 1,
					sentry: 1.35,
					casualty: 0.15
				}
			}
		} // race
		
	};
	
	window.App = App;
	
	
    /********************************************************************
     * Private Functions
     ********************************************************************/

    /**
     * init
     * Caches GUI controls. Binds all delegated event listeners for GUI controls
     */
    function init(){
        /*
         Cached GUI controls. All jQuery selectors should be cached here to prevent
         multiple DOM queries for the same element.
         */
		 
		 // Race select
		 $('#race li').on('click', function(e){
			console.log( App.data.test); 
		 });

				
    } // init

    // Initialize module
    $document.ready(init);

	
})(jQuery,jQuery(window),jQuery(document));


jQuery(document).ready(function($) {
	
	$('#race li').on('click', function(e){
		console.log( 'test', App.data.test2); 
	});


});