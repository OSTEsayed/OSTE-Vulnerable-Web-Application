<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="34wOCPeSUvPzWAd6PjBImav-hV4ppzQZM2cpUGq5cvM" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSTE Vulnerable Web Application</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            padding: 10px;
            color: #fff;
            display: flex;
            align-items: center;
               justify-content: space-between; /* Align the list to the right */

        }
        header img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
        header ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        header li {
            margin-left: 20px;
        }
        a{
        color:white;
        }
        h1 {
            font-family: 'Your Custom Font', Arial, sans-serif;
            text-align: center;
            margin: 30px 0;
        }
        p {
            text-align: center;
            margin-bottom: 30px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
        }
        .button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
            background-color: #0056b3;
        }
        p {
            text-align: center;
            font-size: 18px;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 30px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Add some color and emphasis for specific text */
        p strong {
            color: #007BFF;
        }

        /* Add some margin to the button container */
        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
                header {
            background-color: #333;
            padding: 10px;
            color: #fff;
            display: flex;
            justify-content: space-between; /* Align the list to the right */
            align-items: center;
        }

        header img {
            width: 100px;
            height: 50px;
            margin-right: 10px;
        }

        header ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header li {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <header>
        <img src="OSTE.svg" alt="Logo">
        <ul>
   	     <li><a href="index.php">Home</a></li>
            <li><a href="database.php">Database</a></li>
            <li><a href="vulnerabilities.php">Vulnerabilities</a></li>
        </ul>
    </header>

    <h1>OSTE Vulnerable Web Application</h1>

 <p>
        OSTE Vulnerable Web Application (OSTE VWA) is a purpose-built web application aimed at testing DAST (Dynamic Application Security Testing) tools and providing valuable experience to individuals interested in web cybersecurity. Developed using PHP and SQL, OSTE VWA contains a collection of deliberately vulnerable pages, including exploits like SQL injection (SQL), Cross-Site Scripting (XSS), and OS command injection. As we progress, we plan to incorporate additional vulnerabilities, broadening the application's educational scope.
        <br><br>
        Operating OSTE VWA is simple; first, you create a database named "<strong>OSTE</strong>" and then you can launch the application and explore its various functionalities, including examining the complete database.
        <br><br>
        It is crucial to emphasize that this application is intended solely for learning purposes. Users are expected to use it responsibly and strictly within ethical boundaries. We do not condone any misuse or unauthorized attempts to exploit vulnerabilities beyond educational purposes.
        <br><br>
        We hope you find value in using OSTE VWA to deepen your understanding of web security and enhance your cybersecurity skills. Happy learning!
    </p>
    <div class="btn-container">
        <button class="button" onclick="location.href='database.php';">Go to Database</button>
        <button class="button" onclick="location.href='vulnerabilities.php';">Go to Vulnerabilities</button>
    </div>

    <!-- You can add more content as needed -->

</body>
</html>
