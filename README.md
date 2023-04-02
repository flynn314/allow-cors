## Experimental library

```php
# 1. add to Kernel.php
'cors.allow' => AllowCors::class,

# 2. add middleware to route
Route::middleware(['cors.allow'])->group(function () {
    Route::get('/my-api-call', 'Controller@index');
});
```
