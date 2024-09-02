<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Contact_query;
use App\Payment;
use App\Report_ad;
use App\User;
use Illuminate\Http\Request;
use Session;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        $user_id = $user->id;

        $total_users = 0;
        $total_reports = 0;
        $total_payments = 0;
        $ten_contact_messages = 0;
        $reports = 0;
        $total_payments_amount = 0;

        if ($user->is_admin()){
            $approved_ads = Ad::whereStatus(1)->whereIn( 'type', ['apartment','condo','loft','single-family','multi-family'] )->count();
            $pending_ads = Ad::whereStatus(0)->count();
            $blocked_ads = Ad::whereStatus(2)->count();

	        $pmc_ads = Ad::whereType('pmc')->count();
            $pmc_live_ads = Ad::whereType('pmc')->whereStatus( 1 )->count();
	        $comm_ads = Ad::whereIn( 'type', ['office','flex','medical','restaurant','retail','storefront','industrial','warehouse'] )->count();
            $apt_ads = Ad::whereType('apartment')->count();

            $single_sale_ads = Ad::whereSaleType('single-family')->count();
            $multi_sale_ads = Ad::whereSaleType('multi-family')->count();
            $condo_sale_ads = Ad::whereSaleType('condo')->count();
            $land_sale_ads = Ad::whereSaleType('land')->count();
            $comm_sale_ads = Ad::whereSaleType('commercial')->count();

            $total_ads = $approved_ads + $pmc_live_ads + $comm_ads + $single_sale_ads + $multi_sale_ads + $condo_sale_ads + $land_sale_ads + $comm_sale_ads;

            $total_users = User::count();
            $total_reports = Report_ad::count();
            $total_payments = Payment::whereStatus('success')->count();
            $total_payments_amount = Payment::whereStatus('success')->sum('amount');
            $ten_contact_messages = Contact_query::take(10)->orderBy('id', 'desc')->get();
            $reports = Report_ad::orderBy('id', 'desc')->with('ad')->take(10)->get();
        }else{
            $approved_ads = Ad::whereStatus(1)->whereUserId($user_id)->count();
            $pending_ads = Ad::whereStatus(0)->whereUserId($user_id)->count();
            $blocked_ads = Ad::whereStatus(2)->whereUserId($user_id)->count();
        }
        
        $ads = Ad::all();

        return view('admin.dashboard', compact('ads', 'user'));
    }


    public function logout(){
        if (Auth::check()){
            Session::flush();
            Auth::logout();
        }

        return redirect(route('login'));
    }
    
    public function leasorDashboard() {
        return view('admin.leasor_dashboard');
    }
    
    public function sellerDashboard() {
        return view('admin.seller_dashboard');
    }
    
    public function pmcDashboard() {
        return view('admin.pmc_dashboard');
    }
    
    public function profDashboard() {
        return view('admin.prof_dashboard');
    }
    
    public function agentDashboard() {
        return view('admin.agent_dashboard');
    }
    
    public function landlordDashboard() {
        return view('admin.landlord_dashboard');
    }
    
    public function storyboard() {
        return view('admin.storyboard');
    }
    
}
