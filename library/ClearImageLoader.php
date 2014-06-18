<?php
/**
 * Created by PhpStorm.
 * User: Web Master Jasper
 * Date: 6/11/14
 * Time: 11:19 AM
 */

class ClearImageLoader {

    private $messageText;

    private  $imageDirectory;

    private $imageDirectoryShortName;

    private $max_width;

    private $max_height;

    private $ideal_ratio;

    private $valid_formats;

    private $images_dir_string;

    /**
     * @return string
     */
    public function getImagesDirString()
    {
        return $this->images_dir_string;
    }
    /**
     * @return string
     */
    public function getImageDirectoryShortName()
    {
        return $this->imageDirectoryShortName;
    }
    /**
     * @return array
     */
    private function getValidFormats()
    {
        $formats = [ 'jpg', 'JPG', 'png', 'PNG', 'gif', 'GIF' ];

        $this->valid_formats = $formats;

        return $this->valid_formats;
    }


    /**
     * @param float $ideal_ratio
     */
    public function setIdealRatio($ideal_ratio)
    {
        $this->ideal_ratio = $ideal_ratio;
    }

    /**
     * @return float
     */
    public function getIdealRatio()
    {
        return (string)$this->ideal_ratio;
    }

    /**
     * @param int $max_height
     */
    public function setMaxHeight( $max_height )
    {
        $this->max_height = $max_height;
    }

    /**
     * @return string
     */
    public function getMaxHeight()
    {
        return $this->max_height;
    }

    /**
     * @param string $max_width
     */
    public function setMaxWidth( $max_width )
    {
        $this->max_width = $max_width;
    }

    /**
     * @return string
     */
    public function getMaxWidth()
    {
        return $this->max_width;
    }



    /**
     * @param string $messageText
     */
    public function setMessageText( $messageText )
    {
        $this->messageText = $messageText;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }

    /**
     * @param string $imageDirectory
     * @return bool
     * @throws string  if not a valid directory.
     */
    public function setImageDirectory( $imageDirectory )
    {
        if( $this->checkTheType( $imageDirectory ) == 'string' ){
            $baseDir = get_template_directory() . '/img/';
            $this->images_dir_string = get_template_directory_uri() . '/img/' . $imageDirectory . '/';
            $fullyQualifiedDirectory =  $baseDir . $imageDirectory;
            if( ! is_dir( $fullyQualifiedDirectory ) ){
                //throw( new Exception( 'Must be a Valid Directory!' ) );
                echo 'This is not a valid directory';
            } else {
                $this->imageDirectoryShortName = $imageDirectory;
                $this->imageDirectory = $fullyQualifiedDirectory;
                return true;
            }
        } else{
            echo 'Directory must be a string';
        }
    } // This function has been debugged.

    /**
     * @return string
     */
    public function getImageDirectory()
    {
        return $this->imageDirectory;
    }

    function __construct()
    {
        // TODO: Setup anything that must be initialized on setup;
    }


    /**
     * @param mixed $valueToCheck
     * @return string
     */
    function checkTheType($valueToCheck){
        return gettype($valueToCheck);
    }

    /**
     * @return array
     */
    function loadImages(){
        $imageInfo = [[]];
        $this->loadDefaults();
        $folder = dir( $this->imageDirectory );
        $i = 0;
        while( $file = $folder->read() ){

            if( ( $file != '.' ) && ( $file != '..' ) && $this->validateFileFormat( $file ) ){
                //  put in image format validation.
                // should be taken care of.
                $size = getimagesize( $this->getImageDirectory() . '/' . $file );

                $width = $size[0];
                $height = $size[1];

                $ratio = $width/$height;


                if( ( $width > $this->max_width ) or ( $height > $this->max_height ) ){
                    if( ($ratio > $this->ideal_ratio) ){
                        $imageInfo[$i] = ['width'=>$this->max_width . 'px', 'text-align'=>'center', 'src'=>$this->getImagesDirString() . $file, 'imageWidth'=> $this->max_width . 'px', 'imageHeight'=>'', 'alt'=>$file ];
                        $i++;
                    }

                    if( $ratio < $this->ideal_ratio ){
                        $imageInfo[$i] = ['width'=>$this->max_width . 'px', 'text-align'=>'center', 'src'=>$this->getImagesDirString() . $file, 'imageWidth'=> '', 'imageHeight'=>$this->max_height . 'px', 'alt'=>$file];
                        $i++;
                    }
                } else{
                    $imageInfo[$i] = ['width'=>$this->max_width . 'px', 'text-align'=>'center', 'src'=>$this->getImagesDirString() . $file, 'imageWidth'=> '', 'imageHeight'=>'', 'alt'=>$file];
                    $i++;
                }
            }
        }
        //$imageList = $this->setUpImageList( $imageInfo );
        $folder->close();
        return $imageInfo;
    }

    /**
     * @param string $fileString
     * @return bool
     */
    function validateFileFormat( $fileString ){
        $formats = $this->getValidFormats();
        $file = $fileString;
        $count = count($formats) - 1;
        $flag = false;
        for( $i=0; $i < $count; $i++ ){
            $ending = substr( $file, -3, 3 );
            if( $formats[$i] == $ending ){
                $flag = true;
            }
        }
        if( $flag ){
            return true;
        } else{
            return false;
        }
    }

    function setUpImageList( $imageInfo ){
        $imageList = [];
        $numImages = count( $imageInfo );
        for( $i = 0; $i < $numImages; $i++ ){
            $preparedString = '';
            $numAttributes = count( $imageInfo[$i] );
            for( $j = 0; $j < $numAttributes; $j++){
                $preparedString = sprintf('<li style="width:%1s; text-align:%2s"><img src="%3s" alt="%4s" width="%5s" height="%6s" /></li>',
                    $imageInfo[$i]['width'],
                    $imageInfo[$i]['text-align'],
                    $imageInfo[$i]['src'],
                    $imageInfo[$i]['alt'],
                    $imageInfo[$i]['imageWidth'],
                    $imageInfo[$i]['imageHeight']
                );
            }
            $imageList[$i] = $preparedString;
        }
        return $imageList;
    }

    public function SetupInnerFadeSlideShow( $imageDirString ){
        if( $this->setImageDirectory( $imageDirString ) ){
            $startUlTag = '<ul style="list-style-type:none;" class="innerFadeSlideShow ' . $this->getImageDirectoryShortName() . '">';
            $endUlTag = '</ul>';
            $imageSetup = $this->loadImages();
            $imageListDefault = $this->setUpImageList( $imageSetup );
            $imageCountCurrent = count( $imageListDefault );
            echo $startUlTag;
            for( $i = 0; $i < $imageCountCurrent; $i++ ){
                echo strval( $imageListDefault[$i] );
            }
            echo $endUlTag;
        }

    }


    private function loadDefaults(){

        if( ! isset( $this->imageDirectory ) ){
            echo 'This property Must be set after Class Instantiation for proper functionality';
        }

        if( ! isset( $this->max_height ) ){
            $this->setMaxHeight( '700' );
        }

        if( ! isset( $this->max_width ) ){
            $this->setMaxWidth( '500' );
        }

        if( ! isset( $this->ideal_ratio ) ){
            $ratio = (string)$this->max_width/$this->max_height;
            $this->setIdealRatio( $ratio );
        }
    }
}

