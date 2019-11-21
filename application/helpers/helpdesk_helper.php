<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('create_doc_number')) {

	function create_doc_number($trx_name, $month, $year, $dept_id) {
		$ci =& get_instance();

		/*$year = date('Y');
		$month = date('n');*/

		$ci->db->select('curr_docnumber')
		       ->from($ci->config->item('TABLE_COUNTER_DOCNUMBER'))
			   ->where(array('trx_name' => $trx_name,
				              'trx_month' => $month,
							  'trx_year' => $year,
							  'dept_id' => $dept_id));
		$result = $ci->db->get();
		if ($result->num_rows() > 0) {
			$curr_docnumber = $result->row()->curr_docnumber;
			$ci->db->set('curr_docnumber', 'curr_docnumber + 1', FALSE)
			       ->where(array('trx_name' => $trx_name,
								 'trx_month' => $month,
								 'trx_year' => $year,
								 'dept_id' => $dept_id))
			       ->update($ci->config->item('TABLE_COUNTER_DOCNUMBER'));
		} else {
			$curr_docnumber = 0;
			$data = array(
		        'trx_name' => $trx_name,
		        'trx_month' => $month,
		        'trx_year' => $year,
				'dept_id' => $dept_id,
		        'curr_docnumber' => 1
			);
			$ci->db->insert($ci->config->item('TABLE_COUNTER_DOCNUMBER'), $data);
		}
		return $curr_docnumber;
	}

}
