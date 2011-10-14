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
		<?php if (!$questions): ?>
			<h1>You have no haalp!</h1>
		<?php endif ?>
		<?php foreach ($questions as $q): ?>
		<article>
			<a href="<?php print Router::url('/questions/view/' . $q['Question']['id']) ?>" style="display:block;">
			<header>
				<h3><time class="timeago" datetime="<!--2012-07-17T09:24:17Z--><?php print date('Y-m-d\TH:i:s\ZP', strtotime($q['Question']['expiry'])) ?>"><?php print date('F d, Y', strtotime($q['Question']['expiry'])) ?></time></h3>
			</header>
			<p><?php print $q['Question']['question']?></p>
			<div style="position:relative;">
				<ul><li>Filed In: <span><?php print $q['Category']['name'] ?></span></li></ul>
				<p class="knowitalls"><span><?php print count($q['Comment']) ?></span> Know-it-alls have given haalp.</p>
			</div>
			</a>
		</article>
		<?php endforeach?>
	</div>
</section>