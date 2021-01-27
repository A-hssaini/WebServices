<?PHP
if(isset($_POST['Validerr'])) {
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost:9997/module?WSDL=",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>
    "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:met=\"http://metiers/\">
        <soapenv:Header/>
        <soapenv:Body>
          <met:suppression>
              <!--Optional:-->
              <arg0>" . $_POST['id'] . "</arg0>
          </met:suppression>
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
<title>Suppression Module</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin: 0 auto;"> 
             <h4 style="color:rgb(0, 0, 76);text-align:center ">Suppression d'un Module</h4>
             <br> 
 <form name="suppression" method="post" action="" class="needs-validation" novalidate>
 						<table style="margin: 0 auto;">
 						 <tr>
 						 <td><label for="code"><b>Code</b></label><input type="text" name="id" class="form-control" id="code" placeholder="Code module" required></td>
 						 </tr>
 						 <tr> <td></td></tr>
 						 <tr><td><button name="Valider" class="btn btn-primary" type="submit">Valider</button></td></tr>
                          </table> <br>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
   
</form>
</div>
</body>
</html>