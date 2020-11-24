<?php
class Page extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
           
        }


public function index()
        {
		
        $data['title'] = 'Free Software and Open Source Foundation for Africa';
        

		$this->load->view('templates/header', $data);
       	$this->load->view('templates/nav');
		
		$this->load->view('index', $data);
        $this->load->view('templates/footer');
        }


        public function user()     {
				

        $this->form_validation->set_rules('first_name','First Name', 'trim|required');
        $this->form_validation->set_rules('last_name','Last Name', 'trim|required');
        $this->form_validation->set_rules('gender','Gender', 'trim|required');
        $this->form_validation->set_rules('user_email','Email', 'trim|required|valid_email|is_unique[user_table.email]');
        $this->form_validation->set_message('is_unique', 'We already have a User with that email address.<br>Please contact FOSSFA system administrators to recover the account if its yours');
        $this->form_validation->set_rules('language','Language', 'trim|required');
        $this->form_validation->set_rules('nationality','Nationality', 'trim|required');
        $this->form_validation->set_rules('birth_date','Birth Date', 'trim');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');


    if($this->form_validation->run() == false){

        $data['title'] = 'Free Software and Open Source Foundation for Africa';
		$this->load->view('templates/header', $data);
       	$this->load->view('templates/nav');
		
		$this->load->view('index', $data);
        $this->load->view('templates/footer');
      }else{

        $email = $this->input->post('user_email');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');


        if($this->Page_Model->check_user_email($email)){ 

             $mailing_list = "Yes";
            }else{

                $mailing_list = "No";
         }


      if($this->Page_Model->check_user($first_name, $last_name)){

            $this->session->set_flashdata('msg', '<div class="alert alert-error text-center">The user '.$first_name. ' '.$last_name.' has already registered </div>');
                redirect(base_url().'page/index');

        }else{
            
          $user_id= rand(0000,9999);
          date_default_timezone_set('Africa/Lagos');
          $date = date("Y-m-d H:i:s");
          $liaison = $this->input->post('liaison');
          $student = $this->input->post('student');
  
 
    $data = array(
        'user_id' => $user_id,
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'gender' => $this->input->post('gender'),
        'user_email' => $this->input->post('user_email'),
        'language' => $this->input->post('language'),
        'nationality' => $this->input->post('nationality'),
        'liaison' => $this->input->post('liaison'),
        'student' => $this->input->post('student'),
        'mailing_list' => $mailing_list,
        'reg_date' => $date,
        'logged_in' => TRUE
        
      );
    if ($this->input->post('middle_name')) $data['middle_name'] = $this->input->post('middle_name');
    if ($this->input->post('birth_date')) $data['birth_date'] = $this->input->post('birth_date');

$this->session->set_userdata($data);


    if($liaison == 'True'){
        redirect(base_url("page/org/".$user_id));
    }else{
        redirect(base_url("page/contact/".$user_id));
    }

        }

    }
 }


 public function org()
        {
        $data['user_id']=$user_id = $this->uri->segment(3);
        if (empty($user_id))
        {
            redirect(base_url("page/error"));
        }
        $data['org']=$this->Page_Model->get_org();

        if($this->input->post('organization')=='Not Listed'){
            redirect(base_url("page/org1/".$user_id));
        }else{

        $this->form_validation->set_rules('organization','Organization Name', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        if($this->form_validation->run() == false){

        $data['title'] = ' Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        
        $this->load->view('org', $data);
        $this->load->view('templates/footer');
         }else{

            $data = array(
                'org_id' => $this->input->post('organization'),
                'liaison_status' => "False",  
             );

        
        $this->session->set_userdata($data);

        if($this->session->userdata('student')=='True'){
            redirect(base_url("page/school/".$user_id));
        }else{
            redirect(base_url("page/interest/".$user_id));
        }

        
         }
        }
    }

    public function org1()
        {
        $data['user_id']=$user_id = $this->uri->segment(3);
        if (empty($user_id))
        {
            redirect(base_url("page/error"));
        }
        $data['org']=$this->Page_Model->get_org_type();


        $this->form_validation->set_rules('org_name','Organization Name', 'trim|required');
        $this->form_validation->set_rules('organization_type','Organization Type', 'trim|required');
        $this->form_validation->set_rules('org_email','Organization Email', 'trim|required|valid_email|is_unique[organization.email]');
        $this->form_validation->set_message('is_unique', 'The %s already exist');
        $this->form_validation->set_rules('org_zip','Zip', 'trim|required');
        $this->form_validation->set_rules('org_city','City', 'trim|required');
        $this->form_validation->set_rules('org_state','State', 'trim|required');
        $this->form_validation->set_rules('org_country','Country', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');

        if($this->form_validation->run() == false){

        $data['title'] = ' Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        
        $this->load->view('org1', $data);
        $this->load->view('templates/footer');

         }else{

            $org_id= rand(0000,9999);

            $data = array(
                'org_id' => $org_id,
                'org_name' => $this->input->post('org_name'),
                'type_id' => $this->input->post('organization_type'),
                
                'org_email' => $this->input->post('org_email'),
                'org_zip' => $this->input->post('org_zip'),
                'org_city' => $this->input->post('org_city'),
                'org_state' => $this->input->post('org_state'),
                'org_country' => $this->input->post('org_country'),
                'liaison_status' => "False",  

             );
        if ($this->input->post('org_website')) $data['org_website'] = $this->input->post('org_website');
         if ($this->input->post('org_area')) $data['org_area'] = $this->input->post('org_area');
          if ($this->input->post('org_phone')) $data['org_phone'] = $this->input->post('org_phone');
         if ($this->input->post('org_lat')) $data['org_lat'] = $this->input->post('org_lat');
        if ($this->input->post('org_long')) $data['org_long'] = $this->input->post('org_long');

       $this->session->set_userdata($data);

          

        if($this->session->userdata('student')=='True'){
            redirect(base_url("page/school/".$user_id));
        }else{
            redirect(base_url("page/interest/".$user_id));
        }
         }
        }


    public function contact()
        {
        $data['user_id']=$user_id = $this->uri->segment(3);
        if (empty($user_id))
        {
            redirect(base_url("page/error"));
        }
        $data['org']=$this->Page_Model->get_org();

        
        
        
        $this->form_validation->set_rules('state','State', 'trim|required');
        $this->form_validation->set_rules('country','Country', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');

        if($this->form_validation->run() == false){

        $data['title'] = ' Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        
        $this->load->view('contact', $data);
        $this->load->view('templates/footer');

         }else{

            $email = $this->input->post('secondary_email');

            if($email == $this->session->userdata('user_email')){

            $this->session->set_flashdata('msg', '<div class="alert alert-error text-center">A user with '.$email. ' has already registered </div>');
                redirect(base_url("page/contact/".$user_id));
            }
       

            $data = array(
                'user_id' => $user_id,
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),

             );
        if ($this->input->post('company_name')) $data['company_name'] = $this->input->post('company_name');
        if ($this->input->post('secondary_email')) $data['secondary_email'] = $this->input->post('secondary_email');
        if ($this->input->post('website')) $data['website'] = $this->input->post('website');
        if ($this->input->post('phone')) $data['phone'] = $this->input->post('phone');
         if ($this->input->post('street')) $data['street'] = $this->input->post('street');
        if ($this->input->post('city_lat')) $data['city_lat'] = $this->input->post('city_lat');
        if ($this->input->post('city_long')) $data['city_long'] = $this->input->post('city_long');
        if ($this->input->post('zip')) $data['zip'] = $this->input->post('zip');
        if ($this->input->post('city')) $data['city'] = $this->input->post('city');
        if ($this->input->post('area')) $data['area'] = $this->input->post('area');
        
        $this->session->set_userdata($data);

        if($this->session->userdata('student')=='True'){
            redirect(base_url("page/school/".$user_id));
        }else{
            redirect(base_url("page/interest/".$user_id));
        }
         }
        }

    public function school()
        {
        $data['user_id']=$user_id = $this->uri->segment(3);
        if (empty($user_id))
        {
            redirect(base_url("page/error"));
        }
        $data['school']=$this->Page_Model->get_school();
        $sch_id = $this->input->post('school_name');

        

        $this->form_validation->set_rules('school_name','School Name', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        if($this->form_validation->run() == false){

        $data['title'] = ' Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        
        $this->load->view('school', $data);
        $this->load->view('templates/footer');
         }else{

            if($this->input->post('school_name')=='Not Listed'){
            redirect(base_url("page/school1/".$user_id));
        }else{

            redirect(base_url("page/school2/".$user_id.'/'.$sch_id));
        }
        
    }
}


    public function school1()
        {
        $data['user_id']=$user_id = $this->uri->segment(3);
        if (empty($user_id))
        {
            redirect(base_url("page/error"));
        }
        

        $this->form_validation->set_rules('sch_name','School Name', 'trim|required');
        $this->form_validation->set_rules('reg_id','Registration ID', 'trim|required|is_unique[student.reg_id]');
        $this->form_validation->set_rules('faculty','Faculty', 'trim|required');
        $this->form_validation->set_rules('department','Department', 'trim|required');
       
        $this->form_validation->set_rules('sch_email','School Email', 'trim|required|valid_email|is_unique[school.email]');
        $this->form_validation->set_message('is_unique', 'We have a student with that %s in the same school.  Contact FOSSFA sysadmins to recover the account if you are the student');
        $this->form_validation->set_rules('sch_street','Street', 'trim|required');
        $this->form_validation->set_rules('sch_zip','Zip', 'trim|required');
        $this->form_validation->set_rules('sch_city','City', 'trim|required');
        $this->form_validation->set_rules('sch_state','State', 'trim|required');
        $this->form_validation->set_rules('sch_country','Country', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');

        if($this->form_validation->run() == false){

        $data['title'] = ' Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        
        $this->load->view('school1', $data);
        $this->load->view('templates/footer');

         }else{

            $sch_id= rand(0000,9999);

            $data = array(
               
                'sch_id' => $sch_id,
                'sch_name' => $this->input->post('sch_name'),
                'reg_id' => $this->input->post('reg_id'),
                'faculty' => $this->input->post('faculty'),
                'department' => $this->input->post('department'),
                
                'sch_email' => $this->input->post('sch_email'),
                'sch_street' => $this->input->post('sch_street'),
                'sch_zip' => $this->input->post('sch_zip'),
                'sch_city' => $this->input->post('sch_city'),
                'sch_state' => $this->input->post('sch_state'),
                'sch_country' => $this->input->post('sch_country'),
                'sch_status' => "False",  

             );
        if ($this->input->post('sch_website')) $data['sch_website'] = $this->input->post('sch_website');
        if ($this->input->post('sch_phone')) $data['sch_phone'] = $this->input->post('sch_phone');
        if ($this->input->post('sch_pmb')) $data['sch_pmb'] = $this->input->post('sch_pmb');
        if ($this->input->post('sch_area')) $data['sch_area'] = $this->input->post('sch_area');
        if ($this->input->post('sch_lat')) $data['sch_lat'] = $this->input->post('sch_lat');
        if ($this->input->post('sch_long')) $data['sch_long'] = $this->input->post('sch_long');

        $this->session->set_userdata($data);

         

        redirect(base_url("page/interest/".$user_id));
         }
        }


        public function school2($sch_id)
        {
        $data['user_id']=$user_id = $this->uri->segment(3);
        if (empty($user_id))
        {
            redirect(base_url("page/error"));
        }
         $data['sch_id']= $sch_id = $this->uri->segment(4);
        $data['school']=$this->Page_Model->get_school_by_id($sch_id);
       
        $this->form_validation->set_rules('reg_id','Registeration ID', 'trim|required|is_unique[student.reg_id]');
        $this->form_validation->set_message('is_unique', 'The %s already exist');
        $this->form_validation->set_rules('faculty','Faculty', 'trim|required');
        $this->form_validation->set_rules('department','Department', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
       
        

        if($this->form_validation->run() == false){
        $data['school']=$this->Page_Model->get_school_by_id($sch_id);
        $data['title'] = ' Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('school2', $data);
        $this->load->view('templates/footer');

         }else{

           

            $data = array(
               
                'sch_id' => $this->input->post('sch_id'),
                'reg_id' => $this->input->post('reg_id'),
                'faculty' => $this->input->post('faculty'),
                'department' => $this->input->post('department'),

                'sch_status' => "False",  

             );
  

        $this->session->set_userdata($data);

         

        redirect(base_url("page/interest/".$user_id));
         }
        }
	
    public function interest()
        {
        $data['user_id']=$user_id = $this->uri->segment(3);
        if (empty($user_id))
        {
            show_404();
        }
        $data['org']=$this->Page_Model->get_org();

        
        
       $this->form_validation->set_rules('policy', 'policy', 'trim');
       $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        

        if($this->form_validation->run() == false){

        $data['title'] = ' Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        
        $this->load->view('interest', $data);
        $this->load->view('templates/footer');

         }else{

            
          

        if ($this->input->post('policy')) $data['policy'] = $this->input->post('policy');
        if ($this->input->post('education')) $data['education'] = $this->input->post('education');
        if ($this->input->post('research')) $data['research'] = $this->input->post('research');
        if ($this->input->post('software_development')) $data['software_development'] = $this->input->post('software_development');
        if ($this->input->post('business')) $data['business'] = $this->input->post('business');
        if ($this->input->post('networking')) $data['networking'] = $this->input->post('networking');
        if ($this->input->post('sysadmin')) $data['sysadmin'] = $this->input->post('sysadmin');
        if ($this->input->post('training')) $data['training'] = $this->input->post('training');
        
        $this->session->set_userdata($data);

        redirect(base_url("page/affliate/".$user_id));
         }
        }

    public function affliate() {
        $data['user_id']=$user_id = $this->uri->segment(3);

        if (empty($user_id))
        {
            redirect(base_url("page/error"));
        }

        $data['affliate']=$this->Page_Model->get_affliate();

      
        $this->form_validation->set_rules('affliate[]','Affliate', 'trim');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        if($this->form_validation->run() == false){

        $data['title'] = ' Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        
        $this->load->view('affliate', $data);
        $this->load->view('templates/footer');
         }else{
            
            $affliate = $this->input->post('affliate');

            if ($this->input->post('affliate')!=''){

             $data_affliate=array(
                'user_id' => $user_id,
                'affliate'=>json_encode(implode(",", $affliate)),
                'fossorg_id'=>json_encode(implode(",", $affliate)),
                );
         }else{

            $data_affliate=array(
                'user_id' => $user_id,
                );

        }
            $this->Page_Model->insert_affliate($data_affliate,$user_id);
        

            $data_user = array(
                'user_id' => $this->session->userdata('user_id'),
                'first_name' => $this->session->userdata('first_name'),
                'last_name' => $this->session->userdata('last_name'),
                'gender' => $this->session->userdata('gender'),
                'email' => $this->session->userdata('user_email'),
                'language' => $this->session->userdata('language'),
                'nationality' => $this->session->userdata('nationality'),
                'liaison' => $this->session->userdata('liaison'),
                'mailing_list' => $this->session->userdata('mailing_list'),
                'student' => $this->session->userdata('student'),
                'reg_date' => $this->session->userdata('reg_date'),
                
              );
if ($this->session->userdata('middle_name')) $data_user['middle_name'] = $this->session->userdata('middle_name');
if ($this->session->userdata('birth_date')) $data_user['birth_date'] = $this->session->userdata('birth_date');

        $this->Page_Model->insert_user($data_user,$user_id);
     
if ($this->session->userdata('org_name')!=''){
        $data_org = array(
                'org_id' => $this->session->userdata('org_id'),
                'org_name' => $this->session->userdata('org_name'),
                'type_id' => $this->session->userdata('type_id'),
               
                'email' => $this->session->userdata('org_email'),
                'zip' => $this->session->userdata('org_zip'),
                'city' => $this->session->userdata('org_city'),
                'state' => $this->session->userdata('org_state'),
                'country' => $this->session->userdata('org_country'),
             );
if ($this->session->userdata('org_website')) $data_org['website'] = $this->session->userdata('org_website');
if ($this->session->userdata('org_phone')) $data_org['phone'] = $this->session->userdata('org_phone');
if ($this->session->userdata('org_area')) $data_org['area'] = $this->session->userdata('org_area');
if ($this->session->userdata('org_lat')) $data_org['org_lat'] = $this->session->userdata('org_lat');
if ($this->session->userdata('org_long')) $data_org['org_long'] = $this->session->userdata('org_long');

    

         $this->Page_Model->insert_org($data_org);
     }

  
if ($this->session->userdata('liaison')!='False'){
        $data_liaison = array(
                'user_id' => $this->session->userdata('user_id'),
                'org_id' => $this->session->userdata('org_id'),
                'liaison_status' => "False",
             );

       $this->Page_Model->insert_liaison($data_liaison,$user_id);
       
}
       
if ($this->session->userdata('country')!=''){
    $data_contact = array(
                'user_id' => $this->session->userdata('user_id'),
                'state' => $this->session->userdata('state'),
                'country' => $this->session->userdata('country'),

             );

if ($this->session->userdata('company_name')) $data_contact['company_name'] = $this->session->userdata('company_name');
if ($this->session->userdata('secondary_email')) $data_contact['secondary_email'] = $this->session->userdata('secondary_email');
if ($this->session->userdata('website')) $data_contact['website'] = $this->session->userdata('website');
if ($this->session->userdata('phone')) $data_contact['phone'] = $this->session->userdata('phone');
if ($this->session->userdata('street')) $data_contact['street'] = $this->session->userdata('street');
if ($this->session->userdata('city_lat')) $data_contact['city_lat'] = $this->session->userdata('city_lat');
if ($this->session->userdata('city_long')) $data_contact['city_long'] = $this->session->userdata('city_long');
if ($this->session->userdata('zip')) $data_contact['zip'] = $this->session->userdata('zip');
if ($this->session->userdata('city')) $data_contact['city'] = $this->session->userdata('city');
if ($this->session->userdata('area')) $data_contact['area'] = $this->session->userdata('area');

    
        $this->Page_Model->insert_contact($data_contact,$user_id);
        }

if ($this->session->userdata('reg_id')!=''){
    $data_student = array(
                'user_id' => $this->session->userdata('user_id'),
                'school_id' => $this->session->userdata('sch_id'),
                 'reg_id' => $this->session->userdata('reg_id'),
                'faculty' => $this->session->userdata('faculty'),
                'department' => $this->session->userdata('department'),
                'status' => "False",
             );

        
        $this->Page_Model->insert_student($data_student,$user_id);
    }



if ($this->session->userdata('sch_name')!=''){
    $data_school = array(
               
                'sch_id' => $this->session->userdata('sch_id'),
                'sch_name' => $this->session->userdata('sch_name'),                
                'email' => $this->session->userdata('sch_email'),
                'street' => $this->session->userdata('sch_street'),
                'zip' => $this->session->userdata('sch_zip'),
                'city' => $this->session->userdata('sch_city'),
                'state' => $this->session->userdata('sch_state'),
                'country' => $this->session->userdata('sch_country'),
               

             );
        if ($this->session->userdata('sch_website')) $data_school['website'] = $this->session->userdata('sch_website');
        if ($this->session->userdata('sch_pmb')) $data_school['pmb'] = $this->session->userdata('sch_pmb');
        if ($this->session->userdata('sch_phone')) $data_school['phone'] = $this->session->userdata('sch_phone');
        if ($this->session->userdata('sch_area')) $data_school['sch_area'] = $this->session->userdata('sch_area');
        if ($this->session->userdata('sch_lat')) $data_school['sch_lat'] = $this->session->userdata('sch_lat');
        if ($this->session->userdata('sch_long')) $data_school['sch_long'] = $this->session->userdata('sch_long');


        $this->Page_Model->insert_school($data_school);
    }

        $data_interest = array(
                'user_id' => $this->session->userdata('user_id'),
            );

        if ($this->session->userdata('policy')) $data_interest['policy'] = $this->session->userdata('policy');
        if ($this->session->userdata('education')) $data_interest['education'] = $this->session->userdata('education');
        if ($this->session->userdata('research')) $data_interest['research'] = $this->session->userdata('research');
        if ($this->session->userdata('software_development')) $data_interest['software_development'] = $this->session->userdata('software_development');
        if ($this->session->userdata('business')) $data_interest['business'] = $this->session->userdata('business');
        if ($this->session->userdata('networking')) $data_interest['networking'] = $this->session->userdata('networking');
        if ($this->session->userdata('sysadmin')) $data_interest['sysadmin'] = $this->session->userdata('sysadmin');
        if ($this->session->userdata('training')) $data_interest['training'] = $this->session->userdata('training');


        
        $this->Page_Model->insert_interest($data_interest,$user_id);

        redirect(base_url("page/success/".$user_id));
         }
        
    }


	 public function social()
        {
        $data['user_id']=$user_id = $this->uri->segment(3);
        if (empty($user_id))
        {
            redirect(base_url("page/error"));
        }
        $data['org']=$this->Page_Model->get_org();

        
        
        $this->form_validation->set_rules('phone','Organization Phone', 'trim|required');
        $this->form_validation->set_rules('email','Organization Email', 'trim|required');
        $this->form_validation->set_rules('state','State', 'trim|required');
        $this->form_validation->set_rules('country','Country', 'trim|required');

        if($this->form_validation->run() == false){

        $data['title'] = ' Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        
        $this->load->view('social', $data);
        $this->load->view('templates/footer');

         }else{

            

            $data = array(
                'user_id' => $user_id,
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),

             );
        if ($this->input->post('company_name')) $data['company_name'] = $this->input->post('company_name');
        if ($this->input->post('website')) $data['website'] = $this->input->post('website');
        if ($this->input->post('street')) $data['street'] = $this->input->post('street');
        if ($this->input->post('zip')) $data['zip'] = $this->input->post('zip');
        if ($this->input->post('city')) $data['city'] = $this->input->post('city');
        
        $this->Page_Model->insert_contact($social_data,$user_id);

        redirect(base_url("page/social/".$user_id));
         }
        }


        public function success()
        {
        
        $this->session->sess_destroy();
        $data['title'] = 'Free Software and Open Source Foundation for Africa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        
        $this->load->view('success', $data);
        $this->load->view('templates/footer');
        }


		
		public function error()
        {
			
        $data['title'] = 'Free Software and Open Source Foundation for Africa';
		$this->load->view('templates/header', $data);
       	$this->load->view('templates/nav');
		
		$this->load->view('404', $data);
        $this->load->view('templates/footer');
        }
		
		
		
      
}   