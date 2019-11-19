DROP TABLE IF EXISTS courses CASCADE;

CREATE TABLE courses (
    course_id VARCHAR(50) PRIMARY KEY,
    course_name VARCHAR(50) NOT NULL,
    teacher_id VARCHAR(50) NOT NULL REFERENCES teachers(teacher_id),
    program VARCHAR(50) NOT NULL REFERENCES programs(program_id),
    course_semester INTEGER,
    course_code VARCHAR(50)
);

INSERT INTO courses (course_id, course_name, teacher_id, program, course_semester, course_code)

VALUES
	/* Business Fundamentals */
	('C001', 'Accounting I', 'T001', 'Business Fundamentals', '1', 'ACCT1200'),
	('C002', 'Business Computer Applications', 'T002', 'Business Fundamentals', '1', 'COMP1209'),
	('C003', 'Human Resource Management', 'T003', 'Business Fundamentals', '1', 'HRM1200'),
	('C004', 'Marketing I', 'T004', 'Business Fundamentals', '1', 'MKTG1200'),
	('C005', 'Communications for Business', 'T005', 'Business Fundamentals', '2', 'COMM2204'),
	('C006', 'Macroeconomics', 'T006', 'Business Fundamentals', '2', 'ECON1200'),
	('C007', 'Business Mathematics', 'T001', 'Business Fundamentals', '2', 'MATH1202'),
	('C008', 'General Education', 'T002', 'Business Fundamentals', '2', 'GNED0000'),
	('C009', 'Business Computer Applications II', 'T003', 'Business Fundamentals', '2', 'COMP2209'),
	/* Animation - Digital Production */
	('C010', 'Intro to Animating', 'T004', 'Animation - Digital Production', '1', 'ANIM1301'),
	('C011', 'Drawing Anatomy', 'T005', 'Animation - Digital Production', '1', 'DRAW1311'),
	('C012', 'Intro to Design', 'T006', 'Animation - Digital Production', '1', 'PPDN1311'),
	('C013', '3D Animating Basics', 'T001', 'Animation - Digital Production', '2', 'ANIM2301'),
	('C014', '2D Animating Basics', 'T002', 'Animation - Digital Production', '2', 'ANIM2303'),
	('C015', 'Character Posing', 'T003', 'Animation - Digital Production', '2', 'ACCT1200'),
	('C016', '3D Animating', 'T004', 'Animation - Digital Production', '3', 'ANIM3300'),
	('C017', '2D Animating', 'T005', 'Animation - Digital Production', '3', 'ANIM3302'),
	('C018', 'Animating To Sound', 'T006', 'Animation - Digital Production', '3', 'ANIM3306'),
	('C019', '3D Animating II', 'T001', 'Animation - Digital Production', '4', 'ANIM4301'),
	('C020', '2D Animating II', 'T002', 'Animation - Digital Production', '4', 'ANIM4303'),
	('C021', 'Timing', 'T003', 'Animation - Digital Production', '4', 'ANIM4307'),
	('C022', 'Advanced 3D Animating', 'T004', 'Animation - Digital Production', '5', 'ANIM5300'),
	('C023', 'Advanced 2D Animating', 'T005', 'Animation - Digital Production', '5', 'ANIM5302'),
	('C024', 'Advanced Animation Studio', 'T006', 'Animation - Digital Production', '5', 'ANIM5304'),
	('C025', '3D Animating Production', 'T001', 'Animation - Digital Production', '6', 'ANIM6300'),
	('C026', '2D Animating Production', 'T002', 'Animation - Digital Production', '6', 'ANIM63-2'),
	('C027', 'Post Production', 'T003', 'Animation - Digital Production', '6', 'POST5300'),
	/* Computer Programming */
	('C028', 'Intro To Database', 'T004', 'Computer Programming', '1', 'DBAS1200'),
	('C029', 'Intro to Programming', 'T005', 'Computer Programming', '1', 'PROG1200'),
	('C030', 'Data Communications', 'T006', 'Computer Programming', '1', 'DCOM1200'),
	('C031', 'System Development', 'T001', 'Computer Programming', '2', 'SYDE2202'),
	('C032', 'Oop I', 'T002', 'Computer Programming', '2', 'OOP2200'),
	('C033', 'Net Development', 'T003', 'Computer Programming', '2', 'NETD2202'),
	('C034', 'IT Career Essentials', 'T004', 'Computer Programming', '3', 'ITCE3200'),
	('C035', 'System Development II', 'T005', 'Computer Programming', '3', 'SYDE3200'),
	('C036', 'Web Development', 'T006', 'Computer Programming', '3', 'WEBD3201'),
	('C037', 'Database Development', 'T001', 'Computer Programming', '4', 'DBAS5206'),
	('C038', 'Mainframe Development', 'T002', 'Computer Programming', '4', 'MAFD4202'),
	('C039', 'Oop III', 'T003', 'Computer Programming', '4', 'OOP4200'),
	/* Contemporary Web Design */
	('C040', 'Communications Foundations', 'T004', 'Contemporary Web Design', '1', 'COMM1806'),
	('C041', 'Web Design I', 'T005', 'Contemporary Web Design', '1', 'CWMD1200'),
	('C042', 'Web Technologies', 'T006', 'Contemporary Web Design', '1', 'WTCH1202'),
	('C043', 'Web Design II', 'T001', 'Contemporary Web Design', '2', 'CWMD2200'),
	('C044', 'Digital Illustration', 'T002', 'Contemporary Web Design', '2', 'CWMD2202'),
	('C045', 'Scripting For Design', 'T003', 'Contemporary Web Design', '2', 'CWMD2304'),
	('C046', 'Coding For The Web', 'T004', 'Contemporary Web Design', '3', 'CWMD3200'),
	('C047', 'Web Animation', 'T005', 'Contemporary Web Design', '3', 'CWMD3202'),
	('C048', 'Web Design III', 'T006', 'Contemporary Web Design', '3', 'CWMD3203'),
	('C049', 'Coding For The Web II', 'T001', 'Contemporary Web Design', '4', 'CWMD4200'),
	('C050', 'Web Design VI', 'T002', 'Contemporary Web Design', '4', 'CWMD4204'),
	('C051', 'Portfolio Development I', 'T003', 'Contemporary Web Design', '4', 'CWD4301'),
	/* Electromechanical Engineering Technology */
	('C052', 'Cad For Electrical I', 'T004', 'Electromechanical Engineering Technology', '1', 'CAD1134'),
	('C053', 'Digital Fundamentals', 'T005', 'Electromechanical Engineering Technology', '1', 'DGFN1131'),
	('C054', 'Electricity I', 'T006', 'BElectromechanical Engineering Technology', '1', 'ELEC1301'),
	('C055', 'Electronic Circuits I', 'T001', 'Electromechanical Engineering Technology', '2', 'CIRE1331'),
	('C056', 'Electricity II', 'T002', 'Electromechanical Engineering Technology', '2', 'ELEC1402'),
	('C057', 'Fluid Power', 'T003', 'Electromechanical Engineering Technology', '2', 'FLUD1311'),
	('C058', 'Electronic Circuits II', 'T004', 'Electromechanical Engineering Technology', '3', 'CIRE2401'),
	('C059', 'Calculus', 'T005', 'Electromechanical Engineering Technology', '3', 'MATH1301'),
	('C060', 'Fluid Power II', 'T006', 'Electromechanical Engineering Technology', '3', 'FLUD2401'),
	('C061', 'Electronic Circuits III', 'T001', 'Electromechanical Engineering Technology', '4', 'CIRE3201'),
	('C062', 'Industrial Controls', 'T002', 'Electromechanical Engineering Technology', '4', 'CONT3131'),
	('C063', 'Integrated Automation', 'T003', 'Electromechanical Engineering Technology', '4', 'CONT3141'),
	('C064', 'Manufacturing Sciences', 'T004', 'Electromechanical Engineering Technology', '5', 'MANF1311'),
	('C065', 'Automation System', 'T005', 'Electromechanical Engineering Technology', '5', 'AUTO1101'),
	('C066', 'Integrated Automation II', 'T006', 'Electromechanical Engineering Technology', '5', 'CONT4200'),
	('C067', 'Automation Project', 'T001', 'Electromechanical Engineering Technology', '6', 'AUTO2100'),
	('C068', 'Industrial Networking', 'T002', 'Electromechanical Engineering Technology', '6', 'INET6131'),
	('C069', 'Dynamics Of Machines', 'T003', 'Electromechanical Engineering Technology', '6', 'MACH3132');
