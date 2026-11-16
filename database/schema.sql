-- Part 1: Create tables
CREATE TABLE if not exists ACCOUNT (
  accountId INTEGER PRIMARY KEY AUTOINCREMENT,
  userId INTEGER NOT NULL,
  accountType VARCHAR NOT NULL,
  points INTEGER NOT NULL
);

CREATE TABLE if not exists GIFTCARD (
  cardId INTEGER PRIMARY KEY AUTOINCREMENT,
  cardName VARCHAR NOT NULL,
  cardType  VARCHAR NOT NULL CHECK (cardType IN ('Consumer','Business','All')),
  cardValue REAL    NOT NULL CHECK (cardValue > 0),
  points    INTEGER NOT NULL CHECK (points > 0)
);