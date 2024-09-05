// External JavaScript to change the heading text
window.onload = function() {
    document.querySelector('h1').textContent = "Latihan JavaScript Selesai";
};

// Latihan 2: Variabel dan Tipe Data
let name = "John";
const age = 30;
let fruits = ["Apple", "Banana", "Mango"];
let person = {
    firstName: "John",
    lastName: "Doe",
    age: 30
};

let outputDiv = document.getElementById("output");
outputDiv.innerHTML += `<p>Nama: ${name}, Umur: ${age}</p>`;

// Display all fruits
outputDiv.innerHTML += "<p>Buah-buahan:</p><ul>";
for (let i = 0; i < fruits.length; i++) {
    outputDiv.innerHTML += `<li>${fruits[i]}</li>`;
}
outputDiv.innerHTML += "</ul>";

// Display person properties
outputDiv.innerHTML += `<p>Nama Lengkap: ${person.firstName} ${person.lastName}</p>`;

// Latihan 3: Pengendalian Alur (Control Flow)
function checkValue() {
    let userInput = document.getElementById("userInput").value;
    if (userInput > 10) {
        outputDiv.innerHTML += "<p>Nilai lebih besar dari 10</p>";
    } else if (userInput == 10) {
        outputDiv.innerHTML += "<p>Nilai sama dengan 10</p>";
    } else {
        outputDiv.innerHTML += "<p>Nilai kurang dari 10</p>";
    }

    outputDiv.innerHTML += "<p>Angka 1 hingga " + userInput + ":</p><ul>";
    for (let i = 1; i <= userInput; i++) {
        outputDiv.innerHTML += `<li>${i}</li>`;
    }
    outputDiv.innerHTML += "</ul>";
}

// Latihan 4: Fungsi dalam JavaScript
function greet(name) {
    return "Hello, " + name;
}

outputDiv.innerHTML += `<p>${greet("Alice")}</p>`;
outputDiv.innerHTML += `<p>${greet("Bob")}</p>`;

function calculateSquare(number) {
    return number * number;
}

outputDiv.innerHTML += `<p>Kuadrat dari 4: ${calculateSquare(4)}</p>`;
outputDiv.innerHTML += `<p>Kuadrat dari 5: ${calculateSquare(5)}</p>`;

// Arrow function to sum two numbers
const sum = (a, b) => a + b;
outputDiv.innerHTML += `<p>Hasil penjumlahan 3 + 7: ${sum(3, 7)}</p>`;

// Latihan 5: Manipulasi Array dan Objek
let students = ["Alice", "Bob", "Charlie"];
students.push("David");

outputDiv.innerHTML += "<p>Nama-nama siswa:</p><ul>";
students.forEach(student => {
    outputDiv.innerHTML += `<li>${student}</li>`;
});
outputDiv.innerHTML += "</ul>";

let car = {
    brand: "Toyota",
    model: "Corolla",
    year: 2020
};

outputDiv.innerHTML += "<p>Properti dari objek mobil:</p><ul>";
for (let key in car) {
    outputDiv.innerHTML += `<li>${key}: ${car[key]}</li>`;
}
outputDiv.innerHTML += "</ul>";

let cars = [
    { brand: "Toyota", model: "Corolla", year: 2020 },
    { brand: "Honda", model: "Civic", year: 2019 },
    { brand: "Ford", model: "Mustang", year: 2018 }
];

outputDiv.innerHTML += "<p>Informasi mobil:</p><ul>";
cars.forEach(car => {
    outputDiv.innerHTML += `<li>${car.brand} ${car.model} (${car.year})</li>`;
});
outputDiv.innerHTML += "</ul>";
