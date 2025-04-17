let map;
let directionsService;
let directionsRenderer;
let busMarkers = []; // Array to store multiple bus markers
let busPaths = []; // Store paths for each bus
let busIndexes = []; // Track the position of each bus
let busAnimationIntervals = []; // Track animation intervals

function initMap() {
    const start = { lat: 15.14687, lng: 120.76889 }; // Start point
    const end = { lat: 15.02660, lng: 120.69133 }; // End point

    const waypoints = [
        { location: { lat: 15.045327, lng: 120.68977 }, stopover: false },
        { location: { lat: 15.03332, lng: 120.68766 }, stopover: false },
        { location: { lat: 15.03158, lng: 120.68962 }, stopover: false },
        { location: { lat: 15.02966, lng: 120.68811 }, stopover: false },
        { location: { lat: 15.02699, lng: 120.69097 }, stopover: false },
    ];

    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 11,
        center: { lat: 15.21068, lng: 120.81517 }, // Center map at the start
    });

    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);

    // Request route
    directionsService.route(
        {
            origin: start,
            destination: end,
            waypoints: waypoints,
            travelMode: google.maps.TravelMode.DRIVING,
        },
        (response, status) => {
            if (status === "OK") {
                directionsRenderer.setDirections(response);
                let path = response.routes[0].legs[0].steps.map(step => step.start_location);
                path.push(response.routes[0].legs[0].end_location); // Add endpoint
                initializeBuses(path);
            } else {
                window.alert("Directions request failed due to " + status);
            }
        }
    );
}

function initializeBuses(path) {
    const busIcons = ['img/bus1.png', 'img/bus2.png', 'img/bus3.png']; // Different bus icons
    const startingOffsets = [0, Math.floor(path.length / 3), Math.floor(path.length / 1.5)]; // Different starting points for buses

    // Fetch live GPS data for the buses from the database
    fetch('http://192.168.1.16/IntelliRide/mobile_personnel/get_location.php') // Replace with your actual API endpoint
        .then(response => response.json())
        .then(data => {
            // The API should return an array of bus locations
            const numberOfBuses = data.length; // Get the number of buses from the API response
            
            // Ensure that we only display as many buses as are returned from the database
            for (let i = 0; i < numberOfBuses; i++) {
                const busLocation = data[i]; // Use live GPS data from the API

                // Use different bus icons depending on the bus index, or cycle through them
                const iconIndex = i % busIcons.length;

                let busMarker = new google.maps.Marker({
                    position: busLocation, // Set position to the live GPS data
                    map: map,
                    icon: {
                        url: busIcons[iconIndex],
                        scaledSize: new google.maps.Size(60, 60),
                    },
                });

                busMarkers.push(busMarker);
                busPaths.push(path);
                busIndexes.push(i); // Each bus starts at a different point

                // Start the animation for each bus
                startBusAnimation(i);
            }
        })
        .catch(err => {
            console.error("Error fetching bus locations:", err);
            // Fallback to the default starting positions if the API call fails
            const fallbackBuses = 3; // Default to showing 3 buses if the API call fails
            for (let i = 0; i < fallbackBuses; i++) {
                let busMarker = new google.maps.Marker({
                    position: path[startingOffsets[i]], // Use starting path positions
                    map: map,
                    icon: {
                        url: busIcons[i],
                        scaledSize: new google.maps.Size(60, 60),
                    },
                });

                busMarkers.push(busMarker);
                busPaths.push(path);
                busIndexes.push(startingOffsets[i]); // Each bus starts at a different point

                // Start the animation for each bus
                startBusAnimation(i);
            }
        });
}




document.getElementById("dashboardLink").addEventListener("click", showDashboard);