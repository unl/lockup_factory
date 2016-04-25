ALTER TABLE lockups
ADD COLUMN `creative_status` varchar(255) DEFAULT 'awaiting_approval';

ALTER TABLE lockups 
ADD COLUMN `creative_feedback` text;
  
ALTER TABLE lockups
ADD COLUMN `communicator_feedback` text;

UPDATE lockups SET creative_status = 'approved', status = 'approved' WHERE status = 'ready_to_generate';
UPDATE lockups SET creative_status = 'generated' WHERE status = 'generated';
UPDATE lockups SET creative_status = 'awaiting_approval', status = 'approved' WHERE status = 'communicator_approved';
UPDATE lockups SET creative_status = 'approved', status = 'awaiting_approval' WHERE status = 'creative_approved';
UPDATE lockups SET creative_status = 'awaiting_approval' WHERE status = 'awaiting_approval';