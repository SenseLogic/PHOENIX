#!/bin/sh
set -x
dmd -O -m64 phoenix.d
rm *.o
