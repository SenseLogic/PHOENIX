#!/bin/sh
set -x
../../../BASIL/basil --sql --phoenix blog.bs blog.bd blog.bt
cp PHX/MODEL/*.phx ../CODE/MODEL/
read key
../../../CYCLONE/cyclone mysql 127.0.0.1 3306 root root blog.sql blog_data.sql
