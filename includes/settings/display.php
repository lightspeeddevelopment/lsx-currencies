<div class="uix-field-wrapper">
	<ul class="ui-tab-nav">
		<?php if ( class_exists( 'LSX_Banners' ) ) { ?>
			<li><a href="#ui-placeholders" class="active"><?php esc_html_e( 'Placeholders', 'lsx-currencies' ); ?></a></li>
		<?php } ?>

		<?php if ( class_exists( 'LSX_Currencies' ) ) { ?>
			<?php $class_active = class_exists( 'LSX_Banners' ) ? '' : 'active' ?>
			<li><a href="#ui-currencies" class="<?php echo esc_attr( $class_active ) ?>"><?php esc_html_e( 'Currencies', 'lsx-currencies' ); ?></a></li>
		<?php } ?>

		<?php if ( class_exists( 'LSX_Team' ) ) { ?>
			<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) ) ? '' : 'active' ?>
			<li><a href="#ui-team" class="<?php echo esc_attr( $class_active ) ?>"><?php esc_html_e( 'Team', 'lsx-currencies' ); ?></a></li>
		<?php } ?>
	</ul>

	<?php if ( class_exists( 'LSX_Banners' ) ) { ?>
		<div id="ui-placeholders" class="ui-tab active">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'placeholders' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php if ( class_exists( 'LSX_Currencies' ) ) { ?>
		<?php $class_active = class_exists( 'LSX_Banners' ) ? '' : 'active' ?>
		<div id="ui-currencies" class="ui-tab <?php echo esc_attr( $class_active ) ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'currency_switcher' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php if ( class_exists( 'LSX_Team' ) ) { ?>
		<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) ) ? '' : 'active' ?>
		<div id="ui-team" class="ui-tab <?php echo esc_attr( $class_active ) ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'team' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php do_action( 'lsx_framework_display_tab_bottom', 'display' ); ?>
</div>
