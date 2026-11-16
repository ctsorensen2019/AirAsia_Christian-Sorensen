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
| View a List of Gift Cards | card-list.php | GIFTCARD | <!-- One sentence: how you tested it --> |
| View Details of One Gift Card | card-details.php | GIFTCARD | <!-- One sentence --> |
| Add a Gift Card | card-add.php | GIFTCARD | <!-- One sentence --> |
| Update a Gift Card | card-update.php | GIFTCARD | <!-- One sentence --> |
| Delete a Gift Card | card-delete.php | GIFTCARD | <!-- One sentence --> |

## Known Limitations
This application is for local classroom use. It has no login, authorization, or CSRF protection yet (HW4).
