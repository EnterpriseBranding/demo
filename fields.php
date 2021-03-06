<?php
global $wpof, $wpo;

$wpo  = array();
$wpof = array();

/**
 * Basic Feature.
 */
$wpof['basic_feature'] = wponion_field_file( 'basic-feature.php' );

/**
 * User Inputs.
 */
$wpof['text']         = wponion_field_file( 'text.php' );
$wpof['textarea']     = wponion_field_file( 'textarea.php' );
$wpof['checkbox']     = wponion_field_file( 'checkbox.php' );
$wpof['radio']        = wponion_field_file( 'radio.php' );
$wpof['select']       = wponion_field_file( 'select.php' );
$wpof['switcher']     = wponion_field_file( 'switcher.php' );
$wpof['button_set']   = wponion_field_file( 'button-set.php' );
$wpof['spinner']      = wponion_field_file( 'spinner.php' );
$wpof['range_slider'] = wponion_field_file( 'range-slider.php' );

/**
 * Advanced Fields.
 */
$wpof['sorter']      = wponion_field_file( 'sorter.php' );
$wpof['key_value']   = wponion_field_file( 'key-value.php' );
$wpof['input_group'] = wponion_field_file( 'input-group.php' );
$wpof['fieldset']    = wponion_field_file( 'fieldset.php' );
$wpof['accordion']   = wponion_field_file( 'accordion.php' );
$wpof['group']       = wponion_field_file( 'group.php' );
$wpof['modal']       = wponion_field_file( 'modal.php' );
$wpof['code_editor'] = wponion_field_file( 'code-editor.php' );
$wpof['cloner']      = wponion_field_file( 'cloner.php' );

/**
 * Picker Fields.
 */
$wpof['color_picker'] = wponion_field_file( 'color-picker.php' );
$wpof['icon_picker']  = wponion_field_file( 'icon-picker.php' );
$wpof['font_picker']  = wponion_field_file( 'font-picker.php' );
$wpof['date_picker']  = wponion_field_file( 'date-picker.php' );
$wpof['time_picker']  = wponion_field_file( 'time-picker.php' );
$wpof['image_select'] = wponion_field_file( 'image-select.php' );

/**
 * WordPress Fields.
 */
$wpof['image']     = wponion_field_file( 'image.php' );
$wpof['gallery']   = wponion_field_file( 'gallery.php' );
$wpof['upload']    = wponion_field_file( 'upload.php' );
$wpof['wp_editor'] = wponion_field_file( 'wp-editor.php' );
$wpof['wp_link']   = wponion_field_file( 'wp-link.php' );
$wpof['oembed']    = wponion_field_file( 'oembed.php' );

/**
 * Design Fields.
 */
//$wpof['color_palette'] = wponion_field_file( 'color-palette.php' );
$wpof['background']    = wponion_field_file( 'background.php' );
$wpof['typography']    = wponion_field_file( 'typography.php' );
$wpof['color_group']   = wponion_field_file( 'color-group.php' );
$wpof['link_color']    = wponion_field_file( 'link-color.php' );
$wpof['spacing']       = wponion_field_file( 'spacing.php' );
$wpof['dimensions']    = wponion_field_file( 'dimensions.php' );
$wpof['css_shadow']    = wponion_field_file( 'css-shadow.php' );
$wpof['visual_editor'] = wponion_field_file( 'visual-editor.php' );

/**
 * UI Fields.
 */
$wpof['ui_fields']     = wponion_field_file( 'ui-fields.php' );
$wpof['ui_notices']    = wponion_field_file( 'ui-notices.php' );
$wpof['ui_wp_notices'] = wponion_field_file( 'ui-wp-notices.php' );
$wpof['divider']       = wponion_field_file( 'divider.php' );
$wpof['markdown']      = wponion_field_file( 'markdown.php' );
$wpof['faq']           = wponion_field_file( 'faq.php' );

/**
 * Others
 */
