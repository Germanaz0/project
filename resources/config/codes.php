<?php

return [
    'errors' => [
        /**
         * DEFAULT ERRORS DOMAIN
         */
        'default'  => [
            'codes'        => [
                'OK'                       => 0,
                'UNSUPPORTED_PROTOCOL'     => 1,
                'FAILED_INIT'              => 2,
                'URL_MALFORMAT'            => 3,
                'NOT_BUILT_IN'             => 4,
                'COULDNT_RESOLVE_PROXY'    => 5,
                'COULDNT_RESOLVE_HOST'     => 6,
                'COULDNT_CONNECT'          => 7,
                'FTP_WEIRD_SERVER_REPLY'   => 8,
                'REMOTE_ACCESS_DENIED'     => 9,
                'FTP_ACCEPT_FAILED'        => 10,
                'FTP_WEIRD_PASS_REPLY'     => 11,
                'FTP_ACCEPT_TIMEOUT'       => 12,
                'FTP_WEIRD_PASV_REPLY'     => 13,
                'FTP_WEIRD_227_FORMAT'     => 14,
                'FTP_CANT_GET_HOST'        => 15,
                'HTTP2'                    => 16,
                'FTP_COULDNT_SET_TYPE'     => 17,
                'PARTIAL_FILE'             => 18,
                'FTP_COULDNT_RETR_FILE'    => 19,
                'QUOTE_ERROR'              => 21,
                'HTTP_RETURNED_ERROR'      => 22,
                'WRITE_ERROR'              => 23,
                'UPLOAD_FAILED'            => 25,
                'READ_ERROR'               => 26,
                'OUT_OF_MEMORY'            => 27,
                'OPERATION_TIMEDOUT'       => 28,
                'FTP_PORT_FAILED'          => 30,
                'FTP_COULDNT_USE_REST'     => 31,
                'RANGE_ERROR'              => 33,
                'HTTP_POST_ERROR'          => 34,
                'SSL_CONNECT_ERROR'        => 35,
                'BAD_DOWNLOAD_RESUME'      => 36,
                'FILE_COULDNT_READ_FILE'   => 37,
                'LDAP_CANNOT_BIND'         => 38,
                'LDAP_SEARCH_FAILED'       => 39,
                'FUNCTION_NOT_FOUND'       => 41,
                'ABORTED_BY_CALLBACK'      => 42,
                'BAD_FUNCTION_ARGUMENT'    => 43,
                'INTERFACE_FAILED'         => 45,
                'TOO_MANY_REDIRECTS'       => 47,
                'UNKNOWN_OPTION'           => 48,
                'TELNET_OPTION_SYNTAX'     => 49,
                'PEER_FAILED_VERIFICATION' => 51,
                'GOT_NOTHING'              => 52,
                'SSL_ENGINE_NOTFOUND'      => 53,
                'SSL_ENGINE_SETFAILED'     => 54,
                'SEND_ERROR'               => 55,
                'RECV_ERROR'               => 56,
                'SSL_CERTPROBLEM'          => 58,
                'SSL_CIPHER'               => 59,
                'SSL_CACERT'               => 60,
                'BAD_CONTENT_ENCODING'     => 61,
                'LDAP_INVALID_URL'         => 62,
                'FILESIZE_EXCEEDED'        => 63,
                'USE_SSL_FAILED'           => 64,
                'SEND_FAIL_REWIND'         => 65,
                'SSL_ENGINE_INITFAILED'    => 66,
                'LOGIN_DENIED'             => 67,
                'TFTP_NOTFOUND'            => 68,
                'TFTP_PERM'                => 69,
                'REMOTE_DISK_FULL'         => 70,
                'TFTP_ILLEGAL'             => 71,
                'TFTP_UNKNOWNID'           => 72,
                'REMOTE_FILE_EXISTS'       => 73,
                'TFTP_NOSUCHUSER'          => 74,
                'CONV_FAILED'              => 75,
                'CONV_REQD'                => 76,
                'SSL_CACERT_BADFILE'       => 77,
                'REMOTE_FILE_NOT_FOUND'    => 78,
                'SSH'                      => 79,
                'SSL_SHUTDOWN_FAILED'      => 80,
                'AGAIN'                    => 81,
                'SSL_CRL_BADFILE'          => 82,
                'SSL_ISSUER_ERROR'         => 83,
                'FTP_PRET_FAILED'          => 84,
                'RTSP_CSEQ_ERROR'          => 85,
                'RTSP_SESSION_ERROR'       => 86,
                'FTP_BAD_FILE_LIST'        => 87,
                'CHUNK_FAILED'             => 88,
                'NO_CONNECTION_AVAILABLE'  => 89
            ],
            'descriptions' => [
                0  => "All fine. Proceed as usual.",
                1  => "The URL you passed to package used a protocol that this package does not support. The support might be a compile-time option that you didn't use, it can be a misspelled protocol string or just a protocol package has no code for.",
                2  => "Very early initialization code failed. This is likely to be an internal error or problem, or a resource problem where something fundamental couldn't get done at init time.",
                3  => "The URL was not properly formatted.",
                4  => "A requested feature, protocol or option was not found built-in in this package due to a build-time decision. This means that a feature or option was not enabled or explicitly disabled when package was built and in order to get it to function you have to get a rebuilt package.",
                5  => "Couldn't resolve proxy. The given proxy host could not be resolved.",
                6  => "Couldn't resolve host. The given remote host was not resolved.",
                7  => "Failed to connect() to host or proxy.",
                8  => "After connecting to a FTP server, package expects to get a certain reply back. This error code implies that it got a strange or bad reply. The given remote server is probably not an OK FTP server.",
                9  => "We were denied access to the resource given in the URL. For FTP, this occurs while trying to change to the remote directory.",
                10 => "While waiting for the server to connect back when an active FTP session is used, an error code was sent over the control connection or similar.",
                11 => "After having sent the FTP password to the server, package expects a proper reply. This error code indicates that an unexpected code was returned.",
                12 => "During an active FTP session while waiting for the server to connect, the CURLOPT_ACCEPTTIMEOUT_MS (or the internal default) timeout expired.",
                13 => "package failed to get a sensible result back from the server as a response to either a PASV or a EPSV command. The server is flawed.",
                14 => "FTP servers return a 227-line as a response to a PASV command. If package fails to parse that line, this return code is passed back.",
                15 => "An internal failure to lookup the host used for the new connection.",
                16 => "A problem was detected in the HTTP2 framing layer. This is somewhat generic and can be one out of several problems, see the error buffer for details.",
                17 => "Received an error when trying to set the transfer mode to binary or ASCII.",
                18 => "A file transfer was shorter or larger than expected. This happens when the server first reports an expected transfer size, and then delivers data that doesn't match the previously given size.",
                19 => "This was either a weird reply to a 'RETR' command or a zero byte transfer complete.",
                21 => "When sending custom QUOTE commands to the remote server, one of the commands returned an error code that was 400 or higher (for FTP) or otherwise indicated unsuccessful completion of the command.",
                22 => "This is returned if CURLOPT_FAILONERROR is set TRUE and the HTTP server returns an error code that is >= 400.",
                23 => "An error occurred when writing received data to a local file, or an error was returned to package from a write callback.",
                25 => "Failed starting the upload. For FTP, the server typically denied the STOR command. The error buffer usually contains the server's explanation for this.",
                26 => "There was a problem reading a local file or an error returned by the read callback.",
                27 => "A memory allocation request failed. This is serious badness and things are severely screwed up if this ever occurs.",
                28 => "Operation timeout. The specified time-out period was reached according to the conditions.",
                30 => "The FTP PORT command returned error. This mostly happens when you haven't specified a good enough address for package to use. See CURLOPT_FTPPORT.",
                31 => "The FTP REST command returned error. This should never happen if the server is sane.",
                33 => "The server does not support or accept range requests.",
                34 => "This is an odd error that mainly occurs due to internal confusion.",
                35 => "A problem occurred somewhere in the SSL/TLS handshake. You really want the error buffer and read the message there as it pinpoints the problem slightly more. Could be certificates (file formats, paths, permissions), passwords, and others.",
                36 => "The download could not be resumed because the specified offset was out of the file boundary.",
                37 => "A file given with FILE:// couldn't be opened. Most likely because the file path doesn't identify an existing file. Did you check file permissions?",
                38 => "LDAP cannot bind. LDAP bind operation failed.",
                39 => "LDAP search failed.",
                41 => "Function not found. A required zlib function was not found.",
                42 => "Aborted by callback. A callback returned abort to package.",
                43 => "Internal error. A function was called with a bad parameter.",
                45 => "Interface error. A specified outgoing interface could not be used. Set which interface to use for outgoing connections' source IP address with CURLOPT_INTERFACE.",
                47 => "Too many redirects. When following redirects, package hit the maximum amount. Set your limit with CURLOPT_MAXREDIRS.",
                48 => "An option passed to package is not recognized/known. Refer to the appropriate documentation. This is most likely a problem in the program that uses package. The error buffer might contain more specific information about which exact option it concerns.",
                49 => "A telnet option string was Illegally formatted.",
                51 => "The remote server's SSL certificate or SSH md5 fingerprint was deemed not OK.",
                52 => "Nothing was returned from the server, and under the circumstances, getting nothing is considered an error.",
                53 => "The specified crypto engine wasn't found.",
                54 => "Failed setting the selected SSL crypto engine as default!",
                55 => "Failed sending network data.",
                56 => "Failure with receiving network data.",
                58 => "problem with the local client certificate.",
                59 => "Couldn't use specified cipher.",
                60 => "Peer certificate cannot be authenticated with known CA certificates.",
                61 => "Unrecognized transfer encoding.",
                62 => "Invalid LDAP URL.",
                63 => "Maximum file size exceeded.",
                64 => "Requested FTP SSL level failed.",
                65 => "When doing a send operation curl had to rewind the data to retransmit, but the rewinding operation failed.",
                66 => "Initiating the SSL Engine failed.",
                67 => "The remote server denied curl to login (Added in 7.13.1)",
                68 => "File not found on TFTP server.",
                69 => "Permission problem on TFTP server.",
                70 => "Out of disk space on the server.",
                71 => "Illegal TFTP operation.",
                72 => "Unknown TFTP transfer ID.",
                73 => "File already exists and will not be overwritten.",
                74 => "This error should never be returned by a properly functioning TFTP server.",
                75 => "Character conversion failed.",
                76 => "Caller must register conversion callbacks.",
                77 => "Problem with reading the SSL CA cert (path? access rights?)",
                78 => "The resource referenced in the URL does not exist.",
                79 => "An unspecified error occurred during the SSH session.",
                80 => "Failed to shut down the SSL connection.",
                81 => "Socket is not ready for send/recv wait till it's ready and try again. This return code is only returned from curl_easy_recv and curl_easy_send (Added in 7.18.2)",
                82 => "Failed to load CRL file (Added in 7.19.0)",
                83 => "Issuer check failed (Added in 7.19.0)",
                84 => "The FTP server does not understand the PRET command at all or does not support the given argument. Be careful when using CURLOPT_CUSTOMREQUEST, a custom LIST command will be sent with PRET CMD before PASV as well. (Added in 7.20.0)",
                85 => "Mismatch of RTSP CSeq numbers.",
                86 => "Mismatch of RTSP Session Identifiers.",
                87 => "Unable to parse FTP file list (during FTP wildcard downloading).",
                88 => "Chunk callback reported error.",
                89 => "(For internal use only, will never be returned by package) No connection available, the session will be queued. (added in 7.30.0)"
            ]
        ],
        /**
         * ERROR CODES IN PRODUCTS DOMAIN
         */
        'products' => [
            'codes'        => [
                'UNSUPPORTED_PROTOCOL'   => 1,
                'FAILED_INIT'            => 2,
                'URL_MALFORMAT'          => 3,
                'NOT_BUILT_IN'           => 4,
                'COULDNT_RESOLVE_PROXY'  => 5,
                'COULDNT_RESOLVE_HOST'   => 6,
                'COULDNT_CONNECT'        => 7,
                'FTP_WEIRD_SERVER_REPLY' => 8,
                'REMOTE_ACCESS_DENIED'   => 9,
                'FTP_ACCEPT_FAILED'      => 10
            ],
            'descriptions' => [
                1  => "The URL you passed to package used a protocol that this package does not support. The support might be a compile-time option that you didn't use, it can be a misspelled protocol string or just a protocol package has no code for.",
                2  => "Very early initialization code failed. This is likely to be an internal error or problem, or a resource problem where something fundamental couldn't get done at init time.",
                3  => "The URL was not properly formatted.",
                4  => "A requested feature, protocol or option was not found built-in in this package due to a build-time decision. This means that a feature or option was not enabled or explicitly disabled when package was built and in order to get it to function you have to get a rebuilt package.",
                5  => "Couldn't resolve proxy. The given proxy host could not be resolved.",
                6  => "Couldn't resolve host. The given remote host was not resolved.",
                7  => "Failed to connect() to host or proxy.",
                8  => "After connecting to a FTP server, package expects to get a certain reply back. This error code implies that it got a strange or bad reply. The given remote server is probably not an OK FTP server.",
                9  => "We were denied access to the resource given in the URL. For FTP, this occurs while trying to change to the remote directory.",
                10 => "While waiting for the server to connect back when an active FTP session is used, an error code was sent over the control connection or similar.",
            ]
        ]
    ],
];
