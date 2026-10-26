<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>AirAsia Rewards Redemption System</h1>
  </header>
  <main>
    <section class="panel login-box">
      <h2>Login</h2>
      <form action="card-list.php" method="post">
        <div class="field">
          <label for="username">Username / Email</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="field">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
      </form>
    </section>
  </main>
</body>
</html>
