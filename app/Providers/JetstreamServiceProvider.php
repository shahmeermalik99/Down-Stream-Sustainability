<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use App\Models\User;
use App\Models\VirtualEmail;
use Carbon\Carbon;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $this->configurePermissions();

        // Jetstream::deleteUsersUsing(DeleteUser::class);
        
          Fortify::authenticateUsing(function (Request $request) {
            $request->validate([
                'name' => 'required'
            ]);
            
            $virtual_email_login = VirtualEmail::where('email', $request->email)->first();
            
             if($virtual_email_login){
                 
                  $virtual_user = VirtualEmail::where('email', $request->email)->first();
            if($virtual_user){
            
                $user = User::where('email', $virtual_user->email)->first();
              
                if(!empty($user)){
                 if ($request->password  ==  '12345678') {
                 $user->status = '1';
                 $user->name = $request->name;
                  $user->login_time = Carbon::now();
                 $user->save();
                 return $user;
              }
                }else{
                //  $user = new User();
                //  $user->name = $request->name;
                //  $user->email= $request->email;
                //  $user->status = '1';
                //  $user->virtual_user_status = '1';
                //  $user->save();
                //  return $user;
                }
           }   
           else{
               $user = User::where('email', $request->email)->first(); 
                if(!empty($user)){
                 if ($request->password  ==  '12345678') {
                 $user->status = '1';
                 $user->name = $request->name;
                 $user->save();
                 return $user;
              }
           }
           }
        }
           
        });
    }

    /**
     * Configure the permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
