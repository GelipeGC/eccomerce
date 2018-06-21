<?php
return array(
    // set your paypal credential
    'client_id' => 'AeyMcPFXs-LXHM4az43MJ3NME5trgJvAhf4FIKJf5Q7nbWjiL2dzfFBTaO5rVD-3G6E4IixzZdZt16IN',
    'secret' => 'EFsohHbUAOkPsjxVzDMgUCMuY8Uui1BHRbwdikOrBDM0hU42VefBhQfubZdHrb81-rxy7uKRqM0LorkH',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);