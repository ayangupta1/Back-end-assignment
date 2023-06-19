@extends("dashboard.layout")
@section("content")
<div class="w-full ml-64 bg-gray-100">

            <!-- Main Content -->
            <div class="px-8 py-5 relative">
                <div class="max-w-4xl">
                    <div class="flex justify-between items-start">
                        <h1 class="font-bold text-gray-800">Posts</h1>
                        <a href="/dashboard/posts/create" class="px-4 py-2 uppercase text-xs font-bold bg-green-500 text-white rounded shadow">New Post</a>
                    </div>

                    <div class="flex flex-col min-w-full leading-normal shadow rounded-lg overflow-hidden mt-6">
                        <div class="cursor-pointer bg-white hover:bg-yellow-50 flex">
                            <div class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider w-3/6">Post Title</div>
                            <div class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider w-1/6">Created</div>
                            <div class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider w-1/6">Updated</div>
                            <div class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider w-1/6">Status</div>
                        </div>

                        <div class="cursor-pointer bg-white hover:bg-yellow-50 flex justify-between" onclick="window.location = '/dashboard/posts/edit/1'">
                            <div class="px-5 py-5 text-sm w-3/6">
                                <div class="flex flex-col">
                                    <p class="text-gray-900 whitespace-no-wrap">Sample post</p>
                                    <code class="text-gray-600 whitespace-no-wrap block text-xs mt-1">/test</code>
                                </div>
                            </div>
                            <div class="px-5 py-5 text-sm w-1/6">
                                <p class="text-gray-900 whitespace-no-wrap">January 14, 2023<span class="block text-gray-600">10:15 AM</span></p>
                            </div>
                            <div class="px-5 py-5 text-sm w-1/6">
                                <p class="text-gray-900 whitespace-no-wrap">January 14, 2023<span class="block text-gray-600">10:15 AM</span></p>
                            </div>
                            <div class="px-5 py-5 text-sm w-1/6">
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden="" class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                    <span class="relative">Published</span>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Main Content -->

        </div>



        @endsection