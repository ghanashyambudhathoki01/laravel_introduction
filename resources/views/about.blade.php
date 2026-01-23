<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #eef2f5;
        }

        .profile-card{
            max-width: 900px;
            margin: 80px auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .profile-header{
            background: linear-gradient(135deg, #4169e1, #2a9d8f);
            color: #fff;
            padding: 40px;
            text-align: center;
        }

        .profile-header h2{
            margin: 10px 0 5px;
            font-size: 32px;
        }

        .profile-header p{
            font-size: 18px;
            opacity: 0.9;
        }

        .profile-body{
            padding: 40px;
        }

        .section-title{
            font-size: 28px;
            color: #e63946;
            margin-bottom: 15px;
            text-align: center;
        }

        .about-text{
            font-size: 20px;
            color: #333;
            line-height: 1.7;
            text-align: center;
            margin-bottom: 35px;
        }

        .skills{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
        }

        .skill-box{
            background-color: #f4f6f8;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #4169e1;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .skill-box:hover{
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

    <div class="profile-card">

        <!-- Profile Header -->
        <div class="profile-header">
            <h2>Ghanashyam Budhathoki</h2>
            <p>Programmer | Full Stack learner  & Mobile Application Developer</p>
        </div>
        <div class="profile-body">
            <h3 class="section-title">About Me</h3>
            <p class="about-text">
                I am Ghanashyam Budhathoki, a passionate learner and programmer.
                I enjoy building applications and continuously improving my skills
                in web and mobile app development.
            </p>

            <!-- Skills -->
            <h3 class="section-title">Skills</h3>
            <div class="skills">
                <div class="skill-box">Flutter</div>
                <div class="skill-box">Dart</div>
                <div class="skill-box">SQLite</div>
                <div class="skill-box">Firebase</div>
            </div>

        </div>
    </div>

</body>
</html>
