<?php
/**
 * @version 1.0
 * @author Kiran Kumar
 * @author Kiran Kumar. M <kiran.mentam@asmansoft.com>
 */
class ImageResizerComponent extends Component {

/**
* 
* @var Declarations
* 
*/			
		var $maxwidth;
		var $maxheight;
		var $path;
		var $img;
		var $newwidth;
		var $newheight;
		var $mime;
		var $image;
		var $width;
		var $height;
/**
* @method maxWidth
* @param  $width
* 
*/		
	function maxWidth($width){
		$this->maxwidth = $width;
	}
/**
* @method maxHeight
* @param $height
* 
*/
	function maxHeight($height){
		$this->maxheight = $height;
	}
/**
* @method imagePath
* @param  $path
* 
*/
	function imagePath($path){
		$this->path = $path;
	}
/**
* @method getMimeType
* 
*/
	function getMimeType(){
		$imgedata = getimagesize($this->path);
		$this->mime = $imgedata['mime'];
	}
/**
* @method createImage
* 
*/
	function createImage(){
		switch($this->mime){
			case 'image/jpeg':
				$this->image = imagecreatefromjpeg($this->path);
			break;
			
			case 'image/gif':
				$this->image = imagecreatefromgif($this->path);
			break;
			
			case 'image/png':
				$this->image = imagecreatefrompng($this->path);
			break;
		}
	}
/**
* resizeImage
* 
*/	
	function resizeImage(){
		set_time_limit(300);
		$this->getMimeType();
		$this->createImage();
		$this->width = imagesx($this->image);
		$this->height = imagesy($this->image);
		$this->setDimensions();
		$resizedimage = imagecreatetruecolor($this->newwidth,$this->newheight);
		imagecopyresampled($resizedimage, $this->image, 0, 0, 0, 0, $this->newwidth, $this->newheight,$this->width, $this->height);
		imagejpeg($resizedimage,$this->path);
						
	}
/**
*   =========================================================================
*	#		 FUNCTION FOR RESETTING DEMENSIONS OF IMAGE 					#
*	=========================================================================
* 
*/	
	
	function setDimensions(){
		if($this->width==$this->height){
			$case = 'first';
		}elseif($this->width > $this->height){
			$case = 'second';
		}else{
			 $case = 'third'; 
		}
		if($this->width > $this->maxwidth && $this->height > $this->maxheight){
			$cond = 'first';
		}elseif($this->width > $this->maxwidth && $this->height <= $this->maxheight){
			$cond = 'first';
		}else{
			$cond = 'third';
		}
						
		switch($case){
			case 'first':
				$this->newwidth = $this->maxwidth;
				$this->newheight = $this->maxheight;
			break;
			case 'second':
				$ratio = $this->width / $this->height;
				$amount = $this->width - $this->maxwidth;
				$this->newwidth = $this->width - $amount;
				$this->newheight = $this->height - ($amount/$ratio);
			break;
			case 'third':
				$ratio = $this->height / $this->width;
				$amount = $this->height - $this->maxheight;
				$this->newheight = $this->height - $amount;
				$this->newwidth = $this->width - ($amount/$ratio);
			break;
		} 	
	}
/**
* @method imageSettings
* @param $imgwidth
* @param $imgheight
* @param $imgpath
* 
*/
	function imageSettings($imgwidth ,$imgheight ,$imgpath){
		$this->maxWidth($imgwidth);
		$this->maxHeight($imgheight);
		$this->imagePath($imgpath);
		if($this->resizeImage()){
			return 1;
		}
	}
}
	
?>