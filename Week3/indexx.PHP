<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //WEEEK 4
    <Form method ="post">

        <label> for =""> Enter fullname<label/>
        <input type ="textbox" 
         
        
        
        <?php
    echo "fullname is " . $_POST['name'];
    echo "<br><br>";
    echo "password is " . $_POST[paswword];


    <Form method = "post">

    <input type= "checkbox " name="faculties[]" value="engineering">Enginmeering
    <input type="checkbox" name= "faculties[]" value=medicine">Medicine
    <input type="checkbox" name= "faculties[]" value=computer science">ComputerScience
     input type = "submit" name= "submit" value= "register">
</form>

if (! empty (_POST [foculties]))
    {
        foreach ($_POST['foculties'])as $faculty){
            echo $faculty
        }
    }
    



























    


    
    
    
    
    
    
    ?>
    
</body>
</html>