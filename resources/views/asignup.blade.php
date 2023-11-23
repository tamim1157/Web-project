<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up </title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        body {
  background-color: #344a72;
  font-family: "Roboto", sans-serif;
  background-image:url("adminreg5.jpg");
  background-size:100%;
  background-position: right;

}

.signup-box {
  width: 600px;
  height: 500px;
  margin: auto;
  background-color: white;
  border-radius: 20px;
  margin-left:140px;
  
 
}



h1 {
  text-align: center;
  padding-top: -10px;
}

h4 {
  text-align: center;
}

form {
  width: 520px;
  margin-left: 20px;
  padding:10px;

}

form label {
  display: flex;
  margin-top: 20px;
  font-size: 24px;

}

form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
  padding:15px;
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
.my-button:hover{
    color:blue;
    background-color:gray;

}

p {
  text-align: center;
  padding-top: -1500px;
  font-size: 20px;
  padding-bottom:-400px;

}
.para-2 {
  text-align: center;
  color: blue;
  font-size: 18px;
 
  margin-bottom: -10px;
  margin-left:-650px;

}
.para-2 a {
  color: #49c1a2;
}


        </style>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>For Teachers</h4>
      <form method="post" action="{{ route('register') }}">
        @csrf
        <label>Full Name</label>
        <input type="text" placeholder="Enter name" name="name" />
        <label>Email</label>
        <input type="email" placeholder="Enter mail address" name="email"/>
        <label>Password</label>
        <input type="password" placeholder="enter password" name="password"/>
        
        <select name="role">
            <option value="student">Student</option>
            <option value="admin">Admin</option>
</select>
        <button type="submit" class="my-button">Submit</button>
     </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="/admin">Login here</a>
    </p>
  </body>
</html>



