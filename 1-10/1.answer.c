#include <stdio.h>

int main() {
	int answer = 0;
	short i;

	for (i = 0; i<1000;i++){
		if(!(i % 3)|| !(i % 5)){
			answer += i;
		}
	}
	printf("Answer = %i", answer);
	return 0;
}

