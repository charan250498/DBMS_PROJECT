alter table EMPLOYEE add primary key (employee_id);

alter table DEPARTMENTS add primary key (department_id);
alter table DEPARTMENTS add foreign key (manager) references EMPLOYEE(employee_id) on delete cascade on update cascade;

alter table PROJECT add primary key (project_id);
alter table PROJECT add foreign key (project_manager) references EMPLOYEE(employee_id) on delete cascade on update cascade;
alter table PROJECT add foreign key (department_id) references DEPARTMENTS(department_id) on delete cascade on update cascade;

alter table PROJECT_MEMBERS add foreign key (project_id) references PROJECT(project_id) on delete cascade on update cascade;
alter table PROJECT_MEMBERS add primary key (project_id);
alter table PROJECT_MEMBERS add foreign key (manager) references EMPLOYEE(employee_id) on delete cascade on update cascade;
alter table PROJECT_MEMBERS add foreign key (member1) references EMPLOYEE(employee_id) on delete cascade on update cascade;
alter table PROJECT_MEMBERS add foreign key (member2) references EMPLOYEE(employee_id) on delete cascade on update cascade;
alter table PROJECT_MEMBERS add foreign key (member3) references EMPLOYEE(employee_id) on delete cascade on update cascade;
alter table PROJECT_MEMBERS add foreign key (member4) references EMPLOYEE(employee_id) on delete cascade on update cascade; 
alter table PROJECT_MEMBERS add foreign key (member5) references EMPLOYEE(employee_id) on delete cascade on update cascade;
alter table PROJECT_MEMBERS add foreign key (member6) references EMPLOYEE(employee_id) on delete cascade on update cascade;

alter table MILESTONES add foreign key (project_id) references PROJECT(project_id) on delete cascade on update cascade;
alter table MILESTONES add primary key (project_id, task_id);
alter table MILESTONES add foreign key (person_in_charge) references EMPLOYEE(employee_id) on delete cascade on update cascade;

alter table EMPLOYEE_WORK add foreign key (employee_id) references EMPLOYEE(employee_id) on delete cascade on update cascade;
alter table EMPLOYEE_WORK add primary key (employee_id);
/*alter table EMPLOYEE_WORK add foreign key (employee_name) references EMPLOYEE(employee_name) on delete cascade on update cascade;*/

alter table PROJECT_PROGRESS add foreign key (project_id) references PROJECT(project_id) on delete cascade on update cascade;
alter table PROJECT_PROGRESS add primary key (project_id);

alter table TASK_PROGRESS add foreign key (project_id) references PROJECT(project_id) on delete cascade on update cascade;
/*alter table TASK_PROGRESS add foreign key (task_id) references MILESTONES(task_id) on delete cascade on update cascade;*/
alter table TASK_PROGRESS add primary key (project_id,task_id);