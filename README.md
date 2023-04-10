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
