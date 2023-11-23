<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Your CSS styles here -->
    <style>
    *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
body{
    font-size: 30px;
    font-weight: 600;
    overflow-x: hidden;
    color: black;
    font-family: 'Flamenco', cursive;
}
header{
    background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(../image/result.jpg);
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
    color:#000;
    text-shadow:  #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 90%;
    font-weight: 100;
}
.main-nav li a:hover{
    color: red;
    font-weight: 1000;
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
    border-top: 3px solid black;
}
.table{
    margin-left:400px;
    margin-top: 20px;
    float:left;    
}
.table tr{
    font-size:20px;
    margin-left: 330px;
    
}
.image2{
    width:90px;
    height:120px;
    margin-top: 20px;
    margin-left: 90px;
}
.table2 th{
    border-top: 1px solid transparent;
    width: 6%;
    font-size: 19px;
   
}
h1{
    margin-left: 490px;
}
.table2{
    margin-top: 20px;
    border-top: 3px dashed black;
    border-bottom: 3px dashed black;
    
}
.colorchange{
    animation: colorchange 2s infinite;
    font-size: 24px;
    
}
@keyframes colorchange{
    0%{color:#cc0066;}
    25%{color:#0000ff;}
    75%{color:#cc0066;}
    100%{color: #0000ff;}
}
.colorchange1{
    animation: colorchange1 2s infinite;
    font-size: 44px;
    
}
@keyframes colorchange1{
    0%{color:red;}
    25%{color:green;}
    75%{color:#009900}
    100%{color:#ff6600;}
}
p{
    margin-top: 20px;
    
}

    </style>
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
<header>


    <nav>
        <!-- Your navigation content here -->
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="/Homepage"><b>HOME</b></a></li>
                <li><a href="/about"><b>ABOUT</b></a></li>
                <li><a href="/contact"><b>CONTACT</b></a></li>
                <li><a href="/admin"><b>ADMIN LOGIN</b></a></li>
          </ul>
        </div>
    </nav>
    @if($data)
    <div class="main-content-header">
        
            <table class="table">
                <img src="{{ $data->image ?? '' }}" class="image2" /> 
                <tr>
                    <th>Name :</th>
                    <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th>Class :</th>
                    <td>{{ $data->class }}</td>
                </tr>
                <tr>
                    <th>Roll No :</th>
                    <td>{{ $data->rollno }}</td>
                </tr>
                <tr>
                    <th>Father Name :</th>
                    <td>{{ $data->father }}</td>
                </tr>
                <tr>
                    <th>City Name :</th>
                    <td>{{ $data->village}}</td>
                </tr>
            </table>
            <table class="table2">
                <tr>
                    <th>Subject</th>
                    <th>Half Yealy Exam (Score)</th>
                    <th>Annual Exam (Score)</th>
                    <th>Total</th>
                    <th>Max. Marks</th>
                </tr>
                <tr>
                    <th>Bangla</th>
                    <th>{{ $result->bangla1 }}</th>
                    <th>{{ $result->bangla2 }}</th>
                    <th>{{  $result->bangla1 + $result->bangla2 }}</th>
                    <th>200</th>
                </tr>
                <tr>
    <th>English</th>
    <th>{{ $result->english1 }}</th>
    <th>{{ $result->english2 }}</th>
    <th>{{  $result->english1 + $result->english2 }}</th>
    <th>200</th>
</tr>
<tr>
<th>Math</th>
    <th>{{ $result->math1 }}</th>
    <th>{{ $result->math2 }}</th>
    <th>{{  $result->math1 + $result->math2 }}</th>
    <th>200</th>
</tr>
<tr>
    <th>Physics</th>
    <th>{{ $result->physics1 }}</th>
    <th>{{ $result->physics2 }}</th>
    <th>{{  $result->physics1 + $result->physics2 }}</th>
    <th>200</th>
</tr>
<tr>
    <th>Chemistry</th>
    <th>{{ $result->chemistry1 }}</th>
    <th>{{ $result->chemistry2 }}</th>
    <th>{{  $result->chemistry1 + $result->chemistry2 }}</th>
    <th>200</th>
</tr>
@php 
$t1 = $result->bangla1 +$result->english1 + $result->math1 +  $result->physics1 +  $result->chemistry1;
$t2  = $result->bangla2 +$result->english2 + $result->math2 +  $result->physics2 +  $result->chemistry2;
$all = $t1 + $t2;
@endphp
                <tr>
                    <th>Total</th>
                    <th>{{ $t1 }}</th>
                    <th>{{ $t2 }}</th>
                    <th><span class="colorchange">{{ $all }}</span></th>
                    <th>1000</th>
                </tr>
            </table>
            <h1>You Are <span class="colorchange1">{{ $all <= 500 ? 'Fail' : 'Pass' }}</span></h1>
            <marquee scrollamount="5">
                <p>Your Result is Declared. Kindly check your marks and in case of any discrepancy contact the admin.</p>
            </marquee>
     
    </div>

    @else

    <div> No data found. </div>

    @endif
</header>
</body>
</html>
