		<?php
			if($pageId!='' && isset($pages['entries'][$pageId]['setting'])) {
				$setting=$pages['entries'][$pages['entries'][$pageId]['setting']];
				echo '<div id="setting-note">This stat block goes with the <a href="';
				echo $pages['origin'].$setting['directory'].$setting['file_name'];
				echo '">';
				echo $setting['display_name'];
				echo '</a> setting.</div>';
			}
		?>
		</main>
	</div>
	<footer>
		&copy; 2025 Sam Anguiano
		<?php
			echo '<!--'.number_format(count($pages['entries'])).' pages total.';
			if($pageId!=='' || isset($_GET['path']))
				echo ' '.number_format($childCount).' pages in this section.';
			echo '-->';
		?>
	</footer>
</body>
</html>