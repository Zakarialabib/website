<?php

use function Livewire\Volt\layout;

layout('layouts.guest');
?>

<div class="container mx-auto px-4">
    <div class="grid grid-cols-3 justify-center items-center -mx-2">

        <div class="w-full px-2">
            <div class="bg-white rounded p-6 shadow-md mb-4">
                <img src="placeholder.jpg" alt="" class="mb-4 w-full h-auto">
                <h5 class="text-xl font-bold text-primary leading-tight mb-2"><a href="#"
                        class="hover:underline">Title goes here</a></h5>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate maiores nisi
                    saepe, dicta voluptatibus quia? Quidem enim repellat excepturi recusandae.</p>
                <div class="flex items-center mb-4">
                    <img src="profile_pic.jpg" alt=""
                        class="w-12 h-12 rounded-full object-cover object-center border border-gray-300 -mb-2">
                    <div class="ml-3 text-sm">
                        <p class="leading-none mb-1"><a href="#" class="text-gray-800 hover:underline">Author
                                Name</a></p>
                        <p class="leading-none text-gray-500"><time datetime="2023-04-09"> 1 day ago </time></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
