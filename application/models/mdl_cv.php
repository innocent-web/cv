<?php
class mdl_cv extends MY_Model
{
	protected $details;
	var $_table_user = TABLE_AGENT;

	function __construct ()
	{
		parent::__construct();
	}

	function set_session() {
		$this->session->set_userdata( array(
				'id'=>$this->details->id,
				'nom'=> $this->details->nom . ' ' . $this->details->prenom,
				'im'=>$this->details->im,
				'role'=>$this->details->idrole,
				'isLoggedIn'=>true
			)
		);
	}

	function validate_user( $im, $password ) {
		$this->db->from('user');
		$this->db->where('im',$im );
		$this->db->where( 'password', $password );
		$login = $this->db->get()->result();
		if (is_array($login) && count($login) == 1 ) {
			$this->details = $login[0];
			$this->set_session();
			return true;
		}
		return false;
	}

        public function liste_deroulante_direction( $current = NULL ){
            $zQuery = ' SELECT * FROM ' . TABLE_DIRECTION . ' ' ;
            $zRes = $this->db->query( $zQuery );
            $toDir = $zRes->result();
            $liste = '<select name="direction" id="direction" class="select2_demo_3 form-control" >';
            foreach( $toDir as $k => $val ) {
                $selected = '' ;
                if( $current ==  $val->id ) {
                    $selected = ' selected ';
                }
                $liste .= '<option value = "' . $val->id . '" ' . $selected . ' > ' . $val->abr . '</option>';
            }
            $liste .= '</select>';
            return $liste;
        }

        public function liste_deroulante_service( $current = NULL ){
            $zQuery = ' SELECT * FROM ' . TABLE_SERVICE.' ORDER BY service ASC ' ;
            $zRes = $this->db->query( $zQuery );
            $toSer = $zRes->result();
            $liste = '<select name="service" id="service" class="select2_demo_3 form-control" >';
            foreach( $toSer as $k => $val ) {
                $selected = '' ;
                if( $current ==  $val->id ) {
                    $selected = ' selected ';
                }
                $liste .= '<option value = "' . $val->id . '" ' . $selected . ' data-chained="'.$val->direction_id.'"> ' . $val->service . '</option>';
            }
            $liste .= '</select>';
            return $liste;
        }

        public function liste_deroulante_corps( $current = NULL ){
            $zQuery = ' SELECT * FROM ' . TABLE_CORPS.'  ' ;
            $zRes = $this->db->query( $zQuery );
            $toSer = $zRes->result();
            $liste = '<select name="corps"  class="select2_demo_3 form-control" >';
            foreach( $toSer as $k => $val ) {
                $selected = '' ;
                if( $current ==  $val->id ) {
                    $selected = ' selected ';
                }
                $liste .= '<option value = "' . $val->id . '" ' . $selected . ' > ' . $val->libelle . '</option>';
            }
            $liste .= '</select>';
            return $liste;
        }
        public function liste_deroulante_grade( $current = NULL ){
            $zQuery = ' SELECT * FROM ' . TABLE_GRADE.'  ' ;
            $zRes = $this->db->query( $zQuery );
            $toSer = $zRes->result();
            $liste = '<select name="grade"  class="select2_demo_3 form-control" >';
            foreach( $toSer as $k => $val ) {
                $selected = '' ;
                if( $current ==  $val->id ) {
                    $selected = ' selected ';
                }
                $liste .= '<option value = "' . $val->id . '" ' . $selected . ' > ' . $val->grade . '</option>';
            }
            $liste .= '</select>';
            return $liste;
        }
				public function liste_deroulante_fonction( $current = NULL ){
            $zQuery = ' SELECT * FROM ' . TABLE_FONCTION.' ORDER BY fonction ASC ' ;
            $zRes = $this->db->query( $zQuery );
            $toSer = $zRes->result();
            $liste = '<select name="fonction"  class="select2_demo_3 form-control" >';
            foreach( $toSer as $k => $val ) {
                $selected = '' ;
                if( $current ==  $val->id ) {
                    $selected = ' selected ';
                }
                $liste .= '<option value = "' . $val->id . '" ' . $selected . ' > ' . $val->fonction . '</option>';
            }
            $liste .= '</select>';
            return $liste;
        }

}
