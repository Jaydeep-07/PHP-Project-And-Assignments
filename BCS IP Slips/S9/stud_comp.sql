create table student(sid serial primary key,sname text,class int);

insert into student(sname,class) values('Ram',3),('Seeta',6),('Radha',9),('Meera',9),('Krishna',8),('Laxman',5),('Avani',7),('Arnav',6);

create table competition(cno serial primary key,cname text,type text);

insert into competition(cname,type) values('High jump','Sport'),('Long jump','Sport'),('Quiz','Academic'),('Group Song','Cultural Activity');

create table stud_comp(sid int references student(sid), cno int references competition(cno),rank int);

insert into stud_comp values(1,1,2),(2,4,1),(3,1,1),(4,3,1),(5,2,1),(6,4,2),(7,4,1),(8,3,2);
