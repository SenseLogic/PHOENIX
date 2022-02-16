#!/bin/sh
set -x
dmd -debug -g -gf -gs -m64 phoenix.d
rm *.o
