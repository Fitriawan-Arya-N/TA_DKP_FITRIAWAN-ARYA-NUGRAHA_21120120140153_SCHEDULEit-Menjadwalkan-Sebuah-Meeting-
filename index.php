<!DOCTYPE html>
<?php
    include("user.php");
?>
<html> 
        <head>
            <title>Login Page</title>
            <link rel="stylesheet" href="css/style.css">
        </head>

        <body>
                <form method="post" action="login.php">

                <table>
                    <tr>
                    <td colspan="2"><h1 >Login</h1></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" placeholder="username..." ></td>
                    </tr>
                    <tr>

                        <td>Password</td>
                        <td><input type="password" name="password" placeholder="password..." ></td>
                    </tr>
                    <tr>
                    <div class="center">
                        <td colspan="2"><button type="submit" name="ProsesLogin">Login</button></td>
                    </tr>
                </table>
                </form>
                Gambar background oleh <a href="https://pixabay.com/id/users/yeskay1211-6332528/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2836301">Sathish kumar Periyasamy</a> dari <a href="https://pixabay.com/id/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2836301">Pixabay</a>
        </body>
</html>