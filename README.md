# Magento 2

## 1. Module Registation

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

## 2. DB Scripts

 ```
magneto_marvel\app\code\Magneto\SampleModule\Setup
 ```

```
php bin/magento setup:upgrade
```

## 3. Model Layer

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

## 4. Controller Layer

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

## 5. View Layer

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

## 6. Backend Controller and Menu

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

## 7. Web API Implementation

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

## 8. UI Rendering Grid

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

## 9. UI Rendering Forms

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

## 10. Extending UI Components

### Extending xml configuration

```
app\code\Magneto\SampleModule\view\adminhtml\ui_component\sales_order_grid.xml
```

### Adding new columns to grids

```
app\code\Magneto\SampleModule\Setup\UpgradeSchema.php
```

```
app\code\Magneto\SampleModule\etc\di.xml
```

```
app\code\Magneto\SampleModule\etc\module.xml
```

### Execute

```
php bin/magento setup:upgrade
```

```
php bin/magento setup:static-content:deploy -f
```

```
php bin/magento cache:flush
```

## 11. Layout Configuration

```
app\code\Magneto\SampleModule\view\frontend\layout\magneto_index_index.xml
```

```
app\code\Magneto\SampleModule\view\frontend\templates\hello.phtml
```
