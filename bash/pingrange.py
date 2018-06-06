# python pingrange.py
import subprocess

for ping in range(1,20):
    address = "10.183.1." + str(ping)
    response = subprocess.call(['ping', '-c', '2', address])
    if response == 0:
        print ("ping to", address, "OK")
    elif response == 2:
        print ("no response from", address)
    else:
        print ("ping to", address, "failed!")
