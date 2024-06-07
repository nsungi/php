<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="#style.css">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  block-size: 100%;
  inline-size: 0;
  position: fixed;
  z-index: 1;
  inset-block-start: 0;
  inset-inline-start: 0;
  background-color: bla;
  overflow-x: hidden;
  transition: 0.5s;
  padding-block-start: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  inset-block-start: 0;
  inset-inline-end: 25px;
  font-size: 36px;
  margin-inline-start: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-block-size: 450px) {
  .sidenav {padding-block-start: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>

</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">ADMIN</a>
  <a href="#">ADD BOOK</a>
  <a href="#">BOOK REPORT</a>
  <a href="#">BOOK REQUEST</a>
  <a href="#">ADD STUDENT</a>
  <a href="#">STUDENT REPORT</a>
  <a href="#">ISSUE BOOK</a>
  <a href="#">ISSUE REPORTT</a>
  <a href="#">LOGOUT</a>
</div>

<div id="main">
  <h2</h2>
  <p></p>
  <span style="font-size:16px;cursor:pointer" onclick="openNav()">&#9776; Dashboard</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
 
</body>
</html>