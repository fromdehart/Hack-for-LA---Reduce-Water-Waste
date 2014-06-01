<?php include 'header.php'; ?>

      
      <div class="row" style="margin: 50px 0 0;">
      	<div class="col-sm-12" style="text-align:center;">
          <h1>Help Resolve Water Waste in Your Community!</h1>
          <p>Alert the city and your local community of water waste issues in one click. Stay updated on the issues you report.</p>
		  <div>
            <div class="row" style="margin-top:35px;">
            
                <div class="col-sm-8 col-sm-offset-2 filters">  
                	<div class="labels">  	    
                    	<label for="exampleInputEmail1">Full Address of Issue:</label>
                    </div>
                    <div class="input-group">
                      
                      <input type="text" class="form-control" placeholder="Street City, State Zip" id="address" />
                      <input type="hidden" class="form-control" id="lat" />
                      <input type="hidden" class="form-control" id="lng" />
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onClick="getLocation()"><span class="glyphicon glyphicon-map-marker icon"></span></button>
                      </span>
                    </div><!-- /input-group -->
                <div id="error"></div>
                </div>
           </div>
           <div class="row">     
                <div class="col-sm-8 col-sm-offset-2 filters">    	    
                    <select class="form-control" id="issues">
                    	<option value="">Select Water Waste Issue...</option>
                        <option value="Broken Sprinkler">Broken Sprinkler</option>
                        <option value="Improper Lawn Watering">Improper Lawn Watering</option>
                        <option value="Broken Pipe / Onsite Leak">Broken Pipe / Onsite Leak</option>
                    </select>
                    <div id="errorType"></div>
                </div>
           </div>
           <div class="row">     
                <div class="col-sm-8 col-sm-offset-2 filters">       	    
                    <a class="btn btn-primary" href="#" role="button" onClick="reportIssue()" style="width:100%;">Report Issue</a>
                    <p style="margin-top:10px;">or call <a href="tel://+18003425397">1-800-DIAL DWP</a></p>
                </div>        		
		   </div> 
        </div>
      </div>
      	

<?php include 'footer.php'; ?>      