# e-commerce

Before modifying a column, be sure to add the doctrine/dbal dependency to your  composer.json file.
composer require doctrine/dbal
****************************************issue 1********************
Base table or view not found: 1146 in laravel migrate 
use 
Schema::create('table_name', function ($table)  {
    // ...
});
instead of

Schema::table('table_name', function ($table)  {
    // ...
})
************************************************************************

**************************************issue 2************************
adding and retriving from database
use Illuminate\Support\Facades\DB;
//retrive
 $admin=DB::select('select * from admin_user');
return view('admin_user',['admin'=>$admin]);
//insert
    public function insert(Request $request){
        $name = $request->input('admin_name');
        $pass=$request->input('pass');
        DB::insert('insert into admin_user (user_id,password) values(?,?)',[$name,$pass]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
	

*********************************************************************
9789001541