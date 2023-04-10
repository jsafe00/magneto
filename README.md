# Magento 2

## Module Registation

### Module location

```
 magneto_marvel\app\code\Magneto\SampleModule
 ```

### Module registration

 ```
 magneto_marvel\app\code\Magneto\SampleModule\registration.php
 ```

### Module versioning and dependency

```
php bin/magento module:enable Magneto_SampleModule
```

```
php bin/magento setup:upgrade
```

### Check DB

```
SELECT * 
FROM setup_module
WHERE module = 'Magneto_SampleModule';
```

## DB Scripts

 ```
magneto_marvel\app\code\Magneto\SampleModule\Setup
 ```

```
php bin/magento setup:upgrade
```

## Model Layer

### Models

```
app\code\Magneto\SampleModule\Model\Item.php
```

### Resource models

```
app\code\Magneto\SampleModule\Model\ResourceModel\Item.php
```

### Collections

```
app\code\Magneto\SampleModule\Model\ResourceModel\Item\Collection.php
```

## Controller Layer

### Routing

```
app\code\Magneto\SampleModule\etc\frontend\routes.xml
```

### Controllers

```
app\code\Magneto\SampleModule\Controller\Index\Index.php
```

### Check

```
localhost/magneto
```

## View Layer

### Blocks

```
app\code\Magneto\SampleModule\Block\Hello.php
```

### Templates

```
app\code\Magneto\SampleModule\view\frontend\templates\hello.phtml
```

### Layouts

```
app\code\Magneto\SampleModule\view\frontend\layout\magneto_index_index.xml
```

```
Magento 2 will generate a factory for any class if you will add Factory suffix for any class. 
```

```
Layout name:
1. frontend value from routes.xml - magneto
2. controller name - index 
3. action name - index

magneto_index_index.xml
```

## Backend Controller and Menu

### Backend Controller

```
app\code\Magneto\SampleModule\Controller\Adminhtml\Index\Index.php
```

```
app\code\Magneto\SampleModule\etc\adminhtml\routes.xml
```

## Backend Menu

```
app\code\Magneto\SampleModule\etc\acl.xml
```

```
app\code\Magneto\SampleModule\etc\adminhtml\menu.xml
```

## check

```
localhost/admin/magneto
```

## Web API Implementation

### Data Interfaces

```
app\code\Magneto\SampleModule\Api\Data\ItemInterface.php
```

### Repositories

```
app\code\Magneto\SampleModule\Api\ItemRepositoryInterface.php
```


### Dependency Injection preferencies configuration

```
app\code\Magneto\SampleModule\Model\ItemRepository.php
```

```
app\code\Magneto\SampleModule\etc\di.xml
```

### Web API configuration

```
app\code\Magneto\SampleModule\etc\webapi.xml
```

### check

```
http://localhost/rest/V1/magneto
```

## UI Rendering Grid

### Grid Collection

```
app\code\Magneto\SampleModule\Controller\Index\Index.php
```

```
app\code\Magneto\SampleModule\etc\di.xml
```

```
app\code\Magneto\SampleModule\Model\ResourceModel\Item\Grid\Collection.php
```

### Listing UI Component configuration

```
app\code\Magneto\SampleModule\view\adminhtml\layout\magneto_index_index.xml
```

```
app\code\Magneto\SampleModule\view\adminhtml\ui_component\magneto_items_grid.xml
```

## UI Rendering Forms

### New and Save Controllers

```
app\code\Magneto\SampleModule\Controller\Adminhtml\Item\NewAction.php
```

```
app\code\Magneto\SampleModule\Controller\Adminhtml\Item\Save.php
```

### UI data provider for a form

```
app\code\Magneto\SampleModule\Ui\DataProvider.php
```

### Form UI Component configuration

```
app\code\Magneto\SampleModule\view\adminhtml\layout\magneto_item_new.xml
```

```
app\code\Magneto\SampleModule\view\adminhtml\ui_component\magneto_item_form.xml
```
