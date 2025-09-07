# i-have-id
ID attribute traits and interfaces

#usage

```php
$new = new class ([IHaveIdString::FILED__ID => 'some_id']) implements IHaveIdString {
    use THasIdString;
};

echo $new->getId(); //some_id
```