<?php

class Partner extends Db_object {
    protected static $db_table = 'Partners';
    protected static $db_table_field = array( 'full_name','gender','country','state','date_time','affiliate_code',
                                                'bank_name','account_number','image','partner_email','fone_number');
    public $id;
    public $full_name;
    public $gender;
    public $country;
    public $state;
    public $date_time;
    public $affiliate_code;
    public $bank_name;
    public $account_number;
    public $image;
    public $partner_email;
    public $fone_number;




    public static function create_partner($full_name='', $gender='', $country, $state, $date_time, $affiliate_code, $bank_name, $account_number, $image, $partner_email, $fone_number)
    {
        if(!empty($full_name) && !empty($gender) &&!empty($country) && !empty($state) && !empty($date_time) && !empty($affiliate_code) &&
     !empty($bank_name) && !empty($account_number) && !empty($image) && !empty($partner_email) && !empty($fone_number))
        {
            $partner= new Partner();

            $partner->full_name= $full_name;
            $partner->gender= $gender;
            $partner->country= $country;
            $partner->image= $image;
            $partner->account_number= $account_number;
            $partner->state= $state;
            $partner->bank_name= $bank_name;
            $partner->partner_email= $partner_email;
            $partner->affiliate_code= $affiliate_code;
            $partner->date_time= $date_time;
            $partner->fone_number= $fone_number;
            // $partner->fone_number= $fone_number;

            return $partner;

        }else{
            return 'pls check the info and try again';
        }
    }



} //END OF comment CLASS

 // $posts_count = mysqli_num_rows($select_all_post);