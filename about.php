<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
        }

        /* About Section */
        .about-container {
            display: flex;
            max-width: 1000px;
            margin: 60px auto;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            animation: fadeIn 1s ease;
            flex-wrap: wrap;
            padding-bottom: 20px;
        }

        .about-content {
            flex: 1;
            padding: 40px;
        }

        .about-content h1 {
            margin-bottom: 20px;
            color: #1e1e2f;
        }

        .about-content p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            margin-bottom: 25px;
        }

        /* Section Titles */
        .section-title {
            color: #1e1e2f;
            margin: 25px 0 15px;
            font-size: 22px;
            font-weight: bold;
        }

        /* Skills List */
        .skills-list {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .skill-tag {
            padding: 8px 15px;
            background-color: #ff6f61;
            color: white;
            font-weight: bold;
            border-radius: 20px;
            font-size: 16px;
        }

        /* Education */
        .education-list {
            list-style: none;
            padding: 0;
            font-size: 18px;
            color: #444;
            margin-bottom: 20px;
        }

        .education-list li {
            margin-bottom: 8px;
        }

        /* Image Section */
        .image-skills-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f0f0f0;
            padding: 20px;
            min-width: 300px;
        }

        .about-image img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }

        @keyframes fadeIn {
            0% {opacity: 0; transform: translateY(20px);}
            100% {opacity: 1; transform: translateY(0);}
        }

        /* Responsive */
        @media(max-width: 768px) {
            .about-container {
                flex-direction: column;
            }
            .image-skills-container {
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- About Section -->
<div class="about-container">

    <div class="about-content">
        <h1>About Me</h1>
        <p>
            I am Ritchel Turtoga, a BS Information System student at Talibon Polytechnic College.
            I am a creative and innovative individual skilled in editing, sound operations, and design.
            With a strong interest in system development, I aim to apply my knowledge in designing and
            improving systems that enhance efficiency and user experience. I am eager to contribute my
            skills and gain meaningful experience in a professional setting.
        </p>

        <!-- Skills -->
        <h2 class="section-title">Skills</h2>
        <div class="skills-list">
            <span class="skill-tag">HTML</span>
            <span class="skill-tag">CSS</span>
            <span class="skill-tag">PHP</span>
            <span class="skill-tag">JavaScript</span>
            <span class="skill-tag">MySQL</span>
        </div>

        <!-- Education -->
        <h2 class="section-title">Education</h2>
        <ul class="education-list">
            <li><strong>Talibon Polytechnic College</strong> 2025</li>
            <li><strong>San Jose National High School</strong> 2022</li>
            <li><strong>Balintawak Elementary School</strong> 2010</li>
        </ul>
    </div>

    <!-- Image -->
    <div class="image-skills-container">
        <div class="about-image">
            <img src="https://scontent.fdvo1-2.fna.fbcdn.net/v/t39.30808-6/593144334_1243196951190583_6713202979785949696_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeGt4yPRLiXVesTHed9kyDXcp_GYYXYkBWGn8ZhhdiQFYd4IJ7pzq-vMgDeK8rutSaWCfN0zhD40WH2B0vOJNuVA&_nc_ohc=J_o1fHMFqnQQ7kNvwHTdF4u&_nc_oc=Adlhr5nF3mIIjO9JATxbgO3Vpb0mXWepxqJVohOh_Ry2uTbNjVJKD4AG1wNVibwYFHU&_nc_zt=23&_nc_ht=scontent.fdvo1-2.fna&_nc_gid=jgSKGfKFyLtMdEABzdrTSg&oh=00_Afnmi_Vo3UzCxAOcO9K-wTTK4j9bXjJioWfX9FNV9W3y5A&oe=693E8BE0"
                 alt="Profile Picture">
        </div>
    </div>

</div>

</body>
</html>
