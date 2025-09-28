<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<form method="POST">
  <div class="form-group row">
    <label class="col-4">Hobbie</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbie[]" id="hobbie_0" type="checkbox" class="custom-control-input" value="reading"
         <?php
            if(isset($_POST["hobbie"])){
                if(in_array("reading",$_POST["hobbie"])){
                    echo "checked";
                }
            }
        ?>> 
        <label for="hobbie_0" class="custom-control-label">Lectura</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbie[]" id="hobbie_1" type="checkbox" class="custom-control-input" value="sport"
         <?php
            if(isset($_POST["hobbie"])){
                if(in_array("sport",$_POST["hobbie"])){
                    echo "checked";
                }
            }
        ?>> 
        <label for="hobbie_1" class="custom-control-label">Deporte</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbie[]" id="hobbie_2" type="checkbox" class="custom-control-input" value="music"
         <?php
            if(isset($_POST["hobbie"])){
                if(in_array("music",$_POST["hobbie"])){
                    echo "checked";
                }
            }
        ?>> 
        <label for="hobbie_2" class="custom-control-label">Musica</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbie[]" id="hobbie_3" type="checkbox" class="custom-control-input" value="traveling"
         <?php
            if(isset($_POST["hobbie"])){
                if(in_array("traveling",$_POST["hobbie"])){
                    echo "checked";
                }
            }
        ?>> 
        <label for="hobbie_3" class="custom-control-label">Viajar</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbie[]" id="hobbie_4" type="checkbox" class="custom-control-input" value="cooking"
         <?php
            if(isset($_POST["hobbie"])){
                if(in_array("cooking",$_POST["hobbie"])){
                    echo "checked";
                }
            }
        ?>> 
        <label for="hobbie_4" class="custom-control-label">Cocinar</label>
      </div>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST" && !isset($_POST["hobbie"])){
            echo "<p style='color: red'>Debes de seleccionar un hobbie</p>";
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