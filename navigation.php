    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Навигация</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }

            body {
                font-family: Arial, sans-serif;
                background-color: #e0e0e0; 
                display: flex;
                align-items: center; 
                justify-content: space-between; 
                height: 100%; 
                padding: 0 20px;
            }

            .logo {
                font-size: 24px;
                font-weight: bold;
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            #menu {
                display: flex; 
                list-style: none;
                gap: 25px;
            }

            #menu li a {
                text-decoration: none;
                color: #333;
                font-size: 14px;
                transition: color 0.3s;
            }

            #menu li a:hover {
                color: #6366f1; 
            }
            
            .icons {
                font-size: 18px;
                cursor: pointer;
                display: flex;
                gap: 15px;
            }
        </style>
    </head>

    <body>
        <a href="index.html" target="_parent" class="logo">Дайв-тур</a>

        <nav id="navigation">
            <ul id="menu">
                <li><a href="index.html" target="_parent">Главная страница</a></li>
                <li><a href="catalog.html" target="_parent">Каталог</a></li>
                <li><a href="applications.html" target="_parent">Оставить заявку</a></li>
                <li><a href="stocks.html" target="_parent">Акции</a></li>
            </ul>
        </nav>
        
        <div class="icons">
            <span>🔍</span>
            <span>☰</span>
        </div>
    </body>
    </html>