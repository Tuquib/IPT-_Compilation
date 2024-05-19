<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../calc.css" />
</head>

<body>
    <div id="calculator">
        <h5 class="title">Ubald Jones L. Tuquib</h5>
        <h2>Calculator App</h2>
        <input id="display" readonly />
        <div id="keys">
            <button onclick="appendToDisplay('7')">7</button>
            <button onclick="appendToDisplay('8')">8</button>
            <button onclick="appendToDisplay('9')">9</button>
            <button onclick="appendToDisplay('+')" class="operator-btn" style="background-color: aqua">
                +
            </button>
            <button onclick="appendToDisplay('4')">4</button>
            <button onclick="appendToDisplay('5')">5</button>
            <button onclick="appendToDisplay('6')">6</button>
            <button onclick="appendToDisplay('-')" class="operator-btn" style="background-color: aqua">
                -
            </button>
            <button onclick="appendToDisplay('1')">1</button>
            <button onclick="appendToDisplay('2')">2</button>
            <button onclick="appendToDisplay('3')">3</button>
            <button onclick="appendToDisplay('*')" class="operator-btn" style="background-color: aqua">
                *
            </button>
            <button onclick="appendToDisplay('0')">0</button>
            <button onclick="appendToDisplay('.')">.</button>
            <button onclick="clearDisplay()">C</button>
            <button onclick="appendToDisplay('/')" class="operator-btn" style="background-color: aqua">
                /
            </button>
        </div>
        <div class="equalBu">
            <button onclick="calculate()" id="equalButton" class="operator-btn" style="background-color: aqua">
                =
            </button>
        </div>
    </div>

    <script src="../script.js"></script>
</body>

</html>