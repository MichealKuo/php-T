


---------------------
2021-08-09
請問為什麼href 後面從 ?page 開始就好, 不是整個url ?

https://localhost/mfee19-php/proj/data-list.php?page=2#abcd

protocol
domain
port
path
query string
hash

1. 完整的 URL
https://localhost/mfee19-php/proj/data-list.php?page=2#abcd

2. 省略協定 (使用相同的協定)
//localhost/mfee19-php/proj/data-list.php?page=2#abcd

3. 省略主機名稱 (在相同的主機)
/mfee19-php/proj/data-list.php?page=2#abcd

4. 只留 query string (使用相同的路徑)
?page=2#abcd

5. 只留 hash (使用相同的 query string)
#abcd
---------------------