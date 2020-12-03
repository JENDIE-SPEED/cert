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



<div class="container ">
<div class="table-responsive">
  
  <div class="row">
    
    <div class="columnz">
      <form action="insert.php">
    
        <input type="text" id="cname" name="customer" placeholder=" Name">
       
        <input type="text" id="registration" name="reg" placeholder=" Registration">
        
        <input type="text" id="make" name="make" placeholder=" make">

        
        
        <select id="serial" name="install" >
           <option value="" disabled selected>Serial</option>

           <?php
           $mysqli=New mysqli('localhost','root','','test');
           $resultSet=$mysqli->query("SELECT serial FROM install");
   


           while($rows=$resultSet->fetch_assoc()){

            $serial = $rows['serial'];
            echo"<option value=$serial>$serial</option>";
           } 

           mysqli_close($mysqli);


           ?>
         
        </select>
        
        <select id="service" name="INSATALLATION" >
          <option value="New Installation"> New Installation</option>

          
          
        </select>
        
      </form>
    </div>
    <div class="column">
      <form action="/action_page.php">
       
        <input type="text" id="contact" name="contact" placeholder=" Contact">
        
        <input type="text" id="chasis" name="chasis" placeholder=" Chasis">
        
        <input type="text" id="model" name="model" placeholder=" Model">

        
        <select id="technician" name="install">
          <option value="" disabled selected> Technician</option>

          <?php
           $mysqli=New mysqli('localhost','root','','test');
           $resultSet=$mysqli->query("SELECT technician FROM install");
   


           while($rows=$resultSet->fetch_assoc()){

            $tech = $rows['technician'];
            echo"<option value=$tech>$tech</option>";
           } 

           mysqli_close($mysqli);


           ?>
         
         
          
        </select>
        
        <textarea id="comment" name="comment" placeholder="Write something.." style="height:100px"></textarea>
       <button ><a href='edit.php'>Verify</a></button>
      </form>
    </div>
  </div>
  </div>
</div>


 </body>
 </html>
 