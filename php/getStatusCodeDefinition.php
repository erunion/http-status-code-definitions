<?php

/**
 * Return the appropriate HTTP definition for a given status code.
 *
 * This list was taken from status_lines in http_protocol.c in the Apache
 * source.
 *
 * @author Jon Ursenbach <jon@gdgt.com>
 *
 * @return string status code definition
 */
function getStatusCodeDefinition($status_code) {
  switch ($status_code) {
    // 1xx Informational
    case 100: return 'Continue'; break;
    case 101: return 'Switching Protocols'; break;
    case 102: return 'Processing'; break;

    // 2xx Success
    case 200: return 'OK'; break;
    case 201: return 'Created'; break;
    case 202: return 'Accepted'; break;
    case 203: return 'Non-Authoritative Information'; break;
    case 204: return 'No Content'; break;
    case 205: return 'Reset Content'; break;
    case 206: return 'Partial Content'; break;
    case 207: return 'Multi-Status'; break;

    // 3xx Redirection
    case 300: return 'Multiple Choices'; break;
    case 301: return 'Moved Permanently'; break;
    case 302: return 'Found'; break;
    case 303: return 'See Other'; break;
    case 304: return 'Not Modified'; break;
    case 305: return 'Use Proxy'; break;
    case 307: return 'Temporary Redirect'; break;

    // 4xx Client Error
    case 400: return 'Bad Request'; break;
    case 401: return 'Authorization Required'; break;
    case 402: return 'Payment Required'; break;
    case 403: return 'Forbidden'; break;
    case 404: return 'Not Found'; break;
    case 405: return 'Method Not Allowed'; break;
    case 406: return 'Not Acceptable'; break;
    case 407: return 'Proxy Authentication Required'; break;
    case 408: return 'Request Time-out'; break;
    case 409: return 'Conflict'; break;
    case 410: return 'Gone'; break;
    case 411: return 'Length Required'; break;
    case 412: return 'Precondition Failed'; break;
    case 413: return 'Request Entity Too Large'; break;
    case 414: return 'Request-URI Too Large'; break;
    case 415: return 'Unsupported Media Type'; break;
    case 416: return 'Requested Range Not Satisfiable'; break;
    case 417: return 'Expectation Failed'; break;
    case 422: return 'Unprocessable Entity'; break;
    case 423: return 'Locked'; break;
    case 424: return 'Failed Dependency'; break;
    case 426: return 'Upgrade Required'; break;

    // 5xx Server Error
    case 500: return 'Internal Server Error'; break;
    case 501: return 'Method Not Implemented'; break;
    case 502: return 'Bad Gateway'; break;
    case 503: return 'Service Temporarily Unavailable'; break;
    case 504: return 'Gateway Time-out'; break;
    case 505: return 'HTTP Version Not Supported'; break;
    case 506: return 'Variant Also Negotiates'; break;
    case 507: return 'Insufficient Storage'; break;
    case 510: return 'Not Extended'; break;
  }
}
