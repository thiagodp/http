<?php
namespace phputil;

/**
 *  Common encoding/compression formats.
 *  
 *  @author	Thiago Delgado Pinto
 *  
 *  @see	https://en.wikipedia.org/wiki/HTTP_compression
 *  @see	https://www.iana.org/assignments/http-parameters/http-parameters.xhtml
 */
class Encoding { // a.k.a Compression
	
	const GZIP = 'gzip'; // GZIP file format (RFC1952)
	
	const DEFLATE = 'deflate'; // Compressed data (RFC1951) inside the "zlib" data format (RFC1950)
	const EXI = 'exi'; // W3C Efficient XML Interchange
	const PACK200 = 'pack200-gzip'; // Network Transfer Format for Java Archives (JAR)
	
	// EXTRA
	
	const BR = 'br'; // Brotli, an open-sourced compression algorithm created by Mozilla
	const BZIP2 = 'bzip2'; // Compression based on the free bzip2 format, supported by lighttpd.
	const LZMA = 'lzma'; // Open-sourced compression algorithm
	
}
?>