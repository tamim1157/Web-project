
<html>
<head>
    <title>Homepage</title>

<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<style>
    *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
body{
    font-size: 20px;
    overflow-x: hidden;
    color: white;
    font-family: 'Flamenco', cursive;
}
header{
    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("blackboard.jpg");
    height:100vh;
    background-size: cover;
    background-repeat: no-repeat;
}
.clearfix:after{
    content: " ";
    visibility: ;
    display: block;
    height: 0px;
    clear: both;
}
.row{
    max-width: 1180px;
    margin:0 auto;
}
.logo{
    height: 120px;
    width: auto;
    float: left;
    margin-top: 20px;
}
.main-nav{
    float: right;
    margin-top: 60px;
}
.main-nav li{
    display: inline-block;
    list-style: none;
    margin-left: 40px;
}
.main-nav li a{
    padding: 5px 0;
    color:#fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 90%;
    font-weight: 100;
}
.main-nav li a:hover{
    border-bottom: 2px solid #bf55ec;
}


.table{
    margin-left:650px;
}
.search{
    margin-left:670px;
    margin-top:20px;
}
.name1{
    padding-right: 5px;
}
.standered1{
   padding-right: 15px;
}
.submit{
    width:55px;
}
.main-content-header{
    border-top: 2px solid white;
}
h2{
    margin-top: 35px;
    margin-left: 260px;
}
.table1{
    margin-left: 200px;
    margin-top: 25px;
}
.table2{
    margin-left: 140px;
    margin-top: 15px;
}
h3{
    margin-left: 310px;
    margin-bottom: 15px;
    margin-top: 15px;
}
.table3{
    margin-left: 260px;
    margin-top: 4px;
}
.table3{
    margin-top: 15px;
    
}
.table4{
    margin-top: 15px;
    margin-left: 360px;
}


    </style>

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
        <img src="{{ asset('logo.png') }}" class="logo"/>
            <ul class="main-nav" animate slideInDown>
                <li><a href="/Homepage">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>First Step- Student Details</h2>
       
      </div>
    </header>
    
</body>
</html>
