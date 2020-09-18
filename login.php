<!-------MOD LOG---------------------------------
---------DATE: 9/18/2020--------------------------
---------Made login.php to connect to admin.php-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="My personal portfolio website" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="./favicon/digglett.png"
            />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="./favicon/digglett.png"
            />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="./favicon/digglett.png"
            />
        <link rel="manifest" href="./favicon/site.webmanifest" />
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>
        <nav id="nav" class="hideNav">
            <ul class="navbar">
                <li><a href="index.html#home">Home</a></li>
                <li><a href="index.html#projects">Projects</a></li>
                <li><a href="index.html#about">About</a></li>
                <li><a href="login.php">Admin</a></li>
            </ul>
        </nav>
        <div id="home">
            <div class="showcase">
                <div class="container">
                    <h1 id="name">
                        Login Page:&nbsp
                        <!--Need this to create space between words-->
                        <span
                            class="txt-type"
                            data-wait="1500"
                            data-words='["Please Log In..."]'
                            >
                        </span>
                    </h1>
                    <form name="form1" action="admin.php" method="POST">
                        <label for="Name">Name</label><br />
                        <input type="text" name="Name" size="50" id="Name" maxlength="255" required/><br /><br />

                        <label for="Password">Password</label><br />
                        <input type="text" name="Password" size="50" id="Password" maxlength="255" required/><br /><br />
                        <input type="submit" id="submit" value="Login" class="btn" />
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

<!--Footer Break-->

<footer id="footer" class="hideNav">
    <p>
        Find me on
        <a
            href="https://github.com/diglettusedswim"
            target="_blank"
            rel="noreferrer"
            >GitHub</a
        >
        and
        <a
            href="https://www.linkedin.com/in/kyle-killian-9640141a6/"
            target="_blank"
            rel="noreferrer"
            >LinkedIn</a
        >
        or contact me
        <a href="contact.html" target="_blank" rel="noreferrer">here!</a>
    </p>
</footer>

<script src="main.js"></script>
</body>
</html>