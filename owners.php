<?php $siteName = "Лимоновка РП"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Владельцы — <?= htmlspecialchars($siteName) ?></title>
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

    .owners {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }
    .owner {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 20px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 14px;
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 0.5s ease forwards;
    }
    .owner:nth-child(1) { animation-delay: 0.15s; }
    .owner:nth-child(2) { animation-delay: 0.25s; }
    .owner:nth-child(3) { animation-delay: 0.35s; }
    .owner:nth-child(4) { animation-delay: 0.45s; }
    @keyframes fadeUp {
        to { opacity: 1; transform: translateY(0); }
    }
    .owner:hover {
        background: rgba(255,200,0,0.08);
        border-color: rgba(255,200,0,0.5);
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(255,200,0,0.2);
    }
    .avatar {
        width: 55px; height: 55px;
        border-radius: 50%;
        background: linear-gradient(135deg, #ffe14d, #ffb800);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #1a1a1a;
        font-weight: 900;
        font-size: 22px;
        flex-shrink: 0;
        box-shadow: 0 0 20px rgba(255,184,0,0.4);
    }
    .owner-info h3 {
        color: #ffc800;
        font-size: 16px;
        margin-bottom: 4px;
    }
    .owner-info p {
        color: #aaa;
        font-size: 13px;
    }
    @media (max-width: 600px) {
        .container { padding: 30px 22px; }
        h1 { font-size: 24px; }
        .owners { grid-template-columns: 1fr; }
    }
</style>
</head>
<body>
<div class="bg-glow"></div>
<div class="container">
    <a href="index.php" class="back">← Назад на главную</a>
    <h1>Владельцы проекта</h1>
    <p class="sub">Команда, которая развивает <?= htmlspecialchars($siteName) ?></p>

    <div class="owners">
        <div class="owner">
            <div class="avatar">G</div>
            <div class="owner-info">
                <h3>Georgy_Sokolkin</h3>
                <p>Основатель проекта</p>
            </div>
        </div>
        <div class="owner">
            <div class="avatar">A</div>
            <div class="owner-info">
                <h3>Artem_Sokolkin</h3>
                <p>Сооснователь</p>
            </div>
        </div>
        <div class="owner">
            <div class="avatar">S</div>
            <div class="owner-info">
                <h3>Sanya_Vorobe</h3>
                <p>Сооснователь</p>
            </div>
        </div>
        <div class="owner">
            <div class="avatar">G</div>
            <div class="owner-info">
                <h3>Georgy_Sokolkin</h3>
                <p>Технический администратор</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>