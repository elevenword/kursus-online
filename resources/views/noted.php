SELECT users.id, users.name, users.email, details.id_detail, details.alamat, details.tujuan, details.pendidikan FROM users, details WHERE users.id=details.id;



Route::get('/user/eakun', [ValidasipController::class, 'index']); 
       Route::get('/user/evalidasi/{id}', [ValidasipController::class, 'edit']); 
       Route::put('/user/eakun/update/{id}', [ValidasipController::class, 'update']);
       Route::get('/user/eakun/hapus/{id}', [ValidasipController::class, 'delete']);



       Route::get('/admin/eakun/{id}', [AkunController::class, 'edit']); 
       Route::put('/admin/eakun/update/{id}', [AkunController::class, 'update']);
       Route::get('/admin/eakun/hapus/{id}', [AkunController::class, 'delete']);