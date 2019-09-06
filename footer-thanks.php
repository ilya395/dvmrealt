		<?php
			wp_footer();
		?> 		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&amp;sensor=false"></script>
        <!-- <?php
            var_dump($project);
            if($project == "Атлантис"){
                echo "<script>get_file_url('" . get_template_directory_uri() ."/documents/Atlantis.pdf');</script>";
            } elseif($project == "Малиновка"){
                echo "<script>get_file_url('" . get_template_directory_uri() . "/documents/Malinovka.pdf');</script>";
            } elseif($project == "Норвежский"){
                echo "<script>get_file_url('" . get_template_directory_uri() . "/documents/Norvegian.pdf');</script>";
            } elseif($project == "Привилегия"){
                echo "<script>get_file_url('" . get_template_directory_uri() . "/documents/Privilege.pdf');</script>";
            } elseif($project == "Richmond"){
                echo "<script>get_file_url('" . get_template_directory_uri() . "/documents/Richmond.pdf');</script>";
            } elseif($project == "Skyline"){
                echo "<script>get_file_url('" . get_template_directory_uri() . "/documents/Skyline.pdf');</script>";
            } else {
                echo "<script>console.log('Чот нету файла!');</script>";
            }
        ?> -->
    <!-- <script>
        jQuery(function($) {
            // code
            get_file_url("<?php echo get_template_directory_uri() . "/documents/Atlantis.pdf" ?>");
        });
    </script> -->
    </body>

</html>