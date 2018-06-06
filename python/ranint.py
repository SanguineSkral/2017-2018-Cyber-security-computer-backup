from random import randint
def rint():
	r = randint(65,90)
	return r
	
def main():
	for i in range (1000):
		z = rint()
		print (z," ",end="")


main()
