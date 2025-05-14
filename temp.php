<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Under Construction</title>
    <style>
		* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    height: 100vh;
   
    justify-content: center;
    align-items: center;
    background-color: #f4f4f4;
}

.container {
    text-align: center;
    color: #333;
}

.construction .icon {
    font-size: 70px;
    color: #f39c12;
    margin-bottom: 20px;
    animation: rotate 2s infinite linear;
}

h1 {
    font-size: 36px;
    margin-bottom: 10px;
    animation: fadeIn 2s ease-out;
}

p {
    font-size: 18px;
    margin-bottom: 30px;
    animation: fadeIn 3s ease-out;
}

.loader {
    margin: 0 auto;
    width: 50px;
    height: 50px;
    border: 6px solid #f39c12;
    border-radius: 50%;
    border-top: 6px solid transparent;
    animation: spin 1.5s linear infinite;
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}


	</style>
</head>
<body>
    <div class="container">
        <div class="construction">
            <div class="icon">
                <span class="material-icons">WEBSITE <br>UNDER CONSTRAUCTION</span>
            </div>
            <h1>Our Website is Under Construction</h1>
            <p>We're working hard to bring you something amazing! Stay tuned.</p>
            <div class="loader"></div>
        </div>
    </div>
</body>
</html>
