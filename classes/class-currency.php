<?php
if (!class_exists( 'LSX_Currency' ) ) {
	/**
	 * LSX Currency Main Class
	 */
	class LSX_Currency {
		
		/** @var string */
		public $plugin_slug = 'lsx-currency';

		/** @var array */
		public $options = false;	

		/** @var string */
		public $base_currency = 'USD';		

		/** @var array */
		public $additional_currencies = array();			

		/** @var array */
		public $available_currencies = array();	

		/** @var boolean */
		public $multi_prices = false;		

		/** @var boolean */
		public $app_id = false;		

		/*  Currency Switcher Options */

		/** @var array */
		public $menus = false;		

		/** @var boolean */
		public $display_flags = false;
		/** @var string */
		public $flag_position = 'left';

		/** @var string */
		public $switcher_symbol_position = 'right';		

									

		/**
		 * Constructor
		 */
		public function __construct() {
			$this->set_defaults();
			require_once(LSX_CURRENCY_PATH . '/classes/class-currency-admin.php');
			require_once(LSX_CURRENCY_PATH . '/classes/class-currency-frontend.php');
		}
		/**
		 * Get the options
		 */
		public function set_defaults() {
			$this->available_currencies = array(
				'AUD'	=> __('Australian Dollar',$this->plugin_slug),
				'BRL'	=> __('Brazilian Real',$this->plugin_slug),
				'GBP'	=> __('British Pound Sterling',$this->plugin_slug),
				'BWP'	=> __('Botswana Pula',$this->plugin_slug),
				'CAD'	=> __('Canadian Dollar',$this->plugin_slug),
				'CNY'	=> __('Chinese Yuan',$this->plugin_slug),
				'EUR'	=> __('Euro',$this->plugin_slug),
				'HKD'	=> __('Hong Kong Dollar',$this->plugin_slug),
				'INR'	=> __('Indian Rupee',$this->plugin_slug),
				'IDR'	=> __('Indonesia Rupiah',$this->plugin_slug),
				'ILS'	=> __('Israeli Shekel',$this->plugin_slug),
				'JPY'	=> __('Japanese Yen',$this->plugin_slug),
				'KES'	=> __('Kenyan Shilling',$this->plugin_slug),
				'LAK'	=> __('Laos Kip',$this->plugin_slug),
				'MWK'	=> __('Malawian Kwacha',$this->plugin_slug),
				'MYR'	=> __('Malaysia Ringgit',$this->plugin_slug),
				'MZN'	=> __('Mozambique Metical',$this->plugin_slug),				
				'NAD'	=> __('Namibian Dollar',$this->plugin_slug),
				'NZD'	=> __('New Zealand Dollar',$this->plugin_slug),
				'NOK'	=> __('Norwegian Krone',$this->plugin_slug),
				'NZD'	=> __('New Zealand Dollar',$this->plugin_slug),
				'RUB'	=> __('Russian Ruble',$this->plugin_slug),				
				'SGD'	=> __('Singapore Dollar',$this->plugin_slug),
				'ZAR'	=> __('South African Rand',$this->plugin_slug),
				'SEK'	=> __('Swedish Krona',$this->plugin_slug),
				'CHF'	=> __('Swiss Franc',$this->plugin_slug),
				'TZS'	=> __('Tanzania Shilling',$this->plugin_slug),				
				'USD'	=> __('United States Dollar',$this->plugin_slug),
				'AED'	=> __('United Arab Emirates Dirham',$this->plugin_slug),
				'ZMW'	=> __('Zambian Kwacha',$this->plugin_slug),
				'ZWL'	=> __('Zimbabwean Dollar',$this->plugin_slug)
			);	
			$this->flag_relations = array(
				'AUD'	=> 'au',
				'BRL'	=> 'br',
				'GBP'	=> 'gb',
				'BWP'	=> 'bw',
				'CAD'	=> 'ca',
				'CNY'	=> 'cn',
				'EUR'	=> 'eu',
				'HKD'	=> 'hk',
				'INR'	=> 'in',
				'IDR'	=> 'id',
				'ILS'	=> 'il',
				'JPY'	=> 'jp',
				'KES'	=> 'ke',
				'LAK'	=> 'la',
				'MWK'	=> 'mw',
				'MYR'	=> 'my',
				'MZN'	=> 'mz',				
				'NAD'	=> 'na',
				'NZD'	=> 'nz',
				'NOK'	=> 'no',
				'RUB'	=> 'ru',				
				'SGD'	=> 'sg',
				'ZAR'	=> 'za',
				'SEK'	=> 'se',
				'CHF'	=> 'ch',
				'TZS'	=> 'tz',				
				'USD'	=> 'us',
				'AED'	=> 'ae',
				'ZMW'	=> 'zm',
				'ZWL'	=> 'zw'			
			);					

			$options = get_option('_lsx_lsx-settings',false);
			if(false !== $options){
				$this->options = $options;	

				if(isset($this->options['general']) && isset($this->options['general']['currency'])){
					$this->base_currency = $this->options['general']['currency'];
				}

				if(isset($this->options['general']['additional_currencies']) && is_array($this->options['general']['additional_currencies']) && !empty($this->options['general']['additional_currencies'])){
					$this->additional_currencies = $this->options['general']['additional_currencies'];
				}

				if(isset($this->options['general']['multi_price']) && 'on' === $this->options['general']['multi_price']){
					$this->multi_prices = true;
				}	

				if(isset($this->options['general']['openexchange_api']) && '' !== $this->options['general']['openexchange_api']){
					$this->app_id = $this->options['general']['openexchange_api'];
				}


				if(isset($this->options['general']['currency_menu_switcher']) && is_array($this->options['general']['currency_menu_switcher']) && !empty($this->options['general']['currency_menu_switcher'])){
					$this->menus = $this->options['general']['currency_menu_switcher'];
				}

				if(isset($this->options['general']['display_flags']) && 'on' === $this->options['general']['display_flags']){
					$this->display_flags = true;
				}
				if(isset($this->options['general']['flag_position']) && 'on' === $this->options['general']['flag_position']){
					$this->flag_position = 'right';
				}
				if(isset($this->options['general']['currency_switcher_position']) && 'on' === $this->options['general']['currency_switcher_position']){
					$this->switcher_symbol_position = 'left';
				}					

												
			}
		}

		/**
		 * Returns Currency Flag for currency code provided
		 *
		 * @param string $key
		 *
		 * @return string
		 */
		public function get_currency_flag($key='USD') {
			return '<span class="flag-icon flag-icon-'.$this->flag_relations[$key].'"></span> ';
		}		
	}
	new LSX_Currency();
}