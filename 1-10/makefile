CC=gcc
JCC=javac
all: 1.problem 2.problem 3.problem 4.problem 5.problem 
	echo "Done"	
1.problem:
	$(CC) -o 1.out 1.answer.c
	$(JCC) problem1.java
	jar cfe problem1.jar problem1 problem1.class
2.problem:
	$(CC) -o 2.out 2.answer.c
	$(JCC) problem2.java
	jar cfe problem2.jar problem2 problem2.class
3.problem:
	$(CC) -o 3.out 3.answer.c -lm
	$(JCC) problem3.java ../helper.java
	jar cfe problem3.jar problem3 problem3.class -C .. helper.class 
4.problem:
	$(CC) -o 4.out 4.answer.c
	$(JCC) problem4.java
	jar cfe problem4.jar problem4 problem4.class
5.problem:
	$(CC) -o 5.out 5.answer.c -lm
	$(JCC) problem5.java ../helper.java
	jar cfe problem5.jar problem5 problem3.class -C .. helper.class 
clean:
	rm *.out *.class *.jar
