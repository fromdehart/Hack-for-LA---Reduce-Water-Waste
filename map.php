<?php include 'header.php'; ?>
    
      

    
    <script>
      require([
        "dojo/parser",
        "dojo/ready",
        "dijit/layout/BorderContainer",
        "dijit/layout/ContentPane",
        "dojo/dom",
        "esri/map", 
        "esri/urlUtils",
        "esri/arcgis/utils",
        "esri/dijit/Legend",
        "esri/dijit/Scalebar",
		"esri/geometry/Point",
		"esri/graphic",
        "dojo/domReady!"
      ], function(
        parser,
        ready,
        BorderContainer,
        ContentPane,
        dom,
        Map,
        urlUtils,
        arcgisUtils,
        Legend,
        Scalebar,
		Point,
		Graphic
      ) {
        ready(function(){

        //parser.parse();
		

        arcgisUtils.createMap("ca17ad17dba94124b157d9fe9de4fb47","map").then(function(response){
          //update the app 
          //dom.byId("title").innerHTML = response.itemInfo.item.title;
          //dom.byId("subtitle").innerHTML = response.itemInfo.item.snippet;

          var map = response.map;



          //add the scalebar 
          var scalebar = new Scalebar({
            map: map,
            scalebarUnit: "english"
          });
			
		});
		
      });
	  
	  });
	  
    </script>

<div class="row" style="margin: 50px 0 0;">
      	<div class="col-sm-12" style="text-align:center;">
          <h1>Interactive Water Waste Map</h1>
		</div>

  <div class="claro">
    <div id="mainWindow" data-dojo-type="dijit/layout/BorderContainer" data-dojo-props="design:'headline'" style="width:100%; height:100%;">
      <div id="header" class="shadow roundedCorners" data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'top'">
        <div id="title"></div>
        <div id="subtitle"></div>
      </div>
      <div id="map" class="roundedCorners shadow" data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'center'"></div>
      <div id="rightPane" class="roundedCorners shadow" data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'right'" >
        <div id="legend"></div>
      </div>
    </div>
  </div>

 </div>

<?php include 'footer.php'; ?>      