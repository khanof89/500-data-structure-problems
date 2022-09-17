# Function to find a pair in an array with a given sum using sorting
def findPair(nums, target):

    # sort the list in ascending order
    nums.sort()

    # maintain two indices pointing to endpoints of the list
    (low, high) = (0, len(nums) - 1)

    # reduce the search space `nums[low…high]` at each iteration of the loop

    # loop till the search space is exhausted
    while low < high:

        if nums[low] + nums[high] == target:        # target found
            print('Pair found', (nums[low], nums[high]))
            return

        # increment `low` index if the total is less than the desired sum;
        # decrement `high` index if the total is more than the desired sum
        if nums[low] + nums[high] < target:
            low = low + 1
        else:
            high = high - 1

    # No pair with the given sum exists
    print('Pair not found')


if __name__ == '__main__':

    nums = [8, 7, 2, 5, 3, 1]
    target = 10

    findPair(nums, target)