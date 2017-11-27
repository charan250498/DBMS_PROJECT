insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn027','Charan Kumar','M','charan027','web123','java');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn009','Amar','O','amar009','hello89','c');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn046','Sanju Sam Mathew','M','sanju045','key443','python');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn070','Ranjan','M','ranjan070','see784','c#');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn063','Puneeth','M','puneeth063','wow555','html');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn037','kavya','F','kavya037','meow2424','javascript');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn029','harshitha','F','harshu027','teddybear000','css');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn018','Pooja charan','F','poo018','engaged97','unix shell');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn054','Moh.Hussain','M','moh054','hat456','.net');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn045','johny','M','joh045','luv897','maya');
insert into EMPLOYEE(employee_id , employee_name , gender , username , password ,skill ) values ('amzn036','monica','F','mon036','papamummy','PIZZA');


insert into DEPARTMENTS(department_id, department_name, manager) values ('dep594','aries team','amzn027');
insert into DEPARTMENTS(department_id, department_name, manager) values ('dep987','leo team','amzn063');
insert into DEPARTMENTS(department_id, department_name, manager) values ('dep624','virgo team','amzn009');


insert into PROJECT(project_id , project_name, objective, description, start_date, end_date, department_id, project_manager) values ('pro594','fernandez textiles project','automate textile production management','create an app to automate the production system management','2017-04-29','2017-12-31','dep594','amzn027');
insert into PROJECT(project_id , project_name, objective, description, start_date, end_date, department_id, project_manager) values ('pro987','india post services project','database for postal services','create an appl to maintain data about all the mails in a database','2017-01-30','2017-06-05','dep987','amzn063');
insert into PROJECT(project_id , project_name, objective, description, start_date, end_date, department_id, project_manager) values ('pro624','royal blue sales project','production and distribution management','create an app to manage supply chain management and logistic management' ,'2017-04-05','2019-01-05','dep624','amzn009');


insert into PROJECT_MEMBERS(project_id , manager , member1 , member2 , member3 , member4 , member5 , member6 ) values ('pro594','amzn027','amzn046','amzn070','amzn037','amzn029','amzn054','amzn018');
insert into PROJECT_MEMBERS(project_id , manager , member1 , member2 , member3 , member4 , member5 , member6 ) values ('pro987','amzn063','amzn045','amzn036','amzn054','amzn018','amzn029','amzn037');
insert into PROJECT_MEMBERS(project_id , manager , member1 , member2 , member3 , member4 , member5 , member6 ) values ('pro624','amzn009','amzn045','amzn070','amzn027','amzn037','amzn036','amzn046');


insert into MILESTONES(project_id, task_id, task_name, person_in_charge , due_date, status) values ('pro594','tas5941','requirement listing','amzn046','2017-07-29','ongoing');
insert into MILESTONES(project_id, task_id, task_name, person_in_charge , due_date, status) values ('pro594','tas5942','design and implementation','amzn037','2017-10-29','starting soon');
insert into MILESTONES(project_id, task_id, task_name, person_in_charge , due_date, status) values ('pro594','tas5943','testing','amzn070','2017-12-10','starting soon');
insert into MILESTONES(project_id, task_id, task_name, person_in_charge , due_date, status) values ('pro987','tas9871','requirement listing','amzn036','2017-04-30','completed');
insert into MILESTONES(project_id, task_id, task_name, person_in_charge , due_date, status) values ('pro987','tas9872','design and implementation','amzn054','2017-06-14','completed');
insert into MILESTONES(project_id, task_id, task_name, person_in_charge , due_date, status) values ('pro987','tas9873','testing','amzn018','2017-08-30','ongoing');
insert into MILESTONES(project_id, task_id, task_name, person_in_charge , due_date, status) values ('pro624','tas6241','requirement listing','amzn045','2017-12-28','completed');
insert into MILESTONES(project_id, task_id, task_name, person_in_charge , due_date, status) values ('pro624','tas6242','design and implementation','amzn027','2018-07-26','ongoing');
insert into MILESTONES(project_id, task_id, task_name, person_in_charge , due_date, status) values ('pro624','tas6243','testing and maintainance','amzn036','2018-12-17','starting soon');


/*insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn027','Charan Kumar',7);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn009','Amar',8);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn046','Sanju Sam Mathew',9);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn070','Ranjan',8);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn063','Puneeth',7);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn037','kavya',8);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn029','harshitha',7);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn018','Pooja charan',7);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn054','Moh.Hussain',7);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn045','johny',7);
insert into EMPLOYEE_WORK(employee_id, employee_name, worked_for_hours) values ('amzn036','monica',8);*/

insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro594','amzn027','2017-04-30','Charan Kumar',7);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn009','2017-02-01','Amar',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro624','amzn046','2017-04-06','Sanju Sam Mathew',9);	
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro594','amzn070','2017-04-30','Ranjan',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn063','2017-02-01','Puneeth',7);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro624','amzn037','2017-04-06','kavya',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro594','amzn029','2017-04-30','harshitha',7);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn018','2017-02-01','Pooja charan',7);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro594','amzn054','2017-04-30','Moh.Hussain',7);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro624','amzn045','2017-04-06','johny',7);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro624','amzn036','2017-04-06','monica',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn063','2017-02-26','Puneeth',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn045','2017-02-24','johny',6);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn036','2017-03-05','monica',5);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn054','2017-04-03','Moh.Hussain',6);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn018','2017-04-25','Pooja charan',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn029','2017-05-05','harshitha',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn037','2017-05-29','kavya',7);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn063','2017-06-02','Puneeth',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn045','2017-06-18','johny',6);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn036','2017-06-29','monica',5);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn054','2017-07-16','Moh.Hussain',6);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn018','2017-07-27','Pooja charan',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn029','2017-07-29','harshitha',8);
insert into EMPLOYEE_PROJECT_CONTRIBUTION(project_id, employee_id, on_date, employee_name, worked_for_hours) values ('pro987','amzn037','2017-08-09','kavya',7);
/*insert into PROJECT_PROGRESS(project_id, status) values ('pro594','starting soon');
insert into PROJECT_PROGRESS(project_id, status) values ('pro987','ongoing');
insert into PROJECT_PROGRESS(project_id, status) values ('pro624','starting soon');


insert into TASK_PROGRESS(project_id, task_id, status) values ('pro594','tas5941','ongoing');
insert into TASK_PROGRESS(project_id, task_id, status) values ('pro594','tas5942','starting soon');
insert into TASK_PROGRESS(project_id, task_id, status) values ('pro594','tas5943','starting soon');
insert into TASK_PROGRESS(project_id, task_id, status) values ('pro987','tas9871','completed');
insert into TASK_PROGRESS(project_id, task_id, status) values ('pro987','tas9872','completed');
insert into TASK_PROGRESS(project_id, task_id, status) values ('pro987','tas9873','ongoing');
insert into TASK_PROGRESS(project_id, task_id, status) values ('pro624','tas6241','completed');
insert into TASK_PROGRESS(project_id, task_id, status) values ('pro624','tas6242','ongoing');
insert into TASK_PROGRESS(project_id, task_id, status) values ('pro624','tas6243','starting soon');*/
