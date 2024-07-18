package Graph;

import java.util.Queue;
import java.util.LinkedList;

public class BFS {
    public static void main(String[] args) {
        int[][] g = {{0, 0, 0, 0, 0, 0, 0}, // Will ignore 0th row
                {0, 0, 1, 1, 0, 0, 0},
                {0, 1, 0, 0, 1, 0, 0},
                {0, 1, 0, 0, 1, 0, 0},
                {0, 0, 1, 1, 0, 1, 1},
                {0, 0, 0, 0, 1, 0, 0},
                {0, 0, 0, 0, 1, 0, 0}};

        int start = 4;
        System.out.print(start);
        Queue<Integer> queue = new LinkedList<Integer>();
        int[] visited = {0, 0, 0, 0, 0, 0, 0};

        // Initiated with inserting first
        queue.add(start);
        visited[start] = 1;

        while (!queue.isEmpty()) {
            int i = queue.remove();
            for (int j = 0; j < 7; j++) {
                if (g[i][j] == 1 && visited[j] == 0) {
                    System.out.print(j);
                    visited[j] = 1;
                    queue.add(j);
                }
            }
        }
    }
}
