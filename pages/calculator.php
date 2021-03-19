<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/calculator-style.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Calculator</title>
</head>
<body>
<div class="header">
        <h1>My calculator</h1>
        <p>You can do basic calculations with this. </p>
</div>
<div id="wrapper">
        <div class="content">
            <div class="sidebar">
                <h1>Home</h1>
                <h4>Content</h4>
                <li>Calendar</li>
                <li>Calculator</li>
            </div>

            <div class="main">
                <form name="calc">
                    <table>
                    <tr>
                        <td>
                            <input type="text" name="input" size="16" id="answer">
                            <br>
                        </td>
                    </tr>
                        <tr>
                            <td>
                            <input type="button" name="one" value="1" onclick="calc.input.value += '1'">
                            <input type="button" name="two" value="2" onclick="calc.input.value += '2'">
                            <input type="button" name="three" value="3" onclick="calc.input.value += '3'">
                            <input type="button" class="operator" name="plus" value="+" onclick="calc.input.value += '+'">
                            <br>
                            <input type="button" name="four" value="4" onclick="calc.input.value += '4'">
                            <input type="button" name="five" value="5" onclick="calc.input.value += '5'">
                            <input type="button" name="six" value="6" onclick="calc.input.value += '6'">
                            <input type="button" class="operator" name="minus" value="-" onclick="calc.input.value += '-'">
                            <br>
                            <input type="button" name="seven" value="7" onclick="calc.input.value += '7'">
                            <input type="button" name="eight" value="8" onclick="calc.input.value += '8'">
                            <input type="button" name="nine" value="9" onclick="calc.input.value += '9'"> 
                            <input type="button" class="operator" name="times" value="*" onclick="calc.input.value += '*'">
                            <br>
                            <input type="button" id="clear" name="clear" value=" C " onclick="calc.input.value=''">
                            <input type="button" name="zero" value="0" onclick="clac.input.value +='0'">
                            <input type="button" name="doit" value=" = " onclick="calc.input.value=eval(calc.input.value)">
                            <input type="button" class="operator" name="div" value="/" onclick="calc.input.value += '/'">
                            <br>
                        </td>
                    </tr>
                </table>


                </form>   
            </div>
        </div>
    </div>

<script type="text/javascript" src="/assets/js/calculator.js"></script>

</body>
<h4><a href="/index.php">Go back Home</a></h4>
</body>
</html>