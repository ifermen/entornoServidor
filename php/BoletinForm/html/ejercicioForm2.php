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
    <label for="color" class="col-4 col-form-label">Color Favorito</label> 
    <div class="col-8">
      <select id="color" name="color" class="custom-select">
        <option value="">-- Selecciona una opcion --</option>
        <option value="red"
        <?php
            if(isset($_POST["color"]) && $_POST["color"]=="red"){
                echo "selected='selected'";
            }
        ?>>Rojo</option>
        <option value="green"
        <?php
            if(isset($_POST["color"]) && $_POST["color"]=="green"){
                echo "selected='selected'";
            }
        ?>>Verde</option>
        <option value="blue"
        <?php
            if(isset($_POST["color"]) && $_POST["color"]=="blue"){
                echo "selected='selected'";
            }
        ?>>Azul</option>
        <option value="yellow"
        <?php
            if(isset($_POST["color"]) && $_POST["color"]=="yellow"){
                echo "selected='selected'";
            }
        ?>>Amarillo</option>
      </select>
      <?php
      if(isset($_POST["color"]) && empty($_POST["color"])){
        echo "<p style='color: red'>Debes elegir un color</p>";
      }
      ?>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Género</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="male"
        <?php
            if(isset($_POST["gender"])){
                if($_POST["gender"] == "male"){
                    echo "checked";
                }
            }
        ?>
        > 
        <label for="gender_0" class="custom-control-label">Hombre</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="female"
        <?php
            if(isset($_POST["gender"])){
                if($_POST["gender"] == "female"){
                    echo "checked";
                }
            }
        ?>
        > 
        <label for="gender_1" class="custom-control-label">Mujer</label>
      </div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["gender"])){
                echo "<p style='color: red'>Debes elegir un género</p>";
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
<?php
    if(isset($_POST["color"]) && isset($_POST["gender"])){
        echo "<p>Color favorito: " . $_POST["color"] . "</p>";
        echo "<p>Género: " . $_POST["gender"] . "</p>";
    }
?>
</body>
</html>