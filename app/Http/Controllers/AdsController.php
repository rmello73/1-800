<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Brand;
use App\Category;
use App\City;
use App\Country;
use DB;
use App\Media;
use App\Neighborhood;
use App\Payment;
use App\Report_ad;
use App\State;
use App\Sub_Category;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class AdsController extends Controller {

	/**
	 * Contractors
	 */
	public function contractors(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('contractors');
	    $users = $users->get();
		return view ( $this->theme . 'contractors', compact ( 'users' ) );
	}

	/**
	 * Contractor Listing
	 */
	public function contractorlisting(Request $request) {
	    if ($request->city) {
			$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'city', 'LIKE', "%{$request->city}%" )->where ( 'category','LIKE','contractors' );
        } elseif ($request->prof_category) {
            //dd($request->prof_category);
			$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'subcat','LIKE', $request->prof_category )->where( 'category', 'LIKE', 'contractors' );
		} else {
            $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'category','LIKE','contractors' );
        }
		$users = $users->get();
		return view ( $this->theme . 'contractorlisting', compact ( 'users' ));
	}

	/**
	 * Appraisers
	 */
	public function appraisers(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('appraiser');
	    $users = $users->get();
		return view ( $this->theme . 'appraisers', compact ( 'users' ) );
	}

	/**
	 * Appraiser Listing
	 */
	public function appraiserlisting(Request $request) {
                if ($request->q) {
                        $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereUserType('agent')->where ( 'name', 'LIKE', "%{$request->q}%" );
                    if ($request->city) {
			$users = $users->where ( 'city', 'LIKE', "%{$request->city}%" );
		    }
                } elseif ($request->city) {
			$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereUserType('agent')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereUserType('appriaser');
                }
		$users = $users->get();
		return view ( $this->theme . 'appraiserlisting', compact ( 'users' ));
	}

	/**
	 * Real Estate Agents
	 */
	public function realestateagents(Request $request) {
		return view ( $this->theme . 'realestateagents');
	}

	/**
	 * Home Improvement Main
	 */
	public function homeimprovement(Request $request) {
		return view ( $this->theme . 'homeimprovement');
	}

	/**
	 * Photographers Main
	 */
	public function photographers(Request $request) {
		return view ( $this->theme . 'photographers');
	}

	/**
	 * Inspectors
	 */
	public function inspectors(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('inspectors');
	    $users = $users->get();
		return view ( $this->theme . 'home-inspection-companies', compact ( 'users' ) );
	}

	/**
	 * Agents
	 */
	public function agents(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('agents');
	    $users = $users->get();
		return view ( $this->theme . 'insurance-agent', compact ( 'users' ) );
	}

	/**
	 * Brokers
	 */
	public function brokers(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('brokers');
	    $users = $users->get();
		return view ( $this->theme . 'brokers', compact ( 'users' ) );
	}

	/**
	 * Attorneys
	 */
	public function attorneys(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('attorneys');
	    $users = $users->get();
		return view ( $this->theme . 'real-estate-attorneys', compact ( 'users' ) );
	}

	/**
	 * Videographers
	 */
	public function videographers(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('videographers');
	    $users = $users->get();
		return view ( $this->theme . 'videographers', compact ( 'users' ) );
	}

	/**
	 * Real Estate Agent Listing
	 */
	public function realestateagentlisting(Request $request) {
                if ($request->q) {
                        $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh','twitter','facebook','instagram')->whereUserType('agent')->where ( 'name', 'LIKE', "%{$request->q}%" );
                    if ($request->city) {
			$users = $users->where ( 'city', 'LIKE', "%{$request->city}%" );
		    }
                } elseif ($request->city) {
			$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh','twitter','facebook','instagram')->whereUserType('agent')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh','twitter','facebook','instagram')->whereUserType('agent');
                }
		$users = $users->get();
		return view ( $this->theme . 'realestateagentlisting', compact ( 'users' ));
	}

/**
	 * Inspector Listing
	 */
	public function inspectorlisting(Request $request) {
                if ($request->q) {
                        $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'name', 'LIKE', "%{$request->q}%" )->where ( 'category','LIKE','inspectors' );
                    if ($request->city) {
			$users = $users->where ( 'city', 'LIKE', "%{$request->city}%" );
		    }
                } elseif ($request->city) {
			$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'city', 'LIKE', "%{$request->city}%" )->where ( 'category','LIKE','inspectors' );
		} else {
                    $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'category','LIKE','inspectors' );
                }
		$users = $users->get();
		return view ( $this->theme . 'inspectorlisting', compact ( 'users' ));
	}

	/**
	 * Agent Listing
	 */
	public function agentlisting(Request $request) {
                if ($request->q) {
                        $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'name', 'LIKE', "%{$request->q}%" )->where ( 'category','LIKE','agents' );
                    if ($request->city) {
			$users = $users->where ( 'city', 'LIKE', "%{$request->city}%" );
		    }
                } elseif ($request->city) {
			$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'city', 'LIKE', "%{$request->city}%" )->where ( 'category','LIKE','agents' );
		} else {
                    $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'category','LIKE','agents' );
                }
		$users = $users->get();
		return view ( $this->theme . 'agentlisting', compact ( 'users' ));
	}

	/**
	 * Broker Listing
	 */
	public function brokerlisting(Request $request) {
                if ($request->q) {
                        $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'name', 'LIKE', "%{$request->q}%" )->where ( 'category','LIKE','brokers' );
                    if ($request->city) {
			$users = $users->where ( 'city', 'LIKE', "%{$request->city}%" );
		    }
                } elseif ($request->city) {
			$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'city', 'LIKE', "%{$request->city}%" )->where ( 'category','LIKE','brokers' );
		} else {
                    $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'category','LIKE','brokers' );
                }
		$users = $users->get();
		return view ( $this->theme . 'brokerlisting', compact ( 'users' ));
	}

/**
	 * Photographer Listing
	 */
	public function photographerlisting(Request $request) {
		dd($request);

            if ($request->city) {
			$users = User::select('*')->whereCategory('photographers')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereCategory('photographers');
                }
		$users = $users->get();
		return view ( $this->theme . 'photographerlisting', compact ( 'users' ));
	}

	/**
	 * Alarms Main
	 */
	public function alarms(Request $request) {
		return view ( $this->theme . 'alarms');
	}

	/**
	 * Alarm Listing
	 */
	public function alarmlisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('alarms')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('alarms');
                }
		$users = $users->get();
		return view ( $this->theme . 'alarmlisting', compact ( 'users' ));
	}
	
	/**
	 * Appliances Main
	 */
	public function appliances(Request $request) {
		return view ( $this->theme . 'appliances');
	}

	/**
	 * Appliance Listing
	 */
	public function appliancelisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('appliances')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('appliances');
                }
		$users = $users->get();
		return view ( $this->theme . 'appliancelisting', compact ( 'users' ));
	}
	
	/**
	 * Carpets Main
	 */
	public function carpets(Request $request) {
		return view ( $this->theme . 'carpets');
	}

	/**
	 * Carpet Listing
	 */
	public function carpetlisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('carpets')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('carpets');
                }
		$users = $users->get();
		return view ( $this->theme . 'carpetlisting', compact ( 'users' ));
	}
	
	/**
	 * Driveways Main
	 */
	public function driveways(Request $request) {
		return view ( $this->theme . 'driveways');
	}

	/**
	 * Driveway Listing
	 */
	public function drivewaylisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('driveways')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('driveways');
                }
		$users = $users->get();
		return view ( $this->theme . 'drivewaylisting', compact ( 'users' ));
	}
	
	/**
	 * Electricians Main
	 */
	public function electricians(Request $request) {
		return view ( $this->theme . 'electricians');
	}

	/**
	 * Electrician Listing
	 */
	public function electricianlisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('electricians')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('electricians');
                }
		$users = $users->get();
		return view ( $this->theme . 'electricianlisting', compact ( 'users' ));
	}
	
	/**
	 * Fences Main
	 */
	public function fences(Request $request) {
		return view ( $this->theme . 'fences');
	}

	/**
	 * Fence Listing
	 */
	public function fencelisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('fences')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('fences');
                }
		$users = $users->get();
		return view ( $this->theme . 'fencelisting', compact ( 'users' ));
	}
	
	/**
	 * Garages Main
	 */
	public function garages(Request $request) {
		return view ( $this->theme . 'garages');
	}

	/**
	 * Garage Listing
	 */
	public function garagelisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('garages')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('garages');
                }
		$users = $users->get();
		return view ( $this->theme . 'garagelisting', compact ( 'users' ));
	}
	
	/**
	 * Gutters Main
	 */
	public function gutters(Request $request) {
		return view ( $this->theme . 'gutters');
	}

	/**
	 * Gutter
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
	 */
	public function gutterlisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('gutters')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('gutters');
                }
		$users = $users->get();
		return view ( $this->theme . 'gutterlisting', compact ( 'users' ));
	}
	
	/**
	 * Handymen Main
	 */
	public function handymen(Request $request) {
		return view ( $this->theme . 'handymen');
	}

	/**
	 * Handymen Listing
	 */
	public function handymenlisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('handymen')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('handymen');
                }
		$users = $users->get();
		return view ( $this->theme . 'handymenlisting', compact ( 'users' ));
	}

    /**
	 * Theater Main
	 */
	public function theaters(Request $request) {
		return view ( $this->theme . 'theaters');
	}

	/**
	 * Handymen Listing
	 */
	public function theaterlisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('theaters')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('theaters');
                }
		$users = $users->get();
		return view ( $this->theme . 'theaterlisting', compact ( 'users' ));
	}
	
	 /**
	 * HVAC Main
	 */
	public function hvac(Request $request) {
		return view ( $this->theme . 'hvac');
	}

	/**
	 * HVAC Listing
	 */
	public function hvaclisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('hvac')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('hvac');
                }
		$users = $users->get();
		return view ( $this->theme . 'hvaclisting', compact ( 'users' ));
	}
	
	/**
	 * Landscaping Main
	 */
	public function landscaping(Request $request) {
		return view ( $this->theme . 'landscaping');
	}

	/**
	 * Landscaping Listing
	 */
	public function landscapinglisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('landscaping')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('landscaping');
                }
		$users = $users->get();
		return view ( $this->theme . 'landscapinglisting', compact ( 'users' ));
	}
	
	/**
	 * Moving Main
	 */
	public function moving(Request $request) {
		return view ( $this->theme . 'moving');
	}

	/**
	 * Moving Listing
	 */
	public function movinglisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('movers')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('movers');
                }
		$users = $users->get();
		return view ( $this->theme . 'movinglisting', compact ( 'users' ));
	}
	
	/**
	 * Paving Main
	 */
	public function paving(Request $request) {
		return view ( $this->theme . 'paving');
	}

	/**
	 * Paving Listing
	 */
	public function pavinglisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('paving')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('paving');
                }
		$users = $users->get();
		return view ( $this->theme . 'pavinglisting', compact ( 'users' ));
	}

    /**
	 * Painting Main
	 */
	public function painting(Request $request) {
		return view ( $this->theme . 'painting');
	}

	/**
	 * Painting Listing
	 */
	public function paintinglisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('painting')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('painting');
                }
		$users = $users->get();
		return view ( $this->theme . 'paintinglisting', compact ( 'users' ));
	}
	
	/**
	 * Pest Main
	 */
	public function pest(Request $request) {
		return view ( $this->theme . 'pest');
	}

	/**
	 * Pest Listing
	 */
	public function pestlisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('pest')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('pest');
                }
		$users = $users->get();
		return view ( $this->theme . 'pestlisting', compact ( 'users' ));
	}
	
	/**
	 * Pool Main
	 */
	public function pool(Request $request) {
		return view ( $this->theme . 'pool');
	}

	/**
	 * Pool Listing
	 */
	public function poollisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('pool')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('pool');
                }
		$users = $users->get();
		return view ( $this->theme . 'poollisting', compact ( 'users' ));
	}
	
	/**
	 * Plumbing Main
	 */
	public function plumbing(Request $request) {
		return view ( $this->theme . 'plumbing');
	}

	/**
	 * Plumbing Listing
	 */
	public function plumbinglisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('plumbing')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('plumbing');
                }
		$users = $users->get();
		return view ( $this->theme . 'plumbinglisting', compact ( 'users' ));
	}
	
	/**
	 * Roofing Main
	 */
	public function roofing(Request $request) {
		return view ( $this->theme . 'roofing');
	}

	/**
	 * Roofing Listing
	 */
	public function roofinglisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('roofing')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('roofing');
                }
		$users = $users->get();
		return view ( $this->theme . 'roofinglisting', compact ( 'users' ));
	}
	
	/**
	 * Septic Main
	 */
	public function septic(Request $request) {
		return view ( $this->theme . 'septic');
	}

	/**
	 * Septic Listing
	 */
	public function septiclisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('septic')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('septic');
                }
		$users = $users->get();
		return view ( $this->theme . 'septiclisting', compact ( 'users' ));
	}
	
	/**
	 * Siding Main
	 */
	public function siding(Request $request) {
		return view ( $this->theme . 'siding');
	}

	/**
	 * Siding Listing
	 */
	public function sidinglisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('siding')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('siding');
                }
		$users = $users->get();
		return view ( $this->theme . 'sidinglisting', compact ( 'users' ));
	}
	
	/**
	 * Tile Main
	 */
	public function tile(Request $request) {
		return view ( $this->theme . 'tile');
	}

	/**
	 * Tile Listing
	 */
	public function tilelisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('tile')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('tile');
                }
		$users = $users->get();
		return view ( $this->theme . 'tilelisting', compact ( 'users' ));
	}
	
	/**
	 * Window Main
	 */
	public function window(Request $request) {
		return view ( $this->theme . 'window');
	}

	/**
	 * Window Listing
	 */
	public function windowlisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereSubcat('window')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('window');
                }
		$users = $users->get();
		return view ( $this->theme . 'windowlisting', compact ( 'users' ));
	}

	/**
	 * Attorney Listing
	 */
	public function attorneylisting(Request $request) {
                if ($request->q) {
                        $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'name', 'LIKE', "%{$request->q}%" )->where ( 'category','LIKE','attorneys' );
                    if ($request->city) {
			$users = $users->where ( 'city', 'LIKE', "%{$request->city}%" );
		    }
                } elseif ($request->city) {
			$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'city', 'LIKE', "%{$request->city}%" )->where ( 'category','LIKE','attorneys' );
		} else {
                    $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->where ( 'category','LIKE','attorneys' );
                }
		$users = $users->get();
		return view ( $this->theme . 'attorneylisting', compact ( 'users' ));
	}

	/**
	* Videographer Listing
	*/
   public function videographerlisting(Request $request) {
	   dd($request);

		   if ($request->city) {
		   $users = User::select('*')->whereCategory('videographers')->where ( 'city', 'LIKE', "%{$request->city}%" );
				   if ($request->q) {
		   $users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		   }
	   } else {
				   $users = User::select('*')->whereCategory('videographers');
			   }
	   $users = $users->get();
	   return view ( $this->theme . 'videographerlisting', compact ( 'users' ));
   }

