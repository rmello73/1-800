<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use willvincent\Rateable\Rateable;

class User extends Authenticatable
{
    use Notifiable, Rateable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  	protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	
    public function country(){
        return $this->belongsTo(Country::class);
    }
            
            public function get_photo( $s = 40, $d = 'mm', $r = 'g', $img = false, $atts = [] ) {
            
            	$email = $this->email;
            	$url = 'http://www.gravatar.com/avatar/';
            	$url .= md5( strtolower( trim( $email ) ) );
            	$url .= "?s=$s&d=$d&r=$r";
            
            	if( ! empty($this->photo)) {
            		$url = avatar_img_url($this->photo, $this->photo_storage);
            	}
            
            	if ( $img ) {
            		$url = '<img src="' . $url . '"';
            		foreach ( $atts as $key => $val )
            			$url .= ' ' . $key . '="' . $val . '"';
            			$url .= ' />';
            	}
            
            	return $url;
            }
            
            public function get_photo2( $s = 40, $d = 'mm', $r = 'g', $img = false, $atts = [] ) {
            
            	$email = $this->email;
            	$url = 'http://www.gravatar.com/avatar/';
            	$url .= md5( strtolower( trim( $email ) ) );
            	$url .= "?s=$s&d=$d&r=$r";
            
            	if( ! empty($this->photo2)) {
            		$url = avatar_img_url($this->photo2, $this->photo_storage);
            	}
            
            	if ( $img ) {
            		$url = '<img src="' . $url . '"';
            		foreach ( $atts as $key => $val )
            			$url .= ' ' . $key . '="' . $val . '"';
            			$url .= ' />';
            	}
            
            	return $url;
            }
            
            public function get_photo3( $s = 40, $d = 'mm', $r = 'g', $img = false, $atts = [] ) {
            
            	$email = $this->email;
            	$url = 'http://www.gravatar.com/avatar/';
            	$url .= md5( strtolower( trim( $email ) ) );
            	$url .= "?s=$s&d=$d&r=$r";
            
            	if( ! empty($this->photo3)) {
            		$url = avatar_img_url($this->photo3, $this->photo_storage);
            	}
            
            	if ( $img ) {
            		$url = '<img src="' . $url . '"';
            		foreach ( $atts as $key => $val )
            			$url .= ' ' . $key . '="' . $val . '"';
            			$url .= ' />';
            	}
            
            	return $url;
            }
            
            public function get_photo4( $s = 40, $d = 'mm', $r = 'g', $img = false, $atts = [] ) {
            
            	$email = $this->email;
            	$url = 'http://www.gravatar.com/avatar/';
            	$url .= md5( strtolower( trim( $email ) ) );
            	$url .= "?s=$s&d=$d&r=$r";
            
            	if( ! empty($this->photo4)) {
            		$url = avatar_img_url($this->photo4, $this->photo_storage);
            	}
            
            	if ( $img ) {
            		$url = '<img src="' . $url . '"';
            		foreach ( $atts as $key => $val )
            			$url .= ' ' . $key . '="' . $val . '"';
            			$url .= ' />';
            	}
            
            	return $url;
            }
            
            public function get_photo5( $s = 40, $d = 'mm', $r = 'g', $img = false, $atts = [] ) {
            
            	$email = $this->email;
            	$url = 'http://www.gravatar.com/avatar/';
            	$url .= md5( strtolower( trim( $email ) ) );
            	$url .= "?s=$s&d=$d&r=$r";
            
            	if( ! empty($this->photo5)) {
            		$url = avatar_img_url($this->photo5, $this->photo_storage);
            	}
            
            	if ( $img ) {
            		$url = '<img src="' . $url . '"';
            		foreach ( $atts as $key => $val )
            			$url .= ' ' . $key . '="' . $val . '"';
            			$url .= ' />';
            	}
            
            	return $url;
            }
            
            public function get_photo6( $s = 40, $d = 'mm', $r = 'g', $img = false, $atts = [] ) {
            
            	$email = $this->email;
            	$url = 'http://www.gravatar.com/avatar/';
            	$url .= md5( strtolower( trim( $email ) ) );
            	$url .= "?s=$s&d=$d&r=$r";
            
            	if( ! empty($this->photo6)) {
            		$url = avatar_img_url($this->photo6, $this->photo_storage);
            	}
            
            	if ( $img ) {
            		$url = '<img src="' . $url . '"';
            		foreach ( $atts as $key => $val )
            			$url .= ' ' . $key . '="' . $val . '"';
            			$url .= ' />';
            	}
            
            	return $url;
            }
            
