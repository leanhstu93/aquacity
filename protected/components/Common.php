<?php

class Common extends CController {
	static function sendphone($button,$phone){
		$script = '
		<script>
		$(function(){	
			$("'.$button.'").click(function() {
			/* Act on the event aa*/
				var num = $("'.$phone.'").val();
				num = num.replace(/\s/g, "");
				if($.isNumeric(num) == false || num.length < 6 || num.length > 12)
				{
					alert("Bạn vui lòng nhập số điện thoại!");
					$("'.$phone.'").val("");	
					$("'.$phone.'").focus();
					return false;	
				}
				else
				{
					$.ajax({
						url: "ajax/sendphone",
						type: "post",
						dataType: "json",
						data: {num: num,
							url : "http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'"
						},
					success : function(result){
						$("'.$phone.'").val("");	
						 if(result.result == 0)
			             {
			                 alert("Bạn vui lòng nhập số điện thoại!");	
			             }
			             else if(result.result == -1){
			             	alert("Bạn nhập quá nhanh! Vui lòng chờ trong giây lát để nhập lại!");	
			             }
			             else
			             {
			                alert("Số điện thoại "+num+" của bạn đã được gửi đến chúng tôi. Chúng tôi sẽ gọi lại cho bạn trong thời gian sớm nhất!");			          
			            }
						return false;
					},
					error : function(){
						$("'.$phone.'").val("");	
						alert("Xin vui lòng nhập lại số điện thoại!");
						return false;
					}
					});
					return false;
				}		
			
			});
		}) 
		</script>';
		echo $script;
	}
 function chuoingaunhien( $length ) {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $size = strlen( $chars );
      $str ="";
      for( $i = 0; $i < $length; $i++ ) {
      $str .= $chars[ rand( 0, $size - 1 ) ];
       }
      return $str;
  }
  public static function getNewsnew($id,$limit)
  {
  	 $criteria = new CDbCriteria();
        $criteria->condition = "Active = 1 and idNgonNgu = 1 and t.id != $id";
        $criteria->order = "t.id desc";
        $criteria->limit = $limit;
        $criteria->with = "tintuc_lang";
        $news = Tintuc::model()->findAll($criteria);
        return $news;
  }
  public static function postRelated($id,$idLoaiTin,$lang)
    {
    	 $criteria = new CDbCriteria();
        $criteria->condition = "idLoaiTin = $idLoaiTin and Active = 1 and idNgonNgu = 1 and t.id != $id";
        $criteria->order = "t.id desc";
        $criteria->limit = 6;
        $criteria->with = "tintuc_lang";
        $tlq = Tintuc::model()->findAll($criteria);
        return $tlq;
    }
 public static function getOneRecord($model,$field,$where)
 {
    $dk = new CDbCriteria;  
    $dk->condition = $where;  
    $kq = $model::model()->findAll($dk); 
    if(isset($kq[0]->$field))
        return $kq[0]->$field;
    else
        return false;
 }
 function themtailieu(){ 
  $dir = "../tailieu/";
  $kieuFile=array('image/gif','image/jpeg','image/pjpeg','audio/mpeg','video/x-ms-wmv');
  $maxsize = 50*1024*1024; //50MB 
	
  $type = $_FILES['f1']["type"];
  $size = $_FILES['f1']["size"]; //Tinh bang byte
  $name = strip_tags($_FILES['f1']["name"]);
  $tmp_name = $_FILES['f1']["tmp_name"];
	
  // if (in_array($type,$kieuFile)==false) die ("Kiểu file không chấp nhận");
   if ($size > $maxsize) die ("Kích thước file quá lớn");
   if (file_exists($dir.$name)) die($name." đã có rồi");      
	
   $url = $dir . $name; 
   move_uploaded_file($tmp_name, $url);
	
   $TenFile = trim(strip_tags($_POST['tenfile']));
   $MoTa = trim(strip_tags($_POST['mota']));
   if (get_magic_quotes_gpc()==false) {
	$TenFile = mysql_real_escape_string($TenFile);	
	$MoTa = mysql_real_escape_string($MoTa);	
	$name = mysql_real_escape_string($name);	
   }
   $sql="INSERT INTO download SET mota='$MoTa',tenfile='$TenFile',ngay=Now(), url='$name'";
   if(!$kq=$this->db->query($sql)) die($this->db->error) ;
}//function

 public static function setFileLog($id = null,$status = "")
 {
 	$path = 'file/filelog.txt';
	$fp = @fopen($path, "a+");
	$date = Common::getDate();
	$username = $idrole = Yii::app()->user->getState('Username');
	$controller = Yii::app()->controller->id;
	$action = Yii::app()->controller->action->id;
	if($id != null)
	{
		if($status == "")
			$data = "[".$date." ".$username."] ".$controller." ".$action."(".$id.")"."\r\n";
		else
			$data = "[".$date." ".$username."] ".$controller." ".$status."(".$id.")"."\r\n";
	}
	else
	{
		if($status == "")
			$data = "[".$date." ".$username."] ".$controller." ".$action."\r\n";
		else
			$data = "[".$date." ".$username."] ".$controller." ".$status."\r\n";
	}
	fwrite($fp, $data);
	fclose($fp);
 }
 public static function getDate()
 {
 	$now = getdate(); 
    $currentTime = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"]; 
    $currentDate = $now["mday"] . "." . $now["mon"] . "." . $now["year"]; 
    $currentWeek = $now["wday"] . ".";  
    $date =  $now["hours"].":".$now["minutes"].":".$now["seconds"]." ".$now["mday"]."-".$now["mon"]."-".$now["year"];
    return $date;
 }
 public static function getState($data,$key)
 {
    return $data[$key];
 }

