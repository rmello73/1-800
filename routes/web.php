<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('buyer-information', ['as' => 'buyer_information', 'uses'=>'HomeController@buyerInformation']);
Route::get('home-selling-tips', ['as' => 'home-selling-tips', 'uses'=>'HomeController@sellerInformation']);
Route::get('what-is-my-home-worth', ['as' => 'what_is_my_home_worth', 'uses'=>'HomeController@homeWorth']);
Route::get('real-estate-professionals', ['as' => 'real_estate_professionals', 'uses'=>'HomeController@realEstateProfessionals']);
Route::get('so-do-i-need-a-real-estate-agent-in-order-to-buy-a-property', ['as' => 'so_do_i_need_a_real_estate_agent_in_order_to_buy_a_property', 'uses'=>'HomeController@realEstateAgent']);
Route::get('landlord-tenant-information', ['as' => 'landlord_tenant_information', 'uses'=>'HomeController@landlordTenantInformation']);
Route::get('so-do-i-need-a-real-estate-agent-in-order-to-sell-a-property', ['as' => 'so_do_i_need_a_real_estate_agent_in_order_to_sell_a_property', 'uses'=>'HomeController@realEstateAgentSell']);
Route::get('landlord-information', ['as' => 'landlord_information', 'uses'=>'HomeController@landlordInformation']);
Route::get('tenant-information', ['as' => 'tenant_information', 'uses'=>'HomeController@tenantInformation']);
Route::get('landlord-all-you-need-to-know', ['as' => 'landlord_all_you_need_to_know', 'uses'=>'HomeController@landlordAll']);

Route::get('tenant-all-you-need-to-know', ['as' => 'tenant_all_you_need_to_know', 'uses'=>'HomeController@tenantAll']);
Route::get('ri-city-and-town-info', ['as' => 'ri_city_and_town_info', 'uses'=>'HomeController@riCityTownInfo']);
Route::get('ma-city-and-town-info', ['as' => 'ma_city_and_town_info', 'uses'=>'HomeController@maCityTownInfo']);
Route::get('ri-eviction', ['as' => 'ri_eviction', 'uses'=>'HomeController@riEviction']);
Route::get('ma-eviction', ['as' => 'ma_eviction', 'uses'=>'HomeController@maEviction']);
Route::get('ri-free-leases-and-other-documents', ['as' => 'ri_free_leases_and_other_documents', 'uses'=>'HomeController@riDocuments']);
Route::get('ma-free-leases-and-other-documents', ['as' => 'ma_free_leases_and_other_documents', 'uses'=>'HomeController@maDocuments']);
Route::get('ri-lead-and-fire-law', ['as' => 'ri_lead_and_fire_law', 'uses'=>'HomeController@riLeadFire']);
Route::get('ma-lead-and-fire-law', ['as' => 'ma_lead_and_fire_law', 'uses'=>'HomeController@maLeadFire']);
Route::get('ri-links-to-local-laws', ['as' => 'ri_links_to_local_laws', 'uses'=>'HomeController@riLocalLaws']);
Route::get('ma-links-to-local-laws', ['as' => 'ma_links_to_local_laws', 'uses'=>'HomeController@maLocalLaws']);
Route::get('ri-screening-tools', ['as' => 'ri_screening_tools', 'uses'=>'HomeController@riScreeningTools']);
Route::get('ma-screening-tools', ['as' => 'ma_screening_tools', 'uses'=>'HomeController@maScreeningTools']);
Route::get('ri-utility-information', ['as' => 'ri_utility_information', 'uses'=>'HomeController@riUtilities']);
Route::get('ma-utility-information', ['as' => 'ma_utility_information', 'uses'=>'HomeController@maUtilities']);

Route::post('set-rating', ['as' => 'set-rating', 'uses'=>'UserController@setRating']);
Route::get('ave-rating', ['as' => 'ave-rating', 'uses'=>'UserController@aveRating']);

Route::get('/', ['as' => 'home', 'uses'=>'HomeController@index']);

Route::get('advanced_search', ['as' => 'advanced_search', 'uses'=>'AdsController@advanced_search'] );

Auth::routes(['verify' => true]);

Route::get('register/verify/{token}','Auth\RegisterController@verify');

Route::get('sidebar', 'UserController@showSidebar');

Route::get('upload', 'UploadController@uploadForm');
Route::post('upload', 'UploadController@upload');

Route::get('agent/{slug}', ['as'=>'agent_ad', 'uses' => 'UserController@agentAd']);
Route::get('professional/{slug}', ['as'=>'prof_ad', 'uses' => 'UserController@profAd']);

Route::get('pmc', ['as' => 'pmc', 'uses'=>'HomeController@pmc']);

Route::get('LanguageSwitch/{lang}', ['as' => 'switch_language', 'uses'=>'HomeController@switchLang']);

//Listing Page Routes

Route::get('contact-us', ['as' => 'contact_us_page', 'uses'=>'HomeController@contactUs']);
Route::post('contact-us', ['uses'=>'HomeController@contactUsPost']);

Route::get('about-us', ['as' => 'about_us_page', 'uses'=>'HomeController@aboutUs']);

Route::get('page/{slug}', ['as' => 'single_page', 'uses'=>'PostController@showPage']);

