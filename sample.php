<?php
// Include a header file if you have one
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive India Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        #map { height: 600px; }

        /* Styling for pop-up image */
        .popup-image {
            position: absolute;
            display: none;
            width: 200px;
            border: 3px solid #000;
            background: white;
            padding: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }
    </style>
</head>
<body>

    <div id="map"></div>
    <img id="hoverImage" class="popup-image" src="" alt="State Image">

    <script>
        var map = L.map('map').setView([22.3511, 78.6677], 5);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var statesData = {
            "INMH": { "name": "Maharashtra", "coordinates": [19.7515, 75.7139], "color": "#FF5733", "image": "img/MP.jpg", "remark": "We have successfully set up the station here." },
            "INMP": { "name": "Madhya Pradesh", "coordinates": [23.2599, 77.4126], "color": "#33FF57", "image": "img/madhya_pradesh.jpg", "remark": "Operations running smoothly." },
            "INGJ": { "name": "Gujarat", "coordinates": [22.2587, 71.1924], "color": "#5733FF", "image": "img/gujarat.jpg", "remark": "New project initiated." },
            "INBR": { "name": "Bihar", "coordinates": [25.0961, 85.3131], "color": "#FFC300", "image": "img/bihar.jpg", "remark": "Infrastructure improvements underway." },
            "INDEL": { "name": "Delhi NCR", "coordinates": [28.6139, 77.2090], "color": "#C70039", "image": "img/delhi.jpg", "remark": "Capital region development progressing well." },
            "INGA": { "name": "Goa", "coordinates": [15.2993, 74.1240], "color": "#900C3F", "image": "img/goa.jpg", "remark": "Tourism sector booming." },
            "INOR": { "name": "Odisha", "coordinates": [20.9517, 85.0985], "color": "#581845", "image": "img/odisha.jpg", "remark": "New industrial zone in development." },
            "INWB": { "name": "West Bengal", "coordinates": [22.9868, 87.8550], "color": "#1F618D", "image": "img/west_bengal.jpg", "remark": "We are expanding networks here." }
        };

        let hoverImage = document.getElementById("hoverImage");

        Object.keys(statesData).forEach(state => {
            let data = statesData[state];
            let marker = L.circleMarker(data.coordinates, {
                color: data.color,
                radius: 8,
                fillOpacity: 0.8
            }).addTo(map);

            // Mouse over event to show the image
            marker.on("mouseover", function (e) {
                hoverImage.src = data.image;
                hoverImage.style.display = "block";
            });

            // Mouse move event to follow the cursor
            marker.on("mousemove", function (e) {
                hoverImage.style.left = (e.originalEvent.pageX + 15) + "px";
                hoverImage.style.top = (e.originalEvent.pageY + 15) + "px";
            });

            // Mouse out event to hide the image
            marker.on("mouseout", function () {
                hoverImage.style.display = "none";
            });
        });

    </script>

</body>
</html>

<?php
// Include a footer file if you have one
include 'footer.php';
?>
