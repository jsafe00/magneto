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

## 12. Console Commands

### Magento 2 CLI

```
app\code\Magneto\SampleModule\Console\Command\AddItem.php
```

### Custom console commands implementation

```
app\code\Magneto\SampleModule\etc\di.xml
```

```
php bin/magento cache:flush
```

### Check commands

```
php bin/magento
```

### You should see your created console command

```
 magneto
  magneto:item:add
```

### Call your created command

```
php bin/magento magneto:item:add "Item 5"
```

## 13. Scheduling CRON jobs

### Crontab configuration

```
app\code\Magneto\SampleModule\Cron\AddItem.php
```

### Cron CLI command

```
app\code\Magneto\SampleModule\etc\crontab.xml
```

### Execute 

```
php bin/magento cron:run
```

### Check DB

```
SELECT * FROM cron_schedule WHERE job_code LIKE '%magneto%';
```

## 14. System Configuration

### Create system.xml file

```
app\Magneto\SampleModule\etc\adminhtml\system.xml
```

### Create config.xml file using the values from system.xml

```
app\Magneto\SampleModule\etc\config.xml
```

### Create config file Model 

```
app\Magneto\SampleModule\Model\Config.php
```

### Update Cron->AddItem file and Use the config model

```
app\Magneto\SampleModule\Cron\AddItem.php
```

### Accessing system config values

```
php bin/magento cache:flush
```

#### Go to admin

```
stores->settings->configuration->Magneto
```

## 15 Dependency Injection Configuration


### Add logger

```
app\Magneto\SampleModule\Console\Command\AddItem.php
```

```
php bin/magento cache:flush
```

```
php bin/magento magneto:item:add ItemForDebugSample
```

Check log

```
var\log\debug.log
```

### Create custom debug logger

```
app\Magneto\SampleModule\Model\DebugHandler
```

#### Declare your custom debug handler in di.xml

```
app\Magneto\SampleModule\etc\di.xml
```

```
php bin/magento cache:flush
```

```
php bin/magento magneto:item:add ItemForDebugCustomSample
```

Check custom log

```
var\log\debug_custom.log
```

#### May need to delete:

```
rm -Rf var/cache/*
```

```
rm -Rf var/generated/*
```


