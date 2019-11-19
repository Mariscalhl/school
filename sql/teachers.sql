DROP TABLE IF EXISTS teachers CASCADE;

CREATE TABLE teachers (
    banner_id VARCHAR(50) PRIMARY KEY REFERENCES users(banner_id),
    teacher_first_name VARCHAR(20) NOT NULL,
    teacher_last_name VARCHAR(20) NOT NULL,
    teacher_phone VARCHAR(12) NOT NULL
);

INSERT INTO `teachers` (`banner_id`, `teacher_first_name`, `teacher_last_name`, `teacher_phone`) VALUES ('T001', 'Ross', 'Geller', '156-456-7890');
INSERT INTO `teachers` (`banner_id`, `teacher_first_name`, `teacher_last_name`, `teacher_phone`) VALUES ('T002', 'Rachel', 'Greene', '147-258-3694');
INSERT INTO `teachers` (`banner_id`, `teacher_first_name`, `teacher_last_name`, `teacher_phone`) VALUES ('T003', 'Monica ', 'Geller', '123-456-7890');
INSERT INTO `teachers` (`banner_id`, `teacher_first_name`, `teacher_last_name`, `teacher_phone`) VALUES ('T004', 'Joey', 'Tribbiani', '458-751-3467');
INSERT INTO `teachers` (`banner_id`, `teacher_first_name`, `teacher_last_name`, `teacher_phone`) VALUES ('T005', 'Phoebe ', 'Buffay', '159-357-1793');
INSERT INTO `teachers` (`banner_id`, `teacher_first_name`, `teacher_last_name`, `teacher_phone`) VALUES ('T006', 'Chandler', 'Bing', '159-369-4521');
