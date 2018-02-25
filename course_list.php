<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS - Course List</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
	<div class="top-bar">
	  <div class="top-bar-left">
		<ul class="dropdown menu" data-dropdown-menu>
		  <li class="menu-text">SIS++</li>
		  <li><a href="course_list.php">Course List</a></li>
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
			<ul class="menu">
			  <li><input type="search" placeholder="Class Search"></li>
			  <li><button type="button" class="button">Search</button></li>
			</ul>
			<li>
				<a href="account.php">Welcome, Big boyyy</a>
			</li>
			<li>
				<a href="#"></a>
				<ul class="menu vertical">
				  <li><a href="account.php">Profile</a></li>
				  <li><a href="account.php">Classes</a></li>
				  <li><a href="https://www.linkedin.com/">LinkedIn</a></li>
				  <li><a href="login.php">Logout</a></li> <!-- we need to make sure this actually logs them out-->
				</ul>
			</li>
		</ul>
	  </div>
	</div>
    <div class="grid-container">
	  
      <div class="grid-x grid-padding-x">
        
        <ul class="menu" style="margin-top:2%;">
          <li><input type="search" placeholder="Enter a course ID, Instructor, Time, etc. (ex. SWEN-344)" style="width:200%"></li>
          <li><button type="button" class="button" style="margin-left:267%;">Search</button></li>
        </ul>
        
        <table class="hover" style="margin-top:2%;">
          <tr>
            <th>Course</th>
            <th>Section</th>
            <th>Time</th>
            <th>Instructor</th>
            <th>Room</th>
          </tr>
          
          
          <tr>
            
            <td><a href="course_view.php">SWEN-344</a></td>
            <td>01</td>
            <td>10:10 am - 11:05 am</td>
            <td>Danny Boye</td>
            <td>GOL 1520</td>
          </tr>
          
          <tr>
            <td>SWEN-344</td>
            <td>01</td>
            <td>10:10 am - 11:05 am</td>
            <td>Danny Boye</td>
            <td>GOL 1520</td>
          </tr>
          <tr>
            <td>SWEN-344</td>
            <td>01</td>
            <td>10:10 am - 11:05 am</td>
            <td>Danny Boye</td>
            <td>GOL 1520</td>
          </tr>
          <tr>
            <td>SWEN-344</td>
            <td>01</td>
            <td>10:10 am - 11:05 am</td>
            <td>Danny Boye</td>
            <td>GOL 1520</td>
          </tr>
          <tr>
            <td>SWEN-344</td>
            <td>01</td>
            <td>10:10 am - 11:05 am</td>
            <td>Danny Boye</td>
            <td>GOL 1520</td>
          </tr>
        </table>
      </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
