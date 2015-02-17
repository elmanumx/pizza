
<script type="text/javascript">
var opcion="";
	function modal(num){
		if(num==1){
		var mo='#modificar';
			opcion="#modificar";
		}else{
			var mo='#add';
			opcion="#add";
		}
		$(mo).modal("hide");
		$("#iconos").modal("show");
	}

	function icono(valor){
		if(opcion=="#add"){
			txt="icono";
		}else{
			txt="icono2";
		}
		document.getElementById(txt).value=valor.className;	
		$("#iconos").modal("hide");
		$(opcion).modal("show");

	}

</script>

<div class="modal fade" id="iconos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
		<i class="icon-file-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-glass icon-5x" onclick="icono(this)" ></i>
		<i class="icon-music icon-5x" onclick="icono(this)"></i>
		<i class="icon-search icon-5x" onclick="icono(this)"></i>
		<i class="icon-envelope-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-heart icon-5x" onclick="icono(this)"></i>
		<i class="icon-star icon-5x" onclick="icono(this)"></i>
		<i class="icon-star-empty icon-5x" onclick="icono(this)"></i>
		<i class="icon-user icon-5x" onclick="icono(this)"></i>
		<i class="icon-film icon-5x" onclick="icono(this)"></i>
		<i class="icon-th-large icon-5x" onclick="icono(this)"></i>
		<i class="icon-th icon-5x" onclick="icono(this)"></i>
		<i class="icon-th-list icon-5x" onclick="icono(this)"></i>
		<i class="icon-ok icon-5x" onclick="icono(this)"></i>
		<i class="icon-remove icon-5x" onclick="icono(this)"></i>
		<i class="icon-zoom-in icon-5x" onclick="icono(this)"></i>
		<i class="icon-zoom-out icon-5x" onclick="icono(this)"></i>
		<i class="icon-off icon-5x" onclick="icono(this)"></i>
		<i class="icon-power-off icon-5x" onclick="icono(this)"></i>
		<i class="icon-signal icon-5x" onclick="icono(this)"></i>
		<i class="icon-cog icon-5x" onclick="icono(this)"></i>
		<i class="icon-gear icon-5x" onclick="icono(this)"></i>
		<i class="icon-trash icon-5x" onclick="icono(this)"></i>
		<i class="icon-home icon-5x" onclick="icono(this)"></i>
		<i class="icon-file-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-time icon-5x" onclick="icono(this)"></i>
		<i class="icon-road icon-5x" onclick="icono(this)"></i>
		<i class="icon-download-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-download icon-5x" onclick="icono(this)"></i>
		<i class="icon-upload icon-5x" onclick="icono(this)"></i>
		<i class="icon-inbox icon-5x" onclick="icono(this)"></i>
		<i class="icon-play-circle icon-5x" onclick="icono(this)"></i>
		<i class="icon-repeat icon-5x" onclick="icono(this)"></i>
		<i class="icon-rotate-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-refresh icon-5x" onclick="icono(this)"></i>
		<i class="icon-list-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-lock icon-5x" onclick="icono(this)"></i>
		<i class="icon-flag icon-5x" onclick="icono(this)"></i>
		<i class="icon-headphones icon-5x" onclick="icono(this)"></i>
		<i class="icon-volume-off icon-5x" onclick="icono(this)"></i>
		<i class="icon-volume-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-volume-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-qrcode icon-5x" onclick="icono(this)"></i>
		<i class="icon-barcode icon-5x" onclick="icono(this)"></i>
		<i class="icon-tag icon-5x" onclick="icono(this)"></i>
		<i class="icon-tags icon-5x" onclick="icono(this)"></i>
		<i class="icon-book icon-5x" onclick="icono(this)"></i>
		<i class="icon-bookmark icon-5x" onclick="icono(this)"></i>
		<i class="icon-print icon-5x" onclick="icono(this)"></i>
		<i class="icon-camera icon-5x" onclick="icono(this)"></i>
		<i class="icon-font icon-5x" onclick="icono(this)"></i>
		<i class="icon-bold icon-5x" onclick="icono(this)"></i>
		<i class="icon-italic icon-5x" onclick="icono(this)"></i>
		<i class="icon-text-height icon-5x" onclick="icono(this)"></i>
		<i class="icon-text-width icon-5x" onclick="icono(this)"></i>
		<i class="icon-align-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-align-center icon-5x" onclick="icono(this)"></i>
		<i class="icon-align-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-align-justify icon-5x" onclick="icono(this)"></i>
		<i class="icon-list icon-5x" onclick="icono(this)"></i>
		<i class="icon-indent-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-indent-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-facetime-video icon-5x" onclick="icono(this)"></i>
		<i class="icon-picture icon-5x" onclick="icono(this)"></i>
		<i class="icon-pencil icon-5x" onclick="icono(this)"></i>
		<i class="icon-map-marker icon-5x" onclick="icono(this)"></i>
		<i class="icon-adjust icon-5x" onclick="icono(this)"></i>
		<i class="icon-tint icon-5x" onclick="icono(this)"></i>
		<i class="icon-edit icon-5x" onclick="icono(this)"></i>
		<i class="icon-share icon-5x" onclick="icono(this)"></i>
		<i class="icon-check icon-5x" onclick="icono(this)"></i>
		<i class="icon-move icon-5x" onclick="icono(this)"></i>
		<i class="icon-step-backward icon-5x" onclick="icono(this)"></i>
		<i class="icon-fast-backward icon-5x" onclick="icono(this)"></i>
		<i class="icon-backward icon-5x" onclick="icono(this)"></i>
		<i class="icon-play icon-5x" onclick="icono(this)"></i>
		<i class="icon-pause icon-5x" onclick="icono(this)"></i>
		<i class="icon-stop icon-5x" onclick="icono(this)"></i>
		<i class="icon-forward icon-5x" onclick="icono(this)"></i>
		<i class="icon-fast-forward icon-5x" onclick="icono(this)"></i>
		<i class="icon-step-forward icon-5x" onclick="icono(this)"></i>
		<i class="icon-eject icon-5x" onclick="icono(this)"></i>
		<i class="icon-chevron-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-chevron-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-plus-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-minus-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-remove-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-ok-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-question-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-info-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-screenshot icon-5x" onclick="icono(this)"></i>
		<i class="icon-remove-circle icon-5x" onclick="icono(this)"></i>
		<i class="icon-ok-circle icon-5x" onclick="icono(this)"></i>
		<i class="icon-ban-circle icon-5x" onclick="icono(this)"></i>
		<i class="icon-arrow-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-arrow-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-arrow-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-arrow-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-share-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-mail-forward icon-5x" onclick="icono(this)"></i>
		<i class="icon-resize-full icon-5x" onclick="icono(this)"></i>
		<i class="icon-resize-small icon-5x" onclick="icono(this)"></i>
		<i class="icon-plus icon-5x" onclick="icono(this)"></i>
		<i class="icon-minus icon-5x" onclick="icono(this)"></i>
		<i class="icon-asterisk icon-5x" onclick="icono(this)"></i>
		<i class="icon-exclamation-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-gift icon-5x" onclick="icono(this)"></i>
		<i class="icon-leaf icon-5x" onclick="icono(this)"></i>
		<i class="icon-fire icon-5x" onclick="icono(this)"></i>
		<i class="icon-eye-open icon-5x" onclick="icono(this)"></i>
		<i class="icon-eye-close icon-5x" onclick="icono(this)"></i>
		<i class="icon-warning-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-plane icon-5x" onclick="icono(this)"></i>
		<i class="icon-calendar icon-5x" onclick="icono(this)"></i>
		<i class="icon-random icon-5x" onclick="icono(this)"></i>
		<i class="icon-comment icon-5x" onclick="icono(this)"></i>
		<i class="icon-magnet icon-5x" onclick="icono(this)"></i>
		<i class="icon-chevron-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-chevron-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-retweet icon-5x" onclick="icono(this)"></i>
		<i class="icon-shopping-cart icon-5x" onclick="icono(this)"></i>
		<i class="icon-folder-close icon-5x" onclick="icono(this)"></i>
		<i class="icon-folder-open icon-5x" onclick="icono(this)"></i>
		<i class="icon-resize-vertical icon-5x" onclick="icono(this)"></i>
		<i class="icon-resize-horizontal icon-5x" onclick="icono(this)"></i>
		<i class="icon-bar-chart icon-5x" onclick="icono(this)"></i>
		<i class="icon-twitter-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-facebook-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-camera-retro icon-5x" onclick="icono(this)"></i>
		<i class="icon-key icon-5x" onclick="icono(this)"></i>
		<i class="icon-cogs icon-5x" onclick="icono(this)"></i>
		<i class="icon-gears icon-5x" onclick="icono(this)"></i>
		<i class="icon-comments icon-5x" onclick="icono(this)"></i>
		<i class="icon-thumbs-up-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-thumbs-down-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-star-half icon-5x" onclick="icono(this)"></i>
		<i class="icon-heart-empty icon-5x" onclick="icono(this)"></i>
		<i class="icon-signout icon-5x" onclick="icono(this)"></i>
		<i class="icon-linkedin-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-pushpin icon-5x" onclick="icono(this)"></i>
		<i class="icon-external-link icon-5x" onclick="icono(this)"></i>
		<i class="icon-signin icon-5x" onclick="icono(this)"></i>
		<i class="icon-trophy icon-5x" onclick="icono(this)"></i>
		<i class="icon-github-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-upload-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-lemon icon-5x" onclick="icono(this)"></i>
		<i class="icon-phone icon-5x" onclick="icono(this)"></i>
		<i class="icon-check-empty icon-5x" onclick="icono(this)"></i>
		<i class="icon-unchecked icon-5x" onclick="icono(this)"></i>
		<i class="icon-bookmark-empty icon-5x" onclick="icono(this)"></i>
		<i class="icon-phone-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-twitter icon-5x" onclick="icono(this)"></i>
		<i class="icon-facebook icon-5x" onclick="icono(this)"></i>
		<i class="icon-github icon-5x" onclick="icono(this)"></i>
		<i class="icon-unlock icon-5x" onclick="icono(this)"></i>
		<i class="icon-credit-card icon-5x" onclick="icono(this)"></i>
		<i class="icon-rss icon-5x" onclick="icono(this)"></i>
		<i class="icon-hdd icon-5x" onclick="icono(this)"></i>
		<i class="icon-bullhorn icon-5x" onclick="icono(this)"></i>
		<i class="icon-bell icon-5x" onclick="icono(this)"></i>
		<i class="icon-certificate icon-5x" onclick="icono(this)"></i>
		<i class="icon-hand-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-hand-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-hand-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-hand-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-circle-arrow-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-circle-arrow-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-circle-arrow-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-circle-arrow-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-globe icon-5x" onclick="icono(this)"></i>
		<i class="icon-wrench icon-5x" onclick="icono(this)"></i>
		<i class="icon-tasks icon-5x" onclick="icono(this)"></i>
		<i class="icon-filter icon-5x" onclick="icono(this)"></i>
		<i class="icon-briefcase icon-5x" onclick="icono(this)"></i>
		<i class="icon-fullscreen icon-5x" onclick="icono(this)"></i>
		<i class="icon-group icon-5x" onclick="icono(this)"></i>
		<i class="icon-link icon-5x" onclick="icono(this)"></i>
		<i class="icon-cloud icon-5x" onclick="icono(this)"></i>
		<i class="icon-beaker icon-5x" onclick="icono(this)"></i>
		<i class="icon-cut icon-5x" onclick="icono(this)"></i>
		<i class="icon-copy icon-5x" onclick="icono(this)"></i>
		<i class="icon-paper-clip icon-5x" onclick="icono(this)"></i>
		<i class="icon-paperclip icon-5x" onclick="icono(this)"></i>
		<i class="icon-save icon-5x" onclick="icono(this)"></i>
		<i class="icon-sign-blank icon-5x" onclick="icono(this)"></i>
		<i class="icon-reorder icon-5x" onclick="icono(this)"></i>
		<i class="icon-list-ul icon-5x" onclick="icono(this)"></i>
		<i class="icon-list-ol icon-5x" onclick="icono(this)"></i>
		<i class="icon-strikethrough icon-5x" onclick="icono(this)"></i>
		<i class="icon-underline icon-5x" onclick="icono(this)"></i>
		<i class="icon-table icon-5x" onclick="icono(this)"></i>
		<i class="icon-magic icon-5x" onclick="icono(this)"></i>
		<i class="icon-truck icon-5x" onclick="icono(this)"></i>
		<i class="icon-pinterest icon-5x" onclick="icono(this)"></i>
		<i class="icon-pinterest-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-google-plus-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-google-plus icon-5x" onclick="icono(this)"></i>
		<i class="icon-money icon-5x" onclick="icono(this)"></i>
		<i class="icon-caret-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-caret-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-caret-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-caret-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-columns icon-5x" onclick="icono(this)"></i>
		<i class="icon-sort icon-5x" onclick="icono(this)"></i>
		<i class="icon-sort-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-sort-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-envelope icon-5x" onclick="icono(this)"></i>
		<i class="icon-linkedin icon-5x" onclick="icono(this)"></i>
		<i class="icon-undo icon-5x" onclick="icono(this)"></i>
		<i class="icon-rotate-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-legal icon-5x" onclick="icono(this)"></i>
		<i class="icon-dashboard icon-5x" onclick="icono(this)"></i>
		<i class="icon-comment-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-comments-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-bolt icon-5x" onclick="icono(this)"></i>
		<i class="icon-sitemap icon-5x" onclick="icono(this)"></i>
		<i class="icon-umbrella icon-5x" onclick="icono(this)"></i>
		<i class="icon-paste icon-5x" onclick="icono(this)"></i>
		<i class="icon-lightbulb icon-5x" onclick="icono(this)"></i>
		<i class="icon-exchange icon-5x" onclick="icono(this)"></i>
		<i class="icon-cloud-download icon-5x" onclick="icono(this)"></i>
		<i class="icon-cloud-upload icon-5x" onclick="icono(this)"></i>
		<i class="icon-user-md icon-5x" onclick="icono(this)"></i>
		<i class="icon-stethoscope icon-5x" onclick="icono(this)"></i>
		<i class="icon-suitcase icon-5x" onclick="icono(this)"></i>
		<i class="icon-bell-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-coffee icon-5x" onclick="icono(this)"></i>
		<i class="icon-food icon-5x" onclick="icono(this)"></i>
		<i class="icon-file-text-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-building icon-5x" onclick="icono(this)"></i>
		<i class="icon-hospital icon-5x" onclick="icono(this)"></i>
		<i class="icon-ambulance icon-5x" onclick="icono(this)"></i>
		<i class="icon-medkit icon-5x" onclick="icono(this)"></i>
		<i class="icon-fighter-jet icon-5x" onclick="icono(this)"></i>
		<i class="icon-beer icon-5x" onclick="icono(this)"></i>
		<i class="icon-h-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-plus-sign-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-double-angle-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-double-angle-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-double-angle-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-double-angle-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-angle-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-angle-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-angle-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-angle-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-desktop icon-5x" onclick="icono(this)"></i>
		<i class="icon-laptop icon-5x" onclick="icono(this)"></i>
		<i class="icon-tablet icon-5x" onclick="icono(this)"></i>
		<i class="icon-mobile-phone icon-5x" onclick="icono(this)"></i>
		<i class="icon-circle-blank icon-5x" onclick="icono(this)"></i>
		<i class="icon-quote-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-quote-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-spinner icon-5x" onclick="icono(this)"></i>
		<i class="icon-circle icon-5x" onclick="icono(this)"></i>
		<i class="icon-reply icon-5x" onclick="icono(this)"></i>
		<i class="icon-mail-reply icon-5x" onclick="icono(this)"></i>
		<i class="icon-github-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-folder-close-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-folder-open-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-expand-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-collapse-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-smile icon-5x" onclick="icono(this)"></i>
		<i class="icon-frown icon-5x" onclick="icono(this)"></i>
		<i class="icon-meh icon-5x" onclick="icono(this)"></i>
		<i class="icon-gamepad icon-5x" onclick="icono(this)"></i>
		<i class="icon-keyboard icon-5x" onclick="icono(this)"></i>
		<i class="icon-flag-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-flag-checkered icon-5x" onclick="icono(this)"></i>
		<i class="icon-terminal icon-5x" onclick="icono(this)"></i>
		<i class="icon-code icon-5x" onclick="icono(this)"></i>
		<i class="icon-reply-all icon-5x" onclick="icono(this)"></i>
		<i class="icon-mail-reply-all icon-5x" onclick="icono(this)"></i>
		<i class="icon-star-half-empty icon-5x" onclick="icono(this)"></i>
		<i class="icon-star-half-full icon-5x" onclick="icono(this)"></i>
		<i class="icon-location-arrow icon-5x" onclick="icono(this)"></i>
		<i class="icon-crop icon-5x" onclick="icono(this)"></i>
		<i class="icon-code-fork icon-5x" onclick="icono(this)"></i>
		<i class="icon-unlink icon-5x" onclick="icono(this)"></i>
		<i class="icon-question icon-5x" onclick="icono(this)"></i>
		<i class="icon-info icon-5x" onclick="icono(this)"></i>
		<i class="icon-exclamation icon-5x" onclick="icono(this)"></i>
		<i class="icon-superscript icon-5x" onclick="icono(this)"></i>
		<i class="icon-subscript icon-5x" onclick="icono(this)"></i>
		<i class="icon-eraser icon-5x" onclick="icono(this)"></i>
		<i class="icon-puzzle-piece icon-5x" onclick="icono(this)"></i>
		<i class="icon-microphone icon-5x" onclick="icono(this)"></i>
		<i class="icon-microphone-off icon-5x" onclick="icono(this)"></i>
		<i class="icon-shield icon-5x" onclick="icono(this)"></i>
		<i class="icon-calendar-empty icon-5x" onclick="icono(this)"></i>
		<i class="icon-fire-extinguisher icon-5x" onclick="icono(this)"></i>
		<i class="icon-rocket icon-5x" onclick="icono(this)"></i>
		<i class="icon-maxcdn icon-5x" onclick="icono(this)"></i>
		<i class="icon-chevron-sign-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-chevron-sign-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-chevron-sign-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-chevron-sign-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-html5 icon-5x" onclick="icono(this)"></i>
		<i class="icon-css3 icon-5x" onclick="icono(this)"></i>
		<i class="icon-anchor icon-5x" onclick="icono(this)"></i>
		<i class="icon-unlock-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-bullseye icon-5x" onclick="icono(this)"></i>
		<i class="icon-ellipsis-horizontal icon-5x" onclick="icono(this)"></i>
		<i class="icon-ellipsis-vertical icon-5x" onclick="icono(this)"></i>
		<i class="icon-rss-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-play-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-ticket icon-5x" onclick="icono(this)"></i>
		<i class="icon-minus-sign-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-check-minus icon-5x" onclick="icono(this)"></i>
		<i class="icon-level-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-level-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-check-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-edit-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-external-link-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-share-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-compass icon-5x" onclick="icono(this)"></i>
		<i class="icon-collapse icon-5x" onclick="icono(this)"></i>
		<i class="icon-collapse-top icon-5x" onclick="icono(this)"></i>
		<i class="icon-expand icon-5x" onclick="icono(this)"></i>
		<i class="icon-eur icon-5x" onclick="icono(this)"></i>
		<i class="icon-euro icon-5x" onclick="icono(this)"></i>
		<i class="icon-gbp icon-5x" onclick="icono(this)"></i>
		<i class="icon-usd icon-5x" onclick="icono(this)"></i>
		<i class="icon-dollar icon-5x" onclick="icono(this)"></i>
		<i class="icon-inr icon-5x" onclick="icono(this)"></i>
		<i class="icon-rupee icon-5x" onclick="icono(this)"></i>
		<i class="icon-jpy icon-5x" onclick="icono(this)"></i>
		<i class="icon-yen icon-5x" onclick="icono(this)"></i>
		<i class="icon-cny icon-5x" onclick="icono(this)"></i>
		<i class="icon-renminbi icon-5x" onclick="icono(this)"></i>
		<i class="icon-krw icon-5x" onclick="icono(this)"></i>
		<i class="icon-won icon-5x" onclick="icono(this)"></i>
		<i class="icon-btc icon-5x" onclick="icono(this)"></i>
		<i class="icon-bitcoin icon-5x" onclick="icono(this)"></i>
		<i class="icon-file icon-5x" onclick="icono(this)"></i>
		<i class="icon-file-text icon-5x" onclick="icono(this)"></i>
		<i class="icon-sort-by-alphabet icon-5x" onclick="icono(this)"></i>
		<i class="icon-sort-by-alphabet-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-sort-by-attributes icon-5x" onclick="icono(this)"></i>
		<i class="icon-sort-by-attributes-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-sort-by-order icon-5x" onclick="icono(this)"></i>
		<i class="icon-sort-by-order-alt icon-5x" onclick="icono(this)"></i>
		<i class="icon-thumbs-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-thumbs-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-youtube-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-youtube icon-5x" onclick="icono(this)"></i>
		<i class="icon-xing icon-5x" onclick="icono(this)"></i>
		<i class="icon-xing-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-youtube-play icon-5x" onclick="icono(this)"></i>
		<i class="icon-dropbox icon-5x" onclick="icono(this)"></i>
		<i class="icon-stackexchange icon-5x" onclick="icono(this)"></i>
		<i class="icon-instagram icon-5x" onclick="icono(this)"></i>
		<i class="icon-flickr icon-5x" onclick="icono(this)"></i>
		<i class="icon-adn icon-5x" onclick="icono(this)"></i>
		<i class="icon-bitbucket icon-5x" onclick="icono(this)"></i>
		<i class="icon-bitbucket-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-tumblr icon-5x" onclick="icono(this)"></i>
		<i class="icon-tumblr-sign icon-5x" onclick="icono(this)"></i>
		<i class="icon-long-arrow-down icon-5x" onclick="icono(this)"></i>
		<i class="icon-long-arrow-up icon-5x" onclick="icono(this)"></i>
		<i class="icon-long-arrow-left icon-5x" onclick="icono(this)"></i>
		<i class="icon-long-arrow-right icon-5x" onclick="icono(this)"></i>
		<i class="icon-apple icon-5x" onclick="icono(this)"></i>
		<i class="icon-windows icon-5x" onclick="icono(this)"></i>
		<i class="icon-android icon-5x" onclick="icono(this)"></i>
		<i class="icon-linux icon-5x" onclick="icono(this)"></i>
		<i class="icon-dribbble icon-5x" onclick="icono(this)"></i>
		<i class="icon-skype icon-5x" onclick="icono(this)"></i>
		<i class="icon-foursquare icon-5x" onclick="icono(this)"></i>
		<i class="icon-trello icon-5x" onclick="icono(this)"></i>
		<i class="icon-female icon-5x" onclick="icono(this)"></i>
		<i class="icon-male icon-5x" onclick="icono(this)"></i>
		<i class="icon-gittip icon-5x" onclick="icono(this)"></i>
		<i class="icon-sun icon-5x" onclick="icono(this)"></i>
		<i class="icon-moon icon-5x" onclick="icono(this)"></i>
		<i class="icon-archive icon-5x" onclick="icono(this)"></i>
		<i class="icon-bug icon-5x" onclick="icono(this)"></i>
		<i class="icon-vk icon-5x" onclick="icono(this)"></i>
		<i class="icon-weibo icon-5x" onclick="icono(this)"></i>
		<i class="icon-renren icon-5x" onclick="icono(this)"></i>
				





			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

