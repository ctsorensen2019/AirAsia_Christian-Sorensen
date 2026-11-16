<?php
$pageTitle = 'Add Gift Card';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/validation.php';

$errors = [];
$old = ['card_name' => '', 'card_type' => '', 'card_value' => '', 'points_required' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($old as $field => $blank) {
        $old[$field] = trim((string)($_POST[$field] ?? ''));
    }
    $errors = validate_card($old);

    if (!$errors) {
        $stmt = $pdo->prepare('INSERT INTO GIFTCARD (cardName, cardType, cardValue, points) VALUES (?, ?, ?, ?)');
        $stmt->execute([$old['card_name'], $old['card_type'], (float)$old['card_value'], (int)$old['points_required']]);
        header('Location: card-list.php');
        exit;
    }
}

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>
  <main>
    <a class="back-link" href="card-list.php">&larr; Back</a>

    <section class="panel form-narrow">
      <h2>Add Gift Card</h2>

<?php if ($errors): ?>
      <ul class="error-summary">
<?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
<?php endforeach; ?>
      </ul>
<?php endif; ?>

      <form action="card-add.php" method="post">
        <div class="form-group">
          <label for="card-name">Card Name</label>
          <input type="text" id="card-name" name="card_name" value="<?= htmlspecialchars($old['card_name']) ?>" maxlength="100" required>
        </div>

        <div class="form-group">
          <label for="card-type">Card Type</label>
          <select id="card-type" name="card_type" required>
            <option value="" disabled <?= $old['card_type'] === '' ? 'selected' : '' ?>>-- Select type --</option>
<?php foreach (CARD_TYPES as $type): ?>
            <option value="<?= htmlspecialchars($type) ?>" <?= $old['card_type'] === $type ? 'selected' : '' ?>><?= htmlspecialchars($type) ?></option>
<?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="card-value">Card Value</label>
          <input type="number" id="card-value" name="card_value" value="<?= htmlspecialchars($old['card_value']) ?>" min="0.01" step="0.01" required>
        </div>

        <div class="form-group">
          <label for="points-required">Points Required</label>
          <input type="number" id="points-required" name="points_required" value="<?= htmlspecialchars($old['points_required']) ?>" min="1" step="1" required>
        </div>

        <div class="actions">
          <a class="btn btn-secondary" href="card-list.php">Cancel</a>
          <button type="submit" class="btn">Submit</button>
        </div>
      </form>
    </section>
  </main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>