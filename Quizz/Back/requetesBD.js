import questions from '../bdd.json' assert {type: 'json'};

const nbQuestions = questions.length;
let questionActuelle = 0;

function getProchaineQuestion() {
    // Retourne la prochaine question
    return questions[questionActuelle++];
}
export function startGame() {
    return getProchaineQuestion();
}

export function reponseOui() {
    // TODO Traiter la réponse OUI

    // Retourne la prochaine question
    return getProchaineQuestion();
}

export function reponseNon() {
    // Requete BD pour une question
}