<html>
<head>
    <title>Contact</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("contact.jpg");
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
    margin-left: 60px;;
    margin-top:80px;
    margin-bottom: 10px;
    color: black;
    text-shadow:  #fff 0px 0px 1px,   #fff 0px 0px 1px,   #fff 0px 0px 1px;    
}
.tblheading{
    color: black;
    font-size: 1.3rem;
    text-align: left;
    padding-bottom: 0.3rem;
    padding-top: 0.3rem;
}
.tbldata{
    width:500px;
    height: 30px;
}
.tbldata1{
    width:500px;
    height: 70px;
}
.submit{
    width:80px; 
    height: 30px;  
}
.submit:hover{
    background-color: pink;
    color: black;
    font-size: 1rem;
}
.main-content-header{
    border-top: 2px solid #fff;
}
    </style>

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="/Homepage">HOME</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/contact">CONTACT</a></li>
                <li><a href="/asignup">ADMIN LOGIN</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method='POST'   enctype="multipart/form-data"  action="{{ route('contactdata') }}">
            @csrf
            <table class="table">
              <h2 class="search">How can we help? Feel Free to Contact<br>Send Us a Message</h2>
             
              <tr>
                <th class='tblheading'>Enter Your Name</th>
              </tr>
              <tr>
              <td><input type='text' class='tbldata' name='name' placeholder='Full Name' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Enter your Email Id</th>
              </tr>
              <tr>
                <td class='tbldata'><input type='text' class='tbldata' name='email' placeholder='Email Id' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Enter your Contact No.</th>
              </tr>
              <tr>
                <td class='tbldata'><input type='text' class='tbldata' name='contact' placeholder='Contact No' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Type your Message</th>
              </tr>
              <tr>
                <td ><textarea class='tbldata1' name="message" placeholder='Type here...'></textarea></td>
              </tr>
              <tr>
              <td colspan='2' align='center'><input type="submit" name='submit' value='SEND' class='submit'/></td>
              </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>



