create table ads 
(
	userid varchar(10),
	company_name varchar(40),
	location_from varchar(30),
	location_to varchar(30),
	frequency varchar(100),
	car_model varchar(30),
	registration_number varchar(30),
	number_of_seats int,
	seats_available int,
	start_time timestamp,
	return_time timestamp,
	one_two_way int,
	description varchar(100),
	ad_status varchar(10)
);