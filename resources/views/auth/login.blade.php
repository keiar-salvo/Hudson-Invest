@extends('layouts.app')
@section('content')
    <div class="main-container min-h-screen text-black dark:text-white-dark">
        <!-- start main content section -->
        <div x-data="auth">
            <div class="absolute inset-0">
  
            </div>
            <div class="relative flex min-h-screen items-center justify-center   px-6 py-10 dark:bg-[#060818] sm:px-16">
              
                <div class="relative flex w-full max-w-[1502px] flex-col justify-between overflow-hidden rounded-md bg-white/60 backdrop-blur-lg dark:bg-black/50 lg:min-h-[758px] lg:flex-row lg:gap-10 xl:gap-0">
                  
                       <div class="relative flex w-full flex-col items-center justify-center gap-6 px-4 pb-16 pt-6 sm:px-6 lg:max-w-[667px]">
                         <img src="assets/images/auth/Hudson Invest.png" alt="Cover Image" class="w-full">
                       </div>
                    <div class="relative flex w-full flex-col items-center justify-center gap-6 px-4 pb-16 pt-6 sm:px-6 lg:max-w-[667px]">
            
                        <div class="w-full max-w-[440px] lg:mt-16">
                            <div class="mb-10">
                                <h1 class="text-3xl font-extrabold uppercase !leading-snug text-primary md:text-4xl">Sign in</h1>
                                <p class="text-base font-bold leading-normal text-white-dark">Welcome to Hudson Invest</p>
                            </div>
                            <form class="space-y-5 dark:text-white" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div>
                                    <label for="Email">Username</label>
                                    <div class="relative text-white-dark">
                                        <input id="username" type="text" name="username" placeholder="Your Username " class="form-input ps-10 placeholder:text-white-dark">
                                        <span class="absolute start-4 top-1/2 -translate-y-1/2">
                                           <svg width="18" height="18" viewbox="0 0 18 18" fill="none">
                                                <circle cx="9" cy="4.5" r="3" fill="#888EA8"></circle>
                                                <path opacity="0.5" d="M15 13.125C15 14.989 15 16.5 9 16.5C3 16.5 3 14.989 3 13.125C3 11.261 5.68629 9.75 9 9.75C12.3137 9.75 15 11.261 15 13.125Z" fill="#888EA8"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <label for="Password">Password</label>
                                    <div class="relative text-white-dark">
                                        <input id="Password" type="password" name="password" placeholder="Enter Password" class="form-input ps-10 placeholder:text-white-dark">
                                        <span class="absolute start-4 top-1/2 -translate-y-1/2">
                                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none">
                                                <path opacity="0.5" d="M1.5 12C1.5 9.87868 1.5 8.81802 2.15901 8.15901C2.81802 7.5 3.87868 7.5 6 7.5H12C14.1213 7.5 15.182 7.5 15.841 8.15901C16.5 8.81802 16.5 9.87868 16.5 12C16.5 14.1213 16.5 15.182 15.841 15.841C15.182 16.5 14.1213 16.5 12 16.5H6C3.87868 16.5 2.81802 16.5 2.15901 15.841C1.5 15.182 1.5 14.1213 1.5 12Z" fill="currentColor"></path>
                                                <path d="M6 12.75C6.41421 12.75 6.75 12.4142 6.75 12C6.75 11.5858 6.41421 11.25 6 11.25C5.58579 11.25 5.25 11.5858 5.25 12C5.25 12.4142 5.58579 12.75 6 12.75Z" fill="currentColor"></path>
                                                <path d="M9 12.75C9.41421 12.75 9.75 12.4142 9.75 12C9.75 11.5858 9.41421 11.25 9 11.25C8.58579 11.25 8.25 11.5858 8.25 12C8.25 12.4142 8.58579 12.75 9 12.75Z" fill="currentColor"></path>
                                                <path d="M12.75 12C12.75 12.4142 12.4142 12.75 12 12.75C11.5858 12.75 11.25 12.4142 11.25 12C11.25 11.5858 11.5858 11.25 12 11.25C12.4142 11.25 12.75 11.5858 12.75 12Z" fill="currentColor"></path>
                                                <path d="M5.0625 6C5.0625 3.82538 6.82538 2.0625 9 2.0625C11.1746 2.0625 12.9375 3.82538 12.9375 6V7.50268C13.363 7.50665 13.7351 7.51651 14.0625 7.54096V6C14.0625 3.20406 11.7959 0.9375 9 0.9375C6.20406 0.9375 3.9375 3.20406 3.9375 6V7.54096C4.26488 7.51651 4.63698 7.50665 5.0625 7.50268V6Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-gradient !mt-6 w-full border-0 uppercase shadow-[0_10px_20px_-10px_rgba(67,97,238,0.44)]">
                                    Sign in
                                </button>
                            </form>
                            <a href="{{route('register')}}">Register</a>

                  
                
                        
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- end main content section -->
    </div>
@endsection
