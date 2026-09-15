<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог туров - Дайв-тур</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;  
    color: #333;
    line-height: 1.6;
}
        .catalog-section {
            padding: 40px 0;
            min-height: 100vh;
        }

        .catalog-title {
            text-align: center;
            color: #121212;
            font-size: 2.5em;
            margin-bottom: 40px;
        }

        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); 
            gap: 30px;
            max-width: 1000px; 
            margin: 0 auto;
            padding: 0 20px;
        }

        .tour-card {
            background-color: #87CEEB; 
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            display: flex;
            flex-direction: column;
        }

        .card-header {
            text-align: center;
            margin-bottom: 15px;
        }

        .card-title {
            color: #fff;
            font-size: 1.5em;
            margin: 0 0 5px 0;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .card-subtitle {
            color: #fff;
            font-style: italic;
            font-size: 0.9em;
            margin: 0;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .card-image {
            width: 100%;
            height: 200px;
            margin-bottom: 15px;
            border-radius: 5px;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-content {
            margin-bottom: 15px;
            flex-grow: 1;
        }

        .card-section-title {
            color: #fff;
            font-weight: bold;
            margin-bottom: 5px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .card-list {
            padding-left: 20px;
            color: #fff;
            font-size: 0.9em;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
        }

        .card-list li {
            margin-bottom: 5px;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .price {
            color: #fff;
            font-weight: bold;
            font-size: 1.1em;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .btn-buy {
            background-color: #6366f1;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .btn-buy:hover {
            background-color: #4f46e5;
        }

        @media (max-width: 768px) {
            .catalog-grid {
                grid-template-columns: 1fr; 
            }
        }
    </style>
</head>
<body>

<header>
    <iframe src="navigation.html" width="100%" height="60" frameborder="0"></iframe>
</header>

<section class="catalog-section">
    <div class="container">
        <h1 class="catalog-title">Каталог туров</h1>
        
        <div class="catalog-grid">
            
            <div class="tour-card">
                <div class="card-header">
                    <h2 class="card-title">Гробница Посейдона</h2>
                    <p class="card-subtitle">«Погрузитесь в тайны затонувшего города, который ждал тысячи лет.»</p>
                </div>
                <div class="card-image">
                    <img src="assets/images/пирамида.jpg" alt="Гробница Посейдона">
                </div>
                <div class="card-content">
                    <h3 class="card-section-title">Вкратце:</h3>
                    <ul class="card-list">
                        <li>Самый глубокий дайв в нашем каталоге</li>
                        <li>Древние руины храмов Посейдона</li>
                        <li>Встреча с акулами и скатами</li>
                        <li>Продолжительность: 2 часа под водой</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="price">Цена: 5000 рублей</div>
                    <button class="btn-buy">Купить</button>
                </div>
            </div>

            <div class="tour-card">
                <div class="card-header">
                    <h2 class="card-title">Гробница Посейдона</h2>
                    <p class="card-subtitle">«Погрузитесь в тайны затонувшего города, который ждал тысячи лет.»</p>
                </div>
                <div class="card-image">
                    <img src="assets/images/пирамида.jpg" alt="Гробница Посейдона">
                </div>
                <div class="card-content">
                    <h3 class="card-section-title">Вкратце:</h3>
                    <ul class="card-list">
                        <li>Самый глубокий дайв в нашем каталоге</li>
                        <li>Древние руины храмов Посейдона</li>
                        <li>Встреча с акулами и скатами</li>
                        <li>Продолжительность: 2 часа под водой</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="price">Цена: 5000 рублей</div>
                    <button class="btn-buy">Купить</button>
                </div>
            </div>

            <div class="tour-card">
                <div class="card-header">
                    <h2 class="card-title">Гробница Посейдона</h2>
                    <p class="card-subtitle">«Погрузитесь в тайны затонувшего города, который ждал тысячи лет.»</p>
                </div>
                <div class="card-image">
                    <img src="assets/images/пирамида.jpg" alt="Гробница Посейдона">
                </div>
                <div class="card-content">
                    <h3 class="card-section-title">Вкратце:</h3>
                    <ul class="card-list">
                        <li>Самый глубокий дайв в нашем каталоге</li>
                        <li>Древние руины храмов Посейдона</li>
                        <li>Встреча с акулами и скатами</li>
                        <li>Продолжительность: 2 часа под водой</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="price">Цена: 5000 рублей</div>
                    <button class="btn-buy">Купить</button>
                </div>
            </div>

            <div class="tour-card">
                <div class="card-header">
                    <h2 class="card-title">Гробница Посейдона</h2>
                    <p class="card-subtitle">«Погрузитесь в тайны затонувшего города, который ждал тысячи лет.»</p>
                </div>
                <div class="card-image">
                    <img src="assets/images/пирамида.jpg" alt="Гробница Посейдона">
                </div>
                <div class="card-content">
                    <h3 class="card-section-title">Вкратце:</h3>
                    <ul class="card-list">
                        <li>Самый глубокий дайв в нашем каталоге</li>
                        <li>Древние руины храмов Посейдона</li>
                        <li>Встреча с акулами и скатами</li>
                        <li>Продолжительность: 2 часа под водой</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="price">Цена: 5000 рублей</div>
                    <button class="btn-buy">Купить</button>
                </div>
            </div>

            <div class="tour-card">
                <div class="card-header">
                    <h2 class="card-title">Гробница Посейдона</h2>
                    <p class="card-subtitle">«Погрузитесь в тайны затонувшего города, который ждал тысячи лет.»</p>
                </div>
                <div class="card-image">
                    <img src="assets/images/пирамида.jpg" alt="Гробница Посейдона">
                </div>
                <div class="card-content">
                    <h3 class="card-section-title">Вкратце:</h3>
                    <ul class="card-list">
                        <li>Самый глубокий дайв в нашем каталоге</li>
                        <li>Древние руины храмов Посейдона</li>
                        <li>Встреча с акулами и скатами</li>
                        <li>Продолжительность: 2 часа под водой</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="price">Цена: 5000 рублей</div>
                    <button class="btn-buy">Купить</button>
                </div>
            </div>

            <div class="tour-card">
                <div class="card-header">
                    <h2 class="card-title">Гробница Посейдона</h2>
                    <p class="card-subtitle">«Погрузитесь в тайны затонувшего города, который ждал тысячи лет.»</p>
                </div>
                <div class="card-image">
                    <img src="assets/images/пирамида.jpg" alt="Гробница Посейдона">
                </div>
                <div class="card-content">
                    <h3 class="card-section-title">Вкратце:</h3>
                    <ul class="card-list">
                        <li>Самый глубокий дайв в нашем каталоге</li>
                        <li>Древние руины храмов Посейдона</li>
                        <li>Встреча с акулами и скатами</li>
                        <li>Продолжительность: 2 часа под водой</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="price">Цена: 5000 рублей</div>
                    <button class="btn-buy">Купить</button>
                </div>
            </div>

        </div>
    </div>
</section>

</body>
</html>