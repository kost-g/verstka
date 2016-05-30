// function initialize() {
//   var mapProp = {
//     center:new google.maps.LatLng(41.0980623,29.006861),
//     zoom:16.25,
//     mapTypeId:google.maps.MapTypeId.ROADMAP
//   };
//   var map=new google.maps.Map(document.getElementById("map"), mapProp);
//   var marker=new google.maps.Marker({
//   position:myCenter,
//   });
// marker.setMap(map);
// }
// google.maps.event.addDomListener(window, 'load', initialize);


/////////////////////
var myCenter=new google.maps.LatLng(41.098146, 29.005525);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("map"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);