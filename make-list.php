<?php
/* Take a list of 3-letter words in $words and gives me 256 of them */
$words = [
"aad", "aah", "aak", "aal", "aam", "aba", "abb", "abo",
"abs", "aby", "ace", "ach", "ack", "act", "add", "ado",
"ads", "adz", "aft", "age", "ago", "aha", "aid", "aim",
"air", "ale", "all", "and", "ant", "any", "ape", "app",
"apt", "arc", "are", "arf", "ark", "arm", "aro", "ars",
"art", "ash", "ask", "ass", "ate", "awe", "awk", "aww",
"axe", "aye", "ayu", "baa", "bac", "bad", "bae", "bag",
"bah", "bam", "ban", "bar", "bat", "bay", "baz", "bed",
"bee", "beg", "ben", "bet", "bib", "bid", "big", "bin",
"bit", "bix", "boa", "bog", "boi", "boo", "bop", "bot",
"bow", "box", "boy", "bra", "bro", "brr", "bud", "bug",
"bum", "bun", "bus", "but", "buy", "bye", "bzz", "cab",
"cam", "can", "cap", "car", "cat", "caw", "cel", "chi",
"cob", "cod", "cog", "com", "con", "coo", "cop", "cot",
"cum", "cwm", "dam", "der", "die", "dig", "dim", "din",
"dog", "dry", "ego", "emo", "erg", "ess", "exe", "exy",
"fab", "fad", "fag", "fam", "fan", "far", "fat", "few",
"fin", "fit", "gal", "gap", "gas", "gel", "get", "ghi",
"gin", "goy", "gum", "gun", "gut", "guy", "ham", "hat",
"her", "hit", "hod", "hog", "hot", "how", "hut", "ich",
"ick", "imu", "ire", "ivy", "jam", "kar", "kin", "las",
"law", "lay", "lie", "lin", "lol", "low", "lox", "mad",
"mag", "map", "mas", "max", "mid", "mix", "mun", "nef",
"nil", "nim", "nop", "now", "nun", "oak", "odd", "off",
"oho", "pad", "pan", "pay", "peg", "pel", "pen", "pet",
"pin", "pix", "pox", "pub", "pyx", "qin", "ram", "red",
"red", "rim", "rod", "rye", "sac", "sad", "sen", "sig",
"sin", "sit", "sly", "sny", "son", "sub", "sun", "ted",
"tee", "tel", "the", "tho", "til", "tin", "uck", "vac",
"vai", "van", "var", "vas", "vat", "vau", "vav", "vaw",
"vee", "veg", "vet", "vex", "via", "vie", "vig", "vim",
"vis", "voe", "vow", "vox", "vug", "wad", "wae", "wag",
"wan", "wap", "war", "was", "wat", "waw", "wax", "way",
"web", "wed", "wee", "wen", "wet", "wha", "who", "why",
"wig", "win", "wis", "wit", "wiz", "woe", "wog", "wok",
"won", "woo", "wop", "wos", "wot", "wow", "wry", "wud",
"wye", "wyn", "xat", "xis", "yah", "yak", "yam", "yap",
"yar", "yaw", "yay", "yea", "yee", "yeh", "yen", "yep",
"yes", "yet", "yew", "yex", "yid", "yin", "yip", "yob",
"yod", "yok", "yon", "you", "yow", "yuk", "yum", "yup",
"zag", "zap", "zax", "zed", "zee", "zek", "zen", "zho",
"zig", "zin", "zip", "zit", "zoa", "zoo"];

$pointer = 0;
$increment = count($words) / 256;
for ($x = 0; $x < 256; $x++) {
	echo $words[intval($pointer)] . "\n";
	$pointer += $increment;
}
