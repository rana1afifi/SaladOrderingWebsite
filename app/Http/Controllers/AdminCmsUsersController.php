<?php namespace App\Http\Controllers;

use Session;
use Request;
use DB;
use CRUDbooster;

class AdminCmsUsersController extends \crocodicstudio\crudbooster\controllers\CBController {


	public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "name";
			$this->limit = "";
			$this->orderby = "";
			$this->global_privilege = false;
			$this->button_table_action = false;
			$this->button_bulk_action = false;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = false;
			$this->button_detail = false;
			$this->button_show = true;
			$this->button_filter = false;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "cms_users";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Name","name"=>"name"];
			$this->col[] = ["label"=>"Email","name"=>"email"];
			$this->col[] = ["label"=>"Privilege","name"=>"id_cms_privileges","join"=>"cms_privileges,name"];
			$this->col[] = ["label"=>"Photo","name"=>"photo","image"=>true];
			$this->col[] = ["label"=>"Id","name"=>"id"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Name','name'=>'name','type'=>'text','validation'=>'required|alpha_spaces|min:3','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Email','name'=>'email','type'=>'email','validation'=>'required|email|unique:cms_users,email,4','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Photo','name'=>'photo','type'=>'upload','validation'=>'required|image|max:1000','width'=>'col-sm-10','help'=>'Recommended resolution is 200x200px'];
			$this->form[] = ['label'=>'Privilege','name'=>'id_cms_privileges','type'=>'select','width'=>'col-sm-10','datatable'=>'cms_privileges,name'];
			$this->form[] = ['label'=>'Password','name'=>'password','type'=>'password','width'=>'col-sm-10','help'=>'Please leave empty if not change'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Name','name'=>'name','type'=>'text','validation'=>'required|alpha_spaces|min:3','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Email','name'=>'email','type'=>'email','validation'=>'required|email|unique:cms_users,email,4','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Photo','name'=>'photo','type'=>'upload','validation'=>'required|image|max:1000','width'=>'col-sm-10','help'=>'Recommended resolution is 200x200px'];
			//$this->form[] = ['label'=>'Privilege','name'=>'id_cms_privileges','type'=>'select','width'=>'col-sm-10','datatable'=>'cms_privileges,name'];
			//$this->form[] = ['label'=>'Password','name'=>'password','type'=>'password','width'=>'col-sm-10','help'=>'Please leave empty if not change'];
			//$this->form[] = ['label'=>'Id','name'=>'id','validation'=>'integer','width'=>'col-sm-9'];
			# OLD END FORM

			}

	public function getProfile() {			

		$this->button_addmore = FALSE;
		$this->button_cancel  = FALSE;
		$this->button_show    = FALSE;			
		$this->button_add     = FALSE;
		$this->button_delete  = FALSE;	
		$this->hide_form 	  = ['id_cms_privileges'];

		$data['page_title'] = trans("crudbooster.label_button_profile");
		$data['row']        = CRUDBooster::first('cms_users',CRUDBooster::myId());

		$this->cbView('crudbooster::default.form',$data);				
	}
}