public function upload(Request $request) {

    $files = $request->files->get("files");
    foreach ($files as $i => $file) {
        $validator = $this->getValidationFactory()->make($files, [
            $i => "mimes:jpeg,jpg,png|max:5120"
        ], $custom_messages, []);

        if ($validator->fails()) {
        /*
            var_dump($file->isValid());
            die();
        */ // funny: isValid() returns true at this point
            var_dump($validator->failed());die();
            }
    }
}


	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$title = trans ( 'app.all_ads' );
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereIn('type', ['apartment','loft','condo','singlefamily','multifamily'])->orderBy ( 'price', 'asc' )->where( 'price', '<>', 0 )->paginate ( 100 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	
	public function advanced_search() {
	    $cities = City::where ( 'state_id', 1 )->get ();
		return view ( 'theme.modern.advanced_search', compact('cities'));
	}
	
	public function adminPendingAds() {
		$title = trans ( 'app.pending_ads' );
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 0 )->orderBy ( 'id', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	public function adminBlockedAds() {
		$title = trans ( 'app.blocked_ads' );
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 2 )->orderBy ( 'price', 'asc' )->paginate ( 100 );
		$user = Auth::user();
		$currentDate = date('Y-m-d');

		$expired_ads = $user->ads ()->with('city', 'country', 'state')->orderBy('id', 'desc')
			->where([
                ['end_date','<', "$currentDate"]
			])->paginate(20);

		return view ( 'admin.all_ads', compact ( 'title', 'ads', 'expired_ads' ) );
	}
        public function adminPMCAds() {
		$title = trans ( 'app.pmc_ads' );
		$ads = Ad::with ( 'city', 'country', 'state' )->whereType( 'pmc' )->orderBy ( 'title', 'asc' )->paginate ( 100 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	public function adminCommAds() {
		$title = trans ( 'app.comm_ads' );
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereIn('type', ['office','medical','restaurant','retail','storefront','industrial','warehouse','land','other','flex','commercial'])->orderBy ( 'title', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	public function adminSaleAds() {
		$title = 'Residential Sale Listings';
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereIn('sale_type', ['condo','single-family','multi-family','land'])->orderBy ( 'title', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	public function adminSingleFamilySaleAds() {
		$title = 'Single-Family Sale Listings';
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereSaleType('single-family')->orderBy ( 'title', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	public function adminMultiFamilySaleAds() {
		$title = 'Multi-Family Sale Listings';
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereSaleType('multi-family')->orderBy ( 'title', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	public function adminCondoSaleAds() {
		$title = 'Condo Sale Listings';
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereSaleType('condo')->orderBy ( 'title', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	public function adminLandSaleAds() {
		$title = 'Land Sale Listings';
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereCategory('land_sale')->orderBy ( 'title', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	public function adminCommSaleAds() {
		$title = 'Commercial Sale Listings';
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereSaleType('commercial')->orderBy ( 'title', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads', 'sale_type' ) );
	}
	public function adminMixedSaleAds() {
		$title = 'Mixed Use Sale Listings';
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereSaleType('mixed_sale')->orderBy ( 'title', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.all_ads', compact ( 'title', 'ads', 'sale_type' ) );
	}
	public function adminResSaleAds() {
		$title = 'Residential Sale Listings';
		$ads = Ad::with ( 'city', 'country', 'state' )->whereStatus ( 1 )->whereCategory('residential_sale')->orderBy ( 'title', 'desc' )->paginate ( 20 );

		return view ( 'admin.all_ads', compact ( 'title', 'ads' ) );
	}
	public function myAds() {
		$title = trans ( 'app.my_ads' );
		$user = Auth::user ();
		if($user->is_admin()) {
		    $ads = Ad::with ( 'city', 'country', 'state' )->orderBy ( 'id', 'desc' )->paginate ( 20 );
		}else{
			$ads = $user->ads ()->with ( 'city', 'country', 'state' )->orderBy ( 'id', 'desc' )->paginate ( 20 );
		}
		
		return view ( 'admin.my_ads', compact ( 'title', 'ads' ) );
	}
	public function pendingAds() {
		$title = trans ( 'app.my_ads' );
		
		$user = Auth::user ();
		$ads = $user->ads ()->whereStatus ( 0 )->with ( 'city', 'country', 'state' )->orderBy ( 'id', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.pending_ads', compact ( 'title', 'ads' ) );
	}
	public function favoriteAds() {
		$title = trans ( 'app.favorite_ads' );
		
		$user = Auth::user ();
		$ads = $user->favourite_ads ()->with ( 'city', 'country', 'state' )->orderBy ( 'id', 'desc' )->paginate ( 20 );
		
		return view ( 'admin.favorite_ads', compact ( 'title', 'ads' ) );
	}

	/**
	 * Show the form for creating a new residential resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create_pmc() {
		$user_id = Auth::user ()->id;
		$title = trans ( 'app.post_an_ad' );
		$categories = Category::all ();
		$distances = Brand::all ();
		
		$ads_images = Media::whereUserId ( $user_id )->whereAdId ( 0 )->whereRef ( 'ad' )->get ();
		
		$previous_states = State::where ( 'country_id', old ( 'country' ) )->get ()->whereIn('type',['office','medical','restaurant','retail','storefront','industrial','warehouse','land','other','flex','commercial']);
		$previous_cities = City::where ( 'state_id', old ( 'state' ) )->get ();
		$previous_neighborhoods = Neighborhood::where ( 'city_id', old ( 'city' ) )->get ();
		
		return view ( 'admin.create_pmc_ad', compact ( 'title', 'categories', 'ads_images', 'distances', 'previous_states', 'previous_cities', 'previous_neighborhoods' ) );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request        	
	 * @return \Illuminate\Http\Response
	 */
	public function store_pmc(Request $request) {
		$user_id = Auth::user ()->id;
		$ads_price_plan = get_option ( 'ads_price_plan' );
		
		$rules = [ 
				'ad_title' => 'required',
				'ad_description' => 'required',
				'street_num' => 'required',
				'street_name' => 'required',
				'street_type' => 'required',
                'state' => 'required',
                'city' => 'required',
 
		];
		
		if ($ads_price_plan != 'all_ads_free') {
			$rules ['price_plan'] = 'required';
		}
		
		//$this->validate ( $request, $rules );
		
		$title = $request->ad_title;
		$slug = unique_slug ( $title );
		
		$is_negotialble = $request->negotiable ? $request->negotiable : 0;
		$mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
		$property_video_url = $request->property_video_url ? $request->property_video_url : '';
		$neighborhood_video_url = $request->neighborhood_video_url ? $request->neighborhood_video_url : '';
		
		$data = [ 
				'title' => $request->ad_title,
				'slug' => $slug,
				'description' => $request->ad_description,
				'comment' => $request->ad_comment,
				'type' => 'pmc',
				'category' => 'residential_rental',
				'price' => $request->has('price') ? $request->input('price') : NULL,
				'square_unit_space' => $request->square_unit_space,
				'beds' => $request->beds,
				'attached_bath' => $request->attached_bath,
				'heat' => $request->heat,
				'parking' => $request->parking,
                'cats' => $request->cats,
                'dogs' => $request->dogs,
				'utilities' => $request->utilities,
				'laundry' => $request->laundry,
				'hfloors' => $request->hfloors,
				'carpet' => $request->carpet,
				'tile' => $request->tile,
				'stainless' => $request->stainless,
				'granite' => $request->granite,
				'central' => $request->central,
				'furnishedapt' => $request->furnishedapt,
				'basementstorage' => $request->basementstorage,
				'fireplace' => $request->fireplace,
				'yard' => $request->yard,
				'ceiling' => $request->ceiling,
				'gourmet' => $request->gourmet,
				
				'state_id' => $request->state,
				'city_id' => $request->city,
				'address' => $request->address,
				'street_num' => $request->street_num,
				'street_name' => $request->street_name,
				'street_type' => $request->street_type,
				'neighborhood' => $request->neighborhood,
				'zipcode' => $request->zipcode,
				'latitude' => $request->latitude,
				'longitude' => $request->longitude,
				'property_video_url' => $property_video_url,
				'neighborhood_video_url' => $neighborhood_video_url,
				'website' => $request->website,
				'mark_ad_urgent' => $mark_ad_urgent,
				'status' => 1,
				'user_id' => $user_id,
				
				'pmcbeds' => $request->pmcbeds,
				'pmcbaths' => $request->pmcbaths,
				'pmcrent' => $request->pmcrent,
				'pmcsqft' => $request->pmcsqft,
                'pmcfloorplan' => $request->pmcfloorplan,
				
				'pmcbeds2' => $request->pmcbeds2,
				'pmcbaths2' => $request->pmcbaths2,
				'pmcrent2' => $request->pmcrent2,
				'pmcsqft2' => $request->pmcsqft2,
                'pmcfloorplan2' => $request->pmcfloorplan2,

				'pmcbeds3' => $request->pmcbeds3,
				'pmcbaths3' => $request->pmcbaths3,
				'pmcrent3' => $request->pmcrent3,
				'pmcsqft3' => $request->pmcsqft3,
                'pmcfloorplan3' => $request->pmcfloorplan3,

				'pmcbeds4' => $request->pmcbeds4,
				'pmcbaths4' => $request->pmcbaths4,
				'pmcrent4' => $request->pmcrent4,
				'pmcsqft4' => $request->pmcsqft4,
                'pmcfloorplan4' => $request->pmcfloorplan4,

				'pmcbeds5' => $request->pmcbeds5,
				'pmcbaths5' => $request->pmcbaths5,
				'pmcrent5' => $request->pmcrent5,
				'pmcsqft5' => $request->pmcsqft5,
                'pmcfloorplan5' => $request->pmcfloorplan5,

				'pmcbeds6' => $request->pmcbeds6,
				'pmcbaths6' => $request->pmcbaths6,
				'pmcrent6' => $request->pmcrent6,
				'pmcsqft6' => $request->pmcsqft6,
                'pmcfloorplan6' => $request->pmcfloorplan6,

				'pmcbeds7' => $request->pmcbeds7,
				'pmcbaths7' => $request->pmcbaths7,
				'pmcrent7' => $request->pmcrent7,
				'pmcsqft7' => $request->pmcsqft7,
                'pmcfloorplan7' => $request->pmcfloorplan7,

				'pmcbeds8' => $request->pmcbeds8,
				'pmcbaths8' => $request->pmcbaths8,
				'pmcrent8' => $request->pmcrent8,
				'pmcsqft8' => $request->pmcsqft8,
                'pmcfloorplan8' => $request->pmcfloorplan8,

				'pmcbeds9' => $request->pmcbeds9,
				'pmcbaths9' => $request->pmcbaths9,
				'pmcrent9' => $request->pmcrent9,
				'pmcsqft9' => $request->pmcsqft9,
                'pmcfloorplan9' => $request->pmcfloorplan9,

				'pmcbeds10' => $request->pmcbeds10,
				'pmcbaths10' => $request->pmcbaths10,
				'pmcrent10' => $request->pmcrent10,
				'pmcsqft10' => $request->pmcsqft10,
                'pmcfloorplan10' => $request->pmcfloorplan10,
				
				'pmcdogs' => $request->pmcdogs,
				'pmccats' => $request->pmccats,
				'pmcair' => $request->pmcair,
				'pmcbasketball' => $request->pmcbasketball,
				'pmcbusiness' => $request->pmcbusiness,
				'pmccable' => $request->pmccable,
				'pmccarpeting' => $request->pmccarpeting,
				'pmcclubhouse' => $request->pmcclubhouse,
				'pmccontrolled' => $request->pmccontrolled,
				'pmcdeck' => $request->pmcdeck,
				'pmcelevator' => $request->pmcelevator,
				'pmcceiling' => $request->pmcceiling,
				'pmcfireplace' => $request->pmcfireplace,
				'pmcfitness' => $request->pmcfitness,
				'pmcfurnished' => $request->pmcfurnished,
				'pmchandicap' => $request->pmchandicap,
				'pmchardwood' => $request->pmchardwood,
				'pmcinternet' => $request->pmcinternet,
				'pmcroom' => $request->pmcroom,
				'pmclaundrypmc' => $request->pmclaundry,
				'pmcmedia' => $request->pmcmedia,
				'pmcpool' => $request->pmcpool,
				'pmcspa' => $request->pmcspa,
				'pmcstorage' => $request->pmcstorage,
				'pmctennis' => $request->pmctennis,
				'pmcvaulted' => $request->pmcvaulted,
				'pmcwalk' => $request->pmcwalk,
				'pmcwasher' => $request->pmcwasher,
				'pmcyard' => $request->pmcyard,
				'pmcdish' => $request->pmcdish,
				'pmcplay' => $request->pmcplay,
				'pmcheat' => $request->pmcheat,
				'pmcwater' => $request->pmcwater,
				'pmcelectric' => $request->pmcelectric,
				'pmcgarage' => $request->pmcgarage,
				'pmcassigned' => $request->pmcassigned,
								
				'mh' => $request->mh,
				'th' => $request->th,
				'wh' => $request->wh,
				'rh' => $request->rh,
				'fh' => $request->fh,
				'sh' => $request->sh,
				'uh' => $request->uh,
				
				'officephone' => $request->officephone,
				
                'pmc_logo' => $request->pmc_logo,
                'pmcemail' => $request->pmcemail
		];

		dd($data);
		
		// Check ads moderation settings
		if (get_option ( 'ads_moderation' ) == 'direct_publish') {
			$data ['status'] = 1;
		}
		
		// if price_plan not in post data, then set a default value, although mysql will save it as enum first value
		if (! $request->price_plan) {
			$data ['price_plan'] = 'regular';
		}
		
		$created_ad = Ad::create ( $data );
		
		/**
		 * iF add created
		 */
		if ($created_ad) {
			// Attach all unused media with this ad
			Media::whereUserId ( $user_id )->whereAdId ( 0 )->whereRef ( 'ad' )->update ( [ 
					'ad_id' => $created_ad->id 
			] );
			
			/**
			 * Payment transaction login here
			 */
			$ads_price = get_ads_price ( $created_ad->price_plan );
			if ($mark_ad_urgent) {
				$ads_price = $ads_price + get_option ( 'urgent_ads_price' );
			}
			
			if ($ads_price) {
				// Insert checkout Logic
				
				$transaction_id = 'tran_' . time () . str_random ( 6 );
				// get unique recharge transaction id
				while ( (Payment::whereLocalTransactionId ( $transaction_id )->count ()) > 0 ) {
					$transaction_id = 'reid' . time () . str_random ( 5 );
				}
				$transaction_id = strtoupper ( $transaction_id );
				
				$currency = get_option ( 'currency_sign' );
				$payments_data = [ 
						'ad_id' => $created_ad->id,
						'user_id' => $user_id,
						'amount' => $ads_price,
						'payment_method' => $request->payment_method,
						'status' => 'initial',
						'currency' => $currency,
						'local_transaction_id' => $transaction_id 
				];
				$created_payment = Payment::create ( $payments_data );
				
				return redirect ( route ( 'payment_checkout', $created_payment->local_transaction_id ) );
			}
			
			$ad_id = $created_ad->id;
			return view ( 'admin.images', compact ( 'ad_id' ));
		}
		
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
	    
		$user = Auth::user ();
		$user_id = $user->id;
		
		$title = trans ( 'app.edit_ad' );
		$ad = Ad::find ( $id );
		//dd($ad);
		
		if (! $ad)
			return view ( 'admin.error.error_404' );
		
		if (! $user->is_admin ()) {
			if ($ad->user_id != $user_id) {
				return view ( 'admin.error.error_404' );
			}
		}
		
        // RM - whereAdId was pulling ad 0
		$ads_images = Media::whereUserId ( $user_id )->whereAdId ( 0 )->whereRef ( 'ad' )->get ();
		//dd($ads_images);
		
		$previous_states = State::where ( 'country_id', $ad->country_id )->get ();
		$previous_cities = City::where ( 'state_id', $ad->state_id )->get ();
		$previous_neighborhoods = Neighborhood::where ( 'city_id', $ad->city_id )->get ();
		
		$categories = Category::all ();
		$distances = Brand::all ();
		
		return view ( 'admin.edit_ad', compact ( 'title', 'categories', 'ads_images', 'ad', 'distances', 'previous_states', 'previous_cities', 'previous_neighborhoods' ) );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request        	
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$ad = Ad::find ( $id );
		//dd($ad);
		$user = Auth::user ();
		$user_id = $user->id;
		
		$uniqueFileName = "";
		$uniqueFileName2 = "";
		$uniqueFileName3 = "";
		
		if (! $user->is_admin ()) {
			if ($ad->user_id != $user_id) {
				return view ( 'admin.error.error_404' );
			}
		}
		$mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
		
		$rules = [ 
				 
		];
		
		$this->validate ( $request, $rules );
		$title = $request->ad_title;
		$slug = unique_slug($title);
		
		$property_video_url = $request->property_video_url ? $request->property_video_url : '';
		$neighborhood_video_url = $request->neighborhood_video_url ? $request->neighborhood_video_url : '';
		
		if($request->company_pdf) {
		    $uniqueFileName = uniqid() . $request->company_pdf->getClientOriginalName();
            $request->company_pdf->move(public_path().'/pdf/', $uniqueFileName);
		}
        
        if($request->company_pdf2) {
            $uniqueFileName2 = uniqid() . $request->company_pdf2->getClientOriginalName();
            $request->company_pdf2->move(public_path().'/pdf/', $uniqueFileName2);
        }
        
        if($request->company_pdf3) {
            $uniqueFileName3 = uniqid() . $request->company_pdf3->getClientOriginalName();
            $request->company_pdf3->move(public_path().'/pdf/', $uniqueFileName3);
        }

        $openhouse_date = "2020-02-28 00:00:00";
        if($request->openhouse_date) {
            $openhouse_date = Carbon::parse($request->openhouse_date);
        }		

		$sale_type = $ad->sale_type;
		$type = $ad->type;

		$data = [ 
				'title' => $request->ad_title,
				'description' => $request->ad_description,
				'comment' => $request->ad_comment,
                'type' => $type,
		        'sale_type' => $sale_type,
				//'category' => $request->category,
				'price' => $request->price,
				'square_unit_space' => $request->square_unit_space,
				'beds' => $request->beds,
				'attached_bath' => $request->attached_bath,
				'heat' => $request->heat,
				'parking' => $request->parking,
				'laundry' => $request->laundry,
                'cats' => $request->cats,
                'dogs' => $request->dogs,
				'utilities' => $request->utilities,
				'hfloors' => $request->hfloors,
				'carpet' => $request->carpet,
				'tile' => $request->tile,
				'stainless' => $request->stainless,
				'granite' => $request->granite,
				'central' => $request->central,
				'furnishedapt' => $request->furnishedapt,
				'basementstorage' => $request->basementstorage,
				'fireplace' => $request->fireplace,
				'yard' => $request->yard,
				'ceiling' => $request->ceiling,
				'gourmet' => $request->gourmet,
				
				'state_id' => $request->state,
				'city_id' => $request->city,
				'address' => $request->address,
				'street_num' => $request->street_num,
				'street_num2' => $request->street_num2,
				'street_name' => $request->street_name,
				'street_type' => $request->street_type,
				'unit_no' => $request->unit_no,
				'floor_no' => $request->floor_no,
				'neighborhood' => $request->neighborhood,
				'zipcode' => $request->zipcode,
				'latitude' => $request->latitude,
				'longitude' => $request->longitude,
				'property_video_url' => $property_video_url,
				'neighborhood_video_url' => $neighborhood_video_url,
				'website' => $request->website,
				
				'pmcbeds' => $request->pmcbeds,
				'pmcbaths' => $request->pmcbaths,
				'pmcrent' => $request->pmcrent,
				'pmcsqft' => $request->pmcsqft,
                                'pmcfloorplan' => $request->pmcfloorplan,

				'pmcbeds2' => $request->pmcbeds2,
				'pmcbaths2' => $request->pmcbaths2,
				'pmcrent2' => $request->pmcrent2,
				'pmcsqft2' => $request->pmcsqft2,
                                'pmcfloorplan2' => $request->pmcfloorplan2,

				'pmcbeds3' => $request->pmcbeds3,
				'pmcbaths3' => $request->pmcbaths3,
				'pmcrent3' => $request->pmcrent3,
				'pmcsqft3' => $request->pmcsqft3,
                             	'pmcfloorplan3' => $request->pmcfloorplan3,

				'pmcbeds4' => $request->pmcbeds4,
				'pmcbaths4' => $request->pmcbaths4,
				'pmcrent4' => $request->pmcrent4,
				'pmcsqft4' => $request->pmcsqft4,
                                'pmcfloorplan4' => $request->pmcfloorplan4,

				'pmcbeds5' => $request->pmcbeds5,
				'pmcbaths5' => $request->pmcbaths5,
				'pmcrent5' => $request->pmcrent5,
				'pmcsqft5' => $request->pmcsqft5,
                                'pmcfloorplan5' => $request->pmcfloorplan5,

				'pmcbeds6' => $request->pmcbeds6,
				'pmcbaths6' => $request->pmcbaths6,
				'pmcrent6' => $request->pmcrent6,
				'pmcsqft6' => $request->pmcsqft6,
                                'pmcfloorplan6' => $request->pmcfloorplan6,

				'pmcbeds7' => $request->pmcbeds7,
				'pmcbaths7' => $request->pmcbaths7,
				'pmcrent7' => $request->pmcrent7,
				'pmcsqft7' => $request->pmcsqft7,
                                'pmcfloorplan7' => $request->pmcfloorplan7,

				'pmcbeds8' => $request->pmcbeds8,
				'pmcbaths8' => $request->pmcbaths8,
				'pmcrent8' => $request->pmcrent8,
				'pmcsqft8' => $request->pmcsqft8,
                                'pmcfloorplan8' => $request->pmcfloorplan8,

				'pmcbeds9' => $request->pmcbeds9,
				'pmcbaths9' => $request->pmcbaths9,
				'pmcrent9' => $request->pmcrent9,
				'pmcsqft9' => $request->pmcsqft9,
                                'pmcfloorplan9' => $request->pmcfloorplan9,

				'pmcbeds10' => $request->pmcbeds10,
				'pmcbaths10' => $request->pmcbaths10,
				'pmcrent10' => $request->pmcrent10,
				'pmcsqft10' => $request->pmcsqft10,
                                'pmcfloorplan10' => $request->pmcfloorplan10,

				'pmcdogs' => $request->pmcdogs,
				'pmccats' => $request->pmccats,				
				'pmcair' => $request->pmcair,
				'pmcbasketball' => $request->pmcbasketball,
				'pmcbusiness' => $request->pmcbusiness,
				'pmccable' => $request->pmccable,
				'pmccarpeting' => $request->pmccarpeting,
				'pmcclubhouse' => $request->pmcclubhouse,
				'pmccontrolled' => $request->pmccontrolled,
				'pmcdeck' => $request->pmcdeck,
				'pmcelevator' => $request->pmcelevator,
				'pmcceiling' => $request->pmcceiling,
				'pmcfireplace' => $request->pmcfireplace,
				'pmcfitness' => $request->pmcfitness,
				'pmcfurnished' => $request->pmcfurnished,
				'pmchandicap' => $request->pmchandicap,
				'pmchardwood' => $request->pmchardwood,
				'pmcinternet' => $request->pmcinternet,
				'pmcroom' => $request->pmcroom,
				'pmclaundrypmc' => $request->pmclaundry,
				'pmcmedia' => $request->pmcmedia,
				'pmcpool' => $request->pmcpool,
				'pmcspa' => $request->pmcspa,
				'pmcstorage' => $request->pmcstorage,
				'pmctennis' => $request->pmctennis,
				'pmcvaulted' => $request->pmcvaulted,
				'pmcwalk' => $request->pmcwalk,
				'pmcwasher' => $request->pmcwasher,
				'pmcyard' => $request->pmcyard,
				'pmcdish' => $request->pmcdish,
				'pmcplay' => $request->pmcplay,
				'pmcheat' => $request->pmcheat,
				'pmcwater' => $request->pmcwater,
				'pmcelectric' => $request->pmcelectric,
				'pmcgarage' => $request->pmcgarage,
				'pmcassigned' => $request->pmcassigned,
 
                                'style' => $request->style,
								
				'mh' => $request->mh,
				'th' => $request->th,
				'wh' => $request->wh,
				'rh' => $request->rh,
				'fh' => $request->fh,
				'sh' => $request->sh,
				'uh' => $request->uh,
				
				'officephone' => $request->officephone,
				
				'space_available' => $request->space_available,
				'lease_type' => $request->lease_type,
				'lot_size' => $request->lot_size,
				'year_built' => $request->year_built,
				'monthly_rent' => $request->monthly_rent,
				'sqft_price' => $request->sqft_price,
                                'building_size' => $request->building_size,

                                'pmc_logo' => $request->pmc_logo,
                                'pmcemail' => $request->pmcemail,

                                'style' => $request->style,
				'taxes' => $request->taxes,
				'tax_year' => $request->tax_year,
				'assessment' => $request->assessment,
				'county' => $request->county,
				'half_bath' => $request->half_bath,
				'water' => $request->water,
				'sewer' => $request->sewer,
				'heating_type' => $request->heating_type,
				'heating_fuel' => $request->heating_fuel,
				'cooling' => $request->cooling,
				'hw_fuel' => $request->hw_fuel,
				'num_park' => $request->num_park,
				'num_garage' => $request->num_garage,
				'garage_type' => $request->garage_type,
				'num_rooms' => $request->num_rooms,
				'above' => $request->above,
				'below' => $request->below,
				'living_space' => $request->living_space,
				'num_fire' => $request->num_fire,
				'num_levels' => $request->num_levels,

				'ceramic' => $request->ceramic,
				'hardwood' => $request->hardwood,
				'laminate' => $request->laminate,
				'marble' => $request->marble,
				'other' => $request->other,
				'parquet' => $request->parquet,
				'particle' => $request->particle,
				'pine' => $request->pine,
				'plywood' => $request->plywood,
				'vinyl' => $request->vinyl,
				'wall' => $request->wall,

				'basement_type' => $request->basement_type,
				'base_access' => $request->base_access,
				'base_finish' => $request->base_finish,
				'elec_none' => $request->elec_none,
				'elec_gen' => $request->elec_gen,
				'elec_fee' => $request->elec_fee,
				'elec_under' => $request->elec_under,
				'elec_upgrade' => $request->elec_upgrade,

				'owned' => $request->owned,
				'rental' => $request->rental,
				'grill' => $request->grill,
				'cable' => $request->cable,
				'carpeting' => $request->carpeting,
				'ceilingfan' => $request->ceilingfan,
				'antenna' => $request->antenna,
				'vacuum' => $request->vacuum,
				'coal' => $request->coal,
				'compressor' => $request->compressor,
				'dish' => $request->dish,
				'dryer' => $request->dryer,
				'elevator' => $request->elevator,
				'exhaust' => $request->exhaust,
				'freight' => $request->freight,
				'fuelpump' => $request->fuelpump,
				'furniture' => $request->furniture,
				'disposal' => $request->disposal,
				'grease' => $request->grease,
				'hood' => $request->hood,
				'hottub' => $request->hottub,
				'hydraulic' => $request->hydraulic,
				'intercom' => $request->intercom,
				'microwave' => $request->microwave,
				'oven' => $request->oven,
				'overhead' => $request->overhead,
				'pellet' => $request->pellet,
				'fridge' => $request->fridge,
				'sat' => $request->sat,
				'sauna' => $request->sauna,
				'trash' => $request->trash,
				'tvantenna' => $request->tvantenna,
				'washer' => $request->washer,
				'whirlpool' => $request->whirlpool,
				'woodstove' => $request->woodstove,

				'assigned_parking' => $request->assigned_parking,
				'complex_name' => $request->complex_name,
                'condo_fee' => $request->condo_fee,
				'assoc_fee' => $request->assoc_fee,
				'total_units' => $request->total_units,
				'pool_type' => $request->pool_type,
				'reg_adult' => $request->reg_adult,
				'timeshare' => $request->timeshare,
				'prop_mgmt' => $request->prop_mgmt,

				'pets_norestrict' => $request->pets_norestrict,
				'pets_cats' => $request->pets_cats,
				'pets_dogs' => $request->pets_dogs,
				'pets_nodogs' => $request->pets_nodogs,
				'pets_nocats' => $request->pets_nocats,
				'pets_nopets' => $request->pets_nopets,
				'pets_sizelimit' => $request->pets_sizelimit,
				'pets_large' => $request->large,
				'pets_negotiable' => $request->pets_negotiable,
				'pets_small' => $request->pets_small,

				'street_num' => $request->street_num,
				'street_name' => $request->street_name,
				'street_type' => $request->street_type,
				'lot_sqft' => $request->lot_sqft,
				'lot_acres' => $request->lot_acres,
				'lot_frontage' => $request->lot_frontage,
				'approved_lots' => $request->approved_lots,
				'approvals_needed' => $request->approvals_needed,
				'land_status' => $request->land_status,
				'prop_zoning' => $request->prop_zoning,
				'proposed_use' => $request->proposed_use,
				'area_utilities' => $request->area_utilities,
				'road' => $request->road,
				'topography' => $request->topography,

				'stories' => $request->stories,
				'tenancy' => $request->tenancy,
				'opercentage' => $request->opercentage,
				'caprate' => $request->caprate,
				'comm_type' => $request->comm_type,
				'comm_sub' => $request->comm_sub,
				'comm_use' => $request->comm_use,
				'building_class' => $request->building_class,
				'location' => $request->location,
				'pf1' => $request->pf1,
				'pf2' => $request->pf2,
				'pf3' => $request->pf3,
				'pf4' => $request->pf4,
				'pf5' => $request->pf5,
				'pf6' => $request->pf6,

				'multi_units' => $request->multi_units,
				'leased_land' => $request->leased_land,
				'pandl' => $request->pandl,
				'owner_exp' => $request->owner_exp,
				'owner_inc' => $request->owner_inc,
				'num_heat' => $request->num_heat,
				'heat_paid' => $request->heat_paid,
				'mf_laundry' => $request->mf_laundry,

				'multi_beds' => $request->multi_beds,
				'multi_beds2' => $request->multi_beds2,
				'multi_beds3' => $request->multi_beds3,
				'multi_beds4' => $request->multi_beds4,
				'multi_beds5' => $request->multi_beds5,
				'multi_beds6' => $request->multi_beds6,
				'multi_beds7' => $request->multi_beds7,
				'multi_beds8' => $request->multi_beds8,
				'multi_beds9' => $request->multi_beds9,
				'multi_beds10' => $request->multi_beds10,

				'multi_baths' => $request->multi_baths,
				'multi_baths2' => $request->multi_baths2,
				'multi_baths3' => $request->multi_baths3,
				'multi_baths4' => $request->multi_baths4,
				'multi_baths5' => $request->multi_baths5,
				'multi_baths6' => $request->multi_baths6,
				'multi_baths7' => $request->multi_baths7,
				'multi_baths8' => $request->multi_baths8,
				'multi_baths9' => $request->multi_baths9,
				'multi_baths10' => $request->multi_baths10,

				'multi_half' => $request->multi_half,
				'multi_half2' => $request->multi_half2,
				'multi_half3' => $request->multi_half3,
				'multi_half4' => $request->multi_half4,
				'multi_half5' => $request->multi_half5,
				'multi_half6' => $request->multi_half6,
				'multi_half7' => $request->multi_half7,
				'multi_half8' => $request->multi_half8,
				'multi_half9' => $request->multi_half9,
				'multi_half10' => $request->multi_half10,

				'multi_sqft' => $request->multi_sqft,
				'multi_sqft2' => $request->multi_sqft2,
				'multi_sqft3' => $request->multi_sqft3,
				'multi_sqft4' => $request->multi_sqft4,
				'multi_sqft5' => $request->multi_sqft5,
				'multi_sqft6' => $request->multi_sqft6,
				'multi_sqft7' => $request->multi_sqft7,
				'multi_sqft8' => $request->multi_sqft8,
				'multi_sqft9' => $request->multi_sqft9,
				'multi_sqft10' => $request->multi_sqft10,

				'multi_rent' => $request->multi_rent,
				'multi_rent2' => $request->multi_rent2,
				'multi_rent3' => $request->multi_rent3,
				'multi_rent4' => $request->multi_rent4,
				'multi_rent5' => $request->multi_rent5,
				'multi_rent6' => $request->multi_rent6,
				'multi_rent7' => $request->multi_rent7,
				'multi_rent8' => $request->multi_rent8,
				'multi_rent9' => $request->multi_rent9,
				'multi_rent10' => $request->multi_rent10,

				'multi_lease' => $request->multi_lease,
				'multi_lease2' => $request->multi_lease2,
				'multi_lease3' => $request->multi_lease3,
				'multi_lease4' => $request->multi_lease4,
				'multi_lease5' => $request->multi_lease5,
				'multi_lease6' => $request->multi_lease6,
				'multi_lease7' => $request->multi_lease7,
				'multi_lease8' => $request->multi_lease8,
				'multi_lease9' => $request->multi_lease9,
				'multi_lease10' => $request->multi_lease10,

				'multi_type' => $request->multi_type,
				'multi_style' => $request->multi_style,
				
				'open_house' => $request->open_house,
				'ad_status' => $request->ad_status,
				
				'openhouse_date' => $openhouse_date,
				'openhouse_time' => $request->openhouse_time,
				'openhouse_finish' => $request->openhouse_finish,
				
				'comm_units' => $request->comm_units,
				'comm_sqft' => $request->comm_sqft,
				'comm_rent' => $request->comm_rent,
				'res_units' => $request->res_units,
				'res_sqft' => $request->res_sqft,
				'res_rent' => $request->res_rent,
				'retail_units' => $request->retail_units,
				'retail_sqft' => $request->retail_sqft,
				'retail_rent' => $request->retail_rent,
				'flex_units' => $request->flex_units,
				'flex_sqft' => $request->flex_sqft,
				'flex_rent' => $request->flex_rent,
				'industrial_units' => $request->industrial_units,
				'industrial_sqft' => $request->industrial_sqft,
				'industrial_rent' => $request->industrial_rent,
				'medical_units' => $request->medical_units,
				'medical_sqft' => $request->medical_sqft,
				'medical_rent' => $request->medical_rent,
				'office_units' => $request->office_units,
				'office_sqft' => $request->office_sqft,
				'office_rent' => $request->office_rent,
				'other_units' => $request->other_units,
				'other_sqft' => $request->other_sqft,
				'other_rent' => $request->other_rent,
				'restaurant_units' => $request->restaurant_units,
				'restaurant_sqft' => $request->restaurant_sqft,
				'restaurant_rent' => $request->restaurant_rent,
				'storefront_units' => $request->storefront_units,
				'storefront_sqft' => $request->storefront_sqft,
				'storefront_rent' => $request->storefront_rent,
				'warehouse_units' => $request->warehouse_units,
				'warehouse_sqft' => $request->warehouse_sqft,
				'warehouse_rent' => $request->warehouse_rent,
				
				'ad_expiration' => $request->ad_expiration,
				'start_date' => Carbon::parse($request->start_date),
				'end_date' => Carbon::parse($request->end_date),
				
				'mf_studiou' => $request->mf_studiou,
				'mf_studios' => $request->mf_studios,
				'mf_studior' => $request->mf_studior,
				'mf_oneu' => $request->mf_oneu,
				'mf_ones' => $request->mf_ones,
				'mf_oner' => $request->mf_oner,
				'mf_twou' => $request->mf_twou,
				'mf_twos' => $request->mf_twos,
				'mf_twor' => $request->mf_twor,
				'mf_threeu' => $request->mf_threeu,
				'mf_threes' => $request->mf_threes,
				'mf_threer' => $request->mf_threer,
				'mf_fouru' => $request->mf_fouru,
				'mf_fours' => $request->mf_fours,
				'mf_fourr' => $request->mf_fourr,
				
				'land_type' => $request->land_type,
				
				//'company_pdf' => $uniqueFileName,
                //'company_pdf2' => $uniqueFileName2,
				//'company_pdf3' => $uniqueFileName3,
                'pdf_title' => $request->pdf_title,
                'pdf_title2' => $request->pdf_title2,
                'pdf_title3' => $request->pdf_title3,
		    
		    'electric_lu' => $request->electric_lu,
		    'gas_lu' => $request->gas_lu,
		    'muniwater_lu' => $request->muniwater_lu,
		    'none_lu' => $request->none_lu,
		    'sewer_lu' => $request->sewer_lu,
		    
		    'ad_embedded_map' => $request->ad_embedded_map,
			'matterport' => $request->matterport,

			'commission' => $request->commission,

		];

		if($request->company_pdf) {
			$data_pdf = [
				'company_pdf' => $uniqueFileName,
			];
			$data = array_merge($data, $data_pdf);
		}

		if($request->company_pdf2) {
			$data_pdf = [
				'company_pdf2' => $uniqueFileName2,
			];
			$data = array_merge($data, $data_pdf);
		}

		if($request->company_pdf3) {
			$data_pdf = [
				'company_pdf3' => $uniqueFileName3,
			];
			$data = array_merge($data, $data_pdf);
		}

        //dd($data);

		$updated_ad = $ad->update ( $data );
		
		/**
		 * If ad created
		 */
		/*if ($updated_ad) {
			// Attach all unused media with this ad
			Media::whereUserId ( $user_id )->whereAdId ( 0 )->whereRef ( 'ad' )->update ( [ 
					'ad_id' => $ad->id 
			] );
		}*/
		
		if ($request->hasFile('photo6')){
		    
		    $count = 0;
        	foreach($request->file('photo6') as $livefile) {
                $name=$livefile->getClientOriginalName();
                $resized_thumb = Image::make ( $livefile )->resize ( 320, 213 )->stream ();
                
                $imageThumbName = 'uploads/images/thumbs/' . $name;
                $livefile->move(public_path().'/uploads/images/', $name);  
                
                Media::create ( [ 
							'user_id' => $user_id,
							'ad_id' => $ad->id,
							'media_name' => $name,
							'type' => 'image',
							'storage' => get_option ( 'default_storage' ),
							'ref' => 'ad',
							'image_order' => $count
					] );
				current_disk ()->put ( $imageThumbName, $resized_thumb->__toString (), 'public' );
				$count++;
            }
        }
        
        if ($request->hasFile('photo7')){
            
            $count = 0;
        	foreach($request->file('photo7') as $livefile) {
                	$name=$livefile->getClientOriginalName();
                	$resized_thumb = Image::make ( $livefile )->resize ( 320, 213 )->stream ();
                	$imageThumbName = 'uploads/images/thumbs/' . $name;
                	$livefile->move(public_path().'/uploads/images/', $name);
                	Media::create ( [ 
							'user_id' => $user_id,
							'ad_id' => $ad->id,
							'media_name' => $name,
							'type' => 'image',
							'storage' => get_option ( 'default_storage' ),
							'ref' => 'ad',
                	        'image_order' => $count
					] );
				current_disk ()->put ( $imageThumbName, $resized_thumb->__toString (), 'public' );
				$count++;
            	}
        }

        if ($request->hasFile('pmc_logo')){
            $rules = ['pmc_logo'=>'mimes:jpeg,jpg,png'];
            $this->validate($request, $rules);
            
            $image = $request->file('pmc_logo');
            $file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
            $resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();

            $image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();

            $imageFileName = 'uploads/avatar/'.$image_name;

            //Upload original image
            $is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');

            if ($is_uploaded){
                $previous_photo= $ad->pmc_logo;
                $previous_photo_storage= $ad->photo_storage;

                $ad->pmc_logo = $image_name;
                $user->photo_storage = get_option('default_storage');
                $ad->save();

                if ($previous_photo){
                    $previous_photo_path = 'uploads/avatar/'.$previous_photo;
                    $storage = Storage::disk($previous_photo_storage);
                    if ($storage->has($previous_photo_path)){
                        $storage->delete($previous_photo_path);
                    }
                }
            }
        }
		
		return redirect ()->back ()->with ( 'success', trans ( 'app.ad_updated' ) );
	}
	public function adStatusChange(Request $request) {
		$slug = $request->slug;
		$ad = Ad::whereSlug ( $slug )->first ();
		if ($ad) {
			$value = $request->value;
			/*
			 * $ad->status = $value;
			 * $ad->save();
			 */
			ad_status_change ( $ad->id, $value );
			if ($value == 1) {
				return [ 
						'success' => 1,
						'msg' => trans ( 'app.ad_approved_msg' ) 
				];
			} elseif ($value == 2) {
				return [ 
						'success' => 1,
						'msg' => trans ( 'app.ad_blocked_msg' ) 
				];
			} elseif ($value == 3) {
				return [ 
						'success' => 1,
						'msg' => trans ( 'app.ad_archived_msg' ) 
				];
			}
		}
		return [ 
				'success' => 0,
				'msg' => trans ( 'app.error_msg' ) 
		];
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Request $request) {
		$slug = $request->slug;
		$ad = Ad::whereSlug ( $slug )->first ();
		if ($ad) {
			$media = Media::whereAdId ( $ad->id )->get ();
			if ($media->count () > 0) {
				foreach ( $media as $m ) {
					$storage = Storage::disk ( $m->storage );
					if ($storage->has ( 'uploads/images/' . $m->media_name )) {
						$storage->delete ( 'uploads/images/' . $m->media_name );
					}
					if ($m->type == 'image') {
						if ($storage->has ( 'uploads/images/thumbs/' . $m->media_name )) {
							$storage->delete ( 'uploads/images/thumbs/' . $m->media_name );
						}
					}
					$m->delete ();
				}
			}
			$ad->delete ();
			return [ 
					'success' => 1,
					'msg' => trans ( 'app.media_deleted_msg' ) 
			];
		}
		return [ 
				'success' => 0,
				'msg' => trans ( 'app.error_msg' ) 
		];
	}
	public function getSubCategoryByCategory(Request $request) {
		$category_id = $request->category_id;
		$brands = Sub_Category::whereCategoryId ( $category_id )->select ( 'id', 'category_name', 'category_slug' )->get ();
		return $brands;
	}
	public function getBrandByCategory(Request $request) {
		$category_id = $request->category_id;
		$brands = Brand::whereCategoryId ( $category_id )->select ( 'id', 'brand_name' )->get ();
		return $brands;
	}
	public function getStateByCountry(Request $request) {
		// $country_id = $request->country_id;
		$states = State::whereCountryId ( 231 )->select ( 'id', 'state_name' )->get ();
		return $states;
	}
	public function getCityByState(Request $request) {
		$state_id = $request->state_id;
		$cities = City::whereStateId ( $state_id )->select ( 'id', 'city_name' )->orderBy ( 'city_name' )->get ();
		return $cities;
	}
	public function getNeighborhoodByCity(Request $request) {
		$city_id = $request->city_id;
		$neighborhoods = Neighborhood::whereCityId ( $city_id )->select ( 'id', 'neighborhood_name' )->orderBy ( 'neighborhood_name' )->get ();
		return $neighborhoods;
	}
	public function getParentCategoryInfo(Request $request) {
		$category_id = $request->category_id;
		$sub_category = Category::find ( $category_id );
		$category = Category::find ( $sub_category->category_id );
		return $category;
	}
	public function uploadAdsImage(Request $request) {
	    
		$user_id = Auth::user ()->id;
		
		if ($request->hasFile ( 'images' )) {
			$image = $request->file ( 'images' );
			$valid_extensions = [ 
					'jpg',
					'jpeg',
					'png' 
			];

			if (! in_array ( strtolower ( $image->getClientOriginalExtension () ), $valid_extensions )) {
				return [ 
						'success' => 0,
						'msg' => implode ( ',', $valid_extensions ) . ' ' . trans ( 'app.valid_extension_msg' ) 
				];
			}
			
			$file_base_name = str_replace ( '.' . $image->getClientOriginalExtension (), '', $image->getClientOriginalName () );

			$resized = Image::make ( $image )->resize ( 800, null, function ($constraint) {
				$constraint->aspectRatio ();
			} )->stream ();

			$resized_thumb = Image::make ( $image )->resize ( 320, 213 )->stream ();
			
			$image_name = strtolower ( time () . str_random ( 5 ) . '-' . str_slug ( $file_base_name ) ) . '.' . $image->getClientOriginalExtension ();
			
			$imageFileName = 'uploads/images/' . $image_name;
			$imageThumbName = 'uploads/images/thumbs/' . $image_name;
			
			try {
				// Upload original image
				$is_uploaded = current_disk ()->put ( $imageFileName, $resized->__toString (), 'public' );
				if ($is_uploaded) {
					// Save image name into db
					$created_img_db = Media::create ( [ 
							'user_id' => $user_id,
							'media_name' => $image_name,
							'type' => 'image',
							'storage' => get_option ( 'default_storage' ),
							'ref' => 'ad' 
					] );
					
					// upload thumb image
					current_disk ()->put ( $imageThumbName, $resized_thumb->__toString (), 'public' );
					$img_url = media_url ( $created_img_db, false );
					return [ 
							'success' => 1,
							'img_url' => $img_url 
					];
				} else {
					return [ 
							'success' => 0 
					];
				}
			} catch ( \Exception $e ) {
				return $e->getMessage ();
			}
		}
	}
	
	/**
	 *
	 * @param Request $request        	
	 * @return array
	 */
	public function deleteMedia(Request $request) {
		$media_id = $request->media_id;
		$media = Media::find ( $media_id );
		
		$storage = Storage::disk ( $media->storage );
		if ($storage->has ( 'uploads/images/' . $media->media_name )) {
			$storage->delete ( 'uploads/images/' . $media->media_name );
		}
		
		if ($media->type == 'image') {
			if ($storage->has ( 'uploads/images/thumbs/' . $media->media_name )) {
				$storage->delete ( 'uploads/images/thumbs/' . $media->media_name );
			}
		}
		
		$media->delete ();
		return [ 
				'success' => 1,
				'msg' => trans ( 'app.media_deleted_msg' ) 
		];
	}
	
	/**
	 *
	 * @param Request $request        	
	 * @return array
	 */
	public function ajaxDeleteMedia(Request $request) {
	    
		$media_name = $request->media_name;
		$media = Media::where('media_name', $media_name );
		$media->delete ();
		
		return [ 
				'success' => 1,
				'msg' => trans ( 'Image Deleted' ) 
		];
	}
	
	/**
	 *
	 * @param Request $request        	
	 * @return array
	 */
	public function featureMediaCreatingAds(Request $request) {
		$user_id = Auth::user ()->id;
		$media_id = $request->media_id;
		
		Media::whereUserId ( $user_id )->whereAdId ( '0' )->whereRef ( 'ad' )->update ( [ 
				'is_feature' => '0' 
		] );
		Media::whereId ( $media_id )->update ( [ 
				'is_feature' => '1' 
		] );
		
		return [ 
				'success' => 1,
				'msg' => trans ( 'app.media_featured_msg' ) 
		];
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function appendMediaImage() {
		$user_id = Auth::user ()->id;
		$ads_images = Media::whereUserId ( $user_id )->whereAdId ( 0 )->whereRef ( 'ad' )->get ();

		return view ( 'admin.append_media', compact ( 'ads_images' ) );
	}
	
	public function search() {
	    
		$cities = City::where ( 'state_id', 1 )->get ();

		return view ( $this->theme.'listing-search', compact( 'cities' ) );
	}
	
	/**
	 * Filter
	 */
	public function listing(Request $request) {
	    $currentDate = date('Y-m-d');
	    $ads = Ad::active ()
	        ->where([
                ['start_date', '<=', "$currentDate"],
                ['end_date','>=', "$currentDate"]
			]);
	    
		if ($request->q) {
			$ads = $ads->where ( function ($ads) use ($request) {
			    $ads->where ( 'new_city', 'LIKE', $request->q )->orWhere('zipcode', 'LIKE', $request->q)->orWhere ( 'street_num', 'LIKE', $request->q )->orWhere ( 'street_name', 'LIKE', $request->q )->orWhereIn( 'street_name', explode(' ', $request->q) );
			} );
		}
		if ($request->q_new){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q_new}%")->orWhere('description','like', "%{$request->q_new}%");
            });
        }
		if ($request->type) {
			$ads = $ads->whereIn('type', $request->type);
		}
		if ($request->sale_type) {
			$ads = $ads->whereIn('sale_type', $request->sale_type);
		}
		if ($request->comm_type) {
			$ads = $ads->whereIn('comm_type', $request->comm_type);
		}
		if ($request->land_type) {
			$ads = $ads->whereIn('land_type', $request->land_type);
		}
		if ($request->category) {
            $ads = $ads->whereCategory ( $request->category );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->street_name )->orWhere('street_num', 'LIKE', $request->street_name);
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			$ads = $ads->whereIn('new_city', $request->city);
		}
		if ($request->beds) {
			$ads = $ads->where ( 'beds', '>=', $request->beds );
		}
		if ($request->attached_bath) {
			$ads = $ads->where ( 'attached_bath', '>=', $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->min_sqft) {
			$ads = $ads->where ( 'square_unit_space', '>=', $request->min_sqft );
		}
		if ($request->max_sqft) {
			$ads = $ads->where ( 'square_unit_space', '<=', $request->max_sqft );
		}
		
		if ( $request->category == 'residential_rental' ) {
            $ads = $ads->orderBy ( 'price', 'asc' )->whereCategory( 'residential_rental' );
        } else if ( $request->category == 'residential_sale' ) {
            $ads = $ads->orderBy ( 'price', 'asc' )->whereCategory( 'residential_sale' );
        } else if ( $request->category == 'commercial_rental' ) {
            $ads = $ads->orderBy ( 'price', 'asc' )->whereCategory( 'commercial_rental' );
        } else if ( $request->category == 'commercial_sale' ) {
            $ads = $ads->orderBy ( 'price', 'asc' )->whereCategory( 'commercial_sale' );
        } else {
            $ads = $ads->orderBy ( 'price', 'asc' );
        }

		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->orderBy ( 'price', 'asc' );
		$ads = $ads->paginate ( $ads_per_page );
		$map_ads = $ads->where('status', '==', 1);
				
		$title = trans ( 'app.search_properties' );
		
		return view ( $this->theme . 'listing', compact ( 'ads', 'title', 'map_ads' ) );
	}

	public function newListing(Request $request) {
	    $currentDate = date('Y-m-d');
	    $ads = Ad::active ();
	        /*->where([
                ['start_date', '<=', "$currentDate"],
                ['end_date','>=', "$currentDate"]
            ]);*/
	    
		if ($request->q) {
			$ads = $ads->where ( function ($ads) use ($request) {
			    $ads->where ( 'new_city', 'LIKE', $request->q )->orWhere('zipcode', 'LIKE', $request->q)->orWhere ( 'street_num', 'LIKE', $request->q )->orWhere ( 'street_name', 'LIKE', $request->q )->orWhereIn( 'street_name', explode(' ', $request->q) );
			} );
		}
		if ($request->q_new){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q_new}%")->orWhere('description','like', "%{$request->q_new}%");
            });
        }
		if ($request->type) {
			$ads = $ads->whereIn('type', $request->type);
		}
		if ($request->sale_type) {
			$ads = $ads->whereIn('sale_type', $request->sale_type);
		}
		if ($request->comm_type) {
			$ads = $ads->whereIn('comm_type', $request->comm_type);
		}
		if ($request->land_type) {
			$ads = $ads->whereIn('land_type', $request->land_type);
		}
		if ($request->category) {
            $ads = $ads->whereCategory ( $request->category );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->street_name )->orWhere('street_num', 'LIKE', $request->street_name);
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			$ads = $ads->whereIn('new_city', $request->city);
		}
		if ($request->beds) {
			$ads = $ads->where ( 'beds', '>=', $request->beds );
		}
		if ($request->attached_bath) {
			$ads = $ads->where ( 'attached_bath', '>=', $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->min_sqft) {
			$ads = $ads->where ( 'square_unit_space', '>=', $request->min_sqft );
		}
		if ($request->max_sqft) {
			$ads = $ads->where ( 'square_unit_space', '<=', $request->max_sqft );
		}
		
		if ( $request->category == 'residential_rental' ) {
            $ads = $ads->orderBy ( 'price', 'asc' )->whereCategory( 'residential_rental' );
        } else if ( $request->category == 'residential_sale' ) {
            $ads = $ads->orderBy ( 'price', 'asc' )->whereCategory( 'residential_sale' );
        } else if ( $request->category == 'commercial_rental' ) {
            $ads = $ads->orderBy ( 'price', 'asc' )->whereCategory( 'commercial_rental' );
        } else if ( $request->category == 'commercial_sale' ) {
            $ads = $ads->orderBy ( 'price', 'asc' )->whereCategory( 'commercial_sale' );
        } else {
            $ads = $ads->orderBy ( 'price', 'asc' );
        }

		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->orderBy ( 'price', 'asc' );
		$ads = $ads->paginate ( $ads_per_page );
		$map_ads = $ads->where('status', '==', 1);
				
		$title = trans ( 'app.search_properties' );
		
		return view ( $this->theme . 'new-listing', compact ( 'ads', 'title', 'map_ads' ) );
	}
	
	/**
	 * Filter
	 */
	public function resRentalListing(Request $request) {
	    $ads = Ad::active ();
	    
		$ads = $ads->orderBy ( 'price', 'asc' )->where( 'category', 'LIKE', 'residential_rental' );
	
		if ($request->q_new){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q_new}%")->orWhere('description','like', "%{$request->q_new}%");
            });
        }
		if ($request->type) {
			//$ads = $ads->whereType ( $request->type );
			$ads = $ads->whereIn('type', $request->type);
		}
		if ($request->sale_type) {
			//$ads = $ads->whereSaleType ( $request->sale_type );
			$ads = $ads->whereIn('sale_type', $request->sale_type);
		}
		if ($request->category) {
            $ads = $ads->whereCategory ( $request->category );
            //$ads = $ads->whereIn('category', $request->category);
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			//$ads = $ads->whereCityId ( $request->city );
			$ads = $ads->whereIn('new_city', $request->city);
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			//$ads = $ads->whereBeds ( $request->beds );
			$ads = $ads->where ( 'beds', '>=', $request->beds );
		}
		if ($request->attached_bath) {
			//$ads = $ads->whereAttachedBath ( $request->attached_bath );
			$ads = $ads->where ( 'attached_bath', '>=', $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->min_sqft) {
			$ads = $ads->where ( 'square_unit_space', '>=', $request->min_sqft );
		}
		if ($request->max_sqft) {
			$ads = $ads->where ( 'square_unit_space', '<=', $request->max_sqft );
		}
		if ($request->adType) {
			if ($request->adType == 'business') {
				$ads = $ads->business ();
			} elseif ($request->adType == 'personal') {
				$ads = $ads->personal ();
			}
		}
		if ($request->user_id) {
			$ads = $ads->whereUserId ( $request->user_id );
		}

		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->with ( 'city' );
		$ads = $ads->orderBy ( 'price', 'asc' );
		$ads = $ads->paginate ( $ads_per_page );
		
		$map_ads = $ads->where('status', '==', 1);
				
		$title = trans ( 'app.search_properties' );
		
		$selected_categories = Category::find ( $request->category );
		$selected_sub_categories = Category::find ( $request->sub_category );
		
		$selected_states = State::find ( $request->state );
		
		return view ( $this->theme . 'resrentallisting', compact ( 'top_categories', 'ads', 'title', 'selected_categories', 'selected_sub_categories', 'selected_states', 'map_ads', 'cities' ) );
	}
	
	/**
	 * Filter
	 */
	public function resSaleListing(Request $request) {
	    $ads = Ad::active ();
	    
		$ads = $ads->orderBy ( 'price', 'asc' )->where( 'category', 'LIKE', 'residential_sale' );
	
		if ($request->q_new){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q_new}%")->orWhere('description','like', "%{$request->q_new}%");
            });
        }
		if ($request->type) {
			//$ads = $ads->whereType ( $request->type );
			$ads = $ads->whereIn('type', $request->type);
		}
		if ($request->sale_type) {
			//$ads = $ads->whereSaleType ( $request->sale_type );
			$ads = $ads->whereIn('sale_type', $request->sale_type);
		}
		if ($request->category) {
            $ads = $ads->whereCategory ( $request->category );
            //$ads = $ads->whereIn('category', $request->category);
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			//$ads = $ads->whereCityId ( $request->city );
			$ads = $ads->whereIn('new_city', $request->city);
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			//$ads = $ads->whereBeds ( $request->beds );
			$ads = $ads->where ( 'beds', '>=', $request->beds );
		}
		if ($request->attached_bath) {
			//$ads = $ads->whereAttachedBath ( $request->attached_bath );
			$ads = $ads->where ( 'attached_bath', '>=', $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->min_sqft) {
			$ads = $ads->where ( 'square_unit_space', '>=', $request->min_sqft );
		}
		if ($request->max_sqft) {
			$ads = $ads->where ( 'square_unit_space', '<=', $request->max_sqft );
		}
		if ($request->adType) {
			if ($request->adType == 'business') {
				$ads = $ads->business ();
			} elseif ($request->adType == 'personal') {
				$ads = $ads->personal ();
			}
		}
		if ($request->user_id) {
			$ads = $ads->whereUserId ( $request->user_id );
		}

		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->with ( 'city' );
		$ads = $ads->orderBy ( 'price', 'asc' );
		$ads = $ads->paginate ( $ads_per_page );
		
		$map_ads = $ads->where('status', '==', 1);
				
		$title = trans ( 'app.search_properties' );
		
		$selected_categories = Category::find ( $request->category );
		$selected_sub_categories = Category::find ( $request->sub_category );
		
		$selected_states = State::find ( $request->state );
		
		return view ( $this->theme . 'ressalelisting', compact ( 'top_categories', 'ads', 'title', 'selected_categories', 'selected_sub_categories', 'selected_states', 'map_ads', 'cities' ) );
	}
	
	/**
	 * Filter
	 */
	public function commRentalListing(Request $request) {
	    $ads = Ad::active ();
	    
		$ads = $ads->orderBy ( 'price', 'asc' )->where( 'category', 'LIKE', 'commercial_rental' );
	
		if ($request->q_new){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q_new}%")->orWhere('description','like', "%{$request->q_new}%");
            });
        }
		if ($request->type) {
			//$ads = $ads->whereType ( $request->type );
			$ads = $ads->whereIn('type', $request->type);
		}
		if ($request->sale_type) {
			//$ads = $ads->whereSaleType ( $request->sale_type );
			$ads = $ads->whereIn('sale_type', $request->sale_type);
		}
		if ($request->category) {
            $ads = $ads->whereCategory ( $request->category );
            //$ads = $ads->whereIn('category', $request->category);
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			//$ads = $ads->whereCityId ( $request->city );
			$ads = $ads->whereIn('new_city', $request->city);
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			//$ads = $ads->whereBeds ( $request->beds );
			$ads = $ads->where ( 'beds', '>=', $request->beds );
		}
		if ($request->attached_bath) {
			//$ads = $ads->whereAttachedBath ( $request->attached_bath );
			$ads = $ads->where ( 'attached_bath', '>=', $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->min_sqft) {
			$ads = $ads->where ( 'square_unit_space', '>=', $request->min_sqft );
		}
		if ($request->max_sqft) {
			$ads = $ads->where ( 'square_unit_space', '<=', $request->max_sqft );
		}
		if ($request->adType) {
			if ($request->adType == 'business') {
				$ads = $ads->business ();
			} elseif ($request->adType == 'personal') {
				$ads = $ads->personal ();
			}
		}
		if ($request->user_id) {
			$ads = $ads->whereUserId ( $request->user_id );
		}

		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->with ( 'city' );
		$ads = $ads->orderBy ( 'price', 'asc' );
		$ads = $ads->paginate ( $ads_per_page );
		
		$map_ads = $ads->where('status', '==', 1);
				
		$title = trans ( 'app.search_properties' );
		
		$selected_categories = Category::find ( $request->category );
		$selected_sub_categories = Category::find ( $request->sub_category );
		
		$selected_states = State::find ( $request->state );
		
		return view ( $this->theme . 'commrentallisting', compact ( 'top_categories', 'ads', 'title', 'selected_categories', 'selected_sub_categories', 'selected_states', 'map_ads', 'cities' ) );
	}
	
	/**
	 * Filter
	 */
	public function commSaleListing(Request $request) {
	    $ads = Ad::active ();
	    
		$ads = $ads->orderBy ( 'price', 'asc' )->where( 'category', 'LIKE', 'commercial_sale' );
	
		if ($request->q_new){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q_new}%")->orWhere('description','like', "%{$request->q_new}%");
            });
        }
		if ($request->type) {
			//$ads = $ads->whereType ( $request->type );
			$ads = $ads->whereIn('type', $request->type);
		}
		if ($request->sale_type) {
			//$ads = $ads->whereSaleType ( $request->sale_type );
			$ads = $ads->whereIn('sale_type', $request->sale_type);
		}
		if ($request->category) {
            $ads = $ads->whereCategory ( $request->category );
            //$ads = $ads->whereIn('category', $request->category);
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			//$ads = $ads->whereCityId ( $request->city );
			$ads = $ads->whereIn('new_city', $request->city);
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			//$ads = $ads->whereBeds ( $request->beds );
			$ads = $ads->where ( 'beds', '>=', $request->beds );
		}
		if ($request->attached_bath) {
			//$ads = $ads->whereAttachedBath ( $request->attached_bath );
			$ads = $ads->where ( 'attached_bath', '>=', $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->min_sqft) {
			$ads = $ads->where ( 'square_unit_space', '>=', $request->min_sqft );
		}
		if ($request->max_sqft) {
			$ads = $ads->where ( 'square_unit_space', '<=', $request->max_sqft );
		}
		if ($request->adType) {
			if ($request->adType == 'business') {
				$ads = $ads->business ();
			} elseif ($request->adType == 'personal') {
				$ads = $ads->personal ();
			}
		}
		if ($request->user_id) {
			$ads = $ads->whereUserId ( $request->user_id );
		}

		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->with ( 'city' );
		$ads = $ads->orderBy ( 'price', 'asc' );
		$ads = $ads->paginate ( $ads_per_page );
		
		$map_ads = $ads->where('status', '==', 1);
				
		$title = trans ( 'app.search_properties' );
		
		$selected_categories = Category::find ( $request->category );
		$selected_sub_categories = Category::find ( $request->sub_category );
		
		$selected_states = State::find ( $request->state );
		
		return view ( $this->theme . 'commsalelisting', compact ( 'top_categories', 'ads', 'title', 'selected_categories', 'selected_sub_categories', 'selected_states', 'map_ads', 'cities' ) );
	}
	
	/**
	 * Filter
	 */
	public function landSaleListing(Request $request) {
	    $ads = Ad::active ();
	    
		$ads = $ads->orderBy ( 'price', 'asc' )->where( 'category', 'LIKE', 'land_sale' );
	
		if ($request->q_new){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q_new}%")->orWhere('description','like', "%{$request->q_new}%");
            });
        }
		if ($request->type) {
			//$ads = $ads->whereType ( $request->type );
			$ads = $ads->whereIn('type', $request->type);
		}
		if ($request->sale_type) {
			//$ads = $ads->whereSaleType ( $request->sale_type );
			$ads = $ads->whereIn('sale_type', $request->sale_type);
		}
		if ($request->category) {
            $ads = $ads->whereCategory ( $request->category );
            //$ads = $ads->whereIn('category', $request->category);
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			//$ads = $ads->whereCityId ( $request->city );
			$ads = $ads->whereIn('new_city', $request->city);
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			//$ads = $ads->whereBeds ( $request->beds );
			$ads = $ads->where ( 'beds', '>=', $request->beds );
		}
		if ($request->attached_bath) {
			//$ads = $ads->whereAttachedBath ( $request->attached_bath );
			$ads = $ads->where ( 'attached_bath', '>=', $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->min_sqft) {
			$ads = $ads->where ( 'square_unit_space', '>=', $request->min_sqft );
		}
		if ($request->max_sqft) {
			$ads = $ads->where ( 'square_unit_space', '<=', $request->max_sqft );
		}
		if ($request->adType) {
			if ($request->adType == 'business') {
				$ads = $ads->business ();
			} elseif ($request->adType == 'personal') {
				$ads = $ads->personal ();
			}
		}
		if ($request->user_id) {
			$ads = $ads->whereUserId ( $request->user_id );
		}

		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->with ( 'city' );
		$ads = $ads->orderBy ( 'price', 'asc' );
		$ads = $ads->paginate ( $ads_per_page );
		
		$map_ads = $ads->where('status', '==', 1);
				
		$title = trans ( 'app.search_properties' );
		
		$selected_categories = Category::find ( $request->category );
		$selected_sub_categories = Category::find ( $request->sub_category );
		
		$selected_states = State::find ( $request->state );
		
		return view ( $this->theme . 'landsalelisting', compact ( 'ads', 'title', 'selected_categories', 'selected_sub_categories', 'selected_states', 'map_ads' ) );
	}
	
	/**
	 * catListing
	 */
	public function catListing(Request $request, $category) {
	    $ads = Ad::active ();
	    
	    //$request->category = "residential_rental";
	    $request->category = $category;

		if ($request->q) {
			$ads = $ads->where ( function ($ads) use ($request) {
				$temp_q = 0;
				if ($request->q == "providence") {
					$temp_q = 1;
				} else if ($request->q == "cranston") {
					$temp_q = 2;
				} else if ($request->q == "central falls") {
					$temp_q = 3;
				} else if ($request->q == "newport") {
					$temp_q = 5;
				} else if ($request->q == "barrington") {
					$temp_q = 6;
				} else if ($request->q == "bristol") {
					$temp_q = 7;
				} else if ($request->q == "burrillville") {
					$temp_q = 8;
				} else if ($request->q == "charlestown") {
					$temp_q = 9;
				} else if ($request->q == "coventry") {
					$temp_q = 10;
				} else if ($request->q == "cumberland") {
					$temp_q = 11;
				} else if ($request->q == "east greenwich") {
					$temp_q = 12;
				} else if ($request->q == "east providence") {
					$temp_q = 13;
				} else if ($request->q == "hopkinton") {
					$temp_q = 18;
				} else if ($request->q == "johnston") {
					$temp_q = 20;
				} else if ($request->q == "lincoln") {
					$temp_q = 21;
				} else if ($request->q == "narragansett") {
					$temp_q = 24;
				} else if ($request->q == "north kingstown") {
					$temp_q = 25;
				} else if ($request->q == "pawtucket") {
					$temp_q = 26;
				} else if ($request->q == "north providence") {
					$temp_q = 27;
				} else if ($request->q == "north smithfield") {
					$temp_q = 28;
				} else if ($request->q == "portsmouth") {
					$temp_q = 29;
				} else if ($request->q == "richmond") {
					$temp_q = 30;
				} else if ($request->q == "scituate") {
					$temp_q = 31;
				} else if ($request->q == "smithfield") {
					$temp_q = 32;
				} else if ($request->q == "south kingstown") {
					$temp_q = 33;
				} else if ($request->q == "tiverton") {
					$temp_q = 34;
				} else if ($request->q == "warren") {
					$temp_q = 35;
				} else if ($request->q == "warwick") {
					$temp_q = 36;
				} else if ($request->q == "west warwick") {
					$temp_q = 38;
				} else if ($request->q == "westerly") {
					$temp_q = 39;
				} else if ($request->q == "woonsocket") {
					$temp_q = 40;
				} else if ($request->q == "middletown") {
					$temp_q = 175;
				} else if ($request->q == "glocester") {
					$temp_q = 179;
				}
				if ($temp_q != 0) {
					$ads->where ( 'city_id', 'LIKE', $temp_q );
				} else {
                    $ads->where ( 'street_num', 'like', "%{$request->q}%" )
                        ->orWhere ( 'street_name', 'like', "%{$request->q}%" )
                        ->orWhere ( 'street_type', 'like', "%{$request->q}%" );
				}
			} );
		}
		if ($request->q_new){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q_new}%")->orWhere('description','like', "%{$request->q_new}%");
            });
        }
		if ($request->type) {
			//$ads = $ads->whereType ( $request->type );
			$ads = $ads->whereIn('type', $request->type);
		}
		if ($request->sale_type) {
			//$ads = $ads->whereSaleType ( $request->sale_type );
			$ads = $ads->whereIn('sale_type', $request->sale_type);
		}
		if ($request->category) {
            $ads = $ads->whereCategory ( $request->category );
            //$ads = $ads->whereIn('category', $request->category);
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			//$ads = $ads->whereCityId ( $request->city );
			$ads = $ads->whereIn('new_city', $request->city);
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			//$ads = $ads->whereBeds ( $request->beds );
			$ads = $ads->where ( 'beds', '>=', $request->beds );
		}
		if ($request->attached_bath) {
			//$ads = $ads->whereAttachedBath ( $request->attached_bath );
			$ads = $ads->where ( 'attached_bath', '>=', $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->min_sqft) {
			$ads = $ads->where ( 'square_unit_space', '>=', $request->min_sqft );
		}
		if ($request->max_sqft) {
			$ads = $ads->where ( 'square_unit_space', '<=', $request->max_sqft );
		}
		if ($request->adType) {
			if ($request->adType == 'business') {
				$ads = $ads->business ();
			} elseif ($request->adType == 'personal') {
				$ads = $ads->personal ();
			}
		}
		if ($request->user_id) {
			$ads = $ads->whereUserId ( $request->user_id );
		}

		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->with ( 'city' );
		$ads = $ads->orderBy ( 'price', 'asc' );
		$ads = $ads->paginate ( $ads_per_page );
		
		$map_ads = $ads->where('status', '==', 1);
				
		$title = trans ( 'app.search_properties' );
		
		$selected_categories = Category::find ( $request->category );
		$selected_sub_categories = Category::find ( $request->sub_category );
		
		$selected_states = State::find ( $request->state );
		
		return view ( $this->theme . 'listing', compact ( 'top_categories', 'ads', 'title', 'selected_categories', 'selected_sub_categories', 'selected_states', 'map_ads', 'cities', 'category' ) );
	}
	
	/**
	 * searchListing
	 */
	public function searchListing(Request $request) {
		$ads = Ad::active ();
		$cities = City::where ( 'state_id', 1 )->get ();
		
        if ($request->q){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
        }
		if ($request->type) {
			$ads = $ads->whereType ( $request->type );
		}
		if ($request->category) {
                        $ads = $ads->whereCategory ( $request->category );
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			$ads = $ads->whereCityId ( $request->city );
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			$ads = $ads->whereBeds ( $request->beds );
		}
		if ($request->attached_bath) {
			$ads = $ads->whereAttachedBath ( $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		
		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->with ( 'city' );
		$ads = $ads->paginate ( $ads_per_page );
		
		// Check max impressions
		$max_impressions = get_option ( 'premium_ads_max_impressions' );
		
		$map_ads = $ads->where('status', '==', 1);
		
		$title = trans ( 'app.search_properties' );

		return view ( $this->theme . 'listing', compact ( 'top_categories', 'ads', 'title', 'map_ads', 'cities' ) );
	}

	/**
	 * Listing
	 */
	public function singleAdListing(Request $request) {
		$ads = Ad::active ();
		dd($ads);
		
		//$premium_ads = Ad::activePremium ();
		
		if ($request->q) {
			$ads = $ads->where ( function ($ads) use ($request) {
				$temp_q = 0;
				if ($request->q == "providence") {
					$temp_q = 1;
				} else if ($request->q == "cranston") {
					$temp_q = 2;
				} else if ($request->q == "central falls") {
					$temp_q = 3;
				} else if ($request->q == "newport") {
					$temp_q = 5;
				} else if ($request->q == "barrington") {
					$temp_q = 6;
				} else if ($request->q == "bristol") {
					$temp_q = 7;
				} else if ($request->q == "burrillville") {
					$temp_q = 8;
				} else if ($request->q == "charlestown") {
					$temp_q = 9;
				} else if ($request->q == "coventry") {
					$temp_q = 10;
				} else if ($request->q == "cumberland") {
					$temp_q = 11;
				} else if ($request->q == "east greenwich") {
					$temp_q = 12;
				} else if ($request->q == "east providence") {
					$temp_q = 13;
				} else if ($request->q == "hopkinton") {
					$temp_q = 18;
				} else if ($request->q == "johnston") {
					$temp_q = 20;
				} else if ($request->q == "lincoln") {
					$temp_q = 21;
				} else if ($request->q == "narragansett") {
					$temp_q = 24;
				} else if ($request->q == "north kingstown") {
					$temp_q = 25;
				} else if ($request->q == "pawtucket") {
					$temp_q = 26;
				} else if ($request->q == "north providence") {
					$temp_q = 27;
				} else if ($request->q == "north smithfield") {
					$temp_q = 28;
				} else if ($request->q == "portsmouth") {
					$temp_q = 29;
				} else if ($request->q == "richmond") {
					$temp_q = 30;
				} else if ($request->q == "scituate") {
					$temp_q = 31;
				} else if ($request->q == "smithfield") {
					$temp_q = 32;
				} else if ($request->q == "south kingstown") {
					$temp_q = 33;
				} else if ($request->q == "tiverton") {
					$temp_q = 34;
				} else if ($request->q == "warren") {
					$temp_q = 35;
				} else if ($request->q == "warwick") {
					$temp_q = 36;
				} else if ($request->q == "west warwick") {
					$temp_q = 38;
				} else if ($request->q == "westerly") {
					$temp_q = 39;
				} else if ($request->q == "woonsocket") {
					$temp_q = 40;
				} else if ($request->q == "middletown") {
					$temp_q = 175;
				} else if ($request->q == "glocester") {
					$temp_q = 179;
				}
				if ($temp_q != 0) {
					$ads->where ( 'city_id', 'LIKE', $temp_q );
				} else {
                    $ads->where ( 'address', 'like', "%{$request->q}%" );
				}
			} );
		}
		if ($request->type) {
			$ads = $ads->whereType ( $request->type );
		}
		if ($request->category) {
                        $ads = $ads->whereCategory ( $request->category );
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			$ads = $ads->whereCityId ( $request->city );
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			$ads = $ads->whereBeds ( $request->beds );
		}
		if ($request->attached_bath) {
			$ads = $ads->whereAttachedBath ( $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->adType) {
			if ($request->adType == 'business') {
				$ads = $ads->business ();
			} elseif ($request->adType == 'personal') {
				$ads = $ads->personal ();
			}
		}
		if ($request->user_id) {
			$ads = $ads->whereUserId ( $request->user_id );
		}
		if ($request->sortBy) {
			switch ($request->sortBy) {
				case 'price_high_to_low' :
					$ads = $ads->orderBy ( 'price', 'desc' );
					break;
				case 'price_low_to_high' :
					$ads = $ads->orderBy ( 'price', 'asc' );
					break;
				case 'latest' :
					$ads = $ads->orderBy ( 'id', 'desc' );
					break;
			}
		} else {
			$ads = $ads->orderBy ( 'price', 'asc' );
		}
		
		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->with ( 'city' );
		$ads = $ads->paginate ( $ads_per_page );
		
		// Check max impressions
		$max_impressions = get_option ( 'premium_ads_max_impressions' );
		/*$premium_ads = $premium_ads->where ( 'max_impression', '<', $max_impressions );
		$take_premium_ads = get_option ( 'number_of_premium_ads_in_listing' );
		if ($take_premium_ads > 0) {
			$premium_order_by = get_option ( 'order_by_premium_ads_in_listing' );
			$premium_ads = $premium_ads->take ( $take_premium_ads );
			$last_days_premium_ads = get_option ( 'number_of_last_days_premium_ads' );
			
			$premium_ads = $premium_ads->where ( 'created_at', '>=', Carbon::now ()->timezone ( get_option ( 'default_timezone' ) )->subDays ( $last_days_premium_ads ) );
			
			if ($premium_order_by == 'latest') {
				$premium_ads = $premium_ads->orderBy ( 'id', 'desc' );
			} elseif ($premium_order_by == 'random') {
				$premium_ads = $premium_ads->orderByRaw ( 'RAND()' );
			}
			
			$premium_ads = $premium_ads->get ();
		} else {
			$premium_ads = false;
		}*/
		
		$title = trans ( 'app.search_properties' );
		$countries = Country::all ();
		
		$selected_categories = Category::find ( $request->category );
		$selected_sub_categories = Category::find ( $request->sub_category );
		
		$selected_countries = Country::find ( $request->country );
		$selected_states = State::find ( $request->state );
		// dd($selected_countries->states);
		
		$agents = User::whereActiveStatus ( '1' )->whereFeature ( '1' )->whereUserType ( 'user' )->take ( 10 )->orderBy ( 'id', 'desc' )->get ();
		
		return view ( $this->theme . 'single_ad', compact ( 'top_categories', 'ads', 'title', 'countries', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states', 'premium_ads', 'agents' ) );
	}
	
	/**
	 * PMC Listing
	 */
	public function pmclisting(Request $request) {
		$ads = Ad::active ();
		
		$premium_ads = Ad::activePremium ();
		
		if ($request->q) {
			$ads = $ads->where ( function ($ads) use ($request) {
				$temp_q = 0;
				if ($request->q == "providence") {
					$temp_q = 1;
				} else if ($request->q == "cranston") {
					$temp_q = 2;
				} else if ($request->q == "central falls") {
					$temp_q = 3;
				} else if ($request->q == "newport") {
					$temp_q = 5;
				} else if ($request->q == "barrington") {
					$temp_q = 6;
				} else if ($request->q == "bristol") {
					$temp_q = 7;
				} else if ($request->q == "burrillville") {
					$temp_q = 8;
				} else if ($request->q == "charlestown") {
					$temp_q = 9;
				} else if ($request->q == "coventry") {
					$temp_q = 10;
				} else if ($request->q == "cumberland") {
					$temp_q = 11;
				} else if ($request->q == "east greenwich") {
					$temp_q = 12;
				} else if ($request->q == "east providence") {
					$temp_q = 13;
				} else if ($request->q == "hopkinton") {
					$temp_q = 18;
				} else if ($request->q == "johnston") {
					$temp_q = 20;
				} else if ($request->q == "lincoln") {
					$temp_q = 21;
				} else if ($request->q == "narragansett") {
					$temp_q = 24;
				} else if ($request->q == "north kingstown") {
					$temp_q = 25;
				} else if ($request->q == "pawtucket") {
					$temp_q = 26;
				} else if ($request->q == "north providence") {
					$temp_q = 27;
				} else if ($request->q == "north smithfield") {
					$temp_q = 28;
				} else if ($request->q == "portsmouth") {
					$temp_q = 29;
				} else if ($request->q == "richmond") {
					$temp_q = 30;
				} else if ($request->q == "scituate") {
					$temp_q = 31;
				} else if ($request->q == "smithfield") {
					$temp_q = 32;
				} else if ($request->q == "south kingstown") {
					$temp_q = 33;
				} else if ($request->q == "tiverton") {
					$temp_q = 34;
				} else if ($request->q == "warren") {
					$temp_q = 35;
				} else if ($request->q == "warwick") {
					$temp_q = 36;
				} else if ($request->q == "west warwick") {
					$temp_q = 38;
				} else if ($request->q == "westerly") {
					$temp_q = 39;
				} else if ($request->q == "woonsocket") {
					$temp_q = 40;
				} else if ($request->q == "middletown") {
					$temp_q = 175;
				} else if ($request->q == "glocester") {
					$temp_q = 179;
				}
				if ($temp_q != 0) {
					$ads->where ( 'city_id', 'LIKE', $temp_q );
				} else {
                                        $ads->where ( 'address', 'like', "%{$request->q}%" );
				}
			} );
		}
		if ($request->type) {
			$ads = $ads->whereType ( $request->type );
		}
		if ($request->category) {
                        $ads = $ads->whereCategory ( $request->category );
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			$ads = $ads->whereCityId ( $request->city );
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			$ads = $ads->whereBeds ( $request->beds );
		}
		if ($request->attached_bath) {
			$ads = $ads->whereAttachedBath ( $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->adType) {
			if ($request->adType == 'business') {
				$ads = $ads->business ();
			} elseif ($request->adType == 'personal') {
				$ads = $ads->personal ();
			}
		}
		if ($request->user_id) {
			$ads = $ads->whereUserId ( $request->user_id );
		}
		if ($request->sortBy) {
			switch ($request->sortBy) {
				case 'price_high_to_low' :
					$ads = $ads->orderBy ( 'price', 'desc' );
					break;
				case 'price_low_to_high' :
					$ads = $ads->orderBy ( 'price', 'asc' );
					break;
				case 'latest' :
					$ads = $ads->orderBy ( 'id', 'desc' );
					break;
			}
		} else {
			$ads = $ads->orderBy ( 'price', 'asc' )->whereType( 'pmc' );
		}
		
		$ads_per_page = 20;
		$ads = $ads->with ( 'city' );
		$ads = $ads->paginate ( $ads_per_page );
		
		// Check max impressions
		$max_impressions = get_option ( 'premium_ads_max_impressions' );
		$premium_ads = $premium_ads->where ( 'max_impression', '<', $max_impressions );
		$take_premium_ads = get_option ( 'number_of_premium_ads_in_listing' );
		if ($take_premium_ads > 0) {
			$premium_order_by = get_option ( 'order_by_premium_ads_in_listing' );
			$premium_ads = $premium_ads->take ( $take_premium_ads );
			$last_days_premium_ads = get_option ( 'number_of_last_days_premium_ads' );
			
			$premium_ads = $premium_ads->where ( 'created_at', '>=', Carbon::now ()->timezone ( get_option ( 'default_timezone' ) )->subDays ( $last_days_premium_ads ) );
			
			if ($premium_order_by == 'latest') {
				$premium_ads = $premium_ads->orderBy ( 'id', 'desc' );
			} elseif ($premium_order_by == 'random') {
				$premium_ads = $premium_ads->orderByRaw ( 'RAND()' );
			}
			
			$premium_ads = $premium_ads->get ();
		} else {
			$premium_ads = false;
		}
		
		$title = trans ( 'app.search_properties' );
		$countries = Country::all ();
		
		$selected_categories = Category::find ( $request->category );
		$selected_sub_categories = Category::find ( $request->sub_category );
		
		$selected_countries = Country::find ( $request->country );
		$selected_states = State::find ( $request->state );
		// dd($selected_countries->states);
		
		$agents = User::whereActiveStatus ( '1' )->whereFeature ( '1' )->whereUserType ( 'user' )->take ( 10 )->orderBy ( 'id', 'desc' )->get ();
		
		return view ( $this->theme . 'pmclisting', compact ( 'top_categories', 'ads', 'title', 'countries', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states', 'premium_ads', 'agents' ) );
	}

/**
	 * Commercial Listing
	 */
	public function commlisting(Request $request) {
		$ads = Ad::active ();
		
		$premium_ads = Ad::activePremium ();
		
		if ($request->q) {
			$ads = $ads->where ( function ($ads) use ($request) {
				$temp_q = 0;
				if ($request->q == "providence") {
					$temp_q = 1;
				} else if ($request->q == "cranston") {
					$temp_q = 2;
				} else if ($request->q == "central falls") {
					$temp_q = 3;
				} else if ($request->q == "newport") {
					$temp_q = 5;
				} else if ($request->q == "barrington") {
					$temp_q = 6;
				} else if ($request->q == "bristol") {
					$temp_q = 7;
				} else if ($request->q == "burrillville") {
					$temp_q = 8;
				} else if ($request->q == "charlestown") {
					$temp_q = 9;
				} else if ($request->q == "coventry") {
					$temp_q = 10;
				} else if ($request->q == "cumberland") {
					$temp_q = 11;
				} else if ($request->q == "east greenwich") {
					$temp_q = 12;
				} else if ($request->q == "east providence") {
					$temp_q = 13;
				} else if ($request->q == "hopkinton") {
					$temp_q = 18;
				} else if ($request->q == "johnston") {
					$temp_q = 20;
				} else if ($request->q == "lincoln") {
					$temp_q = 21;
				} else if ($request->q == "narragansett") {
					$temp_q = 24;
				} else if ($request->q == "north kingstown") {
					$temp_q = 25;
				} else if ($request->q == "pawtucket") {
					$temp_q = 26;
				} else if ($request->q == "north providence") {
					$temp_q = 27;
				} else if ($request->q == "north smithfield") {
					$temp_q = 28;
				} else if ($request->q == "portsmouth") {
					$temp_q = 29;
				} else if ($request->q == "richmond") {
					$temp_q = 30;
				} else if ($request->q == "scituate") {
					$temp_q = 31;
				} else if ($request->q == "smithfield") {
					$temp_q = 32;
				} else if ($request->q == "south kingstown") {
					$temp_q = 33;
				} else if ($request->q == "tiverton") {
					$temp_q = 34;
				} else if ($request->q == "warren") {
					$temp_q = 35;
				} else if ($request->q == "warwick") {
					$temp_q = 36;
				} else if ($request->q == "west warwick") {
					$temp_q = 38;
				} else if ($request->q == "westerly") {
					$temp_q = 39;
				} else if ($request->q == "woonsocket") {
					$temp_q = 40;
				} else if ($request->q == "middletown") {
					$temp_q = 175;
				} else if ($request->q == "glocester") {
					$temp_q = 179;
				}
				if ($temp_q != 0) {
					$ads->where ( 'city_id', 'LIKE', $temp_q );
				} else {
                                        $ads->where ( 'address', 'like', "%{$request->q}%" );
				}
			} );
		}
		if ($request->type) {
			$ads = $ads->whereType ( $request->type );
		}
		if ($request->category) {
                        $ads = $ads->whereCategory ( $request->category );
		}
		if ($request->parking) {
			$ads = $ads->whereParking ( $request->parking );
		}
		if ($request->pets) {
			$ads = $ads->wherePets ( $request->pets );
		}
		if ($request->utilities) {
			$ads = $ads->whereUtilities ( $request->utilities );
		}
		if ($request->laundry) {
			$ads = $ads->whereLaundry ( $request->laundry );
		}
		if ($request->address) {
			$ads = $ads->whereAddress ( $request->address );
		}
		if ($request->state) {
			$ads = $ads->whereStateId ( $request->state );
		}
		if ($request->city) {
			$ads = $ads->whereCityId ( $request->city );
		}
		if ($request->neighborhood) {
			$ads = $ads->whereNeighborhoodId ( $request->neighborhood );
		}
		if ($request->beds) {
			$ads = $ads->whereBeds ( $request->beds );
		}
		if ($request->attached_bath) {
			$ads = $ads->whereAttachedBath ( $request->attached_bath );
		}
		if ($request->min_price) {
			$ads = $ads->where ( 'price', '>=', $request->min_price );
		}
		if ($request->max_price) {
			$ads = $ads->where ( 'price', '<=', $request->max_price );
		}
		if ($request->adType) {
			if ($request->adType == 'business') {
				$ads = $ads->business ();
			} elseif ($request->adType == 'personal') {
				$ads = $ads->personal ();
			}
		}
		if ($request->user_id) {
			$ads = $ads->whereUserId ( $request->user_id );
		}
		if ($request->sortBy) {
			switch ($request->sortBy) {
				case 'price_high_to_low' :
					$ads = $ads->orderBy ( 'price', 'desc' );
					break;
				case 'price_low_to_high' :
					$ads = $ads->orderBy ( 'price', 'asc' );
					break;
				case 'latest' :
					$ads = $ads->orderBy ( 'id', 'desc' );
					break;
			}
		} else {
			$ads = $ads->orderBy ( 'price', 'asc' )->whereIn( 'type', ['office','medical','restaurant','retail','storefront','industrial','warehouse','land','other','flex','commercial'] );
		}
		
		$ads_per_page = get_option ( 'ads_per_page' );
		$ads = $ads->with ( 'city' );
		$ads = $ads->paginate ( $ads_per_page );
		
		// Check max impressions
		$max_impressions = get_option ( 'premium_ads_max_impressions' );
		$premium_ads = $premium_ads->where ( 'max_impression', '<', $max_impressions );
		$take_premium_ads = get_option ( 'number_of_premium_ads_in_listing' );
		if ($take_premium_ads > 0) {
			$premium_order_by = get_option ( 'order_by_premium_ads_in_listing' );
			$premium_ads = $premium_ads->take ( $take_premium_ads );
			$last_days_premium_ads = get_option ( 'number_of_last_days_premium_ads' );
			
			$premium_ads = $premium_ads->where ( 'created_at', '>=', Carbon::now ()->timezone ( get_option ( 'default_timezone' ) )->subDays ( $last_days_premium_ads ) );
			
			if ($premium_order_by == 'latest') {
				$premium_ads = $premium_ads->orderBy ( 'id', 'desc' );
			} elseif ($premium_order_by == 'random') {
				$premium_ads = $premium_ads->orderByRaw ( 'RAND()' );
			}
			
			$premium_ads = $premium_ads->get ();
		} else {
			$premium_ads = false;
		}
		
		$title = trans ( 'app.search_properties' );
		$countries = Country::all ();
		
		$selected_categories = Category::find ( $request->category );
		$selected_sub_categories = Category::find ( $request->sub_category );
		
		$selected_countries = Country::find ( $request->country );
		$selected_states = State::find ( $request->state );
		// dd($selected_countries->states);
		
		$agents = User::whereActiveStatus ( '1' )->whereFeature ( '1' )->whereUserType ( 'user' )->take ( 10 )->orderBy ( 'id', 'desc' )->get ();
		
		return view ( $this->theme . 'commlisting', compact ( 'top_categories', 'ads', 'title', 'countries', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states', 'premium_ads', 'agents' ) );
	}
	
	/**
	 *
	 * @param
	 *        	$slug
	 * @return mixed
	 */
	public function singleAd($slug) {
		$ad = Ad::whereSlug ( $slug )->first ();
		
        if(isset($ad->start_date)) {
    	    $currentDate = date('Y-m-d');
    
            $startDate = strtr($ad->start_date, '/', '-');
            $endDate = strtr($ad->end_date, '/', '-');

            if (($currentDate >= $startDate) && ($currentDate <= $endDate)){
                $red_flag = 0;
            }else{
                $red_flag = 1;
            }
        } else {
            $red_flag = 0;
        }
		
		//dd($ad);

		if (! $ad) {
			return view ( 'theme.error_404' );
		}
		
		if (! $ad->is_published ()) {
			if (Auth::check ()) {
				$user_id = Auth::user ()->id;
				if ($user_id != $ad->user_id) {
					return view ( 'theme.error_404' );
				}
			} else {
				return view ( 'theme.error_404' );
			}
		} else {
			$ad->view = $ad->view + 1;
			$ad->save ();
		}
		
		$title = $ad->title;
		$ad_agent_id = $ad->user_id;
		
		return view ( $this->theme . 'single_ad', compact ( 'ad', 'title', 'red_flag' ) );
	}



	/**
	 *
	 * 
	 * @return mixed
	 */
	public function serviceAd($id) {
		$user = User::find($id);
		return view ( $this->theme . 'service_ad', compact ( 'user' ) );
	}

	public function embeddedAd($slug) {
		$ad = Ad::whereSlug ( $slug )->first ();
		return view ( $this->theme . 'embedded_ad', compact ( 'ad' ) );
	}
	
	/**
	 *
	 * @param Request $request        	
	 */
	public function switchGridListView(Request $request) {
		session ( [ 
				'grid_list_view' => $request->grid_list_view 
		] );
	}
	
	/**
	 *
	 * @param Request $request        	
	 * @return array
	 */
	public function reportAds(Request $request) {
		$ad = Ad::whereSlug ( $request->slug )->first ();
		//dd($ad);
		if ($ad) {
			$data = [ 
					'ad_id' => $ad->id,
					'reason' => $request->reason,
					'email' => $request->email,
					'message' => $request->message 
			];
			Report_ad::create ( $data );
			return [ 
					'status' => 1,
					'msg' => trans ( 'app.ad_reported_msg' ) 
			];
		}
		return [ 
				'status' => 0,
				'msg' => trans ( 'app.error_msg' ) 
		];
	}
	public function reports() {
		$reports = Report_ad::orderBy ( 'id', 'desc' )->with ( 'ad' )->paginate ( 20 );
		$title = trans ( 'app.ad_reports' );
		
		return view ( 'admin.ad_reports', compact ( 'title', 'reports' ) );
	}
	public function deleteReports(Request $request) {
		Report_ad::find ( $request->id )->delete ();
		return [ 
				'success' => 1,
				'msg' => trans ( 'app.report_deleted_success' ) 
		];
	}
	public function reportsByAds($slug) {
		$user = Auth::user ();
		
		if ($user->is_admin ()) {
			$ad = Ad::whereSlug ( $slug )->first ();
		} else {
			$ad = Ad::whereSlug ( $slug )->whereUserId ( $user->id )->first ();
		}
		
		if (! $ad) {
			return view ( 'admin.error.error_404' );
		}
		
		$reports = $ad->reports ()->paginate ( 20 );
		
		$title = trans ( 'app.ad_reports' );
		return view ( 'admin.reports_by_ads', compact ( 'title', 'ad', 'reports' ) );
	}

    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone() {
        return view('dropzone-view');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request) {
        $user_id = Auth::user ()->id;

        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();

	$resized = Image::make ( $image )->resize ( 800, null, function ($constraint) {
				$constraint->aspectRatio ();
			} )->stream ();
	$resized_thumb = Image::make ( $image )->resize ( 320, 213 )->stream ();

        $imageFileName = 'uploads/images/' . $imageName;
        $imageThumbName = 'uploads/images/thumbs/' . $imageName;

        			try {
				// Upload original image
				$is_uploaded = current_disk ()->put ( $imageFileName, $resized->__toString (), 'public' );
				
				if ($is_uploaded) {
					// Save image name into db
					$created_img_db = Media::create ( [ 
							'user_id' => $user_id,
                            'ad_id' => $ad->id,
							'media_name' => $imageName,
							'type' => 'image',
							'storage' => get_option ( 'default_storage' ),
							'ref' => 'ad' 
					] );
					
					// upload thumb image
					current_disk ()->put ( $imageThumbName, $resized_thumb->__toString (), 'public' );
					$img_url = media_url ( $created_img_db, false );
					return [ 
							'success' => 1,
							'img_url' => $img_url 
					];
				} else {
					return [ 
							'success' => 0 
					];
				}
			} catch ( \Exception $e ) {
				return $e->getMessage ();
			}

    }

    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function images($id) {
        $ad = Ad::find ( $id );
        $ads_images = Media::whereAdId ( $id )->get ();
        return view('admin.images', compact('ad', 'ads_images'));
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function imagesStore(Request $request, $ad_id) {
        $user_id = Auth::user ()->id;

        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();

	$resized = Image::make ( $image )->resize ( 800, null, function ($constraint) {
				$constraint->aspectRatio ();
			} )->stream ();
	$resized_thumb = Image::make ( $image )->resize ( 320, 213 )->stream ();

        $imageFileName = 'uploads/images/' . $imageName;
        $imageThumbName = 'uploads/images/thumbs/' . $imageName;

        			try {
				// Upload original image
				$is_uploaded = current_disk ()->put ( $imageFileName, $resized->__toString (), 'public' );
				
				if ($is_uploaded) {
					// Save image name into db
					$created_img_db = Media::create ( [ 
							'user_id' => $user_id,
                            'ad_id' => $ad_id,
							'media_name' => $imageName,
							'type' => 'image',
							'storage' => get_option ( 'default_storage' ),
							'ref' => 'ad' 
					] );
					
					// upload thumb image
					current_disk ()->put ( $imageThumbName, $resized_thumb->__toString (), 'public' );
					$img_url = media_url ( $created_img_db, false );
					return [ 
							'success' => 1,
							'img_url' => $img_url 
					];
				} else {
					return [ 
							'success' => 0 
					];
				}
			} catch ( \Exception $e ) {
				return $e->getMessage ();
			}

    }
    
    public function reorderImages(Request $request) {
        
        $count = 0;
        $idArray = $request->ids;
        $newArray=explode(",",$idArray);
        foreach($newArray as $id){
            Media::whereId ( $id )->update ( [ 'image_order' => $count ]);
            $count++;
        }
    }
    
    /**
     * Generate mortgage calculator View
     *
     * @return void
     */
    public function mortgage() {
        return view($this->theme . 'mortgage');
    }
    
    /**
     * Show the info Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function introInfo(Request $request)
    {
        $category = $request->category;
        $sale_type = $request->sale_type;
        return view('admin.multi.intro-info',compact('category', 'sale_type'));
    }
    
    /**
     * Show the info Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createInfo(Request $request)
    {
        $category = $request->category;
        $sale_type = $request->sale_type;
        $land_type = $request->land_type;
        $ad = $request->session()->get('ad');
		//dd($ad);
        return view('admin.multi.create-info',compact('ad','category', 'sale_type'));
    }

    /**
     * Post Request to store the info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateInfo(Request $request, $category, $sale_type)
    {
        $category = $request->category;
        $comm_type = "";
        $comm_sub = "";
        $type = "";
        $land_type = "";
        
        if($category == "residential_rental" or $category == "commercial_rental") {
            $rules = [ 
				//'title' => 'required',
				//'description' => 'required',
				//'price' => 'required',
				//'street_num' => 'required',
				//'street_name' => 'required',
				'street_type' => 'required',
				//'state' => 'required',
				//'city' => 'required',
				//'zipcode' => 'required',
				//'type' => 'required',
				//'start_date' => 'required',
				//'end_date' => 'required',
		    ];
        } else {
            $rules = [ 
				'title' => 'required',
				'description' => 'required',
				'price' => 'required',
				'street_num' => 'required',
				'street_name' => 'required',
				'street_type' => 'required',
				'state' => 'required',
				'city' => 'required',
				'zipcode' => 'required',
				'start_date' => 'required',
				'end_date' => 'required',
		    ];
        }
		
		$this->validate ( $request, $rules );
        $status = 1;
        $user_id = Auth::user ()->id;
        $state_id = 1;
        $city_id = 1;
        $slug = "";
        
        if($category == "residential_rental") {
            $type = $request->type;
            $sale_type = "Rental";
        }
        
        if($category == "commercial_rental") {
            $type = $request->type;
            $comm_sub = $request->comm_sub;
        }
        
        if($category == "residential_sale") {
            $sale_type = $request->sale_type;
            $slug = "residential-real-estate-";
        } else if($category == "commercial_sale") {
            $sale_type = "Commercial";
            $comm_type = $request->comm_type;
            $comm_sub = $request->comm_sub;
            $slug = "commercial-real-estate-";
        } else if($category == "land_sale") {
            $sale_type = "land_sale";
            $slug = "land-real-estate-";
        } else if($request->type == "Apartment" or $request->type == "Condo" or $request->type == "Single-Family" or 
                                $request->type == "Loft" or $request->type == "Townhouse" or $request->type == "PMC") {
            $slug = "residential-rental-";
        } else if($request->type == "Office" or $request->type =="Flex" or
                                $request->type =="Medical" or $request->type =="Restaurant" or $request->type
                                =="Retail" or $request->type =="Storefront" or $request->type =="Industrial"
                                or $request->type =="Warehouse" or $request->type =="Other" or $request->type =="Commercial") {
            $slug = "commercial-lease-";
        }
        
        $slug .= unique_slug ( $request->title );

		$data = [ 
				'title' => $request->title,
				'slug' => $slug,
				'description' => $request->description,
				'comment' => $request->comment,
				'category' => $request->category,
				'type' => $type,
				'sale_type' => $sale_type,
		        'land_type' => $request->land_type,
				'price' => $request->price,
				'status' => $status,
				'user_id' => $user_id,
				'state_id' => $state_id,
				'city_id' => $city_id,
				'street_num' => $request->street_num,
				'street_num2' => $request->street_num2,
				'street_name' => $request->street_name,
				'street_type' => $request->street_type,
				'unit_no' => $request->unit_no,
				'floor_no' => $request->floor_no,
				'new_state' => $request->state,
				'new_city' => $request->city,
				'neighborhood' => $request->neighborhood,
				'zipcode' => $request->zipcode,
				'comm_type' => $comm_type,
				'comm_sub' => $comm_sub,
				'start_date' => Carbon::parse($request->start_date),
				'end_date' => Carbon::parse($request->end_date),
		];
		
		dd($data);
		
        if(empty($request->session()->get('ad'))){
            $ad = new Ad();
            $ad->fill($data);
            $request->session()->put('ad', $ad);
        }else{
            $ad = $request->session()->get('ad');
            $ad->fill($data);
            $request->session()->put('ad', $ad);
        }
        
        $request->old();
        
        return redirect('/dashboard/u/posts/multi/create-detail')->withInput();

    }
    
    /**
     * Show the detail Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDetail(Request $request)
    {
        $sale_type = $request->sale_type;
        $ad = $request->session()->get('ad');
        return view('admin.multi.create-detail',compact('ad'));
    }

    /**
     * Post Request to store detail info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateDetail(Request $request)
    {
		$ad = $request->session()->get('ad');
        $category = $request->category;
        $sale_type = $request->sale_type;
		$type = $request->type;
		if($ad->type == "PMC") {
			$rules = [
				'officephone' => 'required',
			];
        } elseif($category == "residential_rental") {
            $rules = [ 
    				'square_unit_space' => 'required',
    				'beds' => 'required',
    				'attached_bath' => 'required',
    		];
		} elseif($category == "commercial_rental") {
            $rules = [
				'space_available' => 'required',
                'sqft_price' => 'required',
            ];
        } elseif($sale_type == "Condo") {
            $rules = [
                'condo_style' => 'required',
                'square_unit_space' => 'required',
                'beds' => 'required',
                'attached_bath' => 'required',
            ];
        } elseif($sale_type == "Single-Family") {
            $rules = [
                'square_unit_space' => 'required',
                'beds' => 'required',
                'attached_bath' => 'required',
            ];
        } elseif($sale_type == "Multi-Family") {
            $rules = [
                'square_unit_space' => 'required',
                'beds' => 'required',
                'attached_bath' => 'required',
            ];
        } elseif($sale_type == "Commercial") {
            $rules = [
                'total_units' => 'required',
				'building_size' => 'required',
            ];
        } elseif($sale_type == "land_sale") {
            $rules = [
                'lot_sqft' => 'required',
            ];
		}
		
		//dd($request);

		$this->validate ( $request, $rules );
		
		$data = [ 
				'square_unit_space' => $request->square_unit_space,
				'beds' => $request->beds,
				'attached_bath' => $request->attached_bath,
				'dogs' => $request->dogs,
				'cats' => $request->cats,
				'laundry' => $request->laundry,
				'heat' => $request->heat,
				'parking' => $request->parking,
				'utilities' => $request->utilities,
				'hfloors' => $request->hfloors,
				'carpet' => $request->carpet,
				'tile' => $request->tile,
				'stainless' => $request->stainless,
				'granite' => $request->granite,
				'central' => $request->central,
				'furnishedapt' => $request->furnishedapt,
				'basementstorage' => $request->basementstorage,
				'fireplace' => $request->fireplace,
				'yard' => $request->yard,
				'ceiling' => $request->ceiling,
				'gourmet' => $request->gourmet,

                'sqft_price' => $request->sqft_price,
                'space_available' => $request->space_available,
                'lease_type' => $request->lease_type,
                'year_built' => $request->year_built,
                'lot_size' => $request->lot_size,
                'monthly_rent' => $request->monthly_rent,
                'building_size' => $request->building_size,
                'stories' => $request->stories,
                'tenancy' => $request->tenancy,
                'opercentage' => $request->opercentage,
                'caprate' => $request->caprate,
                'comm_units' => $request->comm_units,
				'comm_sqft' => $request->comm_sqft,
				'comm_rent' => $request->comm_rent,
				'res_units' => $request->res_units,
				'res_sqft' => $request->res_sqft,
				'res_rent' => $request->res_rent,
				'retail_units' => $request->retail_units,
				'retail_sqft' => $request->retail_sqft,
				'retail_rent' => $request->retail_rent,
				'flex_units' => $request->flex_units,
				'flex_sqft' => $request->flex_sqft,
				'flex_rent' => $request->flex_rent,
				'industrial_units' => $request->industrial_units,
				'industrial_sqft' => $request->industrial_sqft,
				'industrial_rent' => $request->industrial_rent,
				'medical_units' => $request->medical_units,
				'medical_sqft' => $request->medical_sqft,
				'medical_rent' => $request->medical_rent,
				'office_units' => $request->office_units,
				'office_sqft' => $request->office_sqft,
				'office_rent' => $request->office_rent,
				'other_units' => $request->other_units,
				'other_sqft' => $request->other_sqft,
				'other_rent' => $request->other_rent,
				'restaurant_units' => $request->restaurant_units,
				'restaurant_sqft' => $request->restaurant_sqft,
				'restaurant_rent' => $request->restaurant_rent,
				'storefront_units' => $request->storefront_units,
				'storefront_sqft' => $request->storefront_sqft,
				'storefront_rent' => $request->storefront_rent,
				'warehouse_units' => $request->warehouse_units,
				'warehouse_sqft' => $request->warehouse_sqft,
				'warehouse_rent' => $request->warehouse_rent,
				'comm_use' => $request->comm_use,
				'building_class' => $request->building_class,
				'location' =>$request->location,
                'pf1' => $request->pf1,
                'pf2' => $request->pf2,
                'pf3' => $request->pf3,
                'pf4' => $request->pf4,
                'pf5' => $request->pf5,
                'pf6' => $request->pf6,
                
                'taxes' => $request->taxes,
                'tax_year' => $request->tax_year,
                'assessment' => $request->assessment,
                'county' => $request->county,
                'lot_sqft' => $request->lot_sqft,
                'lot_acres' => $request->lot_acres,
                'lot_frontage' => $request->lot_frontage,
                'approved_lots' => $request->approved_lots,
                'land_status' => $request->land_status,
                'prop_zoning' => $request->prop_zoning,
                'proposed_use' => $request->proposed_use,
		        'electric_lu' => $request->electric_lu,
    		    'gas_lu' => $request->gas_lu,
    		    'muniwater_lu' => $request->muniwater_lu,
    		    'none_lu' => $request->none_lu,
    		    'sewer_lu' => $request->sewer_lu,
                'road' => $request->road,
                'water' => $request->water,
                'topography' => $request->topography,
                
                'half_bath' => $request->half_bath,
                'condo_style' => $request->condo_style,
                'sewer' => $request->sewer,
				'heating_type' => $request->heating_type,
				'heating_fuel' => $request->heating_fuel,
				'cooling' => $request->cooling,
				'hw_fuel' => $request->hw_fuel,
				'num_park' => $request->num_park,
				'num_garage' => $request->num_garage,
				'garage_type' => $request->garage_type,
				'num_rooms' => $request->num_rooms,
				'above' => $request->above,
				'below' => $request->below,
				'num_levels' => $request->num_levels,

				'ceramic' => $request->ceramic,
				'hardwood' => $request->hardwood,
				'laminate' => $request->laminate,
				'marble' => $request->marble,
				'other' => $request->other,
				'parquet' => $request->parquet,
				'particle' => $request->particle,
				'pine' => $request->pine,
				'plywood' => $request->plywood,
				'vinyl' => $request->vinyl,
				'wall' => $request->wall,

				'basement_type' => $request->basement_type,
				'base_access' => $request->base_access,
				'base_finish' => $request->base_finish,
				'elec_none' => $request->elec_none,
				'elec_gen' => $request->elec_gen,
				'elec_fee' => $request->elec_fee,
				'elec_under' => $request->elec_under,
				'elec_upgrade' => $request->elec_upgrade,

                'owned' => $request->owned,
				//'rented' => $request->rented,
				'grill' => $request->grill,
				'cable' => $request->cable,
				'carpeting' => $request->carpeting,
				'ceilingfan' => $request->ceilingfan,
				'antenna' => $request->antenna,
				'vacuum' => $request->vacuum,
				'coal' => $request->coal,
				'compressor' => $request->compressor,
				'dish' => $request->dish,
				'dryer' => $request->dryer,
				'elevator' => $request->elevator,
				'exhaust' => $request->exhaust,
				'freight' => $request->freight,
				'fuelpump' => $request->fuelpump,
				'furniture' => $request->furniture,
				'disposal' => $request->disposal,
				'grease' => $request->grease,
				'hood' => $request->hood,
				'hottub' => $request->hottub,
				'hydraulic' => $request->hydraulic,
				'intercom' => $request->intercom,
				'microwave' => $request->microwave,
				'oven' => $request->oven,
				'overhead' => $request->overhead,
				'pellet' => $request->pellet,
				'fridge' => $request->fridge,
				'sat' => $request->sat,
				'sauna' => $request->sauna,
				'trash' => $request->trash,
				'tvantenna' => $request->tvantenna,
				'washer' => $request->washer,
				'whirlpool' => $request->whirlpool,
				'woodstove' => $request->woodstove,

				'complex_name' => $request->complex_name,
                'condo_fee' => $request->condo_fee,
				'assoc_fee' => $request->assoc_fee,
				'total_units' => $request->total_units,
				'pool_type' => $request->pool_type,
				'reg_adult' => $request->reg_adult,
				'timeshare' => $request->timeshare,
				'prop_mgmt' => $request->prop_mgmt,

				'pets_norestrict' => $request->pets_norestrict,
				'pets_cats' => $request->pets_cats,
				'pets_dogs' => $request->pets_dogs,
				'pets_nodogs' => $request->pets_nodogs,
				'pets_nocats' => $request->pets_nocats,
				'pets_nopets' => $request->pets_nopets,
				'pets_sizelimit' => $request->pets_sizelimit,
				'pets_large' => $request->large,
				'pets_negotiable' => $request->pets_negotiable,
				'pets_small' => $request->pets_small,
				
				'property_video_url' => $request->property_video_url,
                'neighborhood_video_url' => $request->neighborhood_video_url,
                
                'style' => $request->style,
                
                'multi_units' => $request->multi_units,
                'leased_land' => $request->leased_land,
                'pandl' => $request->pandl,
                'owner_exp' => $request->owner_exp,
                'owner_inc' => $request->owner_inc,
                'num_heat' => $request->num_heat,
				'heat_paid' => $request->heat_paid,
				'mf_laundry' => $request->mf_laundry,
                
                'pmcdogs' => $request->pmcdogs,
				'pmccats' => $request->pmccats,
				'pmcair' => $request->pmcair,
				'pmcbasketball' => $request->pmcbasketball,
				'pmcbusiness' => $request->pmcbusiness,
				'pmccable' => $request->pmccable,
				'pmccarpeting' => $request->pmccarpeting,
				'pmcclubhouse' => $request->pmcclubhouse,
				'pmccontrolled' => $request->pmccontrolled,
				'pmcdeck' => $request->pmcdeck,
				'pmcelevator' => $request->pmcelevator,
				'pmcceiling' => $request->pmcceiling,
				'pmcfireplace' => $request->pmcfireplace,
				'pmcfitness' => $request->pmcfitness,
				'pmcfurnished' => $request->pmcfurnished,
				'pmchandicap' => $request->pmchandicap,
				'pmchardwood' => $request->pmchardwood,
				'pmcinternet' => $request->pmcinternet,
				'pmcroom' => $request->pmcroom,
				'pmclaundrypmc' => $request->pmclaundry,
				'pmcmedia' => $request->pmcmedia,
				'pmcpool' => $request->pmcpool,
				'pmcspa' => $request->pmcspa,
				'pmcstorage' => $request->pmcstorage,
				'pmctennis' => $request->pmctennis,
				'pmcvaulted' => $request->pmcvaulted,
				'pmcwalk' => $request->pmcwalk,
				'pmcwasher' => $request->pmcwasher,
				'pmcyard' => $request->pmcyard,
				'pmcdish' => $request->pmcdish,
				'pmcplay' => $request->pmcplay,
				'pmcheat' => $request->pmcheat,
				'pmcwater' => $request->pmcwater,
				'pmcelectric' => $request->pmcelectric,
				'pmcgarage' => $request->pmcgarage,
				'pmcassigned' => $request->pmcassigned,
                
                'mh' => $request->mh,
				'th' => $request->th,
				'wh' => $request->wh,
				'rh' => $request->rh,
				'fh' => $request->fh,
				'sh' => $request->sh,
				'uh' => $request->uh,
				'officephone' => $request->officephone,
				
				'mf_studiou' => $request->mf_studiou,
				'mf_studios' => $request->mf_studios,
				'mf_studior' => $request->mf_studior,
				'mf_oneu' => $request->mf_oneu,
				'mf_ones' => $request->mf_ones,
				'mf_oner' => $request->mf_oner,
				'mf_twou' => $request->mf_twou,
				'mf_twos' => $request->mf_twos,
				'mf_twor' => $request->mf_twor,
				'mf_threeu' => $request->mf_threeu,
				'mf_threes' => $request->mf_threes,
				'mf_threer' => $request->mf_threer,
				'mf_fouru' => $request->mf_fouru,
				'mf_fours' => $request->mf_fours,
				'mf_fourr' => $request->mf_fourr,
				
				'land_type' => $request->land_type,
		];

		//dd($data);
				
        $ad = $request->session()->get('ad');
        $ad->fill($data);
        $request->session()->put('ad', $ad);
        $ad->save();
                
        if($ad->type == "PMC") {
            return redirect('/dashboard/u/posts/multi/pmc-units');
        } else if($ad->sale_type == "Multi-Family") {
            return redirect('/dashboard/u/posts/multi/multi-units');
        } else {
            return redirect('/dashboard/u/posts/multi/create-review');
        }
        

    }
    
    /**
     * Show the PMC units page
     *
     * @return \Illuminate\Http\Response
     */
    public function pmcUnits(Request $request)
    {
        $ad = $request->session()->get('ad');
		//dd($ad);
        return view('admin.multi.pmc-units',compact('ad'));
    }

    /**
     * Store PMC units
     *
     * @return \Illuminate\Http\Response
     */
    public function postPMCUnits(Request $request)
    {
        
        $data = [ 
				'pmcbeds' => $request->pmcbeds,
				'pmcbaths' => $request->pmcbaths,
				'pmcrent' => $request->pmcrent,
				'pmcsqft' => $request->pmcsqft,
				'pmcfloorplan' => $request->pmcfloorplan,
				
				'pmcfloorplan2' => $request->pmcfloorplan2,
				'pmcbeds2' => $request->pmcbeds2,
				'pmcbaths2' => $request->pmcbaths2,
				'pmcsqft2' => $request->pmcsqft2,
				'pmcrent2' => $request->pmcrent2,
				
				'pmcfloorplan3' => $request->pmcfloorplan3,
				'pmcbeds3' => $request->pmcbeds3,
				'pmcbaths3' => $request->pmcbaths3,
				'pmcsqft3' => $request->pmcsqft3,
				'pmcrent3' => $request->pmcrent3,
				
				'pmcfloorplan4' => $request->pmcfloorplan4,
				'pmcbeds4' => $request->pmcbeds4,
				'pmcbaths4' => $request->pmcbaths4,
				'pmcsqft4' => $request->pmcsqft4,
				'pmcrent4' => $request->pmcrent4,
				
				'pmcfloorplan5' => $request->pmcfloorplan5,
				'pmcbeds5' => $request->pmcbeds5,
				'pmcbaths5' => $request->pmcbaths5,
				'pmcsqft5' => $request->pmcsqft5,
				'pmcrent5' => $request->pmcrent5,
				
				'pmcfloorplan6' => $request->pmcfloorplan6,
				'pmcbeds6' => $request->pmcbeds6,
				'pmcbaths6' => $request->pmcbaths6,
				'pmcsqft6' => $request->pmcsqft6,
				'pmcrent6' => $request->pmcrent6,
				
				'pmcfloorplan7' => $request->pmcfloorplan7,
				'pmcbeds7' => $request->pmcbeds7,
				'pmcbaths7' => $request->pmcbaths7,
				'pmcsqft7' => $request->pmcsqft7,
				'pmcrent7' => $request->pmcrent7,
				
				'pmcfloorplan8' => $request->pmcfloorplan8,
				'pmcbeds8' => $request->pmcbeds8,
				'pmcbaths8' => $request->pmcbaths8,
				'pmcsqft8' => $request->pmcsqft8,
				'pmcrent8' => $request->pmcrent8,
				
				'pmcfloorplan9' => $request->pmcfloorplan9,
				'pmcbeds9' => $request->pmcbeds9,
				'pmcbaths9' => $request->pmcbaths9,
				'pmcsqft9' => $request->pmcsqft9,
				'pmcrent9' => $request->pmcrent9,
				
				'pmcfloorplan10' => $request->pmcfloorplan10,
				'pmcbeds10' => $request->pmcbeds10,
				'pmcbaths10' => $request->pmcbaths10,
				'pmcsqft10' => $request->pmcsqft10,
				'pmcrent10' => $request->pmcrent10,

		];
		
        $ad = $request->session()->get('ad');
        $ad->fill($data);
        $request->session()->put('ad', $ad);
        
		return redirect('/dashboard/u/posts/multi/create-review');
    }
    
        /**
     * Show the Multi units page
     *
     * @return \Illuminate\Http\Response
     */
    public function multiUnits(Request $request)
    {
        $ad = $request->session()->get('ad');
        return view('admin.multi.multi-units',compact('ad'));
    }

    /**
     * Store Multi units
     *
     * @return \Illuminate\Http\Response
     */
    public function postMultiUnits(Request $request)
    {
        
        $data = [ 
                'multi_type' => $request->multi_type,
				'multi_beds' => $request->multi_beds,
				'multi_baths' => $request->multi_baths,
				'multi_half' => $request->multi_half,
				'multi_sqft' => $request->multi_sqft,
				'multi_rent' => $request->multi_rent,
				'multi_lease' => $request->multi_lease,
				
				'multi_type2' => $request->multi_type2,
				'multi_beds2' => $request->multi_beds2,
				'multi_baths2' => $request->multi_baths2,
				'multi_half2' => $request->multi_half2,
				'multi_sqft2' => $request->multi_sqft2,
				'multi_rent2' => $request->multi_rent2,
				'multi_lease2' => $request->multi_lease2,
				
				'multi_type3' => $request->multi_type3,
				'multi_beds3' => $request->multi_beds3,
				'multi_baths3' => $request->multi_baths3,
				'multi_half3' => $request->multi_half3,
				'multi_sqft3' => $request->multi_sqft3,
				'multi_rent3' => $request->multi_rent3,
				'multi_lease3' => $request->multi_lease3,
				
				'multi_type4' => $request->multi_type4,
				'multi_beds4' => $request->multi_beds4,
				'multi_baths4' => $request->multi_baths4,
				'multi_half4' => $request->multi_half4,
				'multi_sqft4' => $request->multi_sqft4,
				'multi_rent4' => $request->multi_rent4,
				'multi_lease4' => $request->multi_lease4,
				
				'multi_type5' => $request->multi_type5,
				'multi_beds5' => $request->multi_beds5,
				'multi_baths5' => $request->multi_baths5,
				'multi_half5' => $request->multi_half5,
				'multi_sqft5' => $request->multi_sqft5,
				'multi_rent5' => $request->multi_rent5,
				'multi_lease5' => $request->multi_lease5,
				
				'multi_type6' => $request->multi_type6,
				'multi_beds6' => $request->multi_beds6,
				'multi_baths6' => $request->multi_baths6,
				'multi_half6' => $request->multi_half6,
				'multi_sqft6' => $request->multi_sqft6,
				'multi_rent6' => $request->multi_rent6,
				'multi_lease6' => $request->multi_lease6,
				
				'multi_type7' => $request->multi_type7,
				'multi_beds7' => $request->multi_beds7,
				'multi_baths7' => $request->multi_baths7,
				'multi_half7' => $request->multi_half7,
				'multi_sqft7' => $request->multi_sqft7,
				'multi_rent7' => $request->multi_rent7,
				'multi_lease7' => $request->multi_lease7,
				
				'multi_type8' => $request->multi_type8,
				'multi_beds8' => $request->multi_beds8,
				'multi_baths8' => $request->multi_baths8,
				'multi_half8' => $request->multi_half8,
				'multi_sqft8' => $request->multi_sqft8,
				'multi_rent8' => $request->multi_rent8,
				'multi_lease8' => $request->multi_lease8,
				
				'multi_type9' => $request->multi_type9,
				'multi_beds9' => $request->multi_beds9,
				'multi_baths9' => $request->multi_baths9,
				'multi_half9' => $request->multi_half9,
				'multi_sqft9' => $request->multi_sqft9,
				'multi_rent9' => $request->multi_rent9,
				'multi_lease9' => $request->multi_lease9,
				
				'multi_type10' => $request->multi_type10,
				'multi_beds10' => $request->multi_beds10,
				'multi_baths10' => $request->multi_baths10,
				'multi_half10' => $request->multi_half10,
				'multi_sqft10' => $request->multi_sqft10,
				'multi_rent10' => $request->multi_rent10,
				'multi_lease10' => $request->multi_lease10,
		];

        $ad = $request->session()->get('ad');
        $ad->fill($data);
        $request->session()->put('ad', $ad);
        
        return redirect('/dashboard/u/posts/multi/create-review');
    }
    
    /**
     * Show the Property Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createReview(Request $request)
    {
        $ad = $request->session()->get('ad');
        return view('admin.multi.create-review',compact('ad'));
    }

    /**
     * Store property
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateReview(Request $request)
    {
        $ad = $request->session()->get('ad');
        
        //dd($ad);
        $ad->save();
        return redirect('/dashboard/u/posts/multi/create-images');
    }

    /**
     * Show the Property images page
     *
     * @return \Illuminate\Http\Response
     */
    public function createImages(Request $request)
    {
        $ad = $request->session()->get('ad');
        $user_id = Auth::user ()->id;

        return view('admin.multi.create-images',compact('ad'));
    }
    
    /**
     * Show the Property Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createSuccess(Request $request)
    {
        $ad = $request->session()->get('ad');
        return view('admin.multi.create-success',compact('ad'));
    }
    
    /**
     * Get image positions from AJAX
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxImages(Request $request)
    {
        $ad = $request->session()->get('ad');
        $user_id = Auth::user ()->id;
        $positions = $_POST["order"];
        $count = 0;
        
        if(DB::table('media')->where('ad_id',$ad->id)->first()) {
            foreach($positions as $position) {
                Media::whereUserId ( $user_id )->whereAdId ( $ad->id )->whereMediaName( $position )->whereRef ( 'ad' )->update ( [ 
    			        'user_id' => $user_id,
						'ad_id' => $ad->id,
						'media_name' => $position,
						'type' => 'image',
						'storage' => get_option ( 'default_storage' ),
						'ref' => 'ad',
						'image_order' => $count
    		        ] 
    		    );
				$count++;
            }
        } else {
            foreach($positions as $position) {
                Media::create ( 
                    [ 
							'user_id' => $user_id,
							'ad_id' => $ad->id,
							'media_name' => $position,
							'type' => 'image',
							'storage' => get_option ( 'default_storage' ),
							'ref' => 'ad',
							'image_order' => $count
					] );
					$count++;
            }
        }
    }

    /**
     * Store property
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateImages(Request $request)
    {
        $ad = $request->session()->get('ad');
        $user_id = Auth::user ()->id;
        
        $uniqueFileName = "";
        $uniqueFileName2 = "";
        $uniqueFileName3 = "";
        
        if($request->company_pdf) {
            $uniqueFileName = uniqid() . $request->company_pdf->getClientOriginalName();
            $request->company_pdf->move(public_path().'/pdf/', $uniqueFileName);
        }
        
        if($request->company_pdf2) {
            $uniqueFileName2 = uniqid() . $request->company_pdf2->getClientOriginalName();
            $request->company_pdf2->move(public_path().'/pdf/', $uniqueFileName2);
        }
        
        if($request->company_pdf3) {
            $uniqueFileName3 = uniqid() . $request->company_pdf3->getClientOriginalName();
            $request->company_pdf3->move(public_path().'/pdf/', $uniqueFileName3);
        }
        
        $count = 0;
        if ($request->hasFile('photo6')){
        	foreach($request->file('photo6') as $livefile) {
                	$name=$livefile->getClientOriginalName();
                	$resized_thumb = Image::make ( $livefile )->resize ( 320, 213 )->stream ();
                
                	$imageThumbName = 'uploads/images/thumbs/' . $name;
                	$livefile->move(public_path().'/uploads/images/', $name);
				current_disk ()->put ( $imageThumbName, $resized_thumb->__toString (), 'public' );
			 Media::create ( [
                                                        'user_id' => $user_id,
                                                        'ad_id' => $ad->id,
                                                        'media_name' => $name,
                                                        'type' => 'image',
                                                        'storage' => get_option ( 'default_storage' ),
                                                        'ref' => 'ad',
                                                        'image_order' => $count
                                        ] );
            	}
        	$count++;
        }
        
        $ad->company_pdf = $uniqueFileName;
        $ad->company_pdf2 = $uniqueFileName2;
        $ad->company_pdf3 = $uniqueFileName3;
        $ad->pdf_title = $request->pdf_title;
        $ad->pdf_title2 = $request->pdf_title2;
        $ad->pdf_title3 = $request->pdf_title3;
        
        $ad->save();
        $temp_id = $ad->id;
        session()->forget('ad');
        //return redirect('/dashboard/u/posts/edit/' . $temp_id );
        return view('admin.multi.create-success',compact('ad',$ad,'temp_id', $temp_id));
    }
    
    /**
	 * Open House Listing
	 */
	public function openhouses() {
	    $currentDate = date('Y-m-d');
        $ads = Ad::where('openhouse_date', '>=', $currentDate)->orderBy('openhouse_date')->get();
		return view ( $this->theme . 'openhouses', compact ( 'ads' ));
	}
    
    /**
	 * Open House Listing
	 */
	public function openhouselisting(Request $request) {
	    
	    $currentDate = date('Y-m-d');
	    //$ads = Ad::active ();
        if ($request->city) {
            $ads = Ad::with ( 'city', 'country', 'state' )
            ->whereStatus ( 1 )
            ->orderBy ( 'openhouse_date' )
            ->where([
                ['new_city', '=', "$request->city"],
                ['openhouse_date','>=', $currentDate]
            ])
            ->paginate ( 100 );
        } else if ($request->zipcode) {
            $ads = Ad::with ( 'city', 'country', 'state' )
            ->whereStatus ( 1 )
            ->orderBy ( 'openhouse_date' )
            ->where([
                ['zipcode', '=', "$request->zipcode"],
                ['openhouse_date','>=', $currentDate]
            ])
            ->paginate ( 100 );
        } else {
            $ads = Ad::where('openhouse_date', '>=', $currentDate)->orderBy('openhouse_date')->get();
        }
        
		return view ( $this->theme . 'open-house', compact ( 'ads' ));
	}

}
