package main

import "fmt"

// https://leetcode-cn.com/problems/squares-of-a-sorted-array/solution/
func main() {
	nums := []int{-4, -1, 0, 3, 10}

	fmt.Println(sortedSquares(nums))
}

func sortedSquares(nums []int) []int {

	n := len(nums)
	ans := make([]int, n)
	i, j := 0, n-1
	for pos := n - 1; pos >= 0; pos-- {
		if v, w := nums[i]*nums[i], nums[j]*nums[j]; v > w {
			ans[pos] = v
			i++
		} else {
			ans[pos] = w
			j--
		}
	}
	return ans

	// numsLen := len(nums)
	// numsNew := make([]int, 0)
	// pos := numsLen - 1
	// i := 0
	// j := numsLen - 1
	// for i <= j {
	// 	if nums[i]*nums[i] > nums[j]*nums[j] {
	// 		numsNew[pos] = nums[i] * nums[i]
	// 		i += 1
	// 	} else {
	// 		numsNew[pos] = nums[j] * nums[j]
	// 		j -= 1
	// 	}
	// 	pos -= 1
	// }
	// return numsNew

	// for i, num := range nums {
	//     nums[i] = num * num
	// }

	// numLen := len(nums)
	// i := 0
	// for numLen > 1 {
	//     if nums[i] > nums[i+1] {
	//         nums[i], nums[i+1] = nums[i+1] , nums[i]
	//     }
	//     i += 1
	//     // fmt.Println(i)
	//     if i >= numLen - 1 {
	//         i = 0
	//         numLen -=1
	//     }
	// }

	// return nums
}
