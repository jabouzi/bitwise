A=[1,2,3,4,5,6]

def prefix_sums(A):
	n = len(A)
	P = [0] * (n + 1)
	for k in xrange(1, n + 1):
		P[k] = P[k - 1] + A[k - 1]
	return P
	
def count_total(P, x, y):
	return P[y + 1] - P[x]

def mushrooms(A, k, m):
	n = len(A)
	result = 0
	pref = prefix_sums(A)
	for p in xrange(min(m, k) + 1):
		left_pos = k - p
		right_pos = min(n - 1, max(k, k + m - 2 * p))
		result = max(result, count_total(pref, left_pos, right_pos))
	for p in xrange(min(m + 1, n - k)):
		right_pos = k + p
		left_pos = max(0, min(k, k - (m - 2 * p)))
		result = max(result, count_total(pref, left_pos, right_pos))
	return result

print prefix_sums(A)

k = 4
m = 6
print mushrooms(A, k, m)


