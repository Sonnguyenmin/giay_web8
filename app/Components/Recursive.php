<?php
namespace App\Components;

class Recursive {

    private $data;
    private $htmlSelect = "";

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function categoryRecusive($paretnId ,$id = 0, $text = "")
    {
        foreach ($this->data as $value) {
            if($value['parent'] == $id){
                if(!empty($paretnId ) && $paretnId == $value['id'])
                {
                    $this->htmlSelect .= "<option selected value='".$value['id']. "'>" . $text . $value['cate_name'] . "</option>";
                }
                else{
                    $this->htmlSelect .= "<option value='".$value['id']. "'>" . $text . $value['cate_name'] . "</option>";
                }
                $this->categoryRecusive($paretnId ,$value['id'] , $text. '**');
            }
        }
        return $this->htmlSelect;
    }
}
?>
