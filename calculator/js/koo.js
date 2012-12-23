/**
 * koo.js
 * Basic App functions
 */

(function($,$window,$document){


    /********************************************************************
     * Public Functions & Variables
     ********************************************************************/
	var App = {};

	App.getPlayerData = function( pid){
		var player = {
			pid: '0000-0001',
			race: 'race1',
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
		} // player
		
		return player;
	};
	
	App.data = {
		// This is a double declaration of player{} - need it to show up in auto-tab
		player: player = {
			pid: '0000-0001',
			race: 'race1',
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
	
	App.fields = {
		input: {
			race: $('#race')
		}, // fields.input
		output: {
			raceSelected: $('.race-selected'),
			raceStats: $('.race-stats'),
			raceName: $('.race-name'),
			raceBonus: $('.race-bonus'),
			SA: {
				SA: $('.SA'),
				realDmg: $('.real-damage'),
				armedTrained: $('.armed-trained-a-soliders'),
				armedUntrained: $('.armed-untrained-soliders'),
				powerWeapon: $('.power-of-a-weapons'),
				unarmedTrained: $('.unarmed-trained-a-soldiers'),
				unarmedUntrained: $('.unarmed-untrained-a-soldiers'),
				fortification: $('.a-fortification-level'),
				raceBonus: $('.race-a-bonus')
			}
		} // fields.output
	};
	
    /**
     * updateValFields
     * Updates all output value fields to reflect changes to primary input table
     */
	App.updateValFields = function(){
		var data = App.data;
		App.data.player = App.getPlayerData();
		
		var SA 		= calcSA( data)
			SADmg 	= calcRealDmg( data);
			
			//DA 	= calcDA( data),
			//DADmg = calcCounterDmg( data),
		
			//ACA 	= calcACA( data),
			//DCA 	= calcDCA( data),
			
			//OVR 	= calcOverall( data);
			
		// Got values? Will output.
		App.fields.output.SA.SA.text( SA);
		App.fields.output.SA.realDmg.text( SADmg);
		console.log( 'Fields Updated', App, App.data.player.soldiers.armed.attack );
		
	}// updateValFields

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
		
		 // Race select
		 App.fields.input.race.find('li').on('click', function(e){
			var race = $(this).data('race');
			
			// Output stats
			App.fields.output.raceName.text( App.data.race[race].name );
			App.fields.output.raceSelected.text(App.data.race[race].name );
			App.fields.output.raceBonus.empty();
			
			App.fields.output.raceBonus.append('<li>Attack: '+App.data.race[race].bonus.attack+'</li>');
			App.fields.output.raceBonus.append('<li>Casualty: '+App.data.race[race].bonus.casualty+'</li>');
			App.fields.output.raceBonus.append('<li>Defense: '+App.data.race[race].bonus.defense+'</li>');
			App.fields.output.raceBonus.append('<li>Income: '+App.data.race[race].bonus.income+'</li>');
			App.fields.output.raceBonus.append('<li>Sentry: '+App.data.race[race].bonus.sentry+'</li>');
			App.fields.output.raceBonus.append('<li>Bonus: '+App.data.race[race].bonus.spy+'</li>');
															
		 });
		
    } // init

	
    /**
     * calcSA
     * Renders Strike Action stats for use
     */
	 function calcSA( data){
		var A = App.data.player.soldiers.armed.attack,
			B = 0,	// armed untrained
			C = App.data.player.weapons.attack.power,
			D = 0,	// # unarmed trained
			E = 0,	// # unarmed untrained
			F = App.data.player.technology.attack,
			G = App.data.race[ App.data.player.race ].bonus.attack,
			leftoverWeapons = 0, leftoverSoldiers = 0;
		
		// 2 scenarios: more weapons than trained soldiers, or less.
		if( App.data.player.weapons.attack.quantity >= A ){
			// 	all soldiers get weapons, and there are more for untrained soldiers
			leftoverWeapons = A - App.data.player.weapons.attack.quantity;
			B = App.data.player.soldiers.untrained - leftoverWeapons;	// Untrained soldiers get remaining weapons
			E = App.data.player.soldiers.untrained - B;		// Remaining untrained soldiers get no weapons
			
		} else{
			// Some soldiers get weapons, none left over for untrained soldiers
			leftoverSoldiers = abs( A - App.data.player.weapons.attack.quantity);
			A = App.data.player.weapons.attack.quantity - A;
			B = App.data.player.soldiers.untrained
			
			E = leftoverSoldiers;
		}
		var armedUntrained = App.data.player.weapons.attack.quantity
			
			
		return C;
	 } // calcSA

    /**
     * calcRealDmg
     * Renders Real Damage value
     */
	 function calcRealDmg( data){

		return 'test2';
	 } // calcRealDmg
	
	
	
	
	
    // Initialize module
    $document.ready(init);


	
})(jQuery,jQuery(window),jQuery(document));


jQuery(document).ready(function($) {
	
	console.log( App)
			
	App.updateValFields();

});