<?php

declare( strict_types = 1 );

namespace Wikibase\EDTF\Tests;

/**
 * Values taken from https://www.loc.gov/standards/datetime/
 */
class ValidEdtfStrings {

	public static function allFromStandard(): \Generator {
		yield from self::level0();
		yield from self::level1();
	}

	public static function level0(): \Generator {
		yield '1985-04-12';
		yield '1985-04';
		yield '1985';

		yield '1985-04-12T23:20:30';
		yield '1985-04-12T23:20:30Z';
		yield '1985-04-12T23:20:30-04';
		yield '1985-04-12T23:20:30+04:30';

		yield '1964/2008';
		yield '2004-06/2006-08';
		yield '2004-02-01/2005-02-08';
		yield '2004-02-01/2005-02';
		yield '2004-02-01/2005';
		yield '2005/2006-02';
	}

	public static function level1(): \Generator {
		yield 'Y170000002';
		yield 'Y-170000002';

		yield '2001-21';

		yield '1984?';
		yield '2004-06~';
		yield '2004-06-11%';

		yield '201X';
		yield '20XX';
		yield '2004-XX';
		yield '1985-04-XX';
		yield '1985-XX-XX';

		yield '1985-04-12/..';
		yield '1985-04/..';
		yield '1985/..';

		yield '../1985-04-12';
		yield '../1985-04';
		yield '../1985';

		yield '1985-04-12/';
		yield '1985-04/';
		yield '1985/';

		yield '/1985-04-12';
		yield '/1985-04';
		yield '/1985';

		yield '-1985';
	}

}