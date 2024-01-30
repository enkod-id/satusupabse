<div class="dropdown flex-shrink-0" x-data="dropdown" @click.outside="open = false">
    <a href="javascript:;" class="group relative" @click="toggle()">
        <span
            ><img
                class="h-9 w-9 rounded-full object-cover saturate-50 group-hover:saturate-100"
                src="assets/images/user-profile.jpeg"
                alt="image"
        /></span>
    </a>
    <ul
        x-cloak
        x-show="open"
        x-transition
        x-transition.duration.300ms
        class="top-11 w-[230px] !py-0 font-semibold text-dark ltr:right-0 rtl:left-0 dark:text-white-dark dark:text-white-light/90"
    >
        <li>
            <div class="flex items-center px-4 py-4">
                <div class="flex-none">
                    <img class="h-10 w-10 rounded-md object-cover" src="assets/images/user-profile.jpeg" alt="image" />
                </div>
                <div class="truncate ltr:pl-4 rtl:pr-4">
                    <h4 class="text-base">
                        John Doe<span class="rounded bg-success-light px-1 text-xs text-success ltr:ml-2 rtl:ml-2">Pro</span>
                    </h4>
                    <a
                        class="text-black/60 hover:text-primary dark:text-dark-light/60 dark:hover:text-white"
                        href="javascript:;"
                        >johndoe@gmail.com</a
                    >
                </div>
            </div>
        </li>
        <li>
            <a href="users-profile.html" class="dark:hover:text-white" @click="toggle">
                <svg
                    class="h-4.5 w-4.5 shrink-0 ltr:mr-2 rtl:ml-2"
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                    <path
                        opacity="0.5"
                        d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                    />
                </svg>
                Profile</a
            >
        </li>
        
        <li class="border-t border-white-light dark:border-white-light/10">
            <form action="{{ route('logout') }}" method="POST" class="!py-3 text-danger">
                @csrf <!-- CSRF token is required for POST requests -->
                
                <button type="submit" class="flex items-center focus:outline-none">
                    <svg
                        class="h-4.5 w-4.5 shrink-0 rotate-90 ltr:mr-2 rtl:ml-2"
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        opacity="0.5"
                        d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    />
                    <path
                        d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
                Sign Out
            </button>
        </form>
        </li>
    
    </ul>
</div>