import { startGame, reponse, finPartie } from '../Back/requetesBd.js';

let questionActuelle = 0;
window.start = () => {
    // Recupere une question sur la BD
    let question = startGame();
    
    // Supprime les div de bienvenue
    document.getElementById('msgBienvenue').remove();
    document.getElementById('startBouton').remove();

    // Affiche la question
    let questionDiv = document.createElement('div');
    questionDiv.id = 'question';
    console.log(question);
    questionDiv.textContent = question.question;
    document.body.appendChild(questionDiv);
    
    // Ajoute les boutons oui et non
    const boutonsOuiNon = [];
    ['oui', 'non'].forEach(txtBtn => {
        let div = document.createElement('input');
        div.id = 'bouton' + txtBtn;
        div.type = 'button';
        div.value = txtBtn;
        div.onclick = () => {
            const questionSuivante = reponse(txtBtn);
            if (!questionSuivante) {
                for (let btn of boutonsOuiNon) btn.remove();
                finPartie();
            }
            questionDiv.textContent = questionSuivante.question;
        }    
        document.body.appendChild(div);
        boutonsOuiNon.push(div);
    });
}

// function supprimerOuiNon(){
//     document.getElementById('boutonOui').remove();
//     document.getElementById('boutonNon').remove();
// }






// Konami Code
(function() {
    "use strict";
    // Some key codes that are used
    var up = 38,
	    down = 40,
	    left = 37,
	    right = 39,
	    A = 65,
	    B = 66;
    // Full Konami Code obtained from: http://en.wikipedia.org/wiki/Konami_Code
    var	konamiCode = [up,up,down,down,left,right,left,right,B,A];
    // Deteted sequence. Empty by default
    var konamiDetected = [];

    // Attachs the function on an element (for a certain event)
    function attachCustomEvent(el, eventName, desiredFunction) {
	    if (el.addEventListener) {
		    el.addEventListener(eventName,desiredFunction,false);
	    // Old IE
	    } else {
		    el.attachEvent('on' + eventName,desiredFunction);
	    }
    }

    // Detachs the function on an element (for a certain event)
    function detachCustomEvent(el, eventName, desiredFunction) {
	    if (el.removeEventListener) {
		    el.removeEventListener(eventName,desiredFunction,false);
	    // Old IE
	    } else {
		    el.detachEvent('on' + eventName,desiredFunction);
	    }
    }

    // Function that is invoked after detecting the Konami Code
    function startUpKonami() {
	    // Prevent further detection (When removing this line the Konami code can be entered multiple times)
	    detachCustomEvent(document,"keydown",isKonamiKey);
	    konamiIsDetected();
    }

    // Function to detect whether the pressed key is part of the Konami Code
    function isKonamiKey(e) {
	    var evt = e || window.event;
        var key = evt.keyCode ? evt.keyCode : evt.which;
	    // Set to true before checking everything    
	    var codeOk = true;
        // Push the key
        konamiDetected.push(key);
        // Check if the key is valid or not
        if (konamiDetected.length < konamiCode.length) {
		    // Check that the values are Ok so far. If not clear the array
		    for (var i = 0, max = konamiDetected.length; i < max ; i++) {
        		if(konamiDetected[i] !== konamiCode[i]) {
	        		codeOk = false;
        		}
        	}
        	if (!codeOk) {
        		// Clean the array
        		konamiDetected = [];
        		// Push the just detected value inside the array
        		konamiDetected.push(key);
        	}
        } else if (konamiDetected.length === konamiCode.length) {
        	for (var j = 0, max = konamiDetected.length; j < max ; j++) {
        		if(konamiDetected[j] !== konamiCode[j]) {
	        		codeOk = false;
        		}
        	}
        	// Clean the array
        	konamiDetected = [];
        	if (codeOk) {
	        	startUpKonami();
        	}
        // This should never happen, but if it happens we clean the array
        } else {
	        konamiDetected = [];
        }
        // After everything has been checked show the resulting array after pressing such key
	    // console.log(konamiDetected);
    }

    // Attach the event detection to the whole document
    attachCustomEvent(document,"keydown",isKonamiKey);
})();

// Function that is invoked after the konami code has been entered
function konamiIsDetected() {
	alert("Ici c'est le CESI !");
    window.open("https://www.youtube.com/watch?v=eBGIQ7ZuuiU&ab_channel=YouGotRickRolled", "_blank");
}