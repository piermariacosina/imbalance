<div id="about">
	<a id="gotop">go top</a>
	<h1>About</h1>
	<h2><?php the_field("claim",2); ?></h2>
	<p class="side"><?php the_field("about",2); ?></p>
	<div id="network"></div>
	<div class="cats">
		<ul>
	    	<li><a id="meet_team" href="#meet_team" rel="toggle[team]" title="" <?php if ( is_front_page()) { ?> class="active"<?php } ?> >Meet the team</a></li>
	    </ul>
	</div>
	
	<div id="team">
		<ul class="mcol2">
			<?php the_contributors();?>
		</ul>
	</div>
</div>
        <div id="footer">
        	<div id="copyright">&copy; <?php the_time(__('Y')) ?> <?php bloginfo('name'); ?>. All Rights Reserved.</div>
            <div id="credits">Powered by Wordpress. Designed by <a href="http://wpshower.com/">WPSHOWER</a></div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>
