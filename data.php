<?php
// $phone=$username=null;
$errphone ="";
if(isset($_POST['submit']))
{
    if(empty($_POST['phone']))
    {
        $errphone = "enter mobile number";
    }
        $phone=$_POST['phone'];
        $username=$_POST['username'];

        echo 'mobile number :' . $phone . '<br/>';
        echo 'username :' . $username . '<br/>';
}
//validate phone number
$errphone="";
if(isset($_POST['submit']))
{
    if(empty($_POST['phone']))
    {
        $errphone = "*mobile number required <br/>";
    }
    else
    {
        if (strlen($_POST['phone']) < 10 ) 
        {
            echo "*please enter 10 digit number only <br/>";
        }
        else if(!preg_match("/^[0-9]*$/", $_POST['phone']))
        {
            echo "*invalid moblie number <br/>";
        }
        else{
            echo "";
        }
    }
}

//validate username or email
$Erremail="";
        // $username=$_POST["username"];
        if(isset($_POST['submit']))
        {
            if(empty($_POST['username']))
            {
                echo "*username required <br/>";
            }
            else
            {
                if (filter_var($username,FILTER_VALIDATE_EMAIL)===false)
                {  
                    echo "*enter proper format of mail id <br/>";   
                }
                else{
                    echo "";
                }
            }
        }

//validate password
$errpassword = "";
if(isset($_POST['submit']))
{
    if(empty($_POST['password']))
    {
        echo"password required <br/>";
    }
    else
    {
        if(!preg_match("/^[A-Za-z]\w{7,14}$/", $_POST['password']))
        {
            echo "*enter only 8 characters <br/>";
        }
        else{
            echo "";
        }
    }
}


?>