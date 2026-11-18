<?php $siteName = "Лимоновка РП"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Обновления — <?= htmlspecialchars($siteName) ?></title>
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background: radial-gradient(circle at 50% 0%, #2a2a2a 0%, #0d0d0d 70%);
        color: #fff;
        min-height: 100vh;
        padding: 40px 20px;
        overflow-x: hidden;
    }
    .bg-glow {
        position: fixed;
        width: 600px; height: 600px;
        background: radial-gradient(circle, rgba(255,200,0,0.15) 0%, transparent 70%);
        top: -200px; left: 50%;
        transform: translateX(-50%);
        pointer-events: none;
        z-index: 0;
        animation: glowPulse 4s ease-in-out infinite;
    }
    @keyframes glowPulse {
        0%, 100% { opacity: 0.7; transform: translateX(-50%) scale(1); }
        50%      { opacity: 1;   transform: translateX(-50%) scale(1.15); }
    }
    .container {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
        background: rgba(20,20,20,0.85);
        border: 1px solid rgba(255,200,0,0.25);
        border-radius: 20px;
        padding: 45px 50px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.7), 0 0 80px rgba(255,200,0,0.08);
        backdrop-filter: blur(10px);
        opacity: 0;
        transform: translateY(30px);
        animation: cardIn 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }
    @keyframes cardIn {
        to { opacity: 1; transform: translateY(0); }
    }
    .back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #ffc800;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 25px;
        transition: all 0.25s;
    }
    .back:hover { transform: translateX(-5px); }
    h1 {
        font-size: 34px;
        font-weight: 900;
        background: linear-gradient(90deg, #ffe14d, #ffb800, #ffe14d);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 10px;
        text-transform: uppercase;
        animation: logoShine 3s linear infinite;
    }
    @keyframes logoShine { to { background-position: 200% center; } }
    .sub { color: #888; font-size: 14px; margin-bottom: 30px; }

    .timeline { position: relative; padding-left: 30px; }
    .timeline::before {
        content: '';
        position: absolute;
        left: 8px; top: 8px; bottom: 8px;
        width: 2px;
        background: linear-gradient(180deg, #ffb800, rgba(255,184,0,0.1));
    }
    .update {
        position: relative;
        padding: 22px 24px;
        background: rgba(255,200,0,0.06);
        border: 1px solid rgba(255,200,0,0.35);
        border-radius: 12px;
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateX(-20px);
        animation: slideIn 0.6s ease 0.15s forwards;
        box-shadow: 0 0 30px rgba(255,184,0,0.15);
    }
    @keyframes slideIn {
        to { opacity: 1; transform: translateX(0); }
    }
    .update:hover {
        background: rgba(255,200,0,0.1);
        border-color: rgba(255,200,0,0.6);
        box-shadow: 0 0 45px rgba(255,184,0,0.3);
    }
    .update::before {
        content: '';
        position: absolute;
        left: -30px; top: 26px;
        width: 14px; height: 14px;
        border-radius: 50%;
        background: linear-gradient(135deg, #ffe14d, #ffb800);
        box-shadow: 0 0 15px rgba(255,184,0,0.9);
        animation: dotPulse 2s ease-in-out infinite;
    }
    @keyframes dotPulse {
        0%, 100% { box-shadow: 0 0 15px rgba(255,184,0,0.9); }
        50%      { box-shadow: 0 0 25px rgba(255,184,0,1); }
    }
    .update-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
        flex-wrap: wrap;
        gap: 8px;
    }
    .update-ver {
        color: #ffc800;
        font-weight: 800;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .update-date {
        color: #ffc800;
        font-size: 12px;
        background: rgba(255,200,0,0.12);
        border: 1px solid rgba(255,200,0,0.3);
        padding: 3px 12px;
        border-radius: 20px;
        font-weight: 600;
    }
    .update-list {
        list-style: none;
        color: #ddd;
        font-size: 15px;
        line-height: 1.8;
    }
    .update-list li::before {
        content: '▸';
        color: #ffb800;
        margin-right: 10px;
    }
    @media (max-width: 600px) {
        .container { padding: 30px 22px; }
        h1 { font-size: 24px; }
        .update-ver { font-size: 16px; }
        .update-list { font-size: 14px; }
    }
</style>
</head>
<body>
<div class="bg-glow"></div>
<div class="container">
    <a href="index.php" class="back">← Назад на главную</a>
    <h1>Обновления</h1>
    <p class="sub">История изменений на сервере <?= htmlspecialchars($siteName) ?></p>

    <div class="timeline">
        <div class="update">
            <div class="update-head">
                <div class="update-ver">Открытие сервера</div>
                <div class="update-date"><?= date('d.m.Y') ?></div>
            </div>
            <ul class="update-list">
                <li>Официальное открытие <?= htmlspecialchars($siteName) ?></li>
                <li>Запуск сервера на базе SAMP (карта CRMP)</li>
                <li>Открыт сайт и Telegram-канал проекта</li>
                <li>Доступен лаунчер с автообновлением</li>
                <li>Стартовый набор для новых игроков</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>