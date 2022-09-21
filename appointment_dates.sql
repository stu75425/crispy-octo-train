use appointments;
create table appointment_dates (
date VARCHAR(255) NOT NULL
);

INSERT into appointment_dates (date) 
VALUES ('Monday 26th');

INSERT into appointment_dates (date)
VALUES ('Tuesday 27th'), 
('Wednesday 28th'), 
('Thursday 29th'), 
('Friday 30th'), 
('Monday 3rd'), 
('Tuesday 4th'), 
('Wednesday 5th'), 
('Thursday 6th'), 
('Friday 7th'), 
('Monday 10th');
