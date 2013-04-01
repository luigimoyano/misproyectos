#!/usr/bin/python

print 5;
print "Hello world";


words = ['cat', 'window', 'defenestrate']
for w in words:
	print w, len(w)



x = int(raw_input("Please enter an integer: "))
if x < 0:
      x = 0
      print 'Negative changed to zero'
elif x == 0:
      print 'Zero'
elif x == 1:
      print 'Single'
else:
      print 'More'

## Uso de funciones.
def fib(n):
     a, b = 0, 1
     while a < n:
         print a,
         a, b = b, a+b

# Now call the function we just defined:
fib(2000) 
