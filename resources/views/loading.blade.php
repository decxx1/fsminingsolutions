<!DOCTYPE html>
<html>
<head>
    <title>Cargando...</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #005E76;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .loading-text {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .loading-spinner {
            width: 80px;
            height: 80px;
            border: 10px solid #fff;
            border-top-color: transparent;
            border-radius: 50%;
            animation: spin 1s infinite linear;
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
    <div class="loading-text">Cargando...</div>
<br>
    <div class="loading-spinner"></div>
</body>
</html>