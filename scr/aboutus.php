<?php
    require_once('layout.php');
    head('About Us');
    topNavBar();
    leftNavBar();
?>
<div>
    <!--abouts Bar-->
    <nav class = "navbar navbar-default" role = "navigation" >   
       <div class = "navbar-header">
          <a class = "navbar-brand" style="color: blue "><span class="glyphicon glyphicon-map-marker"><b>About Us</b></span></a>
       </div>   
    </nav>

<br>
<img src="img/HKAAA.jpg" alt="HKAAA logo S" />
<br>
<br>
<br>
<!--ABOUT US CONTENT-->
<div class = "panel-group" id = "accordion">
   <div class = "panel panel-default">
      
      <div class = "panel-heading">
         <h4 class = "panel-title">
            <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseOne">
               Our Vision
            </a>
         </h4>
      </div>
      
      <div id = "collapseOne" class = "panel-collapse collapse in">
         <div class = "panel-body">
                The Hong Kong Amateur Athletic Association to be one of the best National Sports Associations in Hong Kong.
         </div>
      </div>
      
   </div>
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
             <ul> 
                 <li>To promote the sport of athletics in Hong Kong, including track & field, road races, cross-country and race walking</li>
                <li>To establish and provide a development spectrum for athletes from the grass root leading to elite level</li>
                <li>To select athletes in the sport to represent Hong Kong in Olympic Games, Asian Games and World, Asian and Regional Championships, as well as overseas international competitions</li>
                <li>To establish and provide systematic training to a national squad of athletes, at both junior and senior levels</li>
                <li>To establish systematic structure and trainings for coaches, judges and officials</li>
                <li>To organize domestic and international competitions</li>
                <li>To support and coordinate athletic activities among member clubs</li>
             </ul>    
         </div>
      </div>
   </div>
</div>
 


    
<?php   
    footer('About Us');

?>

