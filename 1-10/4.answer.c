/*
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 99.

Find the largest palindrome made from the product of two 3-digit numbers.
*/
#include <stdio.h>
#include <string.h>

int main(){
	char s[] = "000000";
	int i,j, large = 9009, tmp;
	int start = 1;
	int max = 1000;
	for(i = start; i <= max; i++) {
		for(j = start;j <= max; j++) {
			tmp = i*j;
			if (tmp < large) {
				continue;
			}
			snprintf(s, sizeof(s), "%i", tmp);
			int start = 0;
			int end = strlen(s) -1;

			while (end > start)
			{
				if (s[start] != s[end]) {
					break;
				}
				++start;
				--end;
			}
			if (start >= end) {
				large = tmp;
			}
		}
	}

	printf("Answer %i", large);
	return 0;
}
