<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #00BFFF;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color:#F8F8FF;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        button {
            background-color: #6495ED;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #00BFFF;
        }

        .logout-link {
            margin-top: 20px;
            font-size: 14px;
            color: #4caf50;
            text-decoration: none;
        }

        .logout-link:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>selamat datang </h1>
        
        <h1>Tarmedi : 2157401162</h1>
        <p>Project Uts Laravel Dasar</p>
        <p>Politeknik Piksi Input Serang</p>
        <a href="/logout" class="logout-link"><button>Logout</button></a>
    </div>
</body>
</html>