<div class="sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('dashboard') }}"><img src="https://1-800.lenoxproperty.com/assets/img/dashboard.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;@lang('app.dashboard')</a>
            </li>
            @if($lUser->is_saveuser() )
            <li>
                <a href="{{ route('favorite_ads') }}">
                    <i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;Saved Properties
                </a> 
            </li>
            @endif

            @if($lUser->is_agent() or $lUser->is_pmc() or $lUser->is_admin() or $lUser->is_landlord())
            <li>
                <a href="{{ route('my_ads') }}"><img src="https://1-800.lenoxproperty.com/assets/img/properties.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Properties</a>
            </li>
            <li>
                <a href="{{ route('admin_blocked_ads') }}"><img src="https://1-800.lenoxproperty.com/assets/img/properties.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Hidden / Expired Properties</a>
            </li>
            @endif

            @if($lUser->is_admin())
            <li>
                <a href="{{ route('business_listings') }}"><img src="https://1-800.lenoxproperty.com/assets/img/businesslistings.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Business Listings</a>
            </li>
            @endif

            @if(!$lUser->is_saveuser() and !$lUser->is_basic())
            <li>
                <a href="{{ route('contact_messages') }}"><img src="https://1-800.lenoxproperty.com/assets/img/leads.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Leads</a>
            </li>
            @endif

            <li>
                <a href="{{ route('dashboard') }}"><img src="https://1-800.lenoxproperty.com/assets/img/account.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Account<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('profile_edit') }}"><img src="https://1-800.lenoxproperty.com/assets/img/logout.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;@lang('app.profile')</a>  </li>
                    <li> <a href="{{ route('change_password') }}"><img src="https://1-800.lenoxproperty.com/assets/img/logout.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;@lang('app.change_password')</a>  </li>
                    <li><a href="{{ route('logout') }}"><img src="https://1-800.lenoxproperty.com/assets/img/logout.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;@lang('app.logout')</a></li>
                </ul>
            </li>
            @if($lUser->is_landlord())
            <li>
                <a href="{{ route('dashboard') }}"><img src="https://1-800.lenoxproperty.com/assets/img/resources.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Resources<span class="fa arrow"></span></a>
            	<ul class="nav nav-second-level">
                    <li> <a href="https://1-800.lenoxproperty.com/buyer-information"><img src="https://1-800.lenoxproperty.com/assets/img/logout.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Buyer Information</a>  </li>
                    <li> <a href="https://1-800.lenoxproperty.com/seller-information"><img src="https://1-800.lenoxproperty.com/assets/img/logout.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Seller Information</a>  </li>
                    <li><a href="https://1-800.lenoxproperty.com/landlord-tenant-information"><img src="https://1-800.lenoxproperty.com/assets/img/logout.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Landlord / Tenant Information</a></li>
                </ul>
            </li>
            @endif
            @if($lUser->is_admin())
            <li>
                <a href="#"><b>Admin Only</b></a>
            </li>
            <li>
                <a href="{{ route('pages') }}"><img src="https://1-800.lenoxproperty.com/assets/img/properties.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Pages</a>
            </li>
            <li>
                <a href="{{ route('users') }}"><img src="https://1-800.lenoxproperty.com/assets/img/properties.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Users</a>
            </li>
            <li>
                <a href="{{ route('administrators') }}"><img src="https://1-800.lenoxproperty.com/assets/img/properties.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Administrators</a>
            </li>
            <li>
                <a href="{{ route('ratings') }}"><img src="https://1-800.lenoxproperty.com/assets/img/properties.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Reviews</a>
            </li>
            <li>
                <a href="{{ route('import-export') }}"><img src="https://1-800.lenoxproperty.com/assets/img/properties.png" width="16px" height="16px" />&nbsp;&nbsp;&nbsp;Export Properties / Users</a>
            </li>
            @endif
        </ul>
    </div>
</div>

