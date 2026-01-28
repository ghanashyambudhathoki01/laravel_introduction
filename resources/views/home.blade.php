<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Learning Journey</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
        }

        .navbar {
            width: 100%;
            background-color: #4169e1;
            padding: 0 0 0 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .navbar-container {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 60px;
            position: relative;
        }
        .navbar-logo {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            position: absolute;
            left: 0;
            text-decoration: none;
            margin-left: 10px;
        }
        .navbar-links {
            display: flex;
            gap: 30px;
            justify-content: center;
            width: 100%;
        }
        .navbar-links a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            transition: color 0.2s;
        }
        .navbar-links a:hover {
            color: #e63946;
        }

        .container{
            max-width: 900px;
            margin: 80px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2{
            color: #e63946;
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p{
            color: #4169e1;
            font-size: 22px;
            line-height: 1.6;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .highlight{
            color: #2a9d8f;
        }

        button{
            padding: 12px 25px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            background-color: #4169e1;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover{
            background-color: #2a4dbd;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="navbar-container">
            <a href="/" class="navbar-logo">Protfolio</a>
            <div class="navbar-links">
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
                <a href="/service">Service</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Learning Phase of Laravel with Full Stack Development</h2>

        <p>
            Hello everyone! 👋  
            I am currently learning <span class="highlight">Laravel with Full Stack Development</span>
            from beginner to advanced level.
        </p>

        <p>
            This journey includes HTML, CSS, JavaScript, PHP, Laravel framework,
            database management, and real-world project development under the
            guidance of <span class="highlight">Sudam Shrestha Sir</span>.
        </p>

        <button>Exploring new technologies and frameworks</button>
    </div>

</body>
</html>
