public class problem3
{
	public static void main (String[] args) {

	long number = 600851475143L;
	int prime = 0, answer = 0;

	while(prime < number) {
		prime = helper.nextPrime(prime);
		while(true) {
			if((number % prime) == 0) {
				number /= prime;
				answer = prime;
			} else {
				break;	
			}
		}
	}
	System.out.print("Answer = ");
	System.out.println(answer);
	}
}

