<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Installation</title>
  </head>
  <body>
  <div class="container row">
  <form action="edit.php">
  <div class="form-group">
   
    <input type="text" id="name" class="form-control mx-sm-3" placeholder="Name">
    
  </div>
  <div class="form-group">
   
    <input type="text" id="contact" class="form-control mx-sm-3" placeholder="Contact">
    
  </div>
  <div class="form-group">
   
    <input type="text" id="regis" class="form-control mx-sm-3" placeholder="Registration">
    
  </div>
  <div class="form-group">
   
    <input type="text" id="chasis" class="form-control mx-sm-3" placeholder="Chasis">
    
  </div>
  <div class="form-group">
   
    <input type="text" id="make" class="form-control mx-sm-3" placeholder="Make">
    
  </div>

  <div class="form-group">
   
    <input type="text" id="model" class="form-control mx-sm-3" placeholder="Model">
    
  </div>
  <div class="form-group">
   
    <input type="text" id="serial" class="form-control mx-sm-3" placeholder="Serial">
    
  </div>
  <div class="form-group">
   
    <input type="text" id="tech" class="form-control mx-sm-3" placeholder="Technician">
    
  </div>
  <div class="form-group">
   
    <input type="text" id="ins" class="form-control mx-sm-3" placeholder="Installation">
    
  </div>
  <div class="form-group">
   
    <input type="text" id="comment" class="form-control mx-sm-3" placeholder="Comment">
    
  </div>
   <input type="submit" value="Submit" onclick="passvalues();"/>
</form>
    


<div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script>
        
        function passvalues(){
    let name=document.getElementById("name").value;
    let contact=document.getElementById("contact").value;
    let registration=document.getElementById("regis").value;
    let chasis=document.getElementById("chasis").value;
    let makeCar=document.getElementById("make").value;
    let modelCar=document.getElementById("model").value;
    let serialCar=document.getElementById("serial").value;
    let tech=document.getElementById("tech").value;
    let installation=document.getElementById("ins").value;
    let comment=document.getElementById("comment").value;

    localStorage.setItem("namevalue",name);
    localStorage.setItem("contactvalue",contact);
    localStorage.setItem("registrationvalue",registration);
    localStorage.setItem("chasisvalue",chasis);
    localStorage.setItem("makevalue",makeCar);
    localStorage.setItem("modelvalue",modelCar);
    localStorage.setItem("serialvalue",serialCar);
    localStorage.setItem("techvalue",tech);
    localStorage.setItem("installvalue",installation);
    localStorage.setItem("commentvalue",comment);

    return false;
  };
   
   

    </script>

  </body>
</html>