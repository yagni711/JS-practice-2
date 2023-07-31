<!DOCTYPE html>
<html>
  <head>
  <script src="script.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container text-center" style="border:7px double black;margin-top:80px;padding: 20px;background-color: white;
    ">

      <div class="row">
        <div class="col-md-12">
          <h1> JAVASCRIPT ASSIGNMENT</h1>
          <hr style="background-color: black;height: 2px;margin: 0px;"/>
          <h3>[ Please Enter Your Details ]</h3>
          <hr style="width:30%;background-color: black;height: 2px;"/>
        </div>
        <div class="col-md-3">
          <input type="text" name="entername" id="entername" placeholder="Enter Your Name" class="form-control" required/>
        </div>
        <div class="col-md-3">
          <input type="text" name="entersurname" id="entersurname" placeholder="Enter Your Surname" class="form-control" required/>
        </div>
        <div class="col-md-3">
          <input type="text" name="enterlocation" id="enterlocation" placeholder="Enter Your Location" class="form-control" required/>
        </div>
        <div class="col-md-3">
          <button class="btn btn-primary form-control" onclick="introduction()">Give Me Result</button>
        </div>
      </div>
     
      <div class="row">
        <div class="col-md-12">
          <h1 id="h1_text">Hello Everyone, My Name Is <span id="name_surname">__________</span> And I Live In <span id="location">_____</span></h1>
        </div>
      </div>
      
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-4">
          <input type="text" name="entertextcolor" id="entertextcolor" class="form-control" placeholder="Enter Text Color"/>
        </div>
        <div class="col-md-4">
          <input type="text" name="enterbgcolor" id="enterbgcolor" class="form-control" placeholder="Enter Text Background Color"/>
        </div>
        <div class="col-md-4">
          <button class="btn btn-primary form-control" onclick="changeStyle()">Change Text Style</button>
        </div>
        </div>
      

      <div class="row" style="margin-top: 30px;">
                  <div class="col-md-2">
        </div>
        <div class="col-md-4">
          <input type="text" name="enterbodycolor" id="enterbodycolor" placeholder="Enter Background Color" class="form-control"/>
        </div>
        
        <div class="col-md-4">
          <button class="btn btn-primary form-control" onclick="bodyColor()">Change Body Color</button>
        </div>
        <div class="col-md-2">
        </div>
      </div>
       <div class="row" style="margin-top: 30px;">
        <div class="col-md-12">
        <button class="btn btn-primary" onclick="location.reload();">Clear All</button>
       </div>
       </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
