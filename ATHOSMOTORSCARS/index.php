<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATHOS MOTORS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <style>
        /* CSS styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .car {
            display: flex;
            margin-bottom: 40px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            background-color: #fff;
        }

        .car:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .car img {
            width: 250px;
            height: auto;
            border-radius: 10px 0 0 10px;
            transition: transform 0.3s ease;
        }

        .car-content {
            flex-grow: 1;
            padding: 20px;
        }

        .car-details {
            margin-top: 20px;
        }

        h2 {
            margin: 0 0 10px;
            font-size: 24px;
            color: #333;
            text-transform: uppercase;
        }

        p {
            margin: 0 0 15px;
            font-size: 16px;
            color: #666;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button-container a {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 16px;
            text-transform: uppercase;
        }

        .button-container a:hover {
            background-color: #555;
        }
    </style>
    </style>
</head>
<body>

<div class="container">
    <h1 style="text-align: center;">ATHOS MOTORS</h1>
    <div id="cars"></div>
</div>

<script>
    // JavaScript (JS) script
    // Sample data for cars
    const cars = [
        {
            id: 1,
            brand: "Bentley",
            model: "Flying Spur",
            year: 2020,
            price: 198000,
            images: [
                "https://github.com/C0DZ1LLA/CARDEALER/blob/main/Cars/Bently/1.jpeg?raw=true",
                "https://github.com/C0DZ1LLA/CARDEALER/blob/main/Cars/Bently/2.jpeg?raw=true",
                "https://github.com/C0DZ1LLA/CARDEALER/blob/main/Cars/Bently/7.jpeg?raw=true",
                "https://github.com/C0DZ1LLA/CARDEALER/blob/main/Cars/Bently/5.jpeg?raw=true",
                "https://github.com/C0DZ1LLA/CARDEALER/blob/main/Cars/Bently/18.jpeg?raw=true",
                "https://github.com/C0DZ1LLA/CARDEALER/blob/main/Cars/Bently/12.jpeg?raw=true",
            ],
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 17500,
            fuelType: "Petrol",
            engineSize: "2.9L",
            power: "542 bhp",
        
        },
        {
            id: 2,
            brand: "BMW",
            model: "420i Grand Cupe",
            year: 2017,
            price: 24900,
            images: [
            "https://c0dz1lla.github.io/CARDEALER/Cars/BMW%20420i%20Grand%20Kupe/B45AAA9C-D17C-43BF-A967-E89FC79978B1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/BMW%20420i%20Grand%20Kupe/F01DB5A2-1C61-4E4F-9BF3-10381E465CB5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/BMW%20420i%20Grand%20Kupe/724D1606-0C78-42C9-9242-CA3FA8205CC7.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/BMW%20420i%20Grand%20Kupe/1150D1AC-BDEC-43FE-AF92-0B230077BC64.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/BMW%20420i%20Grand%20Kupe/0F366072-F376-4427-8A03-F6139610D49E.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/BMW%20420i%20Grand%20Kupe/78445155-8ACD-4036-BF9A-CE42ECCAAEE0.jpeg",
            ],
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 74900,
            fuelType: "Petrol",
            engineSize: "2.0L",
            power: "184 bhp",
            
        },
        {
            id: 3,
            brand: "Mv Avgusta",
            model: "Brutale 1000",
            year: 2021,
            price: 48800,
            images: [
            "https://c0dz1lla.github.io/CARDEALER/Cars/MV%20Augusta/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/MV%20Augusta/1D029019-8D38-47ED-9FC5-12B271C4BB4C.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/MV%20Augusta/3A710FE5-10F8-47A3-A9D8-29C7849D9861.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/MV%20Augusta/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/MV%20Augusta/901F1A70-ACDE-4EE1-9CB3-72D62A80471E.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/MV%20Augusta/3DCA21A9-DA44-45D5-A454-BEC49EE99412.jpeg",
            ],
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 2000,
            fuelType: "Petrol",
            engineSize: "1.0L",
            power: "208 bhp",
            
        },
        {
            id: 4,
            brand: "Mazda",
            model: "CX-3 Blue",
            year: 2020,
            price: 21000,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/1/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/1/2.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/1/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/1/4.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/1/5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/1/6.jpeg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 13500,
            fuelType: "Petrol",
            engineSize: "1.8L",
            power: "118 bhp",
            
        },
        {
            id: 5,
            brand: "Mazda",
            model: "CX-3 White",
            year: 2020,
            price: 21000,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/2/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/2/2.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/2/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/2/4.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/2/5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/2/6.jpeg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 11800,
            fuelType: "Petrol",
            engineSize: "2.0L",
            power: "148 bhp",
            
        },
        {
            id: 6,
            brand: "Mazda",
            model: "CX-5",
            year: 2019,
            price: 23500,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/3/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/3/2.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/3/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/3/4.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/3/5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/3/6.jpeg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 47000,
            fuelType: "Diesel",
            engineSize: "2.2L",
            power: "175 bhp",
            
        },
        {
            id: 7,
            brand: "Mercedes",
            model: "A-180",
            year: 2017,
            price: 20000,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/4/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/4/2.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/4/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/4/4.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/4/5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/4/6.jpeg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 23100,
            fuelType: "Petrol",
            engineSize: "1.6L",
            power: "122 bhp",
            
        },
        {
            id: 8,
            brand: "Mercedes",
            model: "A-180",
            year: 2016,
            price: 20000,
            images: [


                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 23100,
            fuelType: "Petrol",
            engineSize: "1.6L",
            power: "122 bhp",
            
        },
        {
            id: 9,
            brand: "Mercedes-Benz",
            model: "C 200",
            year: 2016,
            price: 19000,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/6/1.jpg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/6/2.jpg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/6/3.jpg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/6/4.jpg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 115000,
            fuelType: "Diesel",
            engineSize: "1.6L",
            power: "",
            
        },
        {
            id: 10,
            brand: "Mercedes-Benz",
            model: "S 350d",
            year: 2017,
            price: 40500,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/7/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/7/2.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/7/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/7/4.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/7/5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/7/6.jpeg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 95600,
            fuelType: "Diesel",
            engineSize: "2.9L",
            power: "265 bhp",
            
        },
        {
            id: 11,
            brand: "Porsche",
            model: "Cayenne",
            year: 2012,
            price: 29000,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/8/1.jpg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/8/2.jpg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/8/3.jpg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/8/4.jpg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/8/5.jpg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/8/6.jpg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 173000,
            fuelType: "Diesel",
            engineSize: "3.0L",
            power: "",
            
        },
        {
            id: 12,
            brand: "Porsche",
            model: "Cayenne S",
            year: 2014,
            price: 32000,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/9/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/9/2.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/9/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/9/4.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/9/5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/9/6.jpeg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 93000,
            fuelType: "Hybrid",
            engineSize: "3.0L",
            power: "333 bhp",
            
        },
        {
            id: 13,
            brand: "Range Rover",
            model: "Sport",
            year: 2021,
            price: 78000,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/10/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/10/2.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/10/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/10/4.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/10/5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/10/6.jpeg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 20000,
            fuelType: "Hybrid Petrol",
            engineSize: "2.0L",
            power: "404 bhp",
            
            
        },
        {
            id: 13,
            brand: "Toyota",
            model: "C-HR",
            year: "2020",
            price: "25000",
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/11/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/11/2.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/11/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/11/4.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/11/5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/11/6.jpeg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: "56900",
            fuelType: "Hybrid",
            engineSize: "1.8L",
            power: "122 bhp",
            
        },
        {
            id: 13,
            brand: "BMW",
            model: "530d",
            year: 2017,
            price: 36000,
            images: [
                "https://c0dz1lla.github.io/CARDEALER/Cars/12/1.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/12/2.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/12/3.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/12/4.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/12/5.jpeg",
                "https://c0dz1lla.github.io/CARDEALER/Cars/12/6.jpeg",

                
            ],                
            phone: "24322842",
            email: "athosmotorscy@gmail.com",
            mileage: 98600,
            fuelType: "Hybrid Petrol",
            engineSize: "3.0L",
            power: "249 bhp",
            
        }
    ];

    // Function to display cars
    function displayCars() {
        const carsContainer = document.getElementById('cars');
        carsContainer.innerHTML = '';
        cars.forEach(car => {
            const carElement = document.createElement('div');
            carElement.classList.add('car');
            let carImages = '';
            car.images.forEach((image, index) => {
                carImages += `<a href="${image}" data-fancybox="car-${car.id}" data-src="${image}"><img src="${image}" alt="${car.brand} ${car.model}" data-index="${index}"></a>`;
            });
            carElement.innerHTML = `
            <div class="car-content">
        <div class="car-images">
            ${carImages}
        </div>
        <div class="car-details">
            <h2>${car.brand} ${car.model}</h2>
            <p>Year: ${car.year}</p>
            <p>Price: €${car.price}</p>
            <p>Mileage (in km): ${car.mileage}</p>
            <p>Fuel type: ${car.fuelType}</p>
            <p>Engine size: ${car.engineSize}</p>
            <p>Power: ${car.power}</p>
            <div class="button-container">
                <a href="tel:${car.phone}">Call</a>
                <a href="mailto:${car.email}">Email</a>
            </div>
        </div>
    </div>
`;
            carsContainer.appendChild(carElement);
        });
    }

    // Display cars when the page loads
    displayCars();
</script>

</body>
</html>