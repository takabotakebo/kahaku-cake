<?php
namespace App\Controller;
 
use App\Controller\AppController;
use PHPExcel;

class KokyodbsController extends AppController
{

    public function index()
    {
    }

    public function home()
    {
    }

    public function category()
    {
        $this->set('kokyodbs', $this->Kokyodbs->find('all')->select('category')->distinct('category'));
    }

    public function subcategory($category = aaa)
    {

	$category = mb_convert_encoding($category,'UTF-8','auto');

        $this->set('kokyodbs',$this->Kokyodbs->find('all')->where(['category' => $category])->distinct('category'));
	$this->set('breadcrumbcategory',$category);
    }

    public function familiy($subcategory = aaa)
    {

        $subcategory = mb_convert_encoding($subcategory,'UTF-8','auto');

        $this->set('kokyodbs',$this->Kokyodbs->find('all')->where(['subcategory' => $subcategory]));
        $this->set('breadcrumbsubcategory',$subcategory);

	$get_data = $this->Kokyodbs->find('all')->where(['subcategory' => $subcategory]);   
	$first = $get_data->first();
	$this->set('first',$first);

     }

     public function excelinport() 
     {
	$readFile = "data.xlsx";	

	function readXlsx($readFile){
		if (!file_exists($readFile)) {
     			exit($readFile. "が見つかりません。" . EOL);
    		}

		$objPExcel = PHPExcel_IOFactory::load($readFile);
		return $objPExcel->getActiveSheet()->toArray(null,true,true,true);
	}

        $data = readXlsx($readFile);
	$this->set('exceldata',$data);

     }


}


