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

## Bucle for.

#for (( i = 0; i '<' 10; i ++ )) do
#  echo "Vuelta número $i"
#done


## Case

speed=120
case $speed in
0)
  echo "Estás parado."
  ;;
90)
  echo "Vas dentro de los límites de carretera normal."
  ;;
120)
  echo "Vas en el límite de autopista."
  ;;
130)
  echo "Esa multa..."
  ;;
*)
  echo “Esta velocidad no me suena.”

esac

