<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <form method="POST" action="profileImageUpload.php" enctype="multipart/form-data">
            <div>
                <input type="file" multiple value="Please Select your New Profile Photo" name="profileImage" />
            </div>
            <div>
                <input type="text" name="firstName" />
            </div>
            <div>
                <input type="text" name="lastName" />
            </div>
            <div>
                <input type="submit" value="Save Profile" />
            </div>
        </form>
    </body>
</html>