Route::get('blog', ['as' => 'blog', 'uses'=>'PostController@blogIndex']);
Route::get('blog/{slug}', ['as' => 'blog_single', 'uses'=>'PostController@blogSingle']);
Route::get('blog/author/{id}', ['as' => 'author_blog_posts', 'uses'=>'PostController@authorPosts']);

Route::get('new-listing', ['as' => 'new-listing', 'uses'=>"AdsController@newListing"]);
Route::get('real-estate-properties', ['as' => 'listing', 'uses'=>'AdsController@listing']);
Route::get('residential-rentals', ['as' => 'resrentallisting', 'uses'=>'AdsController@resRentalListing']);
Route::get('residential-sales', ['as' => 'ressalelisting', 'uses'=>'AdsController@resSaleListing']);
Route::get('commercial-rentals', ['as' => 'commrentallisting', 'uses'=>'AdsController@commRentalListing']);
Route::get('commercial-sales', ['as' => 'commsalelisting', 'uses'=>'AdsController@commSaleListing']);
Route::get('real-estate-properties/land-sales', ['as' => 'landsalelisting', 'uses'=>'AdsController@landSaleListing']);
Route::get('advlisting', ['as' => 'advlisting', 'uses'=>'AdsController@advlisting']);
Route::get('search-listing', ['as' => 'search-listing', 'uses'=> 'AdsController@searchListing']);
Route::get('advanced-search', ['as' => 'advanced-search', 'uses'=>'AdsController@search']);
Route::get('filter', ['as' => 'filter', 'uses'=>'AdsController@filter']);
Route::get('pmclisting', ['as' => 'pmc-listing', 'uses'=>'AdsController@pmclisting']);
Route::get('commlisting', ['as' => 'comm-listing', 'uses'=>'AdsController@commlisting']);
Route::get('real-estate/{slug}', ['as' => 'single_ad', 'uses'=>'AdsController@singleAd']);
Route::get('embedded/{slug}', ['as' => 'embedded_ad', 'uses'=>'AdsController@embeddedAd']);
Route::get('real-estate/{category}', ['as' => 'real-estate', 'uses'=>'AdsController@catListing']);
Route::get('cat-listing', ['as' => 'cat-listing', 'uses'=>'AdsController@catListing']);

//Service Page Routes

Route::get('home-improvement', ['as' => 'homeimprovement', 'uses'=>'AdsController@homeimprovement']);

Route::get('realestateagent', ['as' => 'realestateagent', 'uses'=>'AdsController@realestateagents']);
Route::get('realestateagentlisting', ['as' => 'realestateagent-listing', 'uses'=>'AdsController@realestateagentlisting']);

Route::get('professionals', ['as' => 'professionals', 'uses'=>'UserController@professionals']);
Route::get('professionallisting', ['as' => 'professional-listing', 'uses'=>'UserController@professionallisting']);

Route::get('appraisers', ['as' => 'appraisers', 'uses'=>'AdsController@appraisers']);
Route::get('appraiserlisting', ['as' => 'appraiser-listing', 'uses'=>'AdsController@appraiserlisting']);

