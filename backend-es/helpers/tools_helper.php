<?php

/* forms */

    if (! function_exists('formCheckedActivo'))
    {
        function formCheckedActivo($id,$name,$value=null,$clase='',$leyenda = 'Estatus'){
            switch($value){
                case 1:
                    $checkedActivo ='checked="checked"';
                    $classActivo = 'class="checked"';
                    $checkedInactivo ='';
                    break;
                case 0:
                    $checkedActivo ='';
                    $classActivo = '';
                    $checkedInactivo ='checked="checked"';
                    break;
            }
            $html = '
             <div class="form-row row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <label class="form-label span4" for="checkboxes">'.$leyenda.'</label>
                            <div class="span8 controls">
                                <div class="left marginT5">
                                    <input type="radio" name="'.$name.'" id="'.$id.'1" value="1" '.$checkedActivo.' />
                                    Activo
                                </div>
                                <div class="left marginT5">
                                    <input type="radio" name="'.$name.'" id="'.$id.'2" value="0" '.$checkedInactivo.' />
                                    Inactivo
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
            ';
            return $html;
        }
    }

    if (! function_exists('formInput'))
    {
        function formInput($id,$name,$value=null,$clase='',$leyenda = ''){
            $html = '
            <div class="form-row row-fluid ">
                        <div class="span12">
                            <div class="row-fluid">
                                <label class="form-label span4" for="'.$id.'">'.$leyenda.'</label>
                                <input class="span8 '.$clase.'" id="'.$id.'" type="text" name="'.$name.'" value="'.$value.'" />
                            </div>
                        </div>
                    </div>
            ';
            return $html;
        }
    }

    if (! function_exists('formTextArea'))
    {
        function formTextArea($id,$name,$value=null,$clase='',$leyenda= ''){
            $html = '
            <div class="form-row row-fluid">
                        <div class="span12">
                            <div class="row-fluid">
                                <label class="form-label span4" for="'.$id.'">'.$leyenda.'</label>
                                <textarea class="span8 '.$clase.'" id="'.$id.'" rows="3" name="'.$name.'">'.$value.'</textarea>
                            </div>
                        </div>
                    </div>
            ';
            return $html;
        }
    }

if (! function_exists('createSelect'))
{
	  function createSelect($name,$values,$selected = NULL,$clase,$leyenda=''){
		$html = '<select name="'.$name.'" class="'.$clase.'">';
          if ($leyenda==''){
              $html .= '<option value="" >Seleccione</option>';
          } else {
              $html .= '<option value="" >'.$leyenda.'</option>';
          }
		foreach($values as $k=>$v){
			if($k == $selected){
				$html .= '<option value="'.$k.'" selected="selected">'.$v.'</option>';
			} else {
				$html .= '<option value="'.$k.'">'.$v.'</option>';
			}		
		}	
		$html .='</select>';
		return $html;
		}
}

if (! function_exists('createSelectResult'))
{
	  function createSelectResult($name,$values,$selected = NULL,$clase,$leyenda=''){
		$html = '<select id="'.$name.'" name="'.$name.'" class="'.$clase.'">';
          if ($leyenda==''){
              $html .= '<option value="" >Seleccione</option>';
          } else {
              $html .= '<option value="" >'.$leyenda.'</option>';
          }

		foreach($values->result() as $valor){
			if($valor->id == $selected){
				$html .= '<option value="'.$valor->id.'" selected="selected">'.$valor->titulo.'</option>';
			}else{
				$html .= '<option value="'.$valor->id.'">'.$valor->titulo.'</option>';
			}		
		}	
		$html .='</select>';
		return $html;
		}
}

//Drop_down_urls
if (! function_exists('createSelectResultURL'))
{
	  function createSelectResultURL($name,$values,$selected = NULL,$clase){
		$html = '<select id="'.$name.'" name="'.$name.'" class="'.$clase.'">';
		$html .= '<option value="todas" >Todas</option>';
		foreach($values->result() as $valor){
			if($valor->url == $selected){
				$html .= '<option value="'.$valor->url.'" selected="selected">'.$valor->titulo.'</option>';
			}else{
				$html .= '<option value="'.$valor->url.'">'.$valor->titulo.'</option>';
			}		
		}	
		$html .='</select>';
		return $html;
		}
}

