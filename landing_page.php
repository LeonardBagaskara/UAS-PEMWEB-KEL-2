<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVTRY</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: #000;
            color: #fff;
            padding: 20px 10;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        #branding {
            text-align: left;
        }
        #branding h1 {
            margin: 0;
        }
        nav {
            float: right;
            margin-top: 10px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-left: 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px
        }
        .showcase {
            height: 100vh;
            background: url('wallpaper.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #000;
        }
        .showcase h1 {
            font-size: 3em;
            margin-bottom: 10px;
            color: #fff;
        }
        .showcase p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 2px solid #fff;
            padding: 10px 20px;
            font-size: 1em;
            transition: all 0.3s ease-in-out;
        }
        .btn:hover {
            background: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>INVTRY</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="landing_page.php">Home</a></li>
                    <li><a href="index.php">Inventory</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="showcase">
        <div class="container">
            <h1>Welcome to the INVTRY</h1>
            <p>Manage your products efficiently and effortlessly.</p>
            <a href="index.php" class="btn">Get Started</a>
        </div>
    </section>
</body>
</html>
