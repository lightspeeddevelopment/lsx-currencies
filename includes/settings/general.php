<div class="uix-field-wrapper">
	<table class="form-table" style="margin-top:-13px !important;">
		<tbody>
		<tr class="form-field">
			<th class="api_table_heading" style="padding-bottom:0px;" scope="row" colspan="2">
				<label><h3 style="margin-bottom:0px;margin-top: -5px;"> <?php esc_html_e( 'API Settings', 'lsx-currencies' ); ?></h3></label>			
			</th>
		</tr>		
		<?php echo do_action('lsx_framework_dashboard_tab_content_api','general'); ?>
			<tr class="form-field banner-wrap">
				<th class="<?php echo $this->product_slug; ?>_table_heading" style="padding-bottom:0px;" scope="row" colspan="2">
					<label><h3 style="margin-bottom:0px;"> <?php esc_html_e( 'General', 'lsx-currencies' ); ?></h3></label>			
				</th>
			</tr>		
			<?php echo do_action('lsx_framework_dashboard_tab_content','general'); ?>			
		</tbody>
	</table>
	<?php do_action('lsx_framework_dashboard_tab_bottom','genral'); ?>
</div>