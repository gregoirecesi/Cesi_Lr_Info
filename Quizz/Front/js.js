import { startGame, reponseOui, reponseNon } from '../Back/requetesBd.js';

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
    let oui = document.createElement('div');
    oui.id = 'boutonOui';
    oui.textContent = 'oui';
    oui.onclick = reponseOui;
    document.body.appendChild(oui);
    let non = document.createElement('div');
    non.id = 'boutonNon';
    non.textContent = 'non';
    non.onclick = reponseNon;
    document.body.appendChild(non);
}

function supprimerOuiNon(){
    document.getElementById('boutonOui').remove();
    document.getElementById('boutonNon').remove();
}
