$(document).ready(function () {
  function onSubmit(event) {
    // Get the form values
    event.preventDefault();
    var origin = $("#source").val();
    var destination = $("#destination").val();

    if ((origin == "") | (destination == "")) {
      alert("Please input correctly");
      return;
    }

    $.ajax({
      url: `http://localhost/maps_proxy.php?origin=${origin}&destination=${destination}`, // Change to the location of your PHP file
      type: "GET",
      success: function (response) {
        if (
          response &&
          response.routes &&
          response.routes[0] &&
          response.routes[0].legs &&
          response.routes[0].legs[0]
        ) {
          var miles = response.routes[0].legs[0].distance.text;
          $("#mileage").text(miles);
        } else {
          alert("Unable to fetch mileage. Please check the addresses.");
        }
      },
      error: function () {
        alert("Error fetching mileage from Google Maps API");
      },
    });

    var tollData = {
      from: {
        address: origin,
      },
      to: {
        address: destination,
      },
      vehicleType: "2AxlesAuto",
    };

    console.log("Hello");

    $.ajax({
      url: "tollguru_proxy.php",
      type: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      data: JSON.stringify(tollData),
      success: function (response) {
        routes = response.routes;
        let cost = 0;
        for (let route of routes) {
          cost += route.costs.tag;
        }
        console.log(cost);
        $("#toll").text(cost);
      },
      error: function () {
        alert("Error fetching toll from TollGuru API");
      },
    });
  }
  $("#submit-btn").click(function (event) {
    onSubmit(event);
  });
});
