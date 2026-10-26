<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gift Card Details | AirAsia Gift Cards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1><img src="./images/air-asia.png" alt="AirAsia Logo" style="height: 1.2em; width: auto;"> AirAsia Gift Cards</h1>
  </header>

  <main>
    <section class="panel">
      <h2>Gift Card Details</h2>

      <div class="details">
        <img src="images/gift-card.png" alt="AirAsia gift card">

        <table>
          <tr><th scope="row">Card ID</th><td>1001</td></tr>
          <tr><th scope="row">Card Name</th><td>Card Name 1</td></tr>
          <tr><th scope="row">Card Type</th><td>Card type text</td></tr>
          <tr><th scope="row">Card Value</th><td>$50.00</td></tr>
          <tr><th scope="row">Points Required</th><td>10,000</td></tr>
        </table>
      </div>

      <div class="actions">
        <a class="btn" href="card-update.php">Update</a>
        <!-- Delete is a placeholder in HW2 (no backend yet); it returns to the list. -->
        <a class="btn btn-secondary" href="card-list.php">Delete</a>
        <a class="btn btn-secondary" href="card-list.php">Back to list</a>
      </div>
    </section>
  </main>

  <footer>&copy; AirAsia Gift Card Administration</footer>
</body>
</html>
