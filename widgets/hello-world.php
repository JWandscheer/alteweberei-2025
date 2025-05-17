<?php
/**
 * Elementor Hello World Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Hello_World_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Hello World widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Hello World';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Hello World widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Hello World', 'alteweberei-2025' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Hello World widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fas fa-bullhorn';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Hello World widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'Boilerplate' ];
	}

	/**
	 * Register Hello World widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'alteweberei-2025' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'text',
			[
				'label' => __( 'Text To Display', 'alteweberei-2025' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => __( 'Hello World', 'alteweberei-2025' ),
			]
        );
        
        $this->add_control(
			'text_heading_type',
			[
				'label' => __( 'Heading Type', 'alteweberei-2025' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'H2',
				'options' => [
                    'p' => __( 'p', 'alteweberei-2025'),
					'H1' => __( 'H1', 'alteweberei-2025'),
					'H2' => __( 'H2', 'alteweberei-2025'),
					'H3' => __( 'H3', 'alteweberei-2025'),
					'H4' => __( 'H4', 'alteweberei-2025'),
					'H5' => __( 'H5', 'alteweberei-2025'),
					'H6' => __( 'H6', 'alteweberei-2025'),
				]
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render Hello World widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();

		echo '<div class="hello-world-elementor-widget">';

		echo '<' . $settings['text_heading_type'] . '>';
            echo $settings['text'];
        echo '</' . $settings['text_heading_type'] . '>';

		echo '</div>';

	}

}