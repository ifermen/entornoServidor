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
    <?php
        echo "hola";
    ?>
    <form method="GET">
        <div class="form-group row">
            <label for="nombre" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input id="nombre" name="nombre" type="text" class="form-control" value="<?php
                    if(isset($_GET["nombre"])){
                        echo $_GET["nombre"];
                    }
                ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Gustos</label>
            <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="gustos[]" id="gustos_0" type="checkbox" class="custom-control-input" value="nacho" <?php
                        if(isset($_GET["gustos"])){
                            if(in_array("nacho",$_GET["gustos"])){
                                echo "checked";
                            }
                        }
                    ?>>
                    <label for="gustos_0" class="custom-control-label">Nachos</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="gustos[]" id="gustos_1" type="checkbox" class="custom-control-input" value="burger" <?php
                        if(isset($_GET["gustos"])){
                            if(in_array("burger",$_GET["gustos"])){
                                echo "checked";
                            }
                        }
                    ?>>
                    <label for="gustos_1" class="custom-control-label">Hamburguesa</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="gustos[]" id="gustos_2" type="checkbox" class="custom-control-input" value="pizza" <?php
                        if(isset($_GET["gustos"])){
                            if(in_array("pizza",$_GET["gustos"])){
                                echo "checked";
                            }
                        }
                    ?>>
                    <label for="gustos_2" class="custom-control-label">Pizza</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="gustos[]" id="gustos_3" type="checkbox" class="custom-control-input" value="lasagna" <?php
                        if(isset($_GET["gustos"])){
                            if(in_array("lasagna",$_GET["gustos"])){
                                echo "checked";
                            }
                        }
                    ?>>
                    <label for="gustos_3" class="custom-control-label">Lasaña</label>
                </div>
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