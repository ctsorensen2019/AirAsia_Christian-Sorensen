# HW3 Test Report: AirAsia Gift Card Management

**Tester:** <!-- your name -->
**Date:** <!-- date -->
**Environment:** GitHub Codespaces, PHP built-in server (`php -S 0.0.0.0:8000`), SQLite database `database/rewards.db`

## Summary

| Test ID | Test | Status |
| ------- | ---- | ------ |
| T01 | Validation test harness |  |
| T02 | View Gift Card List |  |
| T03 | View Gift Card Details |  |
| T04 | Add Gift Card |  |
| T05 | Update Gift Card |  |
| T06 | Delete Gift Card |  |
| T07 | Invalid or altered input handling |  |
| T08 | Invalid Gift Card identifier handling |  |

---

## T01: Validation test harness
**Steps and input:**
1. Open `/tests/validation-tests.php`.
2. Review the PASS or FAIL result for each test (valid data, blank name, invalid type, zero or negative value, invalid points).
(can also do it by doing "php tests/validation-tests.php" in the Terminal.)

**Expected result:** Every test displays PASS. No database records are added, changed, or deleted.
**Actual result:** Every test displays PASS. No database records are added, changed, or deleted.
**Status:** Pass

## T02: View Gift Card List
**Steps and input:**
1. Open `/card-list.php`.

**Expected result:** Cards from the database are shown with image, card name, and points required. Each name or image links to its details page. A link to Add Gift Card is available.
**Actual result:** Cards from the database are shown with image, card name, and points required. Each name or image links to its details page. A link to Add Gift Card is available.
**Status:** Pass 

## T03: View Gift Card Details
**Steps and input:**
1. From the list, click a card (or open `/card-details.php?card_id=1`).

**Expected result:** The card's ID, name, type, value, and points are shown read-only, with links to Update, Delete, and Back to list.
**Actual result:** The card's ID, name, type, value, and points are shown read-only, with links to Update, Delete, and Back to list.
**Status:** Pass

## T04: Add Gift Card
**Steps and input:**
1. Open `/card-add.php`.
2. Enter: Card Name = ___, Card Type = ___, Card Value = ___, Points Required = ___.
3. Submit.

**Expected result:** The new card is saved and the user returns to the list, where the new card appears.
**Actual result:** The new card is saved and the user returns to the list, where the new card appears.
**Status:** Pass 

## T05: Update Gift Card
**Steps and input:**
1. Open `/card-update.php?card_id=___`.
2. Change: ___ from ___ to ___.
3. Submit.

**Expected result:** The form is prepopulated with the existing values. After submitting, the updated values are displayed.
**Actual result:** The form is prepopulated with the existing values. After submitting, the updated values are displayed.
**Status:** Pass

## T06: Delete Gift Card
**Steps and input:**
1. Open `/card-delete.php?card_id=___` (use a card you added for testing).
2. Confirm that the correct card is identified.
3. Click the confirm button (POST).

**Expected result:** The card is removed and the user returns to the list. Opening the delete page does not delete anything until confirmation.
**Actual result:** The card is removed and the user returns to the list. Opening the delete page does not delete anything until confirmation.
**Status:** Pass 

## T07: Invalid or altered input handling
**Steps and input:**
1. On the add form (or update form), submit invalid values. Examples: blank Card Name; altered Card Type (edit the dropdown value in browser dev tools); Card Value `0` or `-5`; Points Required `0`, `-1`, or `1.5`.
2. Record each input you tried.

**Expected result:** Each invalid submission is rejected with a helpful error message, and no record is added or changed.
**Actual result:**
**Status:** Pass / Fail

## T08: Invalid Gift Card identifier handling
**Steps and input:**
1. Open `/card-details.php?card_id=abc`, `?card_id=-1`, `?card_id=99999`, and with no `card_id`.
2. Repeat for `card-update.php` and `card-delete.php`.

**Expected result:** Each request shows a safe "not found or invalid" message. There are no PHP errors and no records are changed.
**Actual result:**
**Status:** Pass / Fail


