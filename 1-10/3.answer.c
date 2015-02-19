#include<stdio.h>
#include<math.h>
#include "../helper.c"

int main() {
	long number = 600851475143;
	int prime = 0, answer = 0;
	while(prime < number) {
		prime = nextPrime(prime);
		while(1){
			if(number % prime == 0) {
				number /= prime;
				answer = prime;
			} else {
				break;
			}
		}

	}

	printf("Answer : %i", answer);
	return 0;
}
