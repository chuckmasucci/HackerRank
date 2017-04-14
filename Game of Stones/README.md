# Game of Stones

## Problem
Two players (numbered `1` and `2`) are playing a game with `n` stones. Player `1` always plays first, and the two players move in alternating turns. The game's rules are as follows:

* In a single move, a player can remove either `2`, `3`, or `5` stones from the game board.
* If a player is unable to make a move, that player loses the game.

Given the number of stones, find and print the name of the winner (i.e., `First` or `Second`) on a new line. Each player plays optimally, meaning they will not make a move that causes them to lose the game if some better, winning move exists.

#### Input Format

The first line contains an integer, `T`, denoting the number of test cases.
Each of the `T` subsequent lines contains a single integer, `n`, denoting the number of stones in a test case.

#### Contraints
* `1 < T < 100`
* `1 < n < 100`

#### Output Format
On a new line for each test case, print `First` if the first player is the winner; otherwise, print `Second`.

[View and validate on HackerRank.com](https://www.hackerrank.com/challenges/game-of-stones-1)
