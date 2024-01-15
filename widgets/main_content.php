<?php
class Main_Content extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'main_content';
    }

    public function get_title()
    {
        return esc_html__('Main Content', 'sourceit');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['main content'];
    }

    public function get_keywords()
    {
        return ['main', 'content'];
    }




    protected function register_controls()
    {

        // Apply email address Tab Start

        $this->start_controls_section(
            'sourceit_main_section_apply_email_tab',
            [
                'label' => esc_html__('Email Address For Apply', 'sourceit'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'sourceit_main_section_apply_email',
            [
                'label' => esc_html__('Email Address', 'sourceit'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('someone@example.com', 'sourceit'),
                'placeholder' => esc_html__('Type applying email address here', 'sourceit'),
            ]
        );



        $this->end_controls_section();

        // Apply email address Tab end

        // main section background image Tab Start

        $this->start_controls_section(
            'sourceit_main_section_background_tab',
            [
                'label' => esc_html__('Main Section Background Image', 'sourceit'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'sourceit_main_section_background_img',
            [
                'label' => esc_html__('Main Background Image', 'sourceit'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/asset/imgs/headers/stuff.jpg',
                ],
            ]
        );



        $this->end_controls_section();

        // main section background image Tab end



        // main section content  Tab Start

        $this->start_controls_section(
            'sourceit_main_section_content_tab',
            [
                'label' => esc_html__('Main Section Content', 'sourceit'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'main_section_content_lists',
            [
                'label' => esc_html__('Content Repeater List', 'sourceit'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'job_image',
                        'label' => esc_html__('Job Image', 'sourceit'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/imgs/icons/dishwasher.png',
                        ],
                    ],
                    [
                        'name' => 'job_title',
                        'label' => esc_html__('Job Title', 'sourceit'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Dishwasher', 'sourceit'),
                        'label_block' => true,
                    ],



                    [
                        'name' => 'job_salary',
                        'label' => esc_html__('Job Salary', 'sourceit'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('$17 / hour', 'sourceit'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'job_location',
                        'label' => esc_html__('Job Location', 'sourceit'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__("Oahu's Windward side", 'sourceit'),
                        'label_block' => true,
                    ],


                    [
                        'name' => 'job_full_description',
                        'label' => esc_html__('Job Full Description', 'sourceit'),
                        'type' => \Elementor\Controls_Manager::WYSIWYG,
                        'default' => esc_html__('Overview', 'sourceit'),
                        'placeholder' => esc_html__('Type job full description here', 'sourceit'),
                    ],



                    [
                        'name' => 'job_apply_button_text',
                        'label' => esc_html__('Apply Button Text', 'sourceit'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Apply Now', 'sourceit'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'job_read_button_text',
                        'label' => esc_html__('Read Button Text', 'sourceit'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Read Now', 'sourceit'),
                        'label_block' => true,
                    ],


                ],
                'default' => [
                    [
                        'job_title' => esc_html__('Title #1', 'sourceit'),
                        'job_content' => esc_html__('Item content. Click the edit button to change this text.', 'sourceit'),
                    ],
                    [
                        'job_title' => esc_html__('Title #2', 'sourceit'),
                        'job_content' => esc_html__('Item content. Click the edit button to change this text.', 'sourceit'),
                    ],
                ],
                'title_field' => '{{{ job_title }}}',
            ]
        );

        $this->end_controls_section();

        // main section content Tab end


    }







    protected function render()
    {


        $settings = $this->get_settings_for_display();
        $sourceit_main_section_apply_email = $settings['sourceit_main_section_apply_email'];

        $main_section_content_lists = $settings['main_section_content_lists'];




?>

        <!-- main content  -->
        <section class="team-one thm-gray-bg smaller-padding" style="background:url(<?php echo esc_url($sourceit_main_section_background_img); ?>) repeat">
            <div class="container main-content">
                <div class="row ">

                    <?php
                    if (!empty($main_section_content_lists)) {
                        foreach ($main_section_content_lists as $item) {
                    ?>

                            <div class="col-md-6">


                                <div class="job-listing">
                                    <div class="job-card-kh">
                                        <div class="job-image">
                                            <img src="<?php echo esc_url($item['job_image']['url']); ?>" alt="<?php echo esc_attr($item['job_title']); ?>">
                                        </div>
                                        <div class="job-details">
                                            <div class="job-title"><?php echo esc_html($item['job_title']); ?></div>
                                            <div class="job-salary"><?php echo esc_html($item['job_salary']); ?></div>
                                        </div>
                                        <div class="job-location"><?php echo esc_html($item['job_location']); ?></div>
                                        <div class="job-buttons">
                                            <a href="mailto:<?php echo esc_url($sourceit_main_section_apply_email); ?>" class="apply-button-kh"><?php echo esc_html($item['job_apply_button_text']); ?></a>
                                            <button class="learn-more-button-kh my-model-kh"><?php echo esc_html($item['job_read_button_text']); ?></button>
                                        </div>
                                        <div class="job-full-desc" style="display: none;">
                                            <?php echo $item['job_full_description']; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-model-main-kh">
                                    <div class="custom-model-inner">
                                        <div class="close-btn">×</div>
                                        <div class="custom-model-wrap">
                                            <div class="pop-up-content-wrap">

                                                <div class="job-card-kh">
                                                    <div class="job-image">
                                                        <img src="" alt="">
                                                    </div>
                                                    <div class="job-details">
                                                        <div class="job-title">

                                                        </div>
                                                        <div class="job-salary">

                                                        </div>
                                                    </div>
                                                    <div class="job-location"></div>
                                                    <div class="job-buttons modal-job-buttons">
                                                        <a href="mailto:<?php echo esc_url($sourceit_main_section_apply_email); ?>" class="apply-button-kh">Apply Now</a>

                                                    </div>

                                                    <div class="job-full-desc">

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-overlay"></div>
                                </div>



                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </section>





<?php
    }
}