if (! function_exists('createChecks'))
{
	function createChecks($values,$key,$value,$checked =array(),$clase){
		$html ="";
		foreach($values->result() as $evento)
		{
			if(in_array($evento->$key,$checked))
			{
			 
				$html.= '<input type="checkbox" name="evento[]" value="'.$evento->$key.'" checked="checked" class="'.$clase.'"/>'.$evento->$value.'<br />';
			}else{
				$html.= '<input type="checkbox" name="evento[]" value="'.$evento->$key.'" class="'.$clase.'"/>'.$evento->$value.'<br />';
			}
		}
	return $html;
	}
}

if (! function_exists('getThumb'))
{

	function getThumb($imagen)
	{
		$thumb='';
		if($imagen!=''){
			$nimagen = explode(".", $imagen);
			$imagenname = $nimagen[0];
			$imagenext = $nimagen[1];
			$imagenname = $imagenname.'_thumb';
			$thumb   	= $imagenname.'.'.$imagenext;
		}
		return $thumb;
	}
}

if (! function_exists('createRadios'))
{
    function createRadios($name,$values,$selected = NULL,$clase){
        $html = '';
        foreach($values as $k=>$v){
            if($v == $selected){
                $html .= '<input type="radio" name="'.$name.'" value="'.$v.'" checked="checked" />'.$v.'<br/>';
            }else{
                $html .= '<input type="radio" name="'.$name.'" value="'.$v.'"  />'.$v.'<br/>';
            }
        }
        return $html;
    }
}

    if (! function_exists('createRadiosLabel'))
    {
        function createRadiosLabel($name,$values,$selected = NULL,$clase){
            $html = '';
            $count = 0;
            foreach($values as $k=>$v){
                $count++;
                if($k == $selected){
                    $html .= '<input type="radio" name="'.$name.'" value="'.$k.'" id="'.$name.'-'.$count.'" checked="checked" /> <label for="'.$name.'-'.$count.'">'.$v.'</label>';
                }else{
                    $html .= '<input type="radio" name="'.$name.'" value="'.$k.'"  id="'.$name.'-'.$count.'" /><label for="'.$name.'-'.$count.'">'.$v.'</label>';
                }
            }
            return $html;
        }
    }



