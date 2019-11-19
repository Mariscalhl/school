DROP TABLE IF EXISTS grades CASCADE;

CREATE TABLE grades (
    student_id VARCHAR(50) NOT NULL REFERENCES students(student_id),
    course_id VARCHAR(50) NOT NULL REFERENCES courses(course_id),
    grade NUMERIC NOT NULL,
    PRIMARY KEY (student_id, course_id)
);

INSERT INTO grades (student_id, course_id, grade)

VALUES 
	('S001', 'C001', '90'),
	('S001', 'C002', '63'),
	('S001', 'C003', '51'),
	('S001', 'C004', '67'),
	('S001', 'C005', '61'),
	('S001', 'C006', '40'),
	('S001', 'C007', '81'),
	('S001', 'C008', '90'),
	('S001', 'C009', '80'),
	('S002', 'C010', '63'),
	('S002', 'C011', '59'),
	('S002', 'C012', '42'),
	('S002', 'C013', '67'),
	('S002', 'C014', '98'),
	('S002', 'C015', '59'),
	('S002', 'C016', '48'),
	('S002', 'C017', '67'),
	('S002', 'C018', '92'),
	('S002', 'C019', '60'),
	('S002', 'C020', '54'),
	('S002', 'C021', '68'),
	('S002', 'C022', '72'),
	('S002', 'C023', '98'),
	('S002', 'C024', '100'),
	('S002', 'C025', '56'),
	('S002', 'C026', '55'),
	('S002', 'C027', '49'),
	('S003', 'C028', '63'),
	('S003', 'C029', '65'),
	('S003', 'C030', '86'),
	('S003', 'C031', '79'),
	('S003', 'C032', '97'),
	('S003', 'C033', '100'),
	('S003', 'C034', '68'),
	('S003', 'C035', '69'),
	('S003', 'C036', '98'),
	('S003', 'C037', '74'),
	('S003', 'C038', '73'),
	('S003', 'C039', '91'),
	('S004', 'C040', '68'),
	('S004', 'C041', '92'),
	('S004', 'C042', '65'),
	('S004', 'C043', '90'),
	('S004', 'C044', '94'),
	('S004', 'C045', '100'),
	('S004', 'C046', '65'),
	('S004', 'C047', '59'),
	('S004', 'C048', '60'),
	('S004', 'C049', '50'),
	('S004', 'C050', '49'),
	('S004', 'C051', '90'),
	('S005', 'C052', '89'),
	('S005', 'C053', '99'),
	('S005', 'C054', '100'),
	('S005', 'C055', '100'),
	('S005', 'C056', '100'),
	('S005', 'C057', '67'),
	('S005', 'C058', '74'),
	('S005', 'C059', '67'),
	('S005', 'C060', '69'),
	('S005', 'C061', '90'),
	('S005', 'C062', '80'),
	('S005', 'C063', '82'),
	('S005', 'C064', '82'),
	('S005', 'C065', '90'),
	('S005', 'C066', '92'),
	('S005', 'C067', '95'),
	('S005', 'C068', '64'),
	('S005', 'C069', '63'),
	('S006', 'C001', '90'),
	('S006', 'C002', '63'),
	('S006', 'C003', '51'),
	('S006', 'C004', '67'),
	('S006', 'C005', '61'),
	('S006', 'C006', '40'),
	('S006', 'C007', '81'),
	('S006', 'C008', '90'),
	('S006', 'C009', '80'),
	('S007', 'C010', '63'),
	('S007', 'C011', '59'),
	('S007', 'C012', '42'),
	('S007', 'C013', '67'),
	('S007', 'C014', '98'),
	('S007', 'C015', '59'),
	('S007', 'C016', '48'),
	('S007', 'C017', '67'),
	('S007', 'C018', '92'),
	('S007', 'C019', '60'),
	('S007', 'C020', '54'),
	('S007', 'C021', '65'),
	('S007', 'C022', '64'),
	('S007', 'C023', '78'),
	('S007', 'C024', '90'),
	('S007', 'C025', '99'),
	('S007', 'C026', '100'),
	('S007', 'C027', '98'),
	('S008', 'C040', '56'),
	('S008', 'C041', '87'),
	('S008', 'C042', '80'),
	('S008', 'C043', '75'),
	('S008', 'C044', '65'),
	('S008', 'C045', '60'),
	('S008', 'C046', '82'),
	('S008', 'C047', '73'),
	('S008', 'C048', '80'),
	('S008', 'C049', '90'),
	('S008', 'C050', '100'),
	('S008', 'C051', '98'),
	('S009', 'C052', '68'),
	('S009', 'C053', '51'),
	('S009', 'C054', '48'),
	('S009', 'C055', '67'),
	('S009', 'C056', '83'),
	('S009', 'C057', '64'),
	('S009', 'C058', '54'),
	('S009', 'C059', '90'),
	('S009', 'C060', '78'),
	('S009', 'C061', '65'),
	('S009', 'C062', '94'),
	('S009', 'C063', '62'),
	('S009', 'C064', '90'),
	('S009', 'C065', '51'),
	('S009', 'C066', '62'),
	('S009', 'C067', '75'),
	('S009', 'C068', '90'),
	('S009', 'C069', '64'),
	('S010', 'C028', '82'),
	('S010', 'C029', '75'),
	('S010', 'C030', '80'),
	('S010', 'C031', '95'),
	('S010', 'C032', '64'),
	('S010', 'C033', '72'),
	('S010', 'C034', '61'),
	('S010', 'C035', '97'),
	('S010', 'C036', '59'),
	('S010', 'C037', '62'),
	('S010', 'C038', '80'),
	('S010', 'C039', '100');
