
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Register your child details here</h2>
<p><span class="error"><b>NB:</b> </span><i>All fields are required </i></p>


<form method="POST" action="index.php">
  FullName: <input type="text" name="FullName" required>
  <span class="error"></span>
  <br><br>
          Age: <input type="text" name="Age" required>
           <span class="error"></span>
             <br><br>
            Class: <input type="text" name="Class" required>
             <span class="error"></span>
                <br><br>
               Teacher's Name: <input type="text" name="TeacherName" required>
                    <span class="error"></span>
                    <br><br>
                        Parents Number: <input type="text" name="mobile" required>
                        <span class="error"></span>
                           <br><br>
                                 Gender:
                                    <input type="radio" name="Gender" value="female">Female
                                    <input type="radio" name="Gender" value="male">Male
                                    <input type="radio" name="Gender" value="other">Other
                                    <span class="error"></span>
                                       <br><br>
                    <input type="submit" name="submit" value="Submit">
                       <br><br>
</form>
<?php include 'footer.php';?>

</body>
</html>