<!DOCTYPE html>
<html>
  <head>
    
    <title>Student Result Management System</title>
    <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 10px;
  background-image: url("blackboard.jpg");
  background-position: fixed;
  margin-top: 5px;
  opacity:600;
 background-size: 100%;
 overflow-x:hidden;
}

header {
  
  color:black;
  font-size-adjust: 100;
  padding: 0px;
  box-sizing: border-box;
  border-radius: 20px;

}

dropdown {
  
  text-shadow: #1e90ff;
  text-decoration: dashed;
  background-color: #1e90ff;
  padding: 0px;
  text-align: middle;
  font-size: 40;
  background-position: left;
}

dropdown ul {
  
  list-style-type: none;
  margin: 5;
  padding: 1px; 
  border-radius: 20px;
  overflow: hidden;
}

dropdown li {
  float: left; 
  margin: 10px;
  padding: 0px;
 
}

dropdown li a {
  display: block;
  color:white;
  text-rendering: 400;
  font-style: oblique;
  text-align: middle;
  padding: 15px 75px;
  text-decoration: none;
  font-size: 20px;
  font-style: initial;
 
}

dropdown li a:hover {
  background-color:blue;
  color:white;
  font-size: 20px;
  border-radius:30px;
  
}

section {
  padding: 140px;
  text-align: center;
  color:black;
  opacity: 100;
 
}

.button {
  display: inline-block;
  background-color:greenyellow;
  color: blue;
  padding: 14px 20px;
  margin: 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
  font-size: 20px;
  border-radius: 19px;
}

.button:hover {
  background-color:dimgrey;
  padding: auto;
  color: black;
}
footer{
   
  color:black;
  padding: 10px;
  font-size: 20px;
  border-radius: 20px;
}

</style>
  </head>
  <body>
    <header>
      <h1 align="center">Student Result Management System</h1>
    </header>
    <dropdown>
      <ul>
        <li><a href="/Homepage"><b>Home</b></a></li>
        <li ><a href="/asignup"><b>Admin</b></a></li>
        <li><a href="/stdreg"><b>Student</b></a></li>
        <li><a href="/about"><b>About</b></a></li>
        <li><a href="/contact"><b>Contact</b></a></li>
        <li><a href="/admin"><b>Logout</b></a></li>
      </ul>
    </dropdown>
    <section>
      <h1>Welcome to our Student Result Management System</h1>
      <p>Here, you can manage student information and results with ease.</p>
      <a href="/Homepage" class="button">Get Started</a>
    </section>
    <footer>
      <p align="center">Copyright &copy; 2023 Student Result Management System by KUET authorized</p>
    </footer>
    
  </body>
</html>
