# Customize your Laravel social sharing icons & designs.

Still in WIP. Check it out again. :)

## Install
	
Pull package through Composer. Run

	composer require setkyar/laravel-customize-shares

## Usage

Add service provider within `config/app.php`

    'providers' => [
       SetKyar\CustomShares\CustomSharesProvider::class,
    ];

	
Run the following command for configuration

	php artisan vendor:publish --tag=config

Run the following command for views

	php artisan vendor:publish --tag=views

## Contributing

 1. Fork it
 2. Create your feature branch (git checkout -b my-new-feature)
 3. Commit your changes (git commit -am 'Added some feature')
 4. Push to the branch (git push origin my-new-feature)
 5. Create new Pull Request

## Security

If you discover any security related issues, please email setkyar16@gmail.com com instead of using the issue tracker.

## Credits