

<html>
<head>
    <title>Homepage</title>
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
    background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("hand.jpg");
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
    width:70px;
    height: 20px;
    background-color: rgb(189, 189, 189);
    margin-top: 10px;
}
.main-content-header{
    border-top: 2px solid white;
}
h2{
    margin-top: 15px;
    margin-bottom:25px;
    margin-left: 260px;
    color: yellow;
    font-weight: bolder;
    text-shadow: 3px 3px black;
}
.table1{
    margin-left: 200px;
    margin-top: 5px;
}
.table2{
    margin-left: 280px;
    margin-top: 15px;
}

.table3{
    margin-left: 260px;
    margin-top: 4px;
}
.table3{
    margin-top: 5px;
    
}
.table4{
    margin-top: 4px;
    margin-left: 200px;
}
.h3{
    margin-left: 370px;
    margin-top: 5px;
}
.h_3{
    margin-left: 370px;
    margin-top: 35px;
}
p{
    margin-left: 375px;
}
h4{
    margin-left: 285px;
}
.colorchange1{
    animation: colorchange1 2s infinite;
    margin-left: 35px;
}
@keyframes colorchange1{
    0%{color:#fff;}
    25%{color:#bf55ec;}
    75%{color:#fff;}
    100%{color:#bf55ec;}
}
.colorchange2{
    animation: colorchange2 2s infinite;
    margin-left: 35px;
}
@keyframes colorchange2{
    0%{color:#fff;}
    25%{color:red;}
    75%{color:blue;}
    100%{color:orange;}
}
.colorchange3{
    animation: colorchange3 2s infinite;
    margin-left: 35px;
}
@keyframes colorchange3{
    0%{color:#fff;}
    25%{color:#bf55ec;}
    75%{color:#fff;}
    100%{color:#bf55ec;}
}
.class{
    margin-left: 9px;
    background:transparent;
    color:white;
    text-align: center;
}
.rollno{
    margin-left: 5px;
    background:transparent;
    color:white;
    text-align: center;
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
                    <li><a href="/Homepage">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        <div class="main-content-header">
            <form method="post"   action="{{ route('update-form'}}">
                @csrf
                <h2>Step 2/2 : Edit and Update Exam mark</h2>


                    <tr>
                        <input type="text" name="class" class="class" value="" placeholder='class' required/>
                <input type="text" name="rollno" class="rollno" value="" placeholder='rollno' required/>
</tr>
                

                <table class="table1">
                    <span> <h4 class="h_3">First  Term Exam (A)</h4></span>
                    <tr>
                        <th>Bangla</th>   <th> English </th> <th>Math</th>
                    </tr>
                    <tr>
                        <td><input type='text' name='bangla1' value='{{ $student->bangla1 }}' placeholder='Bangla' required/></td>
                        <td><input type='text' name='english1' value='{{ $student->english1 }}' placeholder='English' required/></td>
                        <td><input type='text' name='math1' value='{{ $student->math1 }}'placeholder='Math' required/></td>
                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th>Physics</th>   <th>Chemestry</th> 
                    </tr>
                    <tr>
                        <td><input type='text' name='physics1' value='{{ $student->physics1 }} placeholder='Physics' required/></td>
                        <td><input type='text' name='chemistry1' value='{{ $student->chemistry1 }}' placeholder='Chemistry' required/></td>
                    </tr>
                </table>
                <span> <h4 class="h3">Second Term Exam(B)</h4> </span>
                <table class="table4">
                    <tr>
                        <th>Bangla</th>   <th> English </th> <th>Math</th>
                    </tr>
                    <tr>
                        <td><input type='text' name='bangla2' value='{{ $student->bangla2 }}'  placeholder='Bangla' required/></td>
                        <td><input type='text' name='english2' value='{{ $student->english2 }}'  placeholder='English' required/></td>
                        <td><input type='text' name='math2' value='{{ $student->math2 }}' placeholder='Math' required/></td>
                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th>Physics</th>   <th>Chemestry</th> 
                    </tr>
                    <tr>
                        <td><input type='text' name='physics2' value='{{ $student->physics2 }}' placeholder='Physics' required/></td>
                        <td><input type='text' name='chemistry2' value='{{ $student->chemistry2 }}' placeholder='Chemistry' required/></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" name="submit" value="Update" class="submit"/></td>   
                    </tr>
                </table>
            </form>
        </div>
    </header>
</body>
</html>

