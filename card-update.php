<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Gift Card | AirAsia Gift Cards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1><img src="./images/air-asia.png" alt="AirAsia Logo" style="height: 1.2em; width: auto;">AirAsia Gift Cards</h1>
  </header>

  <main>
    <a class="back-link" href="card-details.php">&larr; Back</a>

    <section class="panel form-narrow">
      <h2>Update Gift Card</h2>

      <!-- HTML-only for HW2: Update returns to the details page; no data is saved yet. -->
      <form action="card-list.php" method="get">
        <div class="form-group">
          <label for="card-id">Card ID</label>
          <!-- Card ID is read-only: changing it would cause errors in the backend. -->
          <input type="text" id="card-id" name="card_id" value="1001" readonly>
        </div>

        <div class="form-group">
          <label for="card-name">Card Name</label>
          <input type="text" id="card-name" name="card_name" value="Card Name 1" required>
        </div>

        <div class="form-group">
          <label for="card-type">Card Type</label>
          <select id="card-type" name="card_type" required>
            <option value="travel" selected>Card type text</option>
            <option value="food">Food</option>
            <option value="merchandise">Merchandise</option>
          </select>
        </div>

        <div class="form-group">
          <label for="card-value">Card Value</label>
          <input type="number" id="card-value" name="card_value" value="50.00" min="0" step="0.01" required>
        </div>

        <div class="form-group">
          <label for="points-required">Points Required</label>
          <input type="number" id="points-required" name="points_required" value="10000" min="0" step="1" required>
        </div>

        <div class="actions">
          <a class="btn btn-secondary" href="card-details.php">Cancel</a>
          <button type="submit" class="btn">Update</button>
        </div>
      </form>
    </section>
  </main>

  <footer>&copy; AirAsia Gift Card Administration</footer>
</body>
</html>
