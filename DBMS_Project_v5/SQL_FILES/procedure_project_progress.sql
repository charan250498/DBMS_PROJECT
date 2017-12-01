delimiter $$
create procedure project_progress_finder(IN proj_id_var varchar(20), OUT proj_progress int, OUT tasks_progress int)
	BEGIN
	declare proj_total_days int;
	declare completed_days int;
	declare completed_tasks int;
	declare total_tasks int;
	declare start_date_var date;
	declare end_date_var date;
	select count(distinct on_date) into completed_days from EMPLOYEE_PROJECT_CONTRIBUTION where project_id=proj_id_var;
	/*select completed_days;*/
	select start_date into start_date_var from PROJECT where project_id = proj_id_var ;
	select end_date into end_date_var from PROJECT where project_id = proj_id_var ;
	select DATEDIFF(end_date_var,start_date_var) into proj_total_days;
	/*select proj_total_days;*/
	set proj_progress = (completed_days/proj_total_days)*100;
	select count(task_id) into total_tasks from MILESTONES where project_id = proj_id_var;
	select count(task_id) into completed_tasks from MILESTONES where project_id=proj_id_var and status='completed';
	set tasks_progress = (completed_tasks/total_tasks)*100;
	END$$
delimiter ;