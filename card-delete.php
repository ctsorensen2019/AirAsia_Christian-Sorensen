<?php
$pageTitle = 'Delete Gift Card';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/validation.php';

$cardId = valid_id($_GET['card_id'] ?? null);
$card = false;

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

// Delete only when the confirmation form was submitted with POST.
if ($card && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('DELETE FROM GIFTCARD WHERE cardId = ?');
    $stmt->execute([$cardId]);
    header('Location: card-list.php');
    exit;
}

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>
  <main>
    <section class="panel form-narrow">
<?php if ($card): ?>
      <h2>Delete Gift Card</h2>
      <p>Are you sure you want to delete this gift card?</p>
      <p><strong><?= htmlspecialchars($card['cardName']) ?></strong> (ID <?= (int)$card['cardId'] ?>, <?= htmlspecialchars($card['cardType']) ?>, $<?= number_format((float)$card['cardValue'], 2) ?>, <?= number_format((int)$card['points']) ?> points)</p>

      <form action="card-delete.php?card_id=<?= (int)$cardId ?>" method="post">
        <div class="actions">
          <a class="btn btn-secondary" href="card-details.php?card_id=<?= (int)$cardId ?>">Cancel</a>
          <button type="submit" class="btn">Yes, delete</button>
        </div>
      </form>
<?php else: ?>
      <h2>Gift card not found</h2>
      <p>That gift card ID is invalid or does not exist.</p>
      <a class="btn btn-secondary" href="card-list.php">Back to list</a>
<?php endif; ?>
    </section>
  </main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>