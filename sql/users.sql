DROP TABLE IF EXISTS users CASCADE;

CREATE TABLE users (
    user_id VARCHAR(50) PRIMARY KEY,
    user_password VARCHAR(32) NOT NULL,
    user_email VARCHAR(256) NOT NULL,
    user_type VARCHAR(1) NOT NULL
);

INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('T001', 'pswdT001', 'ross@fakemail.ca', 'T');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('T002', 'pswdT002', 'rachel@fakemail.ca', 'T');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('T003', 'pswdT003', 'monica@fakemail.ca', 'T');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('T004', 'pswdT004', 'joey@fakemail.ca', 'T');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('T005', 'pswdT005', 'phoebe@fakemail.ca', 'T');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('T006', 'pswdT006', 'chandler@fakemailca', 'T');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S001', 'pswdS001', 'lylie@fakemail.ca', 'S');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S002', 'pswdS002', 'john@fakemail.ca', 'S');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S003', 'pswdS003', 'joe@fakemail.ca', 'S');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S004', 'pswdS004', 'beck@fakemial.ca', 'S');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S005', 'pswdS005', 'peach@fakemail.ca', 'S');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S006', 'pswdS006', 'karen@fakemail.ca', 'S');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S007', 'pswdS007', 'roger@fakemail.ca', 'S');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S008', 'pswdS008', 'lynn@fakemail.ca', 'S');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S009', 'pswdS009', 'roger@fakemail.ca', 'S');
INSERT INTO `users` (`user_id`, `user_password`, `user_email`, `user_type`) VALUES ('S010', 'pswdS010', 'aanika@fakemail.ca', 'S');
