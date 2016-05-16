ALTER TABLE lockups
ADD COLUMN `version` varchar(255) DEFAULT NULL;

UPDATE lockups SET version = '1.0' WHERE status = 'generated';