#include <stdio.h>
#include <math.h>

int nextPrime(int from) {
	if (from < 2) {
		return 2;
	}

	int i,to,isPrime = 0;
	while(!isPrime) {
		from += 1 + (from & 1);
		to = sqrt(from);
		isPrime = 1;
		for(i = 2;i <= to ;i++){
			if ((from % i) == 0){
				isPrime = 0;
				break;
			}
		}
	}
	return from;
}
