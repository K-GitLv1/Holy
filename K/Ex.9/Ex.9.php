<?php
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-1▼","<br>";
?>
    <form name= "frmMember" method = "POST" action = "member.php">
    User Name: <input name = "txtUser" type = "text" size = "10"><br>
    Password: <input name = "txtPass" type = "password" size = "10"><br>
    Name: <input name = "txtName" type = "text" size = "40"><br>
    Address: <textarea name = "txtAddress" cols = "40" row = "5"></textarea>
    </form>

    <?php
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-2▼","<br>";
?>
    <form name= "frmGender" method = "POST" action = "gender.php">
    Gender:
    <input type ="radio" name = "rdoGender" value = "M" checked =  "checked">Male
    <input type ="radio" name = "rdoGender" value = "F">Female
    </form>

    <?php
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-3▼","<br>";
?>
    <form name= "frmProvince" method = "POST" action = "province.php">
    Provincce:
    <select name = "sltProvince">
    <option value = "1" selected = "selected">Suratthani</option>
    <option value = "2">Chumphon</option>
    <option value = "3">Ranong</option>
    </select>
    </form>

    <?php
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-4▼","<br>";
?>
    

    <form name= "frmAnimal" method =
    What is your favorite animal
    <input type ="checkbox" name = "chkAni" value = "cat" checked = "checked">Cat
    <input type ="checkbox" name = "chkAni" value = "dog">Dog
    <input type ="checkbox" name = "chkAni" value = "bird">Bird
    <input type ="checkbox" name = "chkAni" value = "fish">Fish
    </form> 

    <?php
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-5▼","<br>";
?>
    <form name= "frmButton" method = "POST" action = "test-button.php">
    <input type ="submit" name = "btnSubmit" value = "Send"><br>
    <input type ="reset" name = "btnReset" value = "Clear">
    </form>

    <?php
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-6▼","<br>";
?>
    <form name= "frmPhoto" method = "POST" action = "upload.php">
    <input type ="image" name = "btnUpload" src = "1.jpg">
    </form>

    <?php
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-7▼","<br>";
?>
    <form name= "frmHiddenField" method = "POST" action = "test-hidden.php>
    <input type ="hidden" name = "id" value = "001">
    </form>

    <?php
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-8▼","<br>";
?>
    <form name= "frmMember" method = "POST" action = "member.php" enctype = 
    "multipart/form-data">
    <input type ="file" name = "photo">
    </form>

    <?php
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-9▼","<br>";
?>
    <form name= "frmMember" method = "POST" action = "Ex.9.php">
    User Name: <input name = "txtUser" type = "text" size = "10"><br>
    Password: <input name = "txtPass" type = "password" size = "10"><br>
    Name: <input name = "txtName" type = "text" size = "40"><br>
    Address: <textarea name = "txtAddress" cols = "40" row = "5"></textarea><br>
    Gender:
    <input type ="radio" name = "rdoGender" value = "M" checked = "checked">Male
    <input type ="radio" name = "rdoGender" value = "F">Female
    <input type ="submit" name = "btnSubmit" value = "Send">
    </form>

    <?php
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-10▼","<br>";

    printf ("Member Management System<br>");
    printf ("User Name is :%s <br>", $_POST["txtUser"]);
    printf ("Password is :%s <br>", $_POST["txtPass"]);
    printf ("Full name is :%s <br>", $_POST["txtName"]);
    printf ("Address is :%s <br>", $_POST["txtAddress"]);
    if ($_POST["rdoGender"]=="M") {
    printf ("Gender is: Man");
    }else{
    printf("Gender is: Female");
    }
    
    
echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.9-11▼","<br>";

    function show_member ($filemember) {
        $fp = file ($filemember);
        $row = explode ("-", $fp[0]);
        echo "<table border=1 width=50%>";
        for($var=0; $var <= count($row)-2; $var++){
        echo "<tr>";
    $field = explode ("*", $row [$var]);
        for($col = 0; $col <= 4; $col++) {
        echo "<td>"; echo $field[$col]; echo "</td>";
        }
        echo "<tr>";
        }
        echo "</table>";
        }
        $filemember = "member.txt";
        if (file_exists ($filemember)) {
        $member = fopen ($filemember, "a+");
        if ($member==false) die ("Can not create member.txt");
        $table=sprintf("%s*%s*%s*%s*%s-",$_POST["txtUser"],$_POST["txtPass"],
        $_POST["txtName"], $_POST["txtAddress"], $_POST["rdoGender"]);
        fwrite ($member, $table);
        fclose ($member);
        show_member ($filemember);
        } else {
        echo "<br>Creating member.txt in first time<br>";
        $member = fopen ($filemember, "w");
        if ($member==false) die ("Can not create member.txt");
        $table=sprintf("%s*%s*%s*%s*%s-",$_POST["txtUser"],$_POST["txtPass"],
        $_POST["txtName"], $_POST["txtAddress"], $_POST["rdoGender"]);
        fwrite ($member, $table);
    fclose ($member);
    show_member($filemember);
    }

echo    "<br>","<br>";
//จบEx.
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"

?>