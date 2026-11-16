<?php
// Tests the validation functions only. It never touches the database.
require_once __DIR__ . '/../includes/validation.php';

$valid = ['card_name' => 'Starbucks', 'card_type' => 'Consumer', 'card_value' => '25.00', 'points_required' => '2500'];

// [test name, input, should validation pass?]
$tests = [
    ['Valid Gift Card data',          $valid,                                          true],
    ['Blank Card Name',               array_merge($valid, ['card_name' => '   ']),     false],
    ['Altered/invalid Card Type',     array_merge($valid, ['card_type' => 'Hacked']),  false],
    ['Card Value of zero',            array_merge($valid, ['card_value' => '0']),      false],
    ['Negative Card Value',           array_merge($valid, ['card_value' => '-5']),     false],
    ['Points Required is not whole',  array_merge($valid, ['points_required' => '1.5']), false],
    ['Points Required is negative',   array_merge($valid, ['points_required' => '-10']), false],
];
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Validation Tests</title></head>
<body>
  <h1>Validation Tests</h1>
  <ul>
<?php foreach ($tests as [$name, $input, $shouldPass]): ?>
<?php $passed = (count(validate_card($input)) === 0) === $shouldPass; ?>
    <li><strong><?= $passed ? 'PASS' : 'FAIL' ?></strong>: <?= htmlspecialchars($name) ?></li>
<?php endforeach; ?>
  </ul>
</body>
</html>