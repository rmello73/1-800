<?php
  
namespace App\Exports;
  
use App\Ad;
use Maatwebsite\Excel\Concerns\FromCollection;
  
class AdsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ad::all();
    }
}
