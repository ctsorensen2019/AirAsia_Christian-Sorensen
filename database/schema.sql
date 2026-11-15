-- Part 1: Create tables
CREATE TABLE if not exists ACCOUNT (
  accountId INTEGER PRIMARY KEY,
  userId INTEGER NOT NULL,
  accountType VARCHAR NOT NULL,
  points INTEGER NOT NULL
);

CREATE TABLE if not exists GIFTCARD (
  cardId INTEGER PRIMARY KEY,
  cardName VARCHAR NOT NULL,
  cardType VARCHAR NOT NULL,
  cardValue FLOAT NOT NULL,
  points INTEGER NOT NULL
);
/*
-- Part 2: Insert students and tutoring requests
INSERT OR ignore INTO students (student_name, student_email)
VALUES ('Jordan Lee', 'jordan.lee@example.edu');
INSERT OR ignore INTO students (student_name, student_email)
VALUES ('Avery Patel', 'avery.patel@example.edu');


INSERT OR ignore INTO tutoring_requests
  (student_id, course, topic, preferred_date, preferred_time)
VALUES
  (1, 'IS 6465', 'FORMS', '2026-11-10', '14:00');

INSERT OR ignore INTO tutoring_requests
  (student_id, course, topic, preferred_date, preferred_time)
VALUES
  (1, 'IS 6465', 'SQL SELECT', '2026-11-21', '14:00');

INSERT OR ignore INTO tutoring_requests
  (student_id, course, topic, preferred_date, preferred_time)
VALUES
  (2, 'IS 6465', 'SQLite CRUD', '2026-11-15', '14:00');


-- Part 3: Read data

select * from students;
select * from tutoring_requests;

select * from tutoring_requests WHERE status = 'OPEN';
select * from tutoring_requests where request_id=1;

SELECT
  r.request_id,
  s.student_name,
  s.student_email,
  r.course, r.topic,
  r.preferred_date, r.preferred_time, r.status
FROM tutoring_requests AS r
JOIN students AS s ON r.student_id = s.student_id
ORDER BY r.preferred_date;


-- Part 4: Update 1 request
select * from tutoring_requests;

UPDATE tutoring_requests
SET topic = 'PHP arrays and forms - updated',
    preferred_date = '2026-10-12',
    preferred_time = '15:00'
WHERE request_id = 1;

select * from tutoring_requests;

UPDATE tutoring_requests
SET status = 'Cancelled'
WHERE request_id = 3;

select * from tutoring_requests;

-- Part 5: Delete 1 request
INSERT OR ignore INTO tutoring_requests
  (student_id, course, topic, preferred_date, preferred_time)
VALUES
  (2, 'IS 6465', 'Test Record', '2026-11-15', '14:00');

select * from tutoring_requests;


DELETE from tutoring_requests
WHERE request_id=4;

select * from tutoring_requests;
*/