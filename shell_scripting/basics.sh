#!/bin/sh
#	Aqui vamos a poner todos los elementos basicos de la programacion en shell-scripting, (condiciones, bucles, manejo de variables, etc).
# Script to see whether argument is positive or negative
#
if [ $# -eq 0 ]
then
echo "$0 : You must give/supply one integers"
exit 1
fi

if test $1 -gt 0
then
echo "$1 number is positive"
else
echo "$1 number is negative"
fi


# En casa aparte tienes el codigo de ejemplo. 
