<?php
    require_once('layout.php');
    head('Race Information');
    topNavBar();
    leftNavBar();
?>
<div>
<h1>Routing</h1>

<div class = "panel-group" id = "accordion">
   <div class = "panel panel-default">
      
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseOne">
               Routing
            </a>
         </h4>
      </div>
      
      <div id = "collapseOne" class = "panel-collapse collapse in">
         <div class = "panel-body">
             
             <img src="img/MarathonMap.jpg" width="700px" height="456px" >
         </div>
      </div>
      
   </div>
   <div class = "panel panel-default">
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseTwo">
               EMAIL
            </a>
         </h4>
      </div>

      <div id = "collapseTwo" class = "panel-collapse collapse">
         <div class = "panel-body">
             <p>In order to have your enquiry handled efficiently, please send your question to the related contact listed below:</p>
             
             <p>General Enquiry: hkmarathon@hkaaa.com</p>
             
             <p>Registration and Participant's Information: entry_hkmarathon@hkaaa.com</p>
             
         </div>
      </div>
      
   </div>
  
</div>
 


    
<?php   
    footer('raceinfo');

?>

