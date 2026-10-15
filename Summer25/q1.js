let total = 0;
let count = 0;
let target = 2000;

function addCalories(){
    let calories = Number(document.getElementById("calories").value);

    total = total + calories;
    count++;


    document.getElementById("label").innerText="Total Calories : "+total;

    if(total <= 800)
        document.getElementById("label").innerText += "\nYou're off to a healthy start";
    else if(total <= 1600)
        document.getElementById("label").innerText += "\nGood Progress,keep it balanced!";
     else if(total < 2000)
        document.getElementById("label").innerText += "\nAlmost at your limit";
     else
        document.getElementById("label").innerText += "\nGoal Reached!Stay mindful";
    document.getElementById("label").innerText += "\nEntries : "+count;

    if(count>10 && total<goal)
        document.getElementById("label").innerText += "\nBe cautious of frequent Snacking";
}