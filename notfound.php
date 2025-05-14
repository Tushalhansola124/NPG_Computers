<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            text-align: center;
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        h1 {
            font-size: 8rem;
            margin: 0;
            color: #dc3545;
            animation: bounce 2s infinite;
        }

        p {
            font-size: 1.5rem;
            color: #6c757d;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes bounce {
            0% { transform: translateY(0); }
            50% { transform: translateY(-30px); }
            100% { transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oops! Page Not Found</p>
    </div>

    <script>
        // Optional JavaScript for more animation effects or redirects
        //setTimeout(() => {
            // Redirect to homepage after 5 seconds, you can remove this if not needed
            //window.location.href = '/';
       // }, 5000);
    </script>
</body>
</html>
