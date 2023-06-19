@extends("dashboard.layout")

@section("content")
<div class="w-full ml-64 bg-gray-100">

<!-- Main Content -->
<div class="relative w-full px-8">

    <div class="flex flex-col justify-between h-screen py-5">
        <div class="flex flex-col h-full">
            <div class="flex justify-between flex-grow-0 pr-1">
                <h1 class="font-bold text-gray-800">Dashboard</h1>
                <form method="POST" action="{{ route('logout') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="flex items-center h-full px-2 text-xs font-medium text-red-500 bg-red-100 rounded-full focus:outline-none">
                        Logout
                        <svg class="w-4 h-4 ml-1 stroke-current" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 6a7.75 7.75 0 1 0 10 0" /><line x1="12" y1="4" x2="12" y2="12" /></svg>
                    </button>
                </form>
            </div>

            <!-- Begin Dashboard cards -->
            <div class="flex flex-col h-full justify-between space-y-5 lg:space-y-7  pb-10 items-center">
                <!-- Top Row of Cards -->
                <div class="flex-wrap w-full gap-x-5 lg:gap-x-6 grid grid-cols-4 flex-1">

                    <div class="col-span-1">
                        <div class="flex items-center justify-center h-full px-6 py-4 mt-6 bg-white rounded-lg shadow-sm">
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col items-center text-gray-900">
                                    <h2 class="text-3xl font-bold text-center mb-1.5" id="time"></h2>
                                    <p class="text-xs text-gray-500" id="date"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <div class="relative w-1/3 w-full h-12 h-full px-6 py-4 mt-6 overflow-hidden bg-center bg-cover rounded-lg shadow-sm" style="background-image: url('https://cdn.devdojo.com/images/march2021/wordsmith.jpg')">
                            <div class="absolute inset-0 opacity-50 bg-gradient-to-br from-gray-800 to-gray-900"></div>
                            <div class="relative z-20 flex flex-col items-center justify-center w-full h-full text-gray-100">
                                <h2 class="px-4 py-2 text-3xl font-bold font-black text-white border-8 border-white shadow-lg">BLOGGERS<span class="font-light">.COM</span></h2>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Middle Row of Cards -->
                <div class="w-full gap-x-5 lg:gap-x-6 grid grid-cols-3 flex-1">

                    <div class="col-span-1">
                        <div class="flex items-center justify-center h-full px-6 py-4 mt-6 mr-2 bg-white rounded-lg shadow-sm">
                            <div>
                                <h2 class="w-full text-3xl font-bold text-center text-gray-900">5</h2>
                                <p class="w-full text-sm text-center text-gray-500">Posts</p>
                                <a href="/dashboard/posts/create" class="inline-block px-4 py-2 mt-5 text-sm font-medium text-gray-700 border border-gray-300 rounded">Add New</a>
                            </div>
                        </div>
                    </div>



                    <div class="col-span-1">
                        <div class="flex items-center justify-center h-full px-6 py-4 mt-6 mr-2 bg-white rounded-lg shadow-sm">
                            <div>
                                <h2 class="w-full text-3xl font-bold text-center text-gray-900">2</h2>
                                <p class="w-full text-sm text-center text-gray-500">Users</p>
                                <a href="/dashboard/posts/create" class="inline-block px-4 py-2 mt-5 text-sm font-medium text-gray-700 border border-gray-300 rounded">Add New</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Last Row of Cards -->
                <div class="w-full flex-1">

                    <div class="h-full">
                        <div class="flex items-center justify-center h-full px-6 py-4 mt-6 mr-2 bg-white rounded-lg shadow-sm">
                            <div>
                                <svg class="w-12 mb-5 mx-auto fill-current" xmlns=
