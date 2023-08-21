<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Masa</title>
</head>
<body class="bg-body-secondary bg-opacity-75">
<?php require '../menu.php'; ?>

<?php 
require '../Modulos/convertidor.php';

if (isset($_POST['convertir'])) {
    $valor = $_POST['valor'];
    $desde = $_POST['inicial'];
    $hasta = $_POST['final'];

    $conversorUnidad = new ConversorMasa();
    $valorConvertido = $conversorUnidad->convertir($valor, $desde, $hasta);

    $resultado = $valorConvertido;

}
?>
<section class="container  d-flex  justify-content-center">
        <form method="POST" class="mt-5 ">
                <h2 class="text-primary-emphasis">Conversor de unidades de Masa</h2>
                
                <div class="mb-3 mt-4 ">
                    <label for="TextInput" class="form-label"> Ingrese la cantidad a convertir</label>
                    <input type="text"  name="valor" class="form-control border-black " placeholder="Click para escribir" required>
                </div>
                <div class="d-flex flex-wrap gap-4">
                    <div class="mb-3">
                        <label for="selectInicio" class="form-label"> De</label>
                        <select id="selectInicio" class="form-select border border-info-subtle " name="inicial" >
                            <option value="gramo" class="d-flex flex-wrap">Gramos</option>
                            <option value="kilogramo" class="d-flex flex-wrap">Kilogramos</option>
                            <option value="tonelada">Toneladas</option>
                            <option value="onza">Onza</option>
                            <option value="libra">Libra</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="selectFin" class="form-label ">A</label>
                        <select id="selectFin" class="form-select border border-info-subtle " name="final">
                            <option value="gramo">Gramos</option>
                            <option value="kilogramo">Kilogramos</option>
                            <option value="tonelada">Toneladas</option>
                            <option value="libra">Libra</option>
                            <option value="onza">Onza</option>
                        </select>
                    </div>
                </div>    
                <div class="mb-3 mt-3">
                    <label for="TextInput" class="form-label"> Resultado</label>
                    <input type="number"  name="resultado" value = "<?php if(isset($resultado)) echo $resultado; ?>">
                </div>
                <button type="submit" class="btn btn-success" name="convertir">Convertir</button>
        </form>
</section>

<?php require "../footer.php"; ?>


</body>
</html>