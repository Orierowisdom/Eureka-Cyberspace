<?php

class Partner extends Db_object {
    protected static $db_table = 'Partners';
    protected static $db_table_field = array( 'full_name','gender','country','state','date_time()','affiliate_code',
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


    public $upload_directory ='assets'. DS.'img'.DS.'affiliate';
    public $errors = array();



public function upload_error($error){
    $upload_errors = array(

        UPLOAD_ERR_OK => "There is no error",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive",
        UPLOAD_ERR_FORM_SIZE => "The file exceeds the MAX_FILE_SIZE (1mb) in form",
        UPLOAD_ERR_PARTIAL => "The uploaded file was only partial uploaded",
        UPLOAD_ERR_NO_FILE => "No file was uploaded.",
        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"
    );
    return $upload_errors[$error];
}


public function set_file($file)
{   
    if($file['error'] > 0 ){
        $this->errors[]= $this->upload_error($file['error'] );
        return false;
     }else{
        
        $file_temp=$file['tmp_name'];
        $this->image = basename( $file['name']);
        $target_path =  SITE_ROOT . DS . 'admin' . DS .$this->upload_directory.DS.$this->image;
     
     if (move_uploaded_file($file_temp,$target_path )){
         return "file upload suceeded";
     }
     else{  
        $this->errors[]= "file upload failed";
        return false;
        }
     
    }

}


public function delete_file(){
    if ($this->delete()) {
        $target_path = SITE_ROOT . DS . 'admin' . DS . DS .$this->upload_directory.DS.$this->image ;;
        return unlink($target_path) ? true : false;
    } else {
        return "false";
    }

}





    // public static function create_partner($full_name='', $gender='', $country, $state, $date_time, $affiliate_code, $bank_name, $account_number, $image, $partner_email, $fone_number)
    // {
    //     if(!empty($full_name) && !empty($gender) &&!empty($country) && !empty($state) && !empty($date_time) && !empty($affiliate_code) &&
    //  !empty($bank_name) && !empty($account_number) && !empty($image) && !empty($partner_email) && !empty($fone_number))
    //     {
    //         $partner= new Partner();

    //         $partner->full_name= $full_name;
    //         $partner->gender= $gender;
    //         $partner->country= $country;
    //         // $partner->image=
            
    //         $partner->set_file($image);

    //         if($partner->save_file()){
    //             return  "user upload successfuly";
    //         }else{
        
    //             return join("<br>", $partner->errors);
    //         }
    //         $partner->account_number= $account_number;
    //         $partner->state= $state;
    //         $partner->bank_name= $bank_name;
    //         $partner->partner_email= $partner_email;
    //         $partner->affiliate_code= $affiliate_code;
    //         $partner->date_time= $date_time;
    //         $partner->fone_number= $fone_number;
    //         // $partner->fone_number= $fone_number;

    //         return $partner;

    //     }else{
    //         return 'pls check the info and try again';
    //     }
    // }



} //END OF comment CLASS

 // $posts_count = mysqli_num_rows($select_all_post);


 