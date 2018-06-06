for i in {0..255} ;
	do (ping 10.183.2.$i -c 1 -w 5  >/dev/null && echo "10.183.2.$i" &) ;
done
for i in {0..255} ;
	do (ping 10.183.0.$i -c 1 -w 5  >/dev/null && echo "10.183.0.$i" &) ;
done
