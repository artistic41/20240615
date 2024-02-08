<?php
// raceNumber => favorite => ['win history', 'qin history', 'trio history']

return [
    1 => [
        1 => [
            'win' => [1, 5, 7, 8, 11],
            'qin' => [[1, 4], [1, 5], [1, 13], [3, 5], [4, 11], [5, 7], [7, 8], [7, 9]],
            'trio' => [[1, 4, 8], [1, 4, 13], [1, 5, 6], [2, 4, 11], [2, 5, 7], [2, 7, 8], [3, 5, 6], [4, 7, 9]]
        ],
        2 => [
            'win' => [1, 2, 3, 5, 8, 9, 11, 13],
            'qin' => [[1, 2], [1, 8], [1, 11], [2, 9], [2, 12], [3, 4], [3, 9], [4, 11], [5, 10], [8, 12], [13, 14]],
            'trio' => [[1, 2, 3], [1, 2, 8], [1, 8, 11], [1, 13, 14], [2, 3, 4], [2, 4, 9], [2, 4, 11], [2, 5, 10], [2, 5, 12], [2, 8, 12], [3, 8, 9]]
        ],
        3 => [
            'win' => [1, 3, 4, 5, 6, 7],
            'qin' => [[1, 7], [3, 7], [3, 10], [4, 5], [5, 6], [6, 9]],
            'trio' => [[1, 4, 7], [1, 6, 7], [2, 3, 10], [3, 6, 9], [3, 7, 8], [4, 5, 7], [5, 6, 8]]
        ],
        4 => [
            'win' => [1, 2, 4, 5],
            'qin' => [[1, 3], [1, 5], [2, 3], [3, 5], [4, 5]],
            'trio' => [[1, 4, 5], [2, 3, 7], [3, 5, 10]]
        ],
        5 => [
            'win' => [7, 8, 9, 12],
            'qin' => [[2, 7], [2, 9], [5, 7], [5, 8], [5, 12], [7, 8], [7, 12]],
            'trio' => [[2, 3, 9], [2, 5, 8], [2, 7, 11], [3, 7, 8], [5, 7, 14], [5, 8, 12], [7, 12, 14]]
        ],
        6 => [
            'win' => [6, 7, 9],
            'qin' => [[2, 9], [6, 10], [7, 9]],
            'trio' => [[2, 3, 9], [6, 10, 13], [4, 7, 9]]
        ],
        7 => [
            'win' => [3, 7],
            'qin' => [[2, 3], [7, 8], [7, 9]],
            'trio' => [[1, 2, 3], [1, 7, 8], [4, 7, 8], [4, 7, 9]]
        ],
        8 => [
            'win' => [2, 3, 10, 12],
            'qin' => [[1, 3], [2, 8], [3, 8], [6, 10], [6, 12]],
            'trio' => [[1, 3, 13], [1, 6, 10], [2, 3, 8], [6, 9, 12]]
        ],
        9 => [
            'win' => [6, 8],
            'qin' => [[6, 7], [6, 8]],
            'trio' => [[6, 7, 10], [6, 8, 9]]
        ],
        10 => [
            'win' => [4, 5, 9, 10, 11],
            'qin' => [[3, 5], [4, 5], [5, 10], [5, 11], [8, 9], [10, 12], [10, 13]],
            'trio' => [[3, 5, 10], [3, 10, 12], [4, 5, 7], [5, 8, 9], [5, 8, 10], [5, 9, 11], [6, 8, 9], [9, 10, 13]]
        ],
        11 => [
            'win' => [4, 7, 11],
            'qin' => [[1, 4], [7, 11]],
            'trio' => [[1, 4, 11], [1, 7, 11], [2, 7, 11]]
        ],
        12 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [14],
            'qin' => [[2, 14]],
            'trio' => [[2, 7, 14]]
        ], 
    ],
    2 => [
        1 => [
            'win' => [2, 6, 7, 9],
            'qin' => [[1, 9], [2, 6], [4, 6], [5, 6], [6, 7], [7, 12]],
            'trio' => [[1, 4, 6], [1, 8, 9], [2, 5, 6], [4, 6, 7], [5, 6, 9], [1, 7, 12]]
        ],
        2 => [
            'win' => [2, 5, 6, 7, 8, 9, 12],
            'qin' => [[1, 2], [1, 5], [1, 7], [2, 3], [2, 4], [2, 5], [2, 8], [2, 10], [3, 5], [3, 12], [6, 9]],
            'trio' => [[1, 2, 3], [1, 2, 4], [1, 2, 5], [1, 4, 7], [1, 5, 6], [2, 3, 12], [2, 5, 9], [2, 5, 10], [2, 6, 8], [2, 6, 9], [3, 5, 11], [5, 6, 9]]
        ],
        3 => [
            'win' => [2, 4, 7, 10, 11, 12],
            'qin' => [[1, 2], [2, 8], [3, 4], [3, 10], [3, 12], [4, 8], [5, 11], [5, 12], [7, 12]],
            'trio' => [[1, 2, 11], [1, 3, 4], [1, 3, 12], [1, 5, 11], [2, 3, 8], [2, 3, 10], [2, 5, 12], [2, 7, 12], [3, 10, 12], [4, 8, 10]]
        ],
        4 => [
            'win' => [3, 4, 5, 12],
            'qin' => [[1, 4], [1, 5], [3, 8], [3, 12], [3, 13], [4, 6], [4, 12], [5, 12]],
            'trio' => [[1, 3, 4], [1, 4, 5], [2, 4, 6], [3, 4, 8], [3, 5, 12], [3, 13, 14], [4, 5, 6], [4, 12, 14], [5, 7, 12]]
        ],
        5 => [
            'win' => [5, 10],
            'qin' => [[5, 9], [7, 10]],
            'trio' => [[4, 7, 10], [5, 7, 9]]
        ],
        6 => [
            'win' => [1, 4, 5, 8, 14],
            'qin' => [[1, 3], [1, 8], [2, 14], [4, 14], [5, 6], [5, 8]],
            'trio' => [[1, 3, 4], [1, 4, 14], [1, 7, 8], [2, 5, 8], [2, 5, 14], [5, 6, 9]]
        ],
        7 => [
            'win' => [2, 7],
            'qin' => [[2, 7], [7, 9]],
            'trio' => [[2, 7, 9], [5, 7, 9]]
        ],
        8 => [
            'win' => [1, 3],
            'qin' => [[1, 10], [3, 8]],
            'trio' => [[1, 8, 10], [3, 4, 8]]
        ],
        9 => [
            'win' => [3, 6, 9],
            'qin' => [[2, 9], [3, 11], [6, 11]],
            'trio' => [[2, 3, 9], [3, 7, 11], [6, 10, 11]]
        ],
        10 => [
            'win' => [10],
            'qin' => [[3, 10], [7, 10]],
            'trio' => [[3, 9, 10], [4, 7, 10]]
        ],
        11 => [
            'win' => [8, 11],
            'qin' => [[5, 8], [10, 11]],
            'trio' => [[5, 8, 10], [3, 10, 11]]
        ],
        12 => [
            'win' => [10],
            'qin' => [[2, 10]],
            'trio' => [[2, 8, 10]]
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
    ],
    3 => [
        1 => [
            'win' => [1, 2, 4, 5, 8, 10],
            'qin' => [[1, 2], [1, 3], [1, 10], [3, 5], [4, 8], [5, 8], [8, 10]],
            'trio' => [[1, 2, 7], [1, 3, 9], [1, 3, 10], [1, 5, 8], [2, 3, 5], [2, 4, 8], [2, 8, 10]]
        ],
        2 => [
            'win' => [1, 2, 8, 10, 12],
            'qin' => [[1, 10], [2, 6], [2, 8], [4, 10], [10, 13], [11, 12]],
            'trio' => [[1, 2, 10], [2, 3, 6], [2, 3, 8], [2, 4, 10], [4, 10, 13], [8, 11, 12]]
        ],
        3 => [
            'win' => [3, 7, 8, 12],
            'qin' => [[3, 4], [3, 5], [4, 7], [4, 12], [8, 11]],
            'trio' => [[1, 4, 12], [2, 3, 5], [3, 4, 7], [3, 8, 11]]
        ],
        4 => [
            'win' => [2, 4, 6, 8, 11],
            'qin' => [[1, 11], [2, 4], [3, 4], [4, 6], [4, 12], [6, 8]],
            'trio' => [[1, 3, 4], [1, 9, 11], [2, 4, 5], [2, 4, 6], [2, 4, 8], [2, 4, 12], [3, 4, 10], [3, 6, 8], [4, 6, 10], [4, 8, 12]]
        ],
        5 => [
            'win' => [5, 7, 8, 10],
            'qin' => [[5, 8], [5, 9], [7, 9], [9, 10]],
            'trio' => [[2, 5, 8], [2, 9, 10], [3, 5, 9], [5, 7, 9], [5, 8, 9], [5, 9, 11]]
        ],
        6 => [
            'win' => [1, 4, 12],
            'qin' => [[1, 4], [3, 4], [9, 12]],
            'trio' => [[1, 4, 5], [3, 4, 6], [6, 9, 12]]
        ],
        7 => [
            'win' => [3, 5, 6, 7, 12],
            'qin' => [[1, 3], [2, 7], [3, 5], [4, 12], [5, 7], [6, 9], [6, 11], [7, 8], [7, 11]],
            'trio' => [[1, 3, 14], [2, 4, 7], [2, 6, 11], [2, 7, 11], [3, 5, 7], [4, 6, 9], [4, 8, 12], [5, 7, 11], [7, 8, 9]]
        ],
        8 => [
            'win' => [1, 8, 10, 11],
            'qin' => [[1, 6], [5, 11], [8, 10], [8, 11], [8, 12]],
            'trio' => [[1, 3, 6], [1, 5, 6], [5, 8, 12], [5, 11, 12], [7, 8, 10], [8, 9, 11]]
        ],
        9 => [
            'win' => [3, 7],
            'qin' => [[3, 9], [5, 7]],
            'trio' => [[3, 7, 9], [2, 5, 7]]
        ],
        10 => [
            'win' => [9],
            'qin' => [[9, 14]],
            'trio' => [[9, 11, 14]]
        ],
        11 => [
            'win' => [11],
            'qin' => [[3, 11]],
            'trio' => [[3, 11, 12]]
        ],
        12 => [
            'win' => [10],
            'qin' => [[5, 10]],
            'trio' => [[5, 9, 10]]
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
    ],
    4 => [
        1 => [
            'win' => [2, 3, 5, 6],
            'qin' => [[1, 2], [1, 5], [1, 6], [2, 3], [2, 5], [3, 12], [5, 9], [5, 10], [6, 7]],
            'trio' => [[1, 2, 4], [1, 5, 6], [1, 5, 9], [1, 6, 12], [2, 3, 12], [2, 4, 5], [3, 6, 12], [5, 8, 10], [6, 7, 10]]
        ],
        2 => [
            'win' => [2, 7, 9, 10, 12, 13],
            'qin' => [[2, 6], [2, 7], [2, 8], [2, 9], [7, 10], [9, 13], [12, 14]],
            'trio' => [[1, 2, 9], [2, 6, 9], [2, 7, 9], [2, 8, 11], [3, 9, 13], [7, 10, 11], [9, 12, 14]]
        ],
        3 => [
            'win' => [3, 4, 5, 6, 11],
            'qin' => [[1, 4], [1, 6], [2, 3], [3, 5], [3, 9], [4, 11]],
            'trio' => [[1, 4, 12], [1, 6, 12], [2, 3, 4], [2, 3, 9], [3, 4, 9], [3, 5, 7], [4, 10, 11]]
        ],
        4 => [
            'win' => [3, 4, 9, 11],
            'qin' => [[2, 4], [3, 4], [3, 11], [4, 9], [9, 11]],
            'trio' => [[2, 4, 14], [2, 9, 11], [3, 4, 5], [3, 4, 10], [3, 9, 11], [4, 6, 9]]
        ],
        5 => [
            'win' => [4, 7, 10, 12],
            'qin' => [[3, 7], [4, 6], [5, 12], [10, 11]],
            'trio' => [[2, 10, 11], [3, 7, 8], [4, 5, 6], [5, 6, 12]]
        ],
        6 => [
            'win' => [4, 6, 11, 12],
            'qin' => [[3, 12], [4, 6], [4, 7], [6, 12], [8, 11], [11, 13]],
            'trio' => [[1, 6, 12], [1, 11, 13], [2, 8, 11], [3, 4, 6], [3, 5, 12], [4, 6, 7]]
        ],
        7 => [
            'win' => [7, 10],
            'qin' => [[1, 7], [2, 10], [4, 7]],
            'trio' => [[1, 4, 7], [2, 8, 10], [4, 7, 9]]
        ],
        8 => [
            'win' => [1, 3, 8, 11],
            'qin' => [[1, 3], [2, 11], [3, 7], [3, 10], [6, 8]],
            'trio' => [[1, 3, 9], [2, 3, 10], [2, 4, 11], [3, 6, 7], [6, 8, 12]]
        ],
        9 => [
            'win' => [1, 7, 8, 9, 11],
            'qin' => [[1, 8], [1, 9], [2, 9], [2, 11], [5, 7], [8, 9], [9, 10]],
            'trio' => [[1, 2, 8], [1, 2, 9], [2, 4, 11], [2, 5, 9], [5, 6, 7], [8, 9, 10], [9, 10, 12]]
        ],
        10 => [
            'win' => [4],
            'qin' => [[4, 7]],
            'trio' => [[4, 7, 10]]
        ],
        11 => [
            'win' => [6],
            'qin' => [[1, 6]],
            'trio' => [[1, 6, 12]]
        ],
        12 => [
            'win' => [3],
            'qin' => [[3, 12]],
            'trio' => [[3, 6, 12]]
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [1],
            'qin' => [[1, 5]],
            'trio' => [[1, 5, 9]]
        ],
    ],
    5 => [
        1 => [
            'win' => [1, 3, 4, 7, 10, 12],
            'qin' => [[1, 3], [1, 9], [1, 10], [2, 12], [4, 5], [7, 8], [8, 10]],
            'trio' => [[1, 2, 9], [1, 3, 10], [1, 4, 10], [2, 3, 12], [2, 8, 10], [4, 5, 6], [7, 8, 10]]
        ],
        2 => [
            'win' => [1, 2, 7, 8, 9],
            'qin' => [[1, 10], [2, 4], [2, 7], [2, 8], [4, 7], [7, 8], [8, 9], [8, 12]],
            'trio' => [[1, 4, 10], [2, 4, 10], [2, 5, 7], [2, 8, 9], [2, 8, 14], [4, 5, 7], [4, 8, 12], [7, 8, 9]]
        ],
        3 => [
            'win' => [1, 3, 4, 7, 10],
            'qin' => [[1, 3], [3, 4], [3, 6], [3, 10], [4, 7], [7, 10]],
            'trio' => [[1, 3, 6], [1, 3, 8], [2, 4, 7], [3, 4, 7], [3, 9, 10], [7, 10, 13]]
        ],
        4 => [
            'win' => [1, 2, 4, 6],
            'qin' => [[1, 10], [2, 6], [2, 12], [4, 5], [6, 11]],
            'trio' => [[1, 4, 10], [2, 4, 6], [2, 9, 12], [4, 5, 11], [4, 6, 11]]
        ],
        5 => [
            'win' => [1, 3, 5, 12],
            'qin' => [[1, 2], [2, 3], [5, 6], [5, 12], [10, 12]],
            'trio' => [[1, 2, 8], [2, 3, 6], [3, 5, 6], [5, 10, 12], [9, 10, 12]]
        ],
        6 => [
            'win' => [3, 4, 6, 7, 9],
            'qin' => [[1, 3], [5, 6], [4, 9], [4, 10], [7, 8]],
            'trio' => [[1, 3, 6], [2, 5, 6], [4, 6, 9], [4, 9, 10], [6, 7, 8]]
        ],
        7 => [
            'win' => [1, 4, 5, 7, 8],
            'qin' => [[1, 10], [2, 7], [3, 5], [3, 8], [4, 8], [7, 10]],
            'trio' => [[1, 4, 10], [1, 7, 10], [2, 7, 9], [3, 4, 8], [3, 5, 6], [4, 6, 8]]
        ],
        8 => [
            'win' => [1, 2, 5, 7, 8, 9, 11, 12],
            'qin' => [[1, 8], [2, 7], [2, 9], [5, 7], [8, 12], [10, 11]],
            'trio' => [[1, 5, 7], [1, 8, 10], [1, 8, 11], [2, 4, 9], [2, 7, 10], [8, 10, 11], [8, 10, 12]]
        ],
        9 => [
            'win' => [1, 4, 8, 9],
            'qin' => [[1, 4], [4, 6], [4, 13], [8, 9]],
            'trio' => [[1, 4, 9], [1, 4, 13], [1, 8, 9], [4, 6, 11], [8, 9, 14]]
        ],
        10 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        11 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        12 => [
            'win' => [5, 6, 12],
            'qin' => [[3, 12], [5, 12], [6, 8]],
            'trio' => [[2, 6, 8], [3, 4, 12], [5, 8, 12]]
        ],
        13 => [
            'win' => [8],
            'qin' => [[8, 9]],
            'trio' => [[8, 9, 13]]
        ],
        14 => [
            'win' => [3],
            'qin' => [[3, 10]],
            'trio' => [[3, 10, 11]]
        ],
    ],
    6 => [
        1 => [
            'win' => [1, 7, 9, 12, 13],
            'qin' => [[1, 5], [1, 7], [1, 10], [1, 12], [2, 13], [5, 9]],
            'trio' => [[1, 4, 12], [1, 5, 7], [1, 7, 9], [1, 10, 12], [2, 11, 13], [3, 5, 9]]
        ],
        2 => [
            'win' => [2, 3, 4, 5, 8, 10],
            'qin' => [[2, 6], [2, 7], [3, 4], [4, 5], [4, 7], [4, 10], [7, 8], [8, 10], [9, 10]],
            'trio' => [[1, 4, 5], [2, 4, 6], [2, 4, 7], [2, 4, 10], [2, 7, 14], [3, 4, 10], [3, 9, 10], [5, 7, 8], [5, 8, 10]]
        ],
        3 => [
            'win' => [1, 3, 5, 11],
            'qin' => [[1, 4], [2, 5], [2, 11], [3, 5], [3, 7], [3, 11], [3, 12]],
            'trio' => [[1, 3, 11], [1, 4, 7], [2, 3, 5], [2, 3, 11], [3, 7, 10], [3, 8, 12], [3, 10, 12]]
        ],
        4 => [
            'win' => [3, 6, 7, 8, 12, 13],
            'qin' => [[1, 7], [2, 8], [3, 4], [4, 6], [4, 12], [6, 12], [7, 12], [10, 13]],
            'trio' => [[1, 3, 7], [2, 7, 8], [3, 4, 6], [3, 4, 8], [4, 12, 13], [6, 7, 12], [9, 10, 13]]
        ],
        5 => [
            'win' => [6, 11],
            'qin' => [[6, 10], [9, 11]],
            'trio' => [[5, 9, 11], [6, 10, 13]]
        ],
        6 => [
            'win' => [4, 6, 10, 11, 12],
            'qin' => [[4, 8], [6, 7], [6, 8], [6, 9], [6, 10], [6, 12], [8, 11], [8, 12]],
            'trio' => [[2, 6, 7], [3, 6, 8], [4, 8, 10], [5, 8, 12], [6, 8, 10], [6, 9, 12], [6, 10, 12], [8, 9, 11]]
        ],
        7 => [
            'win' => [3, 6, 9, 11, 13],
            'qin' => [[3, 14], [4, 6], [7, 11], [7, 13], [9, 11]],
            'trio' => [[2, 4, 6], [2, 7, 13], [3, 13, 14], [7, 9, 11], [7, 10, 11]]
        ],
        8 => [
            'win' => [8, 12],
            'qin' => [[2, 8], [2, 12]],
            'trio' => [[2, 8, 12], [2, 11, 12]]
        ],
        9 => [
            'win' => [2, 5, 7],
            'qin' => [[2, 6], [5, 11], [6, 7], [7, 12]],
            'trio' => [[2, 6, 7], [5, 6, 11], [6, 7, 8], [7, 10, 12]]
        ],
        10 => [
            'win' => [10],
            'qin' => [[3, 10]],
            'trio' => [[3, 4, 10]]
        ],
        11 => [
            'win' => [4, 12],
            'qin' => [[1, 4], [2, 12]],
            'trio' => [[1, 4, 7], [2, 11, 12]]
        ],
        12 => [
            'win' => [11, 12],
            'qin' => [[4, 12], [6, 11]],
            'trio' => [[4, 12, 13], [6, 9, 11]]
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [5],
            'qin' => [[5, 8]],
            'trio' => [[5, 8, 12]]
        ],
    ],
    7 => [
        1 => [
            'win' => [1, 2, 4, 5, 7, 8, 9],
            'qin' => [[1, 2], [1, 3], [1, 6], [1, 9], [1, 10], [2, 7], [3, 8], [4, 11], [5, 8], [7, 10]],
            'trio' => [[1, 2, 4], [1, 2, 6], [1, 2, 8], [1, 2, 10], [1, 3, 9], [1, 3, 10], [1, 4, 9], [1, 4, 11], [1, 5, 8], [1, 7, 10], [1, 10, 13], [2, 3, 8], [2, 7, 10], [3, 7, 10]]
        ],
        2 => [
            'win' => [2, 3, 4, 5, 6, 7, 9],
            'qin' => [[2, 5], [2, 7], [3, 5], [3, 6], [3, 9], [4, 6], [4, 12]],
            'trio' => [[1, 4, 6], [2, 3, 6], [2, 4, 12], [2, 5, 6], [2, 6, 7], [3, 5, 8], [3, 5, 9]]
        ],
        3 => [
            'win' => [1, 3, 9],
            'qin' => [[1, 9], [2, 3], [3, 9], [3, 10]],
            'trio' => [[1, 3, 9], [2, 3, 9], [2, 3, 11], [3, 4, 9], [3, 4, 10], [3, 5, 9]]
        ],
        4 => [
            'win' => [1, 3, 4, 5, 7, 8],
            'qin' => [[1, 3], [2, 3], [4, 8], [4, 9], [5, 6], [7, 12], [8, 11]],
            'trio' => [[1, 3, 9], [1, 4, 9], [2, 3, 4], [4, 6, 8], [4, 7, 8], [5, 6, 8], [7, 8, 12], [8, 11, 12]]
        ],
        5 => [
            'win' => [5, 10],
            'qin' => [[2, 5], [5, 8], [6, 10]],
            'trio' => [[1, 6, 10], [2, 3, 5], [5, 6, 8]]
        ],
        6 => [
            'win' => [6, 10],
            'qin' => [[2, 6], [6, 8], [9, 10]],
            'trio' => [[2, 6, 8], [3, 9, 10], [6, 7, 8]]
        ],
        7 => [
            'win' => [2, 4, 7],
            'qin' => [[2, 9], [4, 7], [6, 7]],
            'trio' => [[2, 9, 10], [3, 4, 7], [6, 7, 9]]
        ],
        8 => [
            'win' => [2, 8, 9],
            'qin' => [[2, 11], [8, 9]],
            'trio' => [[2, 11, 14], [4, 8, 9], [5, 8, 9], [7, 8, 9]]
        ],
        9 => [
            'win' => [9, 12],
            'qin' => [[2, 12], [9, 11]],
            'trio' => [[2, 11, 12], [5, 9, 11]]
        ],
        10 => [
            'win' => [3, 10],
            'qin' => [[2, 10], [3, 4]],
            'trio' => [[2, 9, 10], [3, 4, 9]]
        ],
        11 => [
            'win' => [5, 6],
            'qin' => [[4, 5], [6, 9]],
            'trio' => [[4, 5, 10], [6, 9, 11]]
        ],
        12 => [
            'win' => [10, 12],
            'qin' => [[2, 10], [4, 12], [6, 12]],
            'trio' => [[2, 10, 11], [3, 4, 12], [5, 6, 12]]
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [7],
            'qin' => [[7, 8]],
            'trio' => [[1, 7, 8]]
        ],
    ],
    8 => [
        1 => [
            'win' => [1, 5, 6, 11],
            'qin' => [[1, 5], [1, 9], [1, 11], [3, 11], [2, 5], [2, 6], [5, 6]],
            'trio' => [[1, 4, 9], [1, 5, 12], [1, 11, 12], [2, 4, 5], [2, 5, 6], [2, 6, 7], [3, 8, 11]]
        ],
        2 => [
            'win' => [2, 5, 6, 11],
            'qin' => [[1, 2], [2, 4], [2, 6], [2, 12], [3, 11], [4, 5], [5, 8], [6, 8]],
            'trio' => [[1, 2, 3], [1, 2, 5], [1, 2, 14], [1, 6, 8], [2, 3, 4], [2, 3, 12], [2, 4, 5], [2, 4, 7], [2, 5, 6], [2, 5, 8], [3, 5, 11]]
        ],
        3 => [
            'win' => [5, 6, 12],
            'qin' => [[3, 12], [5, 6], [6, 7]],
            'trio' => [[2, 3, 12], [2, 5, 6], [6, 7, 11]]
        ],
        4 => [
            'win' => [1, 4, 6, 7, 9, 12],
            'qin' => [[1, 4], [2, 12], [3, 4], [3, 6], [4, 5], [7, 8], [9, 10]],
            'trio' => [[1, 3, 4], [2, 3, 6], [2, 9, 12], [3, 4, 11], [3, 9, 10], [4, 5, 9], [7, 8, 9]]
        ],
        5 => [
            'win' => [5, 7, 8, 10, 11],
            'qin' => [[2, 11], [3, 5], [3, 7], [5, 8], [5, 10]],
            'trio' => [[1, 3, 7], [2, 4, 11], [3, 5, 8], [3, 5, 12], [4, 5, 10], [5, 6, 8], [5, 10, 11]]
        ],
        6 => [
            'win' => [4, 6, 11, 12],
            'qin' => [[4, 8], [6, 11], [10, 11], [11, 12]],
            'trio' => [[1, 11, 12], [3, 6, 11], [4, 8, 9], [6, 10, 11]]
        ],
        7 => [
            'win' => [1, 3, 4, 5],
            'qin' => [[1, 7], [3, 5], [3, 8], [4, 7], [5, 7]],
            'trio' => [[1, 7, 9], [3, 5, 7], [3, 5, 8], [4, 7, 9]]
        ],
        8 => [
            'win' => [1, 8, 12, 13],
            'qin' => [[1, 9], [4, 8], [6, 12], [8, 13]],
            'trio' => [[1, 8, 9], [3, 8, 13], [4, 6, 12], [4, 8, 12]]
        ],
        9 => [
            'win' => [4, 5, 10, 13],
            'qin' => [[1, 13], [4, 5], [5, 11], [9, 10]],
            'trio' => [[1, 7, 13], [2, 9, 10], [4, 5, 8], [5, 10, 11]]
        ],
        10 => [
            'win' => [4, 7, 9, 10],
            'qin' => [[4, 9], [4, 10], [7, 8], [7, 10]],
            'trio' => [[2, 4, 9], [2, 7, 8], [2, 7, 10], [4, 5, 10]]
        ],
        11 => [
            'win' => [4, 9],
            'qin' => [[4, 5], [5, 9]],
            'trio' => [[2, 5, 9], [4, 5, 9]]
        ],
        12 => [
            'win' => [6],
            'qin' => [[5, 6]],
            'trio' => [[5, 6, 11]]
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
    ],
    9 => [
        1 => [
            'win' => [1, 5, 6, 7, 8, 10, 12],
            'qin' => [[1, 4], [1, 10], [4, 5], [5, 8], [6, 8], [7, 13], [10, 12]],
            'trio' => [[1, 2, 10], [1, 4, 5], [1, 6, 10], [1, 7, 13], [3, 10, 12], [4, 5, 10], [5, 8, 9], [6, 7, 8], [6, 8, 9]]
        ],
        2 => [
            'win' => [2, 4, 6, 11],
            'qin' => [[2, 6], [2, 9], [4, 11], [5, 11], [4, 13]],
            'trio' => [[2, 3, 9], [2, 6, 12], [4, 6, 13], [4, 11, 12], [5, 6, 11]]
        ],
        3 => [
            'win' => [2, 3, 8, 9, 10, 11],
            'qin' => [[1, 9], [2, 10], [3, 11], [5, 8], [7, 10]],
            'trio' => [[1, 9, 10], [2, 3, 10], [2, 7, 10], [2, 3, 11], [3, 4, 11], [5, 8, 9]]
        ],
        4 => [
            'win' => [4, 7, 9],
            'qin' => [[1, 4], [7, 9], [7, 14]],
            'trio' => [[1, 4, 11], [4, 7, 9], [6, 7, 14]]
        ],
        5 => [
            'win' => [3, 5, 8],
            'qin' => [[3, 8], [5, 8], [5, 10]],
            'trio' => [[1, 5, 10], [3, 8, 11], [5, 8, 9]]
        ],
        6 => [
            'win' => [2, 3, 4, 6, 7],
            'qin' => [[2, 9], [2, 13], [3, 7], [3, 13], [4, 7], [5, 6], [6, 7], [6, 9], [6, 14]],
            'trio' => [[1, 3, 13], [2, 5, 6], [2, 6, 13], [2, 9, 10], [3, 6, 7], [3, 7, 13], [4, 6, 9], [4, 7, 14], [6, 7, 9], [6, 10, 14]]
        ],
        7 => [
            'win' => [12],
            'qin' => [[11, 12]],
            'trio' => [[6, 11, 12]]
        ],
        8 => [
            'win' => [1, 5, 8],
            'qin' => [[1, 11], [5, 8], [8, 12]],
            'trio' => [[1, 11, 13], [2, 8, 12], [5, 8, 10]]
        ],
        9 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        10 => [
            'win' => [1, 6, 10, 11],
            'qin' => [[1, 6], [1, 10], [6, 11]],
            'trio' => [[1, 6, 10], [1, 8, 10], [1, 10, 11], [6, 10, 11]]
        ],
        11 => [
            'win' => [11],
            'qin' => [[3, 11]],
            'trio' => [[3, 4, 11]]
        ],
        12 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
    ],
    10 => [
        1 => [
            'win' => [1, 14],
            'qin' => [[1, 3], [1, 14]],
            'trio' => [[1, 3, 4], [1, 6, 14]]
        ],
        2 => [
            'win' => [2, 13],
            'qin' => [[2, 5], [2, 10], [2, 13]],
            'trio' => [[2, 3, 10], [2, 5, 10], [2, 5, 13]]
        ],
        3 => [
            'win' => [3, 6, 11],
            'qin' => [[3, 6], [4, 6], [9, 11]],
            'trio' => [[3, 6, 12], [4, 6, 9], [9, 11, 14]]
        ],
        4 => [
            'win' => [4, 11],
            'qin' => [[4, 6], [4, 11], [10, 11]],
            'trio' => [[1, 10, 11], [2, 4, 11], [4, 5, 6], [4, 6, 8]]
        ],
        5 => [
            'win' => [5, 8],
            'qin' => [[2, 8], [5, 9]],
            'trio' => [[2, 8, 11], [5, 9, 11]]
        ],
        6 => [
            'win' => [1, 4, 13],
            'qin' => [[1, 7], [2, 13], [4, 6]],
            'trio' => [[1, 7, 11], [2, 4, 6], [2, 6, 13]]
        ],
        7 => [
            'win' => [7, 8, 11, 12],
            'qin' => [[2, 7], [7, 11], [8, 11], [9, 11], [9, 12]],
            'trio' => [[2, 7, 11], [3, 7, 11], [4, 9, 11], [7, 9, 12], [8, 10, 11]
        ],
        8 => [
            'win' => [7, 8],
            'qin' => [[1, 7], [4, 8]],
            'trio' => [[1, 7, 13], [4, 8, 11]]]
        ],
        9 => [
            'win' => [11],
            'qin' => [[8, 11]],
            'trio' => [[8, 10, 11]]
        ],
        10 => [
            'win' => [5, 9, 10],
            'qin' => [[5, 10], [9, 10]],
            'trio' => [[4, 5, 10], [5, 7, 8], [8, 9, 10]]
        ],
        11 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        12 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
    ],
    11 => [
        1 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        2 => [
            'win' => [1, 2],
            'qin' => [[1, 13], [2, 13]],
            'trio' => [[1, 12, 13], [2, 4, 13]]
        ],
        3 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        4 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        5 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        6 => [
            'win' => [4],
            'qin' => [[4, 6]],
            'trio' => [[4, 5, 6]]
        ],
        7 => [
            'win' => [5],
            'qin' => [[5, 11]],
            'trio' => [[3, 5, 11]]
        ],
        8 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        9 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        10 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        11 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        12 => [
            'win' => [12],
            'qin' => [[3, 12]],
            'trio' => [[3, 6, 12]]
        ],
        13 => [
            'win' => [],
            'qin' => [],
            'trio' => []
        ],
        14 => [
            'win' => [14],
            'qin' => [[6, 14]],
            'trio' => [[6, 11, 14]]
        ],
    ],

];


?>
