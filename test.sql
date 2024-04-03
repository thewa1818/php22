INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'kaho','test@test.jp',30,'test',sysdate());

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'takashi','test2@test2.jp',10,'test',sysdate());

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'kanako','test3@test3.jp',40,'test',sysdate());

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(:id,:name,:email,:age,:naiyou,sysdate());



SELECT * FROM gs_an_table;

SELECT * FROM gs_an_table WHERE id=2;