use monys_kitchen;

INSERT INTO users (username, password_hash, full_name, email, admin) VALUES ('admin', '@dm1n', 'Peter Vasilev', 'pepi.vasilev@gmail.com', 1);

INSERT INTO categories (cat_name, cat_description) VALUES ('Кексове', 'Вкусни домашни кексове по стари и авторски рецепти');
INSERT INTO categories (cat_name, cat_description) VALUES ('Торти', 'Красиви ръчно изработени торти за всеки повод');
INSERT INTO categories (cat_name, cat_description) VALUES ('Сладки', 'Прясно изпечени вкусни сладки');
INSERT INTO categories (cat_name, cat_description) VALUES ('Мъфини', 'Едни от най-вкусните сладкиши');
INSERT INTO categories (cat_name, cat_description) VALUES ('Други', 'Питки, пици и всякакви други сладки вкусотийки');

INSERT INTO forme (text) VALUE ('Някакъв текст, който ще излиза тук, ако направя кода да работи');