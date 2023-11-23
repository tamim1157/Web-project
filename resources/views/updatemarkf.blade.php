<!DOCTYPE html>
<html>
<head>
    <title>Update Mark Detail</title>
    <style>
    *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
body{
    font-size: 30px;
    overflow-x: hidden;
    color: color;
    font-family: 'Flamenco', cursive;
}
header{
    background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(../image/yellow.jpg);
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
.main-content-header{
    border-top: 3px solid black;
}
h2{
    margin-top: 0px;
    margin-bottom:25px;
    margin-left: 260px;
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
    margin-top: 5px;
}
p{
    margin-left: 375px;
}
h4{
    margin-left: 285px;
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
/*///////Responsive Query///////*/
.th{
    text-align: center;
}
table{
    margin-left: 310px;
    margin-bottom: 10px;
    font-size: 19px;
}
span{
    padding-left: 30px;
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
                <li><a href="/admindash"><b>DASHBOARD</b></a></li>
                <li><a href="/Homepage"><b>HOME</b></a></li>
                <li><a href="/about"><b>ABOUT</b></a></li>
                <li><a href="/contact"><b>CONTACT</b></a></li>
            </ul>
        </div>
    </nav>
    @php 

    @endphp

    <div class="main-content-header">
        <form method="post" action="{{ route('updatemarks') }}">
            @csrf
         
            <table>
                @isset($row)
                    
                        <tr>
                            <th>Student Name:</th>
                            <td><span class="span">{{ $row->name }}</span></td>
                        </tr>
                        <tr>
                            <th>Student Class:</th>
                            <td><span class="span">{{ $row->class }}</span></td>
                        </tr>
                        <tr>
                            <th>Student Rollno:</th>
                            <td><span class="span">{{ $row->rollno }}</span></td>
                        </tr>
                        <input type="hidden" name="rollno" value="{{ $row->rollno }}" />
                   
                       
                   
                @endisset
                @if(!$data)
                        <tr>
                            <td colspan="2">No student information found</td>
                        </tr>
                        @endif
            </table>
            <table class="table1">
                <span><h4 class="h_3">Term Final (1)</h4></span>
                <tr>
                    <th>Bangla</th> <th>English</th> <th>Math</th>
                </tr>
                @isset($data)
                   
                        <tr>
                            <td>
                                <input type='text' name='bangla1' value="{{ $data->bangla1 }}" class="th" required/>
                            </td>
                            <td>
                                <input type='text' name='english1' value="{{ $data->english1 }}" class="th"/>
                            </td>
                            <td>
                                <input type='text' name='math1' value="{{ $data->math1 }}" class="th" required/>
                            </td>
                        </tr>
                   
                       
                    
                @endisset
                @if(!$data)
                        <tr>
                            <td colspan="2">No marks found for Term Final (1)</td>
                        </tr>
                        @endif

            </table>
            <table class="table2">
                <tr>
                    <th>Physics</th> <th>Chemistry</th>
                </tr>
                @isset($data)
                    
                        <tr>
                            <td>
                                <input type='text' name='physics1' value="{{ $data->physics1}}" class="th" required/>
                            </td>
                            <td>
                                <input type='text' name='chemistry1' value="{{ $data->chemistry1 }}" class="th" required/>
                            </td>
                        </tr>
                  
                    
                @endisset
                @if(!$data)
                        <tr>
                            <td colspan="2">No marks found for Term Final (1)</td>
                        </tr>
                        @endif
            </table>
            <span><h4 class="h3">Term Final (2)</h4></span>
            <table class="table4">
                <tr>
                    <th>Bangla</th> <th>English</th> <th>Math</th>
                </tr>
                @isset($data)
                    
                        <tr>
                            <td>
                                <input type='text' name='bangla2' value="{{ $data->bangla2 }}" class="th" required/>
                            </td>
                            <td>
                                <input type='text' name='english2' value="{{ $data->english2 }}" class="th" required/>
                            </td>
                            <td>
                                <input type='text' name='math2' value="{{ $data->math2 }}" class="th" required/>
                            </td>
                        </tr>
                   
                      
                  
                @endisset
                @if(!$data)
                
                        <tr>
                            <td colspan="2">No marks found for Term Final (2)</td>
                        </tr>
                       
                       @endif
            </table>
            <table class="table2">
                <tr>
                    <th>Physics</th> <th>Chemistry</th>
                </tr>
                @isset($data)
                    
                        <tr>
                            <td>
                                <input type='text' name='physics2' value="{{ $data->physics2 }}" class="th" required/>
                            </td>
                            <td>
                                <input type='text' name='chemistry2' value="{{ $data->chemistry2}}" class="th" required/>
                            </td>
                        </tr>
                  
                      
                   
                @endisset

                @if(!$data)
                        <tr>
                            <td colspan="2">No marks found for Term Final (2)</td>
                        </tr>
                       @endif

                <tr>
                    <td align="center" colspan="2">
                        <input type="submit" value="Submit" class="submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</header>
</body>
</html>
