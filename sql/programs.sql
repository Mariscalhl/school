DROP TABLE IF EXISTS programs CASCADE;

CREATE TABLE programs (
    program_id VARCHAR(50) PRIMARY KEY,
    program_name VARCHAR(50) NOT NULL,
    program_length INTEGER NOT NULL,
    program_description VARCHAR(256) NOT NULL,
    program_req1 VARCHAR(256),
    program_req2 VARCHAR(256),
    program_req3 VARCHAR(256),
    program_tuition_dom NUMERIC,
    program_tuition_int NUMERIC  
);

INSERT INTO programs (program_id, program_name, program_length, program_description, program_req1, program_req2, program_req3, program_tuition_dom, program_tuition_int)

VALUES
	('P001', 'Business Fundamentals', '2', 'Business Fundamentals is a one-year Ontario College Certificate program that will help you identify which area of business suits your talents and interests for your future career!', 'Ontario Secondary School Diploma', 'Grade 12 English', 'Grade 11 mathematics', '2722', '13322'),
	('P002', 'Animation - Digital Prouction', '6', 'Put your imagination to work in the exciting world of animation. You could be working on the latest animated TV series or feature film, animating a triple-A game or doing visual effects for a Hollywood blockbuster.', 'Ontario Secondary School Diploma', 'Grade 12 English', 'Portfolio of work', '2722', '13322'),
	('P003', 'Computer Programming', '4', 'With many millions or more lines of code in the world today, and many more yet to be written, this field is growing constantly. If using your critical thinking ability to solve problems puts a smile on your face then this field could be for you.', 'Ontario Secondary School Diploma', 'Grade 12 English', 'Grade 12 mathematics', '2722', '13322'),
	('P004', 'Contemporary Web Design', '4', 'Become a creative thinker in digital technologies, able to provide solutions requiring a web presence to communicate and/or entertain. Create a seamless interface between the message and the user, applying traditional design methods.', 'Ontario Secondary School Diploma', 'Grade 12 English', 'Grade 12 mathematics', '2722', '13322'),
	('P005', 'Electromechanical Engineering Technology', '6', 'Ranked #1 in Ontario for knowledge and skills, quality of learning experience, graduate satisfaction and graduation rate, this program blends electronics design and mechanical technologies with automation, instrumentation and control systems.', 'Ontario Secondary School Diploma', 'Grade 12 English', 'Grade 12 Mathematics for College Technology', '2722', '13322');

