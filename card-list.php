<?php
$pageTitle = 'Gift Cards';
require_once __DIR__ . '/includes/db.php';
$cards = $pdo->query('SELECT cardId, cardName, points FROM GIFTCARD ORDER BY cardId')->fetchAll();

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>
  <main>
    <h2>Gift Cards</h2>

    <section class="card-grid" aria-label="Gift card list">
<?php foreach ($cards as $card): ?>
      <article class="card">
        <a href="card-details.php?card_id=<?= (int)$card['cardId'] ?>"><img src="images/gift-card.png" alt="<?= htmlspecialchars($card['cardName']) ?> gift card"></a>
        <h3><a href="card-details.php?card_id=<?= (int)$card['cardId'] ?>"><?= htmlspecialchars($card['cardName']) ?></a></h3>
        <p class="points"><?= number_format((int)$card['points']) ?> points</p>
      </article>
<?php endforeach; ?>
    </section>
  </main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>