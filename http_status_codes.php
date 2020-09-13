<?php

namespace constants\HTTP;
class ResponseCode {
    const KEY_DESCRIPTION   = 'description';
    const KEY_CODE          = 'code';
    
    const HTTP_STATUS_CODE_100_CONTINUE = [
      self::KEY_CODE        =>   100,
      self::KEY_DESCRIPTION => "CONTINUE"
    ];
    const HTTP_STATUS_CODE_101_SWITCHING_PROTOCOLS = [
      self::KEY_CODE        =>   101,
      self::KEY_DESCRIPTION => "SWITCHING PROTOCOLS"
    ];
    const HTTP_STATUS_CODE_102_PROCESSING = [
      self::KEY_CODE        =>   102,
      self::KEY_DESCRIPTION => "PROCESSING"
    ];
    const HTTP_STATUS_CODE_200_OK = [
      self::KEY_CODE        =>   200,
      self::KEY_DESCRIPTION => "OK"
    ];
    const HTTP_STATUS_CODE_201_CREATED = [
      self::KEY_CODE        =>   201,
      self::KEY_DESCRIPTION => "CREATED"
    ];
    const HTTP_STATUS_CODE_202_ACCEPTED = [
      self::KEY_CODE        =>   202,
      self::KEY_DESCRIPTION => "ACCEPTED"
    ];
    const HTTP_STATUS_CODE_203_NON_AUTHORITATIVE_INFORMATION = [
      self::KEY_CODE        =>   203,
      self::KEY_DESCRIPTION => "NON-AUTHORITATIVE INFORMATION"
    ];
    const HTTP_STATUS_CODE_204_NO_CONTENT = [
      self::KEY_CODE        =>   204,
      self::KEY_DESCRIPTION => "NO CONTENT"
    ];
    const HTTP_STATUS_CODE_205_RESET_CONTENT = [
      self::KEY_CODE        =>   205,
      self::KEY_DESCRIPTION => "RESET CONTENT"
    ];
    const HTTP_STATUS_CODE_206_PARTIAL_CONTENT = [
      self::KEY_CODE        =>   206,
      self::KEY_DESCRIPTION => "PARTIAL CONTENT"
    ];
    const HTTP_STATUS_CODE_207_MULTI_STATUS = [
      self::KEY_CODE        =>   207,
      self::KEY_DESCRIPTION => "MULTI-STATUS"
    ];
    const HTTP_STATUS_CODE_208_ALREADY_REPORTED = [
      self::KEY_CODE        =>   208,
      self::KEY_DESCRIPTION => "ALREADY REPORTED"
    ];
    const HTTP_STATUS_CODE_226_IM_USED = [
      self::KEY_CODE        =>   226,
      self::KEY_DESCRIPTION => "IM USED"
    ];
    const HTTP_STATUS_CODE_300_MULTIPLE_CHOICES = [
      self::KEY_CODE        =>   300,
      self::KEY_DESCRIPTION => "MULTIPLE CHOICES"
    ];
    const HTTP_STATUS_CODE_301_MOVED_PERMANENTLY = [
      self::KEY_CODE        =>   301,
      self::KEY_DESCRIPTION => "MOVED PERMANENTLY"
    ];
    const HTTP_STATUS_CODE_302_FOUND = [
      self::KEY_CODE        =>   302,
      self::KEY_DESCRIPTION => "FOUND"
    ];
    const HTTP_STATUS_CODE_303_SEE_OTHER = [
      self::KEY_CODE        =>   303,
      self::KEY_DESCRIPTION => "SEE OTHER"
    ];
    const HTTP_STATUS_CODE_304_NOT_MODIFIED = [
      self::KEY_CODE        =>   304,
      self::KEY_DESCRIPTION => "NOT MODIFIED"
    ];
    const HTTP_STATUS_CODE_305_USE_PROXY = [
      self::KEY_CODE        =>   305,
      self::KEY_DESCRIPTION => "USE PROXY"
    ];
    const HTTP_STATUS_CODE_306_ = [
      self::KEY_CODE        =>   306,
      self::KEY_DESCRIPTION => "(UNUSED)"
    ];
    const HTTP_STATUS_CODE_307_TEMPORARY_REDIRECT = [
      self::KEY_CODE        =>   307,
      self::KEY_DESCRIPTION => "TEMPORARY REDIRECT"
    ];
    const HTTP_STATUS_CODE_308_PERMANENT_REDIRECT = [
      self::KEY_CODE        =>   308,
      self::KEY_DESCRIPTION => "PERMANENT REDIRECT"
    ];
    const HTTP_STATUS_CODE_400_BAD_REQUEST = [
      self::KEY_CODE        =>   400,
      self::KEY_DESCRIPTION => "BAD REQUEST"
    ];
    const HTTP_STATUS_CODE_401_UNAUTHORIZED = [
      self::KEY_CODE        =>   401,
      self::KEY_DESCRIPTION => "UNAUTHORIZED"
    ];
    const HTTP_STATUS_CODE_402_PAYMENT_REQUIRED = [
      self::KEY_CODE        =>   402,
      self::KEY_DESCRIPTION => "PAYMENT REQUIRED"
    ];
    const HTTP_STATUS_CODE_403_FORBIDDEN = [
      self::KEY_CODE        =>   403,
      self::KEY_DESCRIPTION => "FORBIDDEN"
    ];
    const HTTP_STATUS_CODE_404_NOT_FOUND = [
      self::KEY_CODE        =>   404,
      self::KEY_DESCRIPTION => "NOT FOUND"
    ];
    const HTTP_STATUS_CODE_405_METHOD_NOT_ALLOWED = [
      self::KEY_CODE        =>   405,
      self::KEY_DESCRIPTION => "METHOD NOT ALLOWED"
    ];
    const HTTP_STATUS_CODE_406_NOT_ACCEPTABLE = [
      self::KEY_CODE        =>   406,
      self::KEY_DESCRIPTION => "NOT ACCEPTABLE"
    ];
    const HTTP_STATUS_CODE_407_PROXY_AUTHENTICATION_REQUIRED = [
      self::KEY_CODE        =>   407,
      self::KEY_DESCRIPTION => "PROXY AUTHENTICATION REQUIRED"
    ];
    const HTTP_STATUS_CODE_408_REQUEST_TIMEOUT = [
      self::KEY_CODE        =>   408,
      self::KEY_DESCRIPTION => "REQUEST TIMEOUT"
    ];
    const HTTP_STATUS_CODE_409_CONFLICT = [
      self::KEY_CODE        =>   408,
      self::KEY_DESCRIPTION => "CONFLICT"
    ];
    const HTTP_STATUS_CODE_410_GONE = [
      self::KEY_CODE        =>   410,
      self::KEY_DESCRIPTION => "GONE"
    ];
    const HTTP_STATUS_CODE_411_LENGTH_REQUIRED = [
      self::KEY_CODE        =>   411,
      self::KEY_DESCRIPTION => "LENGTH REQUIRED"
    ];
    const HTTP_STATUS_CODE_412_PRECONDITION_FAILED = [
      self::KEY_CODE        =>   412,
      self::KEY_DESCRIPTION => "PRECONDITION FAILED"
    ];
    const HTTP_STATUS_CODE_413_PAYLOAD_TOO_LARGE = [
      self::KEY_CODE        =>   413,
      self::KEY_DESCRIPTION => "PAYLOAD TOO LARGE"
    ];
    const HTTP_STATUS_CODE_414_URI_TOO_LONG = [
      self::KEY_CODE        =>   414,
      self::KEY_DESCRIPTION => "URI TOO LONG"
    ];
    const HTTP_STATUS_CODE_415_UNSUPPORTED_MEDIA_TYPE = [
      self::KEY_CODE        =>   415,
      self::KEY_DESCRIPTION => "UNSUPPORTED MEDIA TYP"
    ];
    const HTTP_STATUS_CODE_416_RANGE_NOT_SATISFIABLE = [
      self::KEY_CODE        =>   416,
      self::KEY_DESCRIPTION => "RANGE NOT SATISFIABLE"
    ];
    const HTTP_STATUS_CODE_417_EXPECTATION_FAILED = [
      self::KEY_CODE        =>   417,
      self::KEY_DESCRIPTION => "EXPECTATION FAILED"
    ];
    const HTTP_STATUS_CODE_421_MISDIRECTED_REQUEST = [
      self::KEY_CODE        =>   421,
      self::KEY_DESCRIPTION => "MISDIRECTED REQUEST"
    ];
    const HTTP_STATUS_CODE_422_UNPROCESSABLE_ENTITY = [
      self::KEY_CODE        =>   422,
      self::KEY_DESCRIPTION => "UNPROCESSABLE ENTITY"
    ];
    const HTTP_STATUS_CODE_423_LOCKED = [
      self::KEY_CODE        =>   423,
      self::KEY_DESCRIPTION => "LOCKED"
    ];
    const HTTP_STATUS_CODE_424_FAILED_DEPENDENCY = [
      self::KEY_CODE        =>   424,
      self::KEY_DESCRIPTION => "FAILED DEPENDENCY"
    ];
    const HTTP_STATUS_CODE_425_TOO_EARLY = [
      self::KEY_CODE        =>   425,
      self::KEY_DESCRIPTION => "TOO EARLY"
    ];
    const HTTP_STATUS_CODE_426_UPGRADE_REQUIRED = [
      self::KEY_CODE        =>   426,
      self::KEY_DESCRIPTION => "UPGRADE REQUIRED"
    ];
    const HTTP_STATUS_CODE_428_PRECONDITION_REQUIRED = [
      self::KEY_CODE        =>   428,
      self::KEY_DESCRIPTION => "PRECONDITION REQUIRED"
    ];
    const HTTP_STATUS_CODE_429_TOO_MANY_REQUESTS = [
      self::KEY_CODE        =>   429,
      self::KEY_DESCRIPTION => "TOO MANY REQUEST"
    ];
    const HTTP_STATUS_CODE_431_REQUEST_HEADER_FIELDS_TOO_LARGE = [
      self::KEY_CODE        =>   431,
      self::KEY_DESCRIPTION => "REQUEST HEADER FIELDS TOO LARGE"
    ];
    const HTTP_STATUS_CODE_500_INTERNAL_SERVER_ERROR = [
      self::KEY_CODE        =>   500,
      self::KEY_DESCRIPTION => "INTERNAL SERVER ERROR"
    ];
    const HTTP_STATUS_CODE_501_NOT_IMPLEMENTED = [
      self::KEY_CODE        =>   501,
      self::KEY_DESCRIPTION => "NOT IMPLEMENTED"
    ];
    const HTTP_STATUS_CODE_502_BAD_GATEWAY = [
      self::KEY_CODE        =>   502,
      self::KEY_DESCRIPTION => "BAD GATEWAY"
    ];
    const HTTP_STATUS_CODE_503_SERVICE_UNAVAILABLE = [
      self::KEY_CODE        =>   503,
      self::KEY_DESCRIPTION => "SERVICE UNAVAILABLE"
    ];
    const HTTP_STATUS_CODE_504_GATEWAY_TIMEOUT = [
      self::KEY_CODE        =>   504,
      self::KEY_DESCRIPTION => "GATEWAY TIMEOUT"
    ];
    const HTTP_STATUS_CODE_505_HTTP_VERSION_NOT_SUPPORTED = [
      self::KEY_CODE        =>   505,
      self::KEY_DESCRIPTION => "HTTP VERSION NOT SUPPORTED"
    ];
    const HTTP_STATUS_CODE_506_VARIANT_ALSO_NEGOTIATES = [
      self::KEY_CODE        =>   506,
      self::KEY_DESCRIPTION => "VARIANT ALSO NEGOTIATES"
    ];
    const HTTP_STATUS_CODE_507_INSUFFICIENT_STORAGE = [
      self::KEY_CODE        =>   507,
      self::KEY_DESCRIPTION => "INSUFFICIENT STORAGE"
    ];
    const HTTP_STATUS_CODE_508_LOOP_DETECTED = [
      self::KEY_CODE        =>   508,
      self::KEY_DESCRIPTION => "LOOP DETECTED"
    ];
    const HTTP_STATUS_CODE_510_NOT_EXTENDED = [
      self::KEY_CODE        =>   510,
      self::KEY_DESCRIPTION => "NOT EXTENDED"
    ];
    const HTTP_STATUS_CODE_511_NETWORK_AUTHENTICATION_REQUIRED = [
      self::KEY_CODE        =>   511,
      self::KEY_DESCRIPTION => "NETWORK AUTHENTICATION REQUIRED"
    ];
  }