<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #3271a8;
            height: 15vmin;
            display: flex;
        }

        footer {
            background-color: #292936;
            color: gray;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 15vmin;
            justify-content: center;
            align-items: center;
        }

        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 160px;
            margin-top: 7vmin;
        }

        label {
            width: 100px;
            margin: 5px;
        }

        #submit {
            margin: 15px;
        }

        .c1 {
            margin: 5px;
        }

        #footer-text {
            color: gray;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        #submit {
            background-color: #3271a8
        }
    </style>
</head>
<body>
    <div id="root">
        <header id="header">
            <img src="/resources/media/logo_prodin.jpeg" alt="Logo Prodin">
        </header>
        <main>
            <h1 id="title">Login</h1>
            <div class="c1">
                <label for="username">Username:</label>
                <input type="text" id="username-box">
            </div>
            <div class="c1">
                <label for="password">Password:</label>
                <input type="text" id="password-box">
            </div>

            <button id="submit">Submit</button>
        </main>
        <footer id="footer">
            <p id="footer-text">Lorem ipsum dolor sit amet consectetur.</p>
        </footer>
    </div>
</body>
</html>