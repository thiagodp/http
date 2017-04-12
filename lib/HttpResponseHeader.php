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
	
	const ACCEPT = 'Accept';
	// e.g.: application/json
	
	const ACCEPT_CHARSET = 'Accept-Charset';
	// e.g.: iso-8859-5, unicode-1-1;q=0.8
	
	const ACCEPT_ENCODING = 'Accept-Encoding';
	// e.g.: compress, gzip
	
	const ACCEPT_LANGUAGE = 'Accept-Language';
	// e.g.: en, pt-br
	
	const ACCEPT_PATCH = 'Accept-Patch';
	// e.g.: text/html; charset=utf-8
	
	const ACCEPT_RANGES = 'Accept-Ranges';
	// e.g.: bytes
	

	// ACCESS CONTROL
	
	const ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';
	// e.g.: true
	
	const ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers';
	// e.g.: X-My-Custom-Header
	
	const ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods';
	// e.g.: POST, PUT
	
	const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';
	// e.g.: http://mysite.com
	
	const ACCESS_CONTROL_EXPOSE_HEADERS = 'Access-Control-Expose-Headers';
	// e.g.: X-My-Custom-Header, X-Another-Custom-Header
	
	const ACCESS_CONTROL_MAX_AGE = 'Access-Control-Max-Age';
	// e.g.: 60  <--- in seconds
	
	
	// COOKIE
	
	const SET_COOKIE = 'Set-Cookie';
	// e.g.: UserID=JohnDoe; Max-Age=3600; Version=1
	
	
	// CONTENT
	
	const CONTENT_DISPOSITION = 'Content-Disposition';
	// e.g.: attachment; filename="fname.ext"
	
	const CONTENT_ENCODING = 'Content-Encoding';
	// e.g.: gzip
	
	const CONTENT_LANGUAGE = 'Content-Language';
	// e.g.: en, pt-br
	
	const CONTENT_LENGTH = 'Content-Length';
	// e.g.: 10  <--- in bytes
	
	const CONTENT_LOCATION = 'Content-Location';
	// e.g.: /index.html
	
	const CONTENT_RANGE = 'Content-Range';
	// e.g.: bytes 21010-47021/47022
	
	const CONTENT_TYPE = 'Content-Type';
	// e.g.: text/html; charset=utf-8
	
		
	// INFORMATION

	const ALLOW = 'Allow';
	// e.g.: POST, PUT
	
	const AGE = 'Age';
	// e.g.: 60  <--- in seconds
	
	const CACHE_CONTROL = 'Cache-Control';
	// e.g.: no-cache
	
	const CONNECTION = 'Connection';
	// e.g.: close
	
	const DATE = 'Date';
	// e.g.: Tue, 15 Nov 1994 08:12:31 GMT (from RFC 7231)
	
	const ETAG = 'ETag';
	// e.g.: 737060cd8c284d8af7ad3082f209582d
	
	const EXPIRES = 'Expires';
	// e.g.: Tue, 15 Nov 1994 08:12:31 GMT (from RFC 7231)
	
	const LAST_MODIFIED = 'Last-Modified';
	// e.g.: Tue, 15 Nov 1994 08:12:31 GMT (from RFC 7231)
	
	const LINK = 'Link';
	// e.g.: </feed>; rel="alternate" (from RFC 5988)
	
	const LOCATION = 'Location';
	// e.g.: /index.html
	
	const PRAGMA = 'Pragma';
	// e.g.: no-cache
	
	const REFRESH = 'Refresh';
	// e.g.: 5; url=example.com/page.html
	
	const RETRY_AFTER = 'Retry-After';
	// e.g.: 120	<--- in seconds
	
	const SERVER = 'Server';
	// e.g.: Apache/2.4.1 (Unix)
	
	const STATUS = 'Status';
	// e.g.: 200 OK
	
	const UPGRADE = 'Upgrade';
	// e.g.: HTTP/2.0, SHTTP/1.3, IRC/6.9, RTA/x11
	
	const VARY = 'Vary';
	// e.g.: *
	
	const VIA = 'Via';
	// e.g.: 1.1 example.com (Apache/1.1)
	
	const WARNING = 'Warning';
	// e.g.: 199 Miscellaneous warning
	
	
	// TRANSFER
	
	const TRAILER = 'Trailer';
	// e.g.: Max-Forwards
	
	const TRANSFER_ENCODING = 'Transfer-Encoding';
	// e.g.: chunked
	
	
	// SECURITY
	
	const PUBLIC_KEY_PINS = 'Public-Key-Pins';
	// e.g.: max-age=2592000; pin-sha256="E9CZ9INDbd+2eRQozYqqbQ2yXLVKB9+xcprMF+44U1g=";
	
	const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';
	// e.g.: max-age=16070400; includeSubDomains
	
	const TRACKING_STATUS_VALUE = 'TSV';
	// e.g.: N
	
	const WWW_AUTHENTICATE = 'WWW-Authenticate';
	// e.g.: WWW-Authenticate: Basic
	
	const X_FRAME_OPTIONS = 'X-Frame-Options';
	// e.g.: deny
	// deprecated, see http://www.w3.org/TR/CSP11/#frame-ancestors-and-frame-options
	
	const FRAME_ANCESTORS = 'frame-ancestors';
	// see http://www.w3.org/TR/CSP11/#frame-ancestors-and-frame-options
	
	
	// UTIL - NON-STANDARD HEADERS
	
	const X_XSS_PROTECTION = 'X-XSS-Protection';
	// e.g.: 1; mode=block
	// see http://blogs.msdn.com/b/ie/archive/2008/07/02/ie8-security-part-iv-the-xss-filter.aspx
	
	const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';
	// e.g.: default-src 'self'
	// see http://www.w3.org/TR/CSP/
	
	const X_CONTENT_SECURITY_POLICY = 'X-Content-Security-Policy';
	// e.g.: default-src 'self'
	// see http://www.w3.org/TR/CSP/
	
	const X_WEBKIT_CSP = 'X-WebKit-CSP';
	// e.g.: default-src 'self'
	// see http://www.w3.org/TR/CSP/
	
	const X_CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';
	// e.g.: nosniff
	// see http://blogs.msdn.com/b/ie/archive/2008/09/02/ie8-security-part-vi-beta-2-update.aspx
	
	const X_POWERED_BY = 'X-Powered-By';
	// e.g.: PHP/5.4.0
	// see http://stackoverflow.com/questions/1288338/why-does-asp-net-framework-add-the-x-powered-byasp-net-http-header-in-response
	
	const X_UA_COMPATIBLE = 'X-UA-Compatible';
	// e.g.: IE=EmulateIE7
	// see http://msdn.microsoft.com/en-us/library/ie/cc288325%28v=vs.85%29.aspx#SetMode
	
	const X_CONTENT_DURATION = 'X-Content-Duration';
	// e.g.: 42.666
	// see https://developer.mozilla.org/en-US/docs/Web/HTTP/Configuring_servers_for_Ogg_media#Serve_X-Content-Duration_headers

}

?>