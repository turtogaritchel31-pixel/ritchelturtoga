<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Photos</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0a1f44; /* dark blue background */
        }

        .container {
            max-width: 1000px;
            margin: 60px auto;
            padding: 30px;
            text-align: center;
            animation: fadeIn 1s ease;

            /* BLUE GALLERY BACKGROUND */
            background-color: #11254b;
            border-radius: 15px;
            color: white;
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
        }

        h1 {
            color: #00bfff; /* light blue accent */
            margin-bottom: 30px;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
        }

        .photos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .photos-grid img {
            width: 100%;
            border-radius: 15px;

            /* WHITE FRAME FOR PHOTOS */
            background-color: white;
            padding: 6px;

            box-shadow: 0 6px 18px rgba(0,0,0,0.5);
            transition: transform 0.3s;
        }

        .photos-grid img:hover {
            transform: scale(1.08);
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(0,0,0,0.7);
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <h1>My Gallery</h1>

    <div class="photos-grid">
        <img src="https://scontent.fceb1-4.fna.fbcdn.net/v/t39.30808-6/505915994_1099035338940079_2919037771240493068_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeECYYUBIFhVY7UUhX_LbENqG4Gnl7fFdLAbgaeXt8V0sCXY-60HeI-Y_MQk2pwFLkcft7FVBbzYOfdZCKdM22G3&_nc_ohc=XtlBfN6No1oQ7kNvwF7J5AY&_nc_oc=Adlew7mJfZmCbch4eg83JiJfctOsZcMYFRS4IH1ToGh54EN28e4lW7RXmams9T80fm0&_nc_zt=23&_nc_ht=scontent.fceb1-4.fna&_nc_gid=sY9S9F2f1oN6GA8QnYXyNA&oh=00_AfnfqsAAgy_7-wbHSq4u6M14vSeKV15rXR2iwkWWlLKxcg&oe=69404776" alt="Photo 1">

        <img src="https://scontent.fceb1-4.fna.fbcdn.net/v/t39.30808-6/596710375_1249055800604698_6216976509516769814_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeG9c8L8pwTw-L_lCFZ-SCketGu9-_bEKw60a7379sQrDuNuFsF9EcTKuP9eghN5ZgF63ShnOmb2gv7Hu4f9T6Me&_nc_ohc=3AzdZp15vIgQ7kNvwHKfrEz&_nc_oc=AdlaQOM42XVNaZ-0tIFMOG2XAYysWvl6NYeU4Esnki7PN2TrZ_MdFHQlvtIAlq0IlLc&_nc_zt=23&_nc_ht=scontent.fceb1-4.fna&_nc_gid=PqPvyMO72rDbQN1qH9bXcA&oh=00_AfkHXnBFdxifWOR-VUHCymHi51kaVYEt7D9dZ2WcJ-R9PQ&oe=69401D40" alt="Photo 2">

        <img src="https://scontent.fceb1-3.fna.fbcdn.net/v/t39.30808-6/486149425_1036667318510215_7365594145839977476_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeG1AWKiVzUb9GLdLRlSqZwRQX5XNmLbnFVBflc2YtucVRtafTjCOVtzCrOxwtVdbXRpUSHD-DHZNI-WUHrIto_3&_nc_ohc=SNeZpratwr0Q7kNvwFaI1N_&_nc_oc=AdmDtOnrKVjaHgu6zImGvhJd6WcwONPZmOW1-7lt1H8bOP-myj975H7whXwflALT5IU&_nc_zt=23&_nc_ht=scontent.fceb1-3.fna&_nc_gid=h3Ic5LhE0bP5F3r5HkwAFQ&oh=00_AfnHB1c8pXfvGxfMMU3zQoXyMqwNSRpmEelZ7hhQmoRYQg&oe=694044BE" alt="Photo 3">

        <img src="https://scontent.fceb1-1.fna.fbcdn.net/v/t39.30808-6/548239031_1174079128102366_209169644326907126_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeEhZQLPkzSrnyWaHVlUQpEid8eEFknp7-p3x4QWSenv6mVD05I-ro-lUxdUHYsc-nS_d1lgRAGv22D6XjxDZtD3&_nc_ohc=v_ocqj0pvP0Q7kNvwFx_GV5&_nc_oc=Adn4WqnkcdbgFBZD_M4rXTUpUNrHo0Sl6NSJg4sD3q9XVrbC_VjqOkKbZ6Cw8hzk9Eg&_nc_zt=23&_nc_ht=scontent.fceb1-1.fna&_nc_gid=bigmPVq--iCO9Gx26nzQdA&oh=00_AflIKEW6GZZdRmHfEZcMxuvOlJhDrN7txvnpdAEYh4kJZA&oe=69402018" alt="Photo 4">
    </div>
</div>

</body>
</html>
