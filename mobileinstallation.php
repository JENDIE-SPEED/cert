<!DOCTYPE html>
 <html>
 <head>

 	<title>Jendie</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap-responsive.css">
   
 </head>
 <body>

 	<style>
  body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
label{
	color: white;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */






/* Create two columns that float next to eachother */
.column {
  
  float: right;
  width: 50%;
  margin-top: 6px;
  padding-bottom: 20px;


}

  .container {
  position: absolute;
  margin-left: 300px;
  margin-right: 200px;
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: #444;
  border-radius: 5px;
  margin-top: 120px;


      top: 0;
      left: 0;
      width: 100%;
      height: 70%;
      overflow: hidden;
      z-index: 1;
 
  
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.columnz {

float: left;
width: 50%;
margin-top: 6px;
padding-bottom: 20px;
}
</style>
</head>
<body>
<div class="container p-1 mb-2 bg-secondary text-white pl-5 pr-2 col-6" >
    <form action="edit.php">
  <div class="form-row mt-4 pl-5">
    <div class="col-5 mb-2 ml-5" >
      <input type="text" class="form-control" placeholder="Name" id="name">
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Contact" id="contact">
    </div>
    
  </div>
  <div class="form-row pl-5">
    <div class="col-5 mb-2 ml-5">
      <input type="text" class="form-control" placeholder="Registration" id="regis">
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Chasis" id="chasis">
    </div>
    
  </div>
  <div class="form-row pl-5">
    <div class="col-5 mb-2 ml-5">
      <input type="text" class="form-control" placeholder="Make" id="make">
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Model" id="model">
    </div>
    
  </div>
  <div class="form-row pl-5">
    <div class="col-5 mb-2 ml-5 form-group">
    <select class="form-control" name="serial" id="serial" >
      <option value="" disabled selected>Serial</option>
    </select>
     
    
      
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Technician" id="tech">
    </div>
</div>
<div class="form-row pl-5">
    <div class="col-5 mb-2 ml-5 ">
      <input type="text" class="form-control" placeholder="New Installation" id="ins">
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Comment" id="comment">
    </div>
</div>
   <input type="submit" value="Submit" onclick="passvalues();"/>
    </div>
</form>

</div>


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
 