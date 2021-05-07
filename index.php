<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<h1>Simple Calculator</h1>
<form method="post">
    <fieldset>
    <legend><h1>Calculator</h1></legend>
        <table>
            <tr>
                <td>First operand</td>
                <td><input type="text" name="first"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="select">
                        <option value="Addition">Addition</option>
                        <option value="Division">Division</option>
                        <option value="Multiplication">Multiplication</option>
                        <option value="Subtraction">Subtraction</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second operand:</td>
                <td><input type="text" name="second"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </fieldset>
    <h1>Result</h1>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstNumber = $_POST["first"];
    $secondNumber = $_POST["second"];
    $select = $_POST["select"];
    switch ($select){
        case "Addition":
            echo $firstNumber. '+' . $secondNumber. " = " ;
            echo ($firstNumber + $secondNumber);
            break;
        case "Division":
            echo $firstNumber. '-' . $secondNumber. "=";
            echo ($firstNumber - $secondNumber);
            break;
        case "Multiplication":
            echo $firstNumber. 'x' . $secondNumber. "=";
            echo ($firstNumber *  $secondNumber);
        case "Subtraction":
            echo $firstNumber. ':' . $secondNumber. "=";
            echo $firstNumber / $secondNumber;
    }
}

?>

</body>
</html>
