<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gift Cards | AirAsia Gift Cards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>AirAsia Gift Cards</h1>
    <nav aria-label="Main navigation">
      <a href="card-list.php">Gift Cards</a>
      <a href="login.php">Log out</a>
    </nav>
  </header>

  <main>
    <h2>Gift Cards</h2>

    <div class="toolbar">
      <a class="btn" href="card-add.php">Add Gift Card</a>
      <!-- No Add Customer page is part of HW2, so this is a placeholder link. -->
      <a class="btn btn-secondary" href="#">Add Customer</a>
    </div>

    <section class="card-grid" aria-label="Gift card list">
      <article class="card">
        <img src="images/gift-card.png" alt="AirAsia gift card">
        <h3><a href="card-details.php">Card Name 1</a></h3>
        <p class="points">10,000 points</p>
        <a class="btn btn-secondary" href="card-details.php">View details</a>
      </article>

      <article class="card">
        <img src="images/gift-card.png" alt="AirAsia gift card">
        <h3><a href="card-details.php">Card Name 2</a></h3>
        <p class="points">25,000 points</p>
        <a class="btn btn-secondary" href="card-details.php">View details</a>
      </article>

      <article class="card">
        <img src="images/gift-card.png" alt="AirAsia gift card">
        <h3><a href="card-details.php">Card Name 3</a></h3>
        <p class="points">50,000 points</p>
        <a class="btn btn-secondary" href="card-details.php">View details</a>
      </article>
    </section>
  </main>

  <footer>&copy; AirAsia Gift Card Administration</footer>
</body>
</html>
