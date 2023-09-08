CREATE TABLE task  (
  id SERIAL NOT NULL PRIMARY KEY,
  name varchar,
  description varchar
 );
 
INSERT INTO task(id,name, description) VALUES (1,'write','just write');
INSERT INTO task(id,name, description) VALUES (2,'web site','mkae it work');
INSERT INTO task(id,name, description) VALUES (3,'to do list','check');
INSERT INTO task(id,name, description) VALUES (3,'write sth','another w task');