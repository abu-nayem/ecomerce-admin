<?php




Route::get('/','Frontend\FrontendController@index');
Route::get('/contact-us','Frontend\FrontendController@contactUs')->name('contact.us');
Route::get('/shop','Frontend\ShopController@index')->name('shop.product');
Route::get('/cart','Frontend\CartController@index')->name('shop.cart');
Route::get('/checkout','Frontend\CheckoutController@index')->name('shop.checkout');
Route::get('/privacy_policy','Frontend\FrontendController@privacy')->name('shop.privacy');
Route::get('/terms_condition','Frontend\FrontendController@terms')->name('shop.terms');
Route::get('/faq','Frontend\FrontendController@faq')->name('shop.faq');
Route::get('/about-us','Frontend\FrontendController@about')->name('shop.about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin Panel controller
Route::get('/admin','Backend\AdminController@index')->name('admin.main');

Route::get('/admin/user','Backend\AdminController@user')->name('admin.newuser');
Route::post('/admin/save','Backend\AdminController@addUser')->name('admin.storeUser');

// category Controller

Route::get('/admin/category','Backend\CategoryController@index')->name('admin.category');
Route::post('/admin/category/store','Backend\CategoryController@storeCategory')->name('admin.category.store');
Route::post('/admin/category/update','Backend\CategoryController@updateCategory')->name('admin.category.update');
Route::get('/admin/category/delete/{id}','Backend\CategoryController@deleteCategory');

// Suncategory Controller
Route::get('/admin/subcategory','Backend\SubcategoryController@index')->name('admin.subcategory');
Route::post('/admin/subcategory/store','Backend\SubcategoryController@storesubcategory')->name('admin.subcategory.store');
Route::post('/admin/subcategory/update','Backend\SubcategoryController@updatesubcategory')->name('admin.subcategory.update');
Route::get('/admin/subcategory/delete/{id}','Backend\SubcategoryController@deletesubcategory');

// Product controller

Route::get('/admin/product','Backend\ProductController@index')->name('admin.product');
Route::post('/admin/product/add','Backend\ProductController@addProduct')->name('admin.addProduct');
Route::get('/admin/product/all','Backend\ProductController@productlist')->name('admin.productlist');
Route::get('/admin/product/stock','Backend\ProductController@stocklist')->name('admin.stocklist');

Route::get('/admin/subcat/{cat_slug}','Backend\ProductController@subcategory');
Route::get('/admin/product/view/{slug}','Backend\ProductController@viewProduct');
Route::get('/admin/product/edit/{id}','Backend\ProductController@editProduct');
Route::post('/admin/product/update','Backend\ProductController@updateProduct');
Route::get('/admin/product/delete/{id}','Backend\ProductController@deleteProduct');

//Order Controller
Route::get('/admin/order/request','Backend\OrderController@index')->name('admin.order.orderReqquest');;
Route::get('/admin/orderp/view/{id}','Backend\OrderController@vieworder');
Route::get('/admin/orderP/accept/{id}','Backend\OrderController@confirm');
Route::get('/admin/order/confirmlist','Backend\OrderController@confirmlist')->name('admin.order.deliverd');

// Customer Controller
Route::get('/admin/customer','CustomerController@index');
// Setting Controller

Route::get('/admin/setting','Backend\SettingController@index')->name('admin.setting');
Route::post('/admin/setting/update','Backend\SettingController@update');
Route::get('/admin/setting/banner','Backend\SettingController@banner')->name('admin.setting.banner');
Route::post('/admin/setting/banner/store','Backend\SettingController@createBanner')->name('admin.banner.store');
Route::post('/admin/setting/banner/update','Backend\SettingController@updateBanner')->name('admin.banner.update');
Route::get('/admin/setting/slider','Backend\SettingController@slider')->name('admin.setting.slider');
Route::post('/admin/setting/slider/new','Backend\SettingController@storeSlider')->name('admin.slider.store');
Route::post('/admin/setting/slider/update','Backend\SettingController@updateSlider')->name('admin.slider.update');

//Basic Controller
Route::get('/admin/basic/privacy','Backend\BasicController@index')->name('admin.privacy.terms');
Route::get('/admin/basic/edit/{id}','Backend\BasicController@edit');
Route::post('/admin/privacy/update','Backend\BasicController@update');

// Faq Controller
Route::get('/admin/faq','Backend\FaqController@index')->name('admin.faq');
Route::get('/admin/faq/create','Backend\FaqController@create')->name('admin.faq.new');
Route::post('/admin/faq/store','Backend\FaqController@store')->name('admin.faq.store');
Route::get('/admin/faq/edit/{id}','Backend\FaqController@edit')->name('admin.faq.edit');
Route::post('/admin/faq/update','Backend\FaqController@update')->name('admin.faq.update');
Route::get('/admin/faq/delete/{id}','Backend\FaqController@destroy');

// Variable Controller
Route::get('/admin/variable','Backend\VariableControler@index')->name('admin.variable');

Route::post('/admin/variable/store','Backend\VariableControler@store')->name('admin.size.store');
Route::post('/admin/variable/color-store','Backend\VariableControler@color')->name('admin.color.store');
Route::post('/admin/variable/update','Backend\VariableControler@updateSize')->name('admin.size.update');
Route::post('/admin/variable/color-update','Backend\VariableControler@updateColor')->name('admin.color.update');
Route::get('/admin/variable/delete/{id}','Backend\VariableControler@destroy');