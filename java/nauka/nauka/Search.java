package nauka;

public class Search {

	public static void main(String[] args) {
		
		int nums[] = { 6, 8, 3, 7, 5, 6, 1, 4 }; 
	    int val = 9;  
	    boolean found = false; 
	    
	    for (int i : nums) {
			if (i==val) {
				found = true;
				break;
			}
		}
	    
	    if (found) {
			System.out.println("Znalaziono");
		} else {
			System.out.println("nie ");
		}

	}

}
