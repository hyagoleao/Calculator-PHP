<?php

require_once "processamento/processing.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Calculadora</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="background">
            <div class="container">
                <table>
                    <tr>
                        <td colspan="4">
                        <input id="output" type="text" name="display" value="<?php echo $num ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><input class= "button" type="submit" name="del" value="C"></td>
                        <td><input class= "button" type="submit" name="op" value="√"></td>
                        <td><input class= "button" type="submit" name="op" value="%"></td>
                        <td><input class= "button" type="submit" name="op" value="*"></td>
                    </tr>
                    <tr>
                        <td><input class= "button" type="submit" name="submit" value="7"></td>
                        <td><input class= "button" type="submit" name="submit" value="8"></td>
                        <td><input class= "button" type="submit" name="submit" value="9"></td>
                        <td><input class= "button" type="submit" name="op" value="-"></td>
                    </tr>
                    <tr>
                        <td><input class= "button" type="submit" name="submit" value="4"></td>
                        <td><input class= "button" type="submit" name="submit" value="5"></td>
                        <td><input class= "button" type="submit" name="submit" value="6"></td>
                        <td><input class= "button" type="submit" name="op" value="+"></td>
                    </tr>
                    <tr>
                        <td><input class= "button" type="submit" name="submit" value="1"></td>
                        <td><input class= "button" type="submit" name="submit" value="2"></td>
                        <td><input class= "button" type="submit" name="submit" value="3"></td>
                        <td><input class= "button" type="submit" name="op" value="/"></td>
                        
                    </tr>
                    <tr>
                        <td><input class="button" type="submit" name="submit" value="0"></td>
                        <td><input class="button" type="submit" name="submit"value="."></td>
                        <td rowspan="2" ><input id="button" class="button" type="submit" name="equals" value="="></td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </form>
</body>
</html>