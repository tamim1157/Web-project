
<html>
<head>
    <title>Update Record</title>
<style>
  *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
body{
    font-size: 30px;
    overflow-x: hidden;
    color: black;
    font-family: 'Flamenco', cursive;
}
header{
    background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(../image/yellow.jpg);
    height:700px;;
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

.main-content-header a{
    text-decoration: none;
    color: red;
}
.main-content-header a:hover{
    text-decoration: none;
    color: rgb(3, 70, 8);
}


h1{
    font-family: bold;
    color: #0066ff;
    padding-top: 2rem;
    text-shadow:  #000 0px 0px 2px,   #000 0px 0px 2px,   #000 0px 0px 2px;
    padding-bottom: 2rem;
}
.table1 th{
    color: black;
    font-size: 2rem;
   
    padding-left: 1rem;
}
.box{
    height: 1.8rem;
    width: 11rem;
}
.submit{
    width: 90px;
    height: 30px;
    margin-top: 15px;
    font-size: 1.2rem;
    font-weight: 300;
    background-color: rgb(214, 214, 214);
}
.submit:hover{
    background-color: #88bbf5;
}
.student_class{
  padding-left: 50px;
  color: black;
 border-bottom: 3px solid black;
  
}

.table1{
    margin-left: 400px;  
}
.table2{
    margin-left: 250px;
    font-size: 30px;
    margin-top:50px;
    border-top:3px solid black;   
}

.student_class2{
    border: 3px solid black;
    padding-left: 10px;
    padding-right: 10px;
    
    
}
/*border line*/
.student_id{
    border-left: 3px solid black;
    color: black;
    border-bottom: 3px solid black;
}
.student_edit{
    border-right: 3px solid black;
    color: black;
    border-bottom: 3px solid black;
    
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
                <li><a href="/Homepage"><b>HOME</b></a></li>
                <li><a href="/about"><b>ABOUT</b></a></li>
                <li><a href="/contact"><b>CONTACT</b></a></li>
                <li class="logout"><a href="/admindash"><b>DASHBOARD</b></a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="get" action="{{ route('stud.search') }}">
            @csrf
        <table class="table1">
            <h1 align="center">Search Student and Update Marks</h1>
            <tr align="left">
            <th>Enter Class : </th>
            <td><input type="text" name="class" class="box"/></td>
            
            <th>Student Rollno : </th>
            <td><input type="text" name="rollno" class="box"/></td>
                
            </tr>
            <tr align="left">
            <th><input type="submit" value="Search" name="submit" class="submit"/></th>
            </tr>

            </table>
         <table class="table2">
            <thead>
              <tr> 
                <th class="student_id">Id</th>
                <th class="student_class">Name</th>
                <th class="student_class">Father's Name</th>
                <th class="student_class">Address</th>
                <th class="student_class">Class</th>
                <th class="student_class">Roll No</th>
                <th class="student_edit">Edit</th>
            </tr>
</thead>
<tbody>
   @php 
   $stud_id = $studentData->id ?? 0;
   @endphp
    <tr>
        <td class="student_id">{{ $studentData->id ?? "" }} </td>
        <td class="student_class">{{ $studentData->name ?? "" }} </td>
        <td class="student_class">{{ $studentData->father ?? "" }} </td>
        <td class="student_class">{{ $studentData->village ?? "" }} </td>
        <td class="student_class">{{ $studentData->class ?? "" }} </td>
        <td class="student_class">{{ $studentData->rollno ?? "" }} </td>
        <td class="student_class"><a href="{{ url('updatemarkf', $stud_id ) }}">Edit</a></td>

 </td>

        
</tr>

</tbody>

            
            </table>
