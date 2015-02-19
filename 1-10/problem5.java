/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/
public class problem5
{
	private static int multipleBelow(int max) {
		int found = 1;
		int sqrt_max = (int) Math.sqrt(max);
		int prime = 0;
		int tmp = 0;

		while ((prime = helper.nextPrime(prime)) < max) {
			if (prime < sqrt_max) {
				tmp = (int) (Math.log(max) / Math.log(prime));
				found *= Math.pow(prime, tmp);
			} else {
				found *= prime;
			}
		}

		return found;
	}
	public static void main (String[] args){
		System.out.print("Answer: ");
		System.out.println(multipleBelow(20));
	}
}

