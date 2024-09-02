<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DirectoryController extends Controller {
	
	/**
	 * Directory
	 */
	public function directory(Request $request) {
		return view ( $this->theme . 'directory' );
	}

        /**
	 * Directory Category
	 */
	public function category(Request $request) {
		return view ( $this->theme . 'directory_cat' );
	}

        /**
	 * Directory Ad
	 */
	public function ad(Request $request) {
		return view ( $this->theme . 'directory_ad' );
	}

}