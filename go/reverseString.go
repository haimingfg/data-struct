package main

import "fmt"

// https://leetcode-cn.com/problems/reverse-string/
func main() {
	s := []string{"h", "e", "l", "l", "o"}
	fmt.Println(reverseString(s))
}

func reverseString(s []string) []string {
	j := len(s) - 1
	i := 0
	for i < j {
		s[i], s[j] = s[j], s[i]
		i += 1
		j -= 1
	}
	return s
}
