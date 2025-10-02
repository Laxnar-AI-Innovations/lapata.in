<?php
    $endTime = strtotime("2025-09-13 21:00:00"); // YYYY-MM-DD HH:MM:SS
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>We'll Be Back Soon</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: linear-gradient(135deg, #e0f7fa, #ffffff);
      --text: #222;
      --highlight: #4e73df;
      --card-bg: rgba(255, 255, 255, 0.7);
      --card-border: rgba(0, 0, 0, 0.1);
      --glow: rgba(78, 115, 223, 0.2);
    }

    body.dark {
      --bg: radial-gradient(circle at top left, #111, #000);
      --text: #f5f5f5;
      --highlight: #00e0ff;
      --card-bg: rgba(255, 255, 255, 0.05);
      --card-border: rgba(0, 224, 255, 0.3);
      --glow: rgba(0, 224, 255, 0.3);
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: var(--bg);
      color: var(--text);
      text-align: center;
      overflow: hidden;
      transition: background 0.8s, color 0.8s;
    }

    .container {
      max-width: 600px;
      padding: 20px;
      position: relative;
      z-index: 2;
    }

    h1 {
      margin-top: 0;
      font-size: 3rem;
      margin-bottom: 10px;
      color: var(--highlight);
      text-shadow: 0 0 15px var(--glow);
      animation: fadeInDown 1s ease-in-out;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      animation: fadeIn 2s ease-in-out;
    }

    .countdown {
      display: flex;
      justify-content: center;
      gap: 20px;
      font-size: 1.5rem;
      margin-bottom: 30px;
    }

    .countdown div {
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      padding: 15px 25px;
      border-radius: 12px;
      backdrop-filter: blur(10px);
      box-shadow: 0 5px 25px var(--glow);
      color: var(--highlight);
      font-weight: 600;
      transition: all 0.6s;
    }

    footer {
      font-size: 0.9rem;
      opacity: 0.8;
      margin-top: 20px;
    }

    /* Animations */
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    /* Orbs */
    .orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      opacity: 0.5;
      animation: float 12s infinite ease-in-out;
      z-index: 1;
    }

    /* Light mode orbs */
    body.light .orb:nth-child(1) { width: 200px; height: 200px; top: 10%; left: 15%; background: #a5d8ff; }
    body.light .orb:nth-child(2) { width: 150px; height: 150px; bottom: 20%; right: 20%; background: #b2f2bb; }
    body.light .orb:nth-child(3) { width: 250px; height: 250px; top: 40%; right: 5%; background: #ffd6a5; }

    /* Dark mode orbs */
    body.dark .orb:nth-child(1) { width: 200px; height: 200px; top: 10%; left: 15%; background: #00e0ff; }
    body.dark .orb:nth-child(2) { width: 150px; height: 150px; bottom: 20%; right: 20%; background: #ff00ff; }
    body.dark .orb:nth-child(3) { width: 250px; height: 250px; top: 40%; right: 5%; background: #00ff99; }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-40px); }
    }

    /* Toggle button */
    .toggle-btn {
      position: fixed;
      top: 20px;
      right: 20px;
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      color: var(--highlight);
      font-size: 1rem;
      font-weight: 600;
      padding: 10px 16px;
      border-radius: 30px;
      cursor: pointer;
      backdrop-filter: blur(6px);
      box-shadow: 0 0 15px var(--glow);
      transition: all 0.5s;
      z-index: 3;
    }
    .toggle-btn:hover {
      transform: scale(1.05);
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 2.2rem;
      }
      p {
        font-size: 1rem;
        padding: 0 10px;
      }
      .countdown {
        flex-wrap: wrap;
        gap: 12px;
        font-size: 1.2rem;
      }
      .countdown div {
        flex: 1 1 40%;
        padding: 12px 18px;
        font-size: 1rem;
      }
      .toggle-btn {
        font-size: 0.9rem;
        padding: 8px 14px;
      }
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 1.8rem;
      }
      .countdown {
        gap: 10px;
        font-size: 1rem;
      }
      .countdown div {
        flex: 1 1 45%;
        padding: 10px 14px;
      }
      footer {
        font-size: 0.75rem;
      }
    }
  </style>
</head>
<body class="light">
  <div class="orb"></div>
  <div class="orb"></div>
  <div class="orb"></div>

  <button class="toggle-btn" id="toggleMode">🌙 Dark</button>

  <div class="container">
    <img src="<?= base_url(); ?>assets/images/image.webp" id="black" style="width:200px;display: none;margin-left: auto;margin-right: auto;">
    <img src="<?= base_url(); ?>assets/images/khoji.webp" id="white" style="width:200px;margin-left: auto;margin-right: auto;">
    <h1>🚧 Under Maintenance</h1>
    <p>We’re upgrading our system to serve you better.<br>We’ll be back shortly!</p>

    <div class="countdown" id="countdown">
      <div><span id="days">00</span><br>Days</div>
      <div><span id="hours">00</span><br>Hours</div>
      <div><span id="minutes">00</span><br>Minutes</div>
      <div><span id="seconds">00</span><br>Seconds</div>
    </div>

    <footer>Thank you for your patience ❤️</footer>
  </div>

  <script>
    const targetDate = <?= $endTime * 1000 ?>;

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      document.getElementById("countdown").innerHTML = "We are live again 🚀!";
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;
  }

  setInterval(updateCountdown, 1000);
  updateCountdown();

  // Mode toggle + logo swap
  const toggleBtn = document.getElementById("toggleMode");
  const body = document.body;
  const blackLogo = document.getElementById("black");
  const whiteLogo = document.getElementById("white");

  toggleBtn.addEventListener("click", () => {
    body.classList.toggle("dark");
    body.classList.toggle("light");

    if (body.classList.contains("dark")) {
      toggleBtn.textContent = "☀️ Light";
      blackLogo.style.display = "block";
      whiteLogo.style.display = "none";
    } else {
      toggleBtn.textContent = "🌙 Dark";
      blackLogo.style.display = "none";
      whiteLogo.style.display = "block";
    }
  });
</script>
</body>
</html>
