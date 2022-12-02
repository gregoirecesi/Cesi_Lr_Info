import questions from '../bdd.json' assert {type: 'json'};


const nbQuestions = questions.length;
let questionActuelle = 0;
const reponses = [];

function getProchaineQuestion() {
    if (questionActuelle == nbQuestions) {
        return;
    }
    // Retourne la prochaine question
    return questions[questionActuelle++];
}
export function startGame() {
    return getProchaineQuestion();
}

export function reponse(txtBtn) {
    // TODO Traiter la réponse
    reponses.push({
        question: questions[questionActuelle - 1],
        reponse: txtBtn
    });

    // Retourne la prochaine question
    return getProchaineQuestion();
}

export function finPartie() {
    // TODO Traiter la fin de partie
    console.log(reponses);
    const reponsesPositives = (reponses.filter(r => r.reponse == 'oui').length / nbQuestions) * 100;
    // console.log(window.location.href.split('index.html')[1] + 'classement.php?reponsesPositives=' + reponsesPositives);
    window.location.href = window.location.href.split('index.html')[1] + 'classement.php?reponsesPositives=' + reponsesPositives;
}