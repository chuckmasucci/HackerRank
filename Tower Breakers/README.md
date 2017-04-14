# Tower Breakers

## Problem
Two players (numbered `1` and `2`) are playing a game of Tower Breakers! The rules of the game are as follows:

* Player `1` always moves first, and both players always play optimally.
* Initially there are `N` towers, where each tower is of height `M`.
* The players move in alternating turns. In each turn, a player can choose a tower of height `X` and reduce its height to `Y`, where `1 < Y < X` and `Y` evenly divides `X`.
* If the current player is unable to make any move, they lose the game.

Given the values of `N` and `M`, can you determine who will win? If the first player wins, print `1`; otherwise, print `2`.

#### Input Format
The first line contains a single integer, `T`, denoting the number of test cases.
Each of the `T` subsequent lines describes a test case in the form of `2` space-separated integers describing the respective values for `N` and `M`.

#### Constraints
* `1 < T < 100`
* `1 < N,M < 10^6`

#### Output Format
For each test case, print a single integer (i.e., either `1` or `2`) denoting the winner on a new line.

[View and validate on HackerRank.com](https://www.hackerrank.com/challenges/tower-breakers-1)
