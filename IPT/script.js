const display = document.getElementById("display");

function appendToDisplay(input) {
  display.value += input;
}

function clearDisplay() {
  display.value = "";
}

function calculate() {
  try {
    let expression = display.value.trim();
    if (/^[+\-*/]/.test(expression)) {
      throw new Error("Error: Invalid expression");
    }
    display.value = eval(expression);
  } catch (error) {
    display.value = "Error";
  }
}
