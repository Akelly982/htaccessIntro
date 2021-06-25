<!doctype html>
<html lang="en">

    <h2>Testing htaccess usage holding vars </h2>
    <p>-------------------------------------</p>
    <a href="http://www.htaccess-guide.com/how-to-use-htaccess/"> htacces guide web link</a> 
    <br>
    <a href="https://css-tricks.com/snippets/htaccess/"> htaccess snippets from css tricks</a>
    <br>
    <a href="https://www.php.net/manual/en/function.getenv"> php getenv</a>
    <br>
    <a href="https://www.php.net/manual/en/function.putenv.php"> php putenv (didnt actually use this)</a>
    <br>
    <a href="https://stackoverflow.com/questions/17550223/set-an-environment-variable-in-htaccess-and-retrieve-it-in-php"> htaccess SetEnv stackoverflow</a>
    <p>-------------------------------------</p>

    <p>list of students</p>
    <?php include 'getUsers.php'; ?>

    <br>
    <?php

        echo "host: " .getenv("host"). "<br>";
        echo "username:" .getenv("uname"). "<br>";
        echo "password:" .getenv('pass'). "<br>";
        echo "dbname:" .getenv ('dbname'). "<br>";


        echo "<br>";
        echo "<br>";
        echo "phpInfo() function - shown below";
        phpinfo();
    ?>

    </html>
