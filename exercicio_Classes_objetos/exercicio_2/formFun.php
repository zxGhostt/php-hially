<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor</title>
</head>

<body>
    <fieldset>
        <legend>Formulario de infos</legend>

        <form action="testeFun.php" method="get">

            <p>
                Nome: <input type="text" name="nome">
            </p>
            <p>
                ValorHora: <input type="text" name="vH">
            </p>
            <p>
                TotalHoras: <input type="text" name="tH">
            </p>
            <p>
                Bonus: <input type="text" name="bonus">
            </p>
            <p>
                Salario: <input type="text" name="salario">
            </p>
            <p>
                Selecionar entre os:<select name="tipo">
                    <option value="assalariado">Assalariado</option>
                    <option value="horista">Horista</option>
                </select>
            </p>

            <input type="submit" value="Enviar">
        </form>

    </fieldset>

</body>

</html>