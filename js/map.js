(function ($) {
  var mapStyle = [
    {
      featureType: "all",
      elementType: "geometry.fill",
      stylers: [
        {
          visibility: "on",
        },
      ],
    },
    {
      featureType: "administrative",
      elementType: "all",
      stylers: [
        {
          color: "#f2f2f2",
        },
      ],
    },
    {
      featureType: "administrative",
      elementType: "labels.text.fill",
      stylers: [
        {
          color: "#686868",
        },
        {
          visibility: "on",
        },
      ],
    },
    {
      featureType: "landscape",
      elementType: "all",
      stylers: [
        {
          color: "#f2f2f2",
        },
      ],
    },
    {
      featureType: "poi",
      elementType: "all",
      stylers: [
        {
          visibility: "off",
        },
      ],
    },
    {
      featureType: "poi.park",
      elementType: "all",
      stylers: [
        {
          visibility: "on",
        },
      ],
    },
    {
      featureType: "poi.park",
      elementType: "labels.icon",
      stylers: [
        {
          visibility: "off",
        },
      ],
    },
    {
      featureType: "road",
      elementType: "all",
      stylers: [
        {
          saturation: -100,
        },
        {
          lightness: 45,
        },
      ],
    },
    {
      featureType: "road.highway",
      elementType: "all",
      stylers: [
        {
          visibility: "simplified",
        },
      ],
    },
    {
      featureType: "road.highway",
      elementType: "geometry.fill",
      stylers: [
        {
          lightness: "-22",
        },
        {
          visibility: "on",
        },
        {
          color: "#b4b4b4",
        },
      ],
    },
    {
      featureType: "road.highway",
      elementType: "geometry.stroke",
      stylers: [
        {
          saturation: "-51",
        },
        {
          lightness: "11",
        },
      ],
    },
    {
      featureType: "road.highway",
      elementType: "labels.text",
      stylers: [
        {
          saturation: "3",
        },
        {
          lightness: "-56",
        },
        {
          visibility: "simplified",
        },
      ],
    },
    {
      featureType: "road.highway",
      elementType: "labels.text.fill",
      stylers: [
        {
          lightness: "-52",
        },
        {
          color: "#9094a0",
        },
        {
          visibility: "simplified",
        },
      ],
    },
    {
      featureType: "road.highway",
      elementType: "labels.text.stroke",
      stylers: [
        {
          weight: "6.13",
        },
      ],
    },
    {
      featureType: "road.highway",
      elementType: "labels.icon",
      stylers: [
        {
          weight: "1.24",
        },
        {
          saturation: "-100",
        },
        {
          lightness: "-10",
        },
        {
          gamma: "0.94",
        },
        {
          visibility: "off",
        },
      ],
    },
    {
      featureType: "road.highway.controlled_access",
      elementType: "geometry.fill",
      stylers: [
        {
          visibility: "on",
        },
        {
          color: "#b4b4b4",
        },
        {
          weight: "5.40",
        },
        {
          lightness: "7",
        },
      ],
    },
    {
      featureType: "road.highway.controlled_access",
      elementType: "labels.text",
      stylers: [
        {
          visibility: "simplified",
        },
        {
          color: "#231f1f",
        },
      ],
    },
    {
      featureType: "road.highway.controlled_access",
      elementType: "labels.text.fill",
      stylers: [
        {
          visibility: "simplified",
        },
        {
          color: "#595151",
        },
      ],
    },
    {
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [
        {
          lightness: "-16",
        },
      ],
    },
    {
      featureType: "road.arterial",
      elementType: "geometry.fill",
      stylers: [
        {
          visibility: "on",
        },
        {
          color: "#d7d7d7",
        },
      ],
    },
    {
      featureType: "road.arterial",
      elementType: "labels.text",
      stylers: [
        {
          color: "#282626",
        },
        {
          visibility: "simplified",
        },
      ],
    },
    {
      featureType: "road.arterial",
      elementType: "labels.text.fill",
      stylers: [
        {
          saturation: "-41",
        },
        {
          lightness: "-41",
        },
        {
          color: "#2a4592",
        },
        {
          visibility: "simplified",
        },
      ],
    },
    {
      featureType: "road.arterial",
      elementType: "labels.text.stroke",
      stylers: [
        {
          weight: "1.10",
        },
        {
          color: "#ffffff",
        },
      ],
    },
    {
      featureType: "road.arterial",
      elementType: "labels.icon",
      stylers: [
        {
          visibility: "on",
        },
      ],
    },
    {
      featureType: "road.local",
      elementType: "geometry.fill",
      stylers: [
        {
          lightness: "-16",
        },
        {
          weight: "0.72",
        },
      ],
    },
    {
      featureType: "road.local",
      elementType: "labels.text.fill",
      stylers: [
        {
          lightness: "-37",
        },
        {
          color: "#2a4592",
        },
      ],
    },
    {
      featureType: "transit",
      elementType: "all",
      stylers: [
        {
          visibility: "off",
        },
      ],
    },
    {
      featureType: "transit.line",
      elementType: "geometry.fill",
      stylers: [
        {
          visibility: "off",
        },
        {
          color: "#eeed6a",
        },
      ],
    },
    {
      featureType: "transit.line",
      elementType: "geometry.stroke",
      stylers: [
        {
          visibility: "off",
        },
        {
          color: "#0a0808",
        },
      ],
    },
    {
      featureType: "water",
      elementType: "all",
      stylers: [
        {
          color: "#b7e4f4",
        },
        {
          visibility: "on",
        },
      ],
    },
  ];
  /**
   * initMap
   *
   * Renders a Google Map onto the selected jQuery element
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @return  object The map instance.
   */
  function initMap($el) {
    // Find marker elements within map.
    var $markers = $el.find(".marker");

    // Create gerenic map.
    var mapArgs = {
      zoom: $el.data("zoom") || 16,
      styles: mapStyle,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    };
    var map = new google.maps.Map($el[0], mapArgs);

    // Add markers.
    map.markers = [];
    $markers.each(function () {
      initMarker($(this), map);
    });

    // Center map based on markers.
    centerMap(map);

    // Return map instance.
    return map;
  }

  /**
   * initMarker
   *
   * Creates a marker for the given jQuery element and map.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @param   object The map instance.
   * @return  object The marker instance.
   */
  function initMarker($marker, map) {
    // Get position from marker.
    var lat = $marker.data("lat");
    var lng = $marker.data("lng");
    var latLng = {
      lat: parseFloat(lat),
      lng: parseFloat(lng),
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
      position: latLng,
      map: map,
    });

    // Append to reference for later use.
    map.markers.push(marker);

    // If marker contains HTML, add it to an infoWindow.
    if ($marker.html()) {
      // Create info window.
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html(),
      });

      // Show info window when marker is clicked.
      google.maps.event.addListener(marker, "click", function () {
        infowindow.open(map, marker);
      });
    }
  }

  /**
   * centerMap
   *
   * Centers the map showing all markers in view.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   object The map instance.
   * @return  void
   */
  function centerMap(map) {
    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function (marker) {
      bounds.extend({
        lat: marker.position.lat(),
        lng: marker.position.lng(),
      });
    });

    // Case: Single marker.
    if (map.markers.length == 1) {
      map.setCenter(bounds.getCenter());

      // Case: Multiple markers.
    } else {
      map.fitBounds(bounds);
    }
  }

  // Render maps on page load.
  $(document).ready(function () {
    $(".acf-map").each(function () {
      var map = initMap($(this));
    });
  });
})(jQuery);
