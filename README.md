# to-do-list


Created a database (name: todo)

Established some connection to database in index.php

Database is in todo.sql (-u todo -plist)

Database Structure

+---------------------------+
|	  todo_list	    |
+---------------------------+
| id		int	    |
| task		varchar(32) |
| deadline	date	    |
| done		bool	    |
| admin_id	int	    |
+---------------------------+

+---------------------------+
|	    admin	    |
+---------------------------+
| id		int	    |
| username	varchar(32) |
| password	varchar(32) |
+---------------------------+


Cannot login to database with 'root'@'localhost', idk why
Still don't know how to include/link page.
	include maybe use some php
	link maybe can just use href
Don't know how to create or use db.php. (I srsly don't know)
