<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
</head>
<body>
    
<div class="container">
    
    <form action="read.php" method="post">
    <h1>Log In</h1>


<label for="fname">First name *</label><br>
<input type="text" id="fname" name="fname"><br><br>

<label for="lname">Last name *</label><br>
<input type="text" id="lname" name="lname"><br><br>

<!-- Select gender -->
<div for="man">
    <label for="gender">Gender *</label><br>

    <input type="radio" id="man" name="1">
    <label for="nam">Man</label>
        <input type="radio" id="woman" name="1">
        <label for="woman">Woman</label>
        <input type="radio" id="others" name="1">
        <label for="other">Others</label>

</div><br><br>

<!-- Select your skills -->
<div for="skills">

    <label for="skills">Skills *</label><br>

        <input type="checkbox" id="html" name="html">
        <label for="html">HTML</label>   
        <input type="checkbox" id="css" name="css">
        <label for="css">Css</label>   
        <input type="checkbox" id="Jvascript" name="Jvascript">
        <label for="javascript">Javascript</label>   
        <input type="checkbox" id="php" name="php">
        <label for="php">PHP</label> 

</div><br><br>

<label for="phone">Phone *</label><br>
<input type="number" id="phone" name="phone"><br><br>

<label for="email">E-mail *</label><br>
<input type="email" id="email" name="email"><br><br>

<label for="password">Password *</label><br>
<input type="password" id="password" name="password"><br><br>

<button type="submit" name="SEND"></button>

</form>

</div>

</body>

<style>
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        position: relative;
    }

    form{
       background-color: blue;
       width: 30%;
       position: relative;
       padding: 20px;
    }


   #fname,
   #lname,
   #phone,
   #email,
   #password {
    width: 100%;
   }
</style>
</html>