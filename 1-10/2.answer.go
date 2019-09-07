package main

import "fmt"

func main() {
    var answer int = 2
    var last int = 1
    var current int = 2

    var tmp int

    for current < 4000000 {
        tmp = current
        current = last + current
        last = tmp
        if (current & 1) == 0 {
            answer += current;
        }

    }
    fmt.Println("Answer : ", answer);
}

