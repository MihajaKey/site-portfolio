      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });

      if($('#message_envoye').val() == "message_envoye" ){
        $("#btn-trigger-modal").trigger("click"); 
      }

      $("#email").blur(function(){
              //alert("onblur");
              $.get(
                  'checkMail.php', // Le fichier cible côté serveur.
                  {
                      email : $("#email").val(), 
                  },
                  nom_fonction_retour, // Nous renseignons uniquement le nom de la fonction de retour.
                  'html' // Format des données reçues.
              );

              function nom_fonction_retour(texte_recu){
                  if(texte_recu === "Adresse invalide"){
                    //alert("Adresse invalide");
                    $("#email_validation").html(`<svg width="1em" color="#ff4444" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                    </svg>`);
                    $('#email_validated').val('error');
                    $('#email').attr('data-toogle', 'tooltip').attr('data-placement', 'top').attr('data-html','true').attr('title', 'Email invalide');
                  }else if(texte_recu === "Adresse valide mail safe to send" ){
                    $("#email_validation").html(`<svg width="1em" color="green" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>`);
                    $('#email_validated').val('success');
                    //alert("Adresse valide mail safe to send");
                  }else if(texte_recu === "Adresse inconnue" ){
                    $("#email_validation").html(`<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>`);
                    $('#email').attr('data-toogle', 'tooltip').attr('data-placement', 'top').attr('tittle', 'Email invalide');
                    $('#email_validated').val('error');
                  }
              }

      });

      $('#btn_validation').click(function(e){
        if($('#email_validated').val() === "error"){
          e.preventDefault();
          alert("mail invalide");
          $('#email').attr('data-toogle', 'tooltip').attr('data-placement', 'top').attr('title', 'Email invalide');
        }
      });