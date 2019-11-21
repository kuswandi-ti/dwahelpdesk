<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Alloc extends REST_Controller {
	
	private $db2;
    
	/**
     * Get All Data from this method.
     *
     * @return Response
    */
	/* https://stackoverflow.com/questions/45975956/codeigniter-different-methods-with-different-database-connection-multiple-data */
    public function __construct() {
       parent::__construct();
	   $this->db2 = $this->load->database('db_dwasys', TRUE);
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($cpn = '') {
        if(!empty($cpn)){
            $data = $this->db2
			             ->get_where('QTrx_JIT', ['cpn_code' => $cpn])
						 ->result();
						 
        } else {
            $data = $this->db2
			             ->get('QTrx_JIT')
			             ->result();
        }
        $this->response(array('status' => 'success', 'data' => $data), REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    /*public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('items',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    }*/
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    /*public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }*/
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    /*public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }*/
    	
}