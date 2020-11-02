#!/bin/sh
set -x
../../../BASIL/basil --sql --phoenix blog.bs blog.bd blog.bt administration.bt api.bt
cp PHX/index.phx ../CODE/
cp PHX/MODEL/*.phx ../CODE/MODEL/
cp PHX/ADMINISTRATION/CONTROLLER/*.phx ../CODE/ADMINISTRATION/CONTROLLER/
cp PHX/ADMINISTRATION/VIEW/*.pht ../CODE/ADMINISTRATION/VIEW/
cp PHX/CONTROLLER/API/*.phx ../CODE/CONTROLLER/API/
read key
../../../CYCLONE/cyclone mysql 127.0.0.1 3306 root root blog.sql blog_data.sql
