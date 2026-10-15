let secret = Math.floor(Math.random() * 4501) + 500;
let count = 0;

function checkGuess() {
    let guess = Number(document.getElementById("guess").value);
    count++;

    if (guess > secret)
        document.getElementById("label").innerText += "Too high!, ";
    else if (guess < secret)
        document.getElementById("label").innerText += "Too low!, ";
    else {
        document.getElementById("label").innerText += "Correct!";
        document.getElementById("result").innerText = "Correct!";
        document.getElementById("guess").disabled = true;
        return;
    }

    if (count >= 5) {
        document.getElementById("result").innerText = "Out of guesses!";
        document.getElementById("guess").disabled = true;
    }
}