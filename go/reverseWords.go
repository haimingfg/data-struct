package main

import "fmt"

// https://leetcode-cn.com/problems/reverse-words-in-a-string-iii/
func main() {
	s := "Let's take LeetCode contest"
	// "s'teL ekat edoCteeL tsetnoc"
	// s'teL ekat edoCteeL tsetnoc
	fmt.Println(reverseWords(s))
}

func reverseWords(s string) string {
	// length := len(s)
	// ret := []byte{}
	// for i := 0; i < length; {
	// 	start := i
	// 	for i < length && s[i] != ' ' {
	// 		i++
	// 	}
	// 	for p := start; p < i; p++ {
	// 		ret = append(ret, s[start+i-1-p])
	// 	}
	// 	for i < length && s[i] == ' ' {
	// 		i++
	// 		ret = append(ret, ' ')
	// 	}
	// }
	// return string(ret)

	top := 0
	bottom := 0
	n := len(s)
	ret := []byte{}
	start := 0
	for top < n {
		if s[top] == ' ' {
			fmt.Println(top, bottom)
			for bottom < top {
				fmt.Println(top, bottom, start+top-bottom-1, string(s[start+top-bottom-1]))
				ret = append(ret, s[start+top-bottom-1])
				bottom += 1
			}
			ret = append(ret, ' ')
			bottom = top + 1
			start = bottom
			fmt.Println(string(ret), "----=", string(s[start+top-bottom-1]), top, bottom)
		}
		top += 1
	}

	top = n
	start = bottom
	for start < n {
		fmt.Println(bottom + top - start - 1)
		ret = append(ret, s[bottom+top-start-1])
		start += 1
	}
	return string(ret)
}
