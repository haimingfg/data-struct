package main

import "fmt"

// https://leetcode-cn.com/problems/move-zeroes/s
func main() {
	nums := []int{0, 1, 0, 3, 12}
	fmt.Println(moveZeroes(nums))
}

func moveZeroes(nums []int) []int {
	left, right, n := 0, 0, len(nums)
	for right < n {
		if nums[left] == 0 && nums[left] != nums[right] && left != right {
			nums[left], nums[right] = nums[right], nums[left]
			left++
		}
		right++
	}

	return nums
}
