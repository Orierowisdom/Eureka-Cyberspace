

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
        $this->error[]= upload_error($file['error'] );
        return false;
     }else{
        
        $file_temp=$file['tmp_name'];
        $this->image = basename( $file['name']);
        $target_path =  SITE_ROOT . DS . 'admin' . DS .$this->upload_directory.DS.$this->image;
     
     if (move_uploaded_file($file_temp,$target_path )){
         return "file upload suceeded";
     }
     else{  
        $this->error[]= "file upload failed";
        return false;
        }
     
    }

}


public function delete_photo(){
    if ($this->delete()) {
        $target_path = SITE_ROOT . DS . 'admin' . DS . DS .$this->upload_directory.DS.$this->image ;;
        return unlink($target_path) ? true : false;
    } else {
        return "false";
    }

}



//alternative 
//alternative 
//alternative 



public $upload_directory ='assets'. DS.'img'.DS.'affiliate';
    public $errors = array();
    public $tmp_path;
  

    public $upload_errors_array = array(
        UPLOAD_ERR_OK => "There is no error",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive",
        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE (1mb)in form",
        UPLOAD_ERR_PARTIAL => "The uploaded file was only partial uploaded",
        UPLOAD_ERR_NO_FILE => "No file was uploaded.",
        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"
    );

    //This is passing $_FILES[''] as an argument
    public function set_file($file)
    {
        if (empty($file) || !$file || !is_array($file)) {
            $this->errors[] = "There was no uploaded file here!";
            return false;
        } elseif ($file['error'] != 0) {

            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;

        } else {
            $this->image = basename($file['name']);
            $this->tmp_path = $file['tmp_name'];

        }
    }

    public function picture_path()
    {

        return $this->upload_directory .DS . $this->image;
    }


    public function save_file(){
        if ($this->id) {
            $this->update();
        } else {
            if (!empty($this->errors)) {
                return false;
            }
           

            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->image;
            // $target_path = "admin/images/{$this->image}";
            if (file_exists($target_path)) {
                $this->errors[] = "the file {$this->image} already exist";
                return false;
            }

            if (move_uploaded_file($this->tmp_path, $target_path)) {
                if ($this->create()) {
                    unset($this->tmp_path);
                    return true;
                }
            } else {
                $this->errors[] = "the file directory probably does not have permission";
                return false;
            }

        }

    }


public function delete_photo(){
    if ($this->delete()) {
        $target_path = SITE_ROOT . DS . 'admin' . DS . DS .$this->upload_directory.DS.$this->image ;;
        return unlink($target_path) ? true : false;
    } else {
        return "false";
    }

}




