<?php

class Client extends Db_object {
    protected static $db_table = 'Clients';
    protected static $db_table_field = array( 'full_name','phone_number','personal_email','site_package','date','site_type',
    'page_number','business_name','business_industry','partner_refferal_id','business_summary','logo');
    public $id;
    public $full_name;
    public $phone_number;
    public $personal_email;
    public $site_package;
    public $date;

    public $site_type;
    public $page_number;
    public $business_name;
    public $business_industry;
    public $partner_refferal_id;
    public $business_summary;
    public $logo;

   

//upload image


//        public $filename;
//    public $type;
//    public $size;

//    public $tmp_path;
//    public $upload_directory = "images";
//    public $errors = array();

//    public $upload_errors_array = array(
//        UPLOAD_ERR_OK => "There is no error",
//        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive",
//        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE in form",
//        UPLOAD_ERR_PARTIAL => "The uploaded file was only partial uploaded",
//        UPLOAD_ERR_NO_FILE => "No file was uploaded.",
//        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
//        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
//        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"
//    );

//     This is passing $_FILES[''] as an argument
//    public function set_file($file)
//    {
//        if (empty($file) || !$file || !is_array($file)) {
//            $this->errors[] = "There was no uploaded file here!";
//            return false;
//        } elseif ($file['error'] != 0) {

//            $this->errors[] = $this->upload_errors_array[$file['error']];
//            return false;

//        } else {
//            $this->filename = basename($file['name']);
//            $this->tmp_path = $file['tmp_name'];
//            $this->type = $file['type'];
//            $this->size = $file['size'];

//        }

//    }

//    public function picture_path()
//     {

//         return $this->upload_directory . "/" . $this->filename;
//     }


//     public function save(){
//         if ($this->id) {
//             $this->update();
//         } else {
//             if (!empty($this->errors)) {
//                 return false;
//             }
//             if (empty($this->filename) || empty($this->tmp_path)) {
//                 $this->errors[] = "the file was not available";
//                 return false;
//             }

//             $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->filename;
//             // $target_path = "admin/images/{$this->filename}";
//             if (file_exists($target_path)) {
//                 $this->errors[] = "the file {$this->filename} already exist";
//                 return false;
//             }

//             if (move_uploaded_file($this->tmp_path, $target_path)) {
//                 if ($this->create()) {
//                     unset($this->tmp_path);
//                     return true;
//                 }
//             } else {
//                 $this->errors[] = "the file directory probably does not have permission";
//                 return false;
//             }

//         }

//     }




       
    public static function find_partner_clients($affiliate_code){
        global $database;
        $sql = " SELECT * FROM ".self::$db_table;
        $sql .= " WHERE partner_refferal_id = " .$database->escape_string($affiliate_code);
        $sql .= " ORDER BY partner_refferal_id ASC";
        return self::find_by_query($sql);
     }



} //END OF comment CLASS

