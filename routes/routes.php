Route::get('/', function()
{
return view('home', array('nombre' => 'Javi'));
});