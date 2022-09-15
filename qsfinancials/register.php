<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {% load static %}

    
    <link rel="stylesheet" href="css/register.css">
    
    
</head>
<body>
    <img src="images/img2.jpg" alt="QSFS logo" class="logo">
    <h1> Welcome To QSFINANCIALS General Insurance Company Limited </h1>

    <H2>
        SIGN UP
    </H2>
    {% for message in messages %}
    <h5>{{message}}</h5>
    {%endfor%}

    
    
    <form  method ="POST"  action="register">
        {% csrf_token %}
        
        <h3>Username:</h3>
        <input type="text" name="username" placeholder="Username">
        <h3>Email:</h3>
        <input type="email" name="email" placeholder="Email">
        <h3>Password:</h3>
        <input type="password" name="password" placeholder="Password">
        <h3>Repeat password</h3>
        <input type="password" name="password2" placeholder="Repeat Password" ><br>
        <input class="submit" type="submit">
    </form>
</body>
</html>