            public function get_agent_logo( $s = 40, $d = 'mm', $r = 'g', $img = false, $atts = [] ) {
            
            	$email = $this->email;
            	$url = 'http://www.gravatar.com/avatar/';
            	$url .= md5( strtolower( trim( $email ) ) );
            	$url .= "?s=$s&d=$d&r=$r";
            
            	if( ! empty($this->agent_logo)) {
            		$url = avatar_img_url($this->agent_logo, $this->photo_storage);
            	}
            
            	if ( $img ) {
            		$url = '<img src="' . $url . '"';
            		foreach ( $atts as $key => $val )
            			$url .= ' ' . $key . '="' . $val . '"';
            			$url .= ' />';
            	}
            
            	return $url;
            }
    
    /*public function get_agent_logo( $s = 40, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    
    	$email = $this->email;
    	$url = 'http://www.gravatar.com/avatar/';
    	$url .= md5( strtolower( trim( $email ) ) );
    	$url .= "?s=$s&d=$d&r=$r";
    
    	if( ! empty($this->agent_logo)) {
    		$url = avatar_img_url($this->agent_logo, $this->photo_storage);
    	}
    
    	if ( $img ) {
    		$url = '<img src="' . $url . '"';
    		foreach ( $atts as $key => $val )
    			$url .= ' ' . $key . '="' . $val . '"';
    			$url .= ' />';
    	}
    
    	return $url;
    }*/

    public function get_address(){
        $address = '';

        if ( ! empty($this->address))
            $address .= $this->address;

        if ($this->country){
            $address .= ', '.$this->country->country_name;
        }

        return $address;
    }

    public function ads(){
        return $this->hasMany(Ad::class);
    }
    public function favourite_ads(){
        return $this->belongsToMany(Ad::class, 'favorites');
    }

    public function signed_up_datetime(){
        $created_date_time = $this->created_at->timezone(get_option('default_timezone'))->format(get_option('date_format_custom').' '.get_option('time_format_custom'));
        return $created_date_time;
    }

    public function status_context(){
        $status = $this->active_status;

        $context = '';
        switch ($status){
            case '0':
                $context = 'Pending';
                break;
            case '1':
                $context = 'Active';
                break;
            case '2':
                $context = 'Block';
                break;
        }
        return $context;
    }

    public function is_admin(){
        if ($this->user_type == 'admin'){
            return true;
        }
        return false;
    }

    public function is_user(){
        if ($this->user_type == 'user'){
            return true;
        }
        return false;
    }
    
    public function is_basic(){
        if ($this->user_type == 'basic'){
            return true;
        }
        return false;
    }

    public function is_saveuser(){
        if ($this->user_type == 'saveuser'){
            return true;
        }
        return false;
    }
    
    public function is_temp_saveuser(){
        if ($this->user_temp == 'saveuser'){
            return true;
        }
        return false;
    }

    public function is_agent(){
        if ($this->user_type == 'agent'){
            return true;
        }
        return false;
    }
    
    public function is_temp_agent(){
        if ($this->user_temp == 'agent'){
            return true;
        }
        return false;
    }

    public function is_landlord(){
        if ($this->user_type == 'landlord'){
            return true;
        }
        return false;
    }
    
    public function is_temp_landlord(){
        if ($this->user_temp == 'landlord'){
            return true;
        }
        return false;
    }
    
    public function is_pmc(){
        if ($this->user_type == 'pmc'){
            return true;
        }
        return false;
    }
    
    public function is_temp_pmc(){
        if ($this->user_temp == 'pmc'){
            return true;
        }
        return false;
    }

    public function is_prof(){
        if ($this->user_type == 'prof'){
            return true;
        }
        return false;
    }
    
    public function is_temp_prof(){
        if ($this->user_temp == 'prof'){
            return true;
        }
        return false;
    }
    
    public function verified()
    {
        $this->verified = 1;
        $this->active_status = '1';
        $this->email_token = null;
        $this->save();
    }
    
}
