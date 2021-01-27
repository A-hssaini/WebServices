<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:ui="http://xmlns.jcp.org/jsf/facelets">
<head>
  <title>Enregistrement</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
             <h4 style="text-align:center; color:rgb(0, 0, 76);">Ajout d'un enseignant</h4>
             <form name="enregistrement" method="post" action="EnregistrementServlet" class="needs-validation" novalidate>
                 
                     <div class="form-row">
                         <label for="prenom"><b>CNI</b></label>
                         <input type="text" name="cni" class="form-control" id="prenom" placeholder="CNI" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="form-row">
                         <label for="nom"><b>Nom</b></label>
                         <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="form-row">
                         <label for="pseudo"><b>Prénom</b></label>
                         <input type="text" name="prenom" class="form-control" id="pseudo" placeholder="prenom" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
              
                 
                     <div class="form-row">
                         <label for="age"><b>Age</b></label>
                         <input type="number" name="age" class="form-control" id="age" placeholder="age" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="form-row">
                         <label for="pays"><b>Adresse</b></label>
                         <input type="text" name="addresse" class="form-control" id="pays" placeholder="Pays" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="form-row">
                         <label for="pays"><b>Ville</b></label>
                         <input type="text" name="ville" class="form-control" id="pays" placeholder="ville" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                  <div class="form-row">
                         <label for="pht"><b>Photo</b></label>
                         <input type="text" name="photo" class="form-control" id="pht" placeholder="Photo" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                      <div class="form-row">
                         <label for="sx"><b>Sexe</b></label>
                         <input type="text" name="sexe" class="form-control" id="sx" placeholder="Sexe" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                <br/>
                 <button class="btn btn-primary" type="submit">Valider</button>
             </form>
         </div>
         <script>
           /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
            *et d'appliquer les styles de validation aux différents éléments de formulaire*/
           (function() {
             'use strict';
             window.addEventListener('load', function() {
               let forms = document.getElementsByClassName('needs-validation');
               let validation = Array.prototype.filter.call(forms, function(form) {
                 form.addEventListener('submit', function(event) {
                   if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                   }
                   form.classList.add('was-validated');
                 }, false);
               });
             }, false);
           })();
         </script>
</body>

</html>