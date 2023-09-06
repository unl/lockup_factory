-- This will remove any instance of any pre-generated lockup

-- Reset all the lockups to pre generated state
UPDATE lockups
SET generating = 0, is_generated = 0, preview_h = null, preview_v = null, zip_url = null;

-- Remove all lockup files from the DB
DELETE FROM lockup_files;