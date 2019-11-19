DROP TABLE IF EXISTS students CASCADE;

CREATE TABLE students (
    student_id VARCHAR(50) PRIMARY KEY REFERENCES users(banner_id),
    student_address VARCHAR(256),
    student_phone VARCHAR(12),
    student_cell VARCHAR(12),
    student_city VARCHAR(20),
    student_country VARCHAR(20),
    student_postal_code VARCHAR(6),
    student_province  VARCHAR(20),
    student_first_name VARCHAR(20) NOT NULL,
    student_last_name  VARCHAR(20) NOT NULL

);

INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S001', 'Simcoe street', '289-123-6932', 'Oshawa', 'Canada', 'L1T3RT', 'ON', 'Kylie', 'Smith');
INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S002', 'Simcoe street', '123-456-789', 'Oshawa', 'Canada', 'L1T3RT', 'ON', 'John', 'Doe');
INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S003', 'Beatrice', '647-896-3698', 'Oshawa', 'Canada', 'L7U9ED', 'ON', 'Joe', 'Goldberg');
INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S004', 'King', '789-147-7532', 'Oshawa', 'Canada', 'L9TY67', 'ON', 'Beck', 'Guinevere');
INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S005', 'Mason Drive', '159-789-3654', 'Ajax', 'Canada', 'L1W3RT', 'ON', 'Peach', 'Salinger');
INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S006', 'Brock Road', '784-589-8956', 'Bowmnville', 'Canada', 'B1T3RT', 'ON', 'Karen', 'Minty');
INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S007', 'Scougog drive', '159-789-4587', 'Scugog', 'Canada', 'L90T56', 'ON', 'Roger', 'Stevens');
INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S008', 'Main St.', '905-456-7892', 'Markham', 'Canada', 'M89KH4', 'ON', 'Lynn', 'Brooks');
INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S009', 'Fall Drive', '823-498-1987', 'Elgin', 'Canada', 'E47LGN', 'ON', 'Claudia', 'Ross');
INSERT INTO `students` (`student_id`, `student_address`, `student_phone`, `student_city`, `student_country`, `student_postal_code`, `student_province`, `student_first_name`, `student_last_name`) VALUES ('S010', 'Marine drive', '905+456+1547', 'Oshawa', 'Canada', 'L9MARN', 'ON', 'Aanika', 'Bill');
