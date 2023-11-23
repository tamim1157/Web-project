
<html>
<head>
    <title>Add Marks</title>
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
    margin-top: 55px;
    margin-left: 60px;
    color: yellow;
    font-weight: bolder;
    text-shadow: 3px 3px black;
}
.table1{
    margin-left: 70px;
    margin-top: 25px;
}
.table1 th{
    font-size: 2rem;
    text-align: left;
    color: white;
    text-shadow: 2px 2px black;
}
.box{
    height: 1.8rem;
    width: 18rem;
}
.table2{
    margin-left: 70px;
    margin-top: 15px;
}
.table2 th{
    font-size: 2rem;
    text-align: left;
    color: white;
    text-shadow: 2px 2px black;
}
h3{
    margin-left: 310px;
    margin-bottom: 15px;
    margin-top: 15px;
}
.table3{
    margin-left: 70px;
    margin-top: 4px;
}
.table3{
    margin-top: 30px;
    
}
.table3 th{
    font-size: 2rem;
    text-align: left;
    color: white;
    text-shadow: 2px 2px black;
}
.table4{
    margin-top: 85px;
    margin-left: 770px;
}
.next_step{
    width: 5rem;
    height: 2rem;
    font-size: 1rem;
    text-transform: uppercase;
}
.next_step:hover{
    background-color: pink;
    font-size: 1.2rem;
    font-weight: 900;
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
                <li class="logout"><a href="/admindash">Dashboard</a></li>
                <li><a href="/Homepage">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>Step 1/2 : Enter the Details of Student</h2>
        <form method="POST" enctype="multipart/form-data" action="{{ route('create') }}">
        @csrf
            <table class="table1">
             <tr>
                <th>Name </th>   <th> Class</th> <th>Roll No</th>
             </tr>
             <tr>
                 <td><input type='text' name='name' placeholder='Enter Full Name' required class="box"/></td>
                 <td><input type='text' name='class' placeholder='Class' required class="box"/></td>
                 <td><input type='text' name='rollno' placeholder='Rollno' required class="box"/></td>
                
             </tr>
             </table>
             <table class="table2">
             <tr>
                <th>father Name </th>   <th> Mother Name</th> <th>Mobile No</th><th>Your City</th>
             </tr>
                 <tr>
                 <td><input type='text' name='father' placeholder="Father's Name" required class="box"/></td>
                 <td><input type='text' name='mother' placeholder="Mother's Name" required class="box"/></td>
                 <td><input type='text' name='mobile' placeholder='Mobile No' required class="box"/></td>
                 <td><input type='text' name='village' placeholder='City' required class="box"/></td>
             </tr>
             
         </table>
         <table class="table3">
           <tr>
               <th>Choose Image -</th>
               <td><input type="file" name="image" required/></td>
           </tr> 
         </table>
         <table class="table4">
            <tr>
           <td align="center" colspan="2"><input type="submit" name="submit1" value="Next" class="next_Step"/></td>  
           </tr>
        </table>
       </form>
      </div>
    </header>
    
</body>
</html> 
