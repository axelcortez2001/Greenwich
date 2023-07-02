DELIMITER $$

CREATE
    /*[DEFINER = { user | CURRENT_USER }]*/
    TRIGGER `greenwich`.`audit_log_trigger` AFTER INSERT
    ON `greenwich`.`employee`
    FOR EACH ROW BEGIN
	INSERT INTO audit_log (ACTION, user_id, TIMESTAMP)
	VALUES ('create employee', NEW.emp_id, NOW());
    END$$

DELIMITER ;