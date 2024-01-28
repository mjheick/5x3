<?php

class FiveByThree
{
	/**
	 * @var array
	 * A list of 256 three letter words. Thanks en.wiktionary.org
	 */
	private static $three = ["aad", "aah", "aak", "aal", "aba", "abb", "abo", "aby", "ace", "ach", "act", "add", "ado", "ads", "aft", "age",
		"ago", "aid", "aim", "air", "all", "and", "ant", "ape", "app", "apt", "arc", "arf", "ark", "arm", "ars", "art",
		"ash", "ass", "ate", "awe", "awk", "axe", "aye", "ayu", "bac", "bad", "bae", "bah", "bam", "ban", "bat", "bay",
		"baz", "bed", "beg", "ben", "bet", "bid", "big", "bin", "bix", "boa", "bog", "boi", "bop", "bot", "bow", "boy",
		"bra", "bro", "bud", "bug", "bum", "bus", "but", "buy", "bye", "cab", "cam", "can", "car", "cat", "caw", "chi",
		"cob", "cod", "cog", "con", "coo", "cop", "cum", "cwm", "dam", "die", "dig", "dim", "dog", "dry", "ego", "emo",
		"ess", "exe", "exy", "fad", "fag", "fam", "far", "fat", "few", "fin", "gal", "gap", "gas", "get", "ghi", "gin",
		"gum", "gun", "gut", "ham", "hat", "her", "hit", "hog", "hot", "how", "ich", "ick", "imu", "ivy", "jam", "kar",
		"las", "law", "lay", "lie", "lol", "low", "lox", "mag", "map", "mas", "mid", "mix", "mun", "nef", "nim", "nop",
		"now", "oak", "odd", "off", "pad", "pan", "pay", "pel", "pen", "pet", "pin", "pox", "pub", "pyx", "ram", "red",
		"red", "rod", "rye", "sac", "sad", "sig", "sin", "sit", "sny", "son", "sub", "ted", "tee", "tel", "tho", "til",
		"tin", "uck", "vai", "van", "var", "vat", "vau", "vav", "vee", "veg", "vet", "vex", "vie", "vig", "vim", "voe",
		"vow", "vox", "wad", "wae", "wag", "wap", "war", "was", "wat", "wax", "way", "web", "wee", "wen", "wet", "who",
		"why", "wig", "win", "wit", "wiz", "woe", "wok", "won", "woo", "wos", "wot", "wow", "wud", "wye", "wyn", "xat",
		"yah", "yak", "yam", "yar", "yaw", "yay", "yee", "yeh", "yen", "yep", "yet", "yew", "yex", "yin", "yip", "yob",
		"yok", "yon", "you", "yuk", "yum", "yup", "zag", "zax", "zed", "zee", "zen", "zho", "zig", "zip", "zit", "zoa"];

	/**
	 * @var array
	 * a list of acceptable characters to be used as "spacers", if a spacer is used
	 */
	private static $acceptable_spacers = [];

	/**
	 * Provides a 15-character (19 with spacer) human-readable something of some 5-letter binary data
	 *
	 * @param $data string containing 5 or more letters of data to encode
	 * @param $spacer string what character to put between the words. Only the first character matters.
	 * @return string encoded string
	 */
	public static function encode($data = '', $spacer = '')
	{
		/* We only want none or a 1-digit spacer */
		if (strlen($spacer) > 1)
		{
			$spacer = substr($spacer, 0, 1);
		}

		$data = substr($data, 0, 5);
		$encoded = '';
		for ($x = 0; $x < strlen($data); $x++)
		{
			if (strlen($encoded) > 0)
			{
				$encoded .= $spacer;
			}
			$idx = ord(substr($data, $x, 1));
			$encoded .= self::$three[$idx];
		}
		return $encoded;
	}
}
