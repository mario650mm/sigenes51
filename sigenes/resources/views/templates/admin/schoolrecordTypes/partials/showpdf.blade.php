<div class="ui long modal" id="showView">
	<i class="close icon"></i>
	<div class="header">
		Constancia de @{{ entity.name}}
	</div>
	<div class="content">
		<span ng-bind-html="base | renderHTMLCorrectly"></span>
	</div>
</div>