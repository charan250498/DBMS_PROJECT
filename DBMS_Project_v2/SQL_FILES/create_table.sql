create table EMPLOYEE(employee_id varchar(20), employee_name varchar(20), gender char(1), username varchar(20), password varchar(20),skill varchar(10));

create table PROJECT(project_id varchar(20), project_name varchar(30), objective varchar(50), description varchar(100), start_date date, end_date date, department_id varchar(20), project_manager varchar(20));

create table PROJECT_MEMBERS(project_id varchar(20), manager varchar(20), member1 varchar(20), member2 varchar(20), member3 varchar(20), member4 varchar(20), member5 varchar(20), member6 varchar(20));

create table MILESTONES(project_id varchar(20), task_id varchar(20), task_name varchar(30), person_in_charge varchar(20), due_date date, status varchar(20));

create table DEPARTMENTS(department_id varchar(20), department_name varchar(20), manager varchar(20));

create table EMPLOYEE_WORK(employee_id varchar(20), employee_name varchar(20), worked_for_hours int);

create table PROJECT_PROGRESS(project_id varchar(20), status varchar(20));

create table TASK_PROGRESS(project_id varchar(20), task_id varchar(20), status varchar(20));
	