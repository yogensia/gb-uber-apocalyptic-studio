?>

	<!-- SUBMISSIONS -->
	<div class="ContentColumn FullColumn" id="ContentSubmissions">
		<div class="ContentColumn OneColumn">
			<?= $d["_aModules"]["_sSkinReleases"] ?>
		</div>
		<div class="ContentColumn OneColumn last">
			<?= $d["_aModules"]["_sWips"] ?>
		</div>
		<div class="ContentColumn OneColumn">
			<?= $d["_aModules"]["_sModelReleases"] ?>
		</div>
		<div class="ContentColumn OneColumn">
			<?= $d["_aModules"]["_sTextureReleases"] ?>
		</div>
		<!-- DISABLED MODULES
		<div class="ContentColumn OneColumn">
			<= $d["_aModules"]["_sMapReleases"] ?>
		</div>
		<div class="ContentColumn OneColumn">
			<= $d["_aModules"]["_sTutorialReleases"] ?>
		</div>
		-->
	</div>

	<!-- MISC MODULES AND MESSAGES -->
	<div class="ContentColumn FullColumn" id="ContentExtras">
		<div class="ContentColumn OneHalfColumn">
		<?= $d["_aModules"]["_sIdentity"] ?>
		<?= $d["_aModules"]["_sForums"] ?>
		<?= $d["_aModules"]["_sProjects"] ?>
		<?= $d["_aModules"]["_sRank"] ?>
		<?= $d["_aModules"]["_sTeamMembersList"] ?>
		</div>
		<div class="ContentColumn OneHalfColumn last" id="ContentMessages">
			<h3>Messages</h3>
		<?= $d["_aModules"]["_sPostAddFormRequester"] ?>
		<?= $d["_aModules"]["_sProfileMessages"] ?>
		</div>
	</div>
<?