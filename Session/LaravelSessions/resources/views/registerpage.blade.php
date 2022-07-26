<h1>Register page</h1>
<!--  Flash Session Message Use -->
@if(session('user'))
<h3 style="color:green">{{session('user')}} added to database.</h3>
@endif
<form action="register" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Username"><br><br>
    <input type="text" name="email" placeholder="Enter Email"><br><br>
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <button type="submit">Register</button>
</form>
<a href="login">
    <button>Back to Login Page</button>
</a>