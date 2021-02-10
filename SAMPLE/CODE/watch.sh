#!/bin/sh
set -x
../../phoenix --extract STYLE/ --trim --create --watch ./ www/
