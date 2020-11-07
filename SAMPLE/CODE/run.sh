#!/bin/sh
set -x
php -d post_max_size=64M -d upload_max_filesize=64M -S localhost:8080 -t ../www/
