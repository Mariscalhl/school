DROP TABLE IF EXISTS events CASCADE;

CREATE TABLE events (
    events_id VARCHAR(50) PRIMARY KEY ,
    date date,
    event_name VARCHAR(50),
    location VARCHAR(50),
    description VARCHAR(100),
    time varchar(8)

);
INSERT INTO `schooldb`.`events` (`events_id`, `date`, `event_name`, `location`, `description`, `time`) VALUES ('1', '2019/11/25', 'Long Night against procastination', 'SSB204-Durham College', 'Learn how to deal with procastination.', '8:00PM');
INSERT INTO `schooldb`.`events` (`events_id`, `date`, `event_name`, `location`, `description`, `time`) VALUES ('2', '2019/12/15', 'Christmas Market', 'Toronto', 'Experience christams wonderland.', '5:00PM');
INSERT INTO `schooldb`.`events` (`events_id`, `date`, `event_name`, `location`, `description`, `time`) VALUES ('3', '2019/10/03', 'Orhanization Workshop', 'SSB204-DC', 'Help organize your schedules and assignments.', '10.00AM');
