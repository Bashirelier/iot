<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>room data</title>
      <link rel="stylesheet" href = "css/stylss" type="text/css" />
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Room Database</h1>
            </header>
            <div id="shouts">
                <ul>
                    <li class="shout"><span>10:15pm </span>Data here</li>
                    <li class="shout"><span>10:15pm </span>Data here</li>
                    <li class="shout"><span>10:15pm </span>Data here</li>
                    <li class="shout"><span>10:15pm </span>Data here</li>
                    <li class="shout"><span>10:15pm </span>Data here</li>
                    <li class="shout"><span>10:15pm </span>Data here</li>
                </ul>
            </div>
            <div id="input">
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter details here" />
                    <input type="text" name="user" placeholder="Enter details here" />
                    <br />
                    <input class="shout-btn" type="submit" name="submit" value="send data" />
                </form>
    </body>
</html>