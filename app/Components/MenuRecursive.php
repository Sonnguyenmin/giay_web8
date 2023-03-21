<?php
namespace App\Components;
use App\Models\Menu;

class MenuRecursive {
    private $html;
    public function __construct()
    {
        $this->html = '';
    }
    public function menuRecursiveAdd($parent_id = 0 , $subMark = "")
    //tìm cấp lớn nhất và gán các giá trị 1,2,3 : đánh dấu các option lại vs nhau
    {
        $data = Menu::where('parent_id', $parent_id)->get(); //lấy parentId =  0;
        foreach($data as $key => $dataItem)
        {
            $this->html .= "<option value ='". $dataItem->id ."'>" . $subMark . $dataItem->menu_name . "</option>";
            $this->menuRecursiveAdd($dataItem->id, $subMark . "++");
        }
        return $this->html;
    }

    public function menuRecursiveEdit($parentIdMenuEdit, $parent_id = 0 , $subMark = "")
    {
        $data = Menu::where('parent_id', $parent_id)->get(); //lấy parentId =  0;
        foreach($data as $key => $dataItem)
        {
            if($parentIdMenuEdit == $dataItem->id)
            {
                $this->html .= '<option selected value ="'. $dataItem->id .'">' . $subMark . $dataItem->menu_name . '</option>';
            }
            else
            {
                $this->html .= '<option value ="'. $dataItem->id .'">' . $subMark . $dataItem->menu_name . '</option>';
            }
            $this->menuRecursiveEdit($parentIdMenuEdit, $dataItem->id, $subMark . "++");
        }
        return $this->html;
    }
}
    // b1: lấy tất cả menu có parent_id = 0
    // b2 in ra menu với id = 0 $this->html .= "<option value ='". $dataItem->id ."'>" . $subMark . $dataItem->menu_name . "</option>";
    //... chạy lại
?>


