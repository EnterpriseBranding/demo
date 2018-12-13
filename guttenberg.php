<?php
/**
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @since 1.0
 * @link
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

new WPOnion\Modules\GuttenBerg( 'wponion/sample', array(
	'render_callback' => function () {
		echo 'Hello World';
	},
), array() );