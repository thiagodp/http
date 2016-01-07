<?php

/**
 *  Common HTTP response headers.
 *  
 *  @author	Thiago Delgado Pinto
 *  
 *  @see	http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html
 *  @see	https://en.wikipedia.org/wiki/List_of_HTTP_header_fields
 */
class HttpResponseHeader {

	// Access control
	
	const ACCESS_CONTROL_ALLOW_CREDENTIALS	= 'Access-Control-Allow-Credentials';	// Ex: true
	const ACCESS_CONTROL_ALLOW_HEADERS		= 'Access-Control-Allow-Headers';		// Ex: X-My-Custom-Header
	const ACCESS_CONTROL_ALLOW_METHODS		= 'Access-Control-Allow-Methods';		// Ex: POST, PUT
	const ACCESS_CONTROL_ALLOW_ORIGIN		= 'Access-Control-Allow-Origin';		// Ex: http://mysite.com
	const ACCESS_CONTROL_EXPOSE_HEADERS		= 'Access-Control-Expose-Headers';		// Ex: X-My-Custom-Header, X-Another-Custom-Header
	const ACCESS_CONTROL_MAX_AGE			= 'Access-Control-Max-Age';				// Ex: 60  <--- in seconds
	
	// Accept
	
	const ACCEPT							= 'Accept';								// Ex: application/json
	const ACCEPT_CHARSET					= 'Accept-Charset';						// Ex: iso-8859-5, unicode-1-1;q=0.8
	const ACCEPT_ENCODING					= 'Accept-Encoding';					// Ex: compress, gzip
	const ACCEPT_LANGUAGE					= 'Accept-Language';					// Ex: en, pt-br
	const ACCEPT_PATCH						= 'Accept-Patch';						// Ex: text/html; charset=utf-8
	const ACCEPT_RANGES						= 'Accept-Ranges';						// Ex: bytes
	
	// Access
	
	const ALLOW								= 'Allow';								// Ex: POST, PUT
	const AGE								= 'Age';								// Ex: 60  <--- in seconds
	const AUTHORIZATION						= 'Authorization';						// Ex: bob:bobpass
	
	// Cache
	
	const CACHE-CONTROL						= 'Cache-Control';						// Ex: no-cache
	
	// Connection
	
	const CONNECTION						= 'Connection';							// Ex: close
	
	// Content
	
	const CONTENT_DISPOSITION				= 'Content-Disposition';				// Ex: attachment; filename="fname.ext"
	const CONTENT_ENCODING					= 'Content-Encoding';					// Ex: gzip
	const CONTENT_LANGUAGE					= 'Content-Language';					// Ex: en, pt-br
	const CONTENT_LENGTH					= 'Content-Length';						// Ex: 10  <--- in bytes
	const CONTENT_LOCATION					= 'Content-Location';					// Ex: /index.html
	const CONTENT_RANGE						= 'Content-Range';						// Ex: bytes 21010-47021/47022
	const CONTENT_TYPE						= 'Content-Type';						// Ex: text/html; charset=utf-8
	
	// ... TO-DO: add many others

}

?>