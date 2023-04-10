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