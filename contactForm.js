$.post(
    'insertData.php', // Le fichier cible côté serveur.
    {
        name : $("#name").val(), // Nous supposons que ce formulaire existe dans le DOM.
        email : $("#email").val(),
        subject : $("#subject").val(), // Nous supposons que ce formulaire existe dans le DOM.
        messages : $("#messages").text()
    },
    nom_fonction_retour, // Nous renseignons uniquement le nom de la fonction de retour.
    'text' // Format des données reçues.
);

function nom_fonction_retour(texte_recu){
    // Du code pour gérer le retour de l'appel AJAX.
    alert(texte_recu);
    console.log(texte_recu);
}