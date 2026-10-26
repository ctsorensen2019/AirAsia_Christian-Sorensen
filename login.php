<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | AirAsia Gift Cards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1><img src="./images/air-asia.png" alt="AirAsia Logo" style="height: 1.2em; width: auto;">AirAsia Gift Cards</h1>
  </header>

  <main>
    <section class="panel form-narrow">
      <h2>Login</h2>

      <!-- HTML-only for HW2: submitting simply goes to the card list (a successful login). -->
      <form action="card-list.php" method="get">
        <div class="form-group">
          <label for="username">Username/Email</label>
          <input type="text" id="username" name="username" placeholder="Enter username or email" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter password" required>
        </div>

        <button type="submit" class="btn">Login</button>
      </form>
    </section>
  </main>

  <footer>&copy; AirAsia Gift Card Administration</footer>
</body>
</html>
