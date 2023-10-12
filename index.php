<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IRS Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>
  <body class="container-fluid d-flex justify-content-center mt-5" style="background-color: rgb(240, 236, 230);">
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="card-body">
        <div class="justify-content-center">
          <h5>Enter Zip Code to get List of Tax Return Preparers</h5>
          <h7>State is optional</h7>
        </div>
          <form method="POST" action="list.php">
          <div class="row m-5">
            <h5>Zip Code *</h5>
            <input class="form-control" placeholder="Zip Code" id="zipcode" name="zipcode" type="number" required>
          </div>
          <div class="row m-5">
            <h5>State</h5>
              <select data-drupal-selector="edit-state" class="form-select form-control" id="state" name="state">
                <option value="All" selected="selected">- Any -</option>
                <option value="1">Alabama</option>
                <option value="2">Alaska</option>
                <option value="3">American Samoa</option>
                <option value="4">Arizona</option>
                <option value="5">Arkansas</option>
                <option value="6">California</option>
                <option value="7">Colorado</option>
                <option value="8">Connecticut</option>
                <option value="9">Delaware</option>
                <option value="10">District of Columbia</option>
                <option value="11">Florida</option>
                <option value="12">Georgia</option>
                <option value="13">Guam</option>
                <option value="14">Hawaii</option>
                <option value="15">Idaho</option>
                <option value="16">Illinois</option>
                <option value="17">Indiana</option>
                <option value="18">Iowa</option>
                <option value="19">Kansas</option>
                <option value="20">Kentucky</option>
                <option value="21">Louisiana</option>
                <option value="22">Maine</option>
                <option value="23">Maryland</option>
                <option value="24">Massachusetts</option>
                <option value="25">Michigan</option>
                <option value="26">Minnesota</option>
                <option value="27">Mississippi</option>
                <option value="28">Missouri</option>
                <option value="29">Montana</option>
                <option value="30">Nebraska</option>
                <option value="31">Nevada</option>
                <option value="32">New Hampshire</option>
                <option value="33">New Jersey</option>
                <option value="34">New Mexico</option>
                <option value="35">New York</option>
                <option value="36">North Carolina</option>
                <option value="37">North Dakota</option>
                <option value="38">Northern Mariana</option>
                <option value="39">Ohio</option>
                <option value="40">Oklahoma</option>
                <option value="41">Oregon</option>
                <option value="42">Pennsylvania</option>
                <option value="43">Puerto Rico</option>
                <option value="44">Rhode Island</option>
                <option value="45">South Carolina</option>
                <option value="46">South Dakota</option>
                <option value="47">Tennessee</option>
                <option value="48">Texas</option>
                <option value="49">Utah</option>
                <option value="50">Vermont</option>
                <option value="51">Virginia</option>
                <option value="52">Virgin Islands</option>
                <option value="53">Washington</option>
                <option value="54">West Virginia</option>
                <option value="55">Wisconsin</option>
                <option value="56">Wyoming</option>
              </select>
          </div>
          <div class="row m-5">
            <input type="submit" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
