let attempts = 0;
let target = 100;

function checkStrength(){
    let pass = document.getElementById("password").value;
    let score = 0;
    attempts++;

    if(pass.length>=6)
        score = score + Math.floor((pass.length-6)/2)*10;
    if(/[A-Z]/.test(pass))
        score = score+15;
    if(/[a-z]/.test(pass))
        score = score+15;
    if(/[0-9]/.test(pass))
        score = score+20;
    if(/[!@#$%^&*]/.test(pass))
        score = score+25;
    
    if(score<31)
        document.getElementById("label").innerText="Very Weak";
    else if(score<51)
        document.getElementById("label").innerText="Weak";
    else if(score<71)
        document.getElementById("label").innerText="Medium";
    else if(score<91)
        document.getElementById("label").innerText="Strong";
    else if(score < target)
        document.getElementById("label").innerText = "Very Strong";
    else 
        document.getElementById("label").innerText = "Perfect Password!";

    document.getElementById("label").innerText += "\nScore: " + score;

    if(attempts > 8 && score < 71)
        document.getElementById("label").innerText += "\nNeed practice!";

    document.getElementById("label").innerText += "\nAttempt: "+ attempts;
}
  