if (! function_exists('showErrorsJGrowl'))
{
	function showErrorsJGrowl($val_error)
	{
		if($val_error!="")
		{
			$errore_array = explode("</p>", $val_error);
			$i=0;
			foreach($errore_array as $error_solo)
			{
				$i==0;
				if($i==0){
					$error = substr($error_solo,3);
				}else{
					$error = substr($error_solo,4);
				}
				$i++;
				if($error!="")
				{
						//echo "<script type='text/javascript'>$(function(){ $.jGrowl('$error',{sticky:true}); 	});</script>";
				    echo "<script type='text/javascript'>$(function(){
	                        $.pnotify({title: 'Aviso',text: '$error',hide: false,icon: 'picon icon16 entypo-icon-warning white',opacity: 0.95,history: false,sticker: false});});
	                    </script>";
                }
			}
		}
	}
}
if (! function_exists('convertirMes'))
{
	function convertirMes($mes){
		switch($mes){
				case 1:$mes='ENERO';break;case 2:$mes='FEBRERO';break;case 3:$mes='MARZO';break;case 4:$mes='ABRIL';break;case 5:$mes='MAYO';break;case 6:$mes='JUNIO';break;case 7:$mes='JULIO';break;case 8:$mes='AGOSTO';break;case 9:$mes='SEPTIEMBRE';break;case 10:$mes='OCTUBRE';break;case 11:$mes='NOVIEMBRE';break;case 12:$mes='DICIEMBRE';break;
		}
		return $mes;
	}
	
}
if (! function_exists('convertMes'))
{
	function convertMes($fecha)
	{
		if($fecha!="")
		{
			$f_array = explode('-',$fecha);
			switch($f_array[1]){
				case '01':
					$f_return = $f_array[2].'-Ene-'.$f_array[0];
				break;
				case '02':
					$f_return = $f_array[2].'-Feb-'.$f_array[0];
				break;
				case '03':
					$f_return = $f_array[2].'-Mar-'.$f_array[0];
				break;
				case '04':
					$f_return = $f_array[2].'-Abr-'.$f_array[0];
				break;
				case '05':
					$f_return = $f_array[2].'-May-'.$f_array[0];
				break;
				case '06':
					$f_return = $f_array[2].'-Jun-'.$f_array[0];
				break;
				case '07':
					$f_return = $f_array[2].'-Jul-'.$f_array[0];
				break;
				case '08':
					$f_return = $f_array[2].'-Ago-'.$f_array[0];
				break;
				case '09':
					$f_return = $f_array[2].'-Sep-'.$f_array[0];
				break;
				case '10':
					$f_return = $f_array[2].'-Oct-'.$f_array[0];
				break;
				case '11':
					$f_return = $f_array[2].'-Nov-'.$f_array[0];
				break;
				case '12':
					$f_return = $f_array[2].'-Dic-'.$f_array[0];
				break;
			}
			return $f_return;
		}
	}
}
if (! function_exists('h_money_format'))
{
	function h_money_format($format, $number)
{
    $regex  = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'.
              '(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/';
    if (setlocale(LC_MONETARY, 0) == 'C') {
        setlocale(LC_MONETARY, '');
    }
    $locale = localeconv();
    preg_match_all($regex, $format, $matches, PREG_SET_ORDER);
    foreach ($matches as $fmatch) {
        $value = floatval($number);
        $flags = array(
            'fillchar'  => preg_match('/\=(.)/', $fmatch[1], $match) ?
                           $match[1] : ' ',
            'nogroup'   => preg_match('/\^/', $fmatch[1]) > 0,
            'usesignal' => preg_match('/\+|\(/', $fmatch[1], $match) ?
                           $match[0] : '+',
            'nosimbol'  => preg_match('/\!/', $fmatch[1]) > 0,
            'isleft'    => preg_match('/\-/', $fmatch[1]) > 0
        );
        $width      = trim($fmatch[2]) ? (int)$fmatch[2] : 0;
        $left       = trim($fmatch[3]) ? (int)$fmatch[3] : 0;
        $right      = trim($fmatch[4]) ? (int)$fmatch[4] : $locale['int_frac_digits'];
        $conversion = $fmatch[5];

        $positive = true;
        if ($value < 0) {
            $positive = false;
            $value  *= -1;
        }
        $letter = $positive ? 'p' : 'n';

        $prefix = $suffix = $cprefix = $csuffix = $signal = '';

        $signal = $positive ? $locale['positive_sign'] : $locale['negative_sign'];
        switch (true) {
            case $locale["{$letter}_sign_posn"] == 1 && $flags['usesignal'] == '+':
                $prefix = $signal;
                break;
            case $locale["{$letter}_sign_posn"] == 2 && $flags['usesignal'] == '+':
                $suffix = $signal;
                break;
            case $locale["{$letter}_sign_posn"] == 3 && $flags['usesignal'] == '+':
                $cprefix = $signal;
                break;
            case $locale["{$letter}_sign_posn"] == 4 && $flags['usesignal'] == '+':
                $csuffix = $signal;
                break;
            case $flags['usesignal'] == '(':
            case $locale["{$letter}_sign_posn"] == 0:
                $prefix = '(';
                $suffix = ')';
                break;
        }
        if (!$flags['nosimbol']) {
            $currency = $cprefix .
                        ($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']) .
                        $csuffix;
        } else {
            $currency = '';
        }
        $space  = $locale["{$letter}_sep_by_space"] ? ' ' : '';

        $value = number_format($value, $right, $locale['mon_decimal_point'],
                 $flags['nogroup'] ? '' : $locale['mon_thousands_sep']);
        $value = @explode($locale['mon_decimal_point'], $value);

        $n = strlen($prefix) + strlen($currency) + strlen($value[0]);
        if ($left > 0 && $left > $n) {
            $value[0] = str_repeat($flags['fillchar'], $left - $n) . $value[0];
        }
        $value = implode($locale['mon_decimal_point'], $value);
        if ($locale["{$letter}_cs_precedes"]) {
            $value = $prefix . $currency . $space . $value . $suffix;
        } else {
            $value = $prefix . $value . $space . $currency . $suffix;
        }
        if ($width > 0) {
            $value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ?
                     STR_PAD_RIGHT : STR_PAD_LEFT);
        }

        $format = str_replace($fmatch[0], $value, $format);
    }
    return $format;
	} 
}


