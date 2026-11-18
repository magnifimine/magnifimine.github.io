<?php $siteName = "Лимоновка РП"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Правила — <?= htmlspecialchars($siteName) ?></title>
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

    .section-title {
        color: #ffc800;
        font-size: 18px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 30px 0 15px;
        padding-bottom: 8px;
        border-bottom: 1px solid rgba(255,200,0,0.25);
    }
    .rule {
        padding: 16px 20px;
        background: rgba(255,255,255,0.03);
        border-left: 3px solid #ffb800;
        border-radius: 10px;
        margin-bottom: 12px;
        transition: all 0.25s;
        opacity: 0;
        transform: translateX(-20px);
        animation: slideIn 0.5s ease forwards;
    }
    .rule:hover {
        background: rgba(255,200,0,0.06);
        border-left-color: #ffe14d;
        transform: translateX(5px);
    }
    @keyframes slideIn {
        to { opacity: 1; transform: translateX(0); }
    }
    .rule-title {
        color: #ffc800;
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 5px;
    }
    .rule-text { color: #ccc; font-size: 14px; line-height: 1.5; }
    @media (max-width: 600px) {
        .container { padding: 30px 22px; }
        h1 { font-size: 24px; }
        .section-title { font-size: 15px; }
    }
</style>
</head>
<body>
<div class="bg-glow"></div>
<div class="container">
    <a href="index.php" class="back">← Назад на главную</a>
    <h1>Правила сервера</h1>
    <p class="sub"><?= htmlspecialchars($siteName) ?> — RolePlay на базе SAMP (карта CRMP). Обязательны для всех игроков.</p>

    <div class="section-title">Общие правила</div>

    <div class="rule">
        <div class="rule-title">1.1 Уважение</div>
        <div class="rule-text">Запрещены оскорбления, унижение, расизм, разжигание конфликтов в общем чате, PM и рации.</div>
    </div>
    <div class="rule">
        <div class="rule-title">1.2 NonRP-поведение</div>
        <div class="rule-text">Запрещено поведение, не соответствующее роли персонажа: прыжки с высоты без причины, крики, стрельба в мирных зонах без отыгровки.</div>
    </div>
    <div class="rule">
        <div class="rule-title">1.3 Обман администрации</div>
        <div class="rule-text">Ложные жалобы, обман на наказание, введение админов в заблуждение — строго наказываются.</div>
    </div>
    <div class="rule">
        <div class="rule-title">1.4 Реклама</div>
        <div class="rule-text">Запрещена реклама других серверов, проектов, соцсетей без согласования с администрацией.</div>
    </div>

    <div class="section-title">Игровой процесс (RP)</div>

    <div class="rule">
        <div class="rule-title">2.1 DeathMatch (DM)</div>
        <div class="rule-text">Запрещено убийство игроков без RP-причины и отыгровки.</div>
    </div>
    <div class="rule">
        <div class="rule-title">2.2 DriveBy (DB)</div>
        <div class="rule-text">Запрещена стрельба из машины по игрокам без RP-причины.</div>
    </div>
    <div class="rule">
        <div class="rule-title">2.3 RevengeKill (RK)</div>
        <div class="rule-text">Запрещено возвращаться на место смерти и мстить в течение 15 минут.</div>
    </div>
    <div class="rule">
        <div class="rule-title">2.4 CarRam / CarSurf</div>
        <div class="rule-text">Запрещено давить игроков машиной без причины и кататься на крыше авто.</div>
    </div>
    <div class="rule">
        <div class="rule-title">2.5 MetaGaming (MG)</div>
        <div class="rule-text">Запрещено использовать внеигровую информацию (Discord, Telegram, OOC-чат) в IC-процессе.</div>
    </div>
    <div class="rule">
        <div class="rule-title">2.6 PowerGaming (PG)</div>
        <div class="rule-text">Запрещена отыгровка, не оставляющая другому игроку выбора (например: /me отрубил голову без шанса на реакцию).</div>
    </div>
    <div class="rule">
        <div class="rule-title">2.7 NonRP-выезд</div>
        <div class="rule-text">Запрещено ездить по встречной, по тротуарам, на красный свет без RP-причины.</div>
    </div>
    <div class="rule">
        <div class="rule-title">2.8 Багоюз</div>
        <div class="rule-text">Использование багов карты и скриптов для получения преимущества запрещено.</div>
    </div>

    <div class="section-title">Транспорт и имущество</div>

    <div class="rule">
        <div class="rule-title">3.1 Угон</div>
        <div class="rule-text">Угон транспорта разрешён только с RP-отыгровкой и при наличии соответствующей роли (например, бандит).</div>
    </div>
    <div class="rule">
        <div class="rule-title">3.2 Парковка</div>
        <div class="rule-text">Запрещено блокировать спавны, госучреждения, выезды больниц и полиции.</div>
    </div>
    <div class="rule">
        <div class="rule-title">3.3 Порча имущества</div>
        <div class="rule-text">Уничтожение чужого транспорта или имущества без RP-причины запрещено.</div>
    </div>

    <div class="section-title">Фракции и работа</div>

    <div class="rule">
        <div class="rule-title">4.1 NonRP во фракции</div>
        <div class="rule-text">Полиция, медики, банды и мафии обязаны соблюдать устав фракции и субординацию.</div>
    </div>
    <div class="rule">
        <div class="rule-title">4.2 Коп-байтинг</div>
        <div class="rule-text">Провокация полиции без RP-причины наказывается.</div>
    </div>
    <div class="rule">
        <div class="rule-title">4.3 NonRP-арест / NonRP-розыск</div>
        <div class="rule-text">Арест и розыск без доказательств и отыгровки запрещены.</div>
    </div>

    <div class="section-title">Голосовой чат и рация</div>

    <div class="rule">
        <div class="rule-title">5.1 Шум</div>
        <div class="rule-text">Запрещены крики, музыка, посторонние звуки в голосовом чате (если предусмотрен).</div>
    </div>
    <div class="rule">
        <div class="rule-title">5.2 Оскорбления в голосе</div>
        <div class="rule-text">Оскорбления в голосовом канале приравниваются к оскорблениям в чате.</div>
    </div>

    <div class="section-title">Донат и покупки</div>

    <div class="rule">
        <div class="rule-title">6.1 Возврат средств</div>
        <div class="rule-text">Донат является добровольной поддержкой проекта и не возвращается.</div>
    </div>
    <div class="rule">
        <div class="rule-title">6.2 Передача донат-вещей</div>
        <div class="rule-text">Передача донат-имущества другим игрокам допускается только по правилам проекта.</div>
    </div>

    <div class="section-title">Наказания</div>

    <div class="rule">
        <div class="rule-title">7.1 Виды наказаний</div>
        <div class="rule-text">Предупреждение, мут, кик, бан на срок, перманентный бан — на усмотрение администрации.</div>
    </div>
    <div class="rule">
        <div class="rule-title">7.2 Апелляция</div>
        <div class="rule-text">Обжаловать наказание можно в Telegram-канале проекта или в тикете.</div>
    </div>

    <div class="section-title">Законодательство</div>

    <div class="rule">
        <div class="rule-title">8.1 Законы РФ</div>
        <div class="rule-text">Запрещено всё, что нарушает действующее законодательство Российской Федерации.</div>
    </div>
</div>
</body>
</html>