DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS books;

CREATE TABLE authn
(
    login    VARCHAR(50) PRIMARY KEY,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE books
(
    id   INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200) UNIQUE NOT NULL
);

INSERT INTO authn(login, password)
VALUES ('vitalir', '/cTZ9CRkxRYuA') -- Password was encrypted by htpasswd by using CRYPTO; initial value=jecky228
;

INSERT INTO books(name)
VALUES ('Harry Potter and the Order of the Phoenix'),
       ('The Body Keeps the Score: Brain, Mind, and Body in the Healing of Trauma'),
       ('Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones'),
       ('The 48 Laws of Power')
;
