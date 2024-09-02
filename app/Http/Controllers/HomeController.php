<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\Contact_query;
use App\Country;
use App\Post;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    public function index(){
        //$limit_premium_ads = get_option('number_of_premium_ads_in_home');
        //$limit_regular_ads = get_option('number_of_free_ads_in_home');
        //$limit_urgent_ads = get_option('number_of_urgent_ads_in_home');

        //$sliders = Slider::all();
        //$countries = Country::all();
        //$premium_ads = Ad::activePremium()->with('city', 'feature_img', 'media_img')->limit($limit_premium_ads)->orderBy('id', 'desc')->get();
        //$regular_ads = Ad::activeRegular()->with('city', 'feature_img', 'media_img')->limit($limit_regular_ads)->orderBy('id', 'desc')->get();
        //$urgent_ads = Ad::activeUrgent()->with('city', 'feature_img', 'media_img')->limit($limit_urgent_ads)->orderBy('id', 'desc')->get();
        
        //$posts = Post::whereType('post')->with('feature_img', 'author')->whereStatus('1')->limit(get_option('blog_post_amount_in_homepage'))->get();

        return view($this->theme.'index');
    }

    public function contactUs(){
        $title = trans('app.contact_us');
        return view('theme.contact_us', compact('title'));
    }

    public function contactUsPost(Request $request){
        $rules = [
            'name'  => 'required',
            'email'  => 'required|email',
            'phone'  => 'required',
            'message'  => 'required',
        ];
        $this->validate($request, $rules);
        dd($request);
        Contact_query::create(array_only($request->input(), ['name', 'email', 'phone', 'message']));
        mail("ronmellojr@gmail.com","Contact Query", $request->message);
        return redirect()->back()->with('success', trans('app.your_message_has_been_sent'));
    }
    
    public function contactMessages(){
        $title = trans('app.contact_messages');
        $user = Auth::user ();
        $user_id = $user->id;
        if($user->user_type != "admin") {
            $contact_messages = Contact_query::select('id', 'name', 'email', 'phone_number', 'message', 'ad_id', 'slug', 'created_at')->orderBy('id', 'desc')->where('user_id', $user_id)->get();
        } else {
            $contact_messages = Contact_query::select('id', 'name', 'email', 'phone_number', 'message', 'ad_id', 'slug', 'created_at')->orderBy('id', 'desc')->get();
        }
        return view('admin.contact_messages', compact('title', 'contact_messages'));
    }

    public function contactMessagesData(){
        $contact_messages = Contact_query::select('name', 'email', 'phone_number', 'message','created_at')->orderBy('id', 'desc')->get();

        return  Datatables::of($contact_messages)
            ->editColumn('created_at',function($contact_message){
                return $contact_message->created_at_datetime();
            })
            ->make();
    }

    /**
     * Switch Language
     */
    public function switchLang($lang){
        session(['lang'=>$lang]);
        //return redirect(route('home'));
        return back();
    }

    /**
     * Reset Database
     */
    public function resetDatabase(){
        $database_location = base_path("database-backup/classified.sql");
        // Temporary variable, used to store current query
        $templine = '';
        // Read in entire file
        $lines = file($database_location);
        // Loop through each line
        foreach ($lines as $line)
        {
            // Skip it if it's a comment
            if (substr($line, 0, 2) == '--' || $line == '')
                continue;
            // Add this line to the current segment
            $templine .= $line;
            // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';')
            {
                // Perform the query
                DB::statement($templine);
                // Reset temp variable to empty
                $templine = '';
            }
        }
        $now_time = date("Y-m-d H:m:s");
        DB::table('ads')->update(['created_at' => $now_time, 'updated_at' => $now_time]);
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     * Clear all cache
     */
    public function clearCache(){
        Artisan::call('debugbar:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        if (function_exists('exec')){
            exec('rm ' . storage_path('logs/*'));
        }
        $this->rrmdir(storage_path('logs/'));

        return redirect(route('home'));
    }
    public function rrmdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (is_dir($dir."/".$object))
                        $this->rrmdir($dir."/".$object);
                    else
                        unlink($dir."/".$object);
                }
            }
            //rmdir($dir);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyContact(Request $request)
    {
        $id = $request->id;
        $contact = Contact_query::whereId($id);
        if ($contact){
            $contact->delete();
            return ['success' => 1, 'msg' => trans('app.operation_success')];
        }
        return ['success' => 0, 'msg' => trans('app.error_msg')];
    }

    public function howitworks(){
        return view('theme.modern.how-it-works');
    }
    
    public function homebuyerinformation(){
        return view('theme.modern.home-buyer-information');
    }
    
    public function homesellerinformation(){
        return view('theme.modern.home-sale-information');
    }
    
    public function buyerInformation(){
        return view('theme.modern.buyer-information');
    }
    
    public function sellerInformation(){
        return view('theme.modern.home-selling-tips');
    }
    
    public function homeWorth(){
        return view('theme.modern.what-is-my-home-worth');
    }
    
    public function realEstateProfessionals(){
        return view('theme.modern.real-estate-professionals');
    }
    
    public function realEstateAgent(){
        return view('theme.modern.so-do-i-need-a-real-estate-agent-in-order-to-buy-a-property');
    }
    
    public function landlordTenantInformation(){
        return view('theme.modern.landlord-tenant-information');
    }
    
    public function realEstateAgentSell(){
        return view('theme.modern.so-do-i-need-a-real-estate-agent-in-order-to-sell-a-property');
    }
    
    public function landlordInformation(){
        return view('theme.modern.landlord-information');
    }
    
    public function tenantInformation(){
        return view('theme.modern.tenant-information');
    }
    
    public function landlordAll(){
        return view('theme.modern.landlord-all-you-need-to-know');
    }
    
    public function tenantAll(){
        return view('theme.modern.tenant-all-you-need-to-know');
    }
    
    public function riCityTownInfo(){
        return view('theme.modern.ri-city-and-town-info');
    }
    
    public function maCityTownInfo(){
        return view('theme.modern.ma-city-and-town-info');
    }
    
    public function riEviction(){
        return view('theme.modern.ri-eviction');
    }
    
    public function maEviction(){
        return view('theme.modern.ma-eviction');
    }
    
    public function riDocuments(){
        return view('theme.modern.ri-free-leases-and-other-documents');
    }
    
    public function maDocuments(){
        return view('theme.modern.ma-free-leases-and-other-documents');
    }
    
    public function riLeadFire(){
        return view('theme.modern.ri-lead-and-fire-law');
    }
    
    public function maLeadFire(){
        return view('theme.modern.ma-lead-and-fire-law');
    }
    
    public function riLocalLaws(){
        return view('theme.modern.ri-links-to-local-laws');
    }
    
    public function maLocalLaws(){
        return view('theme.modern.ma-links-to-local-laws');
    }
    
    public function riScreeningTools(){
        return view('theme.modern.ri-screening-tools');
    }
    
    public function maScreeningTools(){
        return view('theme.modern.ma-screening-tools');
    }
    
    public function riUtilities(){
        return view('theme.modern.ri-utility-information');
    }
    
    public function maUtilities(){
        return view('theme.modern.ma-utility-information');
    }

}