Route::get('home-improvement/alarm-companies', ['as' => 'alarms', 'uses'=>'AdsController@alarms']);
Route::get('alarmlisting', ['as' => 'alarm-listing', 'uses'=>'AdsController@alarmlisting']);
Route::get('home-improvement/appliance-repair', ['as' => 'appliances', 'uses'=>'AdsController@appliances']);
Route::get('appliancelisting', ['as' => 'appliance-listing', 'uses'=>'AdsController@appliancelisting']);
Route::get('home-improvement/carpet-install-cleaning', ['as' => 'carpets', 'uses'=>'AdsController@carpets']);
Route::get('carpetlisting', ['as' => 'carpet-listing', 'uses'=>'AdsController@carpetlisting']);
Route::get('home-improvement/driveway-paving-sealing', ['as' => 'driveways', 'uses'=>'AdsController@driveways']);
Route::get('drivewaylisting', ['as' => 'driveway-listing', 'uses'=>'AdsController@drivewaylisting']);
Route::get('home-improvement/electrical-contractors', ['as' => 'electricians', 'uses'=>'AdsController@electricians']);
Route::get('electricianlisting', ['as' => 'electrician-listing', 'uses'=>'AdsController@electricianlisting']);
Route::get('home-improvement/fencing-companies', ['as' => 'fences', 'uses'=>'AdsController@fences']);
Route::get('fencelisting', ['as' => 'fence-listing', 'uses'=>'AdsController@fencelisting']);
Route::get('home-improvement/garage-door-companies', ['as' => 'garages', 'uses'=>'AdsController@garages']);
Route::get('garagelisting', ['as' => 'garage-listing', 'uses'=>'AdsController@garagelisting']);
Route::get('home-improvement/general-contractors', ['as' => 'contractors', 'uses'=>'AdsController@contractors']);
Route::get('contractorlisting', ['as' => 'contractor-listing', 'uses'=>'AdsController@contractorlisting']);
Route::get('home-improvement/gutter-install-cleaning', ['as' => 'gutters', 'uses'=>'AdsController@gutters']);
Route::get('gutterlisting', ['as' => 'gutter-listing', 'uses'=>'AdsController@gutterlisting']);
Route::get('home-improvement/handyman', ['as' => 'handymen', 'uses'=>'AdsController@handymen']);
Route::get('handymenlisting', ['as' => 'handymen-listing', 'uses'=>'AdsController@handymenlisting']);
Route::get('home-improvement/home-theater', ['as' => 'theaters', 'uses'=>'AdsController@theaters']);
Route::get('theaterlisting', ['as' => 'theater-listing', 'uses'=>'AdsController@theaterlisting']);
Route::get('home-improvement/hvac-specialists', ['as' => 'hvac', 'uses'=>'AdsController@hvac']);
Route::get('hvaclisting', ['as' => 'hvac-listing', 'uses'=>'AdsController@hvaclisting']);
Route::get('home-improvement/landscaping-tree-service', ['as' => 'landscaping', 'uses'=>'AdsController@landscaping']);
Route::get('landscapinglisting', ['as' => 'landscaping-listing', 'uses'=>'AdsController@landscapinglisting']);
Route::get('home-improvement/moving-companies', ['as' => 'moving', 'uses'=>'AdsController@moving']);
Route::get('movinglisting', ['as' => 'moving-listing', 'uses'=>'AdsController@movinglisting']);
Route::get('paving', ['as' => 'paving', 'uses'=>'AdsController@paving']);
Route::get('pavinglisting', ['as' => 'paving-listing', 'uses'=>'AdsController@pavinglisting']);
Route::get('home-improvement/painting-companies', ['as' => 'painting', 'uses'=>'AdsController@painting']);
Route::get('paintinglisting', ['as' => 'painting-listing', 'uses'=>'AdsController@paintinglisting']);
Route::get('home-improvement/pest-control', ['as' => 'pest', 'uses'=>'AdsController@pest']);
Route::get('pestlisting', ['as' => 'pest-listing', 'uses'=>'AdsController@pestlisting']);
Route::get('home-improvement/pool-companies', ['as' => 'pool', 'uses'=>'AdsController@pool']);
Route::get('poollisting', ['as' => 'pool-listing', 'uses'=>'AdsController@poollisting']);
Route::get('home-improvement/plumbing-companies', ['as' => 'plumbing', 'uses'=>'AdsController@plumbing']);
Route::get('plumbinglisting', ['as' => 'plumbing-listing', 'uses'=>'AdsController@plumbinglisting']);
Route::get('home-improvement/roofing-companies', ['as' => 'roofing', 'uses'=>'AdsController@roofing']);
Route::get('roofinglisting', ['as' => 'roofing-listing', 'uses'=>'AdsController@roofinglisting']);
Route::get('home-improvement/septic-services', ['as' => 'septic', 'uses'=>'UserController@septic']);
Route::get('septiclisting', ['as' => 'septic-listing', 'uses'=>'AdsController@septiclisting']);
Route::get('home-improvement/siding-companies', ['as' => 'siding', 'uses'=>'AdsController@siding']);
Route::get('sidinglisting', ['as' => 'siding-listing', 'uses'=>'AdsController@sidinglisting']);
Route::get('home-improvement/tile-contractors', ['as' => 'tile', 'uses'=>'AdsController@tile']);
Route::get('tilelisting', ['as' => 'tile-listing', 'uses'=>'AdsController@tilelisting']);
Route::get('home-improvement/window-contractors', ['as' => 'window', 'uses'=>'AdsController@window']);
Route::get('windowlisting', ['as' => 'window-listing', 'uses'=>'AdsController@windowlisting']);

Route::get('home-inspection-companies', ['as' => 'home-inspection-companies', 'uses'=>'AdsController@inspectors']);
Route::get('inspectorlisting', ['as' => 'inspector-listing', 'uses'=>'AdsController@inspectorlisting']);
Route::get('insurance-agent', ['as' => 'insurance-agent', 'uses'=>'AdsController@agents']);
Route::get('agentlisting', ['as' => 'agent-listing', 'uses'=>'AdsController@agentlisting']);
Route::get('brokers', ['as' => 'brokers', 'uses'=>'AdsController@brokers']);
Route::get('brokerlisting', ['as' => 'broker-listing', 'uses'=>'AdsController@brokerlisting']);
Route::get('photographers', ['as' => 'photographers', 'uses'=>'AdsController@photographers']);
Route::get('photographerlisting', ['as' => 'photographer-listing', 'uses'=>'AdsController@photographerlisting']);
Route::get('real-estate-attorneys', ['as' => 'real-estate-attorneys', 'uses'=>'AdsController@attorneys']);
Route::get('attorneylisting', ['as' => 'attorney-listing', 'uses'=>'AdsController@attorneylisting']);
Route::get('videographers', ['as' => 'videographers', 'uses'=>'AdsController@videographers']);
Route::get('videographerlisting', ['as' => 'videographer-listing', 'uses'=>'AdsController@videographerlisting']);

Route::get('open-houses', ['as' => 'open-houses', 'uses'=>'AdsController@openhouses']);
Route::get('open-house-rhode-island-', ['as' => 'open-house', 'uses'=>'AdsController@openhouselisting']);

Route::get('service/{slug}', ['as' => 'service_ad', 'uses'=>'AdsController@serviceAd']);

Route::get('directory', ['as' => 'directory', 'uses'=>'DirectoryController@directory']);
Route::get('directory_cat', ['as' => 'directory_cat', 'uses'=>'DirectoryController@category']);
Route::get('directory_ad', ['as' => 'directory_ad', 'uses'=>'DirectoryController@ad']);

