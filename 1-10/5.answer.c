#include <stdio.h>
#include <math.h>
#include "../helper.c"
/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/

int multipleBelow(int max) {
	long long found = 1;
	int sqrt_max = sqrt(max);
	int prime = 0;
	int tmp = 0;

	while ((prime = nextPrime(prime)) < max) {
		if (prime < sqrt_max) {
			tmp = log(max) / log(prime);
			found *= pow(prime, tmp);
		} else {
			found *= prime;
		}
	}

	return found;

}

int main() {
	printf("Answer: %i" , multipleBelow(20)) ;
	return 0;
}
