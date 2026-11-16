<?php
$pageTitle = 'Update Gift Card';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/validation.php';

$cardId = valid_id($_GET['card_id'] ?? null);
$card = false;
$errors = [];

if ($cardId === null) {
    http_response_code(400);
} else {
    $stmt = $pdo->prepare('SELECT cardId, cardName, cardType, cardValue, points FROM GIFTCARD WHERE cardId = ?');
    $stmt->execute([$cardId]);
    $card = $stmt->fetch();
    if (!$card) {
        http_response_code(404);
    }
}

if ($card) {
    // Start with the saved values; replace them with the submitted ones on POST.
    $old = ['card_name' => $card['cardName'], 'card_type' => $card['cardType'],
            'card_value' => $card['cardValue'], 'points_required' => $card['points']];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($old as $field => $saved) {
            $old[$field] = trim((string)($_POST[$field] ?? ''));
        }
        $errors = validate_card($old);

        if (!$errors) {
            $stmt = $pdo->prepare('UPDATE GIFTCARD SET cardName = ?, cardType = ?, cardValue = ?, points = ? WHERE cardId = ?');
            $stmt->execute([$old['card_name'], $old['card_type'], (float)$old['card_value'], (int)$old['points_required'], $cardId]);
            header('Location: card-details.php?card_id=' . $cardId);
            exit;
        }
    }
}

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>
  <main>
<?php if ($card): ?>
    <a class="back-link" href="card-details.php?card_id=<?= (int)$cardId ?>">&larr; Back</a>

    <section class="panel form-narrow">
      <h2>Update Gift Card</h2>

<?php if ($errors): ?>
      <ul class="error-summary">
<?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
<?php endforeach; ?>
      </ul>
<?php endif; ?>

      <form action="card-update.php?card_id=<?= (int)$cardId ?>" method="post">
        <div class="form-group">
          <label for="card-id">Card ID</label>
          <input type="text" id="card-id" value="<?= (int)$cardId ?>" readonly>
        </div>

        <div class="form-group">
          <label for="card-name">Card Name</label>
          <input type="text" id="card-name" name="card_name" value="<?= htmlspecialchars($old['card_name']) ?>" maxlength="100" required>
        </div>

        <div class="form-group">
          <label for="card-type">Card Type</label>
          <select id="card-type" name="card_type" required>
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
          <a class="btn btn-secondary" href="card-details.php?card_id=<?= (int)$cardId ?>">Cancel</a>
          <button type="submit" class="btn">Update</button>
        </div>
      </form>
    </section>
<?php else: ?>
    <section class="panel">
      <h2>Gift card not found</h2>
      <p>That gift card ID is invalid or does not exist.</p>
      <a class="btn btn-secondary" href="card-list.php">Back to list</a>
    </section>
<?php endif; ?>
  </main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>