<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Exports\AdsExport;
use App\Exports\UsersExport;
use App\Imports\AdsImport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
 
class MaatwebsiteDemoController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importExport()
    {
        return view('admin.importExport');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function exportAds()
    {
        return Excel::download(new AdsExport, 'properties.csv');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'users.csv');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importAds()
    {
        Excel::import(new AdsImport,request()->file('file'));

        return back();
    }

    public function importUsers()
    {
        Excel::import(new UsersImport,request()->file('file'));

        return back();
    }
}
