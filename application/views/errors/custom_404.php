<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>404 - Page Not Found</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #667eea, #764ba2);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      text-align: center;
    }

    #animation {
      width: 300px;
      height: 300px;
    }

    .error-code {
      font-size: 100px;
      margin: 0;
    }

    .message {
      font-size: 24px;
      margin: 10px 0 30px;
    }

    a {
      text-decoration: none;
      color: #fff;
      background: rgba(255, 255, 255, 0.2);
      padding: 12px 25px;
      border-radius: 8px;
      font-size: 16px;
      transition: 0.3s;
    }

    a:hover {
      background: rgba(255, 255, 255, 0.4);
    }
  </style>
</head>
<body>

  <div id="animation"></div>
  <h1 class="error-code">404</h1>
  <p class="message">Sorry! The page you’re looking for doesn’t exist.</p>
  <a href="<?= base_url() ?>">Go Back Home</a>

  <script>
    lottie.loadAnimation({
      container: document.getElementById('animation'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: '<?= base_url(); ?>assets_landing_page/img/Animation - 1750938980753.json'
    });
  </script>

</body>
</html>
