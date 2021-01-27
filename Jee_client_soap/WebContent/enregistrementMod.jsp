<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Enregistrement Module</title>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
             <h4 style="text-align:center; color:rgb(0, 0, 76);">Ajout d'un Module</h4>
             <form name="enregistrement" method="post" action="EnregistrementServletMod" class="needs-validation" novalidate>
                 
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
                 <button class="btn btn-primary" type="submit">Valider</button>
    
</form>
</div>
</body>
</html>