Route::get('slider', ['as' => 'slider', 'uses'=>'AdsController@slider']);

Route::post('save-ad-as-favorite', ['as' => 'save_ad_as_favorite', 'uses'=>'UserController@saveAdAsFavorite']);
Route::post('report-post', ['as' => 'report_ads_pos', 'uses'=>'AdsController@reportAds']);
Route::post('reply-by-email', ['as' => 'reply_by_email_post', 'uses'=>'UserController@replyByEmailPost']);
Route::post('recommend', ['as' => 'recommend_post', 'uses'=>'UserController@recommendPost']);
Route::post('share-by-email', ['as' => 'share_by_email_post', 'uses'=>'UserController@shareByEmailPost']);

// Password reset routes...
Route::post('send-password-reset-link', ['as' => 'send_reset_link', 'uses'=>'Auth\ForgotPasswordController@postEmail']);
Route::get('password/reset/{token}', 'Auth\ForgotPasswordController@getReset');
Route::post('password/reset', ['as'=>'password_reset_post', 'uses'=>'Auth\ForgotPasswordController@postReset']);

Route::post('get-sub-category-by-category', ['as'=>'get_sub_category_by_category', 'uses' => 'AdsController@getSubCategoryByCategory']);
Route::post('get-brand-by-category', ['as'=>'get_brand_by_category', 'uses' => 'AdsController@getBrandByCategory']);
Route::post('get-category-info', ['as'=>'get_category_info', 'uses' => 'AdsController@getParentCategoryInfo']);
Route::post('get-state-by-country', ['as'=>'get_state_by_country', 'uses' => 'AdsController@getStateByCountry']);
Route::post('get-city-by-state', ['as'=>'get_city_by_state', 'uses' => 'AdsController@getCityByState']);
Route::post('get-neighborhood-by-city', ['as'=>'get_neighborhood_by_city', 'uses' => 'AdsController@getNeighborhoodByCity']);
Route::post('switch/product-view', ['as'=>'switch_grid_list_view', 'uses' => 'AdsController@switchGridListView']);

Route::group(['prefix'=>'login'], function(){
    //Native login route
    Route::get('/', ['as' => 'login', 'uses'=>'UserController@login']);
    Route::post('/', ['uses'=>'UserController@loginPost']);

    //Social login route

    Route::get('facebook', ['as' => 'facebook_redirect', 'uses'=>'SocialLogin@redirectFacebook']);
    Route::get('facebook-callback', ['as' => 'facebook_callback', 'uses'=>'SocialLogin@callbackFacebook']);

    Route::get('google', ['as' => 'google_redirect', 'uses'=>'SocialLogin@redirectGoogle']);
    Route::get('google-callback', ['as' => 'google_callback', 'uses'=>'SocialLogin@callbackGoogle']);

    Route::get('login-review', ['as' => 'login_review', 'uses'=>'UserController@loginReviewPost']);

});

Route::resource('user', 'UserController');

