<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    // Validation default parameters
    $config = array(
        // Validaciones en controlador categorias
        'inicio' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo en Español',
                'rules'   => 'required|xss'
            )
        ),
        'sliders' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'link',
                'label'   => 'Enlace',
                'rules'   => 'xss'
            )

        ),
        'sliderrates' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'link',
                'label'   => 'Enlace',
                'rules'   => 'xss'
            )

        ),
        'village' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'descripcion',
                'label'   => 'Descripcion',
                'rules'   => 'xss'
            )

        ),
        'categoriapost' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo',
                'rules'   => 'required|xss'
            )

        ),
        'post' =>  array(
            array(
                'field'   => 'categoria_id',
                'label'   => 'Categoría',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'descripcion',
                'label'   => 'Descripcion',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'video',
                'label'   => 'Video',
                'rules'   => 'xss'
            )


        ),
        'about' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'titulo_2',
                'label'   => 'Titulo en Inglés',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'titulo_3',
                'label'   => 'Titulo en Alemán',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'link',
                'label'   => 'Enlace',
                'rules'   => 'xss'
            )

        ),
        'servicio' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => '*Titulo',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'descripcion',
                'label'   => 'Descripcion',
                'rules'   => 'xss'
            )

        ),
        'subcategoria' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => '*Titulo',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'descripcion',
                'label'   => 'Descripcion',
                'rules'   => 'xss'
            )

        ),

        // Validacion
        'galerias' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'descripcion',
                'label'   => 'Descripcion',
                'rules'   => 'xss'
            )
            

        ),
        // Validacion
        'rates' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo en Español',
                'rules'   => 'xss|required'
            ),
            array(
                'field'   => 'descripcion',
                'label'   => 'Descripcion en Español',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'titulo_2',
                'label'   => 'Titulo en Inglés',
                'rules'   => 'xss|required'
            ),
            array(
                'field'   => 'descripcion_2',
                'label'   => 'Descripcion en Inglés',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'titulo_3',
                'label'   => 'Titulo en Alemán',
                'rules'   => 'xss|required'
            ),
            array(
                'field'   => 'descripcion_3',
                'label'   => 'Descripcion en Alemán',
                'rules'   => 'xss'
            )
            

        ),
        // Validacion
        'precios_temporada' =>  array(
            array(
                'field'   => 'fecha_inicio',
                'label'   => 'Fecha Inicio',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'fecha_fin',
                'label'   => 'Fecha Fin',
                'rules'   => 'xss'
            )
            ,
            array(
                'field'   => 'habitacion_1',
                'label'   => 'Habitacion 1',
                'rules'   => 'xss'
            )
            ,
            array(
                'field'   => 'habitacion_2',
                'label'   => 'Habitacion 2',
                'rules'   => 'xss'
            )
            ,
            array(
                'field'   => 'habitacion_3',
                'label'   => 'Habitacion 3',
                'rules'   => 'xss'
            )
            ,
            array(
                'field'   => 'habitacion_4',
                'label'   => 'Habitacion 4',
                'rules'   => 'xss'
            )
            

        )

    );