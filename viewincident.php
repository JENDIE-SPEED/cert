<?php
include 'header.php' ;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Jendie</title>
 </head>
 <body>

 	<style>


  .topnavz {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnavz a {
  float: left;
  display: block;
  color: black;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnavz a:hover {
  background-color: #ddd;
  color: black;
}

.topnavz a.active {
  background-color: #2196F3;
  color: white;
}

.topnavz .search-container {
  float: left;
  
  
  
}

.topnavz input[type=text] {
  padding: 6px;
  padding-left:300px;
  padding-right:300px;
  margin-top: 8px;
  margin-bottom: 8px;
  margin-right: 300px;
  margin-left: 300px;
  font-size: 17px;
  border: none;
}

.topnavz .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-left: 920px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnavz .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnavz .search-container {
    float: none;
  }
  .topnavz a, .topnavz input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnavz input[type=text] {
    border: 1px solid #ccc;  
  }
}

  /*Table Style*/

.container {
  margin-left: 300px;
  
  border-radius: 5px;
  padding-bottom: 550px;
  padding-left: 10px;
  padding-right:10px;}
  
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

  <div class="topnavz">
 
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

<table>
  <tr>
    <th>Unique ID</th>
    <th>Vehicle</th>
    <th>Service</th>
    <th>Technician</th>
    <th>Date</th>
    <th>Delete</th>
    
    
    
    
    
  </tr>
  <tr>
    <td><a>000154956</a></td>
    <td>Isuzu</td>
    <td>Installation</td>
    <td>Moses Wanjiku</td>
    <td>2020-09-08</td>
    
   
   
  </tr>
  <tr>
    <td><a>000154956</a></td>
    <td>Isuzu</td>
    <td>Installation</td>
    <td>Moses Wanjiku</td>
    <td>2020-09-08</td>
    
  </tr>
  <tr>
  <td><a>000154956</a></td>
    <td>Isuzu</td>
    <td>Installation</td>
    <td>Moses Wanjiku</td>
    <td>2020-09-08</td>
   
  </tr>
</table>
</div>
 
 </body>
 </html>