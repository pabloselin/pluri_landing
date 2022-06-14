<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pluriversidad_landing
 */

?>

<footer id="colophon" class="site-footer">
  <div class="site-info">
     <p>Este proyecto cuenta con el apoyo de Fundación Daniel y Nina Carasso</p>
     <p>
        <div class="augsquare">
            <span id="timing"></span>
        </div>
    </p>
</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
    
    <script>
        const timing = document.getElementById("timing");
        timing.innerText = "esta página ha tardado " + (parseFloat(window.performance.timing.responseEnd) * 0.00000001) + " milisegundos en generarse en el navegador";
    </script>

<?php wp_footer(); ?>

</body>
</html>
