<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Static Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .nav {
            display: flex;
            justify-content: center;
            background-color: #444;
        }
        .nav a {
            color: #fff;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        .nav a:hover {
            background-color: #555;
        }
        .main {
            padding: 20px;
            text-align: center;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to My Website</h1>
    </div>
    <div class="nav">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
    <div class="main">
        <h2>About Me</h2>
        <p>This is a simple static home page created using HTML and CSS.</p>
    </div>
    <div class="footer">
        <p>© 2024 My Website</p>
    </div>
</body>
</html>
