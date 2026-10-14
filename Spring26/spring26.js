let total = 0;
let session = 0;
let subjects = [];


function addStudy(){
    let subject = document.getElementById("subject").value;
    let hours = Number(document.getElementById("hours").value);

    total = total +hours;
    session++;
    subjects.push(subject);

    let average = total/session;
    let feedback = " ";

    if(total<=5)
        feedback = "start studying regularly";
    else if(total<=12)
        feedback = "Good Progress";
    else if(total<=19)
        feedback = "almost ready!";
    else
        feedback = "weekly goal reached!";

    if(session > 7 && hours < 20)
        feedback = "Increase your study time!";


    document.getElementById("result").innerHTML = 
    "Total :" +total + "hours<br>"+
    "Average :"+average+"<br>"+
    "Subjects :"+subjects+"<br>"+
    feedback;

          


}