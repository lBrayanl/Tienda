<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        .text-success{
            font-size: xx-large;
            font-weight: 700;
        }
    </style>

    <div class="container col-md-3 col-md-offset-4 well"> <br><br><br><br>
        <h2>RESTA DE DOS NÚMEROS</h2>
        <form action="<?= base_url(); ?>calculadora/resta" method="POST">
            <div class="from-group">
                <label for="numero1">Ingrese Número</label>
                <input type="number" class="form-control" id="numero1" placeholder="Ingrese el numero" name="numero1" value="<?= $numero1; ?>">
            </div>
            <div class="from-group">
                <label for="numero2">Ingrese Número</label>
                <input type="number" class="form-control" id="numero1" placeholder="Ingrese el numero" name="numero2" value="<?= $numero2; ?>">
            </div>
            <div class="from-group">
                <label for="ans">resultado</label>
                <p class="text-success"><?= $ans; ?></p>
            </div>
            <button type="submit" class="btn btn-info" name="resta">Calcular</button>
    </form>
  </div>
</body>
</html>