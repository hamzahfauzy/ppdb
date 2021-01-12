ALTER TABLE `student_parents` ADD `work_instance_phone` VARCHAR(12) NOT NULL AFTER `work_position`;
ALTER TABLE `student_parents` CHANGE `work_position` `position` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `student_health` CHANGE `alergi_problem_description` `alergi_description` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE `student_parents` CHANGE `parent_type` `parent_type` VARCHAR(11) NOT NULL COMMENT 'Ayah, Ibu, Wali';