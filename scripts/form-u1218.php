<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.2.1.352
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Formulario Contacto',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'invalid_form_config' => 'El campo \'%s\' contiene una configuración no válida.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => 'kgabriela24696@hotmail.es',
		'to' => 'kgabriela24696@hotmail.es'
	),
	'fields' => array(
		'custom_U1219' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nombre y puesto',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Nombre y puesto\' es obligatorio.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Correo electrónico',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Correo electrónico\' es obligatorio.',
				'format' => 'El campo \'Correo electrónico\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U1241' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Empresa',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Empresa\' es obligatorio.'
			)
		),
		'custom_U1245' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Clasificación de empresa por sector',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Clasificación de empresa por sector\' es obligatorio.'
			)
		),
		'custom_U1232' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Región',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Región\' es obligatorio.'
			)
		),
		'custom_U1249' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Ciudad',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Ciudad\' es obligatorio.'
			)
		),
		'custom_U1237' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Dedicación de la empresa',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Dedicación de la empresa\' es obligatorio.'
			)
		),
		'custom_U1224' => array(
			'order' => 8,
			'type' => 'string',
			'label' => '¿Que servicio desea contratar?',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'¿Que servicio desea contratar?\' es obligatorio.'
			)
		),
		'custom_U1228' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Mensaje',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Mensaje\' es obligatorio.'
			)
		)
	)
);

process_form($form);
?>
