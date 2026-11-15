-- Part 2: Insert five ACCOUNT records
INSERT OR ignore INTO ACCOUNT (userId, accountType, points)
VALUES (1,'USER', 5000);
INSERT OR ignore INTO ACCOUNT (userId, accountType, points)
VALUES (2,'BUSINESS', 500000);
INSERT OR ignore INTO ACCOUNT (userId, accountType, points)
VALUES (3,'USER', 12500);
INSERT OR ignore INTO ACCOUNT (userId, accountType, points)
VALUES (4,'USER', 125);
INSERT OR ignore INTO ACCOUNT (userId, accountType, points)
VALUES (5,'USER', 30000);

-- Part 3: Insert 20 GIFTCARD records
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (1, 'Bronze', 'Consumer',1000,2000);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (2, 'Silver', 'Consumer',2500,5000);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (3, 'Gold', 'Consumer',3750,7500);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (4, 'Diamond', 'Consumer',5000,10000);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (5, 'Platinum', 'Consumer',10000,20000);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (6, 'Bronze 2', 'Business',1125,2250);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (7, 'Bronze 3', 'Business',1250,2500);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (8, 'Bronze 4', 'Business',1375,2750);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (9, 'Bronze 5', 'Business',1500,2999);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (10, 'Silver 2', 'Business',2625,5250);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (11, 'Silver 3', 'Business',2750,5500);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (12, 'Diamond 2', 'Business',5625,10250);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (13, 'Diamond Plus', 'All',5500,10999);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (14, 'Platinum Plus', 'All',10250,20500);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (15, 'Platinum Premium', 'All',10500,20999);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (16, 'Frequent Flier', 'All',20000,30000);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (17, 'Diamond 3', 'Business',5250,10500);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (18, 'Frequent Flier Premium', 'Business',30000,50000);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (19, 'Frequent Flier Basic', 'All',18000,25000);
INSERT OR ignore INTO GIFTCARD
  (cardId, cardName, cardType, cardValue, points)
VALUES
  (20, 'Platinum 2', 'Business',10125,20250);