<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"><defs><pattern id="USGS_8_Sewage_Disposal" data-name="USGS 8 Sewage Disposal" width="72" height="74.8" patternTransform="translate(-87.76 630.2) scale(2.7 2.7)" patternUnits="userSpaceOnUse" viewBox="0 0 72 74.8"><rect width="72" height="74.8" fill="none"/><line y1="73.95" x2="72" y2="73.95" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="72.25" x2="72" y2="72.25" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="70.55" x2="72" y2="70.55" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="68.85" x2="72" y2="68.85" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="67.15" x2="72" y2="67.15" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="65.45" x2="72" y2="65.45" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="63.75" x2="72" y2="63.75" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="62.05" x2="72" y2="62.05" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="60.35" x2="72" y2="60.35" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="58.65" x2="72" y2="58.65" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="56.95" x2="72" y2="56.95" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="55.25" x2="72" y2="55.25" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="53.55" x2="72" y2="53.55" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="51.85" x2="72" y2="51.85" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="50.15" x2="72" y2="50.15" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="48.45" x2="72" y2="48.45" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="46.75" x2="72" y2="46.75" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="45.05" x2="72" y2="45.05" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="43.35" x2="72" y2="43.35" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="41.65" x2="72" y2="41.65" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="39.95" x2="72" y2="39.95" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="38.25" x2="72" y2="38.25" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="36.55" x2="72" y2="36.55" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="34.85" x2="72" y2="34.85" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="33.15" x2="72" y2="33.15" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="31.45" x2="72" y2="31.45" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="29.75" x2="72" y2="29.75" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="28.05" x2="72" y2="28.05" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="26.35" x2="72" y2="26.35" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="24.65" x2="72" y2="24.65" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="22.95" x2="72" y2="22.95" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="21.25" x2="72" y2="21.25" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="19.55" x2="72" y2="19.55" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="17.85" x2="72" y2="17.85" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="16.15" x2="72" y2="16.15" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="14.45" x2="72" y2="14.45" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="12.75" x2="72" y2="12.75" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="11.05" x2="72" y2="11.05" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="9.35" x2="72" y2="9.35" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="7.65" x2="72" y2="7.65" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="5.95" x2="72" y2="5.95" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="4.25" x2="72" y2="4.25" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="2.55" x2="72" y2="2.55" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line y1="0.85" x2="72" y2="0.85" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/><line x1="-21.5" y1="7.65" x2="-10.25" y2="7.65" fill="none" stroke="#1f191a" stroke-linecap="square" stroke-width="0.3"/></pattern></defs><title>myspace-other</title><path d="M511.33,281.2c0,125.89-102,228.08-227.88,228.08S55.64,407.09,55.64,281.2,157.6,53.49,283.46,53.49,511.33,155.46,511.33,281.2Z" fill="url(#USGS_8_Sewage_Disposal)"/><path d="M494.42,264.28c0,125.89-102,228.08-227.88,228.08S38.73,390.16,38.73,264.28s102-227.71,227.81-227.71S494.42,138.53,494.42,264.28Z" fill="url(#USGS_8_Sewage_Disposal)"/><path d="M469,245.23c0,125.89-102,228.08-227.88,228.08S13.35,371.12,13.35,245.23s102-227.71,227.81-227.71S469,119.49,469,245.23Z" fill="#1f191a"/><path d="M462.7,234.66c0,125.89-102,228.08-227.88,228.08S7,360.54,7,234.66,109,6.95,234.82,6.95,462.7,108.91,462.7,234.66Z" fill="#333"/><path d="M469,245.23c0,125.89-102,228.08-227.88,228.08S13.35,371.12,13.35,245.23s102-227.71,227.81-227.71S469,119.49,469,245.23Z" fill="none" stroke="#1f191a" stroke-width="2.12"/><path d="M458.47,232.54c0,125.89-102,228.08-227.88,228.08S2.78,358.43,2.78,232.54,104.73,4.83,230.6,4.83,458.47,106.8,458.47,232.54Z" fill="#fff"/><path d="M458.47,232.54c0,125.89-102,228.08-227.88,228.08S2.78,358.43,2.78,232.54,104.73,4.83,230.6,4.83,458.47,106.8,458.47,232.54Z" fill="#fff"/><path d="M458.47,232.54c0,125.89-102,228.08-227.88,228.08S2.78,358.43,2.78,232.54,104.73,4.83,230.6,4.83,458.47,106.8,458.47,232.54Z" fill="none" stroke="#1f191a" stroke-width="4.23"/><path d="M332.36,140.23c27,0,48.32,21.29,48,48.23-.25,26-21.47,47.47-47.57,47.47-26.72,0-48.32-20.92-48.32-47.85S305.45,140.23,332.36,140.23Z" fill="#060606" fill-rule="evenodd"/><path d="M332.49,324.86H288.43c-3.32,0-7.26,1.12-8.7-4.27-5.76-21.41,4.57-50.73,23-63.74,16.65-11.27,34.42-13.4,52.63-3.76,19.46,10,29.54,26.92,29.85,48.73.56,27.68,3.07,22.53-22.09,23Z" fill="#060606" fill-rule="evenodd"/><path d="M220.21,158.77c24.28,0,43.43,18.92,43.5,42.71a43.07,43.07,0,0,1-43,43.34c-23.84,0-43.56-19.41-43.69-43S196.42,158.77,220.21,158.77Z" fill="#060606" fill-rule="evenodd"/><path d="M219.83,324.86H181.4c-3.63,0-7.2.5-8.64-4.64-6.51-23,9-53.73,31.86-62.13,27.35-10.52,59,8.9,62.52,38.34,3.63,28.43,3.63,28.43-24.41,28.43Z" fill="#060606" fill-rule="evenodd"/><path d="M157.5,214.13a38.76,38.76,0,0,1-38.8,39c-21.59-.37-39.12-17.92-38.87-39.34a38.48,38.48,0,0,1,38.68-38.2C140.35,175.05,157.5,192.33,157.5,214.13Z" fill="#060606" fill-rule="evenodd"/><path d="M119,324.86c-11.27,0-22.59-.51-34,0-7.45.5-9.33-2.51-9.33-9.65,0-14.29,1.57-27.69,11.77-38.71,12-12.4,26.41-17.92,43.62-12,17.77,5.39,27.79,18.42,30,36.45,3.13,23.93,2.63,23.93-21.28,23.93Z" fill="#060606" fill-rule="evenodd"/></svg><defs/><g fill-rule="evenodd"><path d="M0 0l69.245 120L96 73.633 53.51 0zM64 0l69.244 120L160 73.633 117.51 0zM127 0l37.5 65L202 0z"/></g></svg>
                                <p class="w-full text-sm text-center text-gray-500">BLOGGERS.COM</p>
                                <a href="/" class="inline-block px-4 py-2 mt-5 text-sm font-medium text-gray-700 border border-gray-300 rounded">Visit My Blog</a>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main Content -->
</div>
@endsection
