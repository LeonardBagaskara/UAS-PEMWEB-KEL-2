<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Inventory App</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(45deg, #f3ec78, #af4261);
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            padding: 0;
            margin: 0;
        }
        header {
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            text-align: left;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        #branding {
            float: left;
        }
        #branding h1 {
            margin: 0;
        }
        nav {
            float: right;
            margin-top: 10px;
        }
        nav ul {
            padding: 0;
            list-style: none;
        }
        nav ul li {
            display: inline;
            margin-left: 5px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .showcase {
            height: 100vh;
            background: url('showcase.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .showcase h1 {
            font-size: 3em;
            margin: 0;
        }
        .btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            padding: 10px 20px;
            font-size: 1em;
            margin-top: 20px;
            transition: background 0.3s ease-in-out;
        }
        .btn:hover {
            background: #fff;
            color: #af4261;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Inventory App</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="landing_page.php">Home</a></li>
                    <li><a href="index.php">Inventory</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="showcase">
        <div class="container">
            <h1>Welcome to the Inventory App</h1>
            <p>Manage your products efficiently and effortlessly.</p>
            <a href="index.php" class="btn">Get Started</a>
        </div>
    </section>
</body>
</html>
