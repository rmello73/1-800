<?php
  
namespace App\Exports;
  
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
    
    public function headings() :array
    {
        return ["id","name","first_name","last_name","email","mobile","address","website","office","photo","photo2","photo3","photo4",
            "photo5","photo_storage","user_type","active_status","feature","is_email_verified","is_online","last_login","remember_token",
            "created_at","updated_at","agent_logo","description","city","state","zip","fax","company","title","years_bus","video","category",
            "subcat","asp","asp2","asp3","asp4","asp5","tsa","tsa2","tsa3","tsa4","tsa5","tsa6","tsa7","tsa8","tsa9","tsa10","mh","th","wh",
            "rh","fh","sh","uh","verified","email_token","facebook","twitter","instagram","video2","video3","video4","videotitle2","videotitle3",
            "videotitle4","activation_code","photo6","user_temp"];
    }
}
