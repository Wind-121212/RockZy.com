<html>
    <style>
body {
       height: 200vh;
       background-image: url(meadow-with-trees-wooden-fence.jpg);
       background-position: center;
       background-repeat: no-repeat;
}
.container {
  position: relative;
  width: 50%;
}
img {
  opacity: 1;
  display: block;
  width: 50%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
img:hover{
  opacity: 0.3;
  width: 51%;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 28%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}
.container:hover .middle {
  opacity: 1;
}
    .topnav {
        background: #303030;
        overflow: hidden;
      }
  .topnav a{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
  .topnav h1{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
  .topnav a:hover {
  background-color: #ddd;
  color: black;
}
  .topnav a.active {
  background:#f2f2f2;
  color: black;
}
  .topnav a.right {
  float: right;
  cursor: pointer;
}
.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
  border-radius: 20px;
}
</style>
</head>
<body>
<div class="topnav">
   <a class="hover" href="home.php">home</a>
   <a class="hover" href="igneous.php">igneous</a>
   <a class="active" href="sedimentary.php">sedimentary</a>
   <a class="hover" href="metamorphic.php">metamorphic</a>
   <a class="right" href="#User">User</a>
 </div>

<div class="container">
  <img src="pngwing.com.png" alt="Avatar">
  <div class="middle">
    <div class="text">textygeehdij9</div>
  </div>
</div>
<div class="container">
  <img src="pngwing.com.png" alt="Avatar">
  <div class="middle">
    <div class="text">text</div>
  </div>
</div>
<div class="container">
  <img src="pngwing.com.png" alt="Avatar">
  <div class="middle">
    <div class="text">text</div>
  </div>
</div>
  
</body>
  </style>
</html>