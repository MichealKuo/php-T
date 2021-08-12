INSERT INTO
    `address_book`
(`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`)
VALUES
(NULL, '陳小華3', 'shin3@ggg.com', '0918123456', '1999-07-01', '台南市', '2021-07-28 04:13:15'),
(NULL, '陳小華4', 'shin4@ggg.com', '0918123456', '1999-07-01', '台南市', '2021-07-28 04:13:15'),
(NULL, '陳小華5', 'shin5@ggg.com', '0918123456', '1999-07-01', '台南市', '2021-07-28 04:13:15'),
(NULL, '陳小華6', 'shin6@ggg.com', '0918123456', '1999-07-01', '台南市', '2021-07-28 04:13:15');


UPDATE `address_book` SET `mobile` = '0918-123-777' WHERE `address_book`.`sid` = 7;

-- 註解

UPDATE `address_book` SET `mobile` = '0918-123-777';

UPDATE `address_book` SET
      `email` = 'shin666@ggg.com',
      `birthday` = '1998-07-01'
WHERE `address_book`.`sid` = 7;

DELETE FROM `address_book` WHERE `address_book`.`sid` = 5;

CREATE USER 'shin2'@'localhost'
IDENTIFIED VIA mysql_native_password USING '***';
GRANT ALL PRIVILEGES ON *.* TO 'shin2'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

-- 排序: ASC 升冪， DESC 降冪
SELECT * FROM `address_book` ORDER BY `birthday` DESC, sid ASC;
