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
<div class="container p-4 mb-2 bg-secondary text-white pl-5 pr-2 col-6 " style="overflow-y: scroll" >
<h1>Edit Data click on text </h1>

<table class="table table-bordered ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
     
      
    </tr>
  </thead class="thead-dark">
  <tbody>
    <tr>
      
      <td contenteditable="true"><span id="name"></span></td>
      <td contenteditable="true"><span id="contact"></span></td>
     
    </tr>
   </tbody>

   <thead class="thead-dark">
    <tr>
     
      <th scope="col">Registration</th>
      <th scope="col">Chasis</th>
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td contenteditable="true"><span id="registration" ></span></td>
      <td contenteditable="true"><span id="chasis" ></span></td>
   
      
    </tr>
   </tbody>
   <thead class="thead-dark">
    <tr>
      <th scope="col">Make</th>
      <th scope="col">Model</th>
    
      
    </tr>
  </thead class="thead-dark">
  <tbody>
    <tr>
      
      <td contenteditable="true"><span id="make"></span></td>
      <td contenteditable="true"><span id="model"></span></td>
     
    </tr>
   </tbody>

   <thead class="thead-dark">
    <tr>
     
      <th scope="col">Serial</th>
      <th scope="col">Technician</th>
     
      
    </tr>
  </thead>
  <tbody>
    <tr>
       <td contenteditable="true"><span id="serial"></span></td>
      <td contenteditable="true"><span id="technician"></span></td>
      
      
    </tr>
   </tbody>
   <thead class="thead-dark">
    <tr>
     
      <th scope="col">Installation</th>
      <th scope="col">Comment</th>
     
      
    </tr>
  </thead >
  <tbody>
    <tr>
      <td contenteditable="true"><span id="installation"></span></td>
      <td contenteditable="true"><span id="comment"></span></td>
      
      
    </tr>

   </tbody>

  



</table>
<button style >Submit</buttom> 



</div>

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
 