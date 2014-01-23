<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class about extends MX_Controller {
    public $data,$vParameters,$mainView,$fv;
    public function __construct(){
        parent::__construct();
        session_start();

        if (!isset($_SESSION[$this->nsession]) || (($_SESSION[$this->nsession]['usuario'] == ""))) {
            redirect('login');
        }
        $this->fv = 'about'; // form validation variable
        $this->mainView = 'about';
        $this->data['fjs'] = '';
        $this->data['js'] = '
        <script type="text/javascript" src="plugins/misc/pnotify/jquery.pnotify.min.js"></script>
        <script type="text/javascript" src="js/borrar.js"></script>
		<script type="text/javascript" src="js/jquery-impromptu.js"></script>
		<!-- Gallery plugins -->
		<script type="text/javascript" src="plugins/gallery/lazy-load/jquery.lazyload.min.js"></script>
		<script type="text/javascript" src="plugins/gallery/jpages/jPages.min.js"></script>
		<script type="text/javascript" src="plugins/gallery/pretty-photo/jquery.prettyPhoto.js"></script>

		<script type="text/javascript" src="js/crud.js"></script>
        ';
        $this->data['css'] = '
        <link href="css/impromptu.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="plugins/gallery/jpages/jPages.css" rel="stylesheet" type="text/css" />
    <link href="plugins/gallery/pretty-photo/prettyPhoto.css" type="text/css" rel="stylesheet" />
        ';
        // Tools
        $this->load->helper(array('tools','url','date','text'));
        // Modelos
        $this->load->model(array('mabout'));
        // Lbrerias
        // $this->load->library(array('email','session'));
        $this->data['fotos_www'] = $this->config->item('base_www').'/about/';
        // $this->data['fotos_www'] = '/home/puntapro/www/uploads/galerias/';

        // Debugging
        // $this->output->enable_profiler(TRUE);
    }
    // Populate values
    private function _populateValues($r){
        $array  = array();
        $array['id'] = $r->row()->id;
        $array['titulo'] = $r->row()->titulo;
        $array['descripcion'] = $r->row()->descripcion;
        $array['titulo_2'] = $r->row()->titulo_2;
        $array['descripcion_2'] = $r->row()->descripcion_2;
        $array['titulo_3'] = $r->row()->titulo_3;
        $array['descripcion_3'] = $r->row()->descripcion_3;
        $array['foto_1'] = $r->row()->foto_1;
        $array['thumbnail_1'] = $r->row()->thumbnail_1;
        $array['foto_2'] = $r->row()->foto_2;
        $array['thumbnail_2'] = $r->row()->thumbnail_2;
        $array['foto_3'] = $r->row()->foto_3;
        $array['thumbnail_3'] = $r->row()->thumbnail_3;
        $array['foto_4'] = $r->row()->foto_4;
        $array['thumbnail_4'] = $r->row()->thumbnail_4;
        $array['foto_5'] = $r->row()->foto_5;
        $array['thumbnail_5'] = $r->row()->thumbnail_5;
        $array['link'] = $r->row()->link;		
        $array['status'] = $r->row()->status;
        $array['txtstatus'] = $r->row()->txtstatus;
        // output msg
        $array['msg'] = '';
        return $array;
    }

    public function index(){
        $data['q'] = $this->mabout->getAll();
        $this->data['contenido'] = $this->load->view($this->mainView.'/index_view',$data,true);
        $this->load->view('templates/main_template',$this->data);
    }

    public function nuevo(){
        // Mensajes
        $data['msg'] = '';
        // Validar Formulario
        $this->load->library('form_validation');
        // $this->form_validation->set_rules($this->vParameters);
        if ($this->form_validation->run($this->fv) == FALSE ){
            $data['msg'] = validation_errors();
            $this->data['contenido'] = $this->load->view($this->mainView.'/nuevo_view',$data,true);
            $this->load->view('templates/main_template',$this->data);
        } else {
            // Subida de imagenes
            $config = array();
            $this->load->library('upload', $config);
            $this->load->library('image_lib');
            if (isset($_FILES)){
                $imagenes = array();
                foreach($_FILES as $key=>$value){
                    if ($_FILES[$key]['size'] > 0){
                        $_FILES[$key]['name'] = strtolower($_FILES[$key]['name']);
                        $imagenes[] = $key;
                    }
                }
                $totalImagenes = count($imagenes);

                for($i=0; $i< $totalImagenes; $i++){
                    //Configuracion del thumbnail
                    if($imagenes[$i]!='foto'){
                        $nCampoC = explode("_",$imagenes[$i]);
                        $tipo = $nCampoC[0];
                        $v = $nCampoC[1];

                    } else {
                        $v = 0;
                        $tipo = 'foto';
                    }
                    if ($tipo == 'foto'){

                        $uploaddir = $this->data['fotos_www'];
                        $configT['upload_path'] = $uploaddir;
                        $configT['image_library'] = 'gd2';
                        $configT['create_thumb'] = TRUE;
                        $configT['maintain_ratio'] = FALSE;
                        $configT['width'] = 223;
                        $configT['height'] = 84;
                        //Configuracion de la libreria upload
                        $nextId = $this->mabout->nextId();
                        $config['file_name'] =  $nextId."_".$v;
                        $config['overwrite'] = TRUE;
                        $config['upload_path'] = $uploaddir;
                        $config['max_size']	= '500';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $this->upload->initialize($config);

                        if ( ! $this->upload->do_upload($imagenes[$i]))
                        {
                            $data['error'] = 'Foto '.$v.$this->upload->display_errors();
                            $this->data['contenido'] = $this->load->view($this->mainView.'/nuevo_view',$data,true);
                        }
                        else
                        {
                            $dataFile = $this->upload->data($imagenes[$i]);
                            $fotoI = 'foto_'.$v;
                            $thumbI = 'thumbnail_'.$v;
                            if ($v == 0){
                                //Foto default
                                $pData['foto'] = $nextId.'_'.$v.$dataFile['file_ext'];// Se crea el thumbnail
                                $configT['source_image'] = $uploaddir.$pData['foto'];
                                $this->image_lib->clear();
                                $this->image_lib->initialize($configT);
                                $this->image_lib->resize();
                                $pData['thumbnail'] = $nextId.'_'.$v.'_thumb'.$dataFile['file_ext'];//Nombre thumbnail
                            } else {
                                $pData[$fotoI] = $nextId.'_'.$v.$dataFile['file_ext'];// Se crea el thumbnail
                                $configT['source_image'] = $uploaddir.$pData[$fotoI];
                                $this->image_lib->clear();
                                $this->image_lib->initialize($configT);
                                $this->image_lib->resize();
                                $pData[$thumbI] = $nextId.'_'.$v.'_thumb'.$dataFile['file_ext'];//Nombre thumbnail
                            }
                        }
                    }

                }
            }
            $pData['titulo'] = $this->input->post('titulo',TRUE);
            $pData['descripcion'] = $this->input->post('descripcion',TRUE);
            $pData['titulo_2'] = $this->input->post('titulo_2',TRUE);
            $pData['descripcion_2'] = $this->input->post('descripcion_2',TRUE);
            $pData['titulo_3'] = $this->input->post('titulo_3',TRUE);
            $pData['descripcion_3'] = $this->input->post('descripcion_3',TRUE);
            $pData['link'] = $this->input->post('link',TRUE);			
            $id = $this->mabout->insertar($pData);
            redirect($this->router->class);
        }
    }

    public function editar($id){
        // Mensajes
        $data['msg'] = '';
        // Validar formulario
        $this->load->library('form_validation');
        // $this->form_validation->set_rules($this->vParameters);

        if (isset($_POST['titulo'])){
            if ($this->form_validation->run($this->fv) == FALSE ){
                $data['msg'] = validation_errors();
            } else {

                // Subida de imagenes
                $config = array();
                $this->load->library('upload', $config);
                $this->load->library('image_lib');

                if (isset($_FILES)){
                    $imagenes = array();
                    foreach($_FILES as $key=>$value){
                        if ($_FILES[$key]['size'] > 0){
                            $_FILES[$key]['name'] = strtolower($_FILES[$key]['name']);
                            $imagenes[] = $key;
                        }
                    }
                    $totalImagenes = count($imagenes);
                    for($i=0; $i< $totalImagenes; $i++){
                        //Configuracion del thumbnail
                        if($imagenes[$i]!='foto'){
                            $nCampoC = explode("_",$imagenes[$i]);
                            $tipo = $nCampoC[0];
                            $v = $nCampoC[1];
                        } else {
                            $v = 0;
                            $tipo = 'foto';
                        }
                        if ($tipo == 'foto'){
                            $uploaddir = $this->data['fotos_www'];
                            $configT['upload_path'] = $uploaddir;
                            $configT['image_library'] = 'gd2';
                            $configT['create_thumb'] = TRUE;
                            $configT['maintain_ratio'] = FALSE;
                            $configT['width'] = 223;
                            $configT['height'] = 84;
                            //Configuracion de la libreria upload
                            $nextId = $id;
                            $config['file_name'] =  $nextId."_".$v;
                            $config['overwrite'] = TRUE;
                            $config['upload_path'] = $uploaddir;
                            $config['max_size']	= '500';
                            $config['allowed_types'] = 'gif|jpg|png';
                            $this->upload->initialize($config);

                            if ( ! $this->upload->do_upload($imagenes[$i]))
                            {
                                $data['msg'] = 'Foto '.$v.$this->upload->display_errors();
                                $this->data['contenido'] = $this->load->view('sliders/editar_view',$data,true);
                            }
                            else
                            {
                                $dataFile = $this->upload->data($imagenes[$i]);
                                $fotoI = 'foto_'.$v;
                                $thumbI = 'thumbnail_'.$v;
                                if ($v == 0){
                                    //Foto default
                                    $pData['foto'] = $nextId.'_'.$v.$dataFile['file_ext'];// Se crea el thumbnail
                                    $configT['source_image'] = $uploaddir.$pData['foto'];
                                    $this->image_lib->clear();
                                    $this->image_lib->initialize($configT);
                                    $this->image_lib->resize();
                                    $pData['thumbnail'] = $nextId.'_'.$v.'_thumb'.$dataFile['file_ext'];//Nombre thumbnail
                                } else {
                                    $pData[$fotoI] = $nextId.'_'.$v.$dataFile['file_ext'];// Se crea el thumbnail
                                    $configT['source_image'] = $uploaddir.$pData[$fotoI];
                                    $this->image_lib->clear();
                                    $this->image_lib->initialize($configT);
                                    $this->image_lib->resize();
                                    $pData[$thumbI] = $nextId.'_'.$v.'_thumb'.$dataFile['file_ext'];//Nombre thumbnail
                                }
                            }
                        }

                    }
                }

                //fin subida de imagen

                $pData['titulo'] = $this->input->post('titulo',TRUE);
                $pData['link'] = $this->input->post('link',TRUE);
                $pData['descripcion'] = $this->input->post('descripcion',TRUE);
                $pData['titulo_2'] = $this->input->post('titulo_2',TRUE);
                $pData['descripcion_2'] = $this->input->post('descripcion_2',TRUE);
                $pData['titulo_3'] = $this->input->post('titulo_3',TRUE);
                $pData['descripcion_3'] = $this->input->post('descripcion_3',TRUE);
                //$pData['titulo_e'] = $this->input->post('titulo_e',TRUE);
                $pData['status'] =$this->input->post('status',TRUE);
                $this->mabout->actualizar($pData,$id);
                redirect($this->router->class);
            }
        }
        // Obteniendo la informacion
        $info = $this->mabout->getById($id);
        $data = $this->_populateValues($info);
        $this->data['contenido'] = $this->load->view($this->mainView.'/editar_view',$data,true);
        $this->load->view('templates/main_template',$this->data);
    }

    public function ver($id = null){
        if ($id == null){
            redirect($this->router->class.'/index_view');
        } else {
            // info
            $info = $this->mabout->getById($id);
            $data = $this->_populateValues($info);
            $this->data['contenido'] = $this->load->view($this->mainView.'/ver_view',$data,true);
            $this->load->view('templates/main_template',$this->data);
        }
    }

    public function eliminar(){
        $id = $this->input->post('elid');
        $q = $this->mabout->getById($id);
        // borrando fotos
        @unlink($this->data['fotos_www'].$q->row()->foto);
        @unlink($this->data['fotos_www'].$q->row()->thumbnail);
        $cValor = "true";
        $this->mabout->borrar($id);
        $data = json_encode(array("valor" => $cValor));
        echo $data;
    }



    public function eliminar_foto()
    {
        if (isset($_POST['elid'])):
            $id = $this->input->post('elid');
            $campo = $this->input->post('elcampo');	//Obteniendo el nombre de la foto y thumbnail
            if($campo !="0"){$foto      = $this->mabout->getCampo('foto_'.$campo,$id);
                $thumbnail = $this->mabout->getCampo('thumbnail_'.$campo,$id);// Borrando los archivos fisicamente
                if((unlink($this->data['fotos_www'].$foto))&&(unlink($this->data['fotos_www'].$thumbnail))){// Haciendo update a la tabla
                    $c_data['foto_'.$campo] ='';
                    $c_data['thumbnail_'.$campo] ='';
                    $this->mabout->actualizar($c_data,$id);
                    $c_valor = "true";
                }else{ $c_valor = "false";}
            }else{	$foto      = $this->mabout->getCampo('foto',$id);
                $thumbnail = $this->mabout->getCampo('thumbnail',$id);// Borrando los archivos fisicamente
                if((unlink($this->data['fotos_www'].$foto))&&(unlink($this->data['fotos_www'].$thumbnail))){// Haciendo update a la tabla
                    $c_data['foto'] ='';
                    $c_data['thumbnail'] ='';
                    $this->mabout->actualizar($c_data,$id);
                    $c_valor = "true";
                }else{ $c_valor = "false";}
            }
            $data = json_encode(array("valor"=>$c_valor));
            echo $data;
        endif;

    }

}