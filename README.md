##Events uses
 -User Register
 -Order Placed
 -Post Published 

##Listener Uses
 -Notify Admin 
 -Notify Users 
 --So Events-> listener = Actions 

 ###Files
  -Views (
    1.Create
    )
  -Controllers (
    1.BlogController
    )
  -Models (
    1.Blog
    )
  -Events
  -Listeners ()
  -Migrations (blogs)
  -Route (
    1.   Route::get('/', action: [BlogController::class, 'welcomePage']);
  )


  Task - 


