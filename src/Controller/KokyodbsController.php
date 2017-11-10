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

    public function search() {

        $find = [];

        if ($this->request->is('post')) {
           $find = $this->request->data['find'];

	   if($find != ""){
                if(strlen($find) == mb_strlen($find,'utf8')) {
                    //ALL IN ENGLISH
                    $find = mb_convert_encoding($find,'UTF-8','auto');
                    $this->set('kokyodbs',$this->Kokyodbs->find('all')->where(['scientific_name LIKE' => '%'. $find. '%']));
                    $this->set('searched', $find);
    		    $this->set('dbcount',$this->Kokyodbs->find('all')->where(['japanese_name LIKE' =>  '%'. $find. '%'])->count());
                }else{
                    //INCLUDE JAPANESE
                    $find = mb_convert_encoding($find,'UTF-8','auto');
                    $this->set('kokyodbs',$this->Kokyodbs->find('all')->where(['japanese_name LIKE' =>  '%'. $find. '%']));
                    $this->set('searched', $find);
	       	    $this->set('dbcount',$this->Kokyodbs->find('all')->where(['japanese_name LIKE' =>  '%'. $find. '%'])->count());
                }
           } else{
                $this->set('searched', "キーワードを入力してください");
                $this->set('kokyodbs', []);
                $this->set('dbcount', "0");

           }
        } else {
            $this->set('searched', "キーワードを入力してください");
            $this->set('kokyodbs', []);
	    $this->set('dbcount', "0");
        }       
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

    public function group($category = aaa)
    {

        $category = mb_convert_encoding($category,'UTF-8','auto');

        $this->set('kokyodbs',$this->Kokyodbs->find('all')->where(['category' => $category])->distinct('category'));
        $this->set('breadcrumbcategory',$category);
    }


    public function subgroup($subcategory = aaa)
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

		$objPExcel = PHPExcel_IOFactory::load($readFile);
		return $objPExcel->getActiveSheet()->toArray(null,true,true,true);
	}

        $data = readXlsx($readFile);
	$this->set('exceldata',$data);

     }


}


