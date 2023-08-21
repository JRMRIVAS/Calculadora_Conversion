<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Conversor de unidades para monedas</title>
</head>
<body class="bg-body-secondary bg-opacity-75">
<?php require '../menu.php'; ?>

<?php 
require '../Modulos/convertidor.php';

if (isset($_POST['convertir'])) {
    $valor = $_POST['valor'];
    $desde = $_POST['inicial'];
    $hasta = $_POST['final'];

    $conversorUnidad = new ConversorMoneda();
    $valorConvertido = $conversorUnidad->convertir($valor, $desde, $hasta);

    $resultado = $valorConvertido ;

}
?>
<section class="container  d-flex justify-content-center">
        <form method="POST" class="mt-5 ">
                <h2 class="text-primary-emphasis">Conversor de unidades de Monedas</h2>
                
                <div class="mb-3 mt-4">
                    <label for="TextInput" class="form-label"> Ingrese la cantidad a convertir</label>
                    <input type="text"  name="valor" class="form-control border-black " placeholder="Click para escribir" required>
                </div>
                <div class="d-flex flex-wrap gap-3">
    
                    <div >
                        <label for="selectInicio" class="form-label"> Desde</label>
                        <select id="selectInicio" class="form-select border border-info-subtle w-100" name="inicial" >
                            <option value="usd">Dólar estadounidense</option>
                            <option value="eur">Euro</option>
                            <option value="gbp">Libra esterlina</option>
                            <option value="jpy">Yen japonés</option>
                            <option value="chf">Franco suizo</option>
                            <option value="cad">Dólar canadiense</option>
                        </select>
                    </div>
        
        
                    <div class="mb-3">
                        <label for="selectFin" class="form-label ">Hasta</label>
                        <select id="selectFin" class="form-select border border-info-subtle w-100" name="final">
                            <option value="usd">Dólar estadounidense</option>
                            <option value="eur">Euro</option>
                            <option value="gbp">Libra esterlina</option>
                            <option value="jpy">Yen japonés</option>
                            <option value="chf">Franco suizo</option>
                            <option value="cad">Dólar canadiense</option>
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