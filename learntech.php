<html>
<head>
<title>LearnTechnologies</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  display: none;
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#425657;
  overflow-x: hidden;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 30px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
@media screen and (max-height: 1000px;){
  .sidenav a{
    font-size: 20px;
    padding-top: 10px;
  }
}
}
.sidenav a:hover{
  background-color:rgb(0,25,35);
}
</style>

 
</head>

<body>
	
			<!--HTML First Program-->
			
  			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SmartLearn</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-pills mr-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="Home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="learn_html.php">HTML</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="learn_css.php">CSS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="learn_js.php">JavaScript</a>
      </li>
      <li class="nav-item">
        <a href="learn_bootstrap.php" class="nav-link">BootStrap</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="ture" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     
    </ul>
    
  </div>
</nav>
 

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="html_basics.php">HTML Intoduction</a>
  <a href="#">HTML Syntax</a>
  <a href="#">HTML Headings</a>
  <a href="#">HTML Paragraphs</a>
  <a href="#">HTML HyperLinks</a>
  <a href="#">HTML Images</a>
  <a href="#">HTML Videos</a>
  <a href="#">HTML Audios</a>
  <a href="#">HTML Lists</a>
  <a href="#">HTML Navbar</a>
  <a href="#">HTML Tables</a>
  <a href="#">HTML Forms</a>
  <a href="#">HTML Utilites</a>
  <a href="#">HTML Emojis</a>
  <a href="#">HTML Quiz</a>

</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; More</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidenav").style.display = "none";
}
</script>
   


<div class="container">
  <div class="row">
  <div class="col-lg-8 ml-5">
    <div class="card">
      <div class="header">
        <div class="card-body">
        <h3 class="text text-info text-center">GettingStarted</h3>
        <p class="text text-secondary">
          before going to start to learn html html_basics.phpe should have a basic idea HTML Intoduction what is programing language and what is scripting language.
        </p>
        <p class="text "style="text-transform:capitalize;">
          So..In this page , We are going to discussing about what is programing language and what is scripting ..What is Difference between These two..
        </p>
        <h5 class="text text-danger">So,Let's Start</h5>
        <p class="text text-info">
          The Major Difference Between programing and scripting language is :

        </p>
        <h4 class="text">Programing Language</h4>
        <p>
          Programing languages must and should have the compiler.. <br>
          For Example : 1. C language has GCC compiler 2. Java should have the JAVA SDK etc.
        </p>
        <h4 class="text">Scripting Language</h4>
        <p>
          And Now. Coming to scripting languages like html, javascript. we dont need special compiler like our programing languages..
          We can perform our task using our browser like chrome , firefox , safari , opera etc..
        </p>
        <p class="text" style="text-transform: capitalize;">And This is the basic introduction regarding to html</p>
        <h5>HTML History</h5>

        <p class="text">
          In 1980, physicist Tim Berners-Lee, a contractor at CERN, proposed and prototyped ENQUIRE, a system for CERN researchers to use and share documents. 


          In 1989, Berners-Lee wrote a memo proposing an Internet-based hypertext system. Berners-Lee specified HTML and wrote the browser and server software in late 1990.
        </p>
          <div class="image">
          <img src="Images/html_dev.jpg" class="img img-thumnail">
          <div class="description">
            <h5 class="text">Tim Berners-Lee</h5>
          </div>
        </div>

        <button class="btn btn-success d-flex-row"><a href="Home.php " style="text-decoration: none;color:black;" >Previous</a></button>
        <button class="btn btn-success d-flex-row"><a href="html_syntax.php " style="text-decoration: none;color:black;">Next</a></button>


      </div>
     
      
   
  </div>
    </div>
    </div>

</div>
</div>

</body>
</html>