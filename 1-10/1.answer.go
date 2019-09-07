package main

import "fmt"

func main() {
    var answer int

	for i := 0; i < 1000; i++ {
		if (i % 3 == 0) || (i % 5 == 0) {
			answer += i;
		}
	}

    fmt.Println("Answer = ", answer);
}

