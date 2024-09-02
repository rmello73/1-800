<?php

namespace App\Http\Controllers;

use App\Ad;
use DB;
use App\Country;
use App\Favorite;
use Session;
use App\User;
use App\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Contact_query;

use App\Mail\EmailVerification;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Datatables;

use willvincent\Rateable\Rating;

class UserController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('app.users');
        $users = User::all()->where('user_type', '!=', 'admin');
        return view('admin.users', compact('title', 'users'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ratings()
    {
        $title = "Ratings";
        $users = User::all();
        $ratings = Rating::all();
        dd($ratings);
        return view('admin.ratings', compact('title', 'ratings', 'users'));
    }

    public function current()
    {
        $title = trans('app.users');
        return view('theme.modern.currentlisting', compact('title'));
    }

    public function saveusers()
    {
        $title = trans('app.users');
        return view('theme.modern.saveuserlisting', compact('title'));
    }

    public function reagents()
    {
        $title = trans('app.users');
        return view('theme.modern.agentlisting', compact('title'));
    }

    public function landlords()
    {
        $title = trans('app.users');
        return view('theme.modern.landlordlisting', compact('title'));
    }

    public function profs()
    {
        $title = trans('app.users');
        return view('theme.modern.proflisting', compact('title'));
    }

    public function saveuserUsersData(){
        $users = User::select('id','email', 'created_at')->whereUserType('saveuser')->get();
        return  Datatables::of($users)
            ->editColumn('created_at',function($user){
                return $user->signed_up_datetime();
            })
            ->removeColumn('id', 'feature')
            ->make();
    }

    public function usersData(){
        $users = User::select('id','name', 'email', 'feature', 'created_at')->get();
        return  Datatables::of($users)
            ->editColumn('name', function($user){
                $html = '<a href="'.route('user_info', $user->id).'">'.$user->name.'</a>';
                return $html;
            })
            ->editColumn('created_at',function($user){
                return $user->signed_up_datetime();
            })
            ->addColumn('action', function($user){
                $html = '<a href="'.route('user_info', $user->id).'" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> '.trans('app.view').'</a>';

                if($user->feature == 0){
                    $html .= '<a href="javascript:;" class="btn btn-default btn-xs agent-feature-btn" data-user-id="'.$user->id.'"><i class="fa fa-star-o"></i></a>';
                }else{
                    $html .= '<a href="javascript:;" class="btn btn-default btn-xs agent-feature-btn" data-user-id="'.$user->id.'"><i class="fa fa-star"></i></a>';
                }

                return $html;
            })
            ->removeColumn('id', 'feature')
            ->make();
    }
    
    public function ratingsData(){
        $ratings = Rating::select('id', 'rateable_id', 'user_id', 'rating', 'comment', 'created_at')->get();
        return  Datatables::of($ratings)
            ->editColumn('rateable_id', function($rating){
                $html = $rating->rateable_id;
                return $html;
            })
            ->editColumn('user_id',function($rating){
                return $rating->user_id;
            })
            ->editColumn('rating',function($rating){
                return $rating->rating;
            })
            ->editColumn('comment',function($rating){
                return $rating->comment;
            })
            ->editColumn('created_at',function($rating){
                return $rating->created_at;
            })
            ->editColumn('action', function($rating){
                $html = '<button class="delete-modal btn btn-danger rating-delete-btn" data-rating-id="'.$rating->id.'"> <span class="glyphicon glyphicon-trash"></span> Delete</button></td>';
                return $html;
            })
            ->removeColumn('id', 'feature')
            ->make();
    }
    
    public function profData(){
        $users = User::select('id', 'name', 'company', 'email', 'feature', 'created_at')->whereUserType('prof')->get();
        return  Datatables::of($users)
            ->editColumn('name', function($user){
                $html = '<a href="'.route('user_info', $user->id).'">'.$user->name.'</a>';
                return $html;
            })
            ->editColumn('company', function($user){
                $html = '<a href="'.route('user_info', $user->id).'">'.$user->company.'</a>';
                return $html;
            })
            ->editColumn('created_at',function($user){
                return $user->signed_up_datetime();
            })
            ->addColumn('action', function($user){
                $html = '<a href="'.route('user_info', $user->id).'" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> '.trans('app.view').'</a>';

                return $html;
            })
            ->removeColumn('id', 'feature')
            ->make();
    }

    public function currentUsersData(){
        $users = User::select('id','name', 'email', 'feature', 'created_at')->whereUserType('user')->get();
        return  Datatables::of($users)
            ->editColumn('name', function($user){
                $html = '<a href="'.route('user_info', $user->id).'">'.$user->name.'</a>';
                return $html;
            })
            ->editColumn('created_at',function($user){
                return $user->signed_up_datetime();
            })
            ->removeColumn('id', 'feature')
            ->make();
    }

    public function agentUsersData(){
        $users = User::select('id','name', 'email', 'feature', 'created_at')->whereUserType('agent')->get();
        return  Datatables::of($users)
            ->editColumn('name', function($user){
                $html = '<a href="'.route('user_info', $user->id).'">'.$user->name.'</a>';
                return $html;
            })
            ->editColumn('created_at',function($user){
                return $user->signed_up_datetime();
            })
            ->removeColumn('id', 'feature')
            ->make();
    }

    public function landlordUsersData(){
        $users = User::select('id','name', 'email', 'feature', 'created_at')->whereUserType('landlord')->get();
        return  Datatables::of($users)
            ->editColumn('name', function($user){
                $html = '<a href="'.route('user_info', $user->id).'">'.$user->name.'</a>';
                return $html;
            })
            ->editColumn('created_at',function($user){
                return $user->signed_up_datetime();
            })
            ->removeColumn('id', 'feature')
            ->make();
    }

    public function profUsersData(){
        $users = User::select('id','name', 'email', 'feature', 'created_at')->whereUserType('prof')->get();
        return  Datatables::of($users)
            ->editColumn('name', function($user){
                $html = '<a href="'.route('user_info', $user->id).'">'.$user->name.'</a>';
                return $html;
            })
            ->editColumn('created_at',function($user){
                return $user->signed_up_datetime();
            })
            ->removeColumn('id', 'feature')
            ->make();
    }

    public function userInfo($id){
        $title = trans('app.user_info');
        $user = User::find($id);
        $ads = $user->ads()->paginate(20);

        if (!$user){
            return view('admin.error.error_404');
        }

        return view('admin.user_info', compact('title', 'user', 'ads'));

    }

    public function changeStatus(Request $request){
        $user_id = $request->user_id;
        $status = $request->status;
        User::whereId($user_id)->update(['active_status' => $status]);
        if ($status == 1){
            return '<p class="alert alert-success">'.trans('app.user_has_been_activated').' </p>';
        }elseif ($status == 2){
            return '<p class="alert alert-warning">'.trans('app.user_has_been_blocked').' </p>';
        }
    }

    public function changeFeature(Request $request){
        $user_id = $request->user_id;

        $user = User::find($user_id);
        $current_feature = $user->feature;
        $user->feature = ($current_feature == 0) ? 1 : 0;
        $user->save();

        if ($current_feature == 1){
            return '<i class="fa fa-star-o"></i>';
        }elseif ($current_feature == 0){
            return '<i class="fa fa-star"></i>';
        }
    }
    
    public function deleteRating(Request $request){
        $rating_id = $request->id;

        $rating = Rating::find($rating_id);
        $rating->delete();
        
        return back()->with('message','Review Deleted!');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd($request);

        $rules = [
            'first_name'    => 'required',
            'last_name'    => 'required',
            'email'    => 'required|email|unique:users,email',
            'mobile'    => 'required',
            'password'    => 'required|confirmed',
            'password_confirmation'    => 'required',
            'agree'    => 'required',
        ];
        $this->validate($request, $rules);

        $data = [
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'name'              => $request->first_name.' '.$request->last_name,
            //'address'          => $request->address,
            'street_name'        => $request->street_name,
            'street_num'        => $request->street_num,
            'street_type'        => $request->street_type,
            'unit_no'         => $request->unit_no,
            'city'          => $request->city,
            'state'          => $request->state,
            'zip'          => $request->zip,
            'mobile'          => $request->mobile,
            'fax'          => $request->fax,
            'company'          => $request->company,
            'title'          => $request->title,
            'years_bus'      => $request->years_bus,
            'video'          => $request->video,
            'video2'          => $request->video2,
            'video3'          => $request->video3,
            'video4'          => $request->video4,
            'videotitle2'          => $request->videotitle2,
            'videotitle3'          => $request->videotitle3,
            'videotitle4'          => $request->videotitle4,
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'email_token'       => str_random(10),
            'office'             => $request->office,
            'user_type'         => 'basic',
            'active_status'         => '1',
	        'description'		=> $request->description,
            'category'          => $request->category,
            'subcat'          => $request->subcat,
            'asp'          => $request->asp,
            'asp2'          => $request->asp2,
            'asp3'          => $request->asp3,
            'asp4'          => $request->asp4,
            'asp5'          => $request->asp5,
            'tsa'          => $request->tsa,
            'tsa2'          => $request->tsa2,
            'tsa3'          => $request->tsa3,
            'tsa4'          => $request->tsa4,
            'tsa5'          => $request->tsa5,
            'tsa6'          => $request->tsa6,
            'tsa7'          => $request->tsa7,
            'tsa8'          => $request->tsa8,
            'tsa9'          => $request->tsa9,
            'tsa10'          => $request->tsa10,
            'mh'          => $request->mh,
            'th'          => $request->th,
            'wh'          => $request->wh,
            'rh'          => $request->rh,
            'fh'          => $request->fh,
            'sh'          => $request->sh,
            'uh'          => $request->uh,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'visa' => $request->visa,
            'mastercard' => $request->mastercard,
            'paypal' => $request->paypal,
            'venmo' => $request->venmo,
            'cashapp' => $request->cashapp,
            'cash' => $request->cash,
            'checks' => $request->checks,
        ];
        
        DB::beginTransaction();
        try
        {
            $user_create = User::create($data);
            // After creating the user send an email with the random token generated in the create method above
            $email = new EmailVerification(new User(['email_token' => $user_create->email_token, 'name' => $user_create->name]));
            //Mail::to($user_create->email)->send($email);
            Mail::to('ronmellojr@gmail.com')->send($email);
            //dd("Mail sent!");
            DB::commit();
            return redirect(route('login'))->with('success', trans('We have sent you a verification email!'));
        }
        catch(Exception $e)
        {
            DB::rollback(); 
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
    
    public function ratingDestroy(Request $request) {
	$id = $request->id;
	$rating = Rating::whereId($id);
        if ($rating){
            $rating->delete();
            return ['success' => 1, 'msg' => trans('app.operation_success')];
        }
        return ['success' => 0, 'msg' => trans('app.error_msg')];
    }

    public function profile(){
        $title = trans('app.profile');
        $user = Auth::user();
        return view('admin.profile', compact('title', 'user'));
    }

    public function showSidebar(){
        return view('theme.modern.sidebar');
    }

    public function agentAd($slug){
        $user = User::find($slug);
        $user_id = $user->id;
        $agent_images = Media::whereUserId ( $user->id )->whereRef ( 'user' )->get ();
        $agent_images1 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg1( 1 )->get ();
        $agent_images2 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg2( 1 )->get ();
        $agent_images3 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg3( 1 )->get ();
        $agent_images4 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg4( 1 )->get ();
        $agent_images5 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg5( 1 )->get ();
        $agent_images6 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg6( 1 )->get ();
                
        $title = trans('app.profile');
        
        return view('theme.modern.agent_ad', compact('user', 'agent_images', 'agent_images1', 'agent_images2', 'agent_images3', 'agent_images4', 'agent_images5', 'agent_images6'));
    }

    public function profAd($slug){
        $user = User::find($slug);
        $user_id = $user->id;
        $agent_images = Media::whereUserId ( $user->id )->whereRef ( 'user' )->get ();
        $agent_images1 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg1( 1 )->get ();
        $agent_images2 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg2( 1 )->get ();
        $agent_images3 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg3( 1 )->get ();
        $agent_images4 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg4( 1 )->get ();
        $agent_images5 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg5( 1 )->get ();
        $agent_images6 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg6( 1 )->get ();
                
        $title = trans('app.profile');
        
        return view('theme.modern.prof_ad', compact('user', 'agent_images', 'agent_images1', 'agent_images2', 'agent_images3', 'agent_images4', 'agent_images5', 'agent_images6'));
    }

    public function profileEdit(){
        $title = trans('app.profile_edit');
        $user = Auth::user();
        $agent_images = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->orderBy( 'image_order' )->get ();
        $agent_images1 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg1( 1 )->get ();
        $agent_images2 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg2( 1 )->get ();
        $agent_images3 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg3( 1 )->get ();
        $agent_images4 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg4( 1 )->get ();
        $agent_images5 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg5( 1 )->get ();
        $agent_images6 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg6( 1 )->get ();
        
        return view('admin.profile_edit', compact('title', 'user', 'agent_images', 'agent_images1', 'agent_images2', 'agent_images3', 'agent_images4', 'agent_images5', 'agent_images6'));
    }
    
    public function userEdit($id){
        $title = trans('app.profile_edit');
        $user = User::find($id);
        $countries = Country::all();

        return view('admin.user_edit', compact('title', 'user', 'countries'));
    }
    
    public function userEditPost(Request $request, $id){
        $user = User::find($id);

        //Validating
        $rules = [
            'email'    => 'required|email|unique:users,email,'.$user->id,
        ];
        $this->validate($request, $rules);

        $inputs = array_except($request->input(), ['_token', 'photo']);
        $user->update($inputs);

        if ($request->hasFile('photo')){
            $rules = ['photo'=>'mimes:jpeg,jpg,png'];
            $this->validate($request, $rules);
            
            $image = $request->file('photo');
            $file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
            $resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();

            $image_name = time() . $image->getClientOriginalExtension();

            $imageFileName = 'uploads/avatar/'.$image_name;

            //Upload original image
            $is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');

            if ($is_uploaded){
                $previous_photo= $user->photo;
                $previous_photo_storage= $user->photo_storage;

                $user->photo = $image_name;
                $user->photo_storage = get_option('default_storage');
                $user->save();

                if ($previous_photo){
                    $previous_photo_path = 'uploads/avatar/'.$previous_photo;
                    $storage = Storage::disk($previous_photo_storage);
                    if ($storage->has($previous_photo_path)){
                        $storage->delete($previous_photo_path);
                    }
                }
            }
        }
        
        if ($request->hasFile('agent_logo')){
        	$rules = ['agent_logo'=>'mimes:jpeg,jpg,png'];
        	$this->validate($request, $rules);
        
        	$image = $request->file('agent_logo');
        	$file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
        	$resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();
        
        	$image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();
        
        	$imageFileName = 'uploads/avatar/'.$image_name;
        
        	//Upload original image
        	$is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');
        
        	if ($is_uploaded){
        		$previous_photo= $user->agent_logo;
        		$previous_photo_storage= $user->photo_storage;
        
        		$user->agent_logo = $image_name;
        		$user->photo_storage = get_option('default_storage');
        		$user->save();
        
        		if ($previous_photo){
        			$previous_photo_path = 'uploads/avatar/'.$previous_photo;
        			$storage = Storage::disk($previous_photo_storage);
        			if ($storage->has($previous_photo_path)){
        				$storage->delete($previous_photo_path);
        			}
        		}
        	}
        }
        
        if ($request->hasFile('company_pdf')){
        	$rules = ['company_pdf'=>'mimes:pdf'];
        	$this->validate($request, $rules);
        
        	$image = $request->file('company_pdf');
        	$file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
        	$resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();
        
        	$image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();
        
        	$imageFileName = 'uploads/avatar/'.$image_name;
        
        	//Upload original image
        	$is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');
        
        	if ($is_uploaded){
        		$previous_photo= $user->company_pdf;
        		$previous_photo_storage= $user->photo_storage;
        
        		$user->company_pdf = $image_name;
        		$user->photo_storage = get_option('default_storage');
        		$user->save();
        
        		if ($previous_photo){
        			$previous_photo_path = 'uploads/avatar/'.$previous_photo;
        			$storage = Storage::disk($previous_photo_storage);
        			if ($storage->has($previous_photo_path)){
        				$storage->delete($previous_photo_path);
        			}
        		}
        	}
        }

        return view('admin.user_info', compact('title', 'user'));
    }
    
    public function imageCrop()
    {
        return view('admin.imageCrop');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageCropPost(Request $request)
    {
        $user = Auth::user();
        $data = $request->image;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name= time().'.png';
        $path = public_path() . "/uploads/avatar/" . $image_name;

        file_put_contents($path, $data);

        $user->agent_logo = $image_name;
        $user->photo_storage = get_option('default_storage');
        $user->save();

        return response()->json(['success'=>'done']);
    }

    public function profileEditPost(Request $request){
        $user = Auth::user();

        if(!empty($user->user_temp)) {
            $user->user_type = $user->user_temp;
            $user->save();
        }
        
        $agent_images = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->get ();
        $agent_images1 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg1( 1 )->get ();
        $agent_images2 = Media::whereUserId ( $user->id )->whereAdId ( 0 )->whereRef ( 'user' )->whereImg2( 2 )->get ();

        $rules = [
            //'email'    => 'required|email|unique:users,email,'.$user->id,
        ];
        $this->validate($request, $rules);

        $inputs = array_except($request->input(), ['_token', 'photo']);
        $user->update($inputs);

        if ($request->hasFile('photo')){
            $rules = ['photo'=>'mimes:jpeg,jpg,png'];
            $this->validate($request, $rules);
            
            $image = $request->file('photo');
            $file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
            $resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();

            $image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();

            $imageFileName = 'uploads/avatar/'.$image_name;

            //Upload original image
            $is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');

            if ($is_uploaded){
                $previous_photo= $user->photo;
                $previous_photo_storage= $user->photo_storage;

                $user->photo = $image_name;
                $user->photo_storage = get_option('default_storage');
                $user->save();

                if ($previous_photo){
                    $previous_photo_path = 'uploads/avatar/'.$previous_photo;
                    $storage = Storage::disk($previous_photo_storage);
                    if ($storage->has($previous_photo_path)){
                        $storage->delete($previous_photo_path);
                    }
                }
            }
        }
        
        if ($request->hasFile('agent_logo')){
        	$rules = ['agent_logo'=>'mimes:jpeg,jpg,png'];
        	$this->validate($request, $rules);
        
        	$image = $request->file('agent_logo');
        	$file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
        	$resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();
        
        	$image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();
        
        	$imageFileName = 'uploads/avatar/'.$image_name;
        
        	//Upload original image
        	$is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');
        
        	if ($is_uploaded){
        		$previous_photo= $user->agent_logo;
        		$previous_photo_storage= $user->photo_storage;
        
        		$user->agent_logo = $image_name;
        		$user->photo_storage = get_option('default_storage');
        		$user->save();
        
        		if ($previous_photo){
        			$previous_photo_path = 'uploads/avatar/'.$previous_photo;
        			$storage = Storage::disk($previous_photo_storage);
        			if ($storage->has($previous_photo_path)){
        				$storage->delete($previous_photo_path);
        			}
        		}
        	}
        }
        
        // Add the other photos here ...
        
        if ($request->hasFile('photo2')){
        	$rules = ['photo2'=>'mimes:jpeg,jpg,png'];
        	$this->validate($request, $rules);
        
        	$image = $request->file('photo2');
        	$file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
        	$resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();
        
        	$image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();
        
        	$imageFileName = 'uploads/avatar/'.$image_name;
        
        	//Upload original image
        	$is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');
        
        	if ($is_uploaded){
        		$previous_photo= $user->photo2;
        		$previous_photo_storage= $user->photo_storage;
        
        		$user->photo2 = $image_name;
        		$user->photo_storage = get_option('default_storage');
        		$user->save();
        
        		if ($previous_photo){
        			$previous_photo_path = 'uploads/avatar/'.$previous_photo;
        			$storage = Storage::disk($previous_photo_storage);
        			if ($storage->has($previous_photo_path)){
        				$storage->delete($previous_photo_path);
        			}
        		}
        	}
        }
        
        if ($request->hasFile('photo3')){
        	$rules = ['photo3'=>'mimes:jpeg,jpg,png'];
        	$this->validate($request, $rules);
        
        	$image = $request->file('photo3');
        	$file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
        	$resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();
        
        	$image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();
        
        	$imageFileName = 'uploads/avatar/'.$image_name;
        
        	//Upload original image
        	$is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');
        
        	if ($is_uploaded){
        		$previous_photo= $user->photo3;
        		$previous_photo_storage= $user->photo_storage;
        
        		$user->photo3 = $image_name;
        		$user->photo_storage = get_option('default_storage');
        		$user->save();
        
        		if ($previous_photo){
        			$previous_photo_path = 'uploads/avatar/'.$previous_photo;
        			$storage = Storage::disk($previous_photo_storage);
        			if ($storage->has($previous_photo_path)){
        				$storage->delete($previous_photo_path);
        			}
        		}
        	}
        }
        
        if ($request->hasFile('photo4')){
        	$rules = ['photo4'=>'mimes:jpeg,jpg,png'];
        	$this->validate($request, $rules);
        
        	$image = $request->file('photo4');
        	$file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
        	$resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();
        
        	$image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();
        
        	$imageFileName = 'uploads/avatar/'.$image_name;
        
        	//Upload original image
        	$is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');
        
        	if ($is_uploaded){
        		$previous_photo= $user->photo4;
        		$previous_photo_storage= $user->photo_storage;
        
        		$user->photo4 = $image_name;
        		$user->photo_storage = get_option('default_storage');
        		$user->save();
        
        		if ($previous_photo){
        			$previous_photo_path = 'uploads/avatar/'.$previous_photo;
        			$storage = Storage::disk($previous_photo_storage);
        			if ($storage->has($previous_photo_path)){
        				$storage->delete($previous_photo_path);
        			}
        		}
        	}
        }
        
        if ($request->hasFile('photo5')){
        	$rules = ['photo5'=>'mimes:jpeg,jpg,png'];
        	$this->validate($request, $rules);
        
        	$image = $request->file('photo5');
        	$file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());
        	$resized_thumb = Image::make($image)->/*resize(300, 300)->*/stream();
        
        	$image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();
        
        	$imageFileName = 'uploads/avatar/'.$image_name;
        
        	//Upload original image
        	$is_uploaded = current_disk()->put($imageFileName, $resized_thumb->__toString(), 'public');
        
        	if ($is_uploaded){
        		$previous_photo= $user->photo5;
        		$previous_photo_storage= $user->photo_storage;
        
        		$user->photo5 = $image_name;
        		$user->photo_storage = get_option('default_storage');
        		$user->save();
        
        		if ($previous_photo){
        			$previous_photo_path = 'uploads/avatar/'.$previous_photo;
        			$storage = Storage::disk($previous_photo_storage);
        			if ($storage->has($previous_photo_path)){
        				$storage->delete($previous_photo_path);
        			}
        		}
        	}
        }
        
        if ($request->hasFile('photo6')){
        	foreach($request->file('photo6') as $livefile) {
                $name=$livefile->getClientOriginalName();
                $livefile->move(public_path().'/files/', $name);  
                $data[] = $name;
                
                Media::create ( [ 
							'user_id' => $user->id,
							'media_name' => $name,
							'type' => 'image',
							'storage' => get_option ( 'default_storage' ),
							'ref' => 'user' 
				] );
            }
        }

        if ($request->hasFile('photo7')){
            $name=$request->file('photo7')->getClientOriginalName();
            $request->file('photo7')->move(public_path().'/files/', $name);  
            $data[] = $name;
                
            Media::create ( [ 
						'user_id' => $user->id,
						'media_name' => $name,
						'type' => 'image',
						'storage' => get_option ( 'default_storage' ),
						'ref' => 'user',
                        'img1' => 1
			] );
        }

        if ($request->hasFile('photo8')){
            $name=$request->file('photo8')->getClientOriginalName();
            $request->file('photo8')->move(public_path().'/files/', $name);  
            $data[] = $name;
                
            Media::create ( [ 
						'user_id' => $user->id,
						'media_name' => $name,
						'type' => 'image',
						'storage' => get_option ( 'default_storage' ),
						'ref' => 'user',
                        'img2' => 1
			] );
        }

        if ($request->hasFile('photo9')){
            $name=$request->file('photo9')->getClientOriginalName();
            $request->file('photo9')->move(public_path().'/files/', $name);  
            $data[] = $name;
                
            Media::create ( [ 
						'user_id' => $user->id,
						'media_name' => $name,
						'type' => 'image',
						'storage' => get_option ( 'default_storage' ),
						'ref' => 'user',
                        'img3' => 1
			] );
        }

        if ($request->hasFile('photo10')){
            $name=$request->file('photo10')->getClientOriginalName();
            $request->file('photo10')->move(public_path().'/files/', $name);  
            $data[] = $name;
                
            Media::create ( [ 
						'user_id' => $user->id,
						'media_name' => $name,
						'type' => 'image',
						'storage' => get_option ( 'default_storage' ),
						'ref' => 'user',
                        'img4' => 1
			] );
        }

        if ($request->hasFile('photo11')){
            $name=$request->file('photo11')->getClientOriginalName();
            $request->file('photo11')->move(public_path().'/files/', $name);  
            $data[] = $name;
                
            Media::create ( [ 
						'user_id' => $user->id,
						'media_name' => $name,
						'type' => 'image',
						'storage' => get_option ( 'default_storage' ),
						'ref' => 'user',
                        'img5' => 1
			] );
        }

        if ($request->hasFile('photo12')){
            $name=$request->file('photo12')->getClientOriginalName();
            $request->file('photo12')->move(public_path().'/files/', $name);  
            $data[] = $name;
                
            Media::create ( [ 
						'user_id' => $user->id,
						'media_name' => $name,
						'type' => 'image',
						'storage' => get_option ( 'default_storage' ),
						'ref' => 'user',
                        'img6' => 1
			] );
        }

        return redirect(route('profile_edit'))->with('success', trans('app.profile_edit_success_msg'));
    }
    
    public function businessEditPost(Request $request){
        $user = Auth::user();
        $inputs = $request->input();
        $user->update($inputs);

        return redirect(route('business_info'))->with('success', trans('Business listing has been updated'));
    }

    public function administrators(){
        $title = trans('app.administrators');
        $users = User::whereUserType('admin')->get();

        return view('admin.administrators', compact('title', 'users'));
    }

    public function addAdministrator(){
        $title = trans('app.add_administrator');
        $countries = Country::all();

        return view('admin.add_administrator', compact('title'));
    }


    public function storeAdministrator(Request $request)
    {

        $rules = [
            'email'    => 'required|email',
            'password'    => 'required',
        ];
        $this->validate($request, $rules);

        $data = [
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'name'              => $request->first_name.' '.$request->last_name,
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'user_type'         => 'admin',
            'active_status'         => 1,
            'activation_code'   => str_random(30)
        ];

        $user_create = User::create($data);
        return redirect(route('administrators'))->with('success', trans('app.registration_success'));
    }

    public function administratorBlockUnblock(Request $request){
        $status = $request->status == 'unblock'? 1 : 2;
        $user_id = $request->user_id;
        User::whereId($user_id)->update(['active_status' => $status]);
        
        if ($status ==1){
            return ['success' => 1, 'msg' => trans('app.administrator_unblocked')];
        }
        return ['success' => 1, 'msg' => trans('app.administrator_blocked')];

    }
    
    public function credentials(Request $request){
        return [
            'email' => $request->email,
            'password' => $request->password,
            'verified' => 1,
        ];
    }
    
    //Login view
    public function login(Request $request){
        $request->session()->put('url.intended',url()->previous());
        return view('theme.login');
    }
    //Login action
    public function loginPost(Request $request){
        $rules = [
            'email'    => 'required|email',
            'password'    => 'required',
        ];
        //$this->validate($request, $rules);

        //Manually creating validation
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect(route('login'))->withErrors($validator)->withInput();
        }

        //Get input value
        $email      = $request->email;
        $password   = $request->password;

        //Authenticating
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active_status' => '1'])) {
            $user = Auth::user();
            $user->last_login = Carbon::now();
            $user->save();
            //dd("In loop!");

            return redirect(route('dashboard'));
            //return redirect()->intended(route('dashboard'));
            //return redirect($request->session()->get('url.intended'));
        }else{
            return redirect(route('login'))->with('error', trans('app.email_password_error'));
        }

    }

    //Login review action
    public function loginReviewPost(Request $request){
        $rules = [
            'email'    => 'required|email',
            'password'    => 'required',
        ];
        //$this->validate($request, $rules);

        //Manually creating validation
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect(route('login'))->withErrors($validator)->withInput();
        }

        dd("In loop!");

        //Get input value
        $email      = $request->email;
        $password   = $request->password;

        //Authenticating
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active_status' => '1'])) {
            $user = Auth::user();
            $user->last_login = Carbon::now();
            $user->save();

            return redirect()->intended(route('dashboard'));
        }else{
            return redirect(route('login'))->with('error', trans('app.email_password_error'));
        }

    }

    public function changePassword()
    {
        $title = trans('app.change_password');
        return view('admin.change_password', compact('title'));
    }

    public function changePasswordPost(Request $request)
    {
        $rules = [
            'old_password'  => 'required',
            'new_password'  => 'required|confirmed',
            'new_password_confirmation'  => 'required',
        ];
        $this->validate($request, $rules);

        $old_password = $request->old_password;
        $new_password = $request->new_password;
        //$new_password_confirmation = $request->new_password_confirmation;

        if(Auth::check())
        {
            $logged_user = Auth::user();

            if(Hash::check($old_password, $logged_user->password))
            {
                $logged_user->password = Hash::make($new_password);
                $logged_user->save();
                return redirect()->back()->with('success', trans('app.password_changed_msg'));
            }
            return redirect()->back()->with('error', trans('app.wrong_old_password'));
        }

    }


    /**
     * @param Request $request
     * @return array
     */

    public function saveAdAsFavorite(Request $request){
        if ( ! Auth::check())
            return ['status'=>0, 'msg'=> trans('app.error_msg'), 'redirect_url' => route('login')];

        $user = Auth::user();

        $slug = $request->slug;
        $ad = Ad::whereSlug($slug)->first();

        if ($ad){
            $get_previous_favorite = Favorite::whereUserId($user->id)->whereAdId($ad->id)->first();
            if ( ! $get_previous_favorite){
                Favorite::create(['user_id'=>$user->id, 'ad_id'=>$ad->id]);
                return ['status'=>1, 'action'=>'added', 'msg'=>'<i class="fa fa-star fa-2x"></i> '];
            }else{
                $get_previous_favorite->delete();
                return ['status'=>1, 'action'=>'removed', 'msg'=>'<i class="fa fa-star-o fa-2x"></i> '];
            }
        }
        return ['status'=>0, 'msg'=> trans('app.error_msg')];
    }

    public function replyByEmailPost(Request $request){
        $data = $request->all();
        //$data['email'];
        $ad_id = $request->ad_id;
        $ad = Ad::find($ad_id);
        $user_id = $ad->user->id;
        $slug = $ad->slug;
        $request->request->add(['user_id' => $user_id, 'slug' => $slug]);
                
        if ($ad){
            //$to_email = $ad->user->email;
            $to_email = "ronmellojr@gmail.com";
            Contact_query::create(array_only($request->input(), ['name', 'email', 'phone_number', 'message', 'user_id', 'ad_id', 'slug']));
            if ($to_email){
                try{
                    Mail::send('emails.reply_by_email', ['data' => $data], function ($m) use ($data, $ad) {
                        $m->from(get_option('email_address'), get_option('site_name'));
                        $m->to($ad->user->email, $ad->user->name)->subject('Contact regarding: '.$ad->title . ' ' .$ad->slug);
                        $m->replyTo($data['email'], $data['name']);
                    });
                }catch (\Exception $e){
                    //
                }
                return ['status'=>1, 'msg'=> trans('app.email_has_been_sent')];
            }
        }
        return ['status'=>0, 'msg'=> trans('app.error_msg')];

    }
    
    public function recommendPost(Request $request){
        $data = $request->all();
        //$agent_id = $request->id;
        //$agent = User::find($agent_id);
        
        //if ($agent){
            try{
                Mail::send('emails.recommend', ['data' => $data], function ($m) use ($data) {
                    $m->from($data['from_email'], $data['from_name']);
                    $m->to($data['email'], $data['name'])->subject('1-800RealEstate.com contact referral');
                    $m->replyTo($data['from_email'], $data['from_name']);
                });
            }catch (\Exception $e){
                //
            }
        //}

       return ['status'=>1, 'msg'=> trans('app.email_has_been_sent')];

    }

    public function shareByEmailPost(Request $request){
        $data = $request->all();
        $data['remail'];
        $ad_id = $request->ad_id;
        $ad = Ad::find($ad_id);
        if ($ad){
            //$to_email = $ad->user->email;
            $to_email = "ronmellojr@gmail.com";
            if ($to_email){
                try{
                    Mail::send('emails.share_by_email', ['data' => $data], function ($m) use ($data, $ad) {
                        $m->from(get_option('email_address'), get_option('site_name'));
                        $m->to($ad->user->remail, $ad->user->name)->subject('query from '.$ad->title);
                        $m->replyTo($data['semail'], $data['sname']);
                    });
                }catch (\Exception $e){
                    //
                }
                return ['status'=>1, 'msg'=> trans('app.email_has_been_sent')];
            }
	}
	return ['status'=>0, 'msg'=> trans('app.error_msg')];

    }
    
    	/**
	 * Real Estate Agent Listing
	 */
	public function professionallisting(Request $request) {
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
                    $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereUserType('prof');
                }
		$users = $users->get();
		return view ( $this->theme . 'professionallisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'appraiserlisting', compact ( 'users', 'title' ));
	}

	/**
	 * Real Estate Agent Listing
	 */
	public function realestateagentlisting(Request $request) {
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
                    $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereUserType('agent');
                }
		$users = $users->get();
		return view ( $this->theme . 'realestateagentlisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'contractorlisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'inspectorlisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'agentlisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'brokerlisting', compact ( 'users', 'title' ));
	}

    /**
	 * Photographers Main
	 */
	public function photographers(Request $request) {
		return view ( $this->theme . 'photographers');
	}

	/**
	 * Photographer Listing
	 */
	public function photographerlisting(Request $request) {
            if ($request->city) {
			$users = User::select('*')->whereCategory('photographers')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereCategory('photographers');
                }
        dd($users);
		$users = $users->get();
		return view ( $this->theme . 'photographerlisting', compact ( 'users', 'title' ));
	}
	
	/**
	 * Home Improvement Main
	 */
	public function homeimprovement(Request $request) {
		return view ( $this->theme . 'homeimprovement');
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
		return view ( $this->theme . 'alarmlisting', compact ( 'users', 'title' ));
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
            dd($request);
            if ($request->city) {
			$users = User::select('*')->whereSubcat('appliances')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('appliances');
                }
		$users = $users->get();
		return view ( $this->theme . 'appliancelisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'carpetlisting', compact ( 'users', 'title' ));
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
			$users = User::select('*')->whereCategory('driveways')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereCategory('driveways');
                }
		$users = $users->get();
		return view ( $this->theme . 'drivewaylisting', compact ( 'users', 'title' ));
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
			$users = User::select('*')->whereCategory('electricians')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereCategory('electricians');
                }
		$users = $users->get();
		return view ( $this->theme . 'electricianlisting', compact ( 'users', 'title' ));
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
			$users = User::select('*')->whereCategory('fences')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereCategory('fences');
                }
		$users = $users->get();
		return view ( $this->theme . 'fencelisting', compact ( 'users', 'title' ));
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
			$users = User::select('*')->whereCategory('garages')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereCategory('garages');
                }
		$users = $users->get();
		return view ( $this->theme . 'garagelisting', compact ( 'users', 'title' ));
	}
	
	/**
	 * Gutters Main
	 */
	public function gutters(Request $request) {
		return view ( $this->theme . 'gutters');
	}

	/**
	 * Gutter Listing
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
		return view ( $this->theme . 'gutterlisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'handymenlisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'theaterlisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'hvaclisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'landscapinglisting', compact ( 'users', 'title' ));
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
			$users = User::select('*')->whereSubcat('moving')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('*')->whereSubcat('moving');
                }
		$users = $users->get();
		return view ( $this->theme . 'movinglisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'pavinglisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'paintinglisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'pestlisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'poollisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'plumbinglisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'roofinglisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'septiclisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'sidinglisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'tilelisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'windowlisting', compact ( 'users', 'title' ));
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
		return view ( $this->theme . 'attorneylisting', compact ( 'users', 'title' ));
	}

	/**
	 * Videographer Listing
	 */
	public function videographerlisting(Request $request) {
                if ($request->q) {
                        $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('videographers')->where ( 'name', 'LIKE', "%{$request->q}%" );
                    if ($request->city) {
			$users = $users->where ( 'city', 'LIKE', "%{$request->city}%" );
		    }
                } elseif ($request->city) {
			$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('videographers')->where ( 'city', 'LIKE', "%{$request->city}%" );
                    if ($request->q) {
			$users = $users->where ( 'name', 'LIKE', "%{$request->q}%" );
		    }
		} else {
                    $users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('videographers');
                }
		$users = $users->get();
		return view ( $this->theme . 'videographerlisting', compact ( 'users', 'title' ));
	}
	
		/**
	 * Professionals
	 */
	public function professionals(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('prof');
	    $users = $users->get();
		return view ( $this->theme . 'professionals', compact ( 'users' ) );
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
	 * Real Estate Agents
	 */
	public function realestateagents(Request $request) {
		return view ( $this->theme . 'realestateagents', compact ( 'top_categories', 'ads', 'title', 'countries', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states', 'premium_ads', 'agents' ) );
	}

	/**
	 * Contractors
	 */
	public function contractors(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('contractors');
	    $users = $users->get();
		return view ( $this->theme . 'contractors', compact ( 'users' ) );
	}

	/**
	 * Inspectors
	 */
	public function inspectors(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('inspectors');
	    $users = $users->get();
		return view ( $this->theme . 'inspectors', compact ( 'users' ) );
	}

	/**
	 * Agents
	 */
	public function agents(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('agents');
	    $users = $users->get();
		return view ( $this->theme . 'agents', compact ( 'users' ) );
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
		return view ( $this->theme . 'attorneys', compact ( 'users' ) );
	}

	/**
	 * Videographers
	 */
	public function videographers(Request $request) {
		$users = User::select('id','name','email','mobile','address','website','office','photo','agent_logo','description','city','state','zip','fax','company','title','years_bus','video','asp','asp2','asp3','asp4','asp5','mh','th','wh','rh','fh')->whereCategory('videographers');
	    $users = $users->get();
		return view ( $this->theme . 'videographers', compact ( 'users' ) );
	}
	
    public function verify($token) {
        
        // The verified method has been added to the user model and chained here
        // for better readability
        User::where('email_token',$token)->firstOrFail()->verified();
        return redirect('login');
    }
    
    public function businessListings() {
		$title = "All Business Listings";
		$user = Auth::user ();
		$users = User::all()->where('user_type', '!=', 'admin')->where('user_type', '==', 'prof')->sortBy('name');
		
		return view ( 'admin.business_listings', compact ( 'title', 'users' ) );
	}
	
	public function businessInfo() {
		$title = "Business Info";
		$user = Auth::user ();
		$user_id = $user->id;
		$user = User::find($user_id);

		return view ( 'admin.business_info', compact ( 'title', 'user' ) );
	}
	
	public function registerUser(Request $request) {
		$user = Auth::user ();
		$user_temp = $request->user_type;
        $user_id = $user->id;
        $user->user_temp = $user_temp;
        //dd($user->user_temp);
        $user->save();
        
        //User::whereId($user_id)->update(['user_type' => $user_type]); // After user fills out profile!

        if($user_temp == "saveuser") {
            return view ( 'admin.leasor_dashboard', compact ( 'user', 'user_temp' ) );
        } else if($user_temp == "agent") {
            return view ( 'admin.agent_dashboard', compact ( 'user', 'user_temp' ) );
        } else if($user_temp == "landlord") {
            return view ( 'admin.landlord_dashboard', compact ( 'user', 'user_temp' ) );
        } else if($user_temp == "prof") {
            return view ( 'admin.prof_dashboard', compact ( 'user', 'user_temp' ) ); 
        } else {
            return view ( 'admin.dashboard', compact ( 'user', 'user_temp' ) );            
        }
	}
	
	public function setRating(Request $request) {
	    $user_id = $request->user_id;
	    $user = User::find($user_id);

        $rating = new Rating;
        $rating->rateable_type = 'App\User';
        $rating->rating = $request->rating;
        $rating->user_id = $user_id;
        $rating->rateable_id = $request->rateable_id;
        $rating->comment = $request->comment;
        
        $rating->save();
        
        return back()->with('message','Review Submitted!');
	}
	
	public function redirectTo()
    {
        if ($this->request->has('previous')) {
            $this->redirectTo = $this->request->get('previous');
        }

        return $this->redirectTo ?? '/home';
    }
}
