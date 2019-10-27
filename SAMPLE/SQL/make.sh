#!/bin/sh
set -x
../../../BASIL/basil --sql --phoenix blog.bs
read key
../../../CYCLONE/cyclone mysql 127.0.0.1 3306 root root blog.sql blog_data.sql
