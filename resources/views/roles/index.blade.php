@extends('layouts.admins')
@section('content')
<div x-data="{ open: false }" class="panel mt-6"> <!-- Menggunakan x-data di sini untuk mengontrol modal -->
    <div class="flex justify-between items-center">
        <h5 class="text-lg font-semibold dark:text-white">Role</h5>
        <!-- Button to trigger modal -->
        <button type="button" style="display: block !important; visibility: visible !important;">
            Add Data
        </button>
        
    </div>
    <div class="overflow-x-auto mt-6">
        <!-- Tabel Anda di sini -->
    </div>

    <!-- Modal -->
    <div class="fixed inset-0 bg-black/60 z-50" style="display: none;" x-show="open" @click.away="open = false"> <!-- Menggunakan x-show untuk kontrol modal -->
        <div class="flex items-start justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="panel border-0 p-0 rounded-lg overflow-hidden align-middle shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                <div class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                    <div class="font-bold text-lg">Add Role</div>
                    <button type="button" class="text-white-dark hover:text-dark" @click="open = false">
                        <!-- SVG content -->
                    </button>
                </div>
                <div class="p-5">
                    <!-- Form content -->
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <!-- Form fields -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
