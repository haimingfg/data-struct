package main

import "fmt"

// https://leetcode-cn.com/problems/rotate-array/
func main() {
	nums := []int{-4, -1, 0, 3, 10}
	k := 2
	fmt.Println(rotate(nums, k))
}

func rotate(nums []int, k int) []int {
	n := len(nums)
	k %= n

	for start, count := 0, gcd(k, n); start < count; start++ {
		pre, cur := nums[start], start
		fmt.Println("1=1", pre, cur, start)
		for ok := true; ok; ok = cur != start {

			next := (cur + k) % n
			nums[next], pre, cur = pre, nums[next], next
			fmt.Println("2=2", nums, next, pre, cur)
		}
	}

	return nums
}

func gcd(a, b int) int {
	for a != 0 {
		a, b = b%a, a
	}
	return b
}
