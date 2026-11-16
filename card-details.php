<?php
$pageTitle = 'Gift Card Details';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/validation.php';

$cardId = valid_id($_GET['card_id'] ?? null);
$card = null;

if ($cardId === null) {
    http_response_code(400);                       // not a valid ID
} else {
    $stmt = $pdo->prepare('SELECT cardId, cardName, cardType, cardValue, points FROM GIFTCARD WHERE cardId = ?');
    $stmt->execute([$cardId]);
    $card = $stmt->fetch();                        // false if no row
    if (!$card) {
        http_response_code(404);                   // valid ID, but no such card
    }
}

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>
  <main>
<?php if ($card): ?>
    <section class="panel">
      <h2>Gift Card Details</h2>

      <div class="details">
        <img src="images/gift-card.png" alt="<?= htmlspecialchars($card['cardName']) ?> gift card">

        <table>
          <tr><th scope="row">Card ID</th><td><?= (int)$card['cardId'] ?></td></tr>
          <tr><th scope="row">Card Name</th><td><?= htmlspecialchars($card['cardName']) ?></td></tr>
          <tr><th scope="row">Card Type</th><td><?= htmlspecialchars($card['cardType']) ?></td></tr>
          <tr><th scope="row">Card Value</th><td>$<?= number_format((float)$card['cardValue'], 2) ?></td></tr>
          <tr><th scope="row">Points Required</th><td><?= number_format((int)$card['points']) ?></td></tr>
        </table>
      </div>

      <div class="actions">
        <a class="btn" href="card-update.php?card_id=<?= (int)$card['cardId'] ?>">Update</a>
        <a class="btn btn-secondary" href="card-delete.php?card_id=<?= (int)$card['cardId'] ?>">Delete</a>
        <a class="btn btn-secondary" href="card-list.php">Back to list</a>
      </div>
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