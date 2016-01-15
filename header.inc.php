<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Aakriti Gupta - Projects</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse" style="position:fixed;width:100%;">
  <div class="container-fluid">
    <div class="navbar-header navbar-inner">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" data-toggle="modal" data-target="#profile">
        <img src="images/aakriti.jpg">
      </a>
      <p data-toggle="modal" data-target="#profile" class="navbar-text">Aakriti Gupta<br>ag.1486c@gmail.com</p>
    </div>

    <div class="collapse navbar-collapse" id="search">
        <!-- <form class="navbar-form navbar-right form-group" role="search">
          <input type="text" id="searchbar" class="form-control" placeholder="Search Projects">
          <button type="submit" class="btn btn-primary">Search</button>
      </form> -->
        <button id="profile-btn" type="button" class="btn btn-primary btn-lg navbar-right" data-toggle="modal" data-target="#profile">Profile</button>
    </div>
  </div>
</nav>

<div class="modal" id="profile">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <label class="modal-title">Profile</label> 
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-md-4"><img src="images/aakriti.jpg"></div>
          <div class="col-md-8">
            <p>Aakriti Gupta</p>
            <p>Female</p>
            <p>21 years</p>

          </div>
        
        </div>
      </div>

      <div class="modal-footer">
        <a target="_blank" href="resume/resume.pdf" class="btn btn-danger">Download Resume</a>
      </div>

      </form>

    </div>
  </div>  
</div>

</body>
</html>