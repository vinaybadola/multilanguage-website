<?php
include('language.php');
                    $en_select='';
                    $hi_select='';
                    $language='';
                    if((isset($_GET['language']) && $_GET['language'] =='en') || !isset($_GET['language']))
                    {
                        $en_select='selected';
                        $language='en';

                    }
                    else{
                        $hi_select='selected';
                        $language='hi';
                    }
                      // connection with database 
                      //create database name (language) and table name(page)
                    $con = new mysqli('localhost','root','','language');
                    $sql = "SELECT page_content FROM page where language_type='$language'";
                    $result = $con->query($sql);
                    $row=$result->fetch_all(MYSQLI_ASSOC);
                   
                        

                    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website</title>
    <style>
    body {
        margin: auto;
        width: 80 %;
        background-color: #26DA75;
        font-family: arial;
    }

    #container {
        margin-top: 20px;

    }

    #nav_bar {
        background-color: #fff;
        padding: 20px;
    }

    #nav_bar li {
        margin: 0px;
        padding: 0px;
    }

    #nav_bar li {
        list-style: none;
        display: inline;
        margin-right: 10px;
    }

    #nav_bar li a {
        text-decoration: none;
        color: #000;
        font-weight: bold;
    }

    #nav_bar li a:hover {
        text-decoration: underline;
    }

    #content {
        background-color: #fff;
        padding: 20px;
        margin-top: 5px
    }

    #nav_bar select {
        padding: 5px;
    }

    .fright {
        float: right;
    }
    </style>

</head>


<body>
    <div id="container">
        <div id="nav_bar">
            <ul>
                <li> <a href="index.php" class="active"><?php echo $top_nav[$language]['0'] ?></a></li>
                <li> <a href="about.php"><?php echo $top_nav[$language]['1'] ?> </a></li>
                <li> <a href="contact.php"> <?php echo $top_nav[$language]['2'] ?></a></li>

                <li class="fright">
                    Language

                    <select onchange="set_language()" name="language" id="language">

                        <option value="en" <?php echo $en_select?>>EN</option>
                        <option value="hi" <?php echo $hi_select?>> HI</option>
                    </select>
                </li>

            </ul>

        </div>
        <div id="content">
            
            <p><?php echo $row['0']['page_content'] ?></p>


        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    function set_language() {
        var language = jQuery('#language').val();
        window.location.href='http://localhost/multilanguage/index.php/?language='+ language; //copy URL of your index.php page here 
    }
    </script>

</body>



</html>