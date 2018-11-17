## Creating an ACF SubModule



#### 1. Create a file in the ```submodules``` folder with the same name as your module. Inside, write a class that extends ACFSubModule
Note: The ```modules``` folder is for stand-alone modules. The ```submodules``` folder is for anything that will go in the "Free For All" module.

```php
// ImageSlider.php

class ImageSliderModule extends ACFSubModule {
}
```

#### 2. Implement getKey(), getName(), and getLabel() public functions

```php
public function getKey() {
	return __( "image_slider" );
}

public function getName() {
	return self::getKey();
}

public function getLabel() {
	return __( "Image Slider" );
}
```

#### 3. Create a getFields() function that returns an array of the ACF fields

The fields can be added one of two ways:

* Export the ACF code from the plugin and copy/paste the fields into the return statement.
* Use the ACFModuleFields class to create the fields.

```php
function getFields() {
	return [
		// fields
	]
}
```

#### 4. Require the file in modules.php

```php
require_once __DIR__."/submodules/ImageSlider.php";
```

#### 5. Register the module or submodule in functions.php

```php
ACFModuleLoader::registerSubModule(new ImageSliderModule);
```


# To Do
* Create common submodules
