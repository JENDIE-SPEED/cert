<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
  <h3>Confirm,Edit and Submit</h3>
  <div class="container row bg-light">
    <table class="table col-12 table-bordered">
 
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Name</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <td contenteditable="true"><span id="name"></span></td>
    </tr>
    
  </tbody>
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Contact</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
       <td contenteditable="true"><span id="contact"></span></td>
    </tr>
    
  </tbody>
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Registration</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
    <td contenteditable="true"><span id="registration" ></span></td>
    </tr>
    
  </tbody>
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Chasis</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
         <td contenteditable="true"><span id="chasis" ></span></td>
    </tr>
    
  </tbody>
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Make</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      
       <td contenteditable="true"><span id="make"></span></td>
    </tr>
    
  </tbody>
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Model</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      
       <td contenteditable="true"><span id="model"></span></td>
    </tr>
    
  </tbody>
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Serial</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
           <td contenteditable="true"><span id="serial"></span></td>
    </tr>
    
  </tbody>
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Techncian</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <td contenteditable="true"><span id="technician"></span></td>
    </tr>
    
  </tbody>
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Installation</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
       <td contenteditable="true"><span id="installation"></span></td>
    </tr>
    
  </tbody>
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Comment</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
          <td contenteditable="true"><span id="comment"></span></td>
    </tr>
    
  </tbody>
</table>
<button>Submit</button>


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
         document.getElementById("name").innerHTML=localStorage.getItem("namevalue");
         document.getElementById("contact").innerHTML=localStorage.getItem("contactvalue");
         document.getElementById("registration").innerHTML=localStorage.getItem("registrationvalue");
         document.getElementById("chasis").innerHTML=localStorage.getItem("chasisvalue");
         document.getElementById("make").innerHTML=localStorage.getItem("makevalue");
         document.getElementById("model").innerHTML=localStorage.getItem("modelvalue");
         document.getElementById("serial").innerHTML=localStorage.getItem("serialvalue");
         document.getElementById("technician").innerHTML=localStorage.getItem("techlvalue");
         document.getElementById("installation").innerHTML=localStorage.getItem("installvalue");
         document.getElementById("comment").innerHTML=localStorage.getItem("commentvalue");
         
   
   

    </script>

  </body>
</html>