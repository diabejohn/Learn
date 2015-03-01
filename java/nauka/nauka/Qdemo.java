package nauka;

	class Queue {
		int q[];
		int putloc, getloc;

	
	Queue (int size) {
		q = new int[size+1];
		putloc = getloc = 0;
	}
	
	void put(int ch){
		if (putloc==q.length-1) {
			System.out.println("-- Kolejka pe�na");
			return;
		}
		putloc++;
		q[putloc] = ch;
	}
	
	int get(){
		if (getloc == putloc) {
			System.out.println("-- Kolejka pusta");
			return  0;
		}
		getloc++;
		return q[getloc];
	}
	
	}
public class Qdemo {	
	public static void main(String[] args) {
		Queue bigQ = new Queue(100);
		Queue smallQ = new Queue(4);
		int ch;
		
		 System.out.println("U�ywam bigQ do alfabetu");
		 
		 for (int i = 0; i < 26; i++) {
			bigQ.put(i+1 );
		}
		 
		 System.out.println("Pobieram elementy z bigQ");
		 
		 for (int i = 0; i < 26; i++) {
			ch = bigQ.get();
			if (ch != 0) {
				System.out.print(ch + " ");
			}
		}
		 System.out.println("\n");
		 
		 System.out.println("U�ywam smalq do generowania b��d�w");
		 
		 for (int i = 0; i < 5; i++) {
			System.out.println("Pr�buje umie�ci� znak " + (i+1));
			
			smallQ.put( (i+1));
			
			 System.out.println();
		}
		 System.out.println();
		 
		 System.out.println("Zawarto�� kolejki smalQ: ");
		 for (int i = 0; i < 5; i++) {
			ch = smallQ.get();
			
			if (ch !=  0) {
				 System.out.print(ch);
			}
		}

	}

}
