# HTTP

This library provides:

 * Common HTTP charsets.
 * HTTP response headers, including common non-standard headers.
 * HTTP status codes and status texts.
 * Common MIME types.
 * Common encoding/compression formats.
 
We recommend you using it with the [PSR-7](http://www.php-fig.org/psr/psr-7/).


This project uses [semantic versioning](http://semver.org/). See [our releases](https://github.com/thiagodp/http/releases).

Classes:

* [phputil\Charset](https://github.com/thiagodp/http/blob/master/lib/Charset.php)
* [phputil\Mime](https://github.com/thiagodp/http/blob/master/lib/Mime.php)
* [phputil\Encoding](https://github.com/thiagodp/http/blob/master/lib/Encoding.php)
* [phputil\HttpResponseHeader](https://github.com/thiagodp/http/blob/master/lib/HttpResponseHeader.php)
* [phputil\HttpStatus](https://github.com/thiagodp/http/blob/master/lib/HttpStatus.php)
* [phputil\HttpStatusText](https://github.com/thiagodp/http/blob/master/lib/HttpStatusText.php)


### Installation

```command
composer require phputil/http
```
