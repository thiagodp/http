<?php
namespace phputil;

/**
 *  Http status text.
 *  
 *  @author Thiago Delgado Pinto
 */
class HttpStatusText {

	// 1xx (informational)
	
	const CONTINUE_													= 'Continue';
	const SWITCHING_PROTOCOLS										= 'Switching Protocols';
	const PROCESSING												= 'Processing'; // RFC2518
	
	// 2xx (successful)
	
	const OK														= 'OK';
	const CREATED													= 'Created';
	const ACCEPTED													= 'Accepted';
	const NON_AUTHORITATIVE_INFORMATION								= 'Non-Authoritative Information';
	const NO_CONTENT												= 'No Content';
	const RESET_CONTENT												= 'Reset Content';
	const PARTIAL_CONTENT											= 'Partial Content';
	const MULTI_STATUS												= 'Multi-Status'; // RFC4918
	const ALREADY_REPORTED											= 'Already Reported'; // RFC5842
	const IM_USED													= 'IM Used'; // RFC3229
	
	// 3xx (redirection)
	
	const MULTIPLE_CHOICES											= 'Multiple Choices';
	const MOVED_PERMANENTLY											= 'Moved Permanently';
	const FOUND														= 'Found';
	const SEE_OTHER													= 'See Other';
	const NOT_MODIFIED												= 'Not Modified';
	const USE_PROXY													= 'Use Proxy';
	const RESERVED													= 'Reserved';
	const TEMPORARY_REDIRECT										= 'Temporary Redirect';
	const PERMANENTLY_REDIRECT										= 'Permanent Redirect';  // RFC7238
	
	// 4xx (client error)
	
	const BAD_REQUEST												= 'Bad Request';
	const UNAUTHORIZED												= 'Unauthorized';
	const PAYMENT_REQUIRED											= 'Payment Required';
	const FORBIDDEN													= 'Forbidden';
	const NOT_FOUND													= 'Not Found';
	const METHOD_NOT_ALLOWED										= 'Method Not Allowed';
	const NOT_ACCEPTABLE											= 'Not Acceptable';
	const PROXY_AUTHENTICATION_REQUIRED								= 'Proxy Authentication Required';
	const REQUEST_TIMEOUT											= 'Request Timeout';
	const CONFLICT													= 'Conflict';
	const GONE														= 'Gone';
	const LENGTH_REQUIRED											= 'Length Required';
	const PRECONDITION_FAILED										= 'Precondition Failed';
	const REQUEST_ENTITY_TOO_LARGE									= 'Request Entity Too Large';
	const REQUEST_URI_TOO_LONG										= 'Request URI Too Long';
	const UNSUPPORTED_MEDIA_TYPE									= 'Unsupported Media Type';
	const REQUESTED_RANGE_NOT_SATISFIABLE							= 'Request Range Not Satisfiable';
	const EXPECTATION_FAILED										= 'Expectation Failed';
	const I_AM_A_TEAPOT												= 'I\'m a teapot'; // RFC2324
	const UNPROCESSABLE_ENTITY										= 'Unprocessable Entity'; // RFC4918
	const LOCKED													= 'Locked'; // RFC4918
	const FAILED_DEPENDENCY											= 'Failed Dependency'; // RFC4918
	const RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS					= 'Reserved for WebDAV Advanced Collections'; // RFC2817
	const UPGRADE_REQUIRED											= 'Upgrade Required'; // RFC2817
	const PRECONDITION_REQUIRED										= 'Precondition Required'; // RFC6585
	const TOO_MANY_REQUESTS											= 'Too Many Requests'; // RFC6585
	const REQUEST_HEADER_FIELDS_TOO_LARGE							= 'Request Header Fields Too Large'; // RFC6585
	const UNAVAILABLE												= 'Unavailable'; // RFC to appear
	
	// 5xx (server error)
	
	const INTERNAL_SERVER_ERROR										= 'Internal Server Error';
	const NOT_IMPLEMENTED											= 'Not Implemented';
	const BAD_GATEWAY												= 'Bad Gateway';
	const SERVICE_UNAVAILABLE										= 'Service Unavailable';
	const GATEWAY_TIMEOUT											= 'Gateway Timeout';
	const VERSION_NOT_SUPPORTED										= 'HTTP Version Not Supported';
	const VARIANT_ALSO_NEGOTIATES									= 'Variant Also Negotiates'; // RFC2295
	const INSUFFICIENT_STORAGE										= 'Insufficient Storage'; // RFC4918
	const LOOP_DETECTED												= 'Loop Detected'; // RFC5842
	const NOT_EXTENDED												= 'Not Extended'; // RFC2774
	const NETWORK_AUTHENTICATION_REQUIRED							= 'Network Authentication Required'; // RFC6585
	
}

?>