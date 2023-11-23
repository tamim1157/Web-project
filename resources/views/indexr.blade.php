<html>
<head>
    <title>Student Result Management System</title>
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
    background-image:url("hand.jpg");
}
header{
    background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
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

.table{
    margin-left:130px;
}
.search{
    margin-left:170px;
    margin-top:40px;
}
.name1{
    font-size: 2rem;
    padding-right: 5px;
}
.name2{
    height: 3rem;
}
.box1{
    height: 2rem;
    width: 25rem;
    background-color: rgb(209, 209, 209);
}
.box2{
    height: 2rem;
    width: 25rem;
    background-color: rgb(209, 209, 209);
}
.standered1{
    font-size: 2rem;
   padding-right: 31px;
}
.standered2{
    height: 5rem;
 }
.submit{
    width:85px;
    padding: 0.5rem;
    margin-left:50px;
}
.submit:hover{
    background-color: pink;
    color: black;
}
.main-content-header{
    border-top: 2px solid white;
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
                <li><a href="/slogin">STUDENT</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/contact">CONTACT</a></li>
                <li><a href="/asignup">ADMIN LOGIN</a></li>
                <li><a href="/slogin">SLOGOUT</a></li> 
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="{{ route('show.result') }}">
            @csrf
          <table class="table">
              <br>
              <h2 class="search">GET YOUR RESULT HERE!</h2>
              <br><br>
            <tr>
                <th class="name1">Rollno</th>
                <td class="name2"><input type="text" name="rollno" required class="box1"/></td>
            </tr>
            <tr>
                <th class="standered1">Class</th>
                <td class="standered2"><input type="text" name="class" required class="box2"/></td>
            </tr> 
            <tr>
            <td align="center" colspan="2"><input type="submit" value="SUBMIT" class="submit"/></td>
            </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>
