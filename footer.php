<?php wp_footer(); ?>
<script type="text/javascript">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>
<script type="text/javascript" async  data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
<?php
if( is_home() ){
    include 'joyride-setup.php';
}
?>
</body>
</html>


