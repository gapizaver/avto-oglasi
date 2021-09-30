<div
class="notification w-full text-sm text-left text-white bg-green-500 h-12"
role="alert"
>
    <div class="flex md:max-w-5xl mx-auto justify-between items-center h-full">
        <div class="flex items-center">
            <svg class="w-6 h-6 mx-2 stroke-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            <span class="font-bold">{{ $slot }}</span>
        </div>

        <svg class="remove-notification cursor-pointer hover:text-gray-100" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </div>
</div>
