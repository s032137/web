<?php
    require_once('layout.php');
    head('Race Information');
    topNavBar();
    leftNavBar();
?>
<div>
<h1>Routing</h1>
<!--collapse-->
<div class = "panel-group" id = "accordion">
   <div class = "panel panel-default">
      
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseOne">
               MARATHON ROUTING
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
               HALF MARATHON ROUTING
            </a>
         </h4>
      </div>
      
      <div id = "collapseTwo" class = "panel-collapse collapse">
         <div class = "panel-body">
             
             <img src="img/HalfMarathon.jpg" width="700px" height="456px" >
         </div>
      </div>
      
   </div>
       <div class = "panel panel-default">
      
        <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseThree">
               10KM ROUTING
            </a>
         </h4>
        </div>
      
      <div id = "collapseThree" class = "panel-collapse collapse">
         <div class = "panel-body">            
             <img src="img/10KM.jpg" width="700px" height="456px" >
         </div>
      </div>
      
   </div>
    <div class = "panel panel-default">
      
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseFour">
               10KM WHEELCHAIR RACE ROUTING
            </a>
         </h4>
      </div>
      
      <div id = "collapseFour" class = "panel-collapse collapse">
         <div class = "panel-body">
             
             <img src="img/10KMWheelchair.jpg" width="700px" height="456px" >
         </div>
      </div>
      
   </div>
    <div class = "panel panel-default">
      
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseFive">
               3KM WHEELCHAIR RACE ROUTING
            </a>
         </h4>
      </div>
      
      <div id = "collapseFive" class = "panel-collapse collapse">
         <div class = "panel-body">
             
             <img src="img/3KMWheelchair.jpg" width="700px" height="456px" >
         </div>
      </div>
      
   </div>  
</div>
 


    
<?php   
    footer('raceinfo');

?>

