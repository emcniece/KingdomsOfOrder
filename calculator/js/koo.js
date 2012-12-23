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
			pid: '0000-0001',
			soldiers: {
				armed: {
					attack: 	$('#trained-a-soliders').val(),
					defense: 	$('#trained-d-soliders').val()
				},
				untrained: 		$('#num-untrained-soliders').val()
			},
			spies: {
				armed: 			$('#num-spies').val(),
			},
			sentries: {
				armed: 			$('#num-sentries').val(),
			},
			weapons: {
				attack: {
					power: 		$('#power-a-weapons').val(),
					quantity:	$('#num-a-weapons').val()
				},
				defense: {
					power:		$('#power-d-weapons').val(),
					quantity:	$('#num-d-weapons').val(),
				},
				spy: {
					power:		$('#power-spy-tools').val(),
					quantity:	$('#num-spy-tools').val()
				},
				sentry: {
					power:		$('#power-sentry-tools').val(),
					quantity:	$('#num-sentry-tools').val()
				}
			}, 
			technology: {
				attack: 		$('#fortification-a-level').val(),
				defense: 		$('#fortification-d-level').val(),
				covert: 		$('#covert-skill-level').val()
			}
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
	App.getPlayerData = function( pid){
		console.log( 'yeah', pid);
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
        // Preload input boxes val
		$('#stats input').each(function(){
			$(this).val( $(this).attr('placeholder') );
		});
		
		 console.log( 'loaded');
		 // Race select
		 $('#race li').on('click', function(e){
			console.log( $(this).data('race')); 
		 });

				
    } // init


    // Initialize module
    $document.ready(init);
	

	
})(jQuery,jQuery(window),jQuery(document));


jQuery(document).ready(function($) {
	
console.log( App.data);

});