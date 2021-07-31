package main

import "fmt"

// https://leetcode-cn.com/problems/binary-search/
func main() {
	nums := []int{-1, 0, 3, 5, 9, 12}
	target := 1

	fmt.Println(search(nums, target))
}

func search(nums []int, target int) int {
	left, right := 0, len(nums)-1
	for left <= right {
		pivot := left + (right - left)
		if nums[pivot] == target {
			return pivot
		}
		if target < nums[pivot] {
			right = pivot - 1
		} else {
			left = pivot + 1
		}

	}

	return -1
}
