<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="three.php">Home</a></li>
      <li class="active"><a href="teacherinfo.php">Teacher Info</a></li>
      <li><a href="notice.php">Notice Board</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Teacher Info</h3>
   <div class="row col-12">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="img_avatar.png" width="250" alt="invalid Image">
                </div>
                <h4>Md Bob</h4>
                <p>Principal of Collage</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="img_avatar.png" width="250" alt="invalid Image">
                </div>
                <h4>Md Alex</h4>
                <p>Teacher</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="img_avatar.png" width="250" alt="invalid Image">
                </div>
                <h4>Mike Smith</h4>
                <p>Lecturer</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="img_avatar.png" width="250" alt="invalid Image">
                </div>
                <h4>Alexgerder</h4>
                <p>Lecturer</p>
            </div>
        </div>
   </div>
</div>