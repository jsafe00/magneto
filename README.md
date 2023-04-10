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
