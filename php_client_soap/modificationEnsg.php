<?PHP
if(isset($_POST['Valider'])) {
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost:9998/enseignant?WSDL=",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>
    "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:met=\"http://metiers/\">
    <soapenv:Header/>
    <soapenv:Body>
       <met:modification>
          <!--Optional:-->
          <arg0>
             <!--Optional:-->
             <cni>".$_POST['cni']."</cni>
              <!--Optional:-->
              <nom>".$_POST['nom']."</nom>
              <!--Optional:-->
              <prenom>".$_POST['prenom']."</prenom>
              <!--Optional:-->
              <age>".$_POST['age']."</age>
              <!--Optional:-->
              <addresse>".$_POST['addresse']."</addresse>
              <!--Optional:-->
              <ville>".$_POST['ville']."</ville>
              <!--Optional:-->
              <photo>".$_POST['photo']."</photo>
              <!--Optional:-->
              <sexe>".$_POST['sexe']."</sexe>
          </arg0>
       </met:modification>
    </soapenv:Body>
 </soapenv:Envelope>",
    CURLOPT_HTTPHEADER => array("content-type: text/xml"),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
             <h3 style="text-align:center; color:rgb(0, 50, 76);" >Modification d'un enseignant</h3> <br>
             <form name="modification" method="post" action="" class="needs-validation" novalidate>
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
                 <button name="Valider" class="btn btn-primary" type="submit">Valider</button>
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