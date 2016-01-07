<?php
namespace phputil;

/**
 *  Common HTTP response headers.
 *  
 *  @author	Thiago Delgado Pinto
 *  
 *  @see	http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html
 *  @see	https://en.wikipedia.org/wiki/List_of_HTTP_header_fields
 */
class HttpResponseHeader {
	
	// ACCEPT
	
	const ACCEPT							= 'Accept';								// Ex: application/json
	const ACCEPT_CHARSET					= 'Accept-Charset';						// Ex: iso-8859-5, unicode-1-1;q=0.8
	const ACCEPT_ENCODING					= 'Accept-Encoding';					// Ex: compress, gzip
	const ACCEPT_LANGUAGE					= 'Accept-Language';					// Ex: en, pt-br
	const ACCEPT_PATCH						= 'Accept-Patch';						// Ex: text/html; charset=utf-8
	const ACCEPT_RANGES						= 'Accept-Ranges';						// Ex: bytes	

	// ACCESS CONTROL
	
	const ACCESS_CONTROL_ALLOW_CREDENTIALS	= 'Access-Control-Allow-Credentials';	// Ex: true
	const ACCESS_CONTROL_ALLOW_HEADERS		= 'Access-Control-Allow-Headers';		// Ex: X-My-Custom-Header
	const ACCESS_CONTROL_ALLOW_METHODS		= 'Access-Control-Allow-Methods';		// Ex: POST, PUT
	const ACCESS_CONTROL_ALLOW_ORIGIN		= 'Access-Control-Allow-Origin';		// Ex: http://mysite.com
	const ACCESS_CONTROL_EXPOSE_HEADERS		= 'Access-Control-Expose-Headers';		// Ex: X-My-Custom-Header, X-Another-Custom-Header
	const ACCESS_CONTROL_MAX_AGE			= 'Access-Control-Max-Age';				// Ex: 60  <--- in seconds
	
	// COOKIE
	
	const SET_COOKIE						= 'Set-Cookie';							// Ex: UserID=JohnDoe; Max-Age=3600; Version=1
	
	// CONTENT
	
	const CONTENT_DISPOSITION				= 'Content-Disposition';				// Ex: attachment; filename="fname.ext"
	const CONTENT_ENCODING					= 'Content-Encoding';					// Ex: gzip
	const CONTENT_LANGUAGE					= 'Content-Language';					// Ex: en, pt-br
	const CONTENT_LENGTH					= 'Content-Length';						// Ex: 10  <--- in bytes
	const CONTENT_LOCATION					= 'Content-Location';					// Ex: /index.html
	const CONTENT_RANGE						= 'Content-Range';						// Ex: bytes 21010-47021/47022
	const CONTENT_TYPE						= 'Content-Type';						// Ex: text/html; charset=utf-8
		
	// INFORMATION

	const ALLOW								= 'Allow';								// Ex: POST, PUT
	const AGE								= 'Age';								// Ex: 60  <--- in seconds
	const CACHE_CONTROL						= 'Cache-Control';						// Ex: no-cache
	const CONNECTION						= 'Connection';							// Ex: close
	const DATE								= 'Date';								// Ex: Tue, 15 Nov 1994 08:12:31 GMT (from RFC 7231)
	const ETAG								= 'ETag';								// Ex: 737060cd8c284d8af7ad3082f209582d
	const EXPIRES							= 'Expires';							// Ex: Tue, 15 Nov 1994 08:12:31 GMT (from RFC 7231)
	const LAST_MODIFIED						= 'Last-Modified';						// Ex: Tue, 15 Nov 1994 08:12:31 GMT (from RFC 7231)
	const LINK								= 'Link';								// Ex: </feed>; rel="alternate" (from RFC 5988)
	const LOCATION							= 'Location';							// Ex: /index.html
	const PRAGMA							= 'Pragma';								// Ex: no-cache
	const REFRESH							= 'Refresh';							// Ex: 5; url=example.com/page.html
	const RETRY_AFTER						= 'Retry-After';						// Ex: 120	<--- seconds
	const SERVER							= 'Server';								// Ex: Apache/2.4.1 (Unix)
	const STATUS							= 'Status';								// Ex: 200 OK
	const UPGRADE							= 'Upgrade';							// Ex: HTTP/2.0, SHTTP/1.3, IRC/6.9, RTA/x11
	const VARY								= 'Vary';								// Ex: *
	const VIA								= 'Via';								// Ex: 1.1 example.com (Apache/1.1)
	const WARNING							= 'Warning';							// Ex: 199 Miscellaneous warning
	
	// TRANSFER
	
	const TRAILER							= 'Trailer';							// Ex: Max-Forwards
	const TRANSFER_ENCODING					= 'Transfer-Encoding';					// Ex: chunked
	
	// SECURITY
	
	const PUBLIC_KEY_PINS					= 'Public-Key-Pins';					// Ex: max-age=2592000; pin-sha256="E9CZ9INDbd+2eRQozYqqbQ2yXLVKB9+xcprMF+44U1g=";	
	const STRICT_TRANSPORT_SECURITY			= 'Strict-Transport-Security';			// Ex: max-age=16070400; includeSubDomains
	const TRACKING_STATUS_VALUE				= 'TSV';								// Ex: N
	const WWW_AUTHENTICATE					= 'WWW-Authenticate';					// Ex: WWW-Authenticate: Basic
	const X_FRAME_OPTIONS					= 'X-Frame-Options';					// Ex: deny (deprecated, see http://www.w3.org/TR/CSP11/#frame-ancestors-and-frame-options)
	const FRAME_ANCESTORS					= 'frame-ancestors';					// see http://www.w3.org/TR/CSP11/#frame-ancestors-and-frame-options
	
	
	// UTIL - NON-STANDARD HEADERS ____________________________________________
	
	const X_XSS_PROTECTION					= 'X-XSS-Protection';					// Ex: 1; mode=block (see http://blogs.msdn.com/b/ie/archive/2008/07/02/ie8-security-part-iv-the-xss-filter.aspx)
	
	const CONTENT_SECURITY_POLICY			= 'Content-Security-Policy';			// Ex: default-src 'self' (see http://www.w3.org/TR/CSP/)
	const X_CONTENT_SECURITY_POLICY			= 'X-Content-Security-Policy';			// Ex: default-src 'self' (see http://www.w3.org/TR/CSP/)
	const X_WEBKIT_CSP						= 'X-WebKit-CSP';						// Ex: default-src 'self' (see http://www.w3.org/TR/CSP/)
	
	const X_CONTENT_TYPE_OPTIONS			= 'X-Content-Type-Options';				// Ex: nosniff (see http://blogs.msdn.com/b/ie/archive/2008/09/02/ie8-security-part-vi-beta-2-update.aspx)
	
	const X_POWERED_BY						= 'X-Powered-By';						// Ex: PHP/5.4.0 (see http://stackoverflow.com/questions/1288338/why-does-asp-net-framework-add-the-x-powered-byasp-net-http-header-in-response)
	
	const X_UA_COMPATIBLE					= 'X-UA-Compatible';					// Ex: IE=EmulateIE7 (see http://msdn.microsoft.com/en-us/library/ie/cc288325%28v=vs.85%29.aspx#SetMode)
	
	const X_CONTENT_DURATION				= 'X-Content-Duration';					// Ex: 42.666 (see https://developer.mozilla.org/en-US/docs/Web/HTTP/Configuring_servers_for_Ogg_media#Serve_X-Content-Duration_headers)

}

?>