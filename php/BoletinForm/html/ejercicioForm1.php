<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="padding: 20px">
<form method="POST">
  <div class="form-group row">
    <label class="col-4 col-form-label" for="name">Name</label> 
    <div class="col-8">
      <input id="name" name="name" type="text" class="form-control" 
    <?php
        if(isset($_POST["name"])){
            echo "value=" . $_POST["name"];
        }
      ?>>
    </div>
    <?php
        if(isset($_POST["name"])){
            if(empty($_POST["name"])){
                echo "<p>Name can't be empty</p>";
            }
        }
    ?>
  </div>
  <div class="form-group row">
    <label for="age" class="col-4 col-form-label">Age</label> 
    <div class="col-8">
      <input id="age" name="age" type="number" class="form-control" <?php
        if(isset($_POST["age"])){
            echo "value=" .  $_POST["age"];
        }
      ?>>
      <?php
        if(isset($_POST["age"])){
            if($_POST["age"] <= 0 || $_POST["age"] > 120){
                echo "<p>Age has to be between 1 and 120</p>";
            }
        }
    ?>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>