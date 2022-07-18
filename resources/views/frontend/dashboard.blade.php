<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

    <style>
        #map {
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="row py-5">
        <div class="col-md-3">
            <ul>
                <li><a href="/dashboard">Profile</a></li>
                <li><a href="/address">Address</a></li>
                <li><a href="/history">Purchase History</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script>

        var lat = 26.8065;
        var lng = 87.2846;

        var map = L.map('map').setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© Code IT'
        }).addTo(map);

        var marker = L.marker([lat, lng]).addTo(map);

        var popup = L.popup();


        function onMapClick(e) {
            // alert(e.latlng)
            document.getElementById('lat').value = e.latlng.toString().substring(7, 15);
            document.getElementById('lng').value = e.latlng.toString().substring(17, 26);
            // popup
            //     .setLatLng(e.latlng)
            //     .setContent("You clicked the map at " + e.latlng.toString())
            //     .openOn(map);
        }


        map.on('click', onMapClick);
    </script>
</body>

</html>
