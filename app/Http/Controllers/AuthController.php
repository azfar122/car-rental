<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Models\Vehicle;
use App\Models\ManageBooking;
use App\Models\RegisterUser;
use App\Models\ManageTestimonials;
use App\Models\SellCar;
use Validator;


class AuthController extends Controller
{
    public function register(Request $request) {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'contact' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',

      
        ]);

        if ($validator->passes()) {

            $user = new RegisterUser;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->contact = $request->contact;
            $user->dob = $request->dob;
            $user->country = $request->country;
            $user->city = $request->city;
            $user->address = $request->address;
            $user->password = $request->password;
            $user->save();

          

            $successData = [
                "user" => $user
            ];

            return response()->json([
                'statusCode' => 200,
                'message' => 'User successfully Registered',
                'successData' => $successData
            ], 200);
        }

        return response()->json(['statusCode' => 400, 'message' => $validator->errors()->first()]);
    }
    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ], [
            'required' => 'The :attribute is required',
        ]);
        if ($validator->passes()) {
            $user = RegisterUser::where('id', $request->name)->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->contact = $request->contact;
            $user->save();

            if($user->save()){
                $successData = [
                    "user" => $user
                ];
    
                return response()->json([
                    'statusCode' => 200,
                    'message' => 'Profile Updated successfully',
                    'successData' => $successData
                ], 200);
            }else{
                return response()->json([
                    'statusCode' => 400,
                    'message' => 'Can,t Update Profile Try Again',
                   
                ], 200);
            }
            

           
        }

        return response()->json(['statusCode' => 400, 'message' => $validator->errors()->first()]);
        
    }


    public function Login(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->passes()) 
        {
            $email = $request->email;
            $password = $request->password;
                //    return $password;
                $user = RegisterUser::find($email);
                    $successData = [
                        "user" => $user
                    ];
                    return response()->json([
                        'statusCode' => 200,
                        'message' => 'User successfully Login',
                        'successData' => $successData
                    ], 200);

        }
                else{
                    return response()->json([
                        'statusCode' => 400,
                        'message' => 'Login Failed. Invalid email or password',
                    ], 200);
                } 
       
    }
    
    public function logout(Request $request) {
        // dd($request);
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Logout successfully!',
            'status_code' => 200
        ], 200);
    }
    
    public function book(Request $request) {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'vehicle' => 'required',
            'form_date' => 'required',
            'to_date' => 'required',
            'message' => 'required',
        ]);

        if ($validator->passes()) {

            $user = new ManageBooking;
            $user->name = $request->name;
            $user->vehicle = $request->vehicle;
            $user->form_date = $request->form_date;
            $user->to_date = $request->to_date;
            $user->status = "Processing";
            $user->message = $request->message;
            $user->save();
            $successData = [
                "user" => $user
            ];

            return response()->json([
                'statusCode' => 200,
                'message' => 'Car Booked Successfully',
                'successData' => $successData
            ], 200);
        }

        return response()->json(['statusCode' => 400, 'message' => $validator->errors()->first()]);
    }
    public function add_review(Request $request) {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->passes()) {

            $user = new ManageTestimonials;
            $user->title = $request->title;
            $user->description = $request->description;
            $user->save();
            $successData = [
                "user" => $user
            ];

            return response()->json([
                'statusCode' => 200,
                'message' => 'Add review Successfully',
                'successData' => $successData
            ], 200);
        }

        return response()->json(['statusCode' => 400, 'message' => $validator->errors()->first()]);
    }
    public function show_review(Request $request)
    {
        $get_users = ManageTestimonials::orderBy('id', 'desc')->get();
       if($get_users) {
        $successData = [
            "get_users" => $get_users
        ];

        return response()->json([
            'statusCode' => 200,
            'message' => 'Review Get successfully ',
            'successData' => $successData,
        ], 200);
        } else {
                return response()->json([
                    'statusCode' => 400,
                    'message' => 'Review Not Found',
                ],200);
        }
       
    }
    public function show_vehicle(Request $request)
    {
        $get_users = Vehicle::orderBy('id', 'desc')->get();
       if($get_users) {
        $successData = [
            "get_users" => $get_users
        ];

        return response()->json([
            'statusCode' => 200,
            'message' => 'Vehicle Get successfully ',
            'successData' => $successData,
        ], 200);
        } else {
                return response()->json([
                    'statusCode' => 400,
                    'message' => 'Vehicle Not Found',
                ],200);
        }
       
    }
    public function vehicle_details(Request $request)
    {
        $get_users = Vehicle::orderBy('id', 'desc')->get();
       if($get_users) {
        $successData = [
            "get_users" => $get_users
        ];

        return response()->json([
            'statusCode' => 200,
            'message' => 'Vehicle Get successfully ',
            'successData' => $successData,
        ], 200);
        } else {
                return response()->json([
                    'statusCode' => 400,
                    'message' => 'Vehicle Not Found',
                ],200);
        }
       
    }

    public function editUser(Request $request) {
        // dd($request);
        $editUser = User::where('email',  $request->email)->first();
        $editUser->name = $request->name;
        $editUser->mobile = $request->mobile;
        $editUser->brand_name = $request->brand_name;
        $editUser->name = $request->name;
        if($request->role){
            $editUser->role = $request->role;
        }else{
            $editUser->role = 'user'; 
        }

        
        if($editUser->save()) {
            $getAllUser = User::get();
            return response()->json($getAllUser);
        }
        
    }
    public function DeleteUser(Request $request)
    {
       $delteUser = User::where('email', $request->email)->first();
       if($delteUser->delete()) {
        return response()->json([
            'statusCode' => 200,
            'message' => 'User Delete successfully ',
            'successData' => $delteUser,
        ], 200);
        } else {
                return response()->json([
                    'statusCode' => 400,
                    'message' => 'Can,t Delete Please Try Again',
                ],200);
        }
    }

    public function resetPasswordRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $user = RegisterUser::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                'message' => 'User not found',
                'status_code' => 400
            ], 400);
        } else {
            $random = rand(111111, 999999);
            $user->verification_code = $random;
            if ($user->save()) {
                $userData = [
                    'email' => $user->email,
                    'full_name' => $user->name,
                    'random' => $random
                ];
                // dd($userData);
                Mail::send('emails.reset_password', $userData, function ($message) use ($userData) {
                    $message->from('no-reply@sqdelivery', 'Password Request');
                    $message->to($userData['email'], $userData['full_name'], $userData['random']);
                    $message->subject('Reset Password Request (Car Club)');
                });
    
                if (Mail::failures()) {
                    return response()->json([
                        'message' => 'Some error occurred, Please try again',
                        'status_code' => 500
                    ], 500);
                } else {
                    return response()->json([
                        'message' => 'We have sent a verification code to your email address',
                        'status_code' => 200
                    ], 200);
                }
            } else {
                return response()->json([
                    'message' => 'Some error occurred, Please try again',
                    'status_code' => 400
                ], 400);
            }
        }
    }
    public function resetPassword(Request $request)
    {
            //  return $request;
            $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'verification_code' => 'required|integer',
            'password' => 'required|confirmed|min:6',
        ]);
        // dd('here');
        $user = RegisterUser::where('email', $request->email)->where('verification_code',$request->verification_code)->first();
        if(!$user){
            return response()->json([
                'message' => 'User not found/Invalid code',
                'status_code' => 400
            ],400);
        }else {
            $user->password = $request->password;
            $user->verification_code = Null;

            if ($user->save()) {
                return response()->json([
                    'message' => 'Password updated successfully!',
                    'status_code' => 200
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Some error occurred, Please try again',
                    'status_code' => 400
                ], 400);
            }
        }
    }
   public function verifyPhoneRequest(Request $request)
   {
     $validator = $request->validate([
         'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
     ]);
     $phone = User::where('phone',$request->phone)->first();
     if(!$phone){
         return response()->json([
            'message' => 'Phone not found',
            'statusCode' => 400,
         ],400);
     }else{
         $random_otp = rand(11122,88999);
         $phone->phone_otpcode = $random_otp;
        if($phone->save()){
            return response()->json([
                'message' => 'We have sent a verification code to your Phone number',
                'statusCode'=> 200,
            ],200);
        }else{
            return response()->json([
                'message' => 'Some error occurred, Please try again',
                'statusCode' => 400
            ],400);
        }
     }

   }
   public function verifyPhoneNumber(Request $request)
   {
    $request->validate([
        'phone_otpcode' => 'required|digits:5',
    ]);
    $user = User::where('phone_otpcode',$request->phone_otpcode)->first();
    if(!$user){
        return response()->json([
            'message' => 'Invalid code',
            'status_code' => 400
        ],400);
    }else {
        $user->phone_otpcode = Null;
        if ($user->save()) {
            return response()->json([
                'message' => 'Your Are Verified successfully!',
                'status_code' => 200
            ], 200);
        } else {
            return response()->json([
                'message' => 'Some error occurred, Please try again',
                'status_code' => 400
            ], 400);
        }
    }
   }
   public function sell_car(Request $request) {
    // dd($request->all());

    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'model' => 'required',
        'year' => 'required',
        'ownr_name' => 'required',
        'capacity' => 'required',
        'type' => 'required',
        'price' => 'required',
        'contact' => 'required',
    ]);

    if ($validator->passes()) {

        $user = new SellCar;
        $user->name = $request->name;
        $user->model = $request->model;
        $user->year = $request->year;
        $user->ownr_name = $request->ownr_name;
        $user->capacity = $request->capacity;
        $user->type = $request->type;
        $user->capacity = $request->capacity;
        $user->price = $request->price;
        $user->contact = $request->contact;
        $user->save();
        $successData = [
            "user" => $user
        ];

        return response()->json([
            'statusCode' => 200,
            'message' => 'Sell Add Successfully',
            'successData' => $successData
        ], 200);
    }

    return response()->json(['statusCode' => 400, 'message' => $validator->errors()->first()]);
}
}