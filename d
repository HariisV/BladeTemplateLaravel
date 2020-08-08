warning: LF will be replaced by CRLF in app/User.php.
The file will have its original line endings in your working directory
warning: LF will be replaced by CRLF in routes/web.php.
The file will have its original line endings in your working directory
[1mdiff --git a/app/User.php b/app/User.php[m
[1mindex e79dab7..b500c65 100644[m
[1m--- a/app/User.php[m
[1m+++ b/app/User.php[m
[36m@@ -2,38 +2,21 @@[m
 [m
 namespace App;[m
 [m
[31m-use Illuminate\Contracts\Auth\MustVerifyEmail;[m
[31m-use Illuminate\Foundation\Auth\User as Authenticatable;[m
[31m-use Illuminate\Notifications\Notifiable;[m
[32m+[m[32muse Illuminate\Database\Eloquent\Model;[m
[32m+[m[32muse App\user;[m
[32m+[m[32muse App\pertanyaan;[m
 [m
[31m-class User extends Authenticatable[m
[32m+[m[32mclass user extends Model[m
 {[m
[31m-    use Notifiable;[m
[31m-[m
[31m-    /**[m
[31m-     * The attributes that are mass assignable.[m
[31m-     *[m
[31m-     * @var array[m
[31m-     */[m
     protected $fillable = [[m
[31m-        'name', 'email', 'password',[m
[31m-    ];[m
[31m-[m
[31m-    /**[m
[31m-     * The attributes that should be hidden for arrays.[m
[31m-     *[m
[31m-     * @var array[m
[31m-     */[m
[31m-    protected $hidden = [[m
[31m-        'password', 'remember_token',[m
[32m+[m[32m        'nama','email','foto'[m
     ];[m
 [m
[31m-    /**[m
[31m-     * The attributes that should be cast to native types.[m
[31m-     *[m
[31m-     * @var array[m
[31m-     */[m
[31m-    protected $casts = [[m
[31m-        'email_verified_at' => 'datetime',[m
[31m-    ];[m
[32m+[m[32m    protected $table = 'user';[m
[32m+[m[41m    [m
[32m+[m[41m    [m
[32m+[m[32m    public function pertanyaan()[m
[32m+[m[32m    {[m
[32m+[m[32m        return $this->HasMany(pertanyaan::class,'user_id', 'id');[m
[32m+[m[32m    }[m
 }[m
[1mdiff --git a/resources/views/includes/script.blade.php b/resources/views/includes/script.blade.php[m
[1mindex cabfb41..1180a89 100644[m
[1m--- a/resources/views/includes/script.blade.php[m
[1m+++ b/resources/views/includes/script.blade.php[m
[36m@@ -1,3 +1,3 @@[m
[31m-<script src="plugins/jquery/jquery.min.js"></script>[m
[31m-<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>[m
[31m-<script src="dist/js/adminlte.min.js"></script>[m
\ No newline at end of file[m
[32m+[m[32m<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>[m
[32m+[m[32m<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>[m
[32m+[m[32m<script src="{{asset('dist/js/adminlte.min.js')}}"></script>[m
\ No newline at end of file[m
[1mdiff --git a/resources/views/includes/sidebar.blade.php b/resources/views/includes/sidebar.blade.php[m
[1mindex 0d71366..f3099d0 100644[m
[1m--- a/resources/views/includes/sidebar.blade.php[m
[1m+++ b/resources/views/includes/sidebar.blade.php[m
[36m@@ -1,6 +1,6 @@[m
  <aside class="main-sidebar sidebar-dark-primary elevation-4">[m
   <a href="index3.html" class="brand-link">[m
[31m-    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"[m
[32m+[m[32m  <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"[m
          style="opacity: .8">[m
     <span class="brand-text font-weight-light">AdminLTE 3</span>[m
   </a>[m
[36m@@ -24,6 +24,25 @@[m
       </p>[m
     </a>[m
   </li>[m
[32m+[m[32m  <li class="nav-item">[m
[32m+[m[32m    <a href="{{route('pertanyaan.index')}}" class="nav-link">[m
[32m+[m[32m        <i class="nav-icon fas fa-tasks"></i>[m
[32m+[m[32m        <p>[m
[32m+[m[32m          Daftar Pertanyaan[m
[32m+[m[32m        </p>[m
[32m+[m[32m    </a>[m
[32m+[m[32m  </li>[m
[32m+[m[32m<small>[m
[32m+[m[32m  <li class="nav-item ml-4">[m
[32m+[m[32m    <a href="{{route('pertanyaan.create')}}" class="nav-link">[m
[32m+[m[32m        <i class="nav-icon fas fa-plus"></i>[m
[32m+[m[32m        <p>[m
[32m+[m[32m           Tambah Pertanyaan[m
[32m+[m[32m        </p>[m
[32m+[m[32m    </a>[m
[32m+[m[32m  </li>[m
[32m+[m[32m</small>[m
[32m+[m
 </ul>[m
 </nav>[m
 </div>[m
[1mdiff --git a/resources/views/includes/style.blade.php b/resources/views/includes/style.blade.php[m
[1mindex 90d25bf..78bfae3 100644[m
[1m--- a/resources/views/includes/style.blade.php[m
[1m+++ b/resources/views/includes/style.blade.php[m
[36m@@ -1,3 +1,3 @@[m
[31m-<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">[m
[31m-<link rel="stylesheet" href="dist/css/adminlte.min.css">[m
[32m+[m[32m<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">[m
[32m+[m[32m<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">[m
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">[m
\ No newline at end of file[m
[1mdiff --git a/routes/web.php b/routes/web.php[m
[1mindex bb70fcd..f66c748 100644[m
[1m--- a/routes/web.php[m
[1m+++ b/routes/web.php[m
[36m@@ -14,4 +14,5 @@[m [muse Illuminate\Support\Facades\Route;[m
 */[m
 [m
 Route::get('/', 'DashboardController@index')->name('home');[m
[31m-Route::get('/data-tables', 'DashboardController@table')->name('table');[m
\ No newline at end of file[m
[32m+[m[32mRoute::get('/data-tables', 'DashboardController@table')->name('table');[m
[32m+[m[32mRoute::resource('/pertanyaan', 'PertanyaanController');[m
\ No newline at end of file[m
