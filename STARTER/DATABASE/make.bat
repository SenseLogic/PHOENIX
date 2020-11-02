..\..\..\..\TOOL\BASIL\basil --sql --exclude-command "drop schema" --exclude-command "create schema" blog.bs blog.bd
copy blog.sql remote_blog.sql
copy blog_data.sql remote_blog_data.sql
copy blog_dump.sql remote_blog_dump.sql
..\..\..\..\TOOL\BASIL\basil --sql --phoenix --force-drop blog.bs blog.bd blog.bt administration.bt
pause
..\..\..\..\TOOL\CYCLONE\cyclone mysql 127.0.0.1 3306 root "" blog.sql blog_data.sql
copy PHX\index.phx ..\CODE\
copy PHX\ADMINISTRATION\CONTROLLER\*.phx ..\CODE\ADMINISTRATION\CONTROLLER
copy PHX\ADMINISTRATION\VIEW\*.pht ..\CODE\ADMINISTRATION\VIEW
copy PHX\MODEL\*.phx ..\CODE\MODEL
pause
