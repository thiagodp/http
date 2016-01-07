<?php
namespace phputil;

/**
 *  Common charsets.
 *  
 *  @author	Thiago Delgado Pinto
 *  
 *  @see	http://www.iana.org/assignments/character-sets/character-sets.xhtml
 *  @see	https://en.wikipedia.org/wiki/Character_encoding
 *  @see	http://www.cs.tut.fi/~jkorpela/chars/sorted.html
 */
class Charset {
	
	// ASCII (7 bits)
	
	const ASCII			= 'ASCII';			// Alias for "US-ASCII", but the alias became more common than the original.
	
	// CODE PAGES (CP, 8-bits)
	
	// EBCDIC (8-bits)
	
	const EBCDIC		= 'EBCDIC';
	
	// ISO (8-bits)
	
	const ISO_8859_1	= 'ISO-8859-1'; 	// Western Europe
	const ISO_8859_2	= 'ISO-8859-2'; 	// Western Europe and Central Europe
	const ISO_8859_3	= 'ISO-8859-3'; 	// Western Europe and South European (Turkish, Maltese plus Esperanto)
	const ISO_8859_4	= 'ISO-8859-4'; 	// Western Europe and Baltic countries (Lithuania, Estonia, Latvia and Lapp)
	const ISO_8859_5	= 'ISO-8859-5'; 	// Cyrillic alphabet
	const ISO_8859_6	= 'ISO-8859-6'; 	// Arabic
	const ISO_8859_7	= 'ISO-8859-7'; 	// Greek
	const ISO_8859_8	= 'ISO-8859-8'; 	// Hebrew
	const ISO_8859_9	= 'ISO-8859-9'; 	// Western Europe with amended Turkish character set
	const ISO_8859_10	= 'ISO-8859-10';	// Western Europe with rationalised character set for Nordic languages, including complete Icelandic set
	const ISO_8859_11	= 'ISO-8859-11';	// Thai
	const ISO_8859_13	= 'ISO-8859-13';	// Baltic languages plus Polish
	const ISO_8859_14	= 'ISO-8859-14';	// Celtic languages (Irish Gaelic, Scottish, Welsh)
	const ISO_8859_15	= 'ISO-8859-15';	// Added the Euro sign and other rationalisations to ISO 8859-1
	const ISO_8859_16	= 'ISO-8859-16';	// Central, Eastern and Southern European languages (Albanian, Bosnian, Croatian, Hungarian, Polish, Romanian, Serbian and Slovenian, but also French, German, Italian and Irish Gaelic)
	
	// WINDOWS (8-bits)
	
	const WIN_1250		= 'windows-1250';	// Central European languages that use Latin script, (Polish, Czech, Slovak, Hungarian, Slovene, Serbian, Croatian, Bosnian, Romanian and Albanian)
	const WIN_1251		= 'windows-1251';	// Cyrillic alphabets
	const WIN_1252		= 'windows-1252';	// Western languages
	const WIN_1253		= 'windows-1253';	// Greek
	const WIN_1254		= 'windows-1254';	// Turkish
	const WIN_1255		= 'windows-1255';	// Hebrew
	const WIN_1256		= 'windows-1256';	// Arabic
	const WIN_1257		= 'windows-1257';	// Baltic languages
	const WIN_1258		= 'windows-1258';	// Vietnamese
	
	// UNICODE
	
	const UTF_8			= 'UTF-8';			// 8 bits
	const UTF_16		= 'UTF-16';			// 16 bits
	const UTF_32		= 'UTF-32';			// 32 bits

	// UTIL - ALIASES
	
	const LATIN_1		= 'latin1';			// Same as ISO-8859-1
	
}

?>