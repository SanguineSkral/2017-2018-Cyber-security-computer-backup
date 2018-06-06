def factors(b):
	for i in range(1,b+1):
		if b % i == 0:
			print(i)

if__Name__ == '__main__':
	b = input('Your Number Please: ')
	b = float(b)
	
	if b > 0 and b.is_interger():
		factors(int(b))
	else:
		print('Please enter a positive interger')
