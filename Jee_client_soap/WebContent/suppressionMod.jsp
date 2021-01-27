<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
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
 <form name="suppression" method="post" action="SuppressionServletMod" class="needs-validation" novalidate>
 						<table style="margin: 0 auto;">
 						 <tr>
 						 <td><label for="code"><b>Code</b></label><input type="number" name="id" class="form-control" id="code" placeholder="Code module" required></td>
 						 </tr>
 						 <tr> <td></td></tr>
 						 <tr><td><button class="btn btn-primary" type="submit">Valider</button></td></tr>
                          </table> <br>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
   
</form>
</div>
</body>
</html>