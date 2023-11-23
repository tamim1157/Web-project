
<html>
<head>
    <title>Messages</title>
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
    background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(../image/red.jpg);
    height:800px;
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
    color:#000;
    text-shadow:  #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 90%;
    font-weight: 100;
}
.main-nav li a:hover{
    color: yellow;
    font-weight: 1000;
}
h3{
    margin-left: 600px;
    margin-top: 10px;
}
.main-content-header{
    border-top: 3px solid black;
}

/*table Heading*/
table{
    margin-top:25px;
    background-color: white;
}
.massage_h1{
    font-size: 1.5rem;
    padding-left: 15px;
    font-size: 20px;
    color: #ff0066;
    border-top: 3px solid black;    
}
.id_h1{
    font-size: 1.5rem;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 20px;
    color: #ff0066;
    border-top: 3px solid black;
}
.name_h1{
    font-size: 1.5rem;
    padding-left: 15px;
    font-size: 20px;
    color: #ff0066;
    border-top: 3px solid black;
}
.email_h1{
    font-size: 1.5rem;
    padding-left: 55px;
    font-size: 20px;
    color: #ff0066;
    border-top: 3px solid black;
    
}
.contact_h1{
    font-size: 1.5rem;
    padding-left: 55px;
    padding-right: 20px;
    font-size: 20px;
    color: #ff0066;
    border-top: 3px solid black;
}

/*/////Inner Table Heading/////*/
th{
    padding-left: 100px;
    
    border-bottom: 3px solid black;
    
    border-right: 3px solid black;
}

.massage_h{
    color: black;
    font-size: 1.5rem;
    padding-top: 8px;
    padding-bottom: 8px;
    border-right: 3px solid black;
    padding-right: 35px;   
    padding-left: 35px;
    
}
.id_h{
    color: black;
    font-size: 1.5rem;
    padding-left: 10px;
    border-right: 3px solid black;
    padding-right: 15px;
}
.name_h{
    color: black;
    font-size: 1.5rem;
    padding-left: 15px;
    border-right: 3px solid black;
    padding-right: 35px;
}
.email_h{
    color: black;
    font-size: 1.5rem;
    padding-left: 55px;
    border-right: 3px solid black;
    padding-right: 35px;
}
.contact_h{
    color: black;
    font-size: 1.5rem;
    padding-left: 55px;
    border-right: 3px solid black;
    padding-right: 35px;
    
}
        </style>
        <a href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
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
                    <li class="logout"><a href="/admindash">ADMIN DASHBOARD</a></li>
                </ul>
            </div>
        </nav>
        <div class="main-content-header">
             
            <form>
        
                <table>
                    <tr>
                        <th class="id_h1">Id</th>
                        <th class="name_h1">Name</th> 
                        <th class="email_h1">Email</th> 
                        <th class="contact_h1">Contact No</th>
                        <th class="massage_h1">Message</th>
                    </tr>
                    @isset($userMessages )
                        @forelse ($userMessages  as $user)
                            <tr>
                                <th class="id_h">{{ $user->id }}</th>
                                <th class="name_h">{{ $user->name }}</th> 
                                <th class="email_h">{{ $user->email }}</th> 
                                <th class="contact_h">{{ $user->contact }}</th> 
                                <th class="massage_h">{{ $user->message }}</th> 
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Connection failed</td>
                            </tr>
                        @endforelse
                    @endisset
                </table>
            </form>
        </div>
    </header>
</body>
</html>
