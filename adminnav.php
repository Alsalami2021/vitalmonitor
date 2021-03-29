 <nav class="navbar navbar-light" style="background-color: #00395d;color: white">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border: 1px solid white">
        <span class="icon-bar" style="background-color: white;color: white"></span>
        <span class="icon-bar" style="background-color: white;color: white"></span>
        <span class="icon-bar" style="background-color: white;color: white"></span>
      </button>
      <a class="navbar-brand" href="#">DashBoard</a>
    </div>
    <div id="myNavbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php" style="color: #00aeff"><i class="fa fa-home"></i> Home</a></li>
     
       <li class="dropdown">
        <a style="color: #00aeff" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> Manage Patient 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addpatient.php">Add New Patient</a></li>
          <li><a href="mp.php">Delete & Edit  Patient</a></li>
          
        </ul>
      </li>



       <li class="dropdown">
        <a style="color: #00aeff" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-users"></i> Manage Doctors 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="adddoctor.php">Add New Doctor</a></li>
          <li><a href="md.php">Delete & Edit  Doctor</a></li>
          
        </ul>
      </li>


       <li class="dropdown">
        <a style="color: #00aeff" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-car"></i> Manage Ambulance Car
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addcar.php">Add New Car</a></li>
          <li><a href="mc.php">Delete & Edit  Car</a></li>
          
        </ul>
      </li>



        <li class="dropdown">
        <a style="color: #00aeff" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-book"></i> Request From App
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="ar.php">All Request</a></li>
          
        </ul>
      </li>

         <li class="dropdown">
        <a style="color: #00aeff" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-book"></i> Patient Status
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="addstate.php">Add State</a></li>
          
        </ul>
      </li>
         
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.php" style="color: #00aeff;"><span class="fa fa-user"></span> LogOut</a></li>
    </ul>
    </div>
  </div>
</nav>