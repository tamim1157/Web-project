
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
      *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
body{
    font-size: 30px;
    overflow-x: hidden;
    color: white;
    font-family: 'Flamenco', cursive;
}
header{
    background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(../image/working.jpg);
    height:100vh;
    background-size: cover;
    background-repeat: no-repeat;
}
.clearfix:after{
    content: " ";
    visibility: ;
    display: block;
    height: 9px;
    clear: both;
}
.row{
    max-width: 1180px;
    margin:0 auto;
}

.main-nav{
    float: right;
    margin-top: 30px;
}
.main-nav li{
    display: inline-block;
    list-style: none;
    margin-left: 40px;
}
.main-nav li a{
    padding: 5px 2px;
    color:#fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 90%;
    font-weight: 100;
}
.main-nav li a:hover{
    color: yellow;
    font-weight: 1000;
}
h1{
    margin-left: 430px;
    margin-top: 30px;
    margin-bottom: 20px;
    text-shadow:  #000 0px 0px 3px,   #000 0px 0px 3px,   #000 0px 0px 5px;
}
h3{
    margin-bottom: 1rem;
    margin-left: 450px;
    margin-top: 10px;
}
.main-content-header{
    border-top: 2px solid white;
}

.main-content-header a{
    text-decoration: none;
    color: black;   
    text-shadow:  #ff0066 0px 0px 1px,   #ff0066 0px 0px 1px,   #ff0066 0px 0px 1px;
}
.main-content-header a:hover{
    text-decoration: none;
    text-decoration: none;
    color: yellow;   
    text-shadow:  #000 0px 0px 2px,   #000 0px 0px 2px,   #000 0px 0px 2px;

}



      </style>

<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          
            <ul class="main-nav" animate slideInDown>
                <li><a href="/Homepage">HOME</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/contact">CONTACT</a></li>
                <li class="logout"><a href="/admin">LOGOUT</a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <h1>Admin Dashboard</h1>
       <h3><a href="/addmark">-> Add Marks of Student </a></h3>
       <h3><a href="/updatemark">-> Update Student Marks </a></h3>
       <h3><a href="/deleteform">-> Delete the Marks of Student </a></h3>
       <h3><a href=" {{route('all-student-data')}}">-> Data of all Students </a></h3>
       <h3><a href="{{route('user-messages')}}">-> Messages by Student</a></h3>
      </div>
    </header>
    
</body>
</html>