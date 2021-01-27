<?PHP
if(isset($_POST['Valider'])) {
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost:9997/module?WSDL=",
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
                <id>".$_POST['id']."</id>
             <!--Optional:-->
             <nom>".$_POST['nom']."</nom>
             <!--Optional:-->
             <cni>".$_POST['cni']."</cni>
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
<title>Modification Module</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
             <h4 style="text-align:center; color:rgb(0, 0, 76);">Modification d'un Module</h4>
             <form name="modification" method="post" action="" class="needs-validation" novalidate>
                 
                     <div class="form-row">
                         <label for="code"><b>Code</b></label>
                         <input type="text" name="id" class="form-control" id="code" placeholder="code" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="form-row">
                         <label for="nom"><b>Intitulé</b></label>
                         <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="form-row">
                         <label for="pseudo"><b>code_enseignant</b></label>
                         <input type="text" name="cni" class="form-control" id="pseudo" placeholder="cni" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <br>
                 <button name="Valider" class="btn btn-primary" type="submit">Valider</button>
    
</form>
</div>
</body>
</html>