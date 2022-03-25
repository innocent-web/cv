<?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    
    function print_tab($tab) {
        echo'<pre>';
        print_r($tab);
        echo'</pre>';
    }
    
    
    function print_d($tab) {
        echo'<pre>';
        print_r($tab);
        echo'</pre>';
        die();
    }
    
    function d($string) {
        die($string);
    }
    
    function generer_nom_fichier() {
        $characts    = 'abcdefghijklmnopqrstuvwxyz';
    	$characts   .= '1234567890'; 
    	$code_aleatoire      = ''; 
    
    	for($i=0;$i <=15;$i++)    //10 est le nombre de caractères
    	{ 
            $code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); 
    	}
        
        return $code_aleatoire ;
    }
    
    function url_format() {
        $characts    = 'abcdefghijklmnopqrstuvwxyz';
    	$characts   .= '1234567890'; 
    	$code_aleatoire      = ''; 
    
    	for($i=0;$i <=15;$i++)    //10 est le nombre de caractères
    	{ 
            $code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); 
    	}
        
        return $code_aleatoire;
    }
    
    function id_user_by_url_format( $code_aleatoire ) {
        $id_user = substr( $code_aleatoire, 0, -16 );
    
        return $id_user;
    }
    
    
    
    function file_extension( $file ) {
        list($name, $ext) = explode('.', $file) ;
        
        return strtolower( $ext ) ;
    }
    
    
    function est_tab($tab) {
        if (isset($tab) && (is_array($tab) || is_object($tab) ) && sizeof($tab) > 0) {
            return true;
        }
        return false;
    }
        
    function is_tab($tab) {
        return est_tab($tab);
    }
        
    function object_to_chaine_virg( $tab ) {
        $chaine = '' ;
        $tabIds = array() ;
        foreach($tab as $key => $val) {
            $tabIds[] = $tab[$key]->id ;        
        }
            
        $chaine = tab_to_chaine_virg($tabIds) ;
        return $chaine;
    }
    
    function tab_to_chaine_virg($tab) {
        $chaine=implode(',',$tab);
        return $chaine;
    }
    
    function optimise_tab( $tab ) {
        $zTab = array() ;
        foreach( $tab as $value ) {
            if( (int) $value > 0 ) {
                $zTab[] = $value ;     
            }   
        }
        
        return $zTab ;
    }
    
    function convertDateFrEng($dateFr = ''){
        if($dateFr !='') {
            list($jour,$mois,$annee) = explode("/", $dateFr);
        	$dateEng = $annee.'-'.$mois.'-'.$jour;
            return $dateEng;    
        }
        return false;
    }
    
    function get_nbre_jour_by_dates($datedeb, $datefin) {
        //$datedeb = convertDateFrEng($datedeb) ;
        //$datefin = convertDateFrEng($datefin) ;
        $nb_jours=0;
        $dated=explode('-',$datedeb);
        $datef=explode('-',$datefin);
        $timestampcurr=mktime(0,0,0,$dated[1],$dated[2],$dated[0]);
        $timestampf=mktime(0,0,0,$datef[1],$datef[2],$datef[0]);
        while($timestampcurr<$timestampf){
            if((date('w',$timestampcurr)!= 0)){
            $nb_jours++;
        }
            $timestampcurr=mktime(0,0,0,date('m',$timestampcurr),(date('d',$timestampcurr)+1)   ,date('Y',$timestampcurr));
        }
        return $nb_jours;
    }
    
    function get_dates_between($dStart, $dEnd) {
        $iStart = strtotime ($dStart);
        $iEnd = strtotime ($dEnd);
        if (false === $iStart || false === $iEnd) {
            return false;
        }
        $aStart = explode ('-', $dStart);
        $aEnd = explode ('-', $dEnd);
        if (count ($aStart) !== 3 || count ($aEnd) !== 3) {
            return false;
        }
        if (false === checkdate ($aStart[1], $aStart[2], $aStart[0]) || false === checkdate ($aEnd[1], $aEnd[2], $aEnd[0]) || $iEnd <= $iStart) {
            return false;
        }
        for ($i = $iStart; $i < $iEnd + 86400; $i = strtotime ('+1 day', $i)) {
            $sDateToArr = strftime ('%Y-%m-%d', $i);
            $sYear = substr ($sDateToArr, 0, 4);
            $sMonth = substr ($sDateToArr, 5, 2);
            $aDates[$sYear][$sMonth][] = $sDateToArr;
        }
        if (isset ($aDates) && !empty ($aDates)) {
            return $aDates;
        } else {
            return false;
        }
    }
    
    
    
    //**Helper pour les URLs*/
    function site_uri($uri = '')
    {		
    	if( ! is_array($uri))
    	{
    		//	Tous les paramètres sont insérés dans un tableau
    		$uri = func_get_args();
    	}
    	
    	//	On ne modifie rien ici
    	$CI =& get_instance();	
    	return $CI->config->site_url($uri);
    }
    
    if ( ! function_exists('css_url'))
    {
    	function css_url($nom)
    	{
    		return base_url() . 'assets/css/' . $nom . '.css';
    	}
    }
    
    if ( ! function_exists('js_url'))
    {
    	function js_url($nom)
    	{
    		return base_url() . 'assets/js/' . $nom . '.js';
    	}
    }
    
    if ( ! function_exists('img_url'))
    {
    	function img_url($nom)
    	{
    		return base_url() . 'assets/images/' . $nom;
    	}
    }
    
    function img_dossier_url( $nom ){
  		return base_url() . 'assets/ressources/dossiers/' . $nom;
   	}
    
    function img_dossier_user( $nom ){
  		return base_url() . 'assets/ressources/users/' . $nom;
   	}
    
    
    function photo_user_url( $id_user, $nom ){
  		return base_url() . 'assets/ressources/users/' . $id_user .'/photo/'.$nom;
   	}
    
    function photo_profil_user_url( $id_user, $nom ) {
        if( $nom != "") {
            return base_url() . 'assets/ressources/users/' . $id_user .'/profil/'.$nom;    
        }
  		return img_url('default_photo.png');
   	}
    
    function video_user_url( $id_user, $nom ){
  		return base_url() . 'assets/ressources/users/' . $id_user .'/video/' .$nom;
   	}
    
    if ( ! function_exists('img'))
    {
    	function img($nom, $alt = '', $option = '')
    	{
    		return '<img src="' . img_url($nom) . '" alt="' . $alt . '"  ' . $option . '/>';
    	}
    }
    
    if ( ! function_exists('input'))
    {
    	function input($type, $name = ' ', $option = '')
    	{
    		return '<input type = ' . $type .' name = ' . $name. '  ' . $option . '/>';
    	}
    }
    
   
    /******************Affichage des popups**********************************/
    
    function afficher_contenu_fenetre($tab, $pref=false, $onclick="close_div_no_scroll_no_fond();close_fond();",$confirm=false,$cancel=false,$libelle_confirmer='Valider') {
            $confirm_btn='';
            $cancel_btn='';
            $bouton='';
            $close='';
            $bande_titre = '' ;
            $titre = '' ;
            if($confirm) {
                $confirm_btn='<input type="button" value="'.$libelle_confirmer.'" onclick="'.$confirm.'" class="bouton_confirmer"/>';    
            }
            if($cancel) {
                $cancel_btn='<input type="button" value="Annuler" onclick="'.$onclick.'" class="bouton_confirmer"/>';    
            }
            
            if($pref==false) {
                $bouton=$cancel_btn.'&nbsp;&nbsp;'.$confirm_btn;    
                $close='<img src='.img_url('pop_up_close.png').' onclick="'.$onclick.'">';
                if(isset($tab['titre'])) {
                    $bande_titre = 'titre_fenetre' ;
                    $titre = '<div class="text_titre"><h2><strong>'.$tab['titre'].'</strong></h2></div>';    
                }
            }
            
            $chn='<div class=" ' . $bande_titre . ' ">
                        ' . $titre . '
                        <div class="fermer_popup">'.$close.'</div>
                   </div>
                        <div  class="contenu_fenetre">
                            '.$tab['contenu'].'
                        </div>
                    <table border=0 width=100%>
                        <tr>
                            <td align="center">
                                <div>
                                    '.$bouton.'
                                </div>
                            </td>
                        </tr>
                    </table>
                    ';
        
        return utf8_encode($chn);
    }
    
    /*Préparation de pagination**/
     function paginate($zUrlPage, $iTotalRow, $iPerPage, $iUriSegment ,$zSearchAdv = "") {
        $CI =& get_instance();
        $tzConfig['base_url'] = $zUrlPage ;
        $tzConfig['total_rows'] = $iTotalRow ;
        $tzConfig['per_page'] = $iPerPage ;
        $tzConfig['use_page_numbers'] = FALSE;
        $tzConfig['display_pages'] = TRUE;
        $tzConfig['page_query_string'] = FALSE;
        $tzConfig['next_link'] = '<span class="pageSuiv" style="position:relative; padding-right : 10px">Suivant<img src='.img_url('page_next.png').' style="position :absolute; left:42px;"/></span>';
        $tzConfig['prev_link'] = '<span class="pagePrec" style="position:relative ; padding-left : 10px"><img src='.img_url('page_prev.png').' style="position :absolute; left:-10px;"/>Précédent</span>';
        $tzConfig['uri_segment'] = 4 ;
        //if (count($_GET) > 0){
            $tzConfig['suffix'] = '?' . http_build_query($_GET, '', "&");   
        //}
        $CI->pagination->initialize($tzConfig) ;
     }
    
    
    /******************Affichage des popups de confirmation**********************************/
    function afficher_contenu_confirmation($tab, $oui = "", $cancel = "close_div_no_scroll_no_fond();close_fond();") {
        $confirm_btn='';
        $cancel_btn='';
        $bouton='';
        $close='';
        
      
        $oui_btn='<input type="button" value="Oui" onclick="'.$oui.';'.$cancel.'" class="bouton_confirmer"/>';    
        
        $close='<img src='.img_url('close.png').' onclick="'.$cancel.'">';
        $cancel_btn='<input type="button" value="Non" onclick="'.$cancel.'" class="bouton_confirmer"/>';    
   
        
        
        $chn='<div class="titre_fenetre_confirm">
                    <div class="fermer_popup">'.$close.'</div>
               </div>
                <table border=0 width=100%>
                    <tr>
                       <td align="center">
                                <div class="confirmation" style="text-align: center;">'.$tab['contenu'].'</div>
                       </td> 
                    </tr>
                    <tr>
                        <td align="center">
                            <div >
                                '.$oui_btn.'   '.$cancel_btn.'
                            </div>
                        </td>
                    </tr>
                </table>
                ';
        return utf8_encode($chn);
    }
    
    function list_date( $dateEng ) {
        $tzDate = explode('-', $dateEng );
        return  $tzDate ;   
    }
    
     function tab_value_exercice() {
        $tab[2010] = '2010';$tab[2011] = '2011';$tab[2012] = '2012';$tab[2013] = '2013';$tab[2014] = '2014';
        return $tab;          
    } 
    
    function number_to_month( $i ) {
        $tab[1] = 'January';$tab[2] = 'February'; $tab[3] = 'March'; $tab[4] = 'April'; $tab[5] = 'Mey';$tab[6] = 'June';
        $tab[7] = 'July'; $tab[8] = 'August'; $tab[9] = 'September'; $tab[10] = 'October'; $tab[11] = 'November'; $tab[12] ='December';
        
        return $tab[$i];
    }
    
    function number_to_month_alias( $i ) {
        $tab[1] = 'Jan';$tab[2] = 'Feb'; $tab[3] = 'Mar'; $tab[4] = 'Apr'; $tab[5] = 'Mey';$tab[6] = 'June';
        $tab[7] = 'Jul'; $tab[8] = 'Aug'; $tab[9] = 'Sept'; $tab[10] = 'Oct'; $tab[11] = 'Nov'; $tab[12] ='Dec';
        
        return $tab[$i];
    }
    
    
    
    
    function dateTimeToLongDate( $dateTime ) {
        list($dateEng, $h) = explode(' ', $dateTime);
        list($dYear, $dMonth, $dDay) = explode('-', $dateEng);
        $zLongDate =  number_to_month($dMonth) . ' ' . $dDay . ' , ' .$dYear ;
        
        return $zLongDate ;
    }
    
    function dateTimeToLongDateTime( $dateTime ) {
        list($dateEng, $h) = explode(' ', $dateTime);
        list($dYear, $dMonth, $dDay) = explode('-', $dateEng);
        $zLongDate =  number_to_month_alias($dMonth) . '.' . $dDay . '. ' .$dYear ;
        
        $zSub = substr($h,0,-3);
        
        $zHeure  = str_replace(':', '.', $zSub);
        
        
        return $zHeure. ' - ' .$zLongDate ;
    }
	function truncate($string, $max_length = 30, $replacement = '', $trunc_at_space = false)
	{
		$max_length -= strlen($replacement);
		$string_length = strlen($string);
		 
		if($string_length <= $max_length)
			return $string;
		 
		if( $trunc_at_space && ($space_position = strrpos($string, ' ', $max_length-$string_length)) )
			$max_length = $space_position;
		 
		return substr_replace($string, $replacement, $max_length);
	}

    /**
	 *  Fonction qui permet de redimensionner une image
	 *  @param      string  _zImgUrl 
	 *  @param      integer _iWidth
	 *  @param      integer _iHeight
	**/
	function resize_image( $_zImgUrl , $_iWidth = 100 , $_iHeight = 100 ){
		if($_zImgUrl != ""){
			return base_url() . "timthumb.php?src=" . ($_zImgUrl) . "&w=".$_iWidth."&h=" .$_iHeight ;
		}
	}
    
?>