<html>
    <head>
        <meta charset="UTF-8"/>
        <title>title</title>
    </head>
    <body>
        <form action="submit.php" method="POST">
            <strong>Vorname:</strong>
            <input type="text" name="firstname" value="Werner"/>
            <br/>
            <strong>Nachname:</strong>
            <input type="text" name="lastname" value="Faust"/>
            <br/>
            <strong>Tags - Elektronik:</strong>
            <input type="checkbox" name="tags[elektronik]" value="Elektronik"/>
            <br/>
            <strong>Tags - Obst:</strong>
            <input type="checkbox" name="tags[obst]" value="Obst"/>
            <br/>
            <strong>Tags - Programmierung:</strong>
            <input type="checkbox" name="tags[programmierung]" value="Programmierung"/>
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>