//Dashboard Route
Route::group(['prefix'=>'dashboard', 'middleware' => 'dashboard'], function(){
    Route::get('/', ['as'=>'dashboard', 'uses' => 'DashboardController@dashboard']);
    
    Route::post('register_user', ['as'=>'register_user', 'uses' => 'UserController@registerUser']);
    
    Route::get('leasor_dashboard', ['as'=>'leasor_dashboard', 'uses' => 'DashboardController@leasorDashboard']);
    Route::get('seller_dashboard', ['as'=>'seller_dashboard', 'uses' => 'DashboardController@sellerDashboard']);
    //Route::get('pmc_dashboard', ['as'=>'pmc_dashboard', 'uses' => 'DashboardController@pmcDashboard']);
    Route::get('prof_dashboard', ['as'=>'prof_dashboard', 'uses' => 'DashboardController@profDashboard']);
    
    Route::get('agent_dashboard', ['as'=>'agent_dashboard', 'uses' => 'DashboardController@agentDashboard']);
    Route::get('landlord_dashboard', ['as'=>'landlord_dashboard', 'uses' => 'DashboardController@landlordDashboard']);
    
    Route::get('storyboard', ['as'=>'storyboard', 'uses' => 'DashboardController@storyboard']);

    Route::group(['middleware'=>'only_admin_access'], function(){
        Route::group(['prefix'=>'settings'], function(){
            Route::get('theme-settings', ['as'=>'theme_settings', 'uses' => 'SettingsController@ThemeSettings']);
            Route::get('modern-theme-settings', ['as'=>'modern_theme_settings', 'uses' => 'SettingsController@modernThemeSettings']);
            Route::get('social-url-settings', ['as'=>'social_url_settings', 'uses' => 'SettingsController@SocialUrlSettings']);
            Route::get('general', ['as'=>'general_settings', 'uses' => 'SettingsController@GeneralSettings']);
            Route::get('payments', ['as'=>'payment_settings', 'uses' => 'SettingsController@PaymentSettings']);
            Route::get('ad', ['as'=>'ad_settings', 'uses' => 'SettingsController@AdSettings']);
            Route::get('languages', ['as'=>'language_settings', 'uses' => 'LanguageController@index']);
            Route::post('languages', ['uses' => 'LanguageController@store']);
            Route::post('languages-delete', ['as'=>'delete_language', 'uses' => 'LanguageController@destroy']);

            Route::get('storage', ['as'=>'file_storage_settings', 'uses' => 'SettingsController@StorageSettings']);
            Route::get('social', ['as'=>'social_settings', 'uses' => 'SettingsController@SocialSettings']);
            Route::get('blog', ['as'=>'blog_settings', 'uses' => 'SettingsController@BlogSettings']);
            Route::get('other', ['as'=>'other_settings', 'uses' => 'SettingsController@OtherSettings']);
            Route::post('other', ['as'=>'other_settings', 'uses' => 'SettingsController@OtherSettingsPost']);

            //Save settings / options
            Route::post('save-settings', ['as'=>'save_settings', 'uses' => 'SettingsController@update']);
            Route::get('monetization', ['as'=>'monetization', 'uses' => 'SettingsController@monetization']);
        });

        Route::group(['prefix'=>'location'], function(){
            Route::get('country', ['as'=>'country_list', 'uses' => 'LocationController@countries']);
            Route::get('country-data', ['as'=>'get_countries_data', 'uses' => 'LocationController@getCountriesData']);
            Route::get('states', ['as'=>'state_list', 'uses' => 'LocationController@stateList']);
            Route::post('states', [ 'uses' => 'LocationController@saveState']);
            Route::get('states/{id}/edit', ['as'=>'edit_state', 'uses' => 'LocationController@stateEdit']);
            Route::post('states/{id}/edit', ['uses' => 'LocationController@stateEditPost']);
            Route::post('states/delete', ['as'=>'delete_state', 'uses' => 'LocationController@stateDestroy']);
            Route::get('state-data', ['as'=>'get_state_data', 'uses' => 'LocationController@getStatesData']);
            Route::get('cities', ['as'=>'city_list', 'uses' => 'LocationController@cityList']);
            Route::post('cities', ['uses' => 'LocationController@saveCity']);
            Route::get('city-data', ['as'=>'get_city_data', 'uses' => 'LocationController@getCityData']);

            Route::get('cities/{id}/edit', ['as'=>'edit_city', 'uses' => 'LocationController@cityEdit']);
            Route::post('cities/{id}/edit', ['uses' => 'LocationController@cityEditPost']);
            Route::post('city/delete', ['as'=>'delete_city', 'uses' => 'LocationController@cityDestroy']);
        });

        Route::group(['prefix'=>'categories'], function(){
            Route::get('/', ['as'=>'parent_categories', 'uses' => 'CategoriesController@index']);
            Route::post('/', ['uses' => 'CategoriesController@store']);

            Route::get('edit/{id}', ['as'=>'edit_categories', 'uses' => 'CategoriesController@edit']);
            Route::post('edit/{id}', ['uses' => 'CategoriesController@update']);

            Route::post('delete-categories', ['as'=>'delete_categories', 'uses' => 'CategoriesController@destroy']);
        });

        Route::group(['prefix'=>'distances'], function(){
            Route::get('/', ['as'=>'admin_brands', 'uses' => 'BrandsController@index']);
            Route::post('/', ['uses' => 'BrandsController@store']);
            Route::get('edit/{id}', ['as'=>'edit_brands', 'uses' => 'BrandsController@edit']);
            Route::post('edit/{id}', ['uses' => 'BrandsController@update']);
            Route::post('delete-distances', ['as'=>'delete_brands', 'uses' => 'BrandsController@destroy']);
        });

        Route::group(['prefix'=>'posts'], function(){
            Route::get('/', ['as'=>'posts', 'uses' => 'PostController@posts']);
            Route::get('data', ['as'=>'posts_data', 'uses' => 'PostController@postsData']);

            Route::get('create', ['as'=>'create_new_post', 'uses' => 'PostController@createPost']);
            Route::post('create', ['uses' => 'PostController@storePost']);
            Route::post('delete', ['as'=>'delete_post','uses' => 'PostController@destroyPost']);

            Route::get('edit/{slug}', ['as'=>'edit_post', 'uses' => 'PostController@editPost']);
            Route::post('edit/{slug}', ['uses' => 'PostController@updatePost']);
        });

        Route::group(['prefix'=>'pages'], function(){
            Route::get('/', ['as'=>'pages', 'uses' => 'PostController@index']);
            Route::get('data', ['as'=>'pages_data', 'uses' => 'PostController@pagesData']);

            Route::get('create', ['as'=>'create_new_page', 'uses' => 'PostController@create']);
            Route::post('create', ['uses' => 'PostController@store']);
            Route::post('delete', ['as'=>'delete_page','uses' => 'PostController@destroy']);

            Route::get('edit/{slug}', ['as'=>'edit_page', 'uses' => 'PostController@edit']);
            Route::post('edit/{slug}', ['uses' => 'PostController@updatePage']);
        });

        Route::group(['prefix'=>'slider'], function(){
            Route::get('/', ['as'=>'slider', 'uses' => 'SliderController@index']);
            Route::get('create', ['as'=>'create_slider', 'uses' => 'SliderController@create']);
            Route::post('create', ['uses' => 'SliderController@store']);
            Route::post('crop', ['as'=>'create_crop', 'uses' => 'SliderController@postCrop']);
            Route::post('delete', ['as'=>'delete_slider', 'uses' => 'SliderController@destroy']);
            Route::post('update-caption', ['as'=>'update_slider_caption', 'uses' => 'SliderController@update']);
        });
        
        Route::post('save-usertype', ['as'=>'save_usertype', 'uses' => 'UserController@saveType']);

        Route::get('importExport', ['as'=>'import-export', 'uses' => 'MaatwebsiteDemoController@importExport']);
        Route::get('exportAds', 'MaatwebsiteDemoController@exportAds')->name('exportAds');
	Route::get('exportUsers', 'MaatwebsiteDemoController@exportUsers')->name('exportUsers');
        Route::post('importAds', 'MaatwebsiteDemoController@importAds')->name('importAds');
	Route::post('importUsers', 'MaatwebsiteDemoController@importUsers')->name('importUsers');

        Route::get('approved', ['as'=>'approved_ads', 'uses' => 'AdsController@index']);
        Route::get('pending', ['as'=>'admin_pending_ads', 'uses' => 'AdsController@adminPendingAds']);
        Route::get('blocked', ['as'=>'admin_blocked_ads', 'uses' => 'AdsController@adminBlockedAds']);
    	Route::get('pmc', ['as'=>'admin_pmc_ads', 'uses' => 'AdsController@adminPMCAds']);
    	Route::get('comm', ['as'=>'admin_comm_ads', 'uses' => 'AdsController@adminCommAds']);
    	Route::get('sale', ['as'=>'admin_sale_ads', 'uses' => 'AdsController@adminSaleAds']);
    	Route::get('single-family-sale', ['as'=>'admin_single_family_sale_ads', 'uses' => 'AdsController@adminSingleFamilySaleAds']);
    	Route::get('multi-family-sale', ['as'=>'admin_multi_family_sale_ads', 'uses' => 'AdsController@adminMultiFamilySaleAds']);
    	Route::get('condo-sale', ['as'=>'admin_condo_sale_ads', 'uses' => 'AdsController@adminCondoSaleAds']);
    	Route::get('land-sale', ['as'=>'admin_land_sale_ads', 'uses' => 'AdsController@adminLandSaleAds']);
    	Route::get('comm-sale', ['as'=>'admin_comm_sale_ads', 'uses' => 'AdsController@adminCommSaleAds']);
    	Route::get('res-sales', ['as'=>'admin_res_sale_ads', 'uses' => 'AdsController@adminResSaleAds']);
    	Route::get('mixed-sale', ['as'=>'admin_mixed_sale_ads', 'uses' => 'AdsController@adminMixedSaleAds']);
        Route::post('status-change', ['as'=>'ads_status_change', 'uses' => 'AdsController@adStatusChange']);

        Route::get('ad-reports', ['as'=>'ad_reports', 'uses' => 'AdsController@reports']);
        Route::get('users', ['as'=>'users', 'uses' => 'UserController@index']);
        Route::get('ratings', ['as'=>'ratings', 'uses' => 'UserController@ratings']);
	    Route::post('delete-rating', ['as'=>'delete_rating','uses' => 'UserController@ratingDestroy']);
        
        Route::get('current-data', ['as'=>'get_current_data', 'uses' => 'UserController@currentUsersData']);
        Route::get('currentusers', ['as'=>'currentusers', 'uses' => 'UserController@current']);
        Route::get('saveuser-data', ['as'=>'get_saveuser_data', 'uses' => 'UserController@saveuserUsersData']);
        Route::get('saveusersall', ['as'=>'saveusersall', 'uses' => 'UserController@saveusers']);
        Route::get('agents-data', ['as'=>'get_agent_data', 'uses' => 'UserController@agentUsersData']);
        Route::get('agentsall', ['as'=>'agentsall', 'uses' => 'UserController@agents']);
        Route::get('landlord-data', ['as'=>'get_landlord_data', 'uses' => 'UserController@landlordUsersData']);
        Route::get('landlordsall', ['as'=>'landlordsall', 'uses' => 'UserController@landlords']);
        Route::get('prof-data', ['as'=>'get_prof_data', 'uses' => 'UserController@profUsersData']);
        Route::get('profsall', ['as'=>'profsall', 'uses' => 'UserController@profs']);
        
        Route::get('users-data', ['as'=>'get_users_data', 'uses' => 'UserController@usersData']);
        Route::get('prof-data', ['as'=>'get_prof_data', 'uses' => 'UserController@profData']);
        Route::get('ads-data', ['as'=>'get_ads_data', 'uses' => 'AdsController@adsData']);
        Route::get('users-info/{id}', ['as'=>'user_info', 'uses' => 'UserController@userInfo']);
        Route::get('user/edit/{id}', ['as'=>'user_edit', 'uses' => 'UserController@userEdit']);
        Route::post('user/edit/{id}', ['uses' => 'UserController@userEditPost']);
        Route::post('change-user-status', ['as'=>'change_user_status', 'uses' => 'UserController@changeStatus']);
        Route::post('change-user-feature', ['as'=>'change_user_feature', 'uses' => 'UserController@changeFeature']);
        Route::post('delete-reports', ['as'=>'delete_report', 'uses' => 'AdsController@deleteReports']);
        Route::get('ratings-data', ['as'=>'get_ratings_data', 'uses' => 'UserController@ratingsData']);

	Route::post('delete', ['as'=>'delete_contact','uses' => 'HomeController@destroyContact']);

        Route::group(['prefix'=>'administrators'], function(){
            Route::get('/', ['as'=>'administrators', 'uses' => 'UserController@administrators']);
            Route::get('create', ['as'=>'add_administrator', 'uses' => 'UserController@addAdministrator']);
            Route::post('create', ['uses' => 'UserController@storeAdministrator']);

            Route::post('block-unblock', ['as'=>'administratorBlockUnblock','uses' => 'UserController@administratorBlockUnblock']);

        });


    });

    Route::get('contact-messages', ['as'=>'contact_messages', 'uses' => 'HomeController@contactMessages']);
    Route::get('contact-messages-data', ['as'=>'contact_messages_data', 'uses' => 'HomeController@contactMessagesData']);
    
    //All user can access this route
    Route::get('payments', ['as'=>'payments', 'uses' => 'PaymentController@index']);
    Route::get('payments-data', ['as'=>'get_payments_data', 'uses' => 'PaymentController@paymentsData']);
    Route::get('payments-info/{trand_id}', ['as'=>'payment_info', 'uses' => 'PaymentController@paymentInfo']);
    //End all users access


    Route::group(['prefix'=>'u'], function(){
        Route::group(['prefix'=>'posts'], function(){
            Route::get('/', ['as'=>'my_ads', 'uses' => 'AdsController@myAds']);
            Route::get('create_pmc', ['as'=>'create_pmc_ad', 'uses' => 'AdsController@create_pmc']);
            Route::post('create_pmc', ['uses' => 'AdsController@store_pmc']);
            Route::get('create_res', ['as'=>'create_res_ad', 'uses' => 'AdsController@create_res']);
            Route::post('create_res', ['uses' => 'AdsController@store_res']);
            Route::get('create_comm', ['as'=>'create_comm_ad', 'uses' => 'AdsController@create_comm']);
            Route::post('create_comm', ['uses' => 'AdsController@store_comm']);
            Route::get('create_res_sale', ['as'=>'create_res_sale_ad', 'uses' => 'AdsController@create_res_sale']);
            Route::post('create_res_sale', ['uses' => 'AdsController@store_res_sale']);
            Route::get('create_multi_family_sale', ['as'=>'create_multi_family_sale_ad', 'uses' => 'AdsController@create_multi_family_sale']);
            Route::post('create_multi_family_sale', ['uses' => 'AdsController@store_multi_family_sale']);
            Route::get('create_condo_sale', ['as'=>'create_condo_sale_ad', 'uses' => 'AdsController@create_condo_sale']);
            Route::post('create_condo_sale', ['uses' => 'AdsController@store_condo_sale']);
            Route::get('create_land_sale', ['as'=>'create_land_sale_ad', 'uses' => 'AdsController@create_land_sale']);
            Route::post('create_land_sale', ['uses' => 'AdsController@store_land_sale']);
            Route::get('create_comm_sale', ['as'=>'create_comm_sale_ad', 'uses' => 'AdsController@create_comm_sale']);
            Route::post('create_comm_sale', ['uses' => 'AdsController@store_comm_sale']);
            Route::post('delete', ['as'=>'delete_ads', 'uses' => 'AdsController@destroy']);
            Route::get('edit/{id}', ['as'=>'edit_ad', 'uses' => 'AdsController@edit']);
            Route::post('edit/{id}', ['uses' => 'AdsController@update']);
            Route::get('my-lists', ['as'=>'my_ads', 'uses' => 'AdsController@myAds']);
            Route::get('favorite-lists', ['as'=>'favorite_ads', 'uses' => 'AdsController@favoriteAds']);
            Route::post('reply-by-email-favorite', ['as' => 'reply_by_email_favorite_post', 'uses'=>'UserController@replyByEmailPost']);
            Route::get('business-listings', ['as'=>'business_listings', 'uses' => 'UserController@businessListings']);
            Route::get('business-info/edit', ['as'=>'business_info', 'uses' => 'UserController@businessInfo']);
            Route::post('business-info/edit', ['uses' => 'UserController@businessEditPost']);
            //Upload ads image
            Route::post('upload-a-image', ['as'=>'upload_ads_image', 'uses' => 'AdsController@uploadAdsImage']);
            Route::post('upload-post-image', ['as'=>'upload_post_image', 'uses' => 'PostController@uploadPostImage']);
            
            Route::post('upload-ajax-images', ['as'=>'upload_ajax_images', 'uses' => 'AdsController@ajaxImages']);

            Route::get('images-upload', 'AdsController@dropzone');
            Route::post('images-upload/store/{id}', ['as'=>'dropzone.store','uses'=>'AdsController@dropzoneStore']);

            // Standalone image upload
            Route::get('images', ['as'=>'images', 'uses' => 'AdsController@images']);
            
            Route::get('images/{id}', ['as'=>'images', 'uses' => 'AdsController@images']);

            //Delete media
            Route::post('delete-media', ['as'=>'delete_media', 'uses' => 'AdsController@deleteMedia']);
            Route::post('delete-ajax-media', ['as'=>'delete_ajax_media', 'uses' => 'AdsController@ajaxDeleteMedia']);
            Route::post('feature-media-creating', ['as'=>'feature_media_creating_ads', 'uses' => 'AdsController@featureMediaCreatingAds']);
            Route::get('append-media-image', ['as'=>'append_media_image', 'uses' => 'AdsController@appendMediaImage']);
            Route::get('append-post-media-image', ['as'=>'append_post_media_image', 'uses' => 'PostController@appendPostMediaImage']);
            Route::get('pending-lists', ['as'=>'pending_ads', 'uses' => 'AdsController@pendingAds']);
            Route::get('archive-lists', ['as'=>'favorite_ad', 'uses' => 'AdsController@create']);
            //Checkout payment
            Route::get('checkout/{transaction_id}', ['as'=>'payment_checkout', 'uses' => 'PaymentController@checkout']);
            Route::post('checkout/{transaction_id}', ['uses' => 'PaymentController@chargePayment']);
            //Payment success url
            Route::post('checkout/{transaction_id}/payment-success', ['as'=>'payment_success_url','uses' => 'PaymentController@paymentSuccess']);
            Route::post('checkout/{transaction_id}/paypal-notify', ['as'=>'paypal_notify_url','uses' => 'PaymentController@paypalNotify']);
            Route::get('reports-by/{slug}', ['as'=>'reports_by_ads', 'uses' => 'AdsController@reportsByAds']);
            Route::get('profile', ['as'=>'profile', 'uses' => 'UserController@profile']);
            Route::get('profile/edit', ['as'=>'profile_edit', 'uses' => 'UserController@profileEdit']);
            Route::post('profile/edit', ['uses' => 'UserController@profileEditPost']);
            Route::get('profile/change-avatar', ['as'=>'change_avatar', 'uses' => 'UserController@changeAvatar']);
            Route::post('upload-avatar', ['as'=>'upload_avatar',  'uses' => 'UserController@uploadAvatar']);
            Route::get('profile/change-agent-logo', ['as'=>'change_agent_logo', 'uses' => 'UserController@changeAgentLogo']);
            Route::post('upload-agent-logo', ['as'=>'upload_agent_logo',  'uses' => 'UserController@uploadAgentLogo']);
            
            Route::get('image-crop', 'UserController@imageCrop');
            Route::post('image-crop', 'UserController@imageCropPost');

            Route::get('agent_profile', ['as'=>'agent_profile', 'uses' => 'UserController@agentProfile']);
            
            Route::post('images-store/{id}', ['as'=>'images_store', 'uses'=>'AdsController@imagesStore']);
            
            Route::get('/multi/intro-info', 'AdsController@introInfo');
            
            Route::get('/multi/create-info', 'AdsController@createInfo');
            Route::post('/multi/create-info/{category}/{sale_type}', 'AdsController@postCreateInfo');
            
            Route::get('/multi/create-detail', 'AdsController@createDetail');
            Route::post('/multi/create-detail', 'AdsController@postcreateDetail');
            
            Route::get('/multi/pmc-units', 'AdsController@pmcUnits');
            Route::post('/multi/pmc-units', 'AdsController@postPMCUnits');
            
            Route::get('/multi/multi-units', 'AdsController@multiUnits');
            Route::post('/multi/multi-units', 'AdsController@postMultiUnits');
            
            Route::get('/multi/create-media', 'AdsController@createMedia');
            Route::post('/multi/create-media', 'AdsController@postCreateMedia');
            
            Route::get('/multi/create-review', 'AdsController@createReview');
            Route::post('/multi/create-review', 'AdsController@postCreateReview');
            
            Route::get('/multi/create-images', 'AdsController@createImages');
            Route::post('/multi/create-images', 'AdsController@postCreateImages');
            
            Route::get('/multi/show-images', 'AdsController@showImages');
            Route::post('/multi/show-images', 'AdsController@postShowImages');
            
            Route::get('/multi/create-success/{id}', 'AdsController@createSuccess');

            /**
             * Change Password route
             */
            Route::group(['prefix' => 'account'], function() {
                Route::get('change-password', ['as' => 'change_password', 'uses' => 'UserController@changePassword']);
                Route::post('change-password', 'UserController@changePasswordPost');
            });


        });
    });

    Route::get('logout', ['as'=>'logout', 'uses' => 'DashboardController@logout']);
});

Route::get('/how-it-works', 'HomeController@howitworks');

Route::get('/home-buyer-information', 'HomeController@homebuyerinformation');
Route::get('/home-sale-information', 'HomeController@homesellerinformation');

Route::get('/reorderimages', 'AdsController@reorderImages');
Route::post('/uploadimages/{id}', ['as'=>'dropzone.store','uses'=>'AdsController@dropzoneStore']);

Route::get('/ajaximages', 'AdsController@ajaxImages');

Route::get('gmaps', 'HomeController@gmaps');

Route::get('/mortgage', 'AdsController@mortgage');

Route::get('/open-house-rhode-island-{city}', 'AdsController@test')->name('test');

Route::get('search/servicecity', 'AdsController@testsearch')->name('searchServiceCityForm');
Route::post('search/servicecity', 'AdsController@process')->name('processServiceCity');

Route::get('open-house/rhode-island/{city}', 'AdsController@anotherMethod');

Route::get('newsearch/{search}', ['as' => 'search', 'uses' => 'AdsController@newsearch']);

