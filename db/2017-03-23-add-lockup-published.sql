ALTER TABLE lockups ADD COLUMN `published` tinyint(1) DEFAULT '1';
UPDATE lockups SET published = 1 WHERE status = "generated";