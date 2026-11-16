# AirAsia Rewards: Gift Card Management (HW3)

<!-- One or two sentences: what this app does and which HW3 features it covers. -->
A PHP and SQLite application for managing AirAsia gift cards (view, add, update, delete). Login, authorization, customers, and redemption are planned for HW4.

## Technologies
- PHP (run with the built-in server in GitHub Codespaces)
- SQLite with PDO (prepared statements)
- HTML and CSS with shared PHP templates

## Setup and Run
```bash
# 1. (Optional) Rebuild the database from the SQL scripts
rm -f database/rewards.db
sqlite3 database/rewards.db < database/schema.sql
sqlite3 database/rewards.db < database/seed.sql

# 2. Start the server from the project root
php -S 0.0.0.0:8000
```
Open forwarded port 8000, then go to `/card-list.php`.

Validation tests: open `/tests/validation-tests.php` in the browser.

## Project Structure
<!-- Update this tree so it matches your final repo. Remove files that do not exist. -->
```
card-list.php  card-details.php  card-add.php  card-update.php  card-delete.php
includes/   header.php  nav.php  footer.php  db.php  validation.php
database/   schema.sql  seed.sql  rewards.db
tests/      validation-tests.php
css/        styles.css
images/
README.md  test-report.md  ai-use.txt
```

## Database
<!-- Briefly list the two tables and their columns, matching the requirements document. -->
- **ACCOUNT**: accountId, userId, accountType, points
- **GIFTCARD**: cardId, cardName, cardType, cardValue, points
- Seed data: ___ ACCOUNT records and ___ GIFTCARD records.

## Use Case Traceability

| Use case | PHP page or pages | Database table | Test evidence |
| -------- | ----------------- | -------------- | ------------- |
| View a List of Gift Cards | card-list.php | GIFTCARD | Navigated to the page card-list.php in browser: https://fictional-journey-ggr569vqx4j3p9q9-8080.app.github.dev/card-list.php. See images folder for verification. |
| View Details of One Gift Card | card-details.php | GIFTCARD | Details page for ID 21 with all five fields after adding a card as seen below. See images folder for verification.|
| Add a Gift Card | card-add.php | GIFTCARD | The new card appearing in the list as "Yes Very Cool". See images folder for verification. |
| Update a Gift Card | card-update.php | GIFTCARD | Name changed from “Yes Very Cool” to “Yes Very Cool!!!!” on the details page. See images folder for verification. |
| Delete a Gift Card | card-delete.php | GIFTCARD | Confirmation page naming ID 21, "Yes Very Cool, then the list without it. See images folder for verification. |

## Known Limitations
This application is for local classroom use. It has no login, authorization, or CSRF protection yet (HW4).
