<?php

if ( ! class_exists( 'snwp_Settings' ) ) {

    /**
     *
     */
    class snwp_Settings{

        /**
         * The name for plugin options
         *
         * @var string
         */
        static $global_option = 'Sports_News_Options';

        /**
         * Updates the General Settings of Plugin
         *
         * @return void
         * @access public
         */
        static function update_options($options) {
            // Save Class variable
            snwp_Main::$settings = $options;

            return update_option(self::$global_option, $options);
        }

        static function delete_options() {
           return delete_option(self::$global_option);
        }



        /**
         * Return the General Settings of Plugin, and set them to default values if they are empty
         *
         * @return array general options of plugin
         * @access public
         */
        static function get_options() {

            // If isn't empty, return class variable
            if (snwp_Main::$settings) {
                return snwp_Main::$settings;
            }

            // default values
            $options = array
            (
                'snwp_author_linking' => '1',
                'snwp_initial_dt' => time(),
            );

            // get saved options
            $saved = get_option(self::$global_option);

            // assign them
            if (!empty($saved)) {
                foreach ($saved as $key => $option) {
                    $options[$key] = $option;
                }
            }

            // update the options if necessary
            if ($saved != $options) {
                update_option(self::$global_option, $options);
            }

            // Save class variable
            snwp_Main::$settings = $options;

            //return the options
            return $options;
        }

    } // end snwp_Settings
}
