delimiter $$
create procedure employee_contribution (IN emp_id_var varchar(20), IN proj_id_var varchar(20), OUT percentage_contributed int)
	BEGIN 
	declare emp_total_hrs int;
	declare proj_total_hrs int;
	select sum(worked_for_hours) into emp_total_hrs from EMPLOYEE_PROJECT_CONTRIBUTION where project_id=proj_id_var and employee_id=emp_id_var;
	select sum(worked_for_hours) into proj_total_hrs from EMPLOYEE_PROJECT_CONTRIBUTION where project_id=proj_id_var;
	set percentage_contributed = ((emp_total_hrs*100)/proj_total_hrs);
/*select percentage_contributed;*/
/*select emp_id_var;
select proj_total_hrs;
select emp_total_hrs;*/
END$$	
delimiter ;