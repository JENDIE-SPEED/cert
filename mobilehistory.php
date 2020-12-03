
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Jendie</title>
 </head>
 <body>

 	<style>


  .topnavs {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnavs a {
  float: left;
  display: block;
  color: black;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnavs a:hover {
  background-color: #ddd;
  color: black;
}

.topnavs a.active {
  background-color: #2196F3;
  color: white;
}

.topnavs .search-container {
  float: left;
  
  
  
}

.topnavs input[type=text] {
  padding: 6px;
  padding-left:20px;
  padding-right:200px;
  margin-top: 8px;
  margin-bottom: 8px;
  margin-right: 300px;
  margin-left: 300px;
  font-size: 17px;
  border: none;
}

.topnavs .search-container button {
  
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-left: 20px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnavs .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnavs .search-container {
    float: none;
  }
  .topnavs a, .topnavs input[type=text], .topnavs .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnavs input[type=text] {
    border: 1px solid #ccc;  
  }
}

  /*Table Style*/

.container {
  position: absolute;
  margin-left: 10px;
  margin-right: 10px;
  
  border-radius: 5px;
  padding-bottom: 550px;
  padding-left: 10px;
  padding-right:10px;
  margin-top: 150px;
  top: 0;
  left: 0;
  width: 100%;
  height: 85%;
  overflow: hidden;
  z-index: 1;}

  
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

<body>

  



<div class="container">
	<div class="topnavs">
 
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
<table class="table-responsive">
  <tr>
    <th>Unique ID</th>
    <th>Vehicle</th>
    <th>Service</th>
    <th>Technician</th>
    <th>Dealer</th><br>
    <th>Comment</th>
    <th>Inst<br>Date</th>
    <th>User</th>
    <th>GVN SIM</th>
    <th>Cancel</th>
    <th>Edit</th>
    
    
    
  </tr>
  <tr>
    <td>000154956</td>
    <td>Isuzu</td>
    <td>Istallation</td>
    <td>Steve Gema</td>
    <td>Smith</td>
    <td>Jendie</td>
    <td>Stivo</td>
    <td>20-09-2020</td>
    <td>trythis@world.com</td>
    <td>110170204</td>
    <td><button>Cancel</button></td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>000154956</td>
    <td>Isuzu</td>
    <td>Istallation</td>
    <td>Steve Gema</td>
    <td>Smith</td>
    <td>Jendie</td>
    <td>Stivo</td>
    <td>20-09-2020</td>
    <td>trythis@world.com</td>
    <td>110170204</td>
    <td><button>Cancel</button></td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
   <td>000154956</td>
    <td>Isuzu</td>
    <td>Istallation</td>
    <td>Steve Gema</td>
    <td>Smith</td>
    <td>Jendie</td>
    <td>Stivo</td>
    <td>20-09-2020</td>
    <td>trythis@world.com</td>
    <td>110170204</td>
    <td><button>Cancel</button></td>
    <td><button>Edit</button></td>
  </tr>
</table>
</div>
 
 </body>
 </html>