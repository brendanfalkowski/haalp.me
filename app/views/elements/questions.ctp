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
			<a href="<?php print Router::url('/questions/view/' . $q['Question']['id']) ?>" style="display:block;">
			<header>
				<h3><time class="timeago" datetime="<?php print date('Y-m-d\TH:i:s\ZP', strtotime($q['Question']['expiry'])) ?>"><?php print date('F d, Y', strtotime($q['Question']['expiry'])) ?></time></h3>
			</header>
			<p><?php print $q['Question']['question']?></p>
			<ul><li>Filed In: <span><?php print $q['Category']['name'] ?></span></li></ul>
			<div><?php print count($q['Comment']) ?> know-it-alls have given haalp</div>
			</a>
		</article>
		<?php endforeach?>
	</div>
</section>