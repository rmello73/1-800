<?php
   
namespace App\Imports;
   
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'id'    => $row['id'],'name'    => $row['name'],'first_name'    => $row['first_name'],'last_name'    => $row['last_name'],'email'    => $row['email'],'password'    => $row['password'],'mobile'    => $row['mobile'],'address'    => $row['address'],'website'    => $row['website'],'office'    => $row['office'],'photo'    => $row['photo'],'photo2'    => $row['photo2'],'photo3'    => $row['photo3'],'photo4'    => $row['photo4'],
            'photo5'    => $row['photo5'],'photo_storage'    => $row['photo_storage'],'user_type'    => $row['user_type'],'active_status'    => $row['active_status'],'feature'    => $row['feature'],'is_email_verified'    => $row['is_email_verified'],'is_online'    => $row['is_online'],'last_login'    => $row['last_login'],'remember_token'    => $row['remember_token'],
            'created_at'    => $row['created_at'],'updated_at'    => $row['updated_at'],'agent_logo'    => $row['agent_logo'],'description'    => $row['description'],'city'    => $row['city'],'state'    => $row['state'],'zip'    => $row['zip'],'fax'    => $row['fax'],'company'    => $row['company'],'title'    => $row['title'],'years_bus'    => $row['years_bus'],'video'    => $row['video'],'category'    => $row['category'],
            'subcat'    => $row['subcat'],'asp'    => $row['asp'],'asp2'    => $row['asp2'],'asp3'    => $row['asp3'],'asp4'    => $row['asp4'],'asp5'    => $row['asp5'],'tsa'    => $row['tsa'],'tsa2'    => $row['tsa2'],'tsa3'    => $row['tsa3'],'tsa4'    => $row['tsa4'],'tsa5'    => $row['tsa5'],'tsa6'    => $row['tsa6'],'tsa7'    => $row['tsa7'],'tsa8'    => $row['tsa8'],'tsa9'    => $row['tsa9'],'tsa10'    => $row['tsa10'],'mh'    => $row['mh'],'th'    => $row['th'],'wh'    => $row['wh'],
            'rh'    => $row['rh'],'fh'    => $row['fh'],'sh'    => $row['sh'],'uh'    => $row['uh'],'verified'    => $row['verified'],'email_token'    => $row['email_token'],'facebook'    => $row['facebook'],'twitter'    => $row['twitter'],'instagram'    => $row['instagram'],'video2'    => $row['video2'],'video3'    => $row['video3'],'video4'    => $row['video4'],'videotitle2'    => $row['videotitle2'],'videotitle3'    => $row['videotitle3'],
            'videotitle4'    => $row['videotitle4'],'activation_code'    => $row['activation_code'],'photo6'    => $row['photo6'],'user_temp'    => $row['user_temp'],
        ]);
    }
}
