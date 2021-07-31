package main

import "fmt"

// https://leetcode-cn.com/problems/two-sum/
func main() {
	nums := []int{1, 4, 2, 0, 5}
	target := 7
	fmt.Println(twoSumHash(nums, target))
	// fmt.Println(1)
}

// 用hash值记录
func twoSumHash(nums []int, target int) []int {
	hashMap := map[int]int{}

	for i, num := range nums {
		fmt.Println(i, target, num, target-num, hashMap[target-num])
		if p, ok := hashMap[target-num]; ok {
			return []int{p, i}
		}
		hashMap[num] = i
		fmt.Println(hashMap)
	}
	return []int{}
}

func twoSum(nums []int, target int) []int {
	index := []int{}

	for i, num := range nums {
		j := i + 1
		for j < len(nums) {
			next := nums[j]
			j += 1
			if (num + next) == target {
				index = append(index, i, j-1)
				break
			}
		}
		if len(index) == 2 {
			break
		}
	}

	return index
}

func twoSums(nums []int, target int) [][]int {
	index := [][]int{}

	for i, num := range nums {
		j := i + 1
		for j < len(nums) {
			next := nums[j]
			j += 1
			if (num + next) == target {
				index = append(index, []int{i, j - 1})
			}
		}
	}

	return index
}
