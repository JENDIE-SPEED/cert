
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>LPO cheq</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin-left:-300;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
}
.pagination li a:hover {
    color: #666;
} 
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}   

.containz{
  margin-top: 100px;
  margin-left: -1100px;
  margin-right: 50px;
} 
</style>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
  <div class="containz">
<div class="container-xl">
  <form>
  <div class="form-row" style="padding: 10px;">

    <div class="col-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Transaction Type</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Paybill...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    
  
    <div class="col-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">TransID/Cheque/LPO</label>
      <input type="text" class="form-control" id="inlineFormCustomSelect">
      
    </div>
    <div class="col-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Transaction Time</label>
      <input type="text" class="form-control" id="inlineFormCustomSelect">
      
    </div>
    <div class="col-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Transaction Amount</label>
      <input type="text" class="form-control" id="inlineFormCustomSelect">
      
    </div>
  </div>

  <div class="form-row" style="padding: 10px;">
    <div class="col-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">First Name</label>
      <input type="text" class="form-control" id="inlineFormCustomSelect">
      
    </div>
    <div class="col-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Middle Name</label>
      <input type="text" class="form-control" id="inlineFormCustomSelect">
      
    </div>
    <div class="col-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Last Name</label>
      <input type="text" class="form-control" id="inlineFormCustomSelect">
      
    </div>
    
    
  </div>

  
  <div class="form-row" style="padding: 10px;">
    <div class="col-3">

      <label class="custom-file-label mr-sm-2" for="inputGroupFile01">Choose File</label>
      <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
      
    </div>
    
    
  </div>
   <button type="submit" class="btn btn-primary" style="padding: 10px; margin-left: 8px;"  >Submit</button>
</form>
  
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Customer <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Trans Type<i class="fa fa-sort"></i></th>
                        <th>Trans ID</th>
                        <th>Transtime<i class="fa fa-sort"></i></th>
                        <th>Transamount</th>
                        <th>Customer <i class="fa fa-sort"></i></th>
                        <th>Date <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10</td>
                        <td>Pay Bill</td>
                        <td>NB75P9LJIX</td>
                        <td>20190207203459</td>
                        <td>6000.00</td>
                        <td>STEPHEN</td>
                        <td>2020-07-01 08:35:46</td>
                        <td>
                            
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                         <td>10</td>
                        <td>Pay Bill</td>
                        <td>NB75P9LJIX</td>
                        <td>20190207203459</td>
                        <td>6000.00</td>
                        <td>STEPHEN</td>
                        <td>2020-07-01 08:35:46</td>
                        <td>
                           
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                          <td>10</td>
                        <td>Pay Bill</td>
                        <td>NB75P9LJIX</td>
                        <td>20190207203459</td>
                        <td>6000.00</td>
                        <td>STEPHEN</td>
                        <td>2020-07-01 08:35:46</td>
                        <td>
                            
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                          <td>10</td>
                        <td>Pay Bill</td>
                        <td>NB75P9LJIX</td>
                        <td>20190207203459</td>
                        <td>6000.00</td>
                        <td>STEPHEN</td>
                        <td>2020-07-01 08:35:46</td>
                        <td>
                            
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                          <td>10</td>
                        <td>Pay Bill</td>
                        <td>NB75P9LJIX</td>
                        <td>20190207203459</td>
                        <td>6000.00</td>
                        <td>STEPHEN</td>
                        <td>2020-07-01 08:35:46</td>
                        <td>
                          
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>        
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  
</div> 
</div>  
</body>
</html>