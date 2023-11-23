<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        body {
  background-color: #344a72;
  font-size:20px;
  background-size:100%;
  font-family:verdana;
  background-image:url("stdreg.jpg");
  background-position:left;
  
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
    color:black;
    
    text-decoration: none;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 100;
}
.main-nav li a:hover{
    color: yellow;
    font-weight: 1000;
}




.login-box {
  width: 360px;
  height: 280px;
  margin: auto;
  border-radius: 20px;
  background-color: white;
  margin-top:180px;
  border:2px dotted blue;
  margin-left:100px
}

h1 {
  text-align: center;
  padding-top: 15px;
}

h4 {
  text-align: center;
}

form {
  width: 300px;
  margin-left: 20px;
  
}

form label {
  display: flex;
  margin-top: 20px;
  font-size: 18px;
}

form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
}
input[type="button"] {
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #49c1a2;
  color: white;
  font-size: 18px;
}
.button2:hover{
    color:blue;
    background-color:gray;
}
p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
  margin-left:300px;
}
.para-2 {
  text-align: center;
  color: blue;
  font-size: 18px;
 margin-left:-960px;
 margin-top:-20px;
  
}
.para-2 a {
  color: green;
  
  
}


        </style>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="/Homepage"><b>HOME</b></a></li>
                <li><a href="/stdreg"><b>STUDENT</b></a></li>
                <li><a href="/about"><b>ABOUT</b></a></li>
                <li><a href="/contact"><b>CONTACT</b></a></li>
                <li><a href="/asignup"><b>ADMIN LOGIN</b></a></li>
                <li><a href="/slogin"><b>SLOGOUT</b></a></li> 
          </ul>
        </div>
      </nav>
    <div class="login-box">
      <h1>Login</h1>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <label>Email</label>
        <input type="email" placeholder="" name="email" />
        <label>Password</label>
        <input type="password" placeholder="" name="password"/>
        <button type="submit">Submit</button>
      </form>
    </div>
    <p class="para-2">
      Not have an account? <a href="/stdreg">Sign Up Here</a>
    </p>
  </body>
</html>

