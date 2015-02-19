public class problem4
{
	public static void  main(String[] args){
		String s = "000000";
		int i,j, large = 9009, tmp;
		int start = 1;
		int max = 1000;
		int s_start, s_end;
		for(i = start; i <= max; i++) {
			for(j = start;j <= max; j++) {
				tmp = i*j;
				if (tmp < large) {
					continue;
				}

				s = Integer.toString(tmp);	
				s_start = 0;
				s_end = s.length() -1;

				while (s_end > s_start)
				{
					if (s.charAt(s_start) != s.charAt(s_end)) {
						break;
					}
					++s_start;
					--s_end;
				}
				if (s_start >= s_end) {
					large = tmp;
				}
			}
		}

		System.out.print("Answer ");
		System.out.println(large);
	}
}

