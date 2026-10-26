<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Gift Card | AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>AirAsia Rewards Redemption System</h1>
  </header>
  <nav>
    <a href="card-list.php">Back</a>
  </nav>
  <main>
    <section class="panel">
      <h2>Add Gift Card</h2>
      <form action="card-list.php" method="post">
        <div class="field">
          <label for="card_name">Card Name</label>
          <input type="text" id="card_name" name="card_name" placeholder="Enter card name" required>
        </div>
        <div class="field">
          <label for="card_type">Card Type</label>
          <select id="card_type" name="card_type" required>
            <option value="" selected disabled>Select type</option>
            <option value="Retail">Retail</option>
            <option value="Dining">Dining</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Travel">Travel</option>
          </select>
        </div>
        <div class="field">
          <label for="card_value">Card Value ($)</label>
          <input type="number" id="card_value" name="card_value" min="0" step="0.01" placeholder="Enter card value" required>
        </div>
        <div class="field">
          <label for="points_required">Points Required</label>
          <input type="number" id="points_required" name="points_required" min="0" step="1" placeholder="Enter points required" required>
        </div>
        <div class="actions">
          <a class="button secondary" href="card-list.php">Cancel</a>
          <button type="submit">Submit</button>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
