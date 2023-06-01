// MANUFACTUER FILTERING
var manufacturerStrings = [
    "Abarth",
    "Alfa Romeo",
    "Aston Martin",
    "Audi",
    "Bentley",
    "BMW",
    "Bugatti",
    "Cadillac",
    "Chevrolet",
    "Chrysler",
    "Citroën",
    "Dacia",
    "Daewoo",
    "Daihatsu",
    "Dodge",
    "Donkervoort",
    "DS",
    "Ferrari",
    "Fiat",
    "Fisker",
    "Ford",
    "Honda",
    "Hummer",
    "Hyundai",
    "Infiniti",
    "Iveco",
    "Jaguar",
    "Jeep",
    "Kia",
    "KTM",
    "Lada",
    "Lamborghini",
    "Lancia",
    "Land Rover",
    "Landwind",
    "Lexus",
    "Lotus",
    "Maserati",
    "Maybach",
    "Mazda",
    "McLaren",
    "Mercedes-Benz",
    "MG",
    "Mini",
    "Mitsubishi",
    "Morgan",
    "Nissan",
    "Opel",
    "Peugeot",
    "Porsche",
    "Renault",
    "Rolls-Royce",
    "Rover",
    "Saab",
    "Seat",
    "Skoda",
    "Smart",
    "SsangYong",
    "Subaru",
    "Suzuki",
    "Tesla",
    "Toyota",
    "Volkswagen",
    "Volvo"
];

// Value for option element, each manufacturer has its own value i.e Audi - 1, BMW - 2
var attributeValue = 0;

// Get a reference to the container element where you want to output the HTML
var manufContainer = document.getElementById("Manuf");

// Query dataset in each element for Manufacturer name
var manufDatasetStore = document.querySelector("#Manuf");

// Loop through the strings array and generate HTML for each string
for (var i = 0; i < manufacturerStrings.length; i++) 
{
    // Increment
    attributeValue += 1;

    // Create HTML element on each loop
    var option = document.createElement("option");

    // SET value for each element on each loop + 1
    manufContainer.setAttribute('value', attributeValue);

    // SET value for dataset to name of manufacturer
    manufContainer.setAttribute('data-Manufacturer', manufacturerStrings[i]);
    // Maybe same as above?
    manufContainer.dataset.Manufacturer = manufacturerStrings[i];
    
    // Set the content of the <p> element using the string and its corresponding numeric value
    option.textContent = manufacturerStrings[i];

    // Append the <p> element to the container
    manufContainer.appendChild(option);
}





// MODEL FILTERING

// Array to store Model Names
var modelStrings = ["A1", "A3", "A4", "A5", "A6", "A7", "A8"];

var modelContainer = document.getElementById("Model");

var modelDatasetStore = document.querySelector("#Model");

for (var i = 0; i < modelStrings.length; i++)
{
    var option = document.createElement("option");

    modelContainer.setAttribute('data-Model', modelStrings[i]);

    modelContainer.dataset.Model = modelStrings[i];

    option.textContent = modelStrings[i];

    modelContainer.appendChild(option);
}

    var selected = document.getElementById("#Manuf");




    