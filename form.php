<?php
/**
 * Created by PhpStorm.
 * User: feroz
 * Date: 1/8/2018
 * Time: 12:14 PM
 */
?>
<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <form name="yalwa_test" id="yalwa_test">
            <p><label>Name</label><input type="text" name="name" maxlength="20" id="name"></p>
            <p><label>Password</label><input type="password" name="password" maxlength="20" id="password"></p>
            <p><label>portal</label>
                <select name="portal" id="portal">
                    <option value="foo">foo</option>
                    <option value="bar">bar</option>
                    <option value="baz">baz</option>
                </select></p>
            <p><label>keywords</label><textarea name="keywords" id="keywords"></textarea></p>
            <p><input type="button" value="Submit" id="submit">
        </form>
    </body>
</html>
