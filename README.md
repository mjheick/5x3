# FiveByThree

Make 5 3-letter words for a unique readable hash

# Source

(https://en.wiktionary.org/wiki/Category:English_three-letter_words)

# Testing

```
php -r '
include("FiveByThree.php");
$zeroes = chr(0) . chr(0) . chr(0) . chr(0) . chr(0);
$ones = chr(255) . chr(255) . chr(255) . chr(255) . chr(255);
/* aadaadaadaadaad */
var_export(FiveByThree::encode($zeroes));
/* zoa.zoa.zoa.zoa.zoa */
var_export(FiveByThree::encode($ones, "."));
/* ban-bid-hot-ben-ban */
var_export(FiveByThree::encode("-5x3-", "-.~"));
/* 430d9: bet-ben-baz-fag-boa */
var_export(FiveByThree::encode(hash("sha256", "-5x3-"), "-.~"));
/* 43,0d,93,cb,24: bug-ads-off-web-awk */
var_export(FiveByThree::encode(hash("sha256", "-5x3-", true), "-.~"));
'
```

