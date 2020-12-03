
<!DOCTYPE html>
<html>
<head>
  <title>Jendie</title>
</head>
<body>
<style type="text/css">
  .formcontain{
    position: absolute;
  margin-left: 0px;
  margin-right: 0px;
  
  border-radius: 5px;
  padding-bottom: 550px;
  padding-left: 10px;
  padding-right:10px;
  margin-top: 100px;
  top: 0;
  left: 0;
  width: 100%;
  height: 85%;
  overflow: hidden;
  z-index: 1;}
  
  .row{
    width: 50%;
  }
</style>




<div class="formcontain">
 <form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Serial</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Serial...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

   <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Dealer</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Dealer...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
    <label class="custom-control-label" for="customControlInline">Remember my preference</label>
  </div>

  <button type="submit" class="btn btn-primary my-1">Submit</button>
</form>

  

</div>

</body>
</html>
