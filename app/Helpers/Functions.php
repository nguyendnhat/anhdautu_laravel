<?php  
function cate($data,$parent="0",$text="",$select='0'){
	$result='';
		foreach($data as $val){
			if($val->parent_id==$parent){
				$id=$val->id;
				if($select!="0" && $select==$id){
					$result.= "<option value='".$id."' selected>".$text.$val->title."</option>";
				}else{
					$result.= "<option value='".$id."'>".$text.$val->title."</option>";
				}
				$result.=cate($data,$id,$text."---",$select);
			}
		}
	return $result;
}
function cate_list($data,$parent="0",$text=""){
	$result="";
	foreach($data as $val){
		if($val->parent_id==$parent){
			$result.= "<tr>";
			$result.= '<td width="170px" style="text-align:left;">'.$text.$val->title.'</td>';
			$result.= '<td align="center">'.$val->order.'</td>';
			$result.= '<td class="option">
							 <a href="admin/page/'.$val->id.'/edit" title="Chỉnh sửa" class="tipS ">
							<i class="fa fa-edit"></i>
							</a>
						</td>';
			$result.='<td>
				<form action="admin/page/'.$val->id.'" method="post">'.csrf_field().
                  method_field("DELETE").'
                  <input type="submit" value="Xóa" class="btn-xs btn-danger xoa">
                  </form>
			</td>';
			$result.= "</tr>";
			$result.=cate_list($data,$val->id,$text."____&nbsp;");
		}
	}
	return $result;
}

function breadcumbs2($item){
	$result='<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
			<a href="" class="crumb" rel="up" itemprop="url"><span itemprop="title">Trang chủ</span></a>
		</li>';
	if($item->parent){
		$result.= '<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="'.$item->parent->alias.'.html" class="crumb" rel="up" itemprop="url"><span itemprop="title">'.$item->parent->title.'</span></a>
                        </li>';
	}
	$result.= '<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="'.$item->alias.'.html" class="crumb" rel="up" itemprop="url"><span itemprop="title">'.$item->title.'</span></a>
                        </li>';
	return $result;

}

//lay tat ca id cua danh muc cha-con
function getId($item){
	$result[]=$item->id;
	if($item->children){
		foreach($item->children as $item2){		
			$result[]=$item2->id;
			if($item2->children){
				foreach($item2->children as $item3){		
					$result[]=$item3->id;
				}
	}
		}
	}

	return $result;
}
function rutgon($tin1,$num){
	if(mb_strlen($tin1)>$num){
		$result=substr($tin1, 0, stripos($tin1,' ',$num)).'...';
	}else{
		$result=$tin1;
	}
	return $result;
}

?>	
