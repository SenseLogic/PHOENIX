#!/bin/sh
set -x
../../../../TOOL/BASIL/basil --sql --exclude-command "drop schema" --exclude-command "create schema" blog.bs blog.bd
cp blog.sql remote_blog.sql
cp blog_data.sql remote_blog_data.sql
cp blog_dump.sql remote_blog_dump.sql
../../../../TOOL/BASIL/basil --sql --phoenix --force-drop blog.bs blog.bd blog.bt administration.bt
read key
../../../../TOOL/CYCLONE/cyclone mysql 127.0.0.1 3306 root root blog.sql blog_data.sql
cp PHX/index.phx ../CODE/
cp PHX/ADMINISTRATION/CONTROLLER/*.phx ../CODE/ADMINISTRATION/CONTROLLER
cp PHX/ADMINISTRATION/VIEW/*.pht ../CODE/ADMINISTRATION/VIEW
cp PHX/MODEL/*.phx ../CODE/MODEL
