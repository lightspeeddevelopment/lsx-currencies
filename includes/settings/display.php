<div class="uix-field-wrapper">
	<ul class="ui-tab-nav">

		<?php if ( class_exists( 'LSX_Currencies' ) ) { ?>
			<?php $class_active = class_exists( 'LSX_Banners' ) ? '' : 'active'; ?>
			<li><a href="#ui-currencies" class="<?php echo esc_attr( $class_active ); ?>"><?php esc_html_e( 'Currencies', 'lsx-currencies' ); ?></a></li>
		<?php } ?>


		<?php if ( class_exists( 'LSX_Services' ) ) { ?>
			<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) || class_exists( 'LSX_Team' ) || class_exists( 'LSX_Testimonials' ) || class_exists( 'LSX_Projects' ) ) ? '' : 'active'; ?>
			<li><a href="#ui-services" class="<?php echo esc_attr( $class ); ?>"><?php esc_html_e( 'Services', 'lsx-currencies' ); ?></a></li>
		<?php $class = ''; } ?>

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
		<?php $class_active = class_exists( 'LSX_Banners' ) ? '' : 'active'; ?>
		<div id="ui-currencies" class="ui-tab <?php echo esc_attr( $class_active ); ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'currency_switcher' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php if ( class_exists( 'LSX_Team' ) ) { ?>
		<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) ) ? '' : 'active'; ?>
		<div id="ui-team" class="ui-tab <?php echo esc_attr( $class_active ); ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'team' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php if ( class_exists( 'LSX_Testimonials' ) ) { ?>
		<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) || class_exists( 'LSX_Team' ) ) ? '' : 'active'; ?>
		<div id="ui-testimonials" class="ui-tab <?php echo esc_attr( $class_active ); ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'testimonials' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php if ( class_exists( 'LSX_Projects' ) ) { ?>
		<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) || class_exists( 'LSX_Team' ) || class_exists( 'LSX_Testimonials' ) ) ? '' : 'active'; ?>
		<div id="ui-projects" class="ui-tab <?php echo esc_attr( $class_active ); ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'projects' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php if ( class_exists( 'LSX_Services' ) ) { ?>
		<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) || class_exists( 'LSX_Team' ) || class_exists( 'LSX_Testimonials' ) || class_exists( 'LSX_Projects' ) ) ? '' : 'active'; ?>
		<div id="ui-services" class="ui-tab <?php echo esc_attr( $class_active ); ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'services' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php if ( class_exists( 'LSX_Blog_Customizer' ) ) { ?>
		<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) || class_exists( 'LSX_Team' ) || class_exists( 'LSX_Testimonials' ) || class_exists( 'LSX_Projects' ) || class_exists( 'LSX_Services' ) ) ? '' : 'active'; ?>
		<div id="ui-blog-customizer" class="ui-tab <?php echo esc_attr( $class_active ); ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'blog-customizer' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php if ( class_exists( 'LSX_Sharing' ) ) { ?>
		<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) || class_exists( 'LSX_Team' ) || class_exists( 'LSX_Testimonials' ) || class_exists( 'LSX_Projects' ) || class_exists( 'LSX_Services' ) || class_exists( 'LSX_Blog_Customizer' ) ) ? '' : 'active'; ?>
		<div id="ui-sharing" class="ui-tab <?php echo esc_attr( $class_active ); ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'sharing' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php if ( class_exists( 'LSX_Videos' ) ) { ?>
		<?php $class_active = ( class_exists( 'LSX_Banners' ) || class_exists( 'LSX_Currencies' ) || class_exists( 'LSX_Team' ) || class_exists( 'LSX_Testimonials' ) || class_exists( 'LSX_Projects' ) || class_exists( 'LSX_Services' ) || class_exists( 'LSX_Blog_Customizer' ) || class_exists( 'LSX_Sharing' ) ) ? '' : 'active'; ?>
		<div id="ui-videos" class="ui-tab <?php echo esc_attr( $class_active ); ?>">
			<table class="form-table">
				<tbody>
					<?php do_action( 'lsx_framework_display_tab_content', 'videos' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<?php do_action( 'lsx_framework_display_tab_bottom', 'display' ); ?>
</div>
