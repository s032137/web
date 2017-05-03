<?php
    require_once('layout.php');
    head('Enquiry');
    topNavBar();
    leftNavBar();
?>
<div>
    <!--abouts bar-->
    <nav class = "navbar navbar-default" role = "navigation" >   
       <div class = "navbar-header">
          <a class = "navbar-brand" style="color: blue "><span class="glyphicon glyphicon-map-marker"><b>Contact Us</b></span></a>
       </div>   
    </nav>
    <br>    
<p>The HKAAA is committed to develop and promote local athletics in Hong Kong. Your advice and comments are most valuable to our continuous service refinements.</p>

<div class = "panel-group" id = "accordion">
   <div class = "panel panel-default">
      
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseOne">
               HOTLINE
            </a>
         </h4>
      </div>
      
      <div id = "collapseOne" class = "panel-collapse collapse in">
         <div class = "panel-body">
             <p>(852) 2577 0800</p>
             <p> Mon - Fri: 09:00 - 20:00; Sat: 09:00 - 13:00. Close on Sundays and public holidays)</p>
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
    footer('About Us');

?>

