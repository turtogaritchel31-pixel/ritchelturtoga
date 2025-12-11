<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body, html {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100%;
            background-color: #f5f7fa;
        }

        .hero {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .hero-image {
            flex: 1;
            min-width: 300px;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0 15px 15px 0;
        }

        .hero-content {
            flex: 1;
            padding: 50px;
            text-align: left;
        }

        .hero-content h1 {
            font-size: 50px;
            color: #1e1e2f;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 40px;
            color: #333;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            background-color: #ff6f61;
            transition: 0.3s;
            font-size: 18px;
        }

        .btn:hover {
            background-color: #e55a4f;
        }

        /* Responsive */
        @media(max-width: 768px) {
            .hero {
                flex-direction: column;
            }

            .hero-image img {
                border-radius: 15px 15px 0 0;
                height: 300px;
            }

            .hero-content {
                padding: 20px;
                text-align: center;
            }

            .hero-content h1 {
                font-size: 36px;
            }

            .hero-content p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<div class="hero">
    <div class="hero-image">
        <img src="https://scontent.fdvo1-2.fna.fbcdn.net/v/t39.30808-6/593144334_1243196951190583_6713202979785949696_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeGt4yPRLiXVesTHed9kyDXcp_GYYXYkBWGn8ZhhdiQFYd4IJ7pzq-vMgDeK8rutSaWCfN0zhD40WH2B0vOJNuVA&_nc_ohc=J_o1fHMFqnQQ7kNvwHTdF4u&_nc_oc=Adlhr5nF3mIIjO9JATxbgO3Vpb0mXWepxqJVohOh_Ry2uTbNjVJKD4AG1wNVibwYFHU&_nc_zt=23&_nc_ht=scontent.fdvo1-2.fna&_nc_gid=jgSKGfKFyLtMdEABzdrTSg&oh=00_Afnmi_Vo3UzCxAOcO9K-wTTK4j9bXjJioWfX9FNV9W3y5A&oe=693E8BE0" alt="Profile Image">
    </div>

    <div class="hero-content">
        <h1>Get In Touch With Me!</h1>
        <p>Hello! I'm Ritchel. Explore my website to learn more about me, view my photos, and get in touch!</p>

        <div class="btn-group">
            <a href="index.php" class="btn">Home</a>
            <a href="about.php" class="btn">About</a>
            <a href="photos.php" class="btn">Photos</a>
            <a href="contact.php" class="btn">Contact</a>
        </div>
    </div>
</div>

</body>
</html>
