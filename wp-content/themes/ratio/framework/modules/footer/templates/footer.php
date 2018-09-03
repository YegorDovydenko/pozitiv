<?php
/**
 * Footer template part
 */

ratio_edge_get_content_bottom_area(); ?>
</div> <!-- close div.content_inner -->
</div>  <!-- close div.content -->

<?php if (!isset($_REQUEST["ajax_req"]) || $_REQUEST["ajax_req"] != 'yes') { ?>
<footer <?php ratio_edge_class_attribute($footer_classes); ?>>
	<div class="edgtf-footer-inner clearfix">

		<?php

		if($display_footer_top) {
			ratio_edge_get_footer_top();
		}
		if($display_footer_bottom) {
			ratio_edge_get_footer_bottom();
		}
		?>

	</div>
</footer>
<?php } ?>

</div> <!-- close div.edgtf-wrapper-inner  -->
</div> <!-- close div.edgtf-wrapper -->
<?php wp_footer(); ?>

<!-- Begin CallBox code -->
<script >
	(function() {
	var d = new Date(); 
	var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true; 
		em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') 
		+ 'callbox.by/js/callbox.js?' + d.getTime(); var s = document.getElementsByTagName('script')[0];
 		s.parentNode.insertBefore(em, s);
	})();
</script>
<!-- End CallBox code -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '8HtQ9FAtPG';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44554535 = new Ya.Metrika({
                    id:44554535,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44554535" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
    jQuery(document).ready(function(){
        jQuery('#wpcf7-f4372-p4231-o1 form input[type=\"submit\"]').click(function(){
            yaCounter44554535.reachGoal('obratnayasvayz');
        });
    });
</script>
<div style="display: none;" itemscope itemtype="http://schema.org/LocalBusiness">
    <meta itemprop="telephone" content="+375293035404">
    <meta itemprop="telephone" content="+375293035404">
    <meta itemprop="openingHours" content="Mo-Su 10:00-22:00">
    <span itemscope="itemscope" itemtype="https://schema.org/PostalAddress" itemprop="address">
        <meta itemprop="addressCountry" content="Беларусь">
        <meta itemprop="addressLocality" content="Минск">
        <meta itemprop="streetAddress" content="пр-т. Победителей, 65, ТЦ Замок, павильон 413">
    </span>
    <meta itemprop="name" content="Позитив Мебель">
    <meta itemprop="image" content="http://pozitiv-mebel.by/wp-content/uploads/2017/02/log3.png">
    <meta itemprop="priceRange" content="BYN">
</div>
</body>
</html>