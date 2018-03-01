<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS - My Account</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
	<div class="top-bar">
	  <div class="top-bar-left">
		<ul class="dropdown menu" data-dropdown-menu>
		  <li class="menu-text">SIS++</li>
		  <li><a href="course_list.html">Course List</a></li>
		  <li>
			<a href="#">Admin</a>
			<ul class="menu vertical">
			  <li><a href="#">Admin Action 1</a></li>
			  <li><a href="#">Admin Action 2</a></li>
			  <li><a href="#">Admin Action 3</a></li>
			</ul>
		  </li>
		</ul>
	  </div>
	  <div class="top-bar-right">
		<ul class="dropdown menu" data-dropdown-menu>
      <!--<form action="course_search.html" method="get">-->
        <ul class="menu">
          <li><input type="search" placeholder="Class Search"></li>
          <li><button type="submit" class="button" formaction="course_search.html">Search</button></li> <!-- Search functionality here-->
        </ul>
      <!--<form>-->
			<li>
				<a href="account.html">Welcome, Big boyyy</a> <!-- Name here -->
			</li>
			<li>
				<a href="#"></a>
				<ul class="menu vertical">
				  <li><a href="account.html">Profile</a></li>
				  <li><a href="account.html">Classes</a></li>
				  <li><a href="https://www.linkedin.com/">LinkedIn</a></li>
				  <li><a href="login.html">Logout</a></li> <!-- we need to make sure this actually logs them out-->
				</ul>
			</li>
		</ul>
	  </div>
	</div>
  <div class="grid-container">
  
    <div class="grid-x grid-padding-x" style="padding-top:2%;">
  
      <div class="large-4 medium-4 small-4 cell">
        <img src="https://i0.wp.com/radaronline.com/wp-content/uploads/2017/05/betty-white-secret-suitor-split-pp.jpg?fit=640%2C420&ssl=1" alt="my_profile_image">
      </div>
      <div class="large-4 medium-4 small-4 cell">
        <ul class="profile-list">
          <li>Name</li>
          <li>Major</li>
          <li>Expected Grad. Term</li>
        </ul>
      </div>
      <div class="large-2 medium-2 small-3 cell">
        <ul class="profile-list">
          <p><input type="submit" href="https://www.linkedin.com"class="button expanded rit-orange" value="LinkedIn"></input></p>
          <li>GPA</li>
        </ul>
      </div>
      
    </div>
  
  
    <div class="grid-x grid-padding-x" style="padding-top: 2%;">
      <div class="large-12 medium-12 small-12 columns">
      <ul class="horizontal tabs" data-tabs id="course-tabs">
        <li class="tabs-title favorited-classes-title"><a href="#panel1v">Favorited</a></li>
        <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Current Semester</a></li>
        <li class="tabs-title"><a href="#panel2v">Fall 2017</a></li>
        <li class="tabs-title"><a href="#panel3v">Summer 2017</a></li>
        <li class="tabs-title"><a href="#panel4v">Spring 2017</a></li>
        <li class="tabs-title"><a href="#panel5v">Fall 2016</a></li>
      </ul>
      </div>
      <div class="large-12 medium-12 small-12 cell">
        <div class="tabs-content" data-tabs-content="course-tabs">
          <div class="tabs-panel is-active" id="panel1v">
            <table class="hover">
              <tr>
                  <th>Course</th>
                  <th>Section</th>
                  <th>Time</th>
                  <th>Instructor</th>
                  <th>Room</th>
              </tr> <!--For loop for query here, delete everything else-->
                 <?php
                    //get all the data for the classes the user is in
//                 $response = file_get_contents('http://127.0.0.1/student_class?student_id=1');
//                 $response = json_decode($response);
//
//                 //For each class object
//                 foreach ($response as $class_enrolled){
//                     echo("<tr>");
//                     foreach($class_enrolled as $class_name=>$value) {
//                         echo("<td><a href=\"course_view.html\">SWEN-344</a></td>");
//                         echo("<td>01</td>");
//                         echo("<td>10:10 am - 11:05 am</td>");
//                         echo("<td>Danny Boye</td>");
//                         echo("<td>GOL 1520</td>");
//
//                     }
//                     echo("<tr>");
//                 }
                 ?>
            <table>
          </div>
          <div class="tabs-panel" id="panel2v">
          </div>
          <div class="tabs-panel" id="panel3v">
          </div>
          <div class="tabs-panel" id="panel4v">
          </div>
          <div class="tabs-panel" id="panel5v">
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/what-input/dist/what-input.js"></script>
  <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
  <script src="js/app.js"></script>
  </body>
</html>