  public static function ngaychothue($data)
 {
    $arr = explode(",",$data);
    $kq = "";
    foreach ($arr as  $value) {
    	$kq .= date("d/m/Y", $value)." - ";
    }
    return $kq;
 }
 public static function bodau($str){
	$unicode = array(
	  'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
	  'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
	  'd'=>'đ','D'=>'Đ',
	  'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ','E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
	  'i'=>'í|ì|ỉ|ĩ|ị','I'=>'Í|Ì|Ỉ|Ĩ|Ị',
	  'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ', 
	  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
	  'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự', 'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
	  'y'=>'ý|ỳ|ỷ|ỹ|ỵ','Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
	   '/' => '',
	  '*' => '',
	  '\\' => '',
	  '=' => '',
	  '+' => '',
	);
	foreach($unicode as $khongdau=>$codau) {
	  $arr = explode("|",$codau);
	  $str = str_replace($arr,$khongdau,$str);
	}

	$str = str_replace(array('?','&','+','%',"'",'"','|'),"",$str);
	$str = trim($str);		
	while (strpos($str,'  ')>0) $str = str_replace("  "," ",$str);
	$str = str_replace(" ","-",$str);	
	return $str;
}//changeTitle
public static function menudacap2($id,$model ="Loaisanpham",$idnn)
{
	$criteria = new CDbCriteria();
	$criteria->condition = "Active = 1 and t.id = $id and idNgonNgu = $idnn";
	$criteria->with = "loaitin_lang";
	$criteria->order = "t.Order ";
	$data = $model::model()->find($criteria);
	$count = $model::model()->count($criteria);
	$ul_open = '<ul class="dropdown-menu">';
	$ul_close = "</ul>";
	$li_open_ ='<li>';
	$li_open ='<li class="dropdown-submenu">';
	$li_close = '</li>';
		
		if($count > 0)
		{
			$criteria = new CDbCriteria();
			$criteria->condition = "Active = 1 and Parent = $id and idNgonNgu = $idnn";
			$criteria->with = "loaitin_lang";
			$criteria->order = "t.Order ";
			$data1 = $model::model()->findAll($criteria);
			$count = $model::model()->count($criteria);
			if($count> 0 )
				echo $li_open;
			else
				echo $li_open_;
			echo '<a href="'.Yii::app()->request->baseUrl.'/loai-tin/'.$data->loaitin_lang->Alias.'.html">'.$data->loaitin_lang->Name.'</a>';
			//kiem tra co menu con hay k, neu co thi goi lai
			
			if($count > 0)
			{
				echo $ul_open;
				foreach ($data1 as $key => $value) {
					# code...

					Common::menudacap2($value->id,"Loaitin",$idnn);
				}
				echo $ul_close;
			}
				
			echo $li_close;
		
		}
	
	
}
public static function menutintuc($id,$model ="Loaitin",$idnn)
{
	$criteria = new CDbCriteria();
	$criteria->condition = "Active = 1 and t.id = $id and idNgonNgu = $idnn";
	$criteria->with = "loaitin_lang";
	$data = $model::model()->find($criteria);
	$count = $model::model()->count($criteria);
	$ul_open = '<ul class="dropdown-menu">';
	$ul_close = "</ul>";
	$li_open_ ='<li>';
	$li_open ='<li class="dropdown-submenu">';
	$li_close = '</li>';
		
		if($count > 0)
		{
			$criteria = new CDbCriteria();
			$criteria->condition = "Active = 1 and Parent = $id and idNgonNgu = $idnn";
			$criteria->with = "loaitin_lang";
			$data1 = $model::model()->findAll($criteria);
			$count = $model::model()->count($criteria);
			if($count> 0 )
				echo $li_open;
			else
				echo $li_open_;
			echo '<a href="'.Yii::app()->request->baseUrl.'/loai-tin/'.$data->loaitin_lang->Alias.'.html">'.$data->loaitin_lang->Name.'</a>';
			//kiem tra co menu con hay k, neu co thi goi lai
			
			if($count > 0)
			{
				echo $ul_open;
				foreach ($data1 as $key => $value) {
					# code...

					Common::menudacap2($value->id,"Loaitin",$idnn);
				}
				echo $ul_close;
			}
				
			echo $li_close;
		
		}
	
	
}

 
public static function menudacap4($id,$model ="Loaisanpham",$idnn)
{
	$criteria = new CDbCriteria();
	$criteria->condition = "Active = 1 and t.id = $id and idNgonNgu = $idnn";
	$criteria->with = "loaisanpham_lang";
	$criteria->order = "t.Order ";
	$data = $model::model()->find($criteria);
	$count = $model::model()->count($criteria);
	$ul_open = '<ul class="dropdown-menu">';
	$ul_close = "</ul>";
	$li_open_ ='<li>';
	$li_open ='<li class="dropdown-submenu">';
	$li_close = '</li>';
		
		if($count > 0)
		{
			$criteria = new CDbCriteria();
			$criteria->condition = "Active = 1 and Parent = $id and idNgonNgu = $idnn";
			$criteria->with = "loaisanpham_lang";
			$criteria->order = "t.Order ";
			$data1 = $model::model()->findAll($criteria);
			$count = $model::model()->count($criteria);
			if($count> 0 )
				echo $li_open;
			else
				echo $li_open_;
			echo '<a href="'.Yii::app()->request->baseUrl.'/loai-san-pham/'.$data->loaisanpham_lang->Alias.'.html">'.$data->loaisanpham_lang->Name.'</a>';
			//kiem tra co menu con hay k, neu co thi goi lai
			
			if($count > 0)
			{
				echo $ul_open;
				foreach ($data1 as $key => $value) {
					# code...

					Common::menudacap4($value->id,"Loaisanpham",$idnn);
				}
				echo $ul_close;
			}
				
			echo $li_close;
		
		}
	
	
}

