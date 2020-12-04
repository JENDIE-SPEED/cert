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
    <form>
  <div class="form-row mt-4 pl-5">
    <div class="col-5 mb-2 ml-5" >
      <input type="text" class="form-control" placeholder="Name">
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Contact">
    </div>
    
  </div>
  <div class="form-row pl-5">
    <div class="col-5 mb-2 ml-5">
      <input type="text" class="form-control" placeholder="Registration">
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Chasis">
    </div>
    
  </div>
  <div class="form-row pl-5">
    <div class="col-5 mb-2 ml-5">
      <input type="text" class="form-control" placeholder="Make">
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Model">
    </div>
    
  </div>
  <div class="form-row pl-5">
    <div class="col-5 mb-2 ml-5 form-group">
    <select class="form-control" name="serial" >
      <option value="" disabled selected>Serial</option>
    </select>
     
    
      
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Technician">
    </div>
</div>
<div class="form-row pl-5">
    <div class="col-5 mb-2 ml-5 ">
      <input type="text" class="form-control" placeholder="New Installation">
    </div>
    <div class="col-5 mb-2">
      <input type="text" class="form-control" placeholder="Comment">
    </div>
</div>
    <div class="col-3 mb-2 mt-2 ml-5 mx-auto">
      <input type="submit" class="form-control bg-success text-white" placeholder="Comment">
    </div>
</form>

</div>



  

 </body>
 </html>
 