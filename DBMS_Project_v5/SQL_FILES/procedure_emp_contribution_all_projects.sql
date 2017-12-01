delimiter $$
create procedure employee_contribution_in_all_projects (IN emp_id_var varchar(20), OUT percentage_contributed int)
	BEGIN 
	declare emp_total_hrs int;
	declare proj_total_hrs int;
	declare proj_id_var varchar(20);
	declare cur1 cursor for select project_id from PROJECT_MEMBERS where manager=emp_id_var OR member1=emp_id_var OR member2=emp_id_var OR member3=emp_id_var OR member4=emp_id_var OR member5=emp_id_var OR member6=emp_id_var ;
	open cur1;
	beginning_of_loop : LOOP
		fetch cur1 into proj_id_var;
		select sum(worked_for_hours) into emp_total_hrs from EMPLOYEE_PROJECT_CONTRIBUTION where project_id=proj_id_var and employee_id=emp_id_var;
		select sum(worked_for_hours) into proj_total_hrs from EMPLOYEE_PROJECT_CONTRIBUTION where project_id=proj_id_var;
		set percentage_contributed = (emp_total_hrs/proj_total_hrs) * 100;
		select proj_id_var,percentage_contributed;
	END LOOP;
	close cur1;
/*select percentage_contributed;*/
/*select emp_id_var;
select proj_total_hrs;
select emp_total_hrs;*/
END$$	
delimiter ;