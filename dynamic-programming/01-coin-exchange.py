# How many ways you can make the change of the given amount using the coin given. Suppose sufficient supply of coin.


class CoinExchange:
    def __init__(self, denominations):
        self.denominations = denominations

    def minChange(self, weight):
        if weight == 0:
            return 0
        v = float('inf')

        for i in self.denominations:
            if i > weight:
                continue
            v = min([self.minChange(weight - i)+1, v])
        return v


if __name__ == "__main__":
    print(CoinExchange([2, 3, 5, 10]).minChange(15))
