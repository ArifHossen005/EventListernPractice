##Events uses
 -User Register
 -Order Placed
 -Post Published 

##Listener Uses
 -Notify Admin // etar handle vitore mail send er code hobe 
 -Notify Users // etar handle  vitore mail send er code hobe 
        ],
 --So Events-> listener = Actions 

 ###Files
  -Views (
    1.Create
    )
  -Controllers (
    1.BlogController
    Blog create korbo and event ke dispatch korbo 
    )
  -Models (
    1.Blog
    )
  -Events (
    BlogPublshed(
      public $blog
      then construct er vitore (Blog $blog)
      $this->blog = $blog;
    )
  ) 
  -Listeners (
    AdminNotify
    UserNotify 
  )
  -Migrations (blogs)
  -Route (
    1.   Route::get('/', action: [BlogController::class, 'welcomePage']);
    1.   Route::get('/store', action: [BlogController::class, 'welcomePage'])->name('blog.store');
  )
  ->EventServiceProvider(
     BlogPublished::class => [
            BlogPublishedAdminListener::class,
            BlogPublishedUserListener::class, 
  );


  =====================Queue implements ============
  listener er vitore  implements ShouldQueue likhte hobe 

queue command dibo 


Note : mail er jonno mail trap set up korte hoi 
Command : 
 ->php artisan make:event  BlogPublished
 ->php artisan make:listener NotifyAdminOfBlog --event=BlogPublished
 ->php artisan make:listener NotifyUserOfBlog --event=BlogPublished
 ->php artisan make:observer BlogObserver --model=Blog 
 ->php artisan db:seed
 ->php artisan queue:listen

https://www.youtube.com/watch?v=VhKkNjbdKK4&t=12s&ab_channel=Ajayyadav