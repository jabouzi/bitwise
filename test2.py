def prefix_sums(A, mapping):
    n = len(A)
    sums = [[0] * 4 for i in xrange(n + 1)]
    for k in xrange(1, n + 1):
        sums[k] = sums[k - 1][:]
        sums[k][mapping[A[k - 1]] - 1] += 1
    return sums
    
def get_slice_sum(Qi, Pi):
    slice_sum = [0] * len(Qi)
    for i in xrange(len(Qi)):
        slice_sum[i] = Qi[i] - Pi[i]
    return slice_sum
    
def solution(S, P, Q):
    mapping = {'A':1, 'C':2, 'G':3, 'T':4}
    sums = prefix_sums(S, mapping)
    print sums
    result = [0] * len(P)
    
    for i in xrange(len(P)):
        slice_sum = get_slice_sum(sums[Q[i] + 1], sums[P[i]])
        print slice_sum
        if slice_sum[0] != 0:
            result[i] = 1
        elif slice_sum[1] != 0:
            result[i] = 2
        elif slice_sum[2] != 0:
            result[i] = 3
        else:
            result[i] = 4
            
    return result

print solution('CAGCCTA', [2,5, 0], [4,5,6]);
