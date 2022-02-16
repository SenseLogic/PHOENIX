#!/bin/sh
set -x
dmd -O -inline -m64 phoenix.d
rm *.o
