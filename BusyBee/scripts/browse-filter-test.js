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


var audiModels = ["e-tron GT", "RS e-tron GT", "A1", "A3", "S3", "RS3", "A4", "S4", "RS4", "A5", "S5", "RS5", "A6", "S6", "RS6", "A7", "S7", "RS7", "A8", "A8-L", "S8", "Q2", "SQ2", "Q3", "RSQ3", "Q4 e-tron", "Q5", "SQ5", "Q7", "SQ7", "Q8", "SQ8", "RSQ8", "Q8 e-tron", "SQ8 e-tron", "R8", "TT", "TTS", "TTRS"];

var bmwModels = ["116d", "118i", "120d", "M135i", "M140i"];

function GetSelectedManufacturer(value) {

    console.clear();
    console.log(value);
    
    ClearOptions();

    var modelContainer = document.getElementById("Model");

    if (value === 'Audi')
    {
        for (var i = 0; i < audiModels.length; i++)
        {
            var option = document.createElement("option");
        
            modelContainer.setAttribute('data-Model', audiModels[i]);

            modelContainer.setAttribute('value', audiModels[i]);
        
            modelContainer.dataset.Model = audiModels[i];
        
            option.textContent = audiModels[i];
        
            modelContainer.appendChild(option);
        }
    }   
    else if (value === 'BMW')
    {
        for (var i = 0; i < bmwModels.length; i++)
        {
            var option = document.createElement("option");
        
            modelContainer.setAttribute('data-Model', bmwModels[i]);
        
            modelContainer.dataset.Model = bmwModels[i];
        
            option.textContent = bmwModels[i];
        
            modelContainer.appendChild(option);
        }
    }
}

function ClearOptions()
{
	document.getElementById("Model").options.length = 0;
}