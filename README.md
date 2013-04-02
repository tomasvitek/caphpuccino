# fraphpuccino

*fraphpuccino* is very simple static-like website generator written in [Nette](https://nette.org) (PHP).



## How to Install
1. Deploy all files and folders to your webroot.
2. Make folders `app/log` and `app/temp` writable.
3. Create your content.
4. That's it. Enjoy.

## How to Use
- For each page create a template in `app/templates`
- Urls are generated from filename of the template (example: `about-us.latte` will translate to `http://example.com/about-us`)
- You can use normal HTML as well as [Latte Templates](http://doc.nette.org/en/templating)
- Place all your images, stylesheets and scripts into appropriate folders in root directory, you can link to them as `{$baseUrl}/img/fraphpuccino.png`

## Extra Information
- You can set up email address to be notified when something goes wrong in `index.php`
- Templates for `404 Not Found` and `500 Internal Error` pages are located in `app/template/Error`
- Folder `app/log` is used for automatic logging of all errors.
- Folder `app/temp` is used as a cache for templating system.

## Minimal Requirements
- *PHP >= 5.3* (see more at [http://doc.nette.org/en/requirements](http://doc.nette.org/en/requirements))

## License

See `LICENSE.md`.