 public static function dequyOptions($data,$parent=0,$text="--",$select=0,$continue = null){
	foreach($data as $k=>$value){
		if($continue == $value->id) continue;
		if($value->Parent == $parent){
			$id=$value->id;
			$name = Common::getOneRecord("LoaisanphamLang","Name","idNgonNgu = 1 and idLoai = ".$value->id);
			if($select != 0 && $id == $select){
				echo "<option value='".$id."' selected='selected'>".$text.$name."</option>";
			}else{
				echo "<option value='".$id."'>".$text.$name."</option>";
			}
			unset($data[$k]);
			Common::dequyOptions($data,$id,$text."--",$select,$continue);
		}
	}
}
 public static function dequyOptions1($data,$parent=0,$text="--",$select=0,$continue = null){
	foreach($data as $k=>$value){
		if($continue == $value->id) continue;
		if($value->Parent == $parent){
			$id=$value->id;
			$name = Common::getOneRecord("LoaitinLang","Name","idNgonNgu = 1 and idLoaiTin = ".$value->id);
			if($select != 0 && $id == $select){
				echo "<option value='".$id."' selected='selected'>".$text.$name."</option>";
			}else{
				echo "<option value='".$id."'>".$text.$name."</option>";
			}
			unset($data[$k]);
			Common::dequyOptions1($data,$id,$text."--",$select,$continue);
		}
	}
}
 public static function dequyOptions2($data,$parent=0,$text="--",$select=0,$continue = null){
	foreach($data as $k=>$value){
		if($continue == $value->id) continue;
		if($value->Parent == $parent){
			$id=$value->id;
			$name = Common::getOneRecord("LoaikhachhangLang","Name","idNgonNgu = 1 and idLoaiKhachHang = ".$value->id);
			if($select != 0 && $id == $select){
				echo "<option value='".$id."' selected='selected'>".$text.$name."</option>";
			}else{
				echo "<option value='".$id."'>".$text.$name."</option>";
			}
			unset($data[$k]);
			Common::dequyOptions2($data,$id,$text."--",$select,$continue);
		}
	}
}
public static function phanquyen($idper)
 {
 	if(Yii::app()->user->isGuest) 
 		return array(array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
    $idrole = Yii::app()->user->getState('role');
    $data = RolePermission::model()->findAll("roleid = :idrole and permissionid = :permissionid",array(":idrole"=>$idrole,":permissionid"=>$idper));
    $rule = array();
    $rule[0] =array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'admin','view','admin2','Duyettrangthai','Huydonhang','Khoiphucgiaodich','anhien','suataikhoan','ghichu'
               ),
         
                );
    if(isset($data[0]))
    {
	    $value = $data[0];
	    $actions = array('admin');
	   			if($value->update == 1){
	   				$actions[] = "update";
	   				$rule[1] = 
				   				array(
				   					'allow',
				   					'actions'=>$actions,
				   					'users' => array(Yii::app()->user->getState('Username')),
				   					
	   							);
	   			}
	   			if($value->create == 1){
	   				$actions[] = "create";
	   				$rule[1] =	
				   				array(
				   					'allow',
				   					'actions'=>$actions,
				   					'users' => array(Yii::app()->user->getState('Username')),
				   					
	   						);
	   			}
	   			if($value->active == 1){
	   				$actions[] = "duyetxe";
	   				$rule[1] =	
				   				array(
				   					'allow',
				   					'actions'=>$actions,
				   					'users' => array(Yii::app()->user->getState('Username')),
				   					
	   						);
	   			}
	   			if($value->delete == 1){
	   				$actions[] = "delete";
	   				$rule[1] =	
				   				array(
				   					'allow',
				   					'actions'=>$actions,
				   					'users' => array(Yii::app()->user->getState('Username')),
				   					
	   						);
	   			}
	   			
	   		}
	   		$rule[2] =array(
                'deny', // allow authenticated user to perform 'create' and 'update' actions
                'users' => array(
                    '*'
                )
                );
	   		$data = RolePermission::model()->findAll("roleid = :idrole ",array(":idrole"=>$idrole));
	   		echo CHtml::css(".qlbl{display:none !important}");
	   		echo CHtml::css(".qldgcx{display:none  !important}");
	   		echo CHtml::css(".qldgx{display:none !important}");
	   		echo CHtml::css(".qldh{display:none !important}");
	   		echo CHtml::css(".kqgd{display:none !important}");
	   		echo CHtml::css(".qlldgcx{display:none !important}");
	   		echo CHtml::css(".qlldgx{display:none !important}");
	   		echo CHtml::css(".qllt{display:none !important}");
	   		echo CHtml::css(".qlmdtx{display:none !important}");
	   		echo CHtml::css(".qlnt{display:none !important}");
	   		echo CHtml::css(".qlntx{display:none !important}");
	   		echo CHtml::css(".qlnct{display:none !important}");
	   		echo CHtml::css(".qltt{display:none !important}");
	   		echo CHtml::css(".qlx{display:none !important}");
	   		echo CHtml::css(".qlbqt{display:none !important}");
	   		echo CHtml::css(".qlqt{display:none !important}");
	   		echo CHtml::css(".qlr{display:none !important}");
	   		echo CHtml::css(".qldx{display:none !important}");
	   		echo CHtml::css(".qlpb{display:none !important}");
	   		echo CHtml::css(".qldlx{display:none !important}");
	   		echo CHtml::css(".cntt{display:none !important}");
	   		foreach ($data as $value) {
	   			# code...
	   			if($value->permissionid == 1) echo CHtml::css(".qlbl{display:block !important}");
	   			if($value->permissionid == 2) echo CHtml::css(".qldgcx{display:block !important}");
	   			if($value->permissionid == 3) echo CHtml::css(".qldgx{display:block !important}");
	   			if($value->permissionid == 4) echo CHtml::css(".qldh{display:block !important}");
	   			if($value->permissionid == 5) echo CHtml::css(".kqgd{display:block !important}");
	   			if($value->permissionid == 6) echo CHtml::css(".qlldgcx{display:block !important}");
	   			if($value->permissionid == 7) echo CHtml::css(".qlldgx{display:block !important}");
	   			if($value->permissionid == 8) echo CHtml::css(".qllt{display:block !important}");
	   			if($value->permissionid == 9) echo CHtml::css(".qlmdtx{display:block !important}");
	   			if($value->permissionid == 10) echo CHtml::css(".qlnt{display:block !important}");
	   			if($value->permissionid == 11) echo CHtml::css(".qlntx{display:block !important}");
	   			if($value->permissionid == 12) echo CHtml::css(".qlnct{display:block !important}");
	   			if($value->permissionid == 13) echo CHtml::css(".qltt{display:block !important}");
	   			if($value->permissionid == 14) echo CHtml::css(".qlx{display:block !important}");
	   			if($value->permissionid == 15) echo CHtml::css(".qlx{display:block !important}");
	   			if($value->permissionid == 16) echo CHtml::css(".qlqt{display:block !important}");
	   			if($value->permissionid == 17) echo CHtml::css(".qlr{display:block !important}");
	   			if($value->permissionid == 18) echo CHtml::css(".qldx{display:block !important}");
	   			if($value->permissionid == 18) echo CHtml::css(".qlpb{display:block !important}");
	   			if($value->permissionid == 18) echo CHtml::css(".qldlx{display:block !important}");
	   			if($value->permissionid == 19) echo CHtml::css(".cntt{display:block !important}");
	   		}
	   		return $rule;

 }
 public static function set_cache($name, $condition, $time_ = 'timeCache_small') {return false;
        Yii::app()->cache->set(Yii::app()->params['prifix_'] . '_' . $name, $condition, Yii::app()->params[$time_]);
    }

    public static function get_cache($name) {
    	return false;
        return Yii::app()->cache->get(Yii::app()->params['prifix_'] . '_' . $name);
    }
     public static function getRelatedCar($id,$count)
    {
    	$xe = Xe::model()->find("id = $id");
    	$dk = new CDbCriteria;  
      	$dk->condition = "idDuLieuXe = $xe->idDuLieuXe and id != $id"; 
      	$dk->order = "id desc";
      	$dk->limit = $count;
      	$count_xe = Xe::model()->count();
      	$data = Xe::model()->findAll($dk);
      	return $data;
    }
    
     public static function getDescription($data,$count)
	 {
	    $data = strip_tags($data);
	    $data = str_replace("&nbsp;", " ", $data);
	    if(strlen($data) > $count)
	    {
	        $data = mb_substr($data, 0,$count,"UTF-8");
	        $data = $data."...";
	    }
	    return $data;


	 }
	public static function down1($file){
	  // tiếp nhận tham số
	   //   $iddl=$this->params[0]; settype($idDL,"int"); if ($iddl<=0) exit();
	    //  $row = $this->dl->thongtin1soft($iddl);
	      $filename = $file;
	      $url = ''.$file;  //echo $_SERVER['SCRIPT_FILENAME'];
	      $mimetype="application/force-download";
	      $filesize = filesize($url);
	  //    $this->dl->tangsolandown($iddl);
	      //ấn định http header
	      header("Content-Type: $mimetype");
	      header("Content-Disposition: attachment; filename=\"$filename\"");
	      header("Content-Length: " . $filesize);
	      //đọc file
	      set_time_limit(0);
	      $file = fopen($url,"rb");
	      if ($file) {
	        while(!feof($file)) { print(fread($file, 1024*8)); flush(); }
	        fclose($file);
	      }
    }//down1
    public static function translate($lang){
    	$ngonngu = array();
    	// trang quan ly tai khoan
    	if($lang == 2)
    	{
    		$ngonngu[0] = "Solution";
    		$ngonngu[1] = "Customer";
    		$ngonngu[2] = "News";
    		$ngonngu[3] = "Name";
    		$ngonngu[4] = "About us";
    		$ngonngu[5] = "Gender ";
    		$ngonngu[6] = "New product";
    		$ngonngu[7] = "Related products";
    		$ngonngu[8] = "Address";
    		$ngonngu[9] = "Register date";
    		$ngonngu[10] = "Update";
    		$ngonngu[11] = "My accout";
    		$ngonngu[12] = "My order";
    		$ngonngu[13] = "Warning";
    		$ngonngu[14] = "we serve all days on week ( involve tet and festival) ";
    		$ngonngu[15] = "Payment";
    		$ngonngu[16] = "Ship";
    		$ngonngu[17] = "Title";
    		$ngonngu[18] = "CHEFS";
    		$ngonngu[19] = "Chef, Counsellor Michael Bao Huynh and Vice-Chefs who trained by Chef himself";
    		$ngonngu[20] = "Date of hire";
    		$ngonngu[21] = "No";
    		$ngonngu[22] = "Yes";
    		$ngonngu[23] = "Success";
    		$ngonngu[24] = "Opinion was sent to committee.";
    		$ngonngu[25] = "Confirmation letter was sent";
    		$ngonngu[26] = "to";
    		$ngonngu[27] = "Waiting for progressing";
    		$ngonngu[28] = "Processing";
    		$ngonngu[29] = "Paydesk";
    		$ngonngu[30] = "Complete";
			$ngonngu[31] = "Cancelled";
			$ngonngu[32] = "Transaction failures";
			$ngonngu[33] = "ORDER";
			$ngonngu[34] = "BOOK DAY";
			$ngonngu[35] = "Cart";
			$ngonngu[36] = "Please order to be delivered in person or call directly";
			$ngonngu[37] = "Home";
			$ngonngu[38] = "Time";
			$ngonngu[39] = "About us";
			$ngonngu[40] = "Related news";
			$ngonngu[41] = "Popular foods";
			$ngonngu[42] = "Product information";
			$ngonngu[43] = "Provisional";
			$ngonngu[44] = "Price";
			$ngonngu[45] = "Making payments";
			$ngonngu[46] = "Contact";
			$ngonngu[47] = "Logout";
			$ngonngu[48] = "Login";
			$ngonngu[49] = "Gallery";
			$ngonngu[50] = "Search";
			$ngonngu[51] = "The best sell dishes";
			$ngonngu[52] = "Found";
			$ngonngu[53] = "result";
			$ngonngu[54] = "Dish";
			$ngonngu[55] = "Sorted by";
			$ngonngu[56] = "Date Posted Latest";
			$ngonngu[57] = "Date Posted oldest";
			$ngonngu[58] = "Our menu is very delicious dishes, the typicals of Mexico";
			$ngonngu[59] = "Not Found";
			$ngonngu[60] = "Order information";
			$ngonngu[61] = "Vietnamese";
			$ngonngu[62] = "English";
			$ngonngu[63] = "Receive fee";
			$ngonngu[64] = "Collect money when receiving goods";
			$ngonngu[65] = "Choose year model";
			$ngonngu[66] = "Guarantee";
			$ngonngu[67] = "Yes";
			$ngonngu[68] = "No";
			$ngonngu[69] = "Maybe";
			$ngonngu[70] = "Everyday";
			$ngonngu[71] = "Pick day";
			$ngonngu[72] = "Manufacturers";
			$ngonngu[73] = "Type";
			$ngonngu[74] = "Year";
			$ngonngu[75] = "Color";
			$ngonngu[76] = "Post";
			$ngonngu[77] = "Need driver?";
			$ngonngu[78] = "Seats";
			$ngonngu[79] = "Plate";
			$ngonngu[80] = "Purpose";
			$ngonngu[81] = "Choose location you want to hire and get car";
			$ngonngu[82] = "Address";
			$ngonngu[83] = "Time";
			$ngonngu[84] = "Everyday";
			$ngonngu[85] = "Pick day";
			$ngonngu[86] = "From";
			$ngonngu[87] = "To";
			$ngonngu[88] = "Pick day";
			$ngonngu[89] = "Readmore";
			$ngonngu[90] = "Add more days";
			$ngonngu[91] = "Images";
			$ngonngu[92] = "All";
			$ngonngu[93]="Description";
			$ngonngu[94]="Describe your car to help customers have better view and trust your car";
			$ngonngu[95]="Post";
			$ngonngu[96]="Next";
			$ngonngu[97]="Choose location";
			$ngonngu[98]="Choose province/city";
			$ngonngu[99]="From";
			$ngonngu[100]="To";
			$ngonngu[101]="Pick day";
			$ngonngu[102]="Choose purpose";
			$ngonngu[103]="Search";
			$ngonngu[104]="Tel";
			$ngonngu[105]="Found";
			$ngonngu[106]="results";
			$ngonngu[107]="Sort by";
			$ngonngu[108]="By Day";
			$ngonngu[109]="Day Newest";
			$ngonngu[110]="Day Oldest";
			$ngonngu[111]="By Price";
			$ngonngu[112]="Price DESC";
			$ngonngu[113]="Price ASC";
			$ngonngu[114]="By Rate";
			$ngonngu[115]="Rate DESC";
			$ngonngu[116]="Rate ASC";
			$ngonngu[117]="Company";
			$ngonngu[118]="Year";
			$ngonngu[119]="Seats";
			$ngonngu[120]="Details";
			$ngonngu[121]="Hire Price";
			$ngonngu[122]="Choose Year";
			$ngonngu[123]="Choose Color";
			$ngonngu[124]="Filter";
			$ngonngu[125]="Rate";
			$ngonngu[126]="Author";
			$ngonngu[127]="Message";
			$ngonngu[128]="Shipping fee";
			$ngonngu[129]="Less Hire";
			$ngonngu[130]="Hire Times";
			$ngonngu[131]="times";			
			$ngonngu[132]="Manual";
			//quanlydonhang
			$ngonngu[133] = "Content should not be empty";
			$ngonngu[134] = "You have not rated star";
			$ngonngu[135] = "Save rated success";
			$ngonngu[136] = "History rental";
			$ngonngu[137] = "Password";
			$ngonngu[138] = "Re-Password";
			$ngonngu[139] = "Gender";
			$ngonngu[140] = "Birthday";
			$ngonngu[141] = "Phone";
			$ngonngu[142] = "Registration Date";
			$ngonngu[143] = "Male";
			$ngonngu[144] = "Female";
			//
			$ngonngu[145] = "Support";
			$ngonngu[146] = "Expiration date";
			$ngonngu[147] = "card number";
			$ngonngu[148] = "The name on the card";
			$ngonngu[149] = "Card number must be 16 characters";
			$ngonngu[150] = "Email is incorrect";
			$ngonngu[151] = "Please check your email";
			$ngonngu[152] = "Update cart";
			$ngonngu[153] = "HOT NEWS";
			$ngonngu[154] = "Breaking news";
			$ngonngu[155] = "Comment";
			$ngonngu[156] = "CONTACT INFO";
			$ngonngu[157] = "Content";
			$ngonngu[158] = "Send";
			$ngonngu[159] = "Contact us";
			$ngonngu[160] = "Digital";
			$ngonngu[161] = "car owner";
			$ngonngu[162] = "Comment";
			$ngonngu[163] = "Carving";
			$ngonngu[164] = "Additional rental days";
			$ngonngu[165] = "Menu";
			$ngonngu[166] = "menu";
    	}
    	else{
    		$ngonngu[0] = "Giải pháp";
    		$ngonngu[1] = "Khách hàng";
    		$ngonngu[2] = "Tin tức";
    		$ngonngu[3] = "Họ tên";
    		$ngonngu[4] = "Về chúng tôi";
    		$ngonngu[5] = "Giới tính ";
    		$ngonngu[6] = "Sản phẩm mới ";
    		$ngonngu[7] = "Sản phẩm liên quan";
    		$ngonngu[8] = "Địa chỉ";
    		$ngonngu[9] = "Ngày đăng ký";
    		$ngonngu[10] = "Cập nhật";
    		$ngonngu[11] = "Tài khoản của bạn";
    		$ngonngu[12] = "Đơn hàng";
    		$ngonngu[13] = "Cảnh báo";
    		$ngonngu[14] = "Chúng tôi phục vụ tất cả các ngày trong tuần (kể cả lễ tết)";
    		$ngonngu[15] = "Thanh toán";
    		$ngonngu[16] = "Giao hàng";
    		$ngonngu[17] = "Tiêu đề";
    		$ngonngu[18] = "Đầu bếp";
    		$ngonngu[19] = "Bếp trưởng và cố vấn Michael Bảo Huỳnh. Bếp phụ là những người do chính ông đào tạo";
    		$ngonngu[20] = "Ngày thuê";
    		$ngonngu[21] = "Không";
    		$ngonngu[22] = "Có";
    		$ngonngu[23] = "Thành công";
    		$ngonngu[24] = "Ý kiến đã gửi đến ban quản trị.";
    		$ngonngu[25] = "Thư xác nhận đã được gởi";
    		$ngonngu[26] = "tới";
    		$ngonngu[27] = "Chờ xử lý";
    		$ngonngu[28] = "Đang xử lý";
    		$ngonngu[29] = "Chờ trả tiền";
    		$ngonngu[30] = "Hoàn thành";
			$ngonngu[31] = "Đã hủy";
			$ngonngu[32] = "Giao dịch thất bại";
			$ngonngu[33] = "ĐẶT HÀNG";
			$ngonngu[34] = "ĐẶT NGÀY";
			$ngonngu[35] = "Giỏ hàng";
			$ngonngu[36] = "Đặt hàng để được giao tận nơi hoặc gọi trực tiếp.";
			$ngonngu[37] = "Trang chủ";
			$ngonngu[38] = "Thời gian";
			$ngonngu[39] = "Giới thiệu";
			$ngonngu[40] = "Tin tức liên quan";
			$ngonngu[41] = "Món ăn phổ biến";
			$ngonngu[42] = "Thông tin sản phẩm";
			$ngonngu[43] = "Tạm tính";
			$ngonngu[44] = "Tiền";
			$ngonngu[45] = "Tiến hành thanh toán";
			$ngonngu[46] = "Liên hệ";
			$ngonngu[47] = "Đăng xuất";
			$ngonngu[48] = "Đăng nhập";
			$ngonngu[49] = "Thư viện hình ảnh";
			$ngonngu[50] = "Tìm kiếm ";
			$ngonngu[51] = "Món bán chạy";
			$ngonngu[52] ="Tìm thấy";
			$ngonngu[53] = "kết quả";
			$ngonngu[54] = "Món ăn";
			$ngonngu[55] = "Sắp xếp theo";
			$ngonngu[56] = "Ngày đăng mới nhất";
			$ngonngu[57] = "Ngày đăng cũ nhất";
			$ngonngu[58] = "Menu chúng tôi là những món ăn rất ngon, đặc trưng của đất nước MEXICO";
			$ngonngu[59] = "Không tìm thấy phiên bản phù hợp";
			$ngonngu[60] = "Thông tin đặt hàng";
			$ngonngu[61] = "Tiếng Việt";
			$ngonngu[62] = "Tiếng Anh";
			$ngonngu[63] = "Nhận tiền";
			$ngonngu[64] = "Thu tiền khi nhận hàng";
			$ngonngu[65] = "Chọn phiên bản";
			$ngonngu[66] = "Bảo hành";
			$ngonngu[67] = "Có";
			$ngonngu[68] = "Không";
			$ngonngu[69] = "Có hoặc không";
			$ngonngu[70] = "Mọi ngày";
			$ngonngu[71] = "Theo ngày nhất định";
			$ngonngu[72] = "Hãng sản xuất";
			$ngonngu[73] = "Dòng xe";
			$ngonngu[74] = "Phiên bản";
			$ngonngu[75] = "Màu xe";
			$ngonngu[76] = "Đăng bởi";
			$ngonngu[77] = "Mã hàng";
			$ngonngu[78] = "Số chỗ ngồi";
			$ngonngu[79] = "Biển số";
			$ngonngu[80] = "Mục đích cho thuê";
			$ngonngu[81] = "Chọn tỉnh thành bạn muốn giao nhận xe";
			$ngonngu[82] = "Địa chỉ của bạn";
			$ngonngu[83] = "Thời gian";
			$ngonngu[84] = "Mọi ngay";
			$ngonngu[85] = "Theo ngày nhất định";
			$ngonngu[86] = "Từ ngày";
			$ngonngu[87] = "Đến ngày";
			$ngonngu[88] = "Chọn ngày muốn cho thuê";
			$ngonngu[89] = "Đọc thêm";
			$ngonngu[90] = "Thêm ngày cho thuê";
			$ngonngu[91] = "Hình ảnh";
			$ngonngu[92] = "Tất cả";
			$ngonngu[93]="Mô tả";
			$ngonngu[94]="Giúp khách hàng hiểu rõ hơn về xe và thêm tin tưởng vào uy tín, sản phẩm của bạn";
			$ngonngu[95]="Đăng tin";
			$ngonngu[96]="Tiếp tục";
			//Search
			$ngonngu[97]="Chọn nơi nhận và trả xe";
			$ngonngu[98]="Chọn tỉnh/thành phố";
			$ngonngu[99]="Ngày nhận";
			$ngonngu[100]="Ngày trả";
			$ngonngu[101]="Chọn ngày";
			$ngonngu[102]="Chọn mục đích cho thuê";
			$ngonngu[103]="Tìm kiếm";

			//Sản phẩm
			$ngonngu[104]="Điện thoại";
			$ngonngu[105]="Tìm thấy";
			$ngonngu[106]="kết quả";
			$ngonngu[107]="Sắp xếp theo";
			$ngonngu[108]="Ngày đăng";
			$ngonngu[109]="Ngày đăng mới nhất";
			$ngonngu[110]="Ngày đăng cũ nhất";
			$ngonngu[111]="Giá thuê";
			$ngonngu[112]="Giá thuê cao nhất";
			$ngonngu[113]="Giá thuê thấp nhất";
			$ngonngu[114]="Đánh giá";
			$ngonngu[115]="Đánh giá cao nhất";
			$ngonngu[116]="Đánh giá thấp nhất";
			$ngonngu[117]="Hãng xe";
			$ngonngu[118]="Đời xe";
			$ngonngu[119]="Số chỗ";
			$ngonngu[120]="chi tiết";
			$ngonngu[121]="Giá thuê";
			$ngonngu[122]="Chọn năm sản xuất";
			$ngonngu[123]="Chọn màu xe";
			$ngonngu[124]="Lọc kết quả";
			//Trang chủ
			$ngonngu[125]="Điểm đánh giá";
			$ngonngu[126]="Người đăng";
			//lịch sử đăng xe
			$ngonngu[127]="Tin nhắn";
			$ngonngu[128]="Phí ship";
			$ngonngu[129]="Thuê ít nhất";
			$ngonngu[130]="Lần thuê";
			$ngonngu[131]="lần";
			$ngonngu[132]="Hướng dẫn sử dụng";

			$ngonngu[133] = "Nội dung không được để trống";
			$ngonngu[134] = "Bạn chưa đánh giá sao";
			$ngonngu[135] = "Lưu đánh giá thành công";
			$ngonngu[136] = "Lịch sửa cho thuê";
			$ngonngu[137] = "Mật khẩu";
			$ngonngu[138] = "Nhập lại mật khẩu";
			$ngonngu[139] = "Giới tính";
			$ngonngu[140] = "Ngày tháng năm sinh";
			$ngonngu[141] = "SDT";
			$ngonngu[142] = "Ngày đăng ký";
			$ngonngu[143] = "Male";
			$ngonngu[144] = "Female";
			//
			$ngonngu[145] = "Hỗ trợ trực tiếp ";
			$ngonngu[146] = "Ngày hết hạn";
			$ngonngu[147] = "Số thẻ";
			$ngonngu[148] = "Tên trên thẻ";
			$ngonngu[149] = "Số thẻ phải đủ 16 ký tự";
			$ngonngu[150] = "Email không chính xác";
			$ngonngu[151] = "Vui lòng check mail";
			$ngonngu[152] = "Cập nhật giỏ hàng";
			$ngonngu[153] = 'Tin nổi bật';
			$ngonngu[154] = "Tin mới";
			$ngonngu[155] = "Bình luận";
			$ngonngu[156] = "THÔNG TIN LIỆN HỆ";
			$ngonngu[157] = "Nội dung";
			$ngonngu[158] = "Gửi";
			$ngonngu[159] = "Liên hệ với chúng tôi";
			$ngonngu[160] ="Thông số kỹ thuật";
			$ngonngu[161] = "Chủ xe";
			$ngonngu[162] = "Nhận xét";
			$ngonngu[163] = "Dáng xe";
			$ngonngu[164] = "Thêm ngày thuê";
			$ngonngu[165] = "Thực đơn";
			$ngonngu[166] = "thực đơn";
		}
			//end trang quan ly tai khoan
    	return $ngonngu;
    }

    public function sendmail($email =null,$subject = null,$data= null,$view)
    {   
        $message = new YiiMailMessage;
        $message->view =$view;
        $message->subject =$subject;
        $params = array('data'=>$data);
        $message->setBody($params, 'text/html');
        $message->addTo($email);
        $message->from = Yii::app()->params['adminEmail'];
        $kq = Yii::app()->mail->send($message);
       // if ($kq) echo "OK"; 
       // else echo "0 OK"; 

    }
    
	//LÂM COMMON
   public static function YMD($date){
		//$date = str_replace('/', '-', $date);
		return strtotime(date('Y-m-d', strtotime($date)));
	}
	
	public static function lay_string_theo_so_ngay($ngayhientai,$string_ngayhientai,$songay)
	{
		$str=$string_ngayhientai;
		for($i=1;$i<$songay;$i++)
		{
			$get_day=strtotime($ngayhientai." + ".$i." days"); // đổi ngày thành string,
			$next_day= date("d-m-Y",$get_day);  //Lấy dc ngày tiếp theo
			$get_string_day= Common::YMD($next_day);	//Chuyển về thành string
			$str .=",".$get_string_day;
		}
		return $str;
	}
	
	
	public static function excerpt($content,$length){
		$array=explode(" ",$content);
		$text;
		$end_text=" ...";
		
		if($length>=count($array)){
			$length=count($array);
			$end_text="";
		}
		
		for($i=0;$i<=$length;$i++){
			if($i==0){
				$text = $array[$i];
			}
			else if($i==$length){
					$text .= $end_text;	
			}
			else {
				$text .= " ".$array[$i];
			}
		}
		return $text;
    }
	///END LÂM COMMON
}