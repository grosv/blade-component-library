# Laravel 7+ Blade Component Library Template

## About This Repository
This is a template repository from which you can create your own package to share blade components across multiple Laravel apps. If you've never used a template repository, [here are some basic instructions](https://help.github.com/en/github/creating-cloning-and-archiving-repositories/creating-a-repository-from-a-template).

### Customization

If you're going to make your library public (put it in packagist), you must edit composer.json and refactor the classes to reflect your own vendor namespace. If you're just going to use it internally and pull it in from somewhere other than Packagist, you can leave the namespace as is if you like.

### Usage

I have demonstrated a very simple blade component at `src/Components/ExampleComponent.php` that uses `resources/views/components/example_component.blade.php`. The component is used in `resources/views/example.blade.php`.

Create New Component Classes: `src/Components/{MyNewComponentName}.php` 
 
Create New Component Templates: `resources/views/components/{my_new_component_name}.blade.php`

I tested my example component using Nuno Maduro's excellent [Laravel Mojito](https://github.com/nunomaduro/laravel-mojito) package. It makes TDDing components in this library very easy.