$wpof['js-validation']  = wponion_field_file( 'js-validation.php' );
$wpof['php-validation'] = wponion_field_file( 'php-validation.php' );
$wpof['dependency']     = wponion_field_file( 'dependency.php' );
$wpof['field_badge']    = wponion_field_file( 'field-badge.php' );
/**
 * Basic Features.
 */
$wpo[] = WPO\Container::create( 'basic_feature', __( 'Basic Feature' ), 'dashicons dashicons-admin-generic' )
	->set_fields( $wpof['basic_feature'] );

/**
 * User Input Container.
 */
$user_inputs = WPO\Container::create( 'user_inputs', __( 'User Inputs' ), 'dashicons  dashicons-welcome-write-blog' );
$user_inputs->container( 'text', __( 'Text' ), 'dashicons dashicons-editor-textcolor' )
	->set_fields( $wpof['text'] );
$user_inputs->container( 'textarea', __( 'Textarea' ), 'dashicons dashicons-editor-textcolor' )
	->set_fields( $wpof['textarea'] );
$user_inputs->container( 'checkbox', __( 'Checkbox' ), 'dashicons dashicons-editor-spellcheck' )
	->set_fields( $wpof['checkbox'] );
$user_inputs->container( 'radio', __( 'Radio' ), 'dashicons dashicons-editor-spellcheck' )
	->set_fields( $wpof['radio'] );
$user_inputs->container( 'select', __( 'Select' ), 'dashicons dashicons-admin-multisite' )
	->set_fields( $wpof['select'] );
$user_inputs->container( 'switcher', __( 'Switcher' ), 'dashicons dashicons-yes' )
	->set_fields( $wpof['switcher'] );
$user_inputs->container( 'button_set', __( 'Button Set' ), 'dashicons dashicons-editor-kitchensink' )
	->set_fields( $wpof['button_set'] );
$user_inputs->container( 'spinner', __( 'Spinner' ), 'dashicons dashicons-image-rotate' )
	->set_fields( $wpof['spinner'] );
$user_inputs->container( 'range_slider', __( 'Range Slider' ), 'dashicons dashicons-image-rotate' )
	->set_fields( $wpof['range_slider'] );

$wpo[] = $user_inputs;

/**
 * Advanced Fields.
 */
//@todo create cloner demo.
//@todo create tab demo.
$advanced = WPO\Container::create( 'advanced_fields', __( 'Advanced Fields' ), 'dashicons dashicons-admin-plugins' );
$advanced->container( 'sorter', __( 'Sorter' ) )
	->set_fields( $wpof['sorter'] );
$advanced->container( 'key_value', __( 'Key Value' ) )
	->set_fields( $wpof['key_value'] );
$advanced->container( 'input_group', __( 'Input Group' ) )
	->set_fields( $wpof['input_group'] );
$advanced->container( 'fieldseet', __( 'Fieldset' ), 'dashicons dashicons-admin-settings' )
	->set_fields( $wpof['fieldset'] );
$advanced->container( 'accordion', __( 'Accordion' ), 'dashicons dashicons-admin-settings' )
	->set_fields( $wpof['accordion'] );
$advanced->container( 'group', __( 'Group' ), 'dashicons dashicons-admin-settings' )
	->set_fields( $wpof['group'] );
$advanced->container( 'modalfields', __( 'Modal Fields' ) )
	->set_fields( $wpof['modal'] );
$advanced->container( 'codeeditor', __( 'Code Editor' ) )
	->set_fields( $wpof['code_editor'] );
$advanced->container( 'cloner', __( 'Cloner' ) )
	->set_fields( $wpof['cloner'] );

$wpo[] = $advanced;

/**
 * Picker Fields.
 */
$pickers = \WPO\Container::create( 'pickers', __( 'Pickers' ), 'dashicons dashicons-location' );
$pickers->container( 'color_picker', __( 'Color Picker' ), 'dashicons dashicons-admin-appearance' )
	->set_fields( $wpof['color_picker'] );
