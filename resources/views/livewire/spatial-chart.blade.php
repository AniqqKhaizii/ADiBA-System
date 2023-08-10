<div id="map" class="shadow rounded p-4 border bg-white mb-[15px] mr-[30px]" style="height: 32rem; w-fill">
</div>
<div class="flex-row row">

    <button onclick="window.location.href='/ADiBA/public/datatype'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Select another Data Type
    </button>
    <button onclick="window.location.href='/ADiBA/public/dashboard'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Develop Your Dashboard !
    </button>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdmwXNvh0Qzj8LegLIcCm9ZRgwPGwYJNk&callback=initMap&v=weekly"
      defer
></script>
<script>
    function initMap() {
        // Create a new map instance
        var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 0, lng: 0 }, // Set the initial center of the map
            zoom: 2 // Set the initial zoom level
        });

        var dataset = @json($dataset); // Assuming you passed the dataset from the controller

        // Add markers to the map based on the latitude and longitude values
        dataset.forEach(function (data) {
            var marker = new google.maps.Marker({
                position: { lat: parseFloat(data.latitude), lng: parseFloat(data.longitude) },
                map: map
            });
        });
    }

    // Initialize the map when the page finishes loading
    google.maps.event.addDomListener(window, 'load', initMap);
</script>
