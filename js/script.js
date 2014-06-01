var appUserID = "";
$(document).ready(function() {
	appUserID = localStorage.getItem("appUserID");
	console.log(appUserID);
	var fName = "";
	var lName = "";
	var email = "";
	var phone = "";
	var fbID = "";
	
	$.post('mysql/addUser.php',
	{
	 id: appUserID,
	 fName: fName,
	 lName: lName,
	 phone: phone,
	 email: email,
	 fbID: fbID
	},
	function(data){
		var holder = data.trim();
		localStorage.setItem("appUserID", holder);
		appUserID = localStorage.getItem("appUserID");
	});
});


function getLocation() {
var x = document.getElementById("error");
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML = "Geolocation is not supported by this browser, please enter an address.";}
  }
function showPosition(position) {
  $('#address').val("Latitude: " + position.coords.latitude + " Longitude: " + position.coords.longitude);
  $('#lat').val(position.coords.latitude);
  $('#lng').val(position.coords.longitude);
}
  
function reportIssue(){
	appUserID = localStorage.getItem("appUserID");
	var location = $('#address').val();
  	var lat = $('#lat').val();
  	var lng = $('#lng').val();
	var type = $('#issues').val();
	
	if (type != "" && location !=""){
		$.post('mysql/addIssue.php',
		{
		 id: appUserID,
		 location: location,
		 type: type,
		 lat: lat,
		 lng: lng
		},
		function(data){
		 console.log(data);
		 var holder = data.trim();
		 $('#updateModal').modal('show');
		 $('#issueID').val(holder);
		});
	} else {
		if (location == ""){
			$('#error').text('Please enter the full address or click the location button to get your current location.').fadeIn(1000).delay(4000).fadeOut(1000);	
		}
		if (type == ""){
			$('#errorType').text('Please select the type of water waste issue.').fadeIn(1000).delay(4000).fadeOut(1000);
		}
	}
}

function stayUpdated(){
	appUserID = localStorage.getItem("appUserID");
	var email = $('#email').val();
  	var issueID = $('#issueID').val();
	
	if (email != ""){
		$.post('mysql/addEmail.php',
		{
		 id: appUserID,
		 issueID: issueID,
		 email: email
		},
		function(data){
		 console.log(data);
		 $('#updateModal').modal('hide');
		 document.location.href = "/map.php";
		 
		});
	} else {
		if (email == ""){
			$('#errorEmail').text('Please enter a valid email.').fadeIn(1000).delay(4000).fadeOut(1000);	
		}
	}
}

function addNewPoint(lat,lng,address,type,time,notes){

	require([
        "dojo/ready",
        "dojo/dom",
        "esri/urlUtils",
        "esri/arcgis/utils",
		"esri/geometry/Point",
		"esri/graphic",
		"esri/layers/FeatureLayer",
        "dojo/domReady!"
      ], function(
        ready,
        dom,
        urlUtils,
        arcgisUtils,
		Point,
		Graphic,
		FeatureLayer
      ) {
        ready(function(){
			
			var xloc = lng;
			var yloc = lat;
			var pt = new Point(xloc,yloc,null);
			 
			  var attr = {"address":address,"time":time,"type":type, "notes":notes};
			  
			  var adds = [new Graphic(pt,null,attr,null)];
			  var flayer = new FeatureLayer("http://services3.arcgis.com/WSowVYBCMK1LUBIt/arcgis/rest/services/Water_Issue_Report/FeatureServer/0");
			  flayer.applyEdits(adds);
			
		});
		
      });
	  console.log("yay");	  
}