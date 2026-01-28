<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services & Contact</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #eef2f5;
        }

        .container{
            max-width: 1100px;
            margin: 80px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        h2{
            text-align: center;
            font-size: 38px;
            color: #e63946;
            margin-bottom: 20px;
        }

        .intro{
            text-align: center;
            font-size: 20px;
            color: #333;
            line-height: 1.7;
            margin-bottom: 40px;
        }

        /* Services */
        .services{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 60px;
        }

        .service-box{
            background-color: #f4f6f8;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-box:hover{
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
        }

        .icon{
            font-size: 40px;
            margin-bottom: 15px;
        }

        .service-box h3{
            font-size: 22px;
            color: #4169e1;
            margin-bottom: 10px;
        }

        .service-box p{
            font-size: 18px;
            color: #444;
            line-height: 1.6;
        }

        /* Contact CTA */
        .contact-cta{
            background: linear-gradient(135deg, #4169e1, #2a9d8f);
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            color: #ffffff;
        }

        .contact-cta h3{
            font-size: 32px;
            margin-bottom: 15px;
        }

        .contact-cta p{
            font-size: 20px;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .contact-cta a{
            display: inline-block;
            padding: 14px 30px;
            background-color: #ffffff;
            color: #4169e1;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 30px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .contact-cta a:hover{
            background-color: #f1f1f1;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="container">

        <h2>My Services</h2>
        <p class="intro">
            I provide creative and technical services that blend innovation,
            technology, and artistic expression.
        </p>

        <div class="services">

            <div class="service-box">
                <div class="icon">📱</div>
                <h3>Mobile App Development</h3>
                <p>
                    Cross-platform mobile application development using
                    Flutter and Dart.
                </p>
            </div>

            <div class="service-box">
                <div class="icon">🎬</div>
                <h3>Video Editing</h3>
                <p>
                    High-quality video editing for social media,
                    presentations, and creative projects.
                </p>
            </div>

            <div class="service-box">
                <div class="icon">🖼️</div>
                <h3>Photo Editing</h3>
                <p>
                    Professional photo editing, retouching,
                    and image enhancement.
                </p>
            </div>

            <div class="service-box">
                <div class="icon">📊</div>
                <h3>Business Strategy</h3>
                <p>
                    Strategic planning and guidance to help
                    businesses grow effectively.
                </p>
            </div>

            <div class="service-box">
                <div class="icon">✍️</div>
                <h3>Content Creation</h3>
                <p>
                    Engaging content creation for digital platforms,
                    education, and branding.
                </p>
            </div>

            <div class="service-box">
                <div class="icon">📖</div>
                <h3>Poetry & Literature</h3>
                <p>
                    Writing poems, literature, and creative works
                    with emotional and artistic depth.
                </p>
            </div>

        </div>
        <div class="contact-cta">
            <h3>Let’s Work Together</h3>
            <p>
                Interested in collaboration, projects, or creative work?
                Feel free to reach out to me via email.
            </p>

            <a href="mailto:ghanashyambudhathoki@gmail.com">
                📧 Contact Me
            </a>
        </div>

    </div>

</body>
</html>
