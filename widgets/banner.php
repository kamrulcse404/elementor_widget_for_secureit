<?php
class Banner extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'banner';
    }

    public function get_title()
    {
        return esc_html__('Banner', 'sourceit');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['banner'];
    }

    public function get_keywords()
    {
        return ['banner', 'Banner'];
    }




    protected function register_controls()
    {

        // section background Tab Start

        $this->start_controls_section(
            'sourceit_banner_section_background_tab',
            [
                'label' => esc_html__('Banner Background Image', 'sourceit'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'sourceit_banner_section_background_img',
            [
                'label' => esc_html__('Section Background Image', 'sourceit'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/asset/imgs/headers/stuff.jpg',
                ],
            ]
        );



        $this->end_controls_section();

        // section background Tab end



        // section content background Tab Start

        $this->start_controls_section(
            'sourceit_banner_content_background_tab',
            [
                'label' => esc_html__('Banner Content Background Image', 'sourceit'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'sourceit_banner_section_content_background_img',
            [
                'label' => esc_html__('Section Content Background Image', 'sourceit'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/asset/imgs/bgs/faded-repeater3.png',
                ],
            ]
        );

        $this->end_controls_section();

        // section content background Tab end




        // title Tab Start

        $this->start_controls_section(
            'sourceit_banner_title_tab',
            [
                'label' => esc_html__('Title', 'sourceit'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'sourceit_banner_title',
            [
                'label' => esc_html__('Title', 'sourceit'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__("Jobs we're hiring for now", 'sourceit'),
                'placeholder' => esc_html__('Type your title here', 'sourceit'),
            ]
        );

        $this->end_controls_section();

        // title Tab end


        // title style tab start
        $this->start_controls_section(
            'banner_style_section',
            [
                'label' => esc_html__('Title Style', 'sourceit'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // color 
        $this->add_control(
            'banner_title_color',
            [
                'label' => esc_html__('Text Color', 'sourceit'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .inner-banner__title.intro-title' => 'color: {{VALUE}} !important',
                ],
            ]
        );


        // Typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'banner_title_typography',
                'label' => esc_html__('Text Typography', 'sourceit'),
                'selector' => '{{WRAPPER}} .inner-banner__title.intro-title',
            ]
        );


        $this->end_controls_section();

        // title style tab end



        // description Tab Start

        $this->start_controls_section(
            'sourceit_banner_description_tab',
            [
                'label' => esc_html__('Description', 'sourceit'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  description 
        $this->add_control(
            'sourceit_banner_description',
            [
                'label' => esc_html__('Description', 'sourceit'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__("Don't see your job category? Send us your info anyway and let us hunt for you!", 'sourceit'),
                'placeholder' => esc_html__('Type your description here', 'sourceit'),
            ]
        );

        $this->end_controls_section();

        // description Tab end



        // description style tab start
        $this->start_controls_section(
            'banner_style_section_desc',
            [
                'label' => esc_html__('Description Style', 'sourceit'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // color 
        $this->add_control(
            'banner_description_color',
            [
                'label' => esc_html__('Description Color', 'sourceit'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .kh-banner-desc' => 'color: {{VALUE}} !important',
                ],
            ]
        );


        // Typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'banner_description_typography',
                'label' => esc_html__('Description Typography', 'sourceit'),
                'selector' => '{{WRAPPER}} .kh-banner-desc',
            ]
        );


        $this->end_controls_section();
        
        // description style tab end

    }







    protected function render()
    {


        $settings = $this->get_settings_for_display();
        $sourceit_banner_title = $settings['sourceit_banner_title'];
        $sourceit_banner_description = $settings['sourceit_banner_description'];
        $sourceit_banner_section_background_img = $settings['sourceit_banner_section_background_img']['url'];
        $sourceit_banner_section_content_background_img = $settings['sourceit_banner_section_content_background_img']['url'];



?>

        <!-- banner  -->
        <section class="inner-banner section-bordered" style="background:url(<?php echo esc_url($sourceit_banner_section_background_img); ?>) no-repeat;background-size: cover;">
            <div class="container flex-column d-flex justify-content-center align-items-center">
                <div class="black-boxed" align="center" style="background-image: url(<?php echo esc_url($sourceit_banner_section_content_background_img); ?>) !important;">
                    <h2 class="inner-banner__title intro-title text-white"><?php echo $sourceit_banner_title; ?></h2>
                    <div class="text-black" style="margin-top: 20px;" align="center">
                        <div class="text-orange squiggly-subtitle kh-banner-desc" style="max-width: 70%;">
                            <?php echo $sourceit_banner_description; ?>
                        </div>
                        <br clear="all" />
                    </div>
                </div>
            </div>
        </section>





<?php
    }
}
