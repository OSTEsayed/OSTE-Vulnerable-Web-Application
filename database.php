<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

    <h1>DataBase Options</h1>
    <div class="btn-container">
        <button class="button" id="create">Create Database</button>
        <button class="button" id="restore">Restore DataBase</button>
    </div>

  <script>
        // JavaScript code to execute the PHP function
        document.getElementById('create').addEventListener('click', function() {
            // Create a new AJAX request
            var xhr = new XMLHttpRequest();

            // Configure the AJAX request to call the PHP function
            xhr.open('GET', 'options/create.php?function=create', true);

            // Define the callback function to handle the response
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Handle the response from the PHP function (if needed)
                    console.log(xhr.responseText);
                } else {
                    // Handle any errors (if needed)
                    console.error('Request failed. Status:', xhr.status);
                }
            };

            // Send the AJAX request to execute the PHP function
            xhr.send();
        });
        document.getElementById('restore').addEventListener('click', function() {
            // Create a new AJAX request
            var xhr = new XMLHttpRequest();

            // Configure the AJAX request to call the PHP function
            xhr.open('GET', 'options/restore.php?function=restore', true);

            // Define the callback function to handle the response
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Handle the response from the PHP function (if needed)
                    console.log(xhr.responseText);
                } else {
                    // Handle any errors (if needed)
                    console.error('Request failed. Status:', xhr.status);
                }
            };

            // Send the AJAX request to execute the PHP function
            xhr.send();
        });        
        
    </script>
    <!-- You can add more content as needed -->

</body>
</html>
