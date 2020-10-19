<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>User register</title>
    <link rel="stylesheet" href="../../Style/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="contentform">
        <div class="sform">

            <img class="avatarlog" src="../../Style/images/Icons/EasyB.jpg" alt="LogIcon">
            <h1>User register</h1>
<!-- -------------------------- HERE THE SEND FUNCTION OF THIS FORM --------------------------------------------------------->            
            <form action="<!-- HERE THE SEND FUNCTION OF THIS FORM -->" method="POST">
                
<!-- -------------------------- HERE THE SEND FUNCTION OF THIS FORM --------------------------------------------------------->                  
                <!--Here the Username TexBox code-->
                <label for="Username" >Username</label>
                <input type="text" placeholder="Enter Username" name="Username" >
                 
                <!--Here the Mail TexBox code-->
                <label for="Username">Mail</label>
                <input type="text" placeholder="Enter your e-mail" name="Usere-mail">
                
                <!--Here the Mail TexBox code-->
                <label for="Username">Cellphone</label>
                <input type="text" placeholder="Enter your Cellphone number" name="Cellphone">

                <!--Here the Password TextBox-->
                <label for="Password">Password</label>
                <input type="password" placeholder="Enter Password" name="Password"><br>
                
                 <!--Here Upload document Box-->
                <from>
                <label placeholder="Password">Upload C.C. Scaned</label>
                <div id="id_file">
                <p id="text">Add Document file</p>
                <input type="file" id="upload_file">
                </div>
                </from>
                 
                

                <!--Here the Submit Button-->
                <input type="button" onclick="history.back()" name="Return" value="Return">
                <input type="submit" Value="Register Now"><br>

                <!-- Exit! Button -->
                <!--<div>
                    <h1 class="exit"><a href="javascript:history.back()">Go Back</a></h1>
                </div>-->
            </form>
            
            
        </div>
       
    </div>
    
</body>

</html>