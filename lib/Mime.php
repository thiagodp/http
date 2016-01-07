<?php
namespace phputil;

/**
 *  Common MIME types.
 *  
 *  @author	Thiago Delgado Pinto
 *  
 *  @see	http://www.iana.org/assignments/media-types/media-types.xhtml
 *  @see	http://www.sitepoint.com/web-foundations/mime-types-complete-list/
 */
class Mime {
	
	// TEXT
	
	const HTML			= 'text/html';
	const JSON			= 'application/json';
	const RTF			= 'text/richtext';	
	const TEXT			= 'text/plain';
	const XML			= 'application/xml';

	
	// IMAGE
	
	const BMP			= 'image/bmp';
	const GIF			= 'image/gif';
	const JPG			= 'image/jpeg';
	const ICO			= 'image/x-icon';
	const PNG			= 'image/png';
	const TIFF			= 'image/tiff';
	
	// AUDIO
	
	const MIDI			= 'audio/midi';
	const MP3			= 'audio/mpeg3';
	const OGG			= 'audio/ogg';
	const WAV			= 'audio/wav';
	
	// VIDEO
	
	const AVI			= 'video/avi';
	const MP4			= 'application/mp4';
	
	// OFFICE APPLICATIONS
	
	const EPS			= 'application/postscript';
	const MSEXCEL		= 'application/excel';	
	const MSPOWERPOINT	= 'application/mspowerpoint';
	const MSWORD		= 'application/msword';
	const ODP			= 'application/vnd.oasis.opendocument.presentation';
	const ODS			= 'application/vnd.oasis.opendocument.spreadsheet';
	const ODT			= 'application/vnd.oasis.opendocument.text';
	const PDF			= 'application/pdf';
	
	// COMPRESSED/GROUPED
	
	const GZIP			= 'application/gzip';
	const TAR			= 'application/x-tar';
	const TGZ			= 'application/x-compressed';	
	const ZIP			= 'application/zip';
	
	// STREAM
	
	const EXE			= 'application/octet-stream';
	const STREAM		= 'application/octet-stream';
	
}

?>