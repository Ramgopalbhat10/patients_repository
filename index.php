<?php
if(isset($_POST['submit'])) {
  $file = "data.json";
  $arr_data = array(array());
  //checking file
  if(file_exists($file)) {
    // fetch json data
    $json_data = file_get_contents($file);
    // var_dump($json_data);
    //convert fetched json data into array
    $arr_data = json_decode($json_data, true);
    // var_dump($arr_data);
  }
  $arr_data[][] = $_POST;
  // var_dump($arr_data);
  $json_data = json_encode($arr_data, JSON_PRETTY_PRINT);
  file_put_contents($file, $json_data);
  
}
?>
<!doctype html>
<html>
  <head>
    <title>Patient's Directory</title>
    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- js -->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.min.js"></script>

  </head>
  <body>
    <div class="screens">
      <div class="screen1">  
        <h3>Patient's Form</h3>
        <form name="form1" method="post" action="">
          <div class="names">
            <div class="form-group name1">
              <label for="fname">First Name: </label>
              <input type="text" class="form-control" name="fname" id="fname">
            </div>
            <div class="form-group name2">
              <label for="lname">Last Name: </label>
              <input type="text" class="form-control" name="lname" id="lname">
            </div>
          </div>
          <div class="age-dob">
            <div class="form-group age1">
              <label for="age">Age: </label>
              <input type="number" class="form-control" name="age" id="age">
            </div>
            <div class="form-group dob1">
              <label for="dob">Date of birth: </label>
              <input type="date" class="form-control" name="dob" id="dob" placeholder="mm/dd/yyyy">
            </div>
          </div>
          <div class="form-group">
            <label for="cell">Cell: </label>
            <input type="tel" class="form-control" name="cell" id="cell">
          </div>
          <div class="form-group">
            <label for="about">Patient's Condition: </label>
            <textarea name="about" class="form-control" id="about" rows="3"
            cols="50"></textarea>
          </div>
          <div class="bt-submit">
            <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">
          </div>
        </form>
      </div>
      <div class="v-line"></div>
      <div class="screen2">
        <h3>Search Patient's</h3>
        <div class="searching">
          <input id="f-search" class="form-control" type="search" name="f-search" placeholder="First Name">
          <input id="l-search" class="form-control" type="search" name="l-search" placeholder="Last Name">
          <button class="btn btn-default" id="srch-button">search</button>
          <!-- <p>or</p> -->
          <!-- <button class="btn btn-default" id="list-button">Get List</button> -->
        </div>
        <div class="search-show">
          <table class="table table-striped">
            <thead>
              <tr>  
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>DOB</th>
                <th>Cell</th>
                <th>Condition</th>
              </tr>
            </thead>
            <tbody class="table-body">
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- scripts -->
    <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>