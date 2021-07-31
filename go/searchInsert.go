package main

import "fmt"

// https://leetcode-cn.com/problems/search-insert-position/
func main() {
	nums := []int{1, 3, 5, 6}
	// nums := []int{14}
	target := 7

	fmt.Println(searchInsert(nums, target))
}

func searchInsert(nums []int, target int) int {
	left, right := 0, len(nums)-1
	mid := left

	for left <= right {
		mid = left + (right-left)/2
		fmt.Println(nums[mid], left, mid, right)
		if nums[mid] == target {
			return mid
		} else if nums[mid] > target {
			right = mid - 1
		} else if nums[mid] < target {
			left = mid + 1
		}
	}

	// 需要考虑这个mid值是否大于target 大于target值则在mid上加1
	if nums[mid] < target {
		return mid + 1
	} else {
		return mid
	}
}
