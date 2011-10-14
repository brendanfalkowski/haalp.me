<section id="questions">
	<div class="subcontainer">
		<nav>
			<?php /*
			<div class="article-sort">
				<span>Filter by:</span>
				<select id="filter" class="chzn-select">
					<option value="urgency">Urgency</option>
					<option value="recent">Most Recent</option>
				</select>
			</div>
			*/ ?>
			<?php print $html->link('See All Hallps >>', '/all', array('class' => 'more-haalps')) ?>
		</nav>
		<?php foreach ($questions as $q): ?>
		<article>
			<header>
				<h3><time class="timeago" datetime="<?php print date('Y-m-d\TH:i:s\ZP', strtotime($q['Question']['expiry'])) ?>"><?php print date('F d, Y', strtotime($q['Question']['expiry'])) ?></time></h3>
			</header>
			<p><a href="<?php print Router::url('/questions/view/' . $q['Question']['id']) ?>"><?php print $q['Question']['question']?></a></p>
			<ul><li>Filed In: <a href=""><?php print $q['Category']['name'] ?></a></li></ul>
			<div><?php print count($q['Comment']) ?> know-it-alls have given haalp</div>
		</article>
		<?php endforeach?>
	</div>
</section>