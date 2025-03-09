## Hashset
* Each element in a HashSet must be unique.
* Addition, Lookups and removal takes only O(1)

```python
hashset  = set()
hashset.add(5)
if 5 in hashset:
    print("5 is present in map")
hashset.remove(5)
```

## Hashmap
* Each key in a dictionary must be unique
* Dictionary operations (like lookup, insertion, deletion) have an average time complexity of O(1)

```python
hashmap  = {
    "name": "Alice",
    "age": 25,
    "city": "New York"
}
# add keys
hashmap.update({"email": "tmgbedu@gmail.com"})

# Checking for existing
if "email" in hashmap:
    print("Email is present in map")

# delete from the hashmap    
del hashmap["email"]
```

## HashSet class

```python
class HashSet:
    def __init__(self, size =100):
        self.size = 100
        self.data = [None] * size

    def _hash(self, key):
        return key % self.size

    def add(self, key):
        index = self._hash(key)
        self.data[index] = key

    def has(self, key):
        index = self._hash(key)

        return self.data[index] is not None
```
