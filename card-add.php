<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Gift Card | AirAsia Gift Cards</title>
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
    <a class="back-link" href="card-list.php">&larr; Back</a>

    <section class="panel form-narrow">
      <h2>Add Gift Card</h2>

      <!-- HTML-only for HW2: Submit returns to the list; no data is saved yet. -->
      <form action="card-list.php" method="get">
        <div class="form-group">
          <label for="card-name">Card Name</label>
          <input type="text" id="card-name" name="card_name" placeholder="Insert Card Name" required>
        </div>

        <div class="form-group">
          <label for="card-type">Card Type</label>
          <select id="card-type" name="card_type" required>
            <option value="" selected disabled>-- Select type --</option>
            <option value="travel">Travel</option>
            <option value="food">Food</option>
            <option value="merchandise">Merchandise</option>
          </select>
        </div>

        <div class="form-group">
          <label for="card-value">Card Value</label>
          <input type="number" id="card-value" name="card_value" min="0" step="0.01" placeholder="Insert Card Value" required>
        </div>

        <div class="form-group">
          <label for="points-required">Points Required</label>
          <input type="number" id="points-required" name="points_required" min="0" step="1" placeholder="Insert Required Points" required>
        </div>

        <div class="actions">
          <a class="btn btn-secondary" href="card-list.php">Cancel</a>
          <button type="submit" class="btn">Submit</button>
        </div>
      </form>
    </section>
  </main>

  <footer>&copy; AirAsia Gift Card Administration</footer>
</body>
</html>
