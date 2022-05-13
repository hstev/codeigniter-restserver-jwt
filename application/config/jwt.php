<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['jwt_key'] = JWT_KEY;

/*Generated token will expire in 1 minute for sample code
* Increase this value as per requirement for production
*/
$config['token_timeout'] = JWT_TOKEN_TIMEOUT;

/* End of file jwt.php */
/* Location: ./application/config/jwt.php */