import java.lang.*;
public class helper
{
	public static int nextPrime(int from){
		if (from < 2) {
			return 2;
		}

		int i,to;
		boolean isPrime = false;
		while(!isPrime) {
			from += 1 + (from & 1);
			to = (int) Math.sqrt(from);
			isPrime = true;
			for(i = 2;i < to ;i++){
				if ((from % i) == 0){
					isPrime = false;
					break;
				}
			}
		}
		return from;
	}
}

