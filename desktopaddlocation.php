
<!DOCTYPE html>
<html>
<head>
  <title>Jendie</title>
</head>
<body>
<style type="text/css">
  .formcontain{
    position: absolute;
  margin-left: 300px;
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
  
  .row{
    width: 50%;
  }
</style>




<div class="formcontain">

  <form>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Location</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col-auto my-1">
      <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
      </div>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  

  

</div>

</body>
</html>
