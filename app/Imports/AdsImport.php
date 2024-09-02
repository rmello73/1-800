<?php
   
namespace App\Imports;
   
use App\Ad;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
class AdsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ad([
            'title'    => $row['title'],
            'slug'    => $row['slug'],
            'description'    => $row['description'],
            'type'    => $row['type'],
            'price'    => $row['price'],
            'square_unit_space'    => $row['square_unit_space'],
        ]);
    }
}
