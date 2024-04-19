<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misión y Visión</title>
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

        #footer-text {
            color: gray;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        #title1 {
            color: white;
        }
    </style>
</head>
<body>
    <div id="root">
        <header id="header">
            <img src="/resources/media/logo_prodin.jpeg" alt="Logo Prodin">
            <h1 id="title1">PRODIN</h1>
        </header>
        <main>
            <h1>Misión</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, rem amet aliquid iure repudiandae obcaecati non. Libero, voluptates neque error, corporis fugit saepe, soluta ducimus est ad tempore magni a!
            </p>

            <h1>Visión</h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium laboriosam, delectus sequi ullam, dolor facere error consectetur, minima labore repellendus a voluptas! Magnam distinctio at doloremque, aspernatur culpa iusto officiis.
            </p>
        </main>
        <footer id="footer">
            <p id="footer-text">Lorem ipsum dolor sit amet consectetur.</p>
        </footer>
    </div>
</body>
</html>