if ( !function_exists('nav_menu_item'))
{
    function nav_menu_item($link,$titulo, $seccion)
    {
        $var = ($seccion == $link) ? 'class="current"' : "" ;
        echo "<li><a $var href=\"$link\">$titulo</a></li>\n";
    }   
}

if ( !function_exists('dropdown_acciones'))
{
    function dropdown_acciones($id,$ruta,$borrar=true,$ver = true,$editar = true, $nuevo="")
    {
        echo "<div class=\"box-form right\">
    <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"caret\"></span>
        <!--<img src=\"images/timon.png\" height=\"50%\" width=\"50%\">-->
    </a>

    <ul class=\"dropdown-menu dpmw\">

";
        if ($ver) {
        echo "<li>
            <a href=\"$ruta/ver/$id\">
                <span class=\"icon-pencil\"></span>
                Ver
            </a>
        </li>";
        }
        if ($editar) {
        echo "<li>
            <a href=\"$ruta/editar/$id\">
                <span class=\"icon-pencil\"></span>
                Editar
            </a>
        </li>";
        }
        if ($borrar) {
            echo"
        <li>
            <a href=\"javascript:void(0);\" onclick=\"eliminar($id,'$ruta')\">
                <span class=\"icon-pencil\"></span>
                Borrar
            </a>
        </li>";

        }
        echo $nuevo;
        echo"
    </ul>
</div>";
    }
}

if ( !function_exists('dropdown_acciones2'))
{
    function dropdown_acciones2($id,$ruta,$borrar=true,$ver = true,$editar = true)
    {
        echo "<div class=\"box-form right\">
    <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"caret\"></span>
        <!--<img src=\"images/timon.png\" height=\"50%\" width=\"50%\">-->
    </a>

    <ul class=\"dropdown-menu dpmw\">

";
        if ($ver) {
            echo "<li>
            <a href=\"$ruta/ver/$id\">
                <span class=\"icon-pencil\"></span>
                Ver
            </a>
        </li>";
        }
        if ($editar) {
            echo "<li>
            <a href=\"$ruta/precio/editar/$id\">
                <span class=\"icon-pencil\"></span>
                Editar
            </a>
        </li>";
        }
        if ($borrar) {
            echo"
        <li>
            <a href=\"javascript:void(0);\" onclick=\"eliminar2($id,'$ruta')\">
                <span class=\"icon-pencil\"></span>
                Borrar
            </a>
        </li>";

        }
        echo"
    </ul>
</div>";
    }
}

if ( !function_exists('editar_foto'))
{
    function editar_foto($id,$ruta)
    {
        echo "
            <a href=\"$ruta/editar/$id\">
                <span class=\"icon-pencil\"></span>
                Editar
            </a>
            ";
    }
}

if ( !function_exists('titulo_seccion'))
{
    function titulo_seccion($name)
    {
        $name=  ucfirst ( $name);
        echo "<div class=\"title\">
                <h4>
                    <img src=\"images/section-icon.png\" width=\"20px\" >
                    <span>$name</span>
                </h4>
            </div>";
    }   
}




?>