# SpeedProgramming
PHP

Create a PHP script that does the following:

If no POST variables are sent to the script, show a simple HTML form (no styling necessary)

that posts the following data to itself:

• "name" (up to 20 characters)

• "password" (up to 20 characters)

• "portal" (one of "foo", "bar", or "baz")

• "keywords" (any number of characters)

If POST variables are sent to the script, validate the values:

1. "portal" should be one of the three values mentioned above

2. "name" and "password" are values stored in the columns "name" and "password" of

the table "users" in an SQL data base with the name $portal (the "portal" value from

$_POST) on the data base server localhost (username and password to connect to the

DB: pick any)

3. "keywords" may contain alphanumeric characters, spaces, and commas

Consider security risks and treat them appropriately.

If anything is not valid, print appropriate error messages and show the HTML form again

If everything is valid, trim trailing spaces, split the POSTed "keywords" (separated by

commas) and append them to the local file "/tmp/$portal_keywords" (i. e. "foo_keywords",

"bar_keywords" or "baz_keywords"). Each line of the file should contain the "user" value from

POST and a keyword (separated by a tab, see example).

example:

user1 hi there

user2 fish

user2 chips

user2 fish

user1 ghoti
