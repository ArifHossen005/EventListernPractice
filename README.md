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


  Task -  17.00 second


https://www.youtube.com/watch?v=VhKkNjbdKK4&t=12s&ab_channel=Ajayyadav