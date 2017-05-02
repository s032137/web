<?php
    require_once('layout.php');
    head('About Us');
    topNavBar();
    leftNavBar();
?>
<h1>About the Organizer</h1>
<img src="img/HKAAA.jpg" alt="HKAAA logo S" />
<div class = "panel-group" id = "accordion">
   <div class = "panel panel-default">
      
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#vesion">
               Our Vision
            </a>
         </h4>
      </div>
      
      <div id = "vesion" class = "panel-collapse collapse in">
         <div class = "panel-body">
                The Hong Kong Amateur Athletic Association to be one of the best National Sports Associations in Hong Kong.
         </div>
      </div>
      
   </div>
   <!--
   <div class = "panel panel-default">
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseTwo">
               Our Mission
            </a>
         </h4>
      </div>

      <div id = "collapseTwo" class = "panel-collapse collapse">
         <div class = "panel-body">
            To promote athletics in Hong Kong, including the development of athletes, coaches, technical officials and professional staff, 
            so as to enhance the athletic performance as well as a healthy image, making Athletics one of the most popular sports in Hong Kong.
         </div>
      </div>
      
   </div>
   
   <div class = "panel panel-default">
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseThree">
               Our Objectives
            </a>
         </h4>
      </div>
     
      <div id = "collapseThree" class = "panel-collapse collapse">
         <div class = "panel-body">
                To promote the sport of athletics in Hong Kong, including track & field, road races, cross-country and race walking
                To establish and provide a development spectrum for athletes from the grass root leading to elite level
                To select athletes in the sport to represent Hong Kong in Olympic Games, Asian Games and World, Asian and Regional Championships, as well as overseas international competitions
                To establish and provide systematic training to a national squad of athletes, at both junior and senior levels
                To establish systematic structure and trainings for coaches, judges and officials
                To organize domestic and international competitions
                To support and coordinate athletic activities among member clubs
         </div>
      </div>
     -->
   </div>


    
<?php   
    footer('About Us');

?>

