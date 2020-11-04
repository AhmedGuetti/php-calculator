<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
        <input type="text" name='numb1' placeholder='Number 1'>
        <input type="text" name='numb2' placeholder='Number 2'>
        <select name="operator">
            <option>Addition</option>
            <option>Substraction</option>
            <option>Multiplication</option>
            <option>Division</option>
        </select>
        <button name="submit" value="submit">Calculate</button>
    </form>

    <?php
    if (isset($_GET['submit'])){
        $numb1 = $_GET['numb1'];
        $numb2 = $_GET['numb2'];
        $operator = $_GET['operator'];
        switch($operator){
            case "Addition" :
                echo "The resault of adding ".$numb1."and ".$numb2."is " .($numb1 + $numb1);
            break;
            case "Substraction" :
                echo "The resault of substracing ".$numb1."and ".$numb2."is ".($numb1 - $numb1);
            break;
            case "Multiplication" :
                echo "The resault of Multiplaying ".$numb1."and ".$numb2."is ".($numb1 * $numb1);
            break;
            case "Division" :
                echo "The resault of deviding ".$numb1."and ".$numb2."is ".($numb1 / $numb1);
            break;
        }
    }
    
    ?>
</body>
</html>