<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
            <h1>Inicio</h1>
            <p>
                Esta es la página de inicio.
            </p>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. At praesentium debitis, laudantium consequuntur obcaecati a consectetur reiciendis non perferendis quo. Ipsa officia minus nobis eveniet vel, repudiandae natus deleniti consequuntur.
            </p>
        </main>
        <footer id="footer">
            <p id="footer-text">Lorem ipsum dolor sit amet consectetur.</p>
        </footer>
    </div>
</body>
</html>