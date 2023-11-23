<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up </title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        body {
  background-color: #344a72;
  font-family: "Roboto", sans-serif;
  background-image:url("stdreg2.jpg");
  background-size:100%;
  background-position:right;
}

.signup-box {
  width: 385px;
  height: 500px;
  margin: auto;
  background-color: white;
  border-radius: 0px;
  margin-top:100px;
margin-left:580px;
 
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
.my-button:hover{
    color:blue;
    background-color:gray;

}

p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
}
.para-2 {
  text-align: center;
  color: blue;
  font-size: 18px;
  margin-top: -10px;

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
      <h4>For Students</h4>
      <form method="post" action="{{ route('register') }}">
        @csrf
        <label>Full Name</label>
        <input type="text" placeholder="Enter name" name="name" />
        <label>Email</label>
        <input type="email" placeholder="" name="email"/>
        <label>Password</label>
        <input type="password" placeholder="" name="password"/>
        <label>Confirm Password</label>
        <input type="password" placeholder="" />
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
      Already have an account? <a href="/slogin">Login here</a>
    </p>
  </body>
</html>



