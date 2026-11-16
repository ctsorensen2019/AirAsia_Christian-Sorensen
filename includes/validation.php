<?php
// Returns the ID as an int if it is a whole number >= 1, otherwise null.
function valid_id($value): ?int {
    $id = filter_var($value, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    return $id === false ? null : $id;
}

// Allowed Card Type values (must match the CHECK constraint in schema.sql).
const CARD_TYPES = ['Consumer', 'Business', 'All'];

// Each validator returns an error message, or '' when the value is OK.
function validate_card_name($name): string {
    $name = trim((string)$name);
    if ($name === '' || mb_strlen($name) > 100) {
        return 'Card Name is required (1-100 characters).';
    }
    return '';
}

function validate_card_type($type): string {
    return in_array($type, CARD_TYPES, true) ? '' : 'Choose a valid Card Type.';
}

function validate_card_value($value): string {
    if (!is_numeric($value) || (float)$value <= 0) {
        return 'Card Value must be a positive number.';
    }
    return '';
}

function validate_points($points): string {
    $p = filter_var($points, FILTER_VALIDATE_INT);
    if ($p === false || $p <= 0) {
        return 'Points Required must be a positive whole number.';
    }
    return '';
}

// Runs every validator on one form submission. Returns a list of error messages.
function validate_card(array $input): array {
    $errors = [];
    foreach ([
        validate_card_name($input['card_name'] ?? ''),
        validate_card_type($input['card_type'] ?? ''),
        validate_card_value($input['card_value'] ?? ''),
        validate_points($input['points_required'] ?? ''),
    ] as $message) {
        if ($message !== '') {
            $errors[] = $message;
        }
    }
    return $errors;
}