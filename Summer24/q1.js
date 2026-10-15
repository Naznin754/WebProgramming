function calculateBill()
{
    let location = document.getElementById("location").value;
    let units = Number(document.getElementById("units").value);
    let area = "";
    let rate = 0;
    let bill = 0;
    let surcharge = 0;

    // Validation 1: Location
    if(location == "")
    {
        alert("Please select a location.");
        return;
    }

    // Validation 2: Area Type
    if(document.getElementById("urban").checked)
        area = "Urban";
    else if(document.getElementById("rural").checked)
        area = "Rural";
    else
    {
        alert("Please select an area type.");
        return;
    }

    // Validation 3: Units Consumed
    if(document.getElementById("units").value == "" || units <= 0)
    {
        alert("Unit Consumed must be a positive number.");
        return;
    }

    // Calculate Rate
    if(location == "Dhaka")
    {
        if(area == "Urban")
            rate = 7.5;
        else
            rate = 6.5;
    }
    else if(location == "Chattogram")
    {
        if(area == "Urban")
            rate = 7.0;
        else
            rate = 6.0;
    }
    else
    {
        if(area == "Urban")
            rate = 6.5;
        else
            rate = 5.5;
    }

    // Calculate Bill
    bill = units * rate;

    // Calculate Surcharge
    if(bill < 500)
        surcharge = 0;
    else if(bill <= 1000)
        surcharge = bill * 0.05;
    else
        surcharge = bill * 0.10;

    // Final Bill
    bill = bill + surcharge;

    alert("Final Electricity Bill: " + bill.toFixed(2) + " Taka");
}
