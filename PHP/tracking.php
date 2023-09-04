<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Page</title>
    <link rel="stylesheet" href="../css/tracking.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Medical Portal</title>
    <script src="js.js"></script>

</head>



<div>
<?php 
    include_once 'header.php';
?>

    <div class="container1">

        <div class="left-side">
            
            <div id="map-container"></div>

            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
            <script>
                function initMap() 
                {
                    // Specify the coordinates for the center of the map
                    var center = { lat: 37.7749, lng: -122.4194 };

                    // Create a new map instance
                    var map = new google.maps.Map(document.getElementById('map-container'), {
                        center: center,
                        zoom: 12 // Adjust the zoom level as desired
                    });

                    // Add a marker to the map
                    var marker = new google.maps.Marker({
                        position: center,
                        map: map,
                        title: 'Marker Title' // Replace with your desired marker title
                    });
                }
            </script>
        </div>

        <div class="right-side">
        <div class="topic">
        <h1>Tracking Page</h1><br>
        </div>

        <form id="tracking-form">

            <p>Tracking Page</p>
            <div class="input-box">
            <input type="text" id="tracking-number" required><br>
            </div>

            <div class="input-box">
            <button type="submit"><a href="trackingRespond.php">Track</a></button>
            </div>

        </form>
        <div id="tracking-status" class="hidden">
            <h2>Tracking Status:</h2>
            <div id="status-text"></div>
        </div>
        </div>
    </div>

   


    <?php 
    include_once 'footer.php';
?>

