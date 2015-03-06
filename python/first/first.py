__author__ = 'Piotr'

print "simple calc"

zero = 0

def dodawanie(x,y):
    return x+y

def odejmowanie(x,y):
    return x-y

def mnozenie(x,y):
    return x*y

def dzielenie(x,y):
    return x/y


print "Co chesz policzyc?"
print("1.Dodawanie")
print("2.Odejmowanie")
print("3.Mnozenie")
print("4.Dzielenie")

wybor = input("Co wybierasz(1/2/3/4):")

num1 = int(input("Podaj pierwsza liczbe: "))
num2 = int(input("Podaj druga liczbe: "))

if wybor == 1:
    print num1, ' + ', num2, ' = ', dodawanie(num1, num2)

elif wybor == 2:
    print num1, ' - ', num2, ' = ', odejmowanie(num1, num2)

elif wybor == 3:
    print num1, ' * ', num2, ' = ', mnozenie(num1, num2)

elif wybor == 4:
    if num2 == 0:
        print("Zle")
    else:
        print num1, ' / ', num2, ' = ', dzielenie(num1, num2)