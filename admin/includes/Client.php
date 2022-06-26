<?php

class Client extends Db_object {
    protected static $db_table = 'Clients';
    protected static $db_table_field = array( 'full_name','phone_number','personal_email','site_package','date_time()','site_type',
    'page_number','business_name','business_industry','partner_refferal_id','business_summary','logo');
  
    public $id;
    public $full_name;
    public $phone_number;
    public $personal_email;
    public $site_package;
    public $date_time;
    public $site_type;
    public $page_number;
    public $business_name;
    public $business_industry;
    public $partner_refferal_id;
    public $business_summary;
    public $logo;

    public $logo_upload_directory ='assets'. DS.'img'.DS.'clients';
    public $file_upload_directory ='assets'.DS.'business_summary';
    
    public $errors = array();


public function upload_error($error){
    $upload_errors = array(

        UPLOAD_ERR_OK => "There is no error",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive",
        UPLOAD_ERR_FORM_SIZE => "The file exceeds the MAX_FILE_SIZE in form",
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

         if($file['type'] =='image/jpeg' || $file['type'] =='image/png' ||$file['type'] =='image/jpg' ){
        $file_temp=$file['tmp_name'];
        $this->logo = basename( $file['name']);
        $target_path =  SITE_ROOT . DS . 'admin' . DS .$this->logo_upload_directory.DS.$this->logo;

        move_uploaded_file($file_temp,$target_path );
         }
     
         else{  
        $file_temp=$file['tmp_name'];
        $this->business_summary = basename( $file['name']);
        $target_path =  SITE_ROOT . DS . 'admin' . DS .$this->file_upload_directory.DS.$this->business_summary;

        move_uploaded_file($file_temp,$target_path );
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





       
    public static function find_partner_clients($affiliate_code){
        global $database;
        $sql = " SELECT * FROM ".self::$db_table;
        $sql .= " WHERE partner_refferal_id = " .$database->escape_string($affiliate_code);
        $sql .= " ORDER BY partner_refferal_id ASC";
        return self::find_by_query($sql);
     }



} //END OF comment CLASS