$pickers->container( 'icon_picker', __( 'Icon Picker' ), 'dashicons dashicons-heart' )
	->set_fields( $wpof['icon_picker'] );
$pickers->container( 'font_picker', __( 'Font Picker' ), 'dashicons dashicons-editor-textcolor' )
	->set_fields( $wpof['font_picker'] );
$pickers->container( 'date_picker', __( 'Date Picker' ), 'dashicons dashicons-calendar-alt' )
	->set_fields( $wpof['date_picker'] );
$pickers->container( 'time_picker', __( 'Time Picker' ), 'dashicons dashicons-clock' )
	->set_fields( $wpof['time_picker'] );
$pickers->container( 'image_select', __( 'Image Select' ), 'dashicons dashicons-format-image' )
	->set_fields( $wpof['image_select'] );

$wpo[] = $pickers;

/**
 * WordPress Fields.
 */
$wp_fields = \WPO\Container::create( 'wp_fields', __( 'WP Fields' ), 'dashicons dashicons-wordpress' );
$wp_fields->container( 'image', 'Image', 'dashicons dashicons-format-image' )
	->set_fields( $wpof['image'] );
$wp_fields->container( 'gallery', __( 'Gallery' ), 'dashicons dashicons-images-alt' )
	->set_fields( $wpof['gallery'] );
$wp_fields->container( 'upload', __( 'Upload' ), 'dashicons dashicons-upload' )
	->set_fields( $wpof['upload'] );
$wp_fields->container( 'wp_editor', __( 'WP Editor' ), 'dashicons dashicons-edit' )
	->set_fields( $wpof['wp_editor'] );
$wp_fields->container( 'wp_link', __( 'WP Link' ), 'dashicons dashicons-admin-links' )
	->set_fields( $wpof['wp_link'] );
$wp_fields->container( 'oembed', __( 'OEmbed' ), 'dashicons dashicons-welcome-view-site' )
	->set_fields( $wpof['oembed'] );

$wpo[] = $wp_fields;

/**
 * Design Fields.
 */
//@todo Create Color Palette Field.
$design = WPO\Container::create( 'design_fields', __( 'Design Fields' ), 'dashicons dashicons-art' );
$design->container( 'background', __( 'Background' ) )
	->set_fields( $wpof['background'] );
$design->container( 'typography', __( 'Typography' ) )
	->set_fields( $wpof['typography'] );
$design->container( 'color_group', __( 'Color Group' ) )
	->set_fields( $wpof['color_group'] );
$design->container( 'link_color', __( 'Link Color Group' ) )
	->set_fields( $wpof['link_color'] );
$design->container( 'spacing', __( 'Spacing' ) )
	->set_fields( $wpof['spacing'] );
$design->container( 'dimensions', __( 'Dimensions' ) )
	->set_fields( $wpof['dimensions'] );
$design->container( 'css_shadow', __( 'CSS Shadow' ) )
	->set_fields( $wpof['css_shadow'] );
$design->container( 'visual_editor', __( 'Visual Editor' ) )
	->set_fields( $wpof['visual_editor'] );

$wpo[] = $design;

/**
 * UI Fields.
 */
$ui_fields = WPO\Container::create( 'uifields', __( 'UI Fields' ), 'dashicons dashicons-building' );
$ui_fields->container( 'heading_content', __( 'Heading & Content' ) )
	->set_fields( $wpof['ui_fields'] );
$ui_fields->container( 'notices', __( 'Notices' ) )
	->set_fields( $wpof['ui_notices'] );
$ui_fields->container( 'wp-notices', __( 'WP Notices' ) )
	->set_fields( $wpof['ui_wp_notices'] );
$ui_fields->container( 'divider', __( 'Divider' ) )
	->set_fields( $wpof['divider'] );
$ui_fields->container( 'faq', __( 'FAQ' ) )
	->set_fields( $wpof['faq'] );
$ui_fields->container( 'markdown', __( 'Markdown' ) )
	->set_fields( $wpof['markdown'] );

$wpo[] = $ui_fields;
