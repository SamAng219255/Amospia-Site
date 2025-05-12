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
</body>
</html>