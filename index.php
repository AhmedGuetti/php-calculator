<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP calculator</title>
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
            case Addition :
                echo $numb1 + $numb1;
            break;
            case Substraction :
                echo $numb1 - $numb1;
            break;
            case Multiplication :
                echo $numb1 * $numb1;
            break;
            case Division :
                echo $numb1 / $numb1;
            break;
        }
    }
    
    ?>
</body>
</html>