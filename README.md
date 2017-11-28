# LSX Currencies

The LSX Currencies extension adds currency selection functionality to sites, allowing users to view your products in whatever currencies you choose to sell in.

## Setup

### 1: Install NPM
https://nodejs.org/en/

### 2: Install Gulp
`npm install`

This will run the package.json file and download the list of modules to a "node_modules" folder in the plugin.

### 3: Gulp Commands
`gulp watch`
`gulp compile-sass`
`gulp compile-js`
`gulp wordpress-lang`


### Filters
`apply_filters( 'lsx_currencies_base_currency', $this->options['general']['currency'] )`
