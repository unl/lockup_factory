ALTER TABLE lockup_templates ADD COLUMN `disabled` INT DEFAULT 0 NOT NULL;
UPDATE lockup_templates SET disabled = 1 where id = 21;

UPDATE lockup_templates_fields SET placeholder = "Organization Name", value = "ORGANIZATION NAME" where id = 1;
UPDATE lockup_templates_fields SET placeholder = "Acronym Second", value = "ACRONYM SECOND" where id = 6;
UPDATE lockup_templates_fields SET placeholder = "Organization Second Line", value = "ORGANIZATION SECOND LINE" where id = 10;
