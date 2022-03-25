<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Models extends CI_Model {
        
        
        public function __construct() {
            parent::__construct();
        }
        
        /**
        *@description  Recuperer toutes les lignes et colonnes de la table
        *@param  $_zTable nom de la table
        *@return  objet
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_all($_zTable, $_iLimit = null, $_iOffset = null) {
            $zQuery = $this->db->get($_zTable, $_iLimit, $_iOffset);
            return $zQuery->result();
        }
        
        public function get_all_advanced($_zTable, $_zWhere = '', $_zOrder = ' nom ASC ', $_iLimit = null, $_iOffset = null) {
            if($_zWhere !='') {
                $_zWhere = 'WHERE ' . $_zWhere . ' ' ;
            }
            $_zLimit = '' ;
            if($_iLimit != null) {
                $_zLimit = ' LIMIT  ' . $_iLimit  . '  OFFSET ' . $_iOffset . '';
            }
            $zQuery = 'SELECT * FROM ' . $_zTable . ' ' . $_zWhere . ' ORDER BY ' . $_zOrder. '  ' ;
            $zRes = $this->db->query($zQuery) ;
            return $zRes->result();
        }
        
        /**
        *@description  Recuperer une lignes de la table par son identifiant'
        *@param  $_iId Identifiant de la table
        *@return  objet
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_id($_zTable, $_iId) {
            $query = $this->db->query('SELECT * FROM '.$_zTable.' WHERE id = '.$_iId.'');
            $row = $query->row();
            return $row ;
        }

        /**
        *@description  Recuperer les lignes de la table par son identifiant'
        *@param  $_iId Identifiant de la table
        *@param  $_iOffset offset de selection
        *@param  $_zLimit limite de selection
        *@return  objet
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_where_id($_zTable, $_iId, $_zLimit = '', $_iOffset = '') {
            $zQuery = $this->db->get_where($_zTable, array('id' => $_iId), $_zLimit, $_iOffset);
            return $zQuery->result();
        }
        
        /**
        *@description  Recuperer les lignes de la table par de condition'
        *@return  objet
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_by_where($_zTable, $_tzWhere = array()) {
            $this->db->where($_tzWhere);
            $query = $this->db->get($_zTable);
            return $query->result();
        }
        
        /**
        *@description  Recuperer une ligne de la table par de condition'
        *@return  objet
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_row($_zTable, $_tzWhere = array()) {
            $this->db->where($_tzWhere);
            $query = $this->db->get($_zTable);
            return $query->row();
        }
        
        /**
        *@description  Recuperer les lignes de la table par de condition'
        *@param  $_iId Identifiant de la table
        *@param  $_iOffset offset de selection
        *@param  $_zLimit limite de selection
        *@return  objet
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_where_advanced($_zTable, $_zWhere = '', $_zLimit = '', $_zOffset = '') {    
            if( $_zWhere != '') {
                $_zWhere = ' WHERE ' . $_zWhere. ' ' ;
            }
            $query = $this->db->query('SELECT * FROM '.$_zTable.'   '.$_zWhere.'  ' .$_zLimit. ' ' .$_zOffset. ' ');
            return $query->result(); 
        }
        
        /**
        *@description  Recuperer les lignes de la table en selectionnant quelque colonnes'
        *@param   $_tzColonne tableau de colonne 
        *@return  objet
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_select($_zTable, $_tzColonne = array()) {
           $zChnCols = implode(',', $_zColonne);
           $this->db->select($zChnCols);
           $query = $this->db->get($_zTable);
           return $query->result(); 
        }
        
        /**
        *@description  Recuperer la valeur maximal du colonnes
        *@param   $_zCol nom du colonne 
        *@return  integer
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_max($_zTable, $_zCol) {
            $this->db->select_max($_zCol);
            $query = $this->db->get($_zTable);
            return $query->row($_zCol); 
        }
        
        /**
        *@description  Recuperer la valeur minimal du colonne
        *@param   $_zCol nom du colonne 
        *@return  integer
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_min($_zTable, $_zCol) {
            $this->db->select_min($_zCol);
            $query = $this->db->get($_zTable);
            return $query->row($_zCol);
        }
        
        /**
        *@description  Recuperer la moyenne du colonne
        *@param   $_zCol nom du colonne 
        *@return  integer
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function get_avg($_zTable, $_zCol) {
            $this->db->select_avg($_zCol);
            $query = $this->db->get($_zTable);
            return $query->row($_zCol);
        }
        
        /**
        *@description  Compte le nombre d'enregistrement
        *@param   $_zWhere  condition
        *@return  integer
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public  function count_row($_zTable, $_zWhere = NULL) {
            $zWhere = '' ;
            if($_zWhere != '') {
                $zWhere = ' WHERE ' .$_zWhere. ' ';
            }
            $zQ = 'SELECT COUNT(*) AS NB FROM '.$_zTable.' '.$zWhere.' ';
            $row = $this->db->query($zQ)->row();
            return (int)$row->nb;
        }
        
        /**
        *@description  Insertion des données
        *@param   $_tzData tableau des valeurs à insérer
        *@return  boolean
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function insert($_zTable = '',$_tzData = array()) {
            if($this->db->insert($_zTable, $_tzData)) {
                return $this->db->insert_id();    
            }
            return false;
        }
        
        /**
        *@description  Mise à jour des données
        *@param   $_tzData tableau des valeurs à insérer
        *@param   $_tzWhere tableau des conditions
        *@return  boolean
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function update($_zTable = "",$_tzData=array(),$_tzWhere=array()){
            $this->db->where($_tzWhere);
            if($this->db->update($_zTable, $_tzData)) {
                return true ;    
            }
            return false ;
        }
        
        /**
        *@description  Suppression des données par l'identifiant
        *@param   $_iId identifiant de la table
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function delete_id($_zTable, $_iId) {
            $_tWhere = array('id' => $_iId);
            $this->db->where($_tWhere);
            $this->db->delete($_zTable);
            return true ;
        }
        
        /**
        *@description  Suppression des données par des conditions
        *@param   $_zWhere tableau de condition
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function delete_by_where($_zTable, $_zWhere) {
            $this->db->where($_zWhere);
            $this->db->delete($_zTable);
        }
        
        /**
        *@description  Suppression des données 
        *@param   $_zWhere tableau de condition
        *@author  Dev X
        *@edition 2014-06-05  
        */
        public function delete_in($sTable, $sCol, $_tzWhere) {
            try {
                $this
                    ->db
                    ->where_in($sCol, $_tzWhere)
                    ->delete($sTable);
            } catch (Exception $e) {
                return FALSE;
            }
        }
        
        /**
        *@description  Get next id value table
        *@author  Dev X
        *@edition 2014-08-06
        */
        public function get_next_id_value( $table ) {
            $zQuery = ' SELECT MAX(id) as  max FROM ' . $table .' ';
            $toRes = $this->db->query( $zQuery )->row() ;
            $v =  $toRes->max ;
            return ( $v + 1 ) ;        
        }
        
        /** ************************** LISTE DEROULANTE UTILES*******************************************/
        
        /**
        *@description  Liste deroulante categorie
        *@author  Dev X
        *@edition 2014-08-06
        */
        public function liste_deroulante_categorie( $current = NULL ){
            $zQuery = ' SELECT * FROM ' . TABLE_CATEGEORIE . ' ' ;
            $zRes = $this->db->query( $zQuery );
            $toCat = $zRes->result();
            $liste = '<select name="categorie" class="txt_notif disabled" style="width : 160px">';
            foreach( $toCat as $k => $val ) {
                $selected = '' ;
                if( $current ==  $val->id ) {
                    $selected = ' selected ';
                }
                
                $liste .= '<option value = "' . $val->id . '" ' . $selected . ' > ' . $val->name . '</option>';    
            }
            
            $liste .= '</select>';
            
            return $liste;
        }
        
        /**
        *@description  Liste deroulante categorie
        *@author  Dev X
        *@edition 2014-08-06
        */
        public function liste_deroulante_categorie_inscr( $current = NULL ){
            $zQuery = ' SELECT * FROM ' . TABLE_CATEGEORIE . ' ' ;
            $zRes = $this->db->query( $zQuery );
            $toCat = $zRes->result();
            $liste = '<select name="categorie" class="selectPerso">';
            foreach( $toCat as $k => $val ) {
                $selected = '' ;
                if( $current ==  $val->id ) {
                    $selected = ' selected ';
                }
                
                $liste .= '<option value = "' . $val->id . '" ' . $selected . ' > ' . $val->name . '</option>';    
            }
            
            $liste .= '</select>';
            
            return $liste;
        }
        
        /**
        *@description  Liste deroulante Level
        *@author  Dev X
        *@edition 2014-08-06
        */
        public function liste_deroulante_level( $current = NULL ){
            $zQuery = ' SELECT * FROM ' . TABLE_LEVEL . ' ' ;
            $zRes = $this->db->query( $zQuery );
            $toCat = $zRes->result();
            $liste = '<select name="level" class="txt_notif disabled" style="width : 160px">';
            foreach( $toCat as $k => $val ) {
                $selected = '' ;
                if( $current ==  $val->id ) {
                    $selected = ' selected ';
                }
                
                $liste .= '<option value = "' . $val->id . '" ' . $selected . ' > ' . $val->name . '</option>';    
            }
            
            $liste .= '</select>';
            
            return $liste;
        }
        
        /**
        *@description  Liste deroulante Level
        *@author  Dev X
        *@edition 2014-08-06
        */
        public function liste_deroulante_level_inscr( $current = NULL ){
            $zQuery = ' SELECT * FROM ' . TABLE_LEVEL . ' ' ;
            $zRes = $this->db->query( $zQuery );
            $toCat = $zRes->result();
            $liste = '<select name="level" class="selectPerso">';
            foreach( $toCat as $k => $val ) {
                $selected = '' ;
                if( $current ==  $val->id ) {
                    $selected = ' selected ';
                }
                
                $liste .= '<option value = "' . $val->id . '" ' . $selected . ' > ' . $val->name . '</option>';    
            }
            
            $liste .= '</select>';
            
            return $liste;
        }
        
        /**
        *@description  Liste deroulante day
        *@author  Dev X
        *@edition 2014-08-06
        */
        public function liste_deroulante_day($name = 'day') {
            $liste = '<select class="selectPerso" name="'.$name.'" id="'.$name.'">';
            for($i = 1; $i<=31; $i++) {
                $liste .= '<option value="'.$i.'">' . $i . '</option>';    
            }
            $liste .= '</select>';
            
            return $liste;
        }
        
        /**
        *@description  Liste deroulante year
        *@author  Dev X
        *@edition 2014-08-06
        */
        public function liste_deroulante_year($name = 'year') {
            $tabYear = year();
            $liste = '<select class="selectPerso" name="'.$name.'" >';
            
            foreach($tabYear as $k => $year ) {
                $liste .= '<option value="'.$k.'">' . $year . '</option>';    
            }
            $liste .= '</select>';
            
            return $liste;
        }
        
        /**
        *@description  Liste deroulante month
        *@author  Dev X
        *@edition 2014-08-06
        */
        public function liste_deroulante_month($name = 'month') {
            $tabMonth = month();
            $liste = '<select class="selectPerso" name="'.$name.'">';
            
            foreach($tabMonth as $k => $month ) {
                $liste .= '<option value="'.$k.'">' . $month . '</option>';    
            }
            $liste .= '</select>';
            
            return $liste;
        }
    }

?>