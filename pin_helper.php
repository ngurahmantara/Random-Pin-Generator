<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('get_pin'))
{
    /**
     * Generate 4 digit random PIN
	 * by @ngurahmantara
	 *
	 * based on Generate a random password helper by @bjornbjorn. 
     * 
     * get_random_pin() will return a random 4 digit numeric pin.
     *
     * @access    public
     * @return    string containing a random pin 
     */    
    function get_pin()
    {
        $length = rand(4, 4);
        $selection = '1234567890';
        
                                
        $pin = "";
        for($i=0; $i<$length; $i++) {
            $current_pin = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
            $pin .=  $current_pin;
        }                
        
        return $pin;
    }

}