use App\Http\Controllers\Admin\ProductController;

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
});
