public class problem1
{
	public static void main(String[] args) {
		int answer = 0;
		for (int i = 0;i<1000;i++){
			if(!(i % 3 == 0)|| !(i % 5 ==0)){
				answer += i;
			}
		}

		System.out.printf("Answer = ");
		System.out.print(answer);
	}
}
