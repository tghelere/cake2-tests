-- Primeiro, criamos nossa tabela de posts
CREATE TABLE posts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    body TEXT,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

-- Agora inserimos alguns posts para testar
INSERT INTO posts (title, body, created)
    VALUES ('The title', 'This is the post body.', NOW());
INSERT INTO posts (title, body, created)
    VALUES ('A title once again', 'And the post body follows.', NOW());
INSERT INTO posts (title, body, created)
    VALUES ('Title strikes back', 'This is really exciting! Not.', NOW());