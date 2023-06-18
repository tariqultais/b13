<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $skills = $_POST["skills"];
    $district = $_POST["district"];
    $comments = $_POST["Comments"];
} ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row ">
        <div class="col">
          <form action="" method="POST">
            <h2 style="text-align: center;">Registration Form</h2>
            <hr>
            <div class="input-group"><span class="input-group-text">Name</span><input type="text" name="name" aria-label="First name" class="form-control" placeholder="Enter Your Name"></div>
            <div class="input-group mt-2"><span class="input-group-text">Email</span><input type="email" name="email" aria-label="First name" class="form-control" placeholder="Enter Your Email"></div>
            <div class="row mt-2">
              <div class="col"><span>Gender :</span></div>
              <div class="col">
                <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault1" checked><label class="form-check-label" for="flexRadioDefault1"> Male </label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2"><label class="form-check-label" for="flexRadioDefault2"> Female </label></div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col"><span>Skills : </span></div>
              <div class="col">
                <div class="form-check form-check-inline"><input class="form-check-input" name="skills" type="checkbox" value="PHP" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> PHP </label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" name="skills" type="checkbox" value="Laravel" id="flexCheckChecked" checked><label class="form-check-label" for="flexCheckChecked"> Laravel </label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" name="skills" type="checkbox" value="JS" id="flexCheckChecked" checked><label class="form-check-label" for="flexCheckChecked"> JS </label></div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col"><label for="inputState" class="form-label">District :</label></div>
              <div class="col"><select name="district" id="inputState" class="form-select">
                  <option value="Dhaka" selected>Dhaka</option>
                  <option value="Gazipur">Gazipur</option>
                  <option value="Chittagong">Chittagong</option>
                  <option value="khulna">Khulna</option>
                  <option value="Sylhet">Sylhet</option>
                </select></div>
            </div>
            <div class="row"><label>Comments</label><textarea name="Comments" style="width: 500px;" placeholder="Write Your Comments"></textarea></div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4"><button class="btn btn-primary me-md-2" type="submit">Button</button></div>
          </form>
        </div>
        <div class="col">
          <form>
            <h2 style="text-align: center;">Output Result</h2>
            <hr>
            <div class="input-group"><span class="input-group-text">Name</span><input type="text" class="form-control" disabled value="
<?php echo $name; ?>"></div>
            <div class="input-group mt-2"><span class="input-group-text">Email</span><input type="email" class="form-control" disabled value="
<?php echo $email; ?>"></div>
            <div class="row mt-2">
              <div class="col"><span>Gender :</span></div>
              <div class="col"> <?php echo $gender; ?></div>
            </div>
            <div class="row mt-2">
              <div class="col"><span>Skills : </span></div>
              <div class="col"> <?php echo $skills; ?></div>
            </div>
            <div class="row mt-2">
              <div class="col"><label for="inputState" class="form-label">District :</label></div>
              <div class="col"> <?php echo $district; ?></select></div>
            </div>
            <div class="row -md"><label for="comment">Comments:</label><textarea class="form-control" style="width: 500px;" disabled rows="5" id="comment" name="text">
<?php echo $comments; ?></